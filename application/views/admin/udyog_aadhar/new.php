<style>
    .error{
        color:red;
        size: 10px;
    }
</style>

<div class="boxed newDiv">
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="profilebody">
            <div class="pad-all animated fadeInDown">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">Users</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-users fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">Inbox</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-envelope fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">FAQ</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-headphones fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">Settings</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-cogs fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">Calender</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-calendar fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                        <div class="panel panel-default mar-no">
                            <div class="panel-body">
                                <a href="JavaScript:void(0);">
                                    <div class="pull-left">
                                        <p class="profile-title text-bricky">Pictures</p>
                                    </div>
                                    <div class="pull-right text-bricky"><i class="fa fa-picture-o fa-4x"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageheader">
            <!-- <h3><i class="glyphicon glyphicon-piggy-bank"></i> Udyog Aadhar</h3> -->
            <h3><img src="<?php echo base_url('/admin_assets/img/udyog_icon.png'); ?>" style="height:35px;width:35px" /> Udyog Aadhar</h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Udyog Aadhar</li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <!-- <div class="row"> -->
            <div class="eq-height">
                <div class="col-sm-6 eq-box-sm">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-control">
                                <!-- <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button> -->
                                <a href="<?php echo base_url('udyagAadhar');?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Udyog Aadhar Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="udyog-form" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="ml-0">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <!-- <div class="liner"></div> -->

                                                    <li class="active">
                                                        <a href="#personal" data-toggle="tab" title="Personal Details">
                                                            <span class="round-tabs one">
                                                                <i class="fa fa-user"></i>
                                                                <!-- <i class="glyphicon glyphicon-profile"></i> -->
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#addressdet" data-toggle="tab" title="Address Details">
                                                            <span class="round-tabs two">
                                                                <i class="fa fa-address-card"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#shopdetails" data-toggle="tab" title="Shop Details">
                                                            <span class="round-tabs three">
                                                                <!--<i class="fa fa-address-card"></i>-->
                                                                <!-- <i class="fa fa-store"></i> -->
                                                                <img src="<?php echo base_url('/admin_assets/img/shop_icon.png'); ?>" style="height:35px;width:35px"/>

                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li id="dynamicLi" style="display: none;">
                                                        <a href="#partnership" data-toggle="tab" title="Partners Detail">
                                                            <span class="round-tabs four">
                                                                <i class="fa fa-handshake"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#bankdet" data-toggle="tab" title="Account Detail">
                                                            <span class="round-tabs five">
                                                                <i class="fa fa-bank"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#documenttab" data-toggle="tab" title="Documents">
                                                            <span class="round-tabs six">
                                                                <i class="fa fa-file"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <!-- <li>
                                                        <a href="#doner" data-toggle="tab" title="completed">
                                                            <span class="round-tabs five">
                                                                <i class="glyphicon glyphicon-ok"></i>
                                                            </span>
                                                        </a>
                                                    </li> -->
                                                </ul>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="personal">
                                                    <h3 class="head text-center">Personal Information</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Name (as per pan card)</label>
                                                                <input type="text" class="form-control" placeholder="Name (as per pan card)" name="pan_name" id="pan_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Card Number</label>

                                                                <input type="text" class="form-control" placeholder="PAN Card Number" name="pan_number" id="pan_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Name(as per aadharcard)</label>

                                                                <input type="text" class="form-control" placeholder="Name(as per aadharcard)" name="aadhar_name" id="aadhar_name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Aadhar Card Number</label>

                                                                <input type="text" class="form-control" placeholder="Aadhar Card Number" name="aadhar_number" id="aadhar_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">D.O.B</label>

                                                                <input type="date" class="form-control" name="dob" id="dob" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>

                                                                <input type="text" class="form-control" placeholder="Mobile Number" name="contact_number" id="contact_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>

                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="emailid" id="emailid" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </p> -->
                                                </div>
                                                <div class="tab-pane fade" id="addressdet">
                                                    <h3 class="head text-center">residential address</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder=" Premise Name" name="premise_name" id="premise_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat Number</label>

                                                                <input type="text" class="form-control" placeholder="Flat Number" name="flat_number" id="flat_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road</label>

                                                                <input type="text" class="form-control" placeholder="Road" name="road" id="road" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Area</label>

                                                                <input type="text" class="form-control" placeholder="Area" name="area" id="area" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Village</label>

                                                                <input type="text" class="form-control" placeholder="Village" name="village" id="village" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Taluka</label>

                                                                <input type="text" class="form-control" placeholder="Taluka" name="taluka" id="taluka" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">District</label>

                                                                <input type="text" class="form-control" placeholder="District" name="district" id="district" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>

                                                                <input type="text" class="form-control" placeholder="State" name="state" id="state" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>

                                                                <input type="text" class="form-control" placeholder="pincode" name="pincode" id="pincode" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="shopdetails">
                                                    <h3 class="head text-center">Shop Details</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Shop/Business Name</label>
                                                                <input type="text" class="form-control" placeholder="Enter Shop/Business name" name="shop_name" id="shop_name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Office Contact Number</label>
                                                                <input type="text" class="form-control" placeholder="Office Contact Number" name="office_contact" id="office_contact" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Office Mail</label>
                                                                <input type="text" class="form-control" placeholder="Office Mail" name="office_mailid" id="office_mailid" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Official/ Work/ Permanent</label>
                                                                <input type="text" class="form-control" placeholder="Official/ Work/ Permanent" name="shopName" id="shopName" />
                                                            </div>
                                                        </div> -->
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Startup Date</label>
                                                                <input type="date" class="form-control" placeholder="bussness startup date" name="buss_start_date" id="buss_start_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Nature of Business</label>
                                                                <textarea class="form-control" name="nature_of_buss" id="nature_of_buss" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Type</label>
                                                                <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                                <select class="form-control selectpicker" id="buss_type" name="buss_type">
                                                                    <option value="1">Proprietorship</option>
                                                                    <option value="2">Partnership</option>
                                                                    <option value="3">Private Limited</option>
                                                                    <option value="4">Public Private Limited</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder="enter your name" name="shopPremiseName" id="shopPremiseName" />

                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat Number</label>

                                                                <input type="text" class="form-control" placeholder="Flat Number" name="shopFlatNo" id="shopFlatNo" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road</label>

                                                                <input type="text" class="form-control" placeholder="Road" name="shopRoad" id="shopRoad" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Area</label>

                                                                <input type="text" class="form-control" placeholder="area" name="area" id="area" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Village</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Taluka</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">District</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <h4>Number of Employee</h4>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Male</label>

                                                                <input type="text" class="form-control" name="male" id="male" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Female</label>

                                                                <input type="text" class="form-control" name="female" id="female" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="partnership">
                                                    <div class="row">
                                                        <div class="partnerError text-center"></div>
                                                        <div class="col-sm-10">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span> Partner Name</label>
                                                                    <input type="text" class="form-control" placeholder="enter Partner name" name="partnerName" id="partnerName" required="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Aadharcard Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pAadhar" id="pAadhar" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Pancard Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pPancard" id="pPancard" required=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Email Id</label>

                                                                    <input type="email" class="form-control" placeholder="" name="pEmail" id="pEmail" required="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Mobile Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pMobile" id="pMobile" required=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--// add parteners button-->
                                                        <div class="col-sm-2">
                                                            <div class="row mt-5" style="margin-top: 25px;">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label"></label>
                                                                        <button type="button" class="btn btn-info" id="addPartener">Add Parteners</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--//partener table list-->
                                                        <div class="row">
                                                            <table class="table table-bordered" id="partnerTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Partener Name</th>
                                                                        <th scope="col">Aadharcard No.</th>
                                                                        <th scope="col">Pancard No.</th>
                                                                        <th scope="col">Mobile No.</th>
                                                                        <th scope="col">Email Id</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="partnerData">
                                                                    <!--                                                                    <tr>
                                                                        <td>Lalit</td>
                                                                        <td>Aadhar123</td>
                                                                        <td>Pan123</td>
                                                                        <td>8007015819</td>
                                                                        <td>lalit@gmail.com</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="test()">
                                                                                <i class="fa fa-trash-alt" ></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>-->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="bankdet">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Bank Name</label>
                                                                <input type="text" class="form-control" placeholder="Bank Name" name="bank_name" id="bank_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Account Number</label>

                                                                <input type="text" class="form-control" placeholder="Account Number" name="ac_number" id="ac_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">IFSC Number</label>

                                                                <input type="text" class="form-control" placeholder="IFSC Number" name="ifsc_number" id="ifsc_number" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Turn over Amount</label>

                                                                <input type="text" class="form-control" name="turn_over_amt" id="turn_over_amt" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">GST Number</label>
                                                                <input type="text" class="form-control" name="gst_number" id="gst_number" disabled="" />
                                                                <input type="checkbox" name="" id="enableGst" />Enable GST
                                                            </div>
                                                        </div>
                                                        <!--//electricity Bill-->
                                                        <div class="row">
                                                            <h4></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="documenttab">
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>

                                                    <div class="row">
                                                        <div>
                                                            <table class="table table-image">
                                                                <!-- <thead>
                                                                    <tr>
                                                                        <th scope="col">DOCUMENT</th>
                                                                        <th scope="col">PREVIEW</th>
                                                                    </tr>
                                                                </thead> -->
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="form-label">Aadhar Card </label>
                                                                                <input type="file" class="form-control" name="adhar" id="adhar" onchange="loadFile(event, 'bankstatpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bankstatpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Pan Card</label>
                                                                                <input class="form-control" id="pan" name="pan" type="file" onchange="loadFile(event, 'panpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="panpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Cancelled Check Passbook</label>
                                                                                <input class="form-control" id="passport" name="passport" type="file" onchange="loadFile(event, 'passportpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="passportpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--extra attachment-->
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <h4>Do you have Electricity Bill of shop?</h4>
                                                                <input type="radio" name="elect" id="" value="1" />Yes <input type="radio" name="elect" id="" value="0" />No
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 electricityAttach">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Electricity Bill of Shop</label>
                                                                                <input class="form-control" id="electricity" name="electricity" type="file" onchange="loadFile(event, 'elpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="elpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--other documents start-->
                                                        <div class="col-sm-6 otherdocAttach">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>Other Document for Partnership/Private Limited/Public Private Limited</h6>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Other Documents</label>
                                                                                <input class="form-control" id="otherdoc" name="otherdoc" type="file" onchange="loadFile(event, 'otherpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="otherpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--other documents end-->
                                                    </div>

                                                    <p class="text-center">
                                                        <button class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>
                                                    </p>
                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        <!--===================================================-->
                        <!--End Block Styled Form -->
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
<div id="loader"></div>