<?php
$session_data=$this->session->userdata();
//$isSession=$this->session->has_userdata();
if(isset($session_data['Data'])){
    redirect(base_url('services/user/dashboard'));
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> TKINFOTECH | Login </title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="<?php echo base_url('admin_assets/');?>css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="<?php echo base_url('admin_assets/');?>css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?php echo base_url('admin_assets/');?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="<?php echo base_url('admin_assets/');?>plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="<?php echo base_url('admin_assets/');?>plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="<?php echo base_url('admin_assets/');?>css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="<?php echo base_url('admin_assets/');?>plugins/pace/pace.min.css" rel="stylesheet">
        <style>
    
#loader {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.75) url('<?php echo base_url('admin_assets/image/loader.gif');?>') no-repeat center center;
    z-index: 10000;
}

</style>
        <script src="<?php echo base_url('admin_assets/');?>plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="cls-container">
            <!-- LOGIN FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="<?php echo base_url('admin_assets/');?>img/user.png" class="img-circle"/> </div>
                    <h4> Hello User !</h4>
                    <p class="text-center">Please login to Access your Account</p>
                    <div class="row">
                        <form class="form-inline" id="loginForm" method="post">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label class="text-muted">Email ID</label>
                                    <input id="user" name="user" type="email" placeholder="Enter Email ID" class="form-control" required />
                                </div>
                                <div class="text-left">
                                    <label for="signupInputPassword" class="text-muted">Password</label>
                                    <input id="pass" name="pass" type="password" placeholder="Password" class="form-control lock-input" required />
                                </div>
                                <div class="pull-left pad-btm">
                                    <label class="form-checkbox form-icon form-text">
                                    <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">
                                Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="registration"> Forgot Password ! <a href="#/pages/signup"> <span class="text-primary"> click here </span> </a> </div> -->
            </div>
            <div id="loader"></div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="<?php echo base_url('admin_assets/');?>js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="<?php echo base_url('admin_assets/');?>js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="<?php echo base_url('admin_assets/');?>plugins/fast-click/fastclick.min.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="<?php echo base_url('admin_assets/');?>plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="<?php echo base_url('admin_assets/');?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--sweet alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script> //img preview code ######DON'T REMOVE ####
    var $loading = $('#loader').hide();
    $(document)
            .ajaxStart(function () {
                $loading.show();

            })
            .ajaxStop(function () {
                $loading.hide();
            });
            </script>
    </body>
</html>