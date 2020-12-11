<?php

class GSTModel extends CI_Model {

    public function get_details($roleid,$userid) {
        $result = [];
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.gid,pf.gst_type,pf.nature_of_buss,pf.nature_of_buss,pf.buss_type,pf.male,pf.female,pf.status,pf.remark,pf.updatedat,pf.createdat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
        u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
        rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
        FROM gst_service pf JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN residential_details rd ON rd.rid = pf.rid 
                JOIN shop_details sd ON sd.sid = pf.sid 
                JOIN residential_details rd1 ON sd.rid = rd1.rid 
                JOIN user_master u ON u.userid = pf.userid ORDER BY pf.gid DESC";
                  }else{
                    $sql = "SELECT pf.gid,pf.gst_type,pf.nature_of_buss,pf.nature_of_buss,pf.buss_type,pf.male,pf.female,pf.status,pf.remark,pf.updatedat,pf.createdat,
                    pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob,
                    rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,sd.shop_name,sd.office_contact,sd.office_mailid,sd.buss_start_date,
                    u.firstname,u.lastname,rd1.premise_name s_premise_name,rd1.flat_number s_flat_number,rd1.road s_road,rd1.area s_area,rd1.village s_village,rd1.taluka s_taluka,
                    rd1.district s_district,rd1.state s_state,rd1.pincode s_pincode,u.roleid
                    FROM gst_service pf JOIN personal_details pd ON pd.pid = pf.pid 
                            JOIN residential_details rd ON rd.rid = pf.rid 
                            JOIN shop_details sd ON sd.sid = pf.sid 
                            JOIN residential_details rd1 ON sd.rid = rd1.rid 
                            JOIN user_master u ON u.userid = pf.userid WHERE pf.userid=$userid ORDER BY pf.gid DESC";  
                }
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result();       
        return $result;
    }   
    public function get_partners_details($id)
    {
        $sql = "SELECT * FROM gst_partners sp 
        JOIN partner_details pd ON pd.partnerid = sp.partnerid WHERE sp.gid = $id";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
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
            $this->db->where('gid',$id);
            if($this->db->update('gst_service',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }
        
        public function create_gst($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $sdetails = $data['sdetails'];
      $shop_details = $data['shop_details'];
      $partnerdata = $data['partnerdata'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $sdetails);
        $result['r_id'] =  $this->db->insert_id();

        $shopdetails = array(
         'rid'=>$r_id,
         'shop_name'=>$shop_details['shop_name'],
         'office_contact'=>$shop_details['office_contact'],
         'office_mailid'=>$shop_details['office_mailid'],
         'buss_start_date'=>$shop_details['buss_start_date']
        );

        $this->db->insert('shop_details', $shopdetails);
        $result['sid'] =  $this->db->insert_id();

        $gst_details = array(
            'pid'=>$result['pid'],
            'rid'=>$result['rid'],
            'sid'=>$result['sid'],
            'userid'=>$main['userid'],
            'nature_of_buss'=>$main['nature_of_buss'],
            'buss_type'=>$main['buss_type'],
            'male'=>$main['male'],
            'female'=>$main['female'],
            'gst_type'=>$main['gst_type']
        );
        $this->db->insert('gst_service', $gst_details);
        $result['gid'] =  $this->db->insert_id();
        $this->getpartnerdetails($partnerdata,$result['gid']);
        if ($this->db->trans_status() === FALSE)
{
        $this->db->trans_rollback();
}
else
{
        $this->db->trans_commit();
      
        $result['status'] = true;
        return $result;
}
    }
    public function getpartnerdetails($partner_data,$id)
    {
        foreach ($partner_data as $contact)
                    {
                        $partners = array(
                            'partner_name' => $contact->p_partner_name,
                            'aadhar_number' => $contact->p_aadhar_number,
                            'pan_number' => $contact->p_pan_number,
                            'contact_number'=>$contact->p_contact_number,
                            'emailid'=>$contact->p_emailid
                            );
                            $this->db->insert('partner_details', $partners);
                            $partnerid =  $this->db->insert_id();
                            
                            $shop_partners=array( 
                                'partnerid' => $partnerid,
                                'gid'=>$id
                            );
                            $this->db->insert('gst_partners', $shop_partners);
                    }
    }  
}
