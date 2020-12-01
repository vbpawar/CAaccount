<?php

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Contact_model', 'contact');
        $this->load->model('DistributorModel','service');
    }

    public function createUser() {
        $user = array(
            'roleid' => $this->input->post('roleid'),
            'emailid' => $this->input->post('emailid'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'upassword' => $this->input->post('upassword'),
            'contact' => $this->input->post('contact')
        );
      
        $userid = $this->user->createNewUser($user);
        $contact = array(
            'userid' => $userid,
            'country' => $this->input->post('country'),
            'ustate' => $this->input->post('ustate'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'uaddress' => $this->input->post('uaddress')
        );
        $userdata = $_SESSION['Data'];
        if($userdata['role']=='2'){
            $dist_data = array(
                'distributorid'=>$userdata['userid'],
                'retailorid' => $userid
                ); 
                $add = $this->service->add_retailors($dist_data);
        }
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
        $userdata = $_SESSION['Data'];
        $userid = $userdata['userid'];
        $roleid = $userdata['role'];
        if($roleid == 2){
            $records = $this->user->getDistributorList($userid);
        }else{
            $records = $this->user->getAllUsersList();   
        }
       
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

    public function findUser() {
        $userid = $this->input->get('userid');
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
                    $userdata = $_SESSION['Data'];
                    if($userdata['role']=='2'){
                        $dist_data = array(
                            'distributorid'=>$userdata['userid'],
                            'retailorid' => $userid
                            ); 
                            $add = $this->service->add_retailors($dist_data);
                    }
                   $result = $this->contact->createUserContact($contact);
                   $this->user->delete_access($userid);
                   $access= $this->input->post('access');
                   $access = explode(',',$access);
                   for($i=0;$i<count($access);$i++){
                    $data = array(
                        'userid'=>$userid,
                        'activityid'=>$access[$i]
                    );
                 $insert[] = $this->user->create_batch($data);
                }
                    $response = array(
                        'Message' => 'user updated successfully',
                       'contactdetails' =>  $insert,
                        'Responsecode' => 200
                    );
                }
            }
        }
        echo json_encode($response);
    }

    public function update_profile() {
        $userid = $this->input->post('userid');
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'upassword' => $this->input->post('upassword')
        );
        $contact = array(
            'country' => $this->input->post('country'),
            'ustate' => $this->input->post('ustate'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'uaddress' => $this->input->post('uaddress')
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
            $contactResult = $this->contact->updatecontact($userid, $contact);
                if ($userResult === FALSE && $contactResult === FALSE) {
                    $response = array(
                        'Message' => 'Sorry try again',
                        'Responsecode' => 302
                    );
                } else {
                    $response = array(
                        'Message' => 'user updated successfully',
                        'Responsecode' => 200
                    );
                }
            
        }
        echo json_encode($response);
    }
    public function activateuser()
    {
     $userid = $this->input->post('userid');
     $userResult = $this->user->activate_user($userid);
     if ($userResult) {
        $response = array(
            'Message' => 'user Details successfully',
            'Responsecode' => 200
        );
    } else {
        
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
    }
    echo json_encode($response);
    }


}
