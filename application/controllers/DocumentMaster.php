<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

class DocumentMaster extends CI_Controller {

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
    
}
