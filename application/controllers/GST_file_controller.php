<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class GST_file_controller extends CI_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('GSTFileModel', 'umodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;
    

    public function get_gst_files(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->umodel->get_details($roleid,$userid);
        if ($result['status']) {
            $response = array(
                'Message' => 'GST File Details loaded successfully',
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
    //create API for gst master
    public function add_gst_form()
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
        $userid = $this->input->post('userid');
               $sdetails = array(
                'userid' => $userid,
                'returntype'=>$this->input->post('gst_type'),
                'shop_name'=>$this->input->post('shop_name'),
                'gst_number'=>$this->input->post('gst_number'),
                'gst_id'=>$this->input->post('gst_id'),
                'gst_pwd'=>$this->input->post('gst_pwd')
               );
       
               $data = array(
                'pdetails'=>$pdetails,
                'main'=> $sdetails
            );

            $result = $this->umodel->add_details($data);
            if ($result['status']) {
                $id       = $result['gid'];
              
                    if (!empty($_FILES['bankstmt']['name'])) {
                        $four = array(
                            'name'=>'Bank Statement',
                            'userid'=>$userid,
                            'id'=>$id,
                            'filename'=>$_FILES['bankstmt']['name'],
                            'file'=>$_FILES['bankstmt']['tmp_name'],
                            'table'=>'gst_file_docs',
                            'folder'=>'gst_file',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($four)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['purchasebill']['name'])) {
                        $five = array(
                            'name'=>'Purchase Bill',
                            'userid'=>$userid,
                            'id'=>$id,
                            'filename'=>$_FILES['purchasebill']['name'],
                            'file'=>$_FILES['purchasebill']['tmp_name'],
                            'table'=>'gst_file_docs',
                            'folder'=>'gst_file',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($five)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                    if (!empty($_FILES['salesbill']['name'])) {
                        $six = array(
                            'name'=>'Sales Bill',
                            'userid'=>$userid,
                            'id'=>$id,
                            'filename'=>$_FILES['salesbill']['name'],
                            'file'=>$_FILES['salesbill']['tmp_name'],
                            'table'=>'gst_file_docs',
                            'folder'=>'gst_file',
                            'prim'=>'gid'
                        );
                        if ($this->docs->uploaddocs($six)) {
                            $document = 'Documents uplaoded';
                        }
                    }
                   
                $response = array(
                    'Message' => 'GST File return Details added successfully',
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

    public function get_gst_docs()
    {
        $id   = $this->input->post('gid');
        $result = $this->docs->get_file_docs($id);
        echo json_encode($result);
    }
    public function update_status()
    {
        $id    = $this->input->post('id');
        $data   = array(
            'status' => $this->input->post('status'),
            'remark' => $this->input->post('remark')
        );
        if($data['status'] == '3'){
            $wallet_data = array(
                'userid'=>$this->input->post('digital_uid'),
                'transaction_type'=>'Credit',
                'amount'=>$this->input->post('digital_amount'),
                'message'=>'Credited amount of GST File Return service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->umodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            
            if(!empty($_FILES['result1']['name'])){
                
             if ($this->uploadremarks('GSTANNUAL', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }   
            }
            
            if(!empty($_FILES['result2']['name'])){
                if ($this->uploadremarks('GSTANNUAL', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
            }
//            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
//                if ($this->uploadremarks('GSTANNUAL', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
//                    $document = 'Documents uplaoded';
//                }
//                if ($this->uploadremarks('GSTANNUAL', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
//                    $document = 'Documents uplaoded';
//                }
//            }
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
        $result = $this->docs->get_update_remarks_docs($pfid,'GSTANNUAL');
        echo json_encode($result);
    }
} 