<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Document_model extends CI_Model {

    public function getDocuments() {
        $query = $this->db->get('document_master');
        return $query->result();
    }
    public function insert_documents($data)
    {    
        if($this->db->insert('document_master', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function remove_document($id){
        $this->db->where('docId', $id);
        if($this->db->delete('document_master')){
           return true;
         }else{
           return false;
         }
    }

}
