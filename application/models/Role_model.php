<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Role_model extends CI_Model {

    public function getRoles() {
        $query = $this->db->get('role_master');
        return $query->result();
    }

}
