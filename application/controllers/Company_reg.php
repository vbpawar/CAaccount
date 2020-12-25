<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Company_reg extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DocsModel', 'docs');
        $this->load->model('CompanyModel', 'imodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;

    public function get_all_company(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->imodel->get_details($roleid,$userid);
        $records = [];
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('directors'=>[]);
               $p_details= $this->imodel->get_director_details($result['data'][$i]['companyid']); 
               if($p_details['status']){
                $temp = array('invoices'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Company Reg Details loaded successfully',
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

    public function add_company_form()
    {
         //personal details
         $pdetails = array(
            'ctype' => $this->input->post('ctype'),
            'userid' => $this->input->post('userid'),
            'cname' => $this->input->post('cname'),
            'obj_company' => $this->input->post('obj_company'),
            'obj_specfied' => $this->input->post('obj_specfied'),
            'capital' => $this->input->post('capital'),
            'naturebuss' => $this->input->post('naturebuss')
        );
$director_details = $this->input->post('director_details');
$director_details= json_decode($director_details);
            $result = $this->imodel->create_company($pdetails,$director_details);
            if ($result['status']) {
                $id       = $result['companyid'];
                if(!empty($_FILES['electricity']['name'])){
                    $four = array(
                        'name'=>'Electricity Bill',
                        'userid'=>$pdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['electricity']['name'],
                        'file'=>$_FILES['electricity']['tmp_name'],
                        'table'=>'company_docs',
                        'folder'=>'company_docs',
                        'prim'=>'companyid'
                    );  
                    if ($this->docs->uploaddocs($four)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['rent']['name'])){
                    $four = array(
                        'name'=>'Rent Aggrement',
                        'userid'=>$pdetails['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['rent']['name'],
                        'file'=>$_FILES['rent']['tmp_name'],
                        'table'=>'company_docs',
                        'folder'=>'company_docs',
                        'prim'=>'companyid'
                    );  
                    if ($this->docs->uploaddocs($four)) {
                        $document = 'Documents uplaoded';
                    }
                }
                $response = array(
                    'Message' => 'Company Added Form added successfully',
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
                'message'=>'Credited amount of Company reg service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->imodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('Company', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('Company', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'Company');
        echo json_encode($result);
    }
    public function get_company_docs()
    {
        $id   = $this->input->post('id');
        $result = $this->docs->company_docs($id);
        echo json_encode($result);
    }
}
