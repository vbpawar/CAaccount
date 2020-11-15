<?php

class Pan_model extends CI_Model {

    public function get_details() {
        $result = [];
        $sql = "SELECT * FROM pan_service pf 
        JOIN residential_details rd ON rd.rid = pf.rid";
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result();       
        return $result;
    }   
    
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('pan_service', $data)){
            $uid = $this->db->insert_id();
            $sql = "SELECT * FROM pan_service pf 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.panid = $uid";
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
        $this->db->where('panid', $id);
        if($this->db->delete('pan_service')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($panid,$data)
    {
       
            $this->db->where('panid',$panid);
            $sql = "SELECT * FROM pan_service pf
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.panid = $panid";
            if($this->db->update('pan_service',$data)){
                $query = $this->db->query($sql);
                $result['status'] = true;
                $result['data'] =  $query->result();
            }else{
                $result['status'] = false;
            }         
            return $result;
        }        

}
