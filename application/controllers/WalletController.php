<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class PF_controller extends CI_Controller
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
        
            $response = array(
                'Message' => 'Balance loaded successfully',
                'Data' => $result,
                'Responsecode' => 200
            );
        echo json_encode($response);
    }
} 