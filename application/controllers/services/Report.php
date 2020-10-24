<?php
class Report extends CI_Controller {
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/report/new');
        $this->load->view('admin/js/comman_js');
<<<<<<< HEAD
        // $this->load->view('admin/js/reportjs');
=======
        $this->load->view('admin/js/report/new_js');
>>>>>>> 1bfd057874f960dca33a68173d89691a82dac593
        $this->load->view('admin/footer');
    }
    public function update() {
        
    }
    
     
    public function show() {
        
    }
    
}
