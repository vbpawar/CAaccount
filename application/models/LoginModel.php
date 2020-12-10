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
            $token = md5($user).rand(10,9999);
            $expFormat = mktime(
            date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
            );
           $expDate = date("Y-m-d H:i:s",$expFormat);
           $sql = "UPDATE user_master SET token = '$token',expiredate='$expDate' WHERE emailid = '$user'";
           $query = $this->db->query($sql);
         //  $result['data'] = $query->result();
           $result['token'] =  $token;
           $result['token'] =   $expDate;
            $result['status']= true;
        }  
        else  
        {  
            $result['data'] = [];
            $result['status']= false;     
        }  
        return $result;
    }
    public function check_link($email,$token)
    {
        $sql = "SELECT * FROM user_master WHERE token = '$token',emailid='$email'";
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
