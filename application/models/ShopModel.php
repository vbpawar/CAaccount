<?php

class ShopModel extends CI_Model {

    public function get_details($sid) {
            $data = $this->db->get_where("shop_details", ['sid' => $sid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('shop_details', $data)){
           $result['sid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('sid', $id);
        if($this->db->delete('shop_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($sid,$data)
    {
        if($sid==0){
            return $this->db->insert('shop_details',$data);
        }else{
            $this->db->where('sid',$sid);
            return $this->db->update('shop_details',$data);
        }        
    }
    public function update_shop_status($id,$data)
    {
        $result = false;
        $this->db->where('sid',$id);
        if($this->db->update('shop_details',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    }     

}
