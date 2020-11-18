<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
date_default_timezone_set('Asia/Kolkata');
class WalletController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WalletModel', 'mmodel');
    }
    private $response = null;
    private $records = null;

    public function loadBalance(){
        $userdata = $_SESSION['Data'];
        $result = $this->mmodel->getbalance($userdata['userid']);
        if($result!=null){
            $response = array(
                'Message' => 'Balance loaded successfully',
                'Data' => $result,
                'Responsecode' => 200
            );
        }else{
            $response = array(
                'Message' => 'Balance loaded successfully',
                'Data' => $result,
                'Responsecode' => 204
            ); 
        }
           
        echo json_encode($response);
    }
    public function load_transactions(){
        $userdata = $_SESSION['Data'];
        $result = $this->mmodel->gettransactions($userdata['userid']);
        
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Data' => $result,
                'Responsecode' => 200
            );
        echo json_encode($response);
    }

    public function checkbalance(){
        $userid = $this->input->post('userid');
        $amount = $this->input->post('amount');
        $result = $this->mmodel->getbalance($userid);
        if($result !=null){
           if($result['balance'] >= $amount){
               $data = array(
                'userid'=>$userid,
                'transaction_type'=>'Debit',
                'amount'=>$amount,
                'message'=>'Debit for service',
                'transactiondate'=>date('Y-m-d h:i:s')
               );
            $add = $this->mmodel->deduct_amount($data);
            if($add){
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Data' => $result,
                'Responsecode' => 200
            );
        }else{
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Data' => $result,
                'Responsecode' => 205
            ); 
        }
           }else{
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Data' => $result,
                'Responsecode' => 208
            ); 
           }
        }else{
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Responsecode' => 204
            ); 
        }
        echo json_encode($response);
    }
} 