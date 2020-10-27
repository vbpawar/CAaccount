<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class ShopAct extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShopActModel','service');
    }
    private $response = null;
    private $records = null;

    //get all import export details
    public function getallshopacts() {
        $records = $this->service->getshopacts();
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
    public function addshopact()
    {
        $data = array(
            "userid"=>$this->input->post("userid"),
            "nameofestb"=>$this->input->post("nameofestb"),
            "street"=>$this->input->post("street"),
            "landmark"=>$this->input->post("landmark"),
            "district"=>$this->input->post("district"),
            "taluka"=>$this->input->post("taluka"),
            "village"=>$this->input->post("village"),
            "pincode"=>$this->input->post("pincode"),
            "mobile"=>$this->input->post("mobile"),
            "emailid"=>$this->input->post("emailid"),
            "ownerpremise"=>$this->input->post("ownerpremise"),
            "dateofcommit"=>$this->input->post("dateofcommit"),
            "natureofbuss"=>$this->input->post("natureofbuss"),
            "menw"=>$this->input->post("menw"),
            "womenw"=>$this->input->post("womenw"),
            "s_nameofestb"=>$this->input->post("s_nameofestb"),
            "s_street"=>$this->input->post("s_street"),
            "s_locality"=>$this->input->post("s_locality"),
            "s_landmark"=>$this->input->post("s_landmark"),
            "s_taluka"=>$this->input->post("s_taluka"),
            "s_village"=>$this->input->post("s_village"),
            "s_district"=>$this->input->post("s_district"),
            "s_state"=>$this->input->post("s_state"),
            "s_residence"=>$this->input->post("s_residence"),
            "s_adharnumber"=>$this->input->post("s_adharnumber"),
            "s_mobile"=>$this->input->post("s_mobile"),
            "s_email"=>$this->input->post("s_email"),
            "s_status"=>$this->input->post("s_status"),
            "typeoforg"=>$this->input->post("typeoforg"),
            "s_nameofemp"=>$this->input->post("s_nameofemp"),
            "s_menw"=>$this->input->post('s_menw'),
            "s_womenw"=>$this->input->post('s_womenw')
        );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addshopact($data);
        if($result === 0 || $result == NULL){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Shop Act Bill Generated successfully',
            'Data'=>$result,
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $shopactid  = $this->input->post('shopactid');
        if(!$shopactid || empty($shopactid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($shopactid))
        {
            $response = array(
                'Message' => 'Shop Act removed successfully',
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
   public function updateshopact(){
    $data = array(
        "userid"=>$this->input->post("userid"),
        "nameofestb"=>$this->input->post("nameofestb"),
        "street"=>$this->input->post("street"),
        "landmark"=>$this->input->post("landmark"),
        "district"=>$this->input->post("district"),
        "taluka"=>$this->input->post("taluka"),
        "village"=>$this->input->post("village"),
        "pincode"=>$this->input->post("pincode"),
        "mobile"=>$this->input->post("mobile"),
        "emailid"=>$this->input->post("emailid"),
        "ownerpremise"=>$this->input->post("ownerpremise"),
        "dateofcommit"=>$this->input->post("dateofcommit"),
        "natureofbuss"=>$this->input->post("natureofbuss"),
        "menw"=>$this->input->post("menw"),
        "womenw"=>$this->input->post("womenw"),
        "s_nameofestb"=>$this->input->post("s_nameofestb"),
        "s_street"=>$this->input->post("s_street"),
        "s_locality"=>$this->input->post("s_locality"),
        "s_landmark"=>$this->input->post("s_landmark"),
        "s_taluka"=>$this->input->post("s_taluka"),
        "s_village"=>$this->input->post("s_village"),
        "s_district"=>$this->input->post("s_district"),
        "s_state"=>$this->input->post("s_state"),
        "s_residence"=>$this->input->post("s_residence"),
        "s_adharnumber"=>$this->input->post("s_adharnumber"),
        "s_mobile"=>$this->input->post("s_mobile"),
        "s_email"=>$this->input->post("s_email"),
        "s_status"=>$this->input->post("s_status"),
        "typeoforg"=>$this->input->post("typeoforg"),
        "s_nameofemp"=>$this->input->post("s_nameofemp"),
        "s_menw"=>$this->input->post('s_menw'),
        "s_womenw"=>$this->input->post('s_womenw'),
    );
        $shopactid = $this->input->post('shopactid');
    
   
        if(!$shopactid && !$data || empty($shopactid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
           $result = $this->service->updateshopact($shopactid,$data);
           if($result['result']!=0 && $result['data']!=null){
            $response = array(
                'Message' => 'Shop act successfully updated',
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
