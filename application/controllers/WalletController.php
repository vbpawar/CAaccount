<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class WalletController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WalletModel', 'mmodel');
        $userdata = $_SESSION['Data'];
    }
    private $response = null;
    private $records = null;

    public function loadBalance(){
       
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
        $result = $this->mmodel->gettransactions($userdata['userid']);
        
            $response = array(
                'Message' => 'Transaction loaded successfully',
                'Data' => $result,
                'Responsecode' => 200
            );
        echo json_encode($response);
    }

    // public function checkbalance(){
    //     $result = $this->mmodel->check($userdata['userid']);
    //     if($result){
    //         $response = array(
    //             'Message' => 'Transaction loaded successfully',
    //             'Data' => $result,
    //             'Responsecode' => 200
    //         );
    //     }else{
    //         $response = array(
    //             'Message' => 'Transaction loaded successfully',
    //             'Responsecode' => 204
    //         ); 
    //     }
    //     echo json_encode($response);
    // }
} 