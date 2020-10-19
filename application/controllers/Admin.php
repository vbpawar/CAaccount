<?php

class Admin extends CI_Controller {

        public function formDemo()
        {
                $this->load->view('admin/form_demo');
                
        }
        public function caCertificate() {
            $this->load->view('admin/ca_certificate');
        }
}
