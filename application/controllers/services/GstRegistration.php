<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GstRegistration extends CI_Controller {

    
    public function create() {
        $data['title'] = 'GST Registration Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/gst_registration/new');
        $this->load->view('admin/js/comman_js');
         $this->load->view('admin/js/gst_registration/new_js');
         $this->load->view('admin/js/gst_registration/validation_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/gst_registration/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/js/udyog_aadhar/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/udyog_aadhar/update');
        $this->load->view('admin/js/gst_registration/update_js');
    }
    
    

}
