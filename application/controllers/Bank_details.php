<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 
class Shop_details extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BankModel','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function get_bank_details() {
        $bid = $this->input->post('bid');
        $records = $this->service->get_details($bid);
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
    public function add_bank_details()
    {
        $data = array(
        'bank_name '=>$this->input->post('bank_name'),
        'ac_number' => $this->input->post('ac_number'),
        'ifsc_number'=>$this->input->post('ifsc_number')
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
            'Message' => 'Bank Details added successfully',
            'Data'=>$result['bid'],
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('bid');
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
        'bank_name '=>$this->input->post('bank_name'),
        'ac_number' => $this->input->post('ac_number'),
        'ifsc_number'=>$this->input->post('ifsc_number')
        );
        $bid = $this->input->post('bid');
    
    if(!$bid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->update_details($bid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Bank details updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }

    
}
