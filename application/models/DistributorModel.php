<?php

class DistributorModel extends CI_Model {

    public function getretailors() {
        if(!empty($this->input->get("distretid"))){
            $data = $this->db->get_where("distributors_retailors", ['distretid' => $this->input->get("distretid")])->row_array();
        }else{
            $data = $this->db->get("distributors_retailors")->result();
        }
        return $data;
    }
    public function add_retailors($data)
    {    
        if($this->db->insert('distributors_retailors', $data)){
            return true;
         }else{
            return false;
         }
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
            return $this->db->insert('distributors_retailors',$data);
        }else{
            $this->db->where('distretid',$distretid);
            return $this->db->update('distributors_retailors',$data);
        }        
    }

}
