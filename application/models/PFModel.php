<?php

class PFModel extends CI_Model {

    public function get_details() {
        $result = [];
        $sql = "SELECT * FROM pf_withdrwal pf 
        JOIN personal_details pd ON pd.pid = pf.pid 
        JOIN bank_details bd ON bd.bid = pf.pfid 
        JOIN residential_details rd ON rd.rid = pf.rid";
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result();       
        return $result;
    }   
    
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('pf_withdrwal', $data)){
            $pfid = $this->db->insert_id();
            $sql = "SELECT * FROM pf_withdrwal pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.pfid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.pfid = $pfid";
            $query = $this->db->query($sql);
           $result['pfid'] =  $pfid;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('pfid', $id);
        if($this->db->delete('pf_withdrwal')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($pfid,$data)
    {
       
            $this->db->where('pfid',$pfid);
            $sql = "SELECT * FROM pf_withdrwal pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.pfid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.pfid = $pfid";
            if($this->db->update('pf_withdrwal',$data)){
                $query = $this->db->query($sql);
                $result['status'] = true;
                $result['data'] =  $query->result();
            }else{
                $result['status'] = false;
            }         
            return $result;
        }        

}
