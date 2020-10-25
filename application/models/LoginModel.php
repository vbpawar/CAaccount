<?php

class LoginModel extends CI_Model {

    public function checkauth($user,$pass) {
       $data = $this->db->get_where("projectedbalancesheet", ['projectedid' => $this->input->get("projectedid")])->row_array();
       
        return $data;
    }
}
