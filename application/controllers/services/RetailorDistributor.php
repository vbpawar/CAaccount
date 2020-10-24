<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RetailorDistributor extends CI_Controller {

    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/retailor_distributor/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/retailor_distributor/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/retailor_distributor/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/retailor_distributor/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }

}
