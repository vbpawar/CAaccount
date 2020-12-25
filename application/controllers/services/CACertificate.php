<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CACertificate extends CI_Controller {

    
    public function create() {
        $data['title'] = 'CA Certificate';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/ca_certificate/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/ca_certificate/validation_js');
        $this->load->view('admin/ca_certificate/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'PF Withdrawal Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/ca_certificate/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/ca_certificate/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
$this->load->view('admin/css/stepform_css');
        $this->load->view('admin/ca_certificate/update');
        $this->load->view('admin/ca_certificate/update_js');

    }
    
    

}
