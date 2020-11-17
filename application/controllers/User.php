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
        $user = array(
            'roleid' => $this->input->post('roleid'),
            'emailid' => $this->input->post('emailid'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'upassword' => $this->input->post('upassword'),
            'contact' => $this->input->post('contact'),
        );
        $userid = $this->user->createNewUser($user);
        $contact = array(
            'userid' => $userid,
            'country' => $this->input->post('country'),
            'ustate' => $this->input->post('ustate'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'uaddress' => $this->input->post('uaddress'),
        );
        $result = $this->contact->createUserContact($contact);
       $access= $this->input->post('access');
       $access = explode(',',$access);
       
       for($i=0;$i<count($access);$i++){
        $data = array(
            'userid'=>$userid,
            'activityid'=>$access[$i]
        );
     $insert[] = $this->user->create_batch($data);
    } 
//    echo $access[$i];
    
    if ($result) {

            $response = array(
                'Message' => 'user created successfully',
                "userid" => $userid,
                'array'=>$insert,
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
        $access = $this->user->getUserAccess();
        if ($records != null) {

            $response = array(
                'Message' => 'get all users list successfully!',
                "Data" => $records,
                "access" => $access,
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
        $record = $this->user->findUser($userid);
        if ($record != null) {
            $response = array(
                'Message' => 'get user successfully',
                'Data' => $record,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'not found',
                'Responsecode' => 401
            );
        }
        echo json_encode($response);
    }

    //API - update a service

    public function updateuser() {
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
        
        $response=NULL;
        if ($data == null || $contact == null || $userid == null) {
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        } else {
            $userResult;
            $contactResult;
            $userResult = $this->user->updateuser($userid, $data);
            if ($userResult) {
                $contactResult = $this->contact->updatecontact($userid, $contact);
                if ($userResult === FALSE && $contactResult === FALSE) {
                    $response = array(
                        'Message' => 'Sorry try again',
                        'Responsecode' => 302
                    );
                } else {
//                    $contactdetails = $contact['data'];
//                    $userdata = $user['data'];
                    $response = array(
                        'Message' => 'user updated successfully',
//                        'contactdetails' => $contactdetails,
//                        'userdata' => $userdata,
                        'Responsecode' => 200
                    );
                }
            }
        }
        echo json_encode($response);
    }

}
