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
//pan details
    public function get_pan_docs($panid) {
        $sql = "SELECT * FROM pan_docs WHERE panid=$panid";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function add_pan_docs($data)
    {    
        $result = [];
        if($this->db->insert('pan_docs', $data)){
           $result['docid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    //shop act docs
    public function add_docs($data,$table)
    {    
        $result = [];
        if($this->db->insert($table, $data)){
           $result['docid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function get_shop_docs($id) {
        $sql = "SELECT * FROM shopact_docs WHERE shid=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function add_digital_docs($data)
    {    
        $result = [];
        if($this->db->insert('digital_docs', $data)){
           $result['docid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function get_digital_docs($did) {
        $sql = "SELECT * FROM digital_docs WHERE did=$did";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   

    public function add_remark_docs($data)
    {    
        $result = [];
        if($this->db->insert('remarks_document', $data)){
           $result['remarkid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function get_update_remarks_docs($rowid,$service) {
        $sql = "SELECT * FROM remarks_document WHERE rowid=$rowid AND service = '$service'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //udyog docs
    public function get_udyogdocs($id) {
        $sql = "SELECT * FROM udyog_docs ud WHERE ud.uid=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    //upload documents

    public function uploaddocs($data)
    {
        $ext    = pathinfo($data['filename'], PATHINFO_EXTENSION);
        $tdata   = array(
            'extension' => $ext,
            'userid' => $data['userid'],
            $data['prim'] => $data['id'],
            'doctype' => $data['name']
        );
        $this->db->insert($data['table'], $tdata); 
        if ($this->db->affected_rows() > 0)
        {
            $imgid      = $this->db->insert_id();
            $sourcePath = $data['file']; // Storing source path of the file in a variable
            $targetPath = "./documents/".$data['folder']."/" . $imgid . "." . $ext; // Target path where file is to be stored
            if (move_uploaded_file($sourcePath, $targetPath)) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
       
    }
    //income docs
    public function income_docs($id) {
        $sql = "SELECT * FROM income_docs WHERE inid=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
//annual gst docs
    public function get_annual_docs($id) {
        $sql = "SELECT * FROM gst_annual_docs WHERE gid=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_file_docs($id) {
        $sql = "SELECT * FROM gst_file_docs WHERE gid=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}