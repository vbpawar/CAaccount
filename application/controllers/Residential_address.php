<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 require APPPATH . 'controllers/shop_details.php';
class Residential_address extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel','service');
        // $this->load->library('controllers/shop_details'); 
    }
    private $response = null;
    private $records = null;
   
    
    
    public function act(){
        echo $this->shop_details->demo();
    }
    //get all certificates
    public function get_residential_address() {
        $rid = $this->input->post('rid');
        $records = $this->service->get_details($rid);
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
    public function add_residential_details()
    {
        $data = array(
        'premise_name '=>$this->input->post('premise_name'),
        'flat_number' => $this->input->post('flat_number'),
        'road'=>$this->input->post('road'),
        'area' => $this->input->post('area'),
        'village'=>$this->input->post('village'),
        'taluka' => $this->input->post('taluka'),
        'district' => $this->input->post('district'),
        'state' => $this->input->post('state'),
        'pincode' => $this->input->post('pincode')
        );
        
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->add_details($data);
      
        if(!$result['status']){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Residential Details added successfully',
            'Data'=>$result['rid'],
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('rid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'Personal Details successfully',
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
   public function update_details(){
    $data = array(
        'premise_name '=>$this->input->post('premise_name'),
        'flat_number' => $this->input->post('flat_number'),
        'road'=>$this->input->post('road'),
        'area' => $this->input->post('area'),
        'village'=>$this->input->post('village'),
        'taluka' => $this->input->post('taluka'),
        'district' => $this->input->post('district'),
        'state' => $this->input->post('state'),
        'pincode' => $this->input->post('pincode')
        );
        $rid = $this->input->post('rid');
    
    if(!$rid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->update_details($rid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Personal details updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }

    
}
