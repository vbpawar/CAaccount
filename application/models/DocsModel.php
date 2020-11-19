<?php

class DocsModel extends CI_Model {

    public function add_pf_docs($data)
    {    
        $result = [];
        if($this->db->insert('pf_docs', $data)){
           $result['docid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function get_pf_docs($pfid) {
        $sql = "SELECT * FROM pf_docs WHERE pfid=$pfid";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
