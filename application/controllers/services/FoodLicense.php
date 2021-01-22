<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FoodLicense extends CI_Controller {

    public function create() {
        $data['title'] = 'Food License';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/food_license/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/food_license/validation_js');
        $this->load->view('admin/food_license/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'Food License';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/food_license/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/food_license/show_js');

        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/food_license/update');
        $this->load->view('admin/food_license/update_js');
    }

}
