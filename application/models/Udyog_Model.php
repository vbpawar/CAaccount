<?php

class Udyog_Model extends CI_Model {

    public function get_details($roleid,$userid) {
        $result = [];
        if($roleid ==1 || $roleid ==4){
            $sql = "SELECT pf.uid,pf.userid,pf.nature_of_buss,pf.buss_type,pf.turn_over_amt,pf.gst_number,pf.male,pf.female,pf.status,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid,
            bd.bank_name,bd.ac_number,bd.ifsc_number,
            sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date
            FROM udyog_adhar pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.bid
            JOIN residential_details rd ON rd.rid = pf.rid
            JOIN user_master u ON u.userid = pf.userid
            JOIN shop_details sd ON sd.sid = pf.sid ORDER BY pf.uid DESC";
            }else{
                $sql = "SELECT pf.uid,pf.userid,pf.nature_of_buss,pf.buss_type,pf.turn_over_amt,pf.gst_number,pf.male,pf.female,pf.status,pf.status,pf.remark,pf.createdat,pf.updatedat,
                pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
                rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
                u.firstname,u.lastname,u.roleid,
                bd.bank_name,bd.ac_number,bd.ifsc_number,
                sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date
                FROM udyog_adhar pf 
                JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN bank_details bd ON bd.bid = pf.bid
                JOIN residential_details rd ON rd.rid = pf.rid
                JOIN user_master u ON u.userid = pf.userid
                JOIN shop_details sd ON sd.sid = pf.sid
                WHERE pf.userid=$userid";  
            }
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result_array();   
        return $result;
    } 
    
    public function get_partners_details($id)
    {
        $sql = "SELECT * FROM udyog_partners sp 
        JOIN partner_details pd ON pd.partnerid = sp.partnerid WHERE sp.uid = $id";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $result['status'] = true;
            $result['data'] =  $query->result();
        }else{
            $result['status'] = false;
        }
     return $result;
    }

    public function add_partner_details($data)
    {
        $this->db->insert('udyog_partners', $data); 

        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        return FALSE;
    }
    
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('udyog_adhar', $data)){
            $uid = $this->db->insert_id();
            $sql = "SELECT pf.uid,pf.userid,pf.nature_of_buss,pf.buss_type,pf.turn_over_amt,pf.gst_number,pf.male,pf.female,pf.status,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
            u.firstname,u.lastname,u.roleid,
            bd.bank_name,bd.ac_number,bd.ifsc_number,
            sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date
            FROM udyog_adhar pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN bank_details bd ON bd.bid = pf.bid
            JOIN residential_details rd ON rd.rid = pf.rid
            JOIN user_master u ON u.userid = pf.userid
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
