<?php

class GSTAnnualModel extends CI_Model {

    public function get_details($roleid,$userid) {
        $result = [];
        if($roleid ==1 || $roleid ==4){
            $sql = "SELECT pf.gid,pf.userid,pf.shop_name,pf.gst_number,pf.sales_amt,pf.purchase_amt,pf.gst_id,pf.gst_pwd,pf.status,pf.remark,pf.createdat,pf.updatedat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
            u.firstname,u.lastname,u.roleid
            FROM gst_annual_return pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN user_master u ON u.userid = pf.userid
            ORDER BY pf.gid DESC";
            }else{
                $sql = "SELECT pf.gid,pf.userid,pf.shop_name,pf.gst_number,pf.sales_amt,pf.purchase_amt,pf.gst_id,pf.gst_pwd,pf.status,pf.remark,pf.createdat,pf.updatedat,
                pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.contact_number,pd.emailid,pd.dob,
                u.firstname,u.lastname,u.roleid
                FROM gst_annual_return pf 
                JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN user_master u ON u.userid = pf.userid WHERE pf.userid=$userid
                ORDER BY pf.gid DESC";  
            }
        $query = $this->db->query($sql);
            $result['status'] = true;
            $result['data'] =  $query->result_array();   
        return $result;
    } 
    
           
        public function updatestatus($id,$data)
        {
            $result = false;
            $this->db->where('gid',$id);
            if($this->db->update('gst_annual_return',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }
public function add_details($data)
    {
      $pdetails = $data['pdetails'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $maindata = array(
                'userid' => $main['userid'],
                'pid' => $result['pid'],
                'shop_name'=>$main['shop_name'],
                'gst_number'=>$main['gst_number'],
                'sales_amt'=>$main['sales_amt'],
                'purchase_amt'=>$main['purchase_amt'],
                'gst_id'=>$main['gst_id'],
                'gst_pwd'=>$main['gst_pwd']
        );
        $this->db->insert('gst_annual_return', $maindata);
        $result['gid'] =  $this->db->insert_id();
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
