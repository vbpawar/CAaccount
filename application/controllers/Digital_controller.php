<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Digital_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('DigitalModel', 'dmodel');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_digital(){
        $result = $this->dmodel->get_details();
        if ($result['status']) {
            $response = array(
                'Message' => 'PF Details loaded successfully',
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
    public function add_digital_form()
    {
        //personal details
        $pdetails = array(
            'pan_name ' => $this->input->post('pan_name'),
            'pan_number' => $this->input->post('pan_number'),
            'aadhar_name' => $this->input->post('aadhar_name'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'contact_number' => $this->input->post('contact_number'),
            'emailid' => $this->input->post('emailid'),
            'dob' => $this->input->post('dob')
        );
        
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
       
        if (!empty($pdetails)) {
            $pid = $this->pmodel->add_details($pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        
        $userid = $this->input->post('userid');
        
        if ($pid['status'] && $rid['status']) {
            $pid = $pid['pid'];
            $rid = $rid['rid'];
            
            $data = array(
                'userid' => $userid,
                'class'=>$this->input->post('class'),
                'uan_number'=>$this->input->post('uan_number'),
                'uan_password'=>$this->input->post('uan_password'),
                'nature_of_buss'=>$this->input->post('nature_of_buss'),
                'trade_name'=>$this->input->post('trade_name'),
                'place_of_buss'=>$this->input->post('place_of_buss'),
                'pid' => $pid,
                'rid' => $rid
            );
            
            $result = $this->dmodel->add_details($data);
            if ($result['status']) {
                
                $response = array(
                    'Message' => 'Digital Signature added successfully',
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

    public function update_digital_form()
    {
        //personal details
        $pdetails = array(
            'pan_name ' => $this->input->post('pan_name'),
            'pan_number' => $this->input->post('pan_number'),
            'aadhar_name' => $this->input->post('aadhar_name'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'contact_number' => $this->input->post('contact_number'),
            'emailid' => $this->input->post('emailid'),
            'dob' => $this->input->post('dob')
        );
        
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
        if (!empty($pdetails)) {
            $pid = $this->input->post('pid');
            $pid = $this->pmodel->update_details($pid,$pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid,$rdetails);
        }
        
        $userid = $this->input->post('userid');
        $did=$this->input->post('did');
        if ($pid && $rid) {
           
            $data = array(
                'userid' => $userid,
                'class'=>$this->input->post('class'),
                'uan_number'=>$this->input->post('uan_number'),
                'uan_password'=>$this->input->post('uan_password'),
                'nature_of_buss'=>$this->input->post('nature_of_buss'),
                'trade_name'=>$this->input->post('trade_name'),
                'place_of_buss'=>$this->input->post('place_of_buss'),
                'pid' => $pid,
                'rid' => $rid,
                'status'=>$this->input->post('status')
            );
            $result = $this->dmodel->update_details($did,$data);
            if ($result['status']) {
                $response = array(
                    'Message' => 'Digital Signature Details updated successfully',
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