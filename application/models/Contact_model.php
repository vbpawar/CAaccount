<?php

class Contact_model extends CI_Model {
    
    public function createUserContact($data) {
        $result=$this->db->insert('contact_master',$data);
          return $result;
    }
    public function updatecontact($userid,$data)
    {
        $this->db->where('userid', $userid);
        $this->db->update('contact_master', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}

