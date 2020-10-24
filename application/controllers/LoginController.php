<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }
    
    public function flash_message(){
        $this->session->set_flashdata('msg', 'Welcome to CodeIgniter Flash Messages');
        redirect(base_url('flash_index'));
    }

    public function check_auth($page) {
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('msg', "You need to be logged in to access the $page page.");
            redirect('login');
        }
    }

    public function index() {
        $this->load->view('sessions/login');
    }

    public function authenticate() {
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');
        if(!empty($user) && !empty($passs)){
           $result = $this->auth->checkauth($user,$pass);
           if($result!=NULL){
            $this->session->set_userdata('username', $user);
            $this->session->set_userdata('logged_in', TRUE);
           }
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        } else{
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        } 
        $this->session->set_userdata('username', 'John Doe');
        $this->session->set_userdata('logged_in', TRUE);
        redirect(base_url('dashboard'));
    }

    public function dashboard() {
        $this->check_auth('dashboard');
        $this->load->view('sessions/dashboard');
    }

    public function settings() {
        $this->check_auth('settings');
        $this->load->view('sessions/settings');
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        redirect(base_url('login'));
    }
}
?>