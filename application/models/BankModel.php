<?php

class BankModel extends CI_Model {

    public function get_details($bid) {
            $data = $this->db->get_where("bank_details", ['bid' => $bid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('bank_details', $data)){
           $result['bid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('bid', $id);
        if($this->db->delete('bank_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($bid,$data)
    {
        if($bid==0){
            return $this->db->insert('bank_details',$data);
        }else{
            $this->db->where('bid',$bid);
            return $this->db->update('bank_details',$data);
        }        
    }

}
