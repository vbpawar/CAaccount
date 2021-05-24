<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompanyRegService extends CI_Controller {

     public function create() {
        $data['title'] = 'Company Registration Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/company_reg/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/company_reg/new_js');
        
        // $this->load->view('admin/js/pf_withdrawal/validation_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'Comapny Registration Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/company_reg/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/company_reg/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/company_reg/update');
        $this->load->view('admin/company_reg/update_js');
    }

}
