<?php

class User_model extends CI_Model {

    public function createNewUser($user) {
        $query = $this->db->insert('user_master', $user);
        return $this->db->insert_id();
    }
    public function getAllUsersList() {
        $query = $this->db->query("SELECT u.`userid`,u.`roleid`,u.`emailid` ,u.`firstname`,u.`lastname`,u.`upassword`,u.`contact`,c.country,c.ustate,c.city,c.pincode,c.uaddress FROM `user_master` u LEFT JOIN contact_master c ON u.`userid`=c.`userid`");
        return $query->result();
    }
}
