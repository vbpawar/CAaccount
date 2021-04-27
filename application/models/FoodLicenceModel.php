<?php

class FoodLicenceModel extends CI_Model {

    public function get_details($roleid,$userid) {
        if($roleid ==1 || $roleid ==4){
        $sql = "SELECT f.foodid,f.userid,f.mobile_number,f.fax,f.emailid,f.mobile_alternate,f.noofyear,f.telephone,f.faddress,f.fstate,f.district
        f.district,f.region,f.subdivision,f.village,f.pincode,f.landmark,f.createdby,f.updatedby,
        um.firstname,um.lastname
        FROM food_licence f LEFT JOIN user_master um ON f.userid = um.userid
        ORDER BY f.foodid DESC";
        }else{
            $sql = "SELECT f.foodid,f.userid,f.mobile_number,f.fax,f.emailid,f.mobile_alternate,f.noofyear,f.telephone,f.faddress,f.fstate,f.district
            f.district,f.region,f.subdivision,f.village,f.pincode,f.landmark,f.createdby,f.updatedby
            ,um.firstname,um.lastname
            FROM food_licence f LEFT JOIN user_master um ON f.userid = um.userid
            WHERE f.userid = $userid
            ORDER BY f.foodid DESC";  
        }
        $query = $this->db->query($sql);
       $result['status'] = true;
       $result['data'] =  $query->result();
    return $result;
    }
    public function add_details($data)
    {    
        $result = [];
        if($this->db->insert('food_licence', $data)){
            $did = $this->db->insert_id();
            $sql = "SELECT f.foodid,f.userid,f.mobile_number,f.fax,f.emailid,f.mobile_alternate,f.noofyear,f.telephone,f.faddress,f.fstate,f.district
            f.district,f.region,f.subdivision,f.village,f.pincode,f.landmark,f.createdby,f.updatedby
            ,um.firstname,um.lastname
            FROM food_licence f LEFT JOIN user_master um ON f.userid = um.userid
            WHERE f.foodid =$did";
            $query = $this->db->query($sql);
           $result['foodid'] =  $did;
           $result['status'] = true;
           $result['data'] =  $query->result();
         }else{
            $result['status'] = false;
         }
         return $result;
    }
    public function removebill($id){
        $this->db->where('did', $id);
        if($this->db->delete('food_licence')){
           return true;
         }else{
           return false;
         }
    }

        public function updatedigitalstatus($did,$data)
        {
            $result = false;
            $this->db->where('did',$did);
            if($this->db->update('food_licence',$data)){
                $result['status'] = true;
            }else{
                $result['status'] = false;
            }
            return $result;
        }  
        
        public function add_digital_docs($data)
        {    
            $result = [];
            if($this->db->insert('food_licence_docs', $data)){
               $result['docid'] =  $this->db->insert_id();
               $result['status'] = true;   
             }else{
                $result['status'] = false;
             }
             return $result;
        }
        public function get_digital_docs($did) {
            $sql = "SELECT * FROM food_licence_docs WHERE did=$did";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

}