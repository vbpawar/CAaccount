<?php

class User_model extends CI_Model {

    public function createNewUser($user) {
        $query = $this->db->insert('user_master', $user);
        return $this->db->insert_id();
    }

}
