<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UdyogAadhar extends CI_Controller {

    
    public function create() {
        $data['title'] = 'Udyog Aadhar Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/udyog_aadhar/new');
        $this->load->view('admin/js/comman_js');
         $this->load->view('admin/js/udyog_aadhar/new_js');
         $this->load->view('admin/js/udyog_aadhar/validation_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'Udyog Aadhar Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/udyog_aadhar/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/udyog_aadhar/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/udyog_aadhar/update');
        $this->load->view('admin/js/udyog_aadhar/update_js');
    }
    
    

}
