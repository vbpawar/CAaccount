<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AccessControlService extends CI_Controller {

     public function create() {
        $data['title'] = 'Access Control Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/access_control/new');
        $this->load->view('admin/js/comman_js');
        
        $this->load->view('admin/js/access_control/role_js');
         $this->load->view('admin/js/access_control/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/access_control/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/access_control/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');

        $this->load->view('admin/access_control/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/access_control/access_control_validation_js');
        $this->load->view('admin/js/access_control/update_js');

    }

}
