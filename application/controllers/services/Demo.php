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
<<<<<<< HEAD

    public function baseUrl() {
        echo base_url();
=======
    
    public function baseUrl() {
        echo base_url();
        echo base_url('services/certificate/update');
>>>>>>> d8e7af2640cb05802487c452f3c8cfd816ad9586
    }
}
