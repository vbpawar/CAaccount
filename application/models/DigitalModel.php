<?php

class DigitalModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.did,pf.userid,pf.class,pf.nature_of_buss,pf.trade_name,pf.place_of_buss,pf.status,pf.remark,pf.createdat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
        u.firstname,u.lastname,u.roleid
        FROM digital_signature pf 
                JOIN personal_details pd ON pd.pid = pf.pid
                JOIN user_master u  ON u.userid = pf.userid
                JOIN residential_details rd ON rd.rid = pf.rid ORDER BY pf.did DESC";
        }else{
            $sql = "SELECT pf.did,pf.userid,pf.class,pf.nature_of_buss,pf.trade_name,pf.place_of_buss,pf.status,pf.remark,pf.createdat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid
            FROM digital_signature pf 
                    JOIN personal_details pd ON pd.pid = pf.pid
                    JOIN user_master u  ON u.userid = pf.userid
                    JOIN residential_details rd ON rd.rid = pf.rid WHERE pf.userid=$userid ORDER BY pf.did DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =  $query->result();
    return $result;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('digital_signature', $data)){
            $did = $this->db->insert_id();
            $sql = "SELECT pf.did,pf.userid,pf.class,pf.nature_of_buss,pf.trade_name,pf.place_of_buss,pf.status,pf.remark,pf.createdat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid
            FROM digital_signature pf 
                    JOIN personal_details pd ON pd.pid = pf.pid
                    JOIN user_master u  ON u.userid = pf.userid
                    JOIN residential_details rd ON rd.rid = pf.rid
            WHERE pf.did = $did";
            $query = $this->db->query($sql);
           $result['did'] =  $did;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
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