<?php

class Demo extends CI_Controller {

    public function formDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/demo/form_demo');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }

   public function tableDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/dataModalCss');
        $this->load->view('admin/css/sweetalert');
        $this->load->view('admin/demo/table_demo');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/js/dataModalJavaScript');
        $this->load->view('admin/footer');
    }
}
