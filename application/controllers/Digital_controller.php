<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Digital_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DigitalModel', 'dmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('WalletModel','service');
    }
    private $response = null;
    private $records = null;
    
    
    public function get_all_digital()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->dmodel->get_details($roleid,$userid);
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
    public function add_digital_form()
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
        
        if (!empty($pdetails)) {
            $pid = $this->pmodel->add_details($pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        
        $userid = $this->input->post('userid');
        
        if ($pid['status'] && $rid['status']) {
            $pid = $pid['pid'];
            $rid = $rid['rid'];
            
            $data = array(
                'userid' => $userid,
                'class' => $this->input->post('class'),
                'nature_of_buss' => $this->input->post('nature_of_buss'),
                'trade_name' => $this->input->post('trade_name'),
                'place_of_buss' => $this->input->post('place_of_buss'),
                'pid' => $pid,
                'rid' => $rid
            );
            
            $result = $this->dmodel->add_details($data);
            if ($result['status']) {
                $id       = $result['did'];
                $document = 'Document not uploaded';
                if (!empty($_FILES['adhar']['name']) && !empty($_FILES['pan']['name']) && !empty($_FILES['pass']['name'])) {
                    if ($this->uploaddocs('Aadhar', $id, $_FILES['adhar']['name'], $_FILES['adhar']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('PAN', $id, $_FILES['pan']['name'], $_FILES['pan']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('Passport', $id, $_FILES['pass']['name'], $_FILES['pass']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'Digital Signature added successfully',
                    'Data' => $result['data'],
                    'Document' => $document,
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
    
    public function update_digital_form()
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
        if (!empty($pdetails)) {
            $pid = $this->input->post('pid');
            $pid = $this->pmodel->update_details($pid, $pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid, $rdetails);
        }
        
        $userid = $this->input->post('userid');
        $did    = $this->input->post('did');
        if ($pid && $rid) {
            
            $data   = array(
                'userid' => $userid,
                'class' => $this->input->post('class'),
                'nature_of_buss' => $this->input->post('nature_of_buss'),
                'trade_name' => $this->input->post('trade_name'),
                'place_of_buss' => $this->input->post('place_of_buss'),
                'pid' => $pid,
                'rid' => $rid,
                'status' => $this->input->post('status')
            );
            $result = $this->dmodel->update_details($did, $data);
            if ($result['status']) {
                $response = array(
                    'Message' => 'Digital Signature Details updated successfully',
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
    
    public function uploaddocs($doctype, $did, $filename, $file)
    {
        $ext    = pathinfo($filename, PATHINFO_EXTENSION);
        $data   = array(
            'extension' => $ext,
            'userid' => 1,
            'did' => $did,
            'doctype' => $doctype
        );
        $result = $this->docs->add_digital_docs($data);
        if ($result) {
            $imgid      = $result['docid'];
            $sourcePath = $file; // Storing source path of the file in a variable
            $targetPath = "./documents/digital/" . $imgid . "." . $ext; // Target path where file is to be stored
            if (move_uploaded_file($sourcePath, $targetPath)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function getdigitaldocs()
    {
        $did    = $this->input->post('did');
        $result = $this->docs->get_digital_docs($did);
        echo json_encode($result);
    }
    public function update_status()
    {
        $did    = $this->input->post('did');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of Digital signature services which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->dmodel->updatedigitalstatus($did, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('Digital', $did, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('Digital', $did, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
            }
            $response = array(
                'Message' => 'Status updated successfully',
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
        if ($result['status']) {
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