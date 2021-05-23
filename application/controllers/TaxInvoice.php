<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class TaxInvoice extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('InvoiceModel', 'imodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }
    private $response = null;
    private $records = null;

    public function get_all_invoice(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->imodel->get_details($roleid,$userid);
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('invoices'=>[]);
               $p_details= $this->imodel->get_invoice_details($result['data'][$i]['invoiceid']); 
               if($p_details['status']){
                $temp = array('invoices'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Tax Invoice Details loaded successfully',
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

    public function add_invoice_form()
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
                'intype'=>$this->input->post('intype'),
                'naturebuss' => $this->input->post('naturebuss')
            );
            $seller_details = array(
                'shop_name'=>$this->input->post('seller_business_name'),
                'office_address'=>$this->input->post('seller_address'),
                'office_mailid'=>$this->input->post('seller_email'),
                'office_contact'=>$this->input->post('seller_contact'),
                'gst_number'=>$this->input->post('seller_gst_number')
               );
               $buyer_details = array(
                'shop_name'=>$this->input->post('buyer_business_name'),
                'office_address'=>$this->input->post('buyer_address'),
                'office_mailid'=>$this->input->post('buyer_email'),
                'office_contact'=>$this->input->post('buyer_contactno'),
                'gst_number'=>$this->input->post('buyer_gst_number')
               );
               $shoping_details = array(
                'shop_name'=>$this->input->post('shop_business_name'),
                'office_address'=>$this->input->post('shop_address'),
                'office_mailid'=>$this->input->post('shop_email'),
                'office_contact'=>$this->input->post('shop_contactno'),
                'gst_number'=>$this->input->post('shop_gst_number')
               );
               $invoicedetails = $this->input->post('invoicedata');
               $invoicedetails= json_decode($invoicedetails);
        $testdata = array(
            'pdetails'=>$pdetails,
            'rdetails'=>$rdetails,
            'seller_details'=>$seller_details,
            'buyer_details'=>$buyer_details,
            'main'=>$main_details,
            'invoicedetails'=>$invoicedetails,
            'shop_details'=>$shoping_details
        );
            $result = $this->imodel->create_invoice($testdata);
            if ($result['status']) {
//                $id       = $result['certid'];
                $response = array(
                    'Message' => 'Invoice Form added successfully',
//                    'Data' => $result,
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
                'message'=>'Credited amount of Tax Invoice service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->imodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('TIN', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('TIN', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'TIN');
        echo json_encode($result);
    }
}
