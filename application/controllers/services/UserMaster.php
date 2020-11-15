<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserMaster extends CI_Controller {

    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/user_master/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/user_master/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
       
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/user_master/show');
        $this->load->view('admin/js/comman_js');
     
        $this->load->view('admin/js/user_master/show_js');
        
        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/user_master/update');
        $this->load->view('admin/js/user_master/update_js');

       
    }

}
