<?php

class AccessModel extends CI_Model {

    public function getuserlist($userid) {
        $sql = "SELECT uc.activityid,ac.activity,ac.servicetype,ac.pagename 
        FROM user_access_control uc 
        INNER JOIN activities ac ON ac.activityid = uc.activityid WHERE uc.userid = $userid";
    $query = $this->db->query($sql);
    return $query->result();
    }
    public function add_access($data)
    {    
        if($this->db->insert('user_access_control', $data)){
            $id = $this->db->insert_id();
            $sql = "SELECT uc.activityid,ac.activity,ac.servicetype,ac.pagename 
            FROM user_access_control uc 
            INNER JOIN activities ac ON ac.activityid = uc.activityid WHERE uc.userid = $id";
             $query = $this->db->query($sql);
        $data['data']= $query->result();
        $data['status'] = true;
         }else{
            $data['status'] = false;
         }
         return $data;
    }
    public function removemap($id){
        $this->db->where('accessid', $id);
        if($this->db->delete('user_access_control')){
           return true;
         }else{
           return false;
         }
    }


}
