<?php

class DigitalModel extends CI_Model {

    public function get_details($did) {
            $data = $this->db->get_where("digital_signature", ['did' => $did])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('digital_signature', $data)){
           $result['did'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('did', $id);
        if($this->db->delete('digital_signature')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($did,$data)
    {
        if($did==0){
            return $this->db->insert('digital_signature',$data);
        }else{
            $this->db->where('did',$did);
            return $this->db->update('digital_signature',$data);
        }        
    }

}
