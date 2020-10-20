<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class BalancedProjectSheet extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Balance_sheet','service');
      
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function getsheets() {
       
        $records = $this->service->getsheets();
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }

    //create API for documnet master
    public function addsheet()
    {
        $data = array(
            'userid '=>$this->input->post('userid'),
            'nameasperadhar'=>$this->input->post('nameasperadhar'),
            'pancardnumber' => $this->input->post('pancardnumber'),
            'DOB'=>$this->input->post('DOB'),
            'emailid' => $this->input->post('emailid'),
            'mobilenumber'=>$this->input->post('mobilenumber'),
            'projectAmt'=>$this->input->post('projectAmt'),
            'shopaddress'=>$this->input->post('shopaddress'),
            'homeaddress' => $this->input->post('homeaddress')
            );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addsheet($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Add project balanced sheet',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('projectedid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'Project bill removed successfully',
                'Responsecode' => 200
            );
        } 
        else
        {
            $response = array(
                'Message' => 'Failed to remove',
                'Responsecode' => 302
            );
        }
    }
        echo json_encode($response);
    }

   //API - update a service
   public function updatebill(){
    $data = array(
        'userid '=>$this->input->post('userid'),
        'nameasperadhar'=>$this->input->post('nameasperadhar'),
        'pancardnumber' => $this->input->post('pancardnumber'),
        'DOB'=>$this->input->post('DOB'),
        'emailid' => $this->input->post('emailid'),
        'mobilenumber'=>$this->input->post('mobilenumber'),
        'projectAmt'=>$this->input->post('projectAmt'),
        'shopaddress'=>$this->input->post('shopaddress'),
        'homeaddress' => $this->input->post('homeaddress')
        );
        $projectedid = $this->input->post('projectedid');
    
    if(!$projectedid && !$data){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updatebill($projectedid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Project bill updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
