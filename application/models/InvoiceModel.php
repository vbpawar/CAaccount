<?php
  date_default_timezone_set('Asia/Kolkata');
class InvoiceModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT pf.invoiceid,pf.intype,pf.naturebuss,pf.status,pf.remark,pf.updatedat,pf.createdat,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,
    rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
    sd.shop_name s_shopname,sd.office_contact s_contact,sd.office_mailid s_mail,sd.gst_number s_gst,
    sd1.shop_name b_shopname,sd1.office_contact b_contact,sd1.office_mailid b_mail,sd1.gst_number b_gst,
        u.firstname,u.lastname
        FROM tax_invoice pf JOIN personal_details pd ON pd.pid = pf.pid 
                JOIN residential_details rd ON rd.rid = pf.rid 
                JOIN shop_details sd ON sd.sid = pf.sellerid
                 JOIN shop_details sd1 ON sd1.sid = pf.buyerid
                JOIN user_master u ON u.userid = pf.userid ORDER BY pf.invoiceid DESC";
        }else{
            $sql = "SELECT pf.invoiceid,pf.intype,pf.naturebuss,pf.status,pf.remark,pf.updatedat,pf.createdat,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,
        rd.premise_name,rd.flat_number,rd.road,rd.area,rd.village,rd.taluka,rd.district,rd.state,rd.pincode,
        sd.shop_name s_shopname,sd.office_contact s_contact,sd.office_mailid s_mail,sd.gst_number s_gst,
        sd1.shop_name b_shopname,sd1.office_contact b_contact,sd1.office_mailid b_mail,sd1.gst_number b_gst,
            u.firstname,u.lastname
            FROM tax_invoice pf JOIN personal_details pd ON pd.pid = pf.pid 
                    JOIN residential_details rd ON rd.rid = pf.rid 
                    JOIN shop_details sd ON sd.sid = pf.sellerid
                     JOIN shop_details sd1 ON sd1.sid = pf.buyerid
                    JOIN user_master u ON u.userid = pf.userid  WHERE pf.userid=$userid ORDER BY pf.invoiceid DESC";  
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
                            'rate'=>$contact->rate,
                            'gst'=>$contact->gst,
                            'cgst'=>$contact->cgst,
                            'sgst'=>$contact->sgst,
                            'amount'=>$contact->amount,
                            'total_amount'=>$contact->total_amount
                            );
                            $this->db->insert('invoice_details', $partners);
                    }
    }  
 

}
