<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class E_waybill extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Eway_bill','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function gatewaybills() {
        $records = $this->service->gatewaybills();
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
    public function addbill()
    {
        $data = array(
        'userid '=>$this->input->post('userid'),
        'gstnumber' => $this->input->post('gstnumber'),
        'gstid'=>$this->input->post('gstid'),
        'gstpwd' => $this->input->post('gstpwd'),
        'mobilenumber'=>$this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid')
        );
        
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addbill($data);
        $a=false;
         $p=false;
        if(!$result['status']){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        if(!empty($_FILES['aadharattach']['name']) && !empty($_FILES['panattach']['name']) ){ 
         $a = $this->uploaddocs('aadharattach',$_FILES['aadharattach']['name']);
         $p= $this->uploaddocs('panattach',$_FILES['panattach']['name']);
        }
        if($a && $p){
            $document = 'Documents uplaoded';
        }else{
            $document = 'Document not uploaded';
        }
        $response = array(
            'Message' => 'E-Way Bill Generated successfully',
            'Doc'=>$document,
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('billid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'E-Way bill removed successfully',
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
   public function updatebill(){
    $data = array(
        'userid '=>$this->input->post('userid'),
        'gstnumber' => $this->input->post('gstnumber'),
        'gstid'=>$this->input->post('gstid'),
        'gstpwd' => $this->input->post('gstpwd'),
        'mobilenumber'=>$this->input->post('mobilenumber'),
        'emailid' => $this->input->post('emailid')
        );
        $billid = $this->input->post('billid');
    
    if(!$billid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updatebill($billid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'E-Way bill updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }

   public function uploaddocs($filetitle,$file)
   {
   echo $file;
        $config['upload_path'] = 'document/'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf'; 
        $config['max_size'] = '5000'; // max_size in kb 
        $config['file_name'] = $file; 

        // Load upload library 
        $this->load->library('upload',$config); 
  
        // File upload
        if($this->upload->do_upload($filetitle)){ 
           // Get data about the file
           $uploadData = $this->upload->data(); 
           $filename = $uploadData['file_name']; 
           return true; 
        }else{ 
          return false; 
        } 
   }
    
}
