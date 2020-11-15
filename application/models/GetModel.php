<?php

class GetModel extends CI_Model {

    public function getdistributors() {
        $sql = "SELECT um.firstname,um.lastname,um.userid FROM user_master um WHERE um.roleid = 2";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function getretailors() {
        $sql = "SELECT um.firstname,um.lastname,um.userid FROM user_master um WHERE um.roleid = 3";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function getemployees() {
        $sql = "SELECT um.firstname,um.lastname,um.userid FROM user_master um WHERE um.roleid = 4";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function activities() {
        $sql = "SELECT * FROM activities";
        $query = $this->db->query($sql);
    return $query->result();
    }

}
