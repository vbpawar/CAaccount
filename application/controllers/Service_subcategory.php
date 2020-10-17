<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Service_subcategory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ServiceSubcategory_model','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getserviceSubcategorys() {
        $records = $this->service->getservicescategories();
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
    public function addserviceSubcategory()
    {
        $data = array(
        'serviceid'=>$this->input->post('serviceid'),
        'category' => $this->input->post('category')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addserviceSubcategory($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'service category not added try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'service  category added succesfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removeserviceSubcategory()
    {
        $id  = $this->input->post('categoryid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
         
        if($this->service->removeserviceSubcategory($id))
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
   public function updateserviceSubCategory(){
         
    $category      = $this->input->post('category');
    $serviceid         = $this->input->post('serviceid');
    $categoryid         = $this->input->post('categoryid');
    
    if(!$category && !$serviceid && !$categoryid){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updateserviceSubCategory($categoryid, array("category"=>$category,"serviceid"=>$serviceid));
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'service category updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
