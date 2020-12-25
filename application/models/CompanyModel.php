<?php
  date_default_timezone_set('Asia/Kolkata');
class CompanyModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT c.companyid,c.ctype,c.cname,c.obj_company,c.obj_specfied,c.capital,c.naturebuss,c.status,c.remark,c.createdat,c.updatedat,u.firstname,u.lastname
        FROM company_reg c
        JOIN user_master u ON u.userid = c.userid ORDER BY c.companyid DESC";
        }else{
            $sql = "SELECT c.companyid,c.ctype,c.cname,c.obj_company,c.obj_specfied,c.capital,c.naturebuss,c.status,c.remark,c.createdat,c.updatedat,u.firstname,u.lastname
            FROM company_reg c
            JOIN user_master u ON u.userid = c.userid WHERE c.userid=$userid ORDER BY c.companyid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =   $query->result_array();
    return $result;
    }
   
    public function get_director_details($id)
    {
        $sql = "SELECT * FROM company_directors WHERE companyid= $id";
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
        $this->db->where('companyid',$id);
        if($this->db->update('company_reg',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    } 
    
    public function create_company($data,$directors)
    {
      
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('company_reg', $data);
        $result['companyid'] =  $this->db->insert_id(); 

      
        $this->insert_directors($directors,$result['companyid']);
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
    public function insert_directors($partner_data,$id)
    {
        foreach ($partner_data as $contact)
                    {
                        $partners = array(
                            'companyid'=>$id,
                            'shares' => $contact->shares,
                            'nameofdir' => $contact->nameofdir,
                            'daddress' => $contact->daddress,
                            'emailid'=>$contact->emailid,
                            'contact'=>$contact->contact,
                            'education'=>$contact->education
                            );
                            $this->db->insert('company_directors', $partners);
                    }
    }  
 

}
