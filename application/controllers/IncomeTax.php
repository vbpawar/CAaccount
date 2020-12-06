<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class IncomeTax extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('IncomeModel', 'imodel');
        $this->load->model('PartnerModel', 'parmodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;

    public function get_all_incomes()
    {
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->imodel->get_details($roleid,$userid);
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('partners'=>[]);
               $p_details= $this->imodel->get_partners_details($result['data'][$i]['inid']); 
               if($p_details['status']){
                $temp = array('partners'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Income Details loaded successfully',
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
    public function add_income_form()
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
            $income_details = array(
                'userid'=>$this->input->post('userid'),
                'incomeType'=>$this->input->post('incomeType'),
                'bname' => $this->input->post('bname'),
                'natureofbuss' => $this->input->post('natureofbuss'),
                'place_of_buss' => $this->input->post('place_of_buss'),
                'buss_type' => $this->input->post('buss_type'),
                'turn_over_amt' => $this->input->post('turn_over_amt'),
                'loan_amt' => $this->input->post('loan_amt'),
                'income_from_other' => $this->input->post('income_from_other'),
                'lic_slip' => $this->input->post('lic_slip'),
                'home_loan' => $this->input->post('home_loan'),
                'invs_amt' => $this->input->post('invs_amt'),
                'sandry_creditor' => $this->input->post('sandry_creditor'),
                'sandry_debitor' => $this->input->post('sandry_debitor'),
                'stock_amt' => $this->input->post('stock_amt'),
                'cash_bal' => $this->input->post('cash_bal'),
                'buss_loan' => $this->input->post('buss_loan'),
                'personal_loan' => $this->input->post('personal_loan')
            );
            $partner_data = $this->input->post('partnerdata');
            $partner_data= json_decode($partner_data);
        $testdata = array(
            'pdetails'=>$pdetails,
            'rdetails'=>$rdetails,
            'partnerdata'=>$partner_data,
            'main'=>$income_details
        );
            $result = $this->imodel->create_income($testdata);
            if ($result['status']) {
                $id       = $result['inid'];
                $document = 'Document not uploaded';
                if(!empty($_FILES['form16b']['name']) && !empty($_FILES['form16a']['name'])){
                    $first = array(
                        'name'=>'Form 16-B',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['form16b']['name'],
                        'file'=>$_FILES['form16b']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );
                    $second = array(
                        'name'=>'Form 16-A',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['form16a']['name'],
                        'file'=>$_FILES['form16a']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );
    
                    if ($this->docs->uploaddocs($first)) {
                        $document = 'Documents uplaoded';
                    }
                    if ($this->docs->uploaddocs($second)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['salBankStatement']['name'])){
                    $third = array(
                        'name'=>'Bank Statement',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['salBankStatement']['name'],
                        'file'=>$_FILES['salBankStatement']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($third)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['salSalarySlip']['name'])){
                    $four = array(
                        'name'=>'Salary Slip',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['salSalarySlip']['name'],
                        'file'=>$_FILES['salSalarySlip']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($four)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['inv_proof']['name'])){
                    $five = array(
                        'name'=>'Investment Proof',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['inv_proof']['name'],
                        'file'=>$_FILES['inv_proof']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($five)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['buss_loan_cert']['name'])){
                    $six = array(
                        'name'=>'Loan Certificate',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['buss_loan_cert']['name'],
                        'file'=>$_FILES['buss_loan_cert']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($six)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['lic_cert']['name'])){
                    $seven = array(
                        'name'=>'LIC Certificate',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['lic_cert']['name'],
                        'file'=>$_FILES['lic_cert']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($seven)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['inc_other']['name'])){
                    $eight = array(
                        'name'=>'Income From Other Source',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['inc_other']['name'],
                        'file'=>$_FILES['inc_other']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($eight)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['inc_other']['name'])){
                    $nine = array(
                        'name'=>'Income From Other Source',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['inc_other']['name'],
                        'file'=>$_FILES['inc_other']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($nine)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['adhar']['name'])){
                    $ten = array(
                        'name'=>'Aadhar Card',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['adhar']['name'],
                        'file'=>$_FILES['adhar']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($ten)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['pan']['name'])){
                    $a = array(
                        'name'=>'PAN Card',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['pan']['name'],
                        'file'=>$_FILES['pan']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($a)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['pe_loan']['name'])){
                    $b = array(
                        'name'=>'Personal Loan',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['pe_loan']['name'],
                        'file'=>$_FILES['pe_loan']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($b)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['h_loan']['name'])){
                    $c = array(
                        'name'=>'Home Loan Certificate',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['h_loan']['name'],
                        'file'=>$_FILES['h_loan']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($c)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['bal_sheet']['name'])){
                    $d = array(
                        'name'=>'Balance Sheet',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['bal_sheet']['name'],
                        'file'=>$_FILES['bal_sheet']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($d)) {
                        $document = 'Documents uplaoded';
                    }
                }
                if(!empty($_FILES['otherd']['name'])){
                    $e = array(
                        'name'=>'Balance Sheet',
                        'userid'=>$income_details['userid'],
                        'id'=>$id,
                        'filename'=>$_FILES['otherd']['name'],
                        'file'=>$_FILES['otherd']['tmp_name'],
                        'table'=>'income_docs',
                        'folder'=>'income',
                        'prim'=>'inid'
                    );  
                    if ($this->docs->uploaddocs($e)) {
                        $document = 'Documents uplaoded';
                    }
                }
               
                $response = array(
                    'Message' => 'Income Form added successfully',
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
    

    public function get_income_docs()
    {
        $id   = $this->input->post('id');
        $result = $this->docs->income_docs($id);
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
                'message'=>'Credited amount of Income Tax service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->imodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('INCOME', $shid, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('INCOME', $shid, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'INCOME');
        echo json_encode($result);
    }
}
