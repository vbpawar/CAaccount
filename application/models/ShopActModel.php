<?php

class ShopActModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT * FROM shopact pf 
        JOIN personal_details pd ON pd.pid = pf.pid 
        JOIN residential_details rd ON rd.rid = pf.rid 
        JOIN shop_details sd ON sd.sid = pf.sid ORDER BY pf.shopactid DESC";
        }else{
            $sql = "SELECT * FROM shopact pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            JOIN shop_details sd ON sd.sid = pf.sid WHERE pf.userid=$userid ORDER BY pf.shopactid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =  $query->result();
    return $result;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('shopact', $data)){
            $id = $this->db->insert_id();
            $sql = "SELECT * FROM shopact pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            JOIN shop_details sd ON sd.sid = pf.sid 
            WHERE pf.shopactid = $id";
            $query = $this->db->query($sql);
           $result['shopactid'] =  $id;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function add_partner_details($data)
    {
        $this->db->insert('shopact_partners', $data); 

        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        return FALSE;
    }
    public function removebill($id){
        $this->db->where('did', $id);
        if($this->db->delete('digital_signature')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($did,$data)
    {
        $result = [];
        $this->db->where('did',$did);
        $sql = "SELECT * FROM digital_signature pf 
        JOIN personal_details pd ON pd.pid = pf.pid
        JOIN residential_details rd ON rd.rid = pf.rid 
        WHERE pf.did = $did";
            if($this->db->update('digital_signature',$data)){
                $query = $this->db->query($sql);
                $result['status'] = true;
                $result['data'] =  $query->result();
            }else{
                $result['status'] = false;
            }         
            return $result;
        }  
        public function updatedigitalstatus($did,$data)
        {
            $result = false;
            $this->db->where('did',$did);
            if($this->db->update('digital_signature',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }             

}