<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
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
    public function adminMenubarDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/admin_menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }
    public function distributorMenubarDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/distributor_menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }
    public function retailorMenubarDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/retailor_menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }
    public function employeeMenubarDemo() {
        $this->load->view('admin/header');
        $this->load->view('admin/css/comman_css');
        $this->load->view('admin/navigation/notificationbar');
        $this->load->view('admin/navigation/employee_menubar');
        $this->load->view('admin/js/comman_js');
        $this->load->view('admin/footer');
    }
    public function baseUrl() {
        echo base_url();
    }
    
    public function testFormData() {
        $user = array(
            'roleid' => $this->input->post('roleid'),
            'emailid' => $this->input->post('emailid'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'upassword' => $this->input->post('upassword'),
            'contact' => $this->input->post('contact'),
        );
        print_r($user);
    }

}
