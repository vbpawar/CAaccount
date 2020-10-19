<?php

class Emp_serviceModel extends CI_Model {

    public function getemployeeservices() {
        $sql = "SELECT es.empserviceid,es.serviceid,sm.servicename,es.empid,um.firstname,um.lastname,es.createdat 
        FROM employee_service es INNER JOIN user_master um ON um.userid = es.empid 
        INNER JOIN service_master sm ON sm.serviceid = es.serviceid";
            $query = $this->db->query($sql);
    return $query->result();
    }
    public function addempservice($data)
    {    
        if($this->db->insert('employee_service', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removeempservice($id){
        $this->db->where('empserviceid', $id);
        if($this->db->delete('employee_service')){
           return true;
         }else{
           return false;
         }
    }

    public function updateempservice($empserviceid,$data)
    {
        if($empserviceid==0){
            return $this->db->insert('employee_service',$data);
        }else{
            $this->db->where('empserviceid',$empserviceid);
            return $this->db->update('employee_service',$data);
        }        
    }

}
