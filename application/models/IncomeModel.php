<?php

class IncomeModel extends CI_Model {

    public function getincomeforms() {
        if(!empty($this->input->get("id"))){
            $data = $this->db->get_where("incometax", ['id' => $this->input->get("id")])->row_array();
        }else{
            $data = $this->db->get("incometax")->result();
        }
        return $data;
    }
    public function addincomeform($data)
    {    
        if($this->db->insert('incometax', $data)){
            $id = $this->db->insert_id();
            $result['status'] = true;
           $result['data'] = $this->db->get_where("incometax", ['id' => $id])->row_array();
         }else{
            $result['data']=[];
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('id', $id);
        if($this->db->delete('incometax')){
           return true;
         }else{
           return false;
         }
    }

    public function updateincomeform($id,$data)
    {
        if($id==0){
            $result['result']= $this->db->insert('incometax',$data);
            $result['data'] = [];
        }else{
            $this->db->where('id',$id);
            $result['result'] = $this->db->update('incometax',$data);
            $result['data']  = $this->db->get_where("incometax", ['id' => $id])->row_array();
        }       
        return $result; 
    }

}
