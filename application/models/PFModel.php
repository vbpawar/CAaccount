<?php

class PFModel extends CI_Model {

    public function get_details($roleid,$userid) {

        $result = [];
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.pfid,pf.userid,pf.uan_number,pf.uan_password,pf.status,pf.remark,pf.createdat,pf.updatedat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
        u.firstname,u.lastname,u.roleid,
        bd.bank_name,bd.ac_number,bd.ifsc_number
        FROM pf_withdrwal pf 
        JOIN personal_details pd ON pd.pid = pf.pid 
        JOIN bank_details bd ON bd.bid = pf.pfid
        JOIN user_master u ON u.userid = pf.userid
        JOIN residential_details rd ON rd.rid = pf.rid ORDER BY pf.pfid DESC";
        }else{
            $sql = "SELECT pf.pfid,pf.userid,pf.uan_number,pf.uan_password,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid,
            bd.bank_name,bd.ac_number,bd.ifsc_number
            FROM pf_withdrwal pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.pfid
            JOIN user_master u ON u.userid = pf.userid
            JOIN residential_details rd ON rd.rid = pf.rid WHERE pf.userid=$userid";
        }
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
            $sql = "SELECT pf.pfid,pf.userid,pf.uan_number,pf.uan_password,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid,
            bd.bank_name,bd.ac_number,bd.ifsc_number
            FROM pf_withdrwal pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.pfid
            JOIN user_master u ON u.userid = pf.userid
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
        public function updatepfstatus($pfid,$data)
        {
            $result = false;
            $this->db->where('pfid',$pfid);
            if($this->db->update('pf_withdrwal',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }        

}
