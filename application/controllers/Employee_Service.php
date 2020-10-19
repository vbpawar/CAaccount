<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Employee_Service extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Emp_serviceModel','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getempservices() {
        $records = $this->service->getemployeeservices();
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
    public function addEmpService()
    {
        $data = array(
        'serviceid'=>$this->input->post('serviceid'),
        'empid' => $this->input->post('empid')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addempservice($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Employee service not mapped',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'service mapped succesfully to the employee',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removeEmpService()
    {
        $id  = $this->input->post('empserviceid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
         
        if($this->service->removeempservice($id))
        {
            $response = array(
                'Message' => 'Employee removed from service',
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
   public function updateEmpService(){
         
    $empserviceid      = $this->input->post('empserviceid');
    $serviceid         = $this->input->post('serviceid');
    $empid             = $this->input->post('empid');
    
    if(!$empserviceid && !$serviceid && !$empid){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updateempservice($empserviceid, array("serviceid"=>$serviceid,"empid"=>$empid));
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Service mapped to employee successfully updated',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
