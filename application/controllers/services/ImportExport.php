<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImportExport extends CI_Controller {

    
    public function create() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/steps');
        $this->load->view('admin/import_export/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/steps_js');


        $this->load->view('admin/footer');
    }
    
    public function show() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/import_export/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/footer');
        
    }
    public function update() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/import_export/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }
    
    

}