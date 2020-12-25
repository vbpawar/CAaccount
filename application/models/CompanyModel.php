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
   
    public function get_invoice_details($id)
    {
        $sql = "SELECT * FROM invoice_details WHERE invoiceid= $id";
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
        $this->db->where('invoiceid',$id);
        if($this->db->update('tax_invoice',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    } 
    
    public function create_invoice($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $seller_details = $data['seller_details'];
      $buyer_details = $data['buyer_details'];
      $invoicedetails = $data['invoicedetails'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 

        $this->db->insert('shop_details', $seller_details);
        $result['sellerid'] =  $this->db->insert_id(); 

        $this->db->insert('shop_details', $buyer_details);
        $result['buyerid'] =  $this->db->insert_id();


        $income_details = array(
            'pid'=>$result['pid'],
            'rid'=>$result['rid'],
            'sellerid'=>$result['sellerid'],
            'buyerid'=>$result['buyerid'],
            'userid'=>$main['userid'],
            'intype'=>$main['intype'],
            'naturebuss' => $main['naturebuss']
        );
        $this->db->insert('tax_invoice', $income_details);
        $result['invoiceid'] =  $this->db->insert_id();
        $this->insert_invoice($invoicedetails,$result['invoiceid']);
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
    public function insert_invoice($partner_data,$id)
    {
        foreach ($partner_data as $contact)
                    {
                        $partners = array(
                            'invoiceid'=>$id,
                            'pname' => $contact->pname,
                            'hsn' => $contact->hsn,
                            'quantity' => $contact->quantity,
                            'gstrate'=>$contact->gstrate,
                            'cgst'=>$contact->cgst,
                            'sgst'=>$contact->sgst,
                            'amount'=>$contact->amount
                            );
                            $this->db->insert('invoice_details', $partners);
                    }
    }  
 

}
