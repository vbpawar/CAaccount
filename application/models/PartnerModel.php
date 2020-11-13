<?php

class PartnerModel extends CI_Model {

    public function get_details($partnerid) {
            $data = $this->db->get_where("partner_details", ['partnerid' => $partnerid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('partner_details', $data)){
           $result['partnerid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('partnerid', $id);
        if($this->db->delete('partner_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($partnerid,$data)
    {
        if($partnerid==0){
            return $this->db->insert('partner_details',$data);
        }else{
            $this->db->where('partnerid',$partnerid);
            return $this->db->update('partner_details',$data);
        }        
    }

}
