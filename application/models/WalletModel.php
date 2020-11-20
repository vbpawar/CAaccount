<?php

class WalletModel extends CI_Model {

    public function addwallet($data){
        $query = $this->db->insert('wallet_transaction', $data);
        return $this->db->insert_id();
    }
    public function getbalance($userid)
    {
        $sql = "SELECT SUM(CASE WHEN `transaction_type` = 'credit' THEN amount ELSE -amount END) AS balance
         FROM wallet_transaction WHERE userid = $userid";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function gettransactions($userid)
    {
        $sql = "SELECT * FROM wallet_transaction WHERE userid = $userid ORDER BY transactionid DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function deduct_amount($data)
    {
        $result = false;
        if($this->db->insert('wallet_transaction', $data)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    public function loadbalance()
    {
        $sql = "SELECT COALESCE(SUM(CASE WHEN wt.transaction_type = 'credit' THEN wt.amount ELSE -wt.amount END),0) AS balance,um.firstname,um.lastname,um.contact,rm.role,um.userid
        FROM user_master um LEFT JOIN wallet_transaction wt ON wt.userid = um.userid
        LEFT JOIN role_master rm ON rm.roleid = um.roleid
        GROUP BY um.userid
        ORDER BY um.roleid";
        $query = $this->db->query($sql);
        return $query->result();
    }
   
}
