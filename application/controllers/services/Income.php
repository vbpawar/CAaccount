<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Income extends CI_Controller {

    
    public function create() {
        $data['title'] = 'Income Certificate Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/income/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/income/validation_js.php');
        $this->load->view('admin/income/income_validation_js.php');
        $this->load->view('admin/income/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'Income Certificate Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/income/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/income/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
       $this->load->view('admin/header');
       $this->load->view('admin/css/comman_css');
       $this->load->view('admin/navigation/notificationbar');
       $this->load->view('admin/navigation/menubar');
        ///////////////////////////////////////////////////////
        $this->load->view('admin/income/update');
        $this->load->view('admin/js/jquery_validation_js');
        // $this->load->view('admin/js/income/income_validation_js');
        // $this->load->view('admin/js/income/update_js');
        ///////////////////////////////////////////////////////
       $this->load->view('admin/js/comman_js');
       $this->load->view('admin/footer');
    }
    
    

}
