<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 
class Shop_details extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShopModel','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function get_shop_address() {
        $sid = $this->input->post('sid');
        $records = $this->service->get_details($sid);
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
    public function add_shop_details()
    {
        $data = array(
        'rid '=>$this->input->post('rid'),
        'shop_name' => $this->input->post('shop_name'),
        'office_contact'=>$this->input->post('office_contact'),
        'office_mailid' => $this->input->post('office_mailid'),
        'buss_start_date'=>$this->input->post('buss_start_date')
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
            'Message' => 'Shop Details added successfully',
            'Data'=>$result['sid'],
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('sid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'Shop  Details removed successfully',
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
        'rid '=>$this->input->post('rid'),
        'shop_name' => $this->input->post('shop_name'),
        'office_contact'=>$this->input->post('office_contact'),
        'office_mailid' => $this->input->post('office_mailid'),
        'buss_start_date'=>$this->input->post('buss_start_date')
        );
        $sid = $this->input->post('sid');
    
    if(!$sid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->update_details($sid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Shop details updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }

    
}
