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
   
}
