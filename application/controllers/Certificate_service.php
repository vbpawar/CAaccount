<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Certificate_service extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CertificateModel','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function getcertificates() {
        $records = $this->service->getcertificates();
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
    public function addcertificate()
    {
        $data = array(
        'nameasperadhar'=>$this->input->post('nameasperadhar'),
        'pancardnumber' => $this->input->post('pancardnumber'),
        'mobilenumber'=>$this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid'),
        'shopaddress'=>$this->input->post('shopaddress'),
        'homeaddress' => $this->input->post('homeaddress'),
        'reason'=>$this->input->post('reason')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addcertificate($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'CA certificate added successfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removecertificate()
    {
        $id  = $this->input->post('certid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
         
        if($this->service->removecertificate($id))
        {
            $response = array(
                'Message' => 'CA certificate removed successfully',
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
   public function updatecertificate(){
         
    $data = array(
        'nameasperadhar'=>$this->input->post('nameasperadhar'),
        'pancardnumber' => $this->input->post('pancardnumber'),
        'mobilenumber'=>$this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid'),
        'shopaddress'=>$this->input->post('shopaddress'),
        'homeaddress' => $this->input->post('homeaddress'),
        'reason'=>$this->input->post('reason')
        );
        $certid = $this->input->post('certid');
    
    if(!$certid && !$data){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updatecertificate($certid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'CA certificate updated successfully updated',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
