<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class FoodLicence extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FoodLicenceModel', 'dmodel');
        $this->load->model('DocsModel','docs');
        $this->load->model('WalletModel','service');
    }
    private $response = null;
    private $records = null;
    
    
    public function get_all_food_licence()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->dmodel->get_details($roleid,$userid);
        if ($result['status']) {
            $response = array(
                'Message' => 'Food Licence Details loaded successfully',
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
    public function add_food_lice_form()
    {
        //personal details
        $data = array(
            'mobile_number' => $this->input->post('mob_no'),
            'fax' => $this->input->post('fax'),
            'emailid' => $this->input->post('email'),
            'mobile_alternate' => $this->input->post('alternate_no'),
            'noofyear' => $this->input->post('male'),
            'telephone' => $this->input->post('tel_no'),
            'faddress' => $this->input->post('address'),
            'fstate' => $this->input->post('state'),
            'district' => $this->input->post('zone'),
            'app_type' => $this->input->post('app_type'),
            'subdivision' => $this->input->post('division'),
            'village'=>$this->input->post('village'),
            'pincode' => $this->input->post('pincode'),
            'landmark' => $this->input->post('landmark'),
            'userid' => $this->input->post('userid')
        ); 
            $result = $this->dmodel->add_details($data);
            if ($result['status']) {
                $id       = $result['foodid'];
                $document = 'Document not uploaded';
                if (!empty($_FILES['adhar']['name']) && !empty($_FILES['identity']['name']) && !empty($_FILES['passport']['name'])) {
                    if ($this->uploaddocs('Photo', $id, $_FILES['adhar']['name'], $_FILES['adhar']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('Identity Proof', $id, $_FILES['identity']['name'], $_FILES['identity']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->uploaddocs('Other Documents', $id, $_FILES['passport']['name'], $_FILES['passport']['tmp_name'])) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'Food Licence added successfully',
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
        echo json_encode($response);
    }
    
    
    public function uploaddocs($doctype, $did, $filename, $file)
    {
        $ext    = pathinfo($filename, PATHINFO_EXTENSION);
        $data   = array(
            'extension' => $ext,
            'userid' => $_SESSION['Data']['userid'],
            'foodid' => $did,
            'doctype' => $doctype
        );
        $result = $this->dmodel->add_digital_docs($data);
        if ($result) {
            $imgid      = $result['foodid'];
            $sourcePath = $file; // Storing source path of the file in a variable
            $targetPath = "./documents/food/" . $imgid . "." . $ext; // Target path where file is to be stored
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
        $did    = $this->input->post('foodid');
        $result = $this->dmodel->get_digital_docs($did);
        echo json_encode($result);
    }
    public function update_status()
    {
        $did    = $this->input->post('pfid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of Food Licence services which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->dmodel->updatedigitalstatus($did, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('FOOD', $did, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('FOOD', $did, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
    public function get_update_docs()
    {
        $pfid   = $this->input->post('rowid');
        $result = $this->docs->get_update_remarks_docs($pfid,'FOOD');
        echo json_encode($result);
    }
} 