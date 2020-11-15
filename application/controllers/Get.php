<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Get extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('GetModel','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getdistributors() {
        $records = $this->service->getdistributors();
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }

    public function getretailors() {
        $records = $this->service->getretailors();
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }
    public function getemployees() {
        $records = $this->service->getemployees();
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }
    public function getactivities() {
        $records = $this->service->activities();
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }
}
