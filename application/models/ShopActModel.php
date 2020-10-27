<?php

class ShopActModel extends CI_Model {

    public function getshopacts() {
        if(!empty($this->input->get("shopactid"))){
            $data = $this->db->get_where("shopact", ['shopactid' => $this->input->get("shopactid")])->row_array();
        }else{
            $data = $this->db->get("shopact")->result();
        }
        return $data;
    }
    public function addshopact($data)
    {    
        if($this->db->insert('shopact', $data)){
            return $this->db->insert_id();
         }else{
            return false;
         }
    }
    public function removebill($id){
        $this->db->where('shopactid', $id);
        if($this->db->delete('shopact')){
           return true;
         }else{
           return false;
         }
    }

    public function updateshopact($shopactid,$data)
    {
        if($shopactid==0){
            $result['result']= $this->db->insert('shopact',$data);
            $result['data'] = [];
        }else{
            $this->db->where('shopactid',$shopactid);
            $result['result'] = $this->db->update('shopact',$data);
            $result['data']  = $this->db->get_where("shopact", ['shopactid' => $shopactid])->row_array();
        }       
        return $result; 
    }

}
