<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 
class E_waybill extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Eway_bill','service');
        $this->load->model('DocsModel','docs');
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
           $id = $result['id'];
        $document = 'Document not uploaded';
        if(!empty($_FILES['adhar']['name']) && !empty($_FILES['file']['name']) ){ 
         if($this->uploaddocs('aadhar',$id,'EWAY',$_FILES['adhar']['name'],$_FILES['adhar']['tmp_name'])){
         $document = 'Documents uplaoded';
         }
         if($this->uploaddocs('pan',$id,'EWAY',$_FILES['file']['name'],$_FILES['file']['tmp_name'])){
            $document = 'Documents uplaoded';
            }
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

   public function uploaddocs($doctype,$rowid,$service,$filename,$file)
   {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $data = array(
        'service'=>$service,
        'rowid'=>$rowid,
        'extension'=>$ext,
        'doctype'=>$doctype
    );
    $result = $this->docs->adddoc($data);
    if($result){
        $imgid = $result['docid'];
    $sourcePath = $file; // Storing source path of the file in a variable
    $targetPath = "./documents/".$imgid.".".$ext; // Target path where file is to be stored
    if(move_uploaded_file($sourcePath,$targetPath)){
       return true;
    }else{
        return false;
    }
    }else{
        return false;
    }  
   }
   public function getdocs($id,$service)
   {
       $response=[];
    $response = $this->docs->getdocs($id,$service); 
    if(count($response)>0){
        echo json_encode($response);
    }else{
        echo json_encode($response);
    }
   
   }
    
}
