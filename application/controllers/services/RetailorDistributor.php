<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RetailorDistributor extends CI_Controller {

    public function create() {
        $data['title'] = 'Distributor Retailor  Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/retailor_distributor/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/retailor_distributor/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'Distributor Retailor  Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/retailor_distributor/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/retailor_distributor/show_js');
        $this->load->view('admin/footer');
    }

    public function update() {
           $this->load->view('admin/retailor_distributor/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/retailor_distributor/retailor_distributor_validation_js');
        $this->load->view('admin/js/retailor_distributor/update_js');
    }

}
