<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class IncomeTax extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('IncomeModel','service');
    }
    private $response = null;
    private $records = null;

    //get all import export details
    public function getincomeforms() {
        $records = $this->service->getincomeforms();
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
    public function addincomeform()
    {
        $data = array(
            "userid"=>$this->input->post("userid"),
            "profession"=>$this->input->post("profession"),
            "bussiname"=>$this->input->post("bussiname"),
            "premisename"=>$this->input->post("premisename"),
            "assesmentyear"=>$this->input->post("assesmentyear"),
            "fname"=>$this->input->post("fname"),
            "mname"=>$this->input->post("mname"),
            "lname"=>$this->input->post("lname"),
            "gender"=>$this->input->post("gender"),
            "dob"=>$this->input->post("dob"),
            "pannumber"=>$this->input->post("pannumber"),
            "fathername"=>$this->input->post("fathername"),
            "contact"=>$this->input->post("contact"),
            "emailid"=>$this->input->post("emailid"),
            "country"=>$this->input->post("country"),
            "ustate"=>$this->input->post("ustate"),
            "city"=>$this->input->post("city"),
            "flat"=>$this->input->post("flat"),
            "road"=>$this->input->post("road"),
            "pincode"=>$this->input->post("pincode")
        );
    if(empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addincomeform($data);
        if($result['data'] != false){ 
            $response = array(
                'Message' => 'Income form submited successfully',
                'Data'=>$result['data'],
                'Responsecode' => 200
            );
       }else{ 
        $response = array(
            'Message' => 'Try again',
            'Responsecode' => 204
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('id');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'Income form removed successfully',
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
   public function updateincomeform(){
    $data = array(
        "userid"=>$this->input->post("userid"),
        "profession"=>$this->input->post("profession"),
        "bussiname"=>$this->input->post("bussiname"),
        "premisename"=>$this->input->post("premisename"),
        "assesmentyear"=>$this->input->post("assesmentyear"),
        "fname"=>$this->input->post("fname"),
        "mname"=>$this->input->post("mname"),
        "lname"=>$this->input->post("lname"),
        "gender"=>$this->input->post("gender"),
        "dob"=>$this->input->post("dob"),
        "pannumber"=>$this->input->post("pannumber"),
        "fathername"=>$this->input->post("fathername"),
        "contact"=>$this->input->post("contact"),
        "emailid"=>$this->input->post("emailid"),
        "country"=>$this->input->post("country"),
        "ustate"=>$this->input->post("ustate"),
        "city"=>$this->input->post("city"),
        "flat"=>$this->input->post("flat"),
        "road"=>$this->input->post("road"),
        "pincode"=>$this->input->post("pincode")
    );
        $id = $this->input->post('id');
    
   
        if(!$id && !$data || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
           $result = $this->service->updateincomeform($id,$data);
           if($result['result']!=0 && $result['data']!=null){
            $response = array(
                'Message' => 'Income form change successfully updated',
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
