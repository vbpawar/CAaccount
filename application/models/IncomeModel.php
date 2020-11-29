<?php

class IncomeModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT * FROM incometax pf 
        JOIN personal_details pd ON pd.pid = pf.pid 
        JOIN residential_details rd ON rd.rid = pf.rid  ORDER BY pf.inid DESC";
        }else{
            $sql = "SELECT * FROM incometax pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.userid=$userid ORDER BY pf.inid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =  $query->result();
    return $result;
    }
   
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('incometax', $data)){
            $id = $this->db->insert_id();
            $sql = "SELECT * FROM incometax pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            WHERE pf.inid = $id";
            $query = $this->db->query($sql);
           $result['inid'] =  $id;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function add_partner_details($data)
    {
        $this->db->insert('incometax_partners', $data); 

        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        return FALSE;
    }
    public function removebill($id){
        $this->db->where('did', $id);
        if($this->db->delete('incometax')){
           return true;
         }else{
           return false;
         }
    }

    
        public function updatedigitalstatus($did,$data)
        {
            $result = false;
            $this->db->where('inid',$did);
            if($this->db->update('incometax',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }       

}
