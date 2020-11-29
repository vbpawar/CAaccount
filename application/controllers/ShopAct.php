<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class ShopAct extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('ShopModel', 'smodel');
        $this->load->model('ShopActModel', 'shmodel');
        $this->load->model('PartnerModel', 'parmodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;

    public function get_all_shopact()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->shmodel->get_details($roleid,$userid);
       
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('partners'=>[]);
               $p_details= $this->shmodel->get_partners_details($result['data'][$i]['shopactid']); 
               if($p_details['status']){
                $temp = array('partners'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Shop Act Details loaded successfully',
                'Data' =>$records,
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
    public function add_shop_form()
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

         //Residential details of shop
         $shop_details = array(
            'premise_name' => $this->input->post('s_premise_name'),
            'flat_number' => $this->input->post('s_flat_number'),
            'road' => $this->input->post('s_road'),
            'area' => $this->input->post('s_area'),
            'village' => $this->input->post('s_village'),
            'taluka' => $this->input->post('s_taluka'),
            'district' => $this->input->post('s_district'),
            'state' => $this->input->post('s_state'),
            'pincode' => $this->input->post('s_pincode')
        );
        if (!empty($shop_details)) {
            $shopdetails = $this->rmodel->add_details($shop_details);
            if ($shopdetails['status']) {
               $r_id = $shopdetails['rid'];
               $sdetails = array(
                'rid'=>$r_id,
                'shop_name'=>$this->input->post('shop_name'),
                'office_contact'=>$this->input->post('office_contact'),
                'office_mailid'=>$this->input->post('office_mailid'),
                'buss_start_date'=>$this->input->post('buss_start_date')
               );
            }
            $sid = $this->smodel->add_details($sdetails);
            if($sid['status']){
                $sid = $sid['sid'];
            }
        }
        
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
                'natureofbuss' => $this->input->post('nature_of_buss'),
                'busstype' => $this->input->post('busstype'),
                'men'=>$this->input->post('men'),
                'women'=>$this->input->post('women'),
                'pid' => $pid,
                'rid' => $rid,
                'sid' =>$sid
            );
            $partner_data = $this->input->post('partnerdata');
           $partner_data= json_decode($partner_data);
            $result = $this->shmodel->add_details($data);
            if ($result['status']) {
                $id       = $result['shopactid'];
                //stored partner details
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
                    'shopactid'=>$id
                );
                $this->shmodel->add_partner_details($shop_partners);
                }
        }
    }
       
                $document = 'Document not uploaded';
                if (!empty($_FILES['adhar']['name']) && !empty($_FILES['pan']['name']) && !empty($_FILES['passport']['name']) && !empty($_FILES['signature']['name']) && !empty($_FILES['shop_photo']['name'])
                && !empty($_FILES['declaration']['name']) && !empty($_FILES['otherdoc']['name'])) {
                  
                    $first = array(
                        'name'=>'Aadhar',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['adhar']['name'],
                        'file'=>$_FILES['adhar']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $second = array(
                        'name'=>'PAN',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['pan']['name'],
                        'file'=>$_FILES['pan']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $third = array(
                        'name'=>'Passport Photo',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['passport']['name'],
                        'file'=>$_FILES['passport']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $four = array(
                        'name'=>'Signature',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['signature']['name'],
                        'file'=>$_FILES['signature']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $five = array(
                        'name'=>'Shop Photo',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['shop_photo']['name'],
                        'file'=>$_FILES['shop_photo']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $six = array(
                        'name'=>'Declaration Form',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['declaration']['name'],
                        'file'=>$_FILES['declaration']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
                    );
                    $seven = array(
                        'name'=>'Other Documents',
                        'userid'=>$userid,
                        'id'=>$id,
                        'filename'=>$_FILES['otherdoc']['name'],
                        'file'=>$_FILES['otherdoc']['tmp_name'],
                        'table'=>'shopact_docs',
                        'folder'=>'shopact',
                        'prim'=>'shid'
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
                    if ($this->docs->uploaddocs($four)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($five)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($six)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($seven)) {
                        $document = 'Documents uplaoded';
                    }
                   
    
                }
                $response = array(
                    'Message' => 'Shop Act Form added successfully',
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
    

    public function getshopactdocs()
    {
        $id   = $this->input->post('shid');
        $result = $this->docs->get_shop_docs($id);
        echo json_encode($result);
    }
    public function update_status()
    {
        $shopactid    = $this->input->post('shopactid');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of Shop Act service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->smodel->update_shop_status($shopactid, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('SHOPACT', $shopactid, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('SHOPACT', $shopactid, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'SHOPACT');
        echo json_encode($result);
    }
} 