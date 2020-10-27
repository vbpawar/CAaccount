<?php

class Pancard extends CI_Controller {

    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pancard/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/pancard/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pancard/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/js/pancard/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {

        $this->load->view('admin/ca_certificate/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/pancard/pancard_validation_js');
        $this->load->view('admin/js/pancard/update_js');

    }
    
    

}
