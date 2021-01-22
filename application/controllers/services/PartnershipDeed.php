<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PartnershipDeed extends CI_Controller {

    public function create() {
        $data['title'] = 'Partnership Deed';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/partnership_deed/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/partnership_deed/validation_js');
        $this->load->view('admin/partnership_deed/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'Partnership Deed';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/partnership_deed/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/partnership_deed/show_js');

        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/partnership_deed/update');
        $this->load->view('admin/partnership_deed/update_js');
    }

}
