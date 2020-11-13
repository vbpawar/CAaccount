<?php
$session_data=$this->session->userdata();
//$isSession=$this->session->has_userdata();
if($session_data['Data']==NULL){
    redirect(base_url('services/user/login'));
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> TKINFOTECH | <?php echo $title; ?></title>
        
        
    