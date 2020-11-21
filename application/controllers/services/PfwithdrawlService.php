<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PfwithdrawlService extends CI_Controller {

     public function create() {
        $data['title'] = 'PF Withdrawal Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pfwithdrawl/new');
        $this->load->view('admin/js/comman_js');
        
        $this->load->view('admin/pfwithdrawl/validation_js');
        $this->load->view('admin/pfwithdrawl/new_js');
        $this->load->view('admin/footer');
    }
    
    public function show() {
        $data['title'] = 'PF Withdrawal Service';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/pfwithdrawl/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/pfwithdrawl/show_js');
        
        $this->load->view('admin/footer');
    }
    public function update() {
$this->load->view('admin/css/stepform_css');
        $this->load->view('admin/pfwithdrawl/update');
        $this->load->view('admin/pfwithdrawl/update_js');

    }

}
