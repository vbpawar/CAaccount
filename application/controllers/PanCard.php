<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class PanCard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanModel','service');
    }
    private $response = null;
    private $records = null;

    //get all import export details
    public function getpancards() {
        $records = $this->service->getpancards();
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
    public function addpanform()
    {
        $data = array(
            "userid"=>$this->input->post("userid"),
            "appType"=>$this->input->post("appType"),
            "category"=>$this->input->post("category"),
            "aadharnumber"=>$this->input->post("aadharnumber"),
            "nameasperadhar"=>$this->input->post("nameasperadhar"),
            "title"=>$this->input->post("title"),
            "lname"=>$this->input->post("lname"),
            "fname"=>$this->input->post("fname"),
            "mname"=>$this->input->post("mname"),
            "dob"=>$this->input->post("dob"),
            "gender"=>$this->input->post("gender"),
            "contact"=>$this->input->post("contact"),
            "emailid"=>$this->input->post("emailid"),
            "fatherlname"=>$this->input->post("fatherlname"),
            "fatherfname"=>$this->input->post("fatherfname"),
            "fathermname"=>$this->input->post("fathermname"),
            "motherlname"=>$this->input->post("motherlname"),
            "motherfname"=>$this->input->post("motherfname"),
            "mothermname"=>$this->input->post("mothermname"),
            "sourceofincome"=>$this->input->post("sourceofincome"),
            "rflat"=>$this->input->post("rflat"),
            "rnameofpremise"=>$this->input->post("rnameofpremise"),
            "rstreet"=>$this->input->post("rstreet"),
            "rarea"=>$this->input->post("rarea"),
            "rtown"=>$this->input->post("rtown"),
            "rcountry"=>$this->input->post("rcountry"),
            "rstate"=>$this->input->post("rstate"),
            "rpincode"=>$this->input->post("rpincode"),
            "onameofoffice"=>$this->input->post("onameofoffice"),
            "oflat"=>$this->input->post("oflat"),
            "onameofpremise"=>$this->input->post("onameofpremise"),
            "oroad"=>$this->input->post("oroad"),
            "oarea"=>$this->input->post("oarea"),
            "otown"=>$this->input->post("otown"),
            "ocountry"=>$this->input->post("ocountry"),
            "ostate"=>$this->input->post("ostate"),
            "opincode"=>$this->input->post("opincode"),
            "countrycode"=>$this->input->post("countrycode"),
            "stdcode"=>$this->input->post("stdcode"),
            "mobile"=>$this->input->post("mobile"),
            "semailid"=>$this->input->post("semailid")
        );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addpancard($data);
        if($result['status']){ 
            $response = array(
                'Message' => 'Udyog Adhar Bill Generated successfully',
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
    public function removebill()
    {
        $panid  = $this->input->post('panid');
        if(!$panid || empty($panid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($panid))
        {
            $response = array(
                'Message' => 'Udyog Adhar bill removed successfully',
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
   public function updatepanacard(){
    $data = array(
        "userid"=>$this->input->post("userid"),
        "appType"=>$this->input->post("appType"),
        "category"=>$this->input->post("category"),
        "aadharnumber"=>$this->input->post("aadharnumber"),
        "nameasperadhar"=>$this->input->post("nameasperadhar"),
        "title"=>$this->input->post("title"),
        "lname"=>$this->input->post("lname"),
        "fname"=>$this->input->post("fname"),
        "mname"=>$this->input->post("mname"),
        "dob"=>$this->input->post("dob"),
        "gender"=>$this->input->post("gender"),
        "contact"=>$this->input->post("contact"),
        "emailid"=>$this->input->post("emailid"),
        "fatherlname"=>$this->input->post("fatherlname"),
        "fatherfname"=>$this->input->post("fatherfname"),
        "fathermname"=>$this->input->post("fathermname"),
        "motherlname"=>$this->input->post("motherlname"),
        "motherfname"=>$this->input->post("motherfname"),
        "mothermname"=>$this->input->post("mothermname"),
        "sourceofincome"=>$this->input->post("sourceofincome"),
        "rflat"=>$this->input->post("rflat"),
        "rnameofpremise"=>$this->input->post("rnameofpremise"),
        "rstreet"=>$this->input->post("rstreet"),
        "rarea"=>$this->input->post("rarea"),
        "rtown"=>$this->input->post("rtown"),
        "rcountry"=>$this->input->post("rcountry"),
        "rstate"=>$this->input->post("rstate"),
        "rpincode"=>$this->input->post("rpincode"),
        "onameofoffice"=>$this->input->post("onameofoffice"),
        "oflat"=>$this->input->post("oflat"),
        "onameofpremise"=>$this->input->post("onameofpremise"),
        "oroad"=>$this->input->post("oroad"),
        "oarea"=>$this->input->post("oarea"),
        "otown"=>$this->input->post("otown"),
        "ocountry"=>$this->input->post("ocountry"),
        "ostate"=>$this->input->post("ostate"),
        "opincode"=>$this->input->post("opincode"),
        "countrycode"=>$this->input->post("countrycode"),
        "stdcode"=>$this->input->post("stdcode"),
        "mobile"=>$this->input->post("mobile"),
        "semailid"=>$this->input->post("semailid")
        );
        $panid = $this->input->post('panid');
    
   
        if(!$panid && !$data || empty($panid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
           $result = $this->service->updateudyog($panid,$data);
           if($result['result']!=0 && $result['data']!=null){
            $response = array(
                'Message' => 'Pan Card data successfully updated',
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
