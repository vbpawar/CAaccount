<?php
class Eway_bill extends CI_Model{

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT eb.bill_id,eb.bussness_type,eb.bussness_name,eb.shop_adhar,eb.gst_number,eb.eway_bill_id,eb.bill_pwd,eb.transporter_name,eb.transporter_id,
        eb.distance_km,eb.transport_mode,eb.vehicle_type,eb.vehicle_number,eb.transport_doc_number,eb.final_date,eb.status,eb.createdat,eb.updatedat,
        ebd.tax_amt,ebd.cgst_amt,ebd.cgst_amt,ebd.sgst_amt,ebd.igst_amt,ebd.cess_advol_amt,ebd.cess_non_amt,ebd.other_amt,ebd.invoice_amt,
        esd.sname,esd.gstn,esd.sstate,esd.saddress,esd.place,esd.pincode,esd.bname,esd.b_gstn,esd.bstate,esd.b_address,esd.b_place,esd.b_pincode,
        um.firstname,um.lastname,eb.remark,eb.status,
        pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob
        FROM ewaybill eb INNER JOIN eway_bill_details ebd ON eb.billId = ebd.id
        INNER JOIN personal_details pd ON pd.pid = eb.pid
        INNER JOIN eway_shiping_details esd ON esd.shipid = eb.shipid
        INNER JOIN user_master um ON um.userid = eb.userid
        ORDER BY eb.bill_id DESC";
        }else{
            $sql = "SELECT eb.bill_id,eb.bussness_type,eb.bussness_name,eb.shop_adhar,eb.gst_number,eb.eway_bill_id,eb.bill_pwd,eb.transporter_name,eb.transporter_id,
            eb.distance_km,eb.transport_mode,eb.vehicle_type,eb.vehicle_number,eb.transport_doc_number,eb.final_date,eb.status,eb.createdat,eb.updatedat,
            ebd.tax_amt,ebd.cgst_amt,ebd.cgst_amt,ebd.sgst_amt,ebd.igst_amt,ebd.cess_advol_amt,ebd.cess_non_amt,ebd.other_amt,ebd.invoice_amt,
            esd.sname,esd.gstn,esd.sstate,esd.saddress,esd.place,esd.pincode,esd.bname,esd.b_gstn,esd.bstate,esd.b_address,esd.b_place,esd.b_pincode,
            um.firstname,um.lastname,eb.remark,eb.status,
            pd.pan_name,pd.pan_number,pd.aadhar_name,pd.aadhar_number,pd.contact_number,pd.emailid,pd.dob
            FROM ewaybill eb INNER JOIN eway_bill_details ebd ON eb.billId = ebd.id
            INNER JOIN personal_details pd ON pd.pid = eb.pid
            INNER JOIN eway_shiping_details esd ON esd.shipid = eb.shipid
            INNER JOIN user_master um ON um.userid = eb.userid
            WHERE eb.userid = $userid ORDER BY eb.bill_id DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =   $query->result_array();
    return $result;
    }
  
    public function get_invoice_details($id)
    {
        $sql = "SELECT * FROM ewaybill_invoice_details WHERE ewaybill_id= $id";
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
        $this->db->where('bill_id',$id);
        if($this->db->update('ewaybill',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    } 
    
    public function create_bill($data)
    {
      $pdetails = $data['pdetails'];
      $tdetails = $data['tdetails'];
      $billdetails = $data['billdetails'];
      $invoicedetails = $data['invoicedetails'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('eway_shiping_details', $billdetails);
        $result['shipid'] =  $this->db->insert_id(); 

        $this->db->insert('eway_bill_details', $tdetails);
        $result['billid'] =  $this->db->insert_id(); 
        

        $income_details = array(
            'pid'=>$result['pid'],
            'shipid'=>$result['shipid'],
            'userid'=>$main['userid'],
            'bussness_type'=>$main['bussness_type'],
            'bussness_name' => $main['bussness_name'],
            'shop_adhar'=>$main['shop_adhar'],
            'gst_number'=>$main['gst_number'],
            'eway_bill_id' => $main['eway_bill_id'],
            'bill_pwd'=>$main['bill_pwd'],
            'transporter_name'=>$main['transporter_name'],
            'transporter_id' => $main['transporter_id'],
            'distance_km'=>$main['distance_km'],
            'transport_mode'=>$main['transport_mode'],
            'vehicle_type' => $main['vehicle_type'],
            'vehicle_number'=>$main['vehicle_number'],
            'transport_doc_number' => $main['transport_doc_number'],
            'final_date'=>$main['final_date'],
            'billid'=>$result['billid']
        );
        $this->db->insert('ewaybill', $income_details);
        $result['bill_id'] =  $this->db->insert_id();
       $this->insert_invoice($invoicedetails,$result['bill_id']);
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
                            'ewaybill_id'=>$id,
                            'pname' => $contact->pname,
                            'hsn' => $contact->hsn,
                            'pdesc' => $contact->discription,
                            'quantity'=>$contact->quantity,
                            'unit'=>$contact->unit,
                            'variable_value'=>$contact->value,
                            'gst_rate'=>$contact->gst,
                            'igst_rate'=>$contact->igst,
                            'cess_advol_rate'=>$contact->advolRate,
                            'cess_non_advol_rate'=>$contact->nonAdvol
                            );
                            $this->db->insert('ewaybill_invoice_details', $partners);
                    }
    }  
 
  
}
