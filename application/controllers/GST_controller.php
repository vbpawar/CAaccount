<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class GST_controller extends CI_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('ShopModel', 'smodel');
        $this->load->model('GSTModel', 'gstmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('WalletModel', 'service');
        $this->load->model('PartnerModel', 'parmodel');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_gst(){
        $result = $this->pfmodel->get_details();
        if ($result['status']) {
            $response = array(
                'Message' => 'Udyom Aadhar Details loaded successfully',
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
    public function add_gst_form()
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
       

        $shop_details = array(
            'premise_name ' => $this->input->post('s_premise_name'),
            'flat_number' => $this->input->post('s_flat_number'),
            'road' => $this->input->post('s_road'),
            'area' => $this->input->post('s_area'),
            'village' => $this->input->post('s_village'),
            'taluka' => $this->input->post('s_taluka'),
            'district' => $this->input->post('s_district'),
            'state' => $this->input->post('s_state'),
            'pincode' => $this->input->post('s_pincode')
        );
       
           
               $sdetails = array(
                'shop_name'=>$this->input->post('shop_name'),
                'office_contact'=>$this->input->post('office_contact'),
                'office_mailid'=>$this->input->post('office_mailid'),
                'buss_start_date'=>$this->input->post('buss_start_date')
               );
           
        
            $gst_details = array(
                'userid' => $this->input->post('userid'),
                'nature_of_buss'=>$this->input->post('nature_of_buss'),
                'buss_type'=>$this->input->post('buss_type'),
                'male'=>$this->input->post('male'),
                'female'=>$this->input->post('female'),
                'gst_type'=>$this->input->post('gst_type')
            );
          
            $partner_data = $this->input->post('partnerdata');
            $partner_data= json_decode($partner_data);
            $testdata = array(
                'pdetails'=>$pdetails,
                'rdetails'=>$rdetails,
                'partnerdata'=>$partner_data,
                'sdetails'=> $shop_details,
                'shop_details'=>$sdetails,
                'main'=>$gst_details
            );
            $result = $this->gstmodel->create_gst($testdata);
            if ($result['status']) {
                $id       = $result['gid'];
               
                if (!empty($_FILES['adhar']['name']) && !empty($_FILES['pan']['name']) && !empty($_FILES['passport']['name'])) {
                    $first = array(
                        'name'=>'Aadhar',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['adhar']['name'],
                        'file'=>$_FILES['adhar']['tmp_name'],
                        'table'=>'udyog_docs',
                        'folder'=>'udyog',
                        'prim'=>'uid'
                    );
                    $second = array(
                        'name'=>'PAN',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['pan']['name'],
                        'file'=>$_FILES['pan']['tmp_name'],
                        'table'=>'udyog_docs',
                        'folder'=>'udyog',
                        'prim'=>'uid'
                    );
                    $third = array(
                        'name'=>'CANCELLED CHECK',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['passport']['name'],
                        'file'=>$_FILES['passport']['tmp_name'],
                        'table'=>'udyog_docs',
                        'folder'=>'udyog',
                        'prim'=>'uid'
                    );
                    if ($this->docs->uploaddocs($first)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                    if (!empty($_FILES['electricity']['name'])) {
                        $four = array(
                            'name'=>'Electricity Bill',
                            'userid'=>$userid,
                            'id'=>$id,
                            'filename'=>$_FILES['electricity']['name'],
                            'file'=>$_FILES['electricity']['tmp_name'],
                            'table'=>'udyog_docs',
                            'folder'=>'udyog',
                            'prim'=>'uid'
                        );
                        if ($this->docs->uploaddocs($four)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['otherdoc']['name'])) {
                        $five = array(
                            'name'=>'OTHER DOCUMENTS',
                            'userid'=>$userid,
                            'id'=>$id,
                            'filename'=>$_FILES['otherdoc']['name'],
                            'file'=>$_FILES['otherdoc']['tmp_name'],
                            'table'=>'udyog_docs',
                            'folder'=>'udyog',
                            'prim'=>'uid'
                        );
                        if ($this->docs->uploaddocs($five)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                }
                $response = array(
                    'Message' => 'Udyog Details added successfully',
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

    public function get_udyog_docs()
    {
        $id   = $this->input->post('uid');
        $result = $this->docs->get_udyogdocs($id);
        echo json_encode($result);
    }
    public function update_status()
    {
        $id    = $this->input->post('uid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of Udyom Aadhar service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->umodel->update_status($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('UDYOG', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('UDYOG', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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