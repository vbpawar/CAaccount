<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DigitalSignService extends CI_Controller {

     public function create() {
        $data['title'] = 'Digital Sign Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/digital_sign/new');
        $this->load->view('admin/js/comman_js');
        
         $this->load->view('admin/js/digital_sign/validation_js');
         $this->load->view('admin/js/digital_sign/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'Digital Sign Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/digital_sign/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/digital_sign/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');

        $this->load->view('admin/digital_sign/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/digital_sign/digital_sign_validation_js');
        $this->load->view('admin/js/digital_sign/update_js');

    }

}
