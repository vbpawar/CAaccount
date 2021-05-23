<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class PartnerShip_deed extends CI_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PartnerShip_model', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_partners_data(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->pmodel->get_details($roleid,$userid);
        $records = [];
        $temp = array('partners'=>[]);
        $temp_1 = array('partners_investment'=>[]);
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
               $p_details= $this->pmodel->get_partners_details($result['data'][$i]['deedid']); 
               if($p_details['status']){
                $temp = array('partners'=>$p_details['data']);
               }
               $p_details_1= $this->pmodel->get_partners_investment($result['data'][$i]['deedid']); 
               if($p_details_1['status']){
                $temp_1 = array('partners_investment'=>$p_details_1['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp,$temp_1); 
            }
            $response = array(
                'Message' => 'Partnership Deed Details loaded successfully',
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
    public function add_partnership_form()
    {
            $sdetails = array(
                'userid' => $this->input->post('userid'),
                'msg'=>$this->input->post('msg'),
                'natureofbuss'=>$this->input->post('natureofbuss'),
                'start_up_date'=>$this->input->post('start_up_date'),
                'shop_address'=>$this->input->post('shop_address'),
                'shop_name'=>$this->input->post('shop_name')
            );
          
            $partner_data = $this->input->post('partnerdata');
            $partner_data= json_decode($partner_data);

            $partner_inve_data = $this->input->post('partnerinvestdata');
            $partner_inve_data= json_decode($partner_inve_data);
            $testdata = array(
                'partnerdata'=>$partner_data,
                'partner_invest'=> $partner_inve_data,
                'shop_details'=>$sdetails
            );
            $result = $this->pmodel->create_partner_form($testdata);
            if ($result['status']) {
                $id       = $result['deedid'];
                if (!empty($_FILES['rentaggrement']['name'])) {
                    $second = array(
                        'name'=>'Rent agrement',
                        'userid'=>$sdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['rentaggrement']['name'],
                        'file'=>$_FILES['rentaggrement']['tmp_name'],
                        'table'=>'deed_docs',
                        'folder'=>'deed',
                        'prim'=>'deedid'
                    );
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
                
                if (!empty($_FILES['shopbill']['name'])) {
                    $second = array(
                        'name'=>'Shop Bill',
                        'userid'=>$sdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['shopbill']['name'],
                        'file'=>$_FILES['shopbill']['tmp_name'],
                        'table'=>'deed_docs',
                        'folder'=>'deed',
                        'prim'=>'deedid'
                    );
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if (!empty($_FILES['other_1']['name'])) {
                    $second = array(
                        'name'=>'Other Doc 1',
                        'userid'=>$sdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['other_1']['name'],
                        'file'=>$_FILES['other_1']['tmp_name'],
                        'table'=>'deed_docs',
                        'folder'=>'deed',
                        'prim'=>'deedid'
                    );
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
                
                if (!empty($_FILES['other_2']['name'])) {
                    $second = array(
                        'name'=>'Other Doc 2',
                        'userid'=>$sdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['other_2']['name'],
                        'file'=>$_FILES['other_2']['tmp_name'],
                        'table'=>'deed_docs',
                        'folder'=>'deed',
                        'prim'=>'deedid'
                    );
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
        
                $response = array(
                    'Message' => 'Partnership Details added successfully',
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

    public function get_partnership_docs()
    {
        $id   = $this->input->post('uid');
        $result = $this->pmodel->get_partnership_docs($id);
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
                'message'=>'Credited amount of Partnership deed service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->pmodel->update_status($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('DEED', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('DEED', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'DEED');
        echo json_encode($result);
    }
} 