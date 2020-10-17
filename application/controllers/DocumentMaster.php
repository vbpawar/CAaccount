<?php
require APPPATH . 'libraries/REST_Controller.php';
// use Restserver\Libraries\REST_Controller;
header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');
class DocumentMaster extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Document_model','Docs');
    }
    private $response = null;
    private $records = null;

    //get API for all docs
    public function getAllDocs() {
        $records = $this->Docs->getDocuments();
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
        //$this->response($response, REST_Controller::HTTP_OK);
         echo json_encode($response);
    }

    //create API for documnet master
    public function addDocument()
    {
        $data = array(
        'document' => $this->input->post('document')
        );
    if(!$this->input->post('document')){
        $response = array(
            'Message' => 'Pass the document title',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->Docs->insert_documents($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Document not added try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Document added succesfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removeDoc()
    {
        $id  = $this->Docs->remove_document('docId');
        if(!$id){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }
         
        if($this->Docs->delete($id))
        {
            $response = array(
                'Message' => 'Document Removed successfully',
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
        echo json_encode($response);
    }

   //API - update a book 
   function updatedocument(){
         
    $document      = $this->input->post('document');
    $docId         = $this->input->post('docId');
    
    if(!$document && !$docId){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->Docs->updatedoc($docId, array("document"=>$document));
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Document updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
