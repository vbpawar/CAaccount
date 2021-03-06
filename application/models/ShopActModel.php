<?php

class ShopActModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.shopactid,pf.userid,pf.natureofbuss,pf.busstype,pf.men,pf.women,pf.status,pf.updatedat,
        pf.remark,pf.createdat,pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
        u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
        rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
        FROM shopact pf JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN residential_details rd ON rd.rid = pf.rid 
                JOIN shop_details sd ON sd.sid = pf.sid 
                JOIN residential_details rd1 ON sd.rid = rd1.rid 
                JOIN user_master u ON u.userid = pf.userid ORDER BY pf.shopactid DESC";
        }else{
            $sql = "SELECT pf.shopactid,pf.userid,pf.natureofbuss,pf.busstype,pf.men,pf.women,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
            u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
            rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
            FROM shopact pf JOIN personal_details pd ON pd.pid = pf.pid 
                    JOIN residential_details rd ON rd.rid = pf.rid 
                    JOIN shop_details sd ON sd.sid = pf.sid 
                    JOIN residential_details rd1 ON sd.rid = rd1.rid 
                    JOIN user_master u ON u.userid = pf.userid WHERE pf.userid=$userid ORDER BY pf.shopactid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =  $query->result_array();
        return $result;
    }
    public function get_partners_details($id)
    {
        $sql = "SELECT * FROM shopact_partners sp 
        JOIN partner_details pd ON pd.partnerid = sp.partnerid WHERE sp.shopactid = $id";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $result['status'] = true;
            $result['data'] =  $query->result();
        }else{
            $result['status'] = false;
        }
     return $result;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('shopact', $data)){
            $id = $this->db->insert_id();
            $sql = "SELECT pf.shopactid,pf.userid,pf.natureofbuss,pf.busstype,pf.men,pf.women,pf.updatedat,
            pf.status,pf.remark,pf.createdat,pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
            u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
            rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
            FROM shopact pf JOIN personal_details pd ON pd.pid = pf.pid 
                    JOIN residential_details rd ON rd.rid = pf.rid 
                    JOIN shop_details sd ON sd.sid = pf.sid 
                    JOIN residential_details rd1 ON sd.rid = rd1.rid 
                    JOIN user_master u ON u.userid = pf.userid WHERE  pf.shopactid = $id";
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