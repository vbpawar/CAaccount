<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

class Role extends CI_Controller {

    private $response = null;
    private $records = null;

    public function getAllRoles() {
        $this->load->model('Role_model', 'role');
        $records = $this->role->getRoles();
        if ($records != null) {

            $response = array(
                'Message' => 'get data successfull',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'not found',
//                "Data" => $records,
                'Responsecode' => 401
            );
        }
        echo json_encode($response);
//        echo $data;
    }

}
