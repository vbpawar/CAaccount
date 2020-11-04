<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class UdyogAdhar extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UdyogModel','service');
    }
    private $response = null;
    private $records = null;

    //get all import export details
    public function getudyogs() {
        $records = $this->service->getudyogs();
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
    public function addudyog()
    {
        $data = array(
        'userid '=>$this->input->post('userid'),
        'adharnumber' => $this->input->post('adharnumber'),
        'nameofent'=>$this->input->post('nameofent'),
        'gender' => $this->input->post('gender'),
        'category'=>$this->input->post('category'),
        'mobilenumber' => $this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid'),
        'nameofentr'=>$this->input->post('nameofentr'),
        'typeoforg' => $this->input->post('typeoforg'),
        'ustate'=>$this->input->post('ustate'),
        'district' => $this->input->post('district'),
        'city'=>$this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        'postoffice'=>$this->input->post('postoffice'),
        'regdate'=>$this->input->post('regdate'),
        'bankName'=>$this->input->post('bankName'),
        'ifsc'=>$this->input->post('ifsc'),
        'bankAc'=>$this->input->post('bankAc'),
        'men'=>$this->input->post('men'),
        'women'=>$this->input->post('women')
        );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addudyog($data);
        if($result['status']){ 
            if(!empty($_FILES['adhar']['name']) && !empty($_FILES['file']['name']) ){ 
                if($this->uploaddocs('aadhar',$id,'EWAY',$_FILES['adhar']['name'],$_FILES['adhar']['tmp_name'])){
                $document = 'Documents uplaoded';
                }
                if($this->uploaddocs('pan',$id,'EWAY',$_FILES['file']['name'],$_FILES['file']['tmp_name'])){
                   $document = 'Documents uplaoded';
                   }
               }
            $response = array(
                'Message' => 'Udyog Adhar Generated successfully',
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
        $uid  = $this->input->post('uid');
        if(!$uid || empty($uid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($uid))
        {
            $response = array(
                'Message' => 'Udyog Adhar removed successfully',
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
   public function updateudyog(){
    $data = array(
        'userid '=>$this->input->post('userid'),
        'adharnumber' => $this->input->post('adharnumber'),
        'nameofent'=>$this->input->post('nameofent'),
        'gender' => $this->input->post('gender'),
        'category'=>$this->input->post('category'),
        'mobilenumber' => $this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid'),
        'nameofentr'=>$this->input->post('nameofentr'),
        'typeoforg' => $this->input->post('typeoforg'),
        'ustate'=>$this->input->post('ustate'),
        'district' => $this->input->post('district'),
        'city'=>$this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        'postoffice'=>$this->input->post('postoffice'),
        'regdate'=>$this->input->post('regdate'),
        'bankName'=>$this->input->post('bankName'),
        'ifsc'=>$this->input->post('ifsc'),
        'bankAc'=>$this->input->post('bankAc'),
        'men'=>$this->input->post('men'),
        'women'=>$this->input->post('women')
        );
        $uid = $this->input->post('uid');
    
   
        if(!$uid && !$data || empty($uid)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
           $result = $this->service->updateudyog($uid,$data);
           if($result['result']!=0 && $result['data']!=null){
            $response = array(
                'Message' => 'Udyog Adhar successfully updated',
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
