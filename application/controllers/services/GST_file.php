<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
class GST_file extends CI_Controller {

    public function create() {
        $data['title'] = 'GST Filing';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/gst_file/new');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/gst_file/new_js');
        $this->load->view('admin/footer');
    }

    public function show() {
        $data['title'] = 'GST File Return';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/menubar');
        $this->load->view('admin/gst_file/show');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/gst_file/show_js');
        $this->load->view('admin/footer');
    }

    public function update() {
        $this->load->view('admin/css/stepform_css');
        $this->load->view('admin/gst_file/update');
        $this->load->view('admin/gst_file/update_js');
    }

}
