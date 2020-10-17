<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class ServiceMaster extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getservices() {
        $records = $this->service->getservices();
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
    public function addservice()
    {
        $data = array(
        'servicename' => $this->input->post('servicename')
        );
    if(!$this->input->post('servicename')){
        $response = array(
            'Message' => 'Pass the service title',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addservice($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'service not added try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'service added succesfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removeservice()
    {
        $id  = $this->input->post('serviceid');
        if(!$id){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }
         else{
        if($this->service->removeservice($id))
        {
            $response = array(
                'Message' => 'Service Removed successfully',
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
   public function updateservice(){
         
    $service      = $this->input->post('servicename');
    $serviceid         = $this->input->post('serviceid');
    
    if(!$service && !$serviceid){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updateservice($serviceid, array("servicename"=>$service));
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'service updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
