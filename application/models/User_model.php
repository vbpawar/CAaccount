<?php

class User_model extends CI_Model {

    public function createNewUser($user) {
        $query = $this->db->insert('user_master', $user);
        return $this->db->insert_id();
    }

    public function getAllUsersList() {
        $query = $this->db->query("SELECT u.isactive,u.`userid`,u.`roleid`,u.`emailid` ,u.`firstname`,
        u.`lastname`,u.`upassword`,u.`contact`,c.country,c.ustate,c.city,c.pincode,c.uaddress,rm.role 
        FROM `user_master` u LEFT JOIN contact_master c ON u.`userid`=c.`userid` 
        INNER JOIN role_master rm ON rm.roleid = u.roleid ORDER BY u.userid DESC");
        return $query->result();
    }
    public function getDistributorList($userid) {
        $query = $this->db->query("SELECT u.`userid`,u.`roleid`,u.`emailid` ,u.`firstname`,u.`lastname`,
        u.`upassword`,u.`contact`,c.country,c.ustate,c.city,c.pincode,c.uaddress,rm.role 
        FROM distributors_retailors dr JOIN user_master u ON dr.retailorid  = u.userid 
        LEFT JOIN contact_master c ON u.`userid`=c.`userid`
         INNER JOIN role_master rm ON rm.roleid = u.roleid WHERE dr.distributorid = $userid");
        return $query->result();
    }

    public function getUserAccess() {
        $query = $this->db->query("SELECT * FROM user_access_control");
        return $query->result();
    }
    public function deleteUser($userid) {
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
    public function delete_access($userid) {
                $this->db->where('userid', $userid);
                $result = $this->db->delete('user_access_control');
                if ($result) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            }

    public function findUser($userid) {
        $query = $this->db->query("SELECT u.`userid`,u.`roleid`,u.`emailid` ,u.`firstname`
        ,u.`lastname`,u.`upassword`,u.`contact`,c.country,c.ustate,c.city,c.pincode,c.uaddress FROM `user_master` u LEFT JOIN contact_master c ON u.`userid`=c.`userid` where u.userid='$userid'");
        return $query->row();
    }

    public function updateuser($userid, $data) {
        $this->db->where('userid', $userid);
        $this->db->update('user_master', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function create_batch($data){
        $query = $this->db->insert('user_access_control', $data);
      return $this->db->insert_id();
      }
      public function activate_user($userid)
      {
        $sql = "UPDATE  user_master SET isactive = CASE WHEN isactive = 1 THEN  isactive = 0 WHEN 
        isactive = 0 THEN  isactive = 0 END WHERE userid= $userid";
         $query = $this->db->query($sql);
         return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
      }
     
}
