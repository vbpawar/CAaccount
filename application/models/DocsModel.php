<?php

class DocsModel extends CI_Model {

    public function adddoc($data)
    {    
        $result = [];
        if($this->db->insert('documents', $data)){
           $result['docid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function getdocs($id,$service) {
        $sql = "SELECT * FROM documents WHERE rowid=$id AND service='$service'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
