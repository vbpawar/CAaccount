<?php

class Service_model extends CI_Model {

    public function getservices() {
        if(!empty($this->input->get("serviceid"))){
            $data = $this->db->get_where("service_master", ['serviceid' => $this->input->get("serviceid")])->row_array();
        }else{
            $data = $this->db->get("service_master")->result();
        }
        return $data;
    }
    public function addservice($data)
    {    
        if($this->db->insert('service_master', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removeservice($id){
        $this->db->where('serviceid', $id);
        if($this->db->delete('service_master')){
           return true;
         }else{
           return false;
         }
    }

    public function updateservice($serviceid,$data)
    {
        if($serviceid==0){
            return $this->db->insert('service_master',$data);
        }else{
            $this->db->where('serviceid',$serviceid);
            return $this->db->update('service_master',$data);
        }        
    }

}
