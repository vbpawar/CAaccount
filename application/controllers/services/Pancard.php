<?php

class Pancard extends CI_Controller {

    public function create() {
        $data['title'] = 'Pan Card Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pancard/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/pancard/validation_js');
        $this->load->view('admin/pancard/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'Pan card Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pancard/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/pancard/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {

        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/pancard/update');
        $this->load->view('admin/pancard/update_js');

    }
    
    

}
