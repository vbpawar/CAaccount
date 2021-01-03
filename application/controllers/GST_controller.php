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
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->gstmodel->get_details($roleid,$userid);
        $records = [];
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('partners'=>[]);
               $p_details= $this->gstmodel->get_partners_details($result['data'][$i]['gid']); 
               if($p_details['status']){
                $temp = array('partners'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'GST Details loaded successfully',
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
//            print_r($_FILES['pPhotoa1']);exit;
//            print_r($partner_data[0]->p_photodoc);exit;
//            print_r($partner_data);exit;
//            echo ($partner_data[0]->p_partner_name);exit;
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
               
                if (!empty($_FILES['psfirmpandoc']['name'])) {
                    $first = array(
                        'name'=>'PAN CARD',
                        'userid'=>$gst_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['psfirmpandoc']['name'],
                        'file'=>$_FILES['psfirmpandoc']['tmp_name'],
                        'table'=>'gst_docs',
                        'folder'=>'gst',
                        'prim'=>'gid'
                    );
                    if ($this->docs->uploaddocs($first)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if (!empty($_FILES['psdeeddoc']['name'])) {
                    $second = array(
                        'name'=>'Partnership Deed',
                        'userid'=>$gst_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['psdeeddoc']['name'],
                        'file'=>$_FILES['psdeeddoc']['tmp_name'],
                        'table'=>'gst_docs',
                        'folder'=>'gst',
                        'prim'=>'gid'
                    );
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if (!empty($_FILES['addproofdoc']['name'])) {
                    $third = array(
                        'name'=>'Address Proof',
                        'userid'=>$gst_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['addproofdoc']['name'],
                        'file'=>$_FILES['addproofdoc']['tmp_name'],
                        'table'=>'gst_docs',
                        'folder'=>'gst',
                        'prim'=>'gid'
                    );
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                }
                    if (!empty($_FILES['cancelcheck']['name'])) {
                        $four = array(
                            'name'=>'Cancel Check/Bank Stmt',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['cancelcheck']['name'],
                            'file'=>$_FILES['cancelcheck']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($four)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['rentagr']['name'])) {
                        $five = array(
                            'name'=>'Rent Aggrement',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['rentagr']['name'],
                            'file'=>$_FILES['rentagr']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($five)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['propertypic']['name'])) {
                        $five = array(
                            'name'=>'Photo of Prop',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['propertypic']['name'],
                            'file'=>$_FILES['propertypic']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($five)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['adhar']['name'])) {
                        $six = array(
                            'name'=>'Aadhar Card',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['adhar']['name'],
                            'file'=>$_FILES['adhar']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($six)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['pan']['name'])) {
                        $seven = array(
                            'name'=>'PAN Card',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['pan']['name'],
                            'file'=>$_FILES['pan']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($seven)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['electricity']['name'])) {
                        $eight = array(
                            'name'=>'Electricity Bill',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['electricity']['name'],
                            'file'=>$_FILES['electricity']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($eight)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['bstatdoc']['name'])) {
                        $nine = array(
                            'name'=>'Cancel Check/Bank Stmt',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['bstatdoc']['name'],
                            'file'=>$_FILES['bstatdoc']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($nine)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['passportpic']['name'])) {
                        $ten = array(
                            'name'=>'Passport Photo',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['passportpic']['name'],
                            'file'=>$_FILES['passportpic']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($ten)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['rentdoc']['name'])) {
                        $ten1 = array(
                            'name'=>'Rent Aggrement',
                            'userid'=>$gst_details['userid'],
                            'id'=>$id,
                            'filename'=>$_FILES['rentdoc']['name'],
                            'file'=>$_FILES['rentdoc']['tmp_name'],
                            'table'=>'gst_docs',
                            'folder'=>'gst',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($ten1)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                
                $response = array(
                    'Message' => 'GST Details added successfully',
                    'Data' => $result,
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

    public function getgst_docs()
    {
        $id   = $this->input->post('uid');
        $result = $this->docs->get_gst_docs($id);
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