<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class PF_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('BankModel', 'bmodel');
        $this->load->model('PFModel', 'pfmodel');
        $this->load->model('DocsModel', 'docs');
    }
    private $response = null;
    private $records = null;
    
    
    public function get_all_pf()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->pfmodel->get_details($roleid,$userid);
        if ($result['status']) {
            $response = array(
                'Message' => 'PF Details loaded successfully',
                'Data' => $result['data'],
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
        }
        echo json_encode($response);
    }
    //create API for PF master
    public function add_pf_form()
    {
        //personal details
        $pdetails = array(
            'pan_name ' => $this->input->post('pan_name'),
            'pan_number' => $this->input->post('pan_number'),
            'aadhar_name' => $this->input->post('aadhar_name'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'contact_number' => $this->input->post('contact_number'),
            'emailid' => $this->input->post('emailid'),
            'dob' => $this->input->post('dob')
        );
        
        //Residential details
        $rdetails = array(
            'premise_name ' => $this->input->post('premise_name'),
            'flat_number' => $this->input->post('flat_number'),
            'road' => $this->input->post('road'),
            'area' => $this->input->post('area'),
            'village' => $this->input->post('village'),
            'taluka' => $this->input->post('taluka'),
            'district' => $this->input->post('district'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode')
        );
        //bank details
        $bdetails = array(
            'bank_name ' => $this->input->post('bank_name'),
            'ac_number' => $this->input->post('ac_number'),
            'ifsc_number' => $this->input->post('ifsc_number')
        );
        if (!empty($pdetails)) {
            $pid = $this->pmodel->add_details($pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        if (!empty($bdetails)) {
            $bid = $this->bmodel->add_details($bdetails);
        }
        
        $userid = $this->input->post('userid');
        
        if ($pid['status'] && $rid['status'] && $bid['status']) {
            $pid = $pid['pid'];
            $rid = $rid['rid'];
            $bid = $bid['bid'];
            
            $data = array(
                'userid' => $userid,
                'pid' => $pid,
                'rid' => $rid,
                'bid' => $bid,
                'uan_number' => $this->input->post('uan_number'),
                'uan_password' => $this->input->post('uan_password')
            );
            
            $result = $this->pfmodel->add_details($data);
            if ($result['status']) {
                $id       = $result['pfid'];
                $document = 'Document not uploaded';
                if (!empty($_FILES['adhar']['name']) && !empty($_FILES['pan']['name']) && !empty($_FILES['pas']['name'])) {
                    if ($this->uploaddocs('Aadhar', $id, $_FILES['adhar']['name'], $_FILES['adhar']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('PAN', $id, $_FILES['pan']['name'], $_FILES['pan']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('Passbook', $id, $_FILES['pas']['name'], $_FILES['pas']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'PF Details added successfully',
                    'Data' => $result['data'],
                    'document' => $document,
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => 'Try again',
                    'Responsecode' => 402
                );
            }
        } else {
            $response = array(
                'Message' => 'Check Parameters',
                'Responsecode' => 302
            );
            
        }
        echo json_encode($response);
    }
    
    public function update_pf_form()
    {
        //personal details
        $pdetails = array(
            'pan_name ' => $this->input->post('pan_name'),
            'pan_number' => $this->input->post('pan_number'),
            'aadhar_name' => $this->input->post('aadhar_name'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'contact_number' => $this->input->post('contact_number'),
            'emailid' => $this->input->post('emailid'),
            'dob' => $this->input->post('dob')
        );
        
        //Residential details
        $rdetails = array(
            'premise_name ' => $this->input->post('premise_name'),
            'flat_number' => $this->input->post('flat_number'),
            'road' => $this->input->post('road'),
            'area' => $this->input->post('area'),
            'village' => $this->input->post('village'),
            'taluka' => $this->input->post('taluka'),
            'district' => $this->input->post('district'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode')
        );
        //bank details
        $bdetails = array(
            'bank_name ' => $this->input->post('bank_name'),
            'ac_number' => $this->input->post('ac_number'),
            'ifsc_number' => $this->input->post('ifsc_number')
        );
        if (!empty($pdetails)) {
            $pid = $this->input->post('pid');
            $pid = $this->pmodel->update_details($pid, $pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid, $rdetails);
        }
        if (!empty($bdetails)) {
            $bid = $this->input->post('bid');
            $bid = $this->bmodel->update_details($bid, $bdetails);
        }
        
        $userid = $this->input->post('userid');
        $status = $this->input->post('status');
        $pfid   = $this->input->post('pfid');
        if ($pid && $rid && $bid) {
            
            $data   = array(
                'status' => $status
            );
            $result = $this->pfmodel->update_details($pfid, $data);
            if ($result['status']) {
                $response = array(
                    'Message' => 'PF Details updated successfully',
                    'Data' => $result['data'],
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => 'Try again',
                    'Responsecode' => 402
                );
            }
        } else {
            $response = array(
                'Message' => 'Check Parameters',
                'Responsecode' => 302
            );
            
        }
        echo json_encode($response);
    }
    
    public function uploaddocs($doctype, $pfid, $filename, $file)
    {
        $ext    = pathinfo($filename, PATHINFO_EXTENSION);
        $data   = array(
            'extension' => $ext,
            'userid' => 1,
            'pfid' => $pfid,
            'doctype' => $doctype
        );
        $result = $this->docs->add_pf_docs($data);
        if ($result) {
            $imgid      = $result['docid'];
            $sourcePath = $file; // Storing source path of the file in a variable
            $targetPath = "./documents/pf/" . $imgid . "." . $ext; // Target path where file is to be stored
            if (move_uploaded_file($sourcePath, $targetPath)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function getpfdocs()
    {
        $pfid   = $this->input->post('pfid');
        $result = $this->docs->get_pf_docs($pfid);
        echo json_encode($result);
    }
    public function update_status()
    {
        $pfid   = $this->input->post('pfid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        $result = $this->pfmodel->updatepfstatus($pfid, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('PF', $pfid, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('PF', $pfid, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
            }
            $response = array(
                'Message' => 'Status updated successfully',
                'Data' => $document,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Try Again',
                'Responsecode' => 204
            );
        }
        echo json_encode($response);
    }
    
    public function uploadremarks($service, $rowid, $filename, $file)
    {
        $ext    = pathinfo($filename, PATHINFO_EXTENSION);
        $data   = array(
            'service' => $service,
            'rowid' => $rowid,
            'extension' => $ext
        );
        $result = $this->docs->add_remark_docs($data);
        if ($result) {
            $imgid      = $result['remarkid'];
            $sourcePath = $file; // Storing source path of the file in a variable
            $targetPath = "./documents/remarks/" . $imgid . "." . $ext; // Target path where file is to be stored
            if (move_uploaded_file($sourcePath, $targetPath)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
} 