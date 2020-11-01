<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
class Report extends CI_Controller {
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/report/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/report/new_js');
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/report/new_js');
        $this->load->view('admin/footer');
        
        $this->load->view('admin/report/update');
        $this->load->view('admin/js/jquery_validation_js');
        $this->load->view('admin/js/report/report_validation_js');
        $this->load->view('admin/js/report/update_js');
    }
    
     
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/report/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/js/report/show_js');
        
        $this->load->view('admin/footer');
    }
    
}
