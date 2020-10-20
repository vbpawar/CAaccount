<?php

class Eway_bill extends CI_Model {

    public function getreports() {
        if(!empty($this->input->get("reportid"))){
            $data = $this->db->get_where("project_report", ['reportid' => $this->input->get("reportid")])->row_array();
        }else{
            $data = $this->db->get("project_report")->result();
        }
        return $data;
    }
    public function addreport($data)
    {    
        if($this->db->insert('project_report', $data)){
            return true;
         }else{
            return false;
         }
    }
    public function removereport($id){
        $this->db->where('reportid', $id);
        if($this->db->delete('project_report')){
           return true;
         }else{
           return false;
         }
    }

    public function updatereport($reportid,$data)
    {
        if($reportid==0){
            return $this->db->insert('project_report',$data);
        }else{
            $this->db->where('reportid',$reportid);
            return $this->db->update('project_report',$data);
        }        
    }

}
