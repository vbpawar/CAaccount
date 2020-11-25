<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Pan_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('Pan_model', 'umodel');
        $this->load->model('DocsModel', 'docs');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_pan(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->umodel->get_details($roleid,$userid);
        if ($result['status']) {
            $response = array(
                'Message' => 'PAN Details loaded successfully',
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
    public function add_pan_form()
    { 
        //Residential details
        $rdetails = array(
            'premise_name' => $this->input->post('premise_name'),
            'flat_number' => $this->input->post('flat_number'),
            'road' => $this->input->post('road'),
            'area' => $this->input->post('area'),
            'village' => $this->input->post('village'),
            'taluka' => $this->input->post('taluka'),
            'district' => $this->input->post('district'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode')
        );
    
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        
        if ($rid['status']) {
            $rid = $rid['rid'];
            $pdetails = array(
                'app_type' => $this->input->post('app_type'),
                'category' => $this->input->post('category'),
                'pan_number' => $this->input->post('pan_number'),
                'aadhar_name' => $this->input->post('aadhar_name'),
                'contact_number' => $this->input->post('contact_number'),
                'emailid' => $this->input->post('emailid'),
               'userid' => $this->input->post('userid'),
               'rid'=>$rid
            );
            $result = $this->umodel->add_details($pdetails);
            if ($result['status']) {
                $id = $result['uid'];
                $document = 'Document not uploaded';
                if (!empty($_FILES['doc']['name']) && !empty($_FILES['otherdoc']['name'])) {
                    if ($this->uploaddocs('Document', $id, $pdetails['userid'], $_FILES['doc']['name'], $_FILES['doc']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('Other Document', $id,$pdetails['userid'], $_FILES['otherdoc']['name'], $_FILES['otherdoc']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'PAN Details added successfully',
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

    public function update_pan_form()
    {
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
        $panid=$this->input->post('panid');
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid,$rdetails);
        }
        if ($rid) {
           
            $pdetails = array(
                'app_type' => $this->input->post('app_type'),
                'category' => $this->input->post('category'),
                'pan_number' => $this->input->post('pan_number'),
                'aadhar_name' => $this->input->post('aadhar_name'),
                'contact_number' => $this->input->post('contact_number'),
                'emailid' => $this->input->post('emailid'),
               'userid' => $this->input->post('userid'),
               'status'=>$this->input->post('status'),
               'rid'=>$rid
            );
            $result = $this->umodel->update_details($panid,$pdetails);
            if ($result['status']) {
                $response = array(
                    'Message' => 'PAN Details updated successfully',
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

    public function uploaddocs($doctype, $panid,$userid, $filename, $file)
    {
        $ext    = pathinfo($filename, PATHINFO_EXTENSION);
        $data   = array(
            'extension' => $ext,
            'userid' => $userid,
            'panid' => $panid,
            'doctype' => $doctype
        );
        $result = $this->docs->add_pan_docs($data);
        if ($result) {
            $imgid      = $result['docid'];
            $sourcePath = $file; // Storing source path of the file in a variable
            $targetPath = "./documents/pan/" . $imgid . "." . $ext; // Target path where file is to be stored
            if (move_uploaded_file($sourcePath, $targetPath)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function update_status()
    {
        $panid   = $this->input->post('panid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        $result = $this->pfmodel->updatepanstatus($panid, $data);
        if ($result['status']) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('PAN', $panid, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('PAN', $panid, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
    public function getpandocs()
    {
        $panid   = $this->input->post('panid');
        $result = $this->docs->get_pan_docs($panid);
        echo json_encode($result);
    }

    public function get_update_docs()
    {
        $pfid   = $this->input->post('rowid');
        $result = $this->docs->getremarkupdate($pfid,'PAN');
        echo json_encode($result);
    }
    
} 