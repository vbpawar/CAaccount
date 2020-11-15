<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Pan_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('Pan_model', 'umodel');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_pan(){
        $result = $this->umodel->get_details();
        if ($result['status']) {
            $response = array(
                'Message' => 'PAN Details loaded successfully',
                'Data' => $result['data'],
                'Responsecode' => 200
            );
        } else {
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
        }
        echo json_encode($response);
    }
    //create API for PF master
    public function add_pan_form()
    { 
        //Residential details
        $rdetails = array(
            'premise_name ' => $this->input->post('premise_name'),
            'flat_number' => $this->input->post('flat_number'),
            'road' => $this->input->post('road'),
            'area' => $this->input->post('area'),
            'village' => $this->input->post('village'),
            'taluka' => $this->input->post('taluka'),
            'district' => $this->input->post('district'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode')
        );
    
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        
        if ($rid['status']) {
            $rid = $rid['rid'];
            $pdetails = array(
                'app_type' => $this->input->post('app_type'),
                'category' => $this->input->post('category'),
                'pan_number' => $this->input->post('pan_number'),
                'aadhar_name' => $this->input->post('aadhar_name'),
                'contact_number' => $this->input->post('contact_number'),
                'emailid' => $this->input->post('emailid'),
               'userid' => $this->input->post('userid'),
               'rid'=>$rid
            );
            $result = $this->umodel->add_details($pdetails);
            if ($result['status']) {
                $response = array(
                    'Message' => 'PAN Details added successfully',
                    'Data' => $result['data'],
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => 'Try again',
                    'Responsecode' => 402
                );
            }
        } else {
            $response = array(
                'Message' => 'Check Parameters',
                'Responsecode' => 302
            );
            
        }
        echo json_encode($response);
    }

    public function update_pan_form()
    {
        //Residential details
        $rdetails = array(
            'premise_name ' => $this->input->post('premise_name'),
            'flat_number' => $this->input->post('flat_number'),
            'road' => $this->input->post('road'),
            'area' => $this->input->post('area'),
            'village' => $this->input->post('village'),
            'taluka' => $this->input->post('taluka'),
            'district' => $this->input->post('district'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode')
        );
        $panid=$this->input->post('panid');
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid,$rdetails);
        }
        if ($rid) {
           
            $pdetails = array(
                'app_type' => $this->input->post('app_type'),
                'category' => $this->input->post('category'),
                'pan_number' => $this->input->post('pan_number'),
                'aadhar_name' => $this->input->post('aadhar_name'),
                'contact_number' => $this->input->post('contact_number'),
                'emailid' => $this->input->post('emailid'),
               'userid' => $this->input->post('userid'),
               'status'=>$this->input->post('status'),
               'rid'=>$rid
            );
            $result = $this->umodel->update_details($panid,$pdetails);
            if ($result['status']) {
                $response = array(
                    'Message' => 'PAN Details updated successfully',
                    'Data' => $result['data'],
                    'Responsecode' => 200
                );
            } else {
                $response = array(
                    'Message' => 'Try again',
                    'Responsecode' => 402
                );
            }
        } else {
            $response = array(
                'Message' => 'Check Parameters',
                'Responsecode' => 302
            );
            
        }
        echo json_encode($response);
    }
    
} 