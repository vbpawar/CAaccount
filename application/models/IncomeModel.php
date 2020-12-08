<?php
  date_default_timezone_set('Asia/Kolkata');
class IncomeModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT * FROM incometax pf 
        JOIN personal_details pd ON pd.pid = pf.pid 
        JOIN user_master u ON u.userid = pf.userid
        JOIN residential_details rd ON rd.rid = pf.rid  ORDER BY pf.inid DESC";
        }else{
            $sql = "SELECT * FROM incometax pf 
            JOIN personal_details pd ON pd.pid = pf.pid 
            JOIN residential_details rd ON rd.rid = pf.rid 
            JOIN user_master u ON u.userid = pf.userid
            WHERE pf.userid=$userid ORDER BY pf.inid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =   $query->result_array();
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
           $result['data'] =   $query->result_array();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function get_partners_details($id)
    {
        $sql = "SELECT * FROM incometax_partners sp 
        JOIN partner_details pd ON pd.partnerid = sp.partnerid WHERE sp.inid = $id";
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
    public function updatestatus($id,$data)
    {
        $result = false;
        $this->db->where('inid',$id);
        if($this->db->update('incometax',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    } 
    
    public function create_income($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $partnerdata = $data['partnerdata'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 


        $income_details = array(
            'pid'=>$result['pid'],
            'rid'=>$result['rid'],
            'userid'=>$main['userid'],
            'incomeType'=>$main['incomeType'],
            'bname' => $main['bname'],
            'natureofbuss' => $main['natureofbuss'],
            'place_of_buss' => $main['place_of_buss'],
            'buss_type' => $main['buss_type'],
            'turn_over_amt' => $main['turn_over_amt'],
            'loan_amt' => $main['loan_amt'],
            'income_from_other' => $main['income_from_other'],
            'lic_slip' => $main['lic_slip'],
            'home_loan' => $main['home_loan'],
            'invs_amt' => $main['invs_amt'],
            'sandry_creditor' => $main['sandry_creditor'],
            'sandry_debitor' => $main['sandry_debitor'],
            'stock_amt' => $main['stock_amt'],
            'cash_bal' => $main['cash_bal'],
            'buss_loan' => $main['buss_loan'],
            'personal_loan' => $main['personal_loan']
        );
        $this->db->insert('incometax', $income_details);
        $result['inid'] =  $this->db->insert_id();
        $this->getpartnerdetails($partnerdata,$result['inid']);
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
                                'inid'=>$id
                            );
                            $this->db->insert('incometax_partners', $shop_partners);
                    }
    }  
 

}
