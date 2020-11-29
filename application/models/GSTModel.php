<?php

class GSTModel extends CI_Model {

    public function get_details() {
        $result = [];
        $sql = "SELECT * FROM udyog_adhar pf 
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
        if($this->db->insert('udyog_adhar', $data)){
            $uid = $this->db->insert_id();
            $sql = "SELECT * FROM udyog_adhar pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.bid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            JOIN shop_details sd ON sd.sid = pf.sid 
            WHERE pf.uid = $uid";
            $query = $this->db->query($sql);
           $result['uid'] =  $uid;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('pfid', $id);
        if($this->db->delete('udyog_adhar')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($pfid,$data)
    {
       
            $this->db->where('pfid',$pfid);
            $sql = "SELECT * FROM udyog_adhar pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.pfid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.pfid = $pfid";
            if($this->db->update('udyog_adhar',$data)){
                $query = $this->db->query($sql);
                $result['status'] = true;
                $result['data'] =  $query->result();
            }else{
                $result['status'] = false;
            }         
            return $result;
        }        
        public function updatestatus($id,$data)
        {
            $result = false;
            $this->db->where('uid',$id);
            if($this->db->update('udyog_adhar',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }    
}
