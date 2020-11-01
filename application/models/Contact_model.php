<?php

class Contact_model extends CI_Model {
    
    public function createUserContact($userid,$data) {
        $result=$this->db->insert('contact_master',$contact);
          return $result;
    }
    public function updatecontact($userid,$data)
    {
        $this->db->where('userid',$userid);
        $result['result'] =   $this->db->update('contact_master',$data);
        $result['data']  = $this->db->get_where("contact_master", ['userid' => $userid])->row_array();
        return $result;
    }
}

