<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Distributor_retailors extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DistributorModel','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getservicecharges() {
        $records = $this->service->getservicecharges();
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
    public function addServiceCharges()
    {
        $data = array(
        'serviceid'=>$this->input->post('serviceid'),
        'charges' => $this->input->post('charges')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addservicecharges($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Service charges added successfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removeservicecharges()
    {
        $id  = $this->input->post('chargesid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
         
        if($this->service->removeservicecharge($id))
        {
            $response = array(
                'Message' => 'service charges removed successfully',
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
   public function updateservicecharges(){
         
    $chargesid      = $this->input->post('chargesid');
    $serviceid         = $this->input->post('serviceid');
    $charges             = $this->input->post('charges');
    
    if(!$chargesid && !$serviceid && !$charges){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updateservicecharges($chargesid, array("serviceid"=>$serviceid,"charges"=>$charges));
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Service charges updated successfully updated',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
