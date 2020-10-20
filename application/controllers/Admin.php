<?php

class Admin extends CI_Controller {

    public function formDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/form_demo');
        $this->load->view('admin/footer');
    }

    public function newCACertificate() {
        $this->load->view('admin/header');
        $this->load->view('admin/new_ca_certificate');
        $this->load->view('admin/footer');
    }

}
