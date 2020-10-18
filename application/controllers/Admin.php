<?php

class Admin extends CI_Controller {

        public function blankPage()
        {
                $this->load->view('admin/header');
                $this->load->view('admin/blank');
                $this->load->view('admin/footer');
        }
}
