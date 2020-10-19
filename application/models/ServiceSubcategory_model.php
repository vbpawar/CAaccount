<?php

class ServiceSubcategory_model extends CI_Model {

    public function getservicescategories() {
        $sql = "SELECT ss.categoryid,ss.serviceid,sm.servicename,ss.category,ss.createdat,ss.updatedat 
        FROM service_subcategorys ss INNER JOIN service_master sm ON sm.serviceid = ss.serviceid";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function addserviceSubcategory($data)
    {    
        if($this->db->insert('service_subcategorys', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removeserviceSubcategory($id){
        $this->db->where('categoryid', $id);
        if($this->db->delete('service_subcategorys')){
           return true;
         }else{
           return false;
         }
    }

    public function updateserviceSubCategory($categoryid,$data)
    {
        if($categoryid==0){
            return $this->db->insert('service_subcategorys',$data);
        }else{
            $this->db->where('categoryid',$categoryid);
            return $this->db->update('service_subcategorys',$data);
        }        
    }

}
