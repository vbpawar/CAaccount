<?php

class LoginModel extends CI_Model {

    public function checkauth($user,$pass) {
        $result = array();
        $sql = "SELECT * FROM user_master
         WHERE emailid = '$user' AND upassword='$pass' AND isactive=1";
        $query = $this->db->query($sql);  
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

    public function accesspages($userid){
        $sql = "SELECT uc.accessid,ac.activityid,ac.activity,ac.path,ac.pagename,ac.servicetype 
        FROM user_access_control uc INNER JOIN activities ac ON ac.activityid = uc.activityid
         WHERE uc.userid = $userid";
    $query = $this->db->query($sql);
    return $query->result();
    }

    public function send_mail($user) {
        $result = array();
        $sql = "SELECT * FROM user_master WHERE emailid = '$user'";
        $query = $this->db->query($sql);  
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
