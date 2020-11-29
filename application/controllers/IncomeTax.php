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
            $response = array(
                'Message' => 'Income Details loaded successfully',
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
            'dob'=>$this->input->post('dob')
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
            
            $income_details = array(
                'pid'=>$pid,
                'rid'=>$rid,
                'userid'=>$userid,
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
            $result = $this->imodel->add_details($data);
            if ($result['status']) {
                $id       = $result['inid'];
                //stored partner details
    if(!empty($partner_data)){
        foreach ($partner_data as $contact)
        {
            $partners = array(
                'partner_name' => $contact['p_partner_name'],
                'aadhar_number' => $contact['p_aadhar_number'],
                'pan_number' => $contact['p_pan_number'],
                'contact_number'=>$contact['p_contact_number'],
                'emailid'=>$contact['p_emailid']
                );
                $partnerid = $this->parmodel->add_details($partners);
            if($partnerid['status']){
                $shop_partners=array( 
                    'partnerid' => $partnerid['partnerid'],
                    'inid'=>$id
                );
                $this->imodel->add_partner_details($shop_partners);
                }
        }
    }
       
                $document = 'Document not uploaded';
                $response = array(
                    'Message' => 'Income Form added successfully',
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
        $result = $this->imodel->update_shop_status($shid, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('SHOPACT', $shid, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('SHOPACT', $shid, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
