<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
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
} 