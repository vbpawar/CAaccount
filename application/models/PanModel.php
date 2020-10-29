<?php

class PanModel extends CI_Model {

    public function getpancards() {
        if(!empty($this->input->get("panid"))){
            $data = $this->db->get_where("pancard", ['panid' => $this->input->get("panid")])->row_array();
        }else{
            $data = $this->db->get("pancard")->result();
        }
        return $data;
    }
    public function addpancard($data)
    {    
        if($this->db->insert('pancard', $data)){
            $panid = $this->db->insert_panid();
            $result['status'] = true;
           $result['data'] = $this->db->get_where("pancard", ['panid' => $panid])->row_array();
         }else{
            $result['data']=[];
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($panid){
        $this->db->where('panid', $panid);
        if($this->db->delete('pancard')){
           return true;
         }else{
           return false;
         }
    }

    public function updatepanform($panid,$data)
    {
        if($panid==0){
            $result['result']= $this->db->insert('pancard',$data);
            $result['data'] = [];
        }else{
            $this->db->where('panid',$panid);
            $result['result'] = $this->db->update('pancard',$data);
            $result['data']  = $this->db->get_where("pancard", ['panid' => $panid])->row_array();
        }       
        return $result; 
    }

}
