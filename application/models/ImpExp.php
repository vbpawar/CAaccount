<?php

class ImpExp extends CI_Model {

    public function getimpexp() {
        if(!empty($this->input->get("id"))){
            $data = $this->db->get_where("importexport", ['id' => $this->input->get("id")])->row_array();
        }else{
            $data = $this->db->get("importexport")->result();
        }
        return $data;
    }
    public function addimpexp($data)
    {    
        if($this->db->insert('importexport', $data)){
            return $this->db->insert_id();
         }else{
            return false;
         }
    }
    public function removebill($id){
        $this->db->where('id', $id);
        if($this->db->delete('importexport')){
           return true;
         }else{
           return false;
         }
    }

    public function updateimpexp($id,$data)
    {
        if($id==0){
            $result['result']= $this->db->insert('importexport',$data);
            $result['data'] = [];
        }else{
            $this->db->where('id',$id);
            $result['result'] = $this->db->update('importexport',$data);
            $result['data']  = $this->db->get_where("importexport", ['id' => $id])->row_array();
        }       
        return $result; 
    }

}
