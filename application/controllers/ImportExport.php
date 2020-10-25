<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
class ImportExport extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ImpExp','service');
    }
    private $response = null;
    private $records = null;

    //get all import export details
    public function getimpexp() {
        $records = $this->service->getimpexp();
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
    public function addimportexport()
    {
        $data = array(
        'userid '=>$this->input->post('userid'),
        'typeoforg' => $this->input->post('typeoforg'),
        'prefactivity'=>$this->input->post('prefactivity'),
        'pannumber' => $this->input->post('pannumber'),
        'panname'=>$this->input->post('panname'),
        'DOBpan' => $this->input->post('DOBpan'),
        'branchdetails' => $this->input->post('branchdetails'),
        'uaddress'=>$this->input->post('uaddress'),
        'country' => $this->input->post('country'),
        'ustate'=>$this->input->post('ustate'),
        'district' => $this->input->post('district'),

        'city'=>$this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        'bankname'=>$this->input->post('bankname'),
        'acholdername' => $this->input->post('acholdername'),
        'acno'=>$this->input->post('acno'),
        'branchname' => $this->input->post('branchname'),
        'ifsccode '=>$this->input->post('ifsccode'),
        'cin' => $this->input->post('cin'),
        'gstno'=>$this->input->post('gstno'),
        'spanname' => $this->input->post('spanname'),
        'spannumber'=>$this->input->post('spannumber'),
        'dob' => $this->input->post('dob'),

        'line1' => $this->input->post('line1'),
        'line2'=>$this->input->post('line2'),
        'scity' => $this->input->post('scity'),
        'sstate'=>$this->input->post('sstate'),
        'spin' => $this->input->post('spin'),
        'smobile' => $this->input->post('smobile'),
        'semailid'=>$this->input->post('semailid'),
        'sadharnumber' => $this->input->post('sadharnumber')
        );
    if(!$data || empty($data)){
        $response = array(
            'Message' => 'Missing parameter',
            'Responsecode' => 303
        );
    }else{ 
        $result = $this->service->addimpexp($data);
        if($result === 0){ 
            $response = array(
                'Message' => 'Try again',
                'Responsecode' => 402
            );
       }else{ 
        $response = array(
            'Message' => 'Import Export Bill Generated successfully',
            'Data'=>$result,
            'Responsecode' => 200
        );
       }
    }
     echo json_encode($response);
}

    //API - delete a document 
    public function removebill()
    {
        $id  = $this->input->post('id');
        if(!$id || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
        if($this->service->removebill($id))
        {
            $response = array(
                'Message' => 'Import export bill removed successfully',
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
   public function updateimpexp(){
    $data = array(
        'userid '=>$this->input->post('userid'),
        'typeoforg' => $this->input->post('typeoforg'),
        'prefactivity'=>$this->input->post('prefactivity'),
        'pannumber' => $this->input->post('pannumber'),
        'panname'=>$this->input->post('panname'),
        'DOBpan' => $this->input->post('DOBpan'),
        'userid '=>$this->input->post('userid'),
        'branchdetails' => $this->input->post('branchdetails'),
        'uaddress'=>$this->input->post('uaddress'),
        'country' => $this->input->post('country'),
        'ustate'=>$this->input->post('ustate'),
        'district' => $this->input->post('district'),

        'city'=>$this->input->post('city'),
        'pincode' => $this->input->post('pincode'),
        'bankname'=>$this->input->post('bankname'),
        'acholdername' => $this->input->post('acholdername'),
        'acno'=>$this->input->post('acno'),
        'branchname' => $this->input->post('branchname'),
        'ifsccode '=>$this->input->post('ifsccode'),
        'cin' => $this->input->post('cin'),
        'gstno'=>$this->input->post('gstno'),
        'spanname' => $this->input->post('spanname'),
        'spannumber'=>$this->input->post('spannumber'),
        'dob' => $this->input->post('dob'),

        'line1' => $this->input->post('line1'),
        'line2'=>$this->input->post('line2'),
        'scity' => $this->input->post('scity'),
        'sstate'=>$this->input->post('sstate'),
        'spin' => $this->input->post('spin'),
        'smobile' => $this->input->post('smobile'),
        'semailid'=>$this->input->post('semailid'),
        'sadharnumber' => $this->input->post('sadharnumber')
        );
        $id = $this->input->post('id');
    
   
        if(!$id && !$data || empty($id)){
            $response = array(
                'Message' => 'Parameter missing',
                'Responsecode' => 404
            );
        }else{
           $result = $this->service->updateimpexp($id,$data);
           if($result['result']!=0 && $result['data']!=null){
            $response = array(
                'Message' => 'Import export successfully updated',
                'Data'=>$result['data'],
                'Responsecode' => 200
            );
           }else{
            $response = array(
                'Message' => 'Sorry try again',
                'Responsecode' => 302
            );
           
           }
       }
   echo json_encode($response);
   }
    
}
