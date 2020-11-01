<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Certificate extends CI_Controller {

    
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/ca_certificate/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/ca_certificate/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/ca_certificate/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/js/ca_certificate/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
//       $this->load->view('admin/header');
//       $this->load->view('admin/css/comman_css');
//       $this->load->view('admin/navigation/notificationbar');
//       $this->load->view('admin/navigation/menubar');
        /////////////////////////////////////////////////////
        $this->load->view('admin/ca_certificate/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/ca_certificate/ca_certificate_validation_js');
        $this->load->view('admin/js/ca_certificate/update_js');
        ///////////////////////////////////////////////////////
//       $this->load->view('admin/js/comman_js');
//       $this->load->view('admin/footer');
    }
    
    

}
