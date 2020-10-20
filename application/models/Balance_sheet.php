<?php

class Balance_sheet extends CI_Model {

    public function getsheets() {
        if(!empty($this->input->get("billid"))){
            $data = $this->db->get_where("projectedbalancesheet", ['projectedid' => $this->input->get("projectedid")])->row_array();
        }else{
            $data = $this->db->get("projectedbalancesheet")->result();
        }
        return $data;
    }
    public function addsheet($data)
    {    
        if($this->db->insert('projectedbalancesheet', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removebill($id){
        $this->db->where('projectedid', $id);
        if($this->db->delete('projectedbalancesheet')){
           return true;
         }else{
           return false;
         }
    }

    public function updatebill($projectedid,$data)
    {
        if($projectedid==0){
            return $this->db->insert('projectedbalancesheet',$data);
        }else{
            $this->db->where('projectedid',$certid);
            return $this->db->update('projectedbalancesheet',$data);
        }        
    }

}
