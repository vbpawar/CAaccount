<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Access_control extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccessModel','service');
    }
    private $response = null;
    private $records = null;

    //get API for all services
    public function getuseraccess() {
        $userid = $this->input->post('userid');
        $records = $this->service->getuserlist($userid);
        if ($records != null) {
            $response = array(
                'Message' => 'All data load successfully',
                "Data" => $records,
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Data Not Found',
                'Responsecode' => 401
            );
        }
         echo json_encode($response);
    }

    //create API for documnet master
    public function addaccess()
    {
        $data = array(
        'userid'=>$this->input->post('userid'),
        'activityid' => $this->input->post('activityid')
        );
    if(!$data){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->add_access($data);
        if($result['status']){ 
            $response = array(
                'Message' => 'User access added successfully',
                'Data'=>$result['data'],
                'Responsecode' => 200
            );
       }else{ 
        $response = array(
            'Message' => 'Try again',
                'Responsecode' => 402
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removemap()
    {
        $id  = $this->input->post('accessid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removemap($id))
        {
            $response = array(
                'Message' => 'Users access removed successfully',
                'Responsecode' => 200
            );
        } 
        else
        {
            $response = array(
                'Message' => 'Failed to remove',
                'Responsecode' => 302
            );
        }
    }
        echo json_encode($response);
    }


    
}
