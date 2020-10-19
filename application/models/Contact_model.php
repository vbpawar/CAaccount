<?php

class Contact_model extends CI_Model {
    
    public function createUserContact($contact) {
        $result=$this->db->insert('contact_master',$contact);
          return $result;
    }
}

