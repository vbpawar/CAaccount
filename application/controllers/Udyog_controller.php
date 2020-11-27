<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class Udyog_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ResidentialModel', 'rmodel');
        $this->load->model('PersonalModel', 'pmodel');
        $this->load->model('BankModel', 'bmodel');
        $this->load->model('ShopModel', 'smodel');
        $this->load->model('Udyog_Model', 'umodel');
        $this->load->model('DocsModel', 'docs');
    }
    private $response = null;
    private $records = null;
    

    public function get_all_udyog(){
        $result = $this->pfmodel->get_details();
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
    public function add_udyog_form()
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
        //bank details
        $bdetails = array(
            'bank_name ' => $this->input->post('bank_name'),
            'ac_number' => $this->input->post('ac_number'),
            'ifsc_number' => $this->input->post('ifsc_number')
        );

        $shop_details = array(
            'premise_name ' => $this->input->post('s_premise_name'),
            'flat_number' => $this->input->post('s_flat_number'),
            'road' => $this->input->post('s_road'),
            'area' => $this->input->post('s_area'),
            'village' => $this->input->post('s_village'),
            'taluka' => $this->input->post('s_taluka'),
            'district' => $this->input->post('s_district'),
            'state' => $this->input->post('s_state'),
            'pincode' => $this->input->post('s_pincode')
        );
        if (!empty($shop_details)) {
            $shopdetails = $this->rmodel->add_details($shop_details);
            if ($shopdetails['status']) {
               $r_id = $shopdetails['rid'];
               $sdetails = array(
                   'rid'=>$r_id,
                'shop_name'=>$this->input->post('shop_name'),
                'office_contact'=>$this->input->post('office_contact'),
                'office_mailid'=>$this->input->post('office_mailid'),
                'buss_start_date'=>$this->input->post('buss_start_date')
               );
            }
            $sid = $this->smodel->add_details($sdetails);
            if($sid['status']){
                $sid = $sid['sid'];
            }
        }
        if (!empty($pdetails)) {
            $pid = $this->pmodel->add_details($pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->rmodel->add_details($rdetails);
        }
        if (!empty($bdetails)) {
            $bid = $this->bmodel->add_details($bdetails);
        }
        
        $userid = $this->input->post('userid');
        
        if ($pid['status'] && $rid['status'] && $bid['status']) {
            $pid = $pid['pid'];
            $rid = $rid['rid'];
            $bid = $bid['bid'];
            
            $data = array(
                'userid' => $userid,
                'pid' => $pid,
                'rid' => $rid,
                'bid' => $bid,
                'sid'=>$sid,
                'nature_of_buss'=>$this->input->post('nature_of_buss'),
                'buss_type'=>$this->input->post('buss_type'),
                'turn_over_amt'=>$this->input->post('turn_over_amt'),
                'gst_number'=>$this->input->post('gst_number'),
                'male'=>$this->input->post('male'),
                'female'=>$this->input->post('female')
            );
            
            $result = $this->umodel->add_details($data);
            if ($result['status']) {
                $response = array(
                    'Message' => 'Udyog Details added successfully',
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

    public function update_pf_form()
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
        //bank details
        $bdetails = array(
            'bank_name ' => $this->input->post('bank_name'),
            'ac_number' => $this->input->post('ac_number'),
            'ifsc_number' => $this->input->post('ifsc_number')
        );
        if (!empty($pdetails)) {
            $pid = $this->input->post('pid');
            $pid = $this->pmodel->update_details($pid,$pdetails);
        }
        if (!empty($rdetails)) {
            $rid = $this->input->post('rid');
            $rid = $this->rmodel->update_details($rid,$rdetails);
        }
        if (!empty($bdetails)) {
            $bid = $this->input->post('bid');
            $bid = $this->bmodel->update_details($bid,$bdetails);
        }
        
        $userid = $this->input->post('userid');
        $status = $this->input->post('status');
        $pfid=$this->input->post('pfid');
        if ($pid && $rid && $bid) {
           
            $data = array(
                'status'=>$status
            );
            $result = $this->pfmodel->update_details($pfid,$data);
            if ($result['status']) {
                $response = array(
                    'Message' => 'PF Details updated successfully',
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