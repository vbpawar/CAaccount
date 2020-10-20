<?php

class CertificateModel extends CI_Model {

    public function getcertificates() {
        if(!empty($this->input->get("certid"))){
            $data = $this->db->get_where("ca_certificate", ['certid' => $this->input->get("certid")])->row_array();
        }else{
            $data = $this->db->get("ca_certificate")->result();
        }
        return $data;
    }
    public function addcertificate($data)
    {    
        if($this->db->insert('ca_certificate', $data)){
            return $this->db->insert_id();
         }else{
            return false;
         }
    }
    public function removecertificate($id){
        $this->db->where('certid', $id);
        if($this->db->delete('ca_certificate')){
           return true;
         }else{
           return false;
         }
    }

    public function updatecertificate($certid,$data)
    {
        if($certid==0){
            return $this->db->insert('ca_certificate',$data);
        }else{
            $this->db->where('certid',$certid);
            return $this->db->update('ca_certificate',$data);
        }        
    }

}
