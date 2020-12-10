<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

class LoginController extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('LoginModel', 'service');
        $this->load->model('Service_chargeModel','serviceCharge');
    }

    public function flash_message() {
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
        if (!empty($user) || !empty($pass)) {
            $result = $this->service->checkauth($user, $pass);
            if ($result['status']) {
                $user_data = array(
                    'username' => $result['data'][0]->firstname . ' ' . $result['data'][0]->lastname,
                    'emailid' => $result['data'][0]->emailid,
                    'role' => $result['data'][0]->roleid,
                    'userid' => $result['data'][0]->userid,
                    'contact' => $result['data'][0]->contact,
                    'logged_in' => TRUE
                );
                $userid = $result['data'][0]->userid;
                $serviceCharges = $this->serviceCharge->getservicecharges();
//           $this->session->set_userdata($session_data); 
                $pages = $this->service->accesspages($userid);
                if ($pages != NULL && count($pages) > 0) {
                    foreach ($pages as $key => $server) {
                        $Category = $server->servicetype;
                        $temp = $server;

                        if (array_key_exists($Category, $mainResult)) {
                            $mainResult["$Category"][] = $temp;
                        } else {
                            $mainResult["$Category"][] = $temp;
                        }
                    }
                }

                $session_data = array(
                    'Data' => $user_data,
                    'Pages' => $mainResult,
                    'serviceCharges' => $serviceCharges,
                );

                $this->session->set_userdata($session_data);
                
                $response = array(
                    'Message' => 'Logged in successfully',
                    'serviceCharges' => $serviceCharges,
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => 'Invalid user id or password or contact adminstrator',
                    'Responsecode' => 204
                );
            }
        } else {
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
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->cache->clean();
        redirect(base_url('services/user/login'));
    }
    public function sendmail()
    {
        $email = $this->input->post('user');
        $row = $this->service->send_mail($email);
       if($row['status']){
       $from_email = "support@tkinfotech.com"; 
       $to_email = $this->input->post('user'); 
       $link = base_url()."resetpassword?key=".$email."&token=".$row['token'];
       //Load email library 
       $this->load->library('email'); 
 
       $this->email->from($from_email, 'TKINFOTECH'); 
       $this->email->to($to_email);
       $this->email->subject('Reset Password Link'); 
       $this->email->message($link); 
 
       //Send mail 
       if($this->email->send()) {
        $response = array(
            'Message' => 'Mail is sent to your email id please reset your password',
            'Responsecode' => 200
        );
       }
       else {
        $response = array(
            'Message' => 'problem with Mail sent try again some time',
            'Responsecode' => 200
        );
       }
       }else{
        $response = array(
            'Message' => 'Email id is not registred',
            'Responsecode' => 204
        );
       }
       echo json_encode($response);
    }
    public function checkemailexpire()
    {
       $email = $this->input->get('email');
       $token = $this->input->get('token');
       $row = $this->service->check_link($email,$token);
       $curDate = date("Y-m-d H:i:s");
       if($row['status']){
        $flag = false;
        if($row['expiredate'] >= $curDate){
            $flag = true;
        }
       }else{
        $flag = false;
       }
       $response = array(
        'Message' => 'check data',
        'Data'=>$flag,
        'Responsecode' => 200
    );
    echo json_encode($response);
    }
    public function changepasswrd()
    {
       $email = $this->input->post('email');
       $token = $this->input->post('reset_link_token');
       $password = $this->input->post('password');
       $row = $this->service->change_pwd($password,$email,$token);
       if($row['status']){
        $response = array(
            'Message' => 'Password reset successfull',
            'Responsecode' => 200
        );
       }else{
        $response = array(
            'Message' => 'Password not reset',
            'Responsecode' => 204
        );
       }
       echo json_encode($response);
    }

}

?>