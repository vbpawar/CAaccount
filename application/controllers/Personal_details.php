<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 
class Personal_details extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PersonalModel','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function getpersonaldetailsbyid() {
        $pid = $this->input->post('pid');
        $records = $this->service->get_details($pid);
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
    public function add_personal_details()
    {
        $data = array(
        'pan_name '=>$this->input->post('pan_name'),
        'pan_number' => $this->input->post('pan_number'),
        'aadhar_name'=>$this->input->post('aadhar_name'),
        'aadhar_number' => $this->input->post('aadhar_number'),
        'contact_number'=>$this->input->post('contact_number'),
        'emailid' => $this->input->post('emailid'),
        'dob' => $this->input->post('dob')
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
            'Message' => 'Personal Details added successfully',
            'Data'=>$result['pid'],
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('pid');
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
        'pan_name '=>$this->input->post('pan_name'),
        'pan_number' => $this->input->post('pan_number'),
        'aadhar_name'=>$this->input->post('aadhar_name'),
        'aadhar_number' => $this->input->post('aadhar_number'),
        'contact_number'=>$this->input->post('contact_number'),
        'emailid' => $this->input->post('emailid'),
        'dob' => $this->input->post('dob')
        );
        $pid = $this->input->post('pid');
    
    if(!$pid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->update_details($pid,$data);
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
