<?php
class User extends CI_Controller {
    
   
    public function login() {
        $this->load->view('admin/user/login');
        $this->load->view('admin/user/login_js');
    }
    
    
    public function dashboard() {
        redirect('wallet');
    }
    public function loginProcess() {
        
    }

    public function signOut() {
    }
    
}