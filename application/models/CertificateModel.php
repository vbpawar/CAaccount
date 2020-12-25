<?php

class CertificateModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.certid,pf.c_type,pf.c_value,pf.buss_address,pf.status,pf.remark,pf.updatedat,pf.createdat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,
rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
sd.shop_name,sd.office_contact,sd.office_mailid,
 u.firstname,u.lastname
 FROM certificates pf JOIN personal_details pd ON pd.pid = pf.pid 
JOIN residential_details rd ON rd.rid = pf.rid 
JOIN shop_details sd ON sd.sid = pf.sid 
JOIN user_master u ON u.userid = pf.userid ORDER BY pf.certid DESC";
        }else{
            $sql = "SELECT pf.certid,pf.c_type,pf.c_value,pf.buss_address,pf.status,pf.remark,pf.updatedat,pf.createdat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,
    rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
    sd.shop_name,sd.office_contact,sd.office_mailid,
     u.firstname,u.lastname
     FROM certificates pf JOIN personal_details pd ON pd.pid = pf.pid 
    JOIN residential_details rd ON rd.rid = pf.rid 
    JOIN shop_details sd ON sd.sid = pf.sid 
    JOIN user_master u ON u.userid = pf.userid  WHERE pf.userid = $userid ORDER BY pf.certid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =   $query->result_array();
    return $result;
    }
   
    public function updatestatus($id,$data)
    {
        $result = false;
        $this->db->where('certid',$id);
        if($this->db->update('certificates',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    } 
    
    public function create_certificate($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $shopdetails = $data['shopdetails'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 

        $this->db->insert('shop_details', $shopdetails);
        $result['sid'] =  $this->db->insert_id(); 


        $cert_details = array(
            'pid'=>$result['pid'],
            'rid'=>$result['rid'],
            'sid'=>$result['sid'],
            'userid'=>$main['userid'],
            'c_type'=>$main['c_type'],
            'c_value' => $main['c_value'],
            'buss_address' => $main['buss_address']
        );
        $this->db->insert('certificates',  $cert_details);
        $result['certid'] =  $this->db->insert_id();
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
   
}
