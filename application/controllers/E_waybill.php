<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
date_default_timezone_set('Asia/Kolkata');
class E_waybill extends CI_Controller  {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DocsModel', 'docs');
        $this->load->model('Eway_bill', 'imodel');
        $this->load->model('WalletModel', 'service');
        date_default_timezone_set('Asia/Kolkata');
    }

    private $response = null;
    private $records = null;

    public function get_all_bills(){
        $roleid = $this->input->get('roleid');
        $userid = $this->input->get('userid');
        $result = $this->imodel->get_details($roleid,$userid);
        if ($result['status']) {
            for($i=0;$i<count($result['data']);$i++){
                $temp = array('invoices'=>[]);
               $p_details= $this->imodel->get_invoice_details($result['data'][$i]['bill_id']); 
               if($p_details['status']){
                $temp = array('invoices'=>$p_details['data']);
               }
               $records[] = array_merge($result['data'][$i],$temp); 
            }
            $response = array(
                'Message' => 'Eway bill Details loaded successfully',
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

    public function add_bill_form()
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
        
        //tax details
        $tax_details = array(
            'tax_amt ' => $this->input->post('tax_amt'),
            'cgst_amt' => $this->input->post('cgst_amt'),
            'sgst_amt' => $this->input->post('sgst_amt'),
            'igst_amt' => $this->input->post('igst_amt'),
            'cess_advol_amt' => $this->input->post('cess_advol_amt'),
            'cess_non_amt' => $this->input->post('cess_non_amt'),
            'other_amt' => $this->input->post('other_amt'),
            'invoice_amt' => $this->input->post('invoice_amt')
        );
            $main_details = array(
                'userid'=>$this->input->post('userid'),
                'bussness_type'=>$this->input->post('bussness_type'),
                'bussness_name' => $this->input->post('bussness_name'),
                'shop_adhar'=>$this->input->post('shop_adhar'),
                'gst_number'=>$this->input->post('gst_number'),
                'eway_bill_id' => $this->input->post('eway_bill_id'),
                'bill_pwd'=>$this->input->post('bill_pwd'),
                'transporter_name'=>$this->input->post('transporter_name'),
                'transporter_id' => $this->input->post('transporter_id'),
                'distance_km'=>$this->input->post('distance_km'),
                'transport_mode'=>$this->input->post('transport_mode'),
                'vehicle_type' => $this->input->post('vehicle_type'),
                'vehicle_number'=>$this->input->post('vehicle_number'),
                'transport_doc_number' => $this->input->post('transport_doc_number'),
                'final_date'=>$this->input->post('final_date')
            );
            $bill_details = array(
                'sname'=>$this->input->post('sname'),
                'gstn'=>$this->input->post('gstn'),
                'sstate'=>$this->input->post('sstate'),
                'saddress'=>$this->input->post('saddress'),
                'place'=>$this->input->post('place'),
                'pincode'=>$this->input->post('pincode'),
                'bname'=>$this->input->post('bname'),
                'b_gstn'=>$this->input->post('b_gstn'),
                'bstate'=>$this->input->post('bstate'),
                'b_address'=>$this->input->post('b_address'),
                'b_place'=>$this->input->post('b_place'),
                'b_pincode'=>$this->input->post('b_pincode')
               );
               $invoicedetails = $this->input->post('invoicedata');
               $invoicedetails= json_decode($invoicedetails);
        $testdata = array(
            'pdetails'=>$pdetails,
            'tdetails'=>$tax_details,
            'main'=>$main_details,
            'billdetails'=>$bill_details,
            'invoicedetails'=>$invoicedetails
        );
            $result = $this->imodel->create_bill($testdata);
            if ($result['status']) {
//                $id       = $result['certid'];
                $response = array(
                    'Message' => 'Eway Bill added successfully',
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
                'message'=>'Credited amount of E-way bill service which is rejected by admin',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
                $result = $this->service->deduct_amount($wallet_data);
        }
        $result = $this->imodel->updatestatus($id, $data);
        if ($result) {
            $document = 'Documents not uplaoded';
            if (!empty($_FILES['result1']['name']) && !empty($_FILES['result2']['name'])) {
                if ($this->uploadremarks('EWAY', $id, $_FILES['result1']['name'], $_FILES['result1']['tmp_name'])) {
                    $document = 'Documents uplaoded';
                }
                if ($this->uploadremarks('EWAY', $id, $_FILES['result2']['name'], $_FILES['result2']['tmp_name'])) {
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
        $result = $this->docs->get_update_remarks_docs($pfid,'EWAY');
        echo json_encode($result);
    }

}
