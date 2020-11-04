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

    public function deleteUser($userid) {
//        DELETE user_master ,contact_master from user_master INNER JOIN contact_master ON user_master.userid=contact_master.userid WHERE user_master.userid=8
//        $query = $this->db->query("DELETE user_master ,contact_master from user_master INNER JOIN contact_master ON user_master.userid=contact_master.userid WHERE user_master.userid='$userid'");
//        
//        another way to delete multiple table records
        $this->db->where('userid', $userid);
        $result = $this->db->delete('user_master');
        if ($result) {
            $this->db->where('userid', $userid);
        $res = $this->db->delete('contact_master');
        
            return ($res)?TRUE:FALSE;
        } else {
            return FALSE;
        }
    }

    public function findUser($userid) {
        $query = $this->db->query("SELECT u.`userid`,u.`roleid`,u.`emailid` ,u.`firstname`,u.`lastname`,u.`upassword`,u.`contact`,c.country,c.ustate,c.city,c.pincode,c.uaddress FROM `user_master` u LEFT JOIN contact_master c ON u.`userid`=c.`userid` where u.userid='$userid'");
        return $query->row();
    }

    public function updateuser($userid, $data) {
        $this->db->where('userid', $userid);
        $this->db->update('user_master', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

}
