<?php

class Service_chargeModel extends CI_Model {

    public function getservicecharges() {
        $sql = "SELECT ss.categoryid,ss.serviceid,sm.servicename,ss.category,ss.createdat,ss.updatedat 
        FROM service_subcategorys ss INNER JOIN service_master sm ON sm.serviceid = ss.serviceid";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function addservicecharges($data)
    {    
        if($this->db->insert('service_charges', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removeservicecharges($id){
        $this->db->where('chargesid', $id);
        if($this->db->delete('service_charges')){
           return true;
         }else{
           return false;
         }
    }

    public function updateservicecharges($categoryid,$data)
    {
        if($categoryid==0){
            return $this->db->insert('service_charges',$data);
        }else{
            $this->db->where('chargesid',$categoryid);
            return $this->db->update('service_charges',$data);
        }        
    }

}
