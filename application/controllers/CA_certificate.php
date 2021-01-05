<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class CA_certificate extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('CertificateModel', 'imodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;

    public function get_all_certificates()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->imodel->get_details($roleid,$userid);
        if ($result['status']) {
            $response = array(
                'Message' => 'Certificates Details loaded successfully',
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
    public function add_cert_form()
    {

         //personal details
         $pdetails = array(
            'pan_name ' => $this->input->post('pan_name'),
            'pan_number' => $this->input->post('pan_number'),
            'aadhar_name' => $this->input->post('aadhar_name'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'contact_number' => $this->input->post('contact_number'),
            'emailid' => $this->input->post('emailid')
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
            $main_details = array(
                'userid'=>$this->input->post('userid'),
                'c_type'=>$this->input->post('cert_type'),
                'c_value' => $this->input->post('cert_type'),
                'buss_address' => $this->input->post('buss_address')
            );
            $sdetails = array(
                'shop_name'=>$this->input->post('shop_name'),
                'office_contact'=>$this->input->post('office_contact'),
                'office_mailid'=>$this->input->post('office_mailid')
               );
        $testdata = array(
            'pdetails'=>$pdetails,
            'rdetails'=>$rdetails,
            'shopdetails'=>$sdetails,
            'main'=>$main_details
        );
            $result = $this->imodel->create_certificate($testdata);
            if ($result['status']) {
                $id       = $result['certid'];
                $document = 'Document not uploaded';
              
                if(!empty($_FILES['pan']['name'])){
                    $third = array(
                        'name'=>'PAN Card',
                        'userid'=>$main_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['pan']['name'],
                        'file'=>$_FILES['pan']['tmp_name'],
                        'table'=>'certificates_docs',
                        'folder'=>'certificates',
                        'prim'=>'certid'
                    );  
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['aadhar']['name'])){
                    $third = array(
                        'name'=>'Aadhar Card',
                        'userid'=>$main_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['aadhar']['name'],
                        'file'=>$_FILES['aadhar']['tmp_name'],
                        'table'=>'certificates_docs',
                        'folder'=>'certificates',
                        'prim'=>'certid'
                    );   
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['bproof']['name'])){
                    $third = array(
                        'name'=>'Aadhar Card',
                        'userid'=>$main_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['bproof']['name'],
                        'file'=>$_FILES['bproof']['tmp_name'],
                        'table'=>'certificates_docs',
                        'folder'=>'certificates',
                        'prim'=>'certid'
                    );   
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'Certificate Form added successfully',
                    'Data' => $result,
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
    

    public function get_certificate_docs()
    {
        $id   = $this->input->post('id');
        $result = $this->docs->cert_docs($id);
        echo json_encode($result);
    }
    public function update_status()
    {
        $id    = $this->input->post('pfid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of CA Certificate service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->imodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('CERT', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('CERT', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'CERT');
        echo json_encode($result);
    }
}
