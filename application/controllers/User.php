<?php

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Contact_model', 'contact');
    }

    public function createUser() {
        $roleid = $this->input->post('roleid');
        $user1 = array(
            'roleid' => $this->input->post('roleid'),
            'emailid' => $this->input->post('emailid'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'upassword' => $this->input->post('upassword'),
            'contact' => $this->input->post('contact'),
        );
        $userid = $this->user->createNewUser($user1);
        $contact = array(
            'userid' => $userid,
            'country' => $this->input->post('country'),
            'ustate' => $this->input->post('ustate'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'uaddress' => $this->input->post('uaddress'),
        );
        $result = $this->contact->createUserContact($contact);

        if ($result) {

            $response = array(
                'Message' => 'user created successfully',
                "userid" => $userid,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Record not inserted!',
                'Responsecode' => 401,
            );
        }
        echo json_encode($response);
//        echo json_encode(array('$userid'=>$userid));
    }

    public function getUsersList() {
//        $response=null;
        $records = $this->user->getAllUsersList();
        if ($records != null) {

            $response = array(
                'Message' => 'get all users list successfully!',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'records not found',
                'Responsecode' => 401
            );
        }
        echo json_encode($response);
    }

    public function deleteUser() {
        $userid = $this->input->post("userid");
        $result = $this->user->deleteUser($userid);
        if ($result) {
            $response = array(
                'Message' => 'user deleted successfully',
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Failed to delete',
                'Responsecode' => 302
            );
        }
        echo json_encode($response);
    }
    
    public function findUser($userid) {
//        $userid = $this->input->get('userid');
        $record=$this->user->findUser($userid);   
        if($record!=null){
             $response = array(
                'Message' => 'get user successfully',
                 'Data'=>$record,
                'Responsecode' => 200
            );
        }else{
             $response = array(
                'Message' => 'not found',
                'Responsecode' => 401
            );
        }
        echo json_encode($response);
    }
     //API - update a service

   public function updateuser(){
    $userid = $this->input->post('userid');
    $data = array(
        'roleid' => $this->input->post('roleid'),
        'emailid' => $this->input->post('emailid'),
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'upassword' => $this->input->post('upassword'),
        'contact' => $this->input->post('contact')
    );
    $contact = array(
        'country' => $this->input->post('country'),
        'ustate' => $this->input->post('ustate'),
        'city' => $this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        'uaddress' => $this->input->post('uaddress'),
    );
    if(!$userid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $user = $this->user->updateuser($userid,$data);
       $contact = $this->contact->updatecontact($userid,$contact);
       if($user['result'] === 0 && $contact['result'] ===0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
           $contactdetails = $contact['data'];
           $userdata = $user['data'];
        $response = array(
            'Message' => 'user updated successfully',
            'contactdetails'=> $contactdetails,
            'userdata'=>$userdata,
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }

}
