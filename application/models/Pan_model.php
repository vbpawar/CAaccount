<?php

class Pan_model extends CI_Model {

    public function get_details($roleid,$userid) {
        $result = [];
        if($roleid ==1 || $roleid ==4){
            $sql = "SELECT pf.panid,pf.app_type,pf.category,pf.pan_number,pf.aadhar_name,pf.contact_number,pf.emailid,pf.status,pf.userid,pf.remark,pf.createdat,pf.updatedat,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,u.firstname,u.lastname
            ,u.roleid 
            FROM pan_service pf JOIN residential_details rd 
            ON rd.rid = pf.rid JOIN user_master u ON u.userid=pf.userid ORDER BY pf.panid DESC";
            }else{
                $sql = "SELECT pf.panid,pf.app_type,pf.category,pf.pan_number,pf.aadhar_name,pf.contact_number,pf.emailid,pf.status,pf.userid,pf.remark,pf.createdat,pf.updatedat,
                rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,u.firstname,u.lastname
                ,u.roleid
                FROM pan_service pf JOIN residential_details rd 
                ON rd.rid = pf.rid JOIN user_master u ON u.userid=pf.userid WHERE pf.userid=$userid ORDER BY pf.panid DESC";
            } 
       if($query =$this->db->query($sql)){
        $result['status'] = true;
        $result['data'] =  $query->result(); 
       }else{
        $result['sql'] = $sql;
        $result['status'] = false;
       }
        return $result;
    }   
    
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('pan_service', $data)){
            $uid = $this->db->insert_id();
            $sql = "SELECT pf.panid,pf.app_type,pf.category,pf.pan_number,pf.aadhar_name,pf.contact_number,pf.emailid,pf.status,pf.userid,pf.remark,pf.createdat,pf.updatedat,
            rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,u.firstname,u.lastname
            ,u.roleid
            FROM pan_service pf JOIN residential_details rd 
            ON rd.rid = pf.rid JOIN user_master u ON u.userid=pf.userid
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
        public function updatepanstatus($pfid,$data)
        {
            $result = false;
            $this->db->where('panid',$pfid);
            if($this->db->update('pan_service',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }      
}
