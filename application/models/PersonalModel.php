<?php

class PersonalModel extends CI_Model {

    public function get_details($pid) {
            $data = $this->db->get_where("personal_details", ['pid' => $pid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('personal_details', $data)){
           $result['pid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('pid', $id);
        if($this->db->delete('personal_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($pid,$data)
    {
        if($pid==0){
            return $this->db->insert('personal_details',$data);
        }else{
            $this->db->where('pid',$pid);
            return $this->db->update('personal_details',$data);
        }        
    }

}
