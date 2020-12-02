<?php

class ShopModel extends CI_Model {

    public function get_details($sid) {
            $data = $this->db->get_where("shop_details", ['sid' => $sid])->row_array();
        return $data;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('shop_details', $data)){
           $result['sid'] =  $this->db->insert_id();
           $result['status'] = true;   
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('sid', $id);
        if($this->db->delete('shop_details')){
           return true;
         }else{
           return false;
         }
    }

    public function update_details($sid,$data)
    {
        if($sid==0){
            return $this->db->insert('shop_details',$data);
        }else{
            $this->db->where('sid',$sid);
            return $this->db->update('shop_details',$data);
        }        
    }
    public function update_shop_status($id,$data)
    {
        $result = false;
        $this->db->where('shopactid',$id);
        if($this->db->update('shopact',$data)){
            $result['status'] = true;
        }else{
            $result['status'] = false;
        }
        return $result;
    }   
    public function testmodel($data)
    {
      $pdetails = $data['pdetails'];
      $rdetails = $data['rdetails'];
      $bdetails = $data['bdetails'];
      $sdetails = $data['sdetails'];
      $partnerdata = $data['partnerdata'];
      $main = $data['main'];
      $result = array();
      $this->db->trans_begin();

        $this->db->insert('personal_details', $pdetails);
        $result['pid'] =  $this->db->insert_id(); 

        $this->db->insert('residential_details', $rdetails);
        $result['rid'] =  $this->db->insert_id(); 

        $this->db->insert('bank_details', $bdetails);
        $result['bid'] =  $this->db->insert_id();

        $this->db->insert('shop_details', $sdetails);
        $result['sid'] =  $this->db->insert_id();

        $maindata = array(
                'userid' => $main['userid'],
                'pid' => $result['pid'] ,
                'rid' => $result['rid'] ,
                'bid' => $result['bid'],
                'sid'=>$result['sid'],
                'nature_of_buss'=>$main['nature_of_buss'],
                'buss_type'=>$main['buss_type'],
                'turn_over_amt'=>$main['turn_over_amt'],
                'gst_number'=>$main['gst_number'],
                'male'=>$main['male'],
                'female'=>$main['female']
        );
        $this->db->insert('udyog_adhar', $maindata);
        $result['uid'] =  $this->db->insert_id();
        $this->getpartnerdetails($partnerdata,$result['uid']);
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
                                'uid'=>$id
                            );
                            $this->db->insert('udyog_partners', $shop_partners);
                    }
    }

}
