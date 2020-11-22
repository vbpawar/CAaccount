<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServiceCharges extends CI_Controller {

    public function create() {
        $data['title'] = 'Service Charges';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/service_charges/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/service_charges/validation_js');
        $this->load->view('admin/service_charges/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'Service Charges';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/service_charges/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/service_charges/show_js');
        $this->load->view('admin/footer');
    }

    public function update() {
           $this->load->view('admin/service_charges/update');
           $this->load->view('admin/service_charges/validation_js');
           $this->load->view('admin/service_charges/update_js');
    }

}
