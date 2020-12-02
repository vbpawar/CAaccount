<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Udyog_controller extends CI_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('BankModel', 'bmodel');
        $this->load->model('ShopModel', 'smodel');
        $this->load->model('Udyog_Model', 'umodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('WalletModel', 'service');
        $this->load->model('PartnerModel', 'parmodel');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_udyog(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->umodel->get_details($roleid,$userid);
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('partners'=>[]);
               $p_details= $this->umodel->get_partners_details($result['data'][$i]['uid']); 
               if($p_details['status']){
                $temp = array('partners'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Udyom Aadhar Details loaded successfully',
                'Data' => $records,
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
    public function add_udyog_form()
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
               $sdetails = array(
                'shop_name'=>$this->input->post('shop_name'),
                'office_contact'=>$this->input->post('office_contact'),
                'office_mailid'=>$this->input->post('office_mailid'),
                'buss_start_date'=>$this->input->post('buss_start_date')
               );
            
            $sid = $this->smodel->add_details($sdetails);
            if($sid['status']){
                $sid = $sid['sid'];
            }
        
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
                'sid'=>$sid,
                'nature_of_buss'=>$this->input->post('nature_of_buss'),
                'buss_type'=>$this->input->post('buss_type'),
                'turn_over_amt'=>$this->input->post('turn_over_amt'),
                'gst_number'=>$this->input->post('gst_number'),
                'male'=>$this->input->post('male'),
                'female'=>$this->input->post('female')
            );
            $partner_data = $this->input->post('partnerdata');
            $partner_data= json_decode($partner_data);
            $result = $this->umodel->add_details($data);
            if ($result['status']) {
                $id       = $result['uid'];
                if(!empty($partner_data)){
                    foreach ($partner_data as $contact)
                    {
                        $partners = array(
                            'partner_name' => $contact->p_partner_name,
                            'aadhar_number' => $contact->p_aadhar_number,
                            'pan_number' => $contact->p_pan_number,
                            'contact_number'=>$contact->p_contact_number,
                            'emailid'=>$contact->p_emailid
                            );
                            $partnerid = $this->parmodel->add_details($partners);
                        if($partnerid['status']){
                            $shop_partners=array( 
                                'partnerid' => $partnerid['partnerid'],
                                'uid'=>$id
                            );
                            $this->umodel->add_partner_details($shop_partners);
                            }
                    }
                }
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
        } else {
            $response = array(
                'Message' => 'Check Parameters',
                'Responsecode' => 302
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
        $result = $this->umodel->updatestatus($id, $data);
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
   
    public function get_update_docs()
    {
        $pfid   = $this->input->post('rowid');
        $result = $this->docs->get_update_remarks_docs($pfid,'UDYOG');
        echo json_encode($result);
    }
} 