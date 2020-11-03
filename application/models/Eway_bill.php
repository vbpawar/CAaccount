<?php

class Eway_bill extends CI_Model {

    public function gatewaybills() {
        if(!empty($this->input->get("billid"))){
            $data = $this->db->get_where("e_waybill", ['billid' => $this->input->get("billid")])->row_array();
        }else{
            $data = $this->db->get("e_waybill")->result();
        }
        return $data;
    }
    public function addbill($data)
    {    
        $result = [];
        if($this->db->insert('e_waybill', $data)){
           $result['id'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('billid', $id);
        if($this->db->delete('e_waybill')){
           return true;
         }else{
           return false;
         }
    }

    public function updatebill($billid,$data)
    {
        if($billid==0){
            return $this->db->insert('e_waybill',$data);
        }else{
            $this->db->where('billid',$billid);
            return $this->db->update('e_waybill',$data);
        }        
    }

}
