<?php

class DistributorModel extends CI_Model {

    public function getretailors() {
        $sql = "SELECT um.firstname  dname,um.lastname dlname,u.firstname rname,u.lastname rlname,dr.distretid,dr.distributorid,dr.retailorid 
        FROM distributors_retailors dr INNER JOIN user_master um ON dr.distributorid = um.userid 
        INNER JOIN user_master u ON u.userid = dr.retailorid";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function add_retailors($data)
    {    
        if($this->db->insert('distributors_retailors', $data)){
            $id = $this->db->insert_id();
            $sql = "SELECT um.firstname  dname,um.lastname dlname,u.firstname rname,u.lastname rlname,dr.distretid,dr.distributorid,dr.retailorid 
            FROM distributors_retailors dr INNER JOIN user_master um ON dr.distributorid = um.userid 
            INNER JOIN user_master u ON u.userid = dr.retailorid WHERE distretid = $id";
             $query = $this->db->query($sql);
        $data['data']= $query->result();
        $data['status'] = true;
         }else{
            $data['status'] = false;
         }
         return $data;
    }
    public function removemap($id){
        $this->db->where('distretid', $id);
        if($this->db->delete('distributors_retailors')){
           return true;
         }else{
           return false;
         }
    }

    public function updateretailors($distretid,$data)
    {
        if($distretid==0){
             $this->db->insert('distributors_retailors',$data);
             $data['status'] = false;
        }else{
            $this->db->where('distretid',$distretid);
             $this->db->update('distributors_retailors',$data);
            $sql = "SELECT um.firstname  dname,um.lastname dlname,u.firstname rname,u.lastname rlname,dr.distretid,dr.distributorid,dr.retailorid 
            FROM distributors_retailors dr INNER JOIN user_master um ON dr.distributorid = um.userid 
            INNER JOIN user_master u ON u.userid = dr.retailorid WHERE distretid = $distretid";
             $query = $this->db->query($sql);
        $data['data']= $query->result();
        $data['status'] = true;
        }  
        return $data;      
    }

}
