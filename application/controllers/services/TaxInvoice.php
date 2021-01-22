<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TaxInvoice extends CI_Controller {

    public function create() {
        $data['title'] = 'Tax invoice Service';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');

        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/tax_invoice/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/tax_invoice/validation_js');
        $this->load->view('admin/tax_invoice/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'Tax Invoice Service';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/tax_invoice/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/tax_invoice/show_js');

        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/tax_invoice/update');
        $this->load->view('admin/tax_invoice/update_js');
    }

}
