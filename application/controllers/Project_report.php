<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class E_waybill extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_report','service');
    }
    private $response = null;
    private $records = null;

    //get all certificates
    public function getreports() {
        $records = $this->service->getreports();
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
    public function addreport()
    {
        $data = array(
        'userid '=>$this->input->post('userid'),
        'cost' => $this->input->post('cost'),
        'loanamt'=>$this->input->post('loanamt'),
        'owncapital' => $this->input->post('owncapital'),
        'noofyear'=>$this->input->post('noofyear'),
        'repayment_shedule' => $this->input->post('repayment_shedule'),
        'lastyear_bal_sheet' => $this->input->post('lastyear_bal_sheet'),
        );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addreport($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Project Report Generated successfully',
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removereport()
    {
        $id  = $this->input->post('reportid');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removereport($id))
        {
            $response = array(
                'Message' => 'Project Report removed successfully',
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

   //API - update a service
   public function updatereport(){
    $data = array(
        'userid '=>$this->input->post('userid'),
        'cost' => $this->input->post('cost'),
        'loanamt'=>$this->input->post('loanamt'),
        'owncapital' => $this->input->post('owncapital'),
        'noofyear'=>$this->input->post('noofyear'),
        'repayment_shedule' => $this->input->post('repayment_shedule'),
        'lastyear_bal_sheet' => $this->input->post('lastyear_bal_sheet'),
        );
        $reportid = $this->input->post('reportid');
    
    if(!$reportid || !$data || empty($data)){
        $response = array(
            'Message' => 'Parameter missing',
            'Responsecode' => 404
        );
    }else{
       $result = $this->service->updatereport($reportid,$data);
       if($result === 0){
        $response = array(
            'Message' => 'Sorry try again',
            'Responsecode' => 302
        );
       }else{
        $response = array(
            'Message' => 'Project report updated successfully',
            'Responsecode' => 200
        );
       }
   }
   echo json_encode($response);
   }
    
}
