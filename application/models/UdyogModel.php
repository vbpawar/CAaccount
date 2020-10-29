<?php

class UdyogModel extends CI_Model {

    public function getudyogs() {
        if(!empty($this->input->get("uid"))){
            $data = $this->db->get_where("udyog_adhar", ['uid' => $this->input->get("uid")])->row_array();
        }else{
            $data = $this->db->get("udyog_adhar")->result();
        }
        return $data;
    }
    public function addudyog($data)
    {    
        if($this->db->insert('udyog_adhar', $data)){
          $id = $this->db->insert_id();
            $result['data']  = $this->db->get_where("udyog_adhar", ['uid' => $id])->row_array();
            $result['status'] =true;
         }else{
            $result['status'] =false;
            $result['data']=[];
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('uid', $id);
        if($this->db->delete('udyog_adhar')){
           return true;
         }else{
           return false;
         }
    }

    public function updateudyog($uid,$data)
    {
        if($uid==0){
            $result['result']= $this->db->insert('udyog_adhar',$data);
            $result['data'] = [];
        }else{
            $this->db->where('uid',$uid);
            $result['result'] = $this->db->update('udyog_adhar',$data);
            $result['data']  = $this->db->get_where("udyog_adhar", ['uid' => $uid])->row_array();
        }       
        return $result; 
    }

}
