<?php

class LoginModel extends CI_Model {

    public function checkauth($user,$pass) {
        $result = array();
        $this->db->where('emailid', $user);  
        $this->db->where('upassword', $pass);  
        $query = $this->db->get('user_master');  
        if($query->num_rows() > 0)  
        {  
            $result['data'] = $query->result();
            $result['status']= true;
        }  
        else  
        {  
            $result['data'] = [];
            $result['status']= false;     
        }  
        return $result;
    }
}
