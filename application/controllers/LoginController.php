<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('LoginModel','service');
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
        $this->load->view('services/user/login');
    }

    public function authenticate() {
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');
        if(!empty($user) || !empty($pass)){
           $result = $this->service->checkauth($user,$pass);
           if($result['status']) {
               print_r($result);
            $session_data = array( 
                'username' => $result['firstname'].' '.$result['lastname'],
                'emailid'=>$result['emailid'],
                'role'=>$result['roleid'],
                'userid'=>$result['userid'],
                'logged_in'=> TRUE
           );  
           $this->session->set_userdata($session_data); 
           $response = array(
            'Message' => 'Logged in successfully',
            'Data'=>$session_data,
            'Responsecode' => 200
        );
           }else{
            $response = array(
                'Message' => 'Invalid user id and password',
                'Responsecode' => 204
            );
           }
           
        } else{
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        } 
       echo json_encode($response);
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
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>