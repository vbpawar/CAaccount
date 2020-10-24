<?php
class Report extends CI_Controller {
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/report/new');
        $this->load->view('admin/js/comman_js');
        // $this->load->view('admin/js/reportjs');
        $this->load->view('admin/footer');
    }
    public function update() {
        
    }
    
    public function delete() {
        
    }
    
    public function show() {
        
    }
    
}
