<?php

class ResidentialModel extends CI_Model {

    public function get_details($rid) {
            $data = $this->db->get_where("residential_details", ['rid' => $rid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('residential_details', $data)){
           $result['rid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('rid', $id);
        if($this->db->delete('residential_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($rid,$data)
    {
        if($rid==0){
            return $this->db->insert('residential_details',$data);
        }else{
            $this->db->where('rid',$rid);
            return $this->db->update('residential_details',$data);
        }        
    }

}
