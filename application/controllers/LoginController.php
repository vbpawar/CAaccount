<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
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
        $mainResult = array();
        if(!empty($user) || !empty($pass)){
           $result = $this->service->checkauth($user,$pass);
           if($result['status']) {
            $session_data = array( 
                'username' => $result['data'][0]->firstname.' '.$result['data'][0]->lastname,
                'emailid'=>$result['data'][0]->emailid,
                'role'=>$result['data'][0]->roleid,
                'userid'=>$result['data'][0]->userid,
                'logged_in'=> TRUE
           );
          $userid = $result['data'][0]->userid;
           $this->session->set_userdata($session_data); 
           $pages = $this->service->accesspages($userid);
           if($pages!=NULL && count($pages)>0){
            foreach ($pages as $key => $server) {
                $Category = $server->servicetype;
                $temp     = $server;
                 
            if (array_key_exists($Category, $mainResult)) {
                $mainResult["$Category"][] = $temp;
            } else {
                $mainResult["$Category"][] = $temp;
            }
            }
           }
           
           $response = array(
            'Message' => 'Logged in successfully',
            'Data'=>$session_data,
            'Pages'=>$mainResult,
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