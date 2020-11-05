<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Access_control extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccessModel','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getallaccess() {
        $records = $this->service->getretailors();
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
    public function add_dist_retailors()
    {
        $data = array(
        'distributorid'=>$this->input->post('distributorid'),
        'retailorid' => $this->input->post('retailorid')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->add_retailors($data);
        if($result['status']){ 
            $response = array(
                'Message' => 'Distributor are mapped to retailors added successfully',
                'Data'=>$result['data'],
                'Responsecode' => 200
            );
       }else{ 
        $response = array(
            'Message' => 'Try again',
                'Responsecode' => 402
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removemap()
    {
        $id  = $this->input->post('distretid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
         
        if($this->service->removemap($id))
        {
            $response = array(
                'Message' => 'Distributor retailors removed successfully',
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
   public function updateretailors(){
    $distretid      = $this->input->post('distretid');
    $data = array(
        'distributorid'=>$this->input->post('distributorid'),
        'retailorid' => $this->input->post('retailorid')
        );
    if(!$distretid && !$data && empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updateretailors($distretid,$data);
       if($result['status']){
        $response = array(
            'Message' => 'update distributor retailors successfully updated',
            'Data'=>$result['data'],
            'Responsecode' => 200
        );
       }else{
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }
   }
   echo json_encode($response);
   }
    
}
