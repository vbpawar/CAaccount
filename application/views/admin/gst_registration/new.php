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
            <h3><img src="<?php echo base_url('/admin_assets/img/gst.png'); ?>" style="height:42px;weight:42px" /> GST Registration </h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">GST Registration</li>
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
                                <!--<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>-->
                                <a href="<?php echo base_url('gst');?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">GST Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="gst-form" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="ml-0">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <!-- <div class="liner"></div> -->
                                                    <li class="active">
                                                        <a href="#gstInfo" data-toggle="tab" title="GST Detail">
                                                            <span class="round-tabs four">
                                                                <i class="fa fa-percent"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
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
                                                        <a href="#partenship" data-toggle="tab" title="Parteners Detail">
                                                            <span class="round-tabs five">
                                                                <i class="fa fa-handshake"></i>
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
                                                <div class="tab-pane fade in active" id="gstInfo">
                                                    <div class="row card">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <!--<label class="control-label"> Income Type</label>-->
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="gst_type" id="bussCheck" value="1" />
                                                                    <label class="form-check-label" for="inlineRadio1">GST reg composition scheme</label>
                                                                    <input class="form-check-input" type="radio" name="gst_type" id="salCheck" value="2" />
                                                                    <label class="form-check-label" for="">GST reg monthly</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="personal">
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
                                                    <h3 class="head text-center">Residential Address</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder="Premise Name" name="premise_name" id="premise_name" />

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

                                                                <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="pincode" />
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
                                                                <input type="text" class="form-control" placeholder="Shop/Business Name" name="shop_name" id="shop_name" />
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
                                                                <label class="control-label">Official/Work/Permanent emailid</label>
                                                                <input type="text" class="form-control" placeholder="Official/Work/Permanent" name="office_mailid" id="office_mailid" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Startup Date</label>
                                                                <input type="date" class="form-control" placeholder="bussness startup date" name="buss_start_date" id="buss_start_date" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Type</label>
                                                                <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                                <select class="form-control selectpicker" id="bussinessType" name="buss_type">
                                                                    <option value="1">Proprietorship</option>
                                                                    <option value="2">Partnership</option>
                                                                    <option value="3">Private Limited</option>
                                                                    <option value="4">Public Private Limited</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder="Premise Name" name="s_premise_name" id="s_premise_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat Number</label>

                                                                <input type="text" class="form-control" placeholder="Flat Number" name="s_flat_number" id="s_flat_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road</label>

                                                                <input type="text" class="form-control" placeholder="Road" name="s_road" id="s_road" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Area</label>

                                                                <input type="text" class="form-control" placeholder="Area" name="s_area" id="s_area" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Village</label>

                                                                <input type="text" class="form-control" placeholder="Village" name="s_village" id="s_village" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Taluka</label>

                                                                <input type="text" class="form-control" placeholder="Taluka" name="s_taluka" id="s_taluka" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">District</label>

                                                                <input type="text" class="form-control" placeholder="District" name="s_district" id="s_district" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>

                                                                <input type="text" class="form-control" placeholder="State" name="s_state" id="s_state" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>

                                                                <input type="text" class="form-control" placeholder="Pincode" name="s_pincode" id="s_pincode" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Nature of Business</label>
                                                                <textarea class="form-control" placeholder="Nature of Business" name="nature_of_buss" id="nature_of_buss" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="partenship">
                                                    <div class="row">
                                                        <div class="partnerError text-center"></div>
                                                        <div class="col-sm-10">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Partner/Director Name</label>
                                                                    <input type="text" class="form-control" placeholder="enter Partner name" name="partnerName" id="partnerName" />
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Aadhar card Number</label>

                                                                    <input type="text" class="form-control" placeholder="ABCD0101E" name="pAadhar" id="pAadhar" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Pan card Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pPancard" id="pPancard" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Email Id</label>

                                                                    <input type="email" class="form-control" placeholder="example@gmail.com" name="pEmail" id="pEmail" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Mobile Number</label>

                                                                    <input type="text" class="form-control" placeholder="Mobile Number" name="pMobile" id="pMobile" />
                                                                </div>
                                                            </div>
                                                            <!--//documents-->
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Select Photo</label>

                                                                    <input class="form-control" id="pPhotodoc" name="pPhotodoc" type="file" onchange="loadFile(event, 'pPhotodocpre')" />
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPhotodocpre" width="20px" height="20px" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Select Aadhar card</label>

                                                                    <input class="form-control" id="pAadhardoc" name="pAadhardoc" type="file" onchange="loadFile(event, 'pAadhardocpre')" />
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pAadhardocpre" width="20px" height="20px" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Select Pan card</label>

                                                                    <input class="form-control" id="pPandoc" name="pPandoc" type="file" onchange="loadFile(event, 'pPandocpre')" />
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPandocpre" width="20px" height="20px" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--// add parteners button-->
                                                        <div class="col-sm-2">
                                                            <div class="row mt-5" style="margin-top: 25px;">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label"></label>
                                                                        <button type="button" class="btn btn-info" id="addPartener">Add</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--//partener table list-->
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="partnerTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Partener/Director</th>
                                                                        <th scope="col">Aadharcard No.</th>
                                                                        <th scope="col">Pancard No.</th>
                                                                        <th scope="col">Emailid</th>
                                                                        <th scope="col">Mobile No.</th>
                                                                        <th scope="col">Photo Attach</th>
                                                                        <th scope="col">Aadhar Attach</th>
                                                                        <th scope="col">Pancard Attach</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="partnerData">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--</div>-->
                                                </div>

                                                <div class="tab-pane fade" id="documenttab">
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>

                                                    <div class="row">
                                                        <!--content start-->
                                                        
                                                        <!--public private ltd start-->
                                                        
                                                        <div class="col-sm-6 ppl" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy of Registration Certificate</label>
                                                                <input class="form-control" id="regcertdoc" name="regcertdoc" type="file" onchange="loadFile(event, 'regcertdocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="regcertdocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 ppl" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Public Private Ltd. Agreement</label>
                                                                <input class="form-control" id="pplagreedoc" name="pplagreedoc" type="file" onchange="loadFile(event, 'pplagreedocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pplagreedocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        
                                                        <!--public private ltd end-->
                                                        
                                                        
                                                        <!--pvt ltd start-->
                                                        
                                                         
                                                        <div class="col-sm-6 pvtltd" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy Board Resolution</label>
                                                                <input class="form-control" id="boarddoc" name="boarddoc" type="file" onchange="loadFile(event, 'boarddocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="boarddocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        
                                                        <!--pvt ltd end-->
                                                        
                                                        
                                                        
                                                        <!--partnership start-->
                                                        
                                                         <div class="col-sm-6 partnerhip" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy of Partnership Deed</label>
                                                                <input class="form-control" id="psdeeddoc" name="psdeeddoc" type="file" onchange="loadFile(event, 'psdeeddocpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="psdeeddocpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <!--partnership end-->
                                                        
                                                        <!--propritership start-->
                                                        <div class="col-sm-6 proprietorship" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Photo of Prop</label>
                                                                <input class="form-control" id="propertypic" name="propertypic" type="file" onchange="loadFile(event, 'propertypicp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="propertypicp" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
<!--                                                        <div class="col-sm-6 proprietorship" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Aadhar card</label>
                                                                <input class="form-control" id="adhar" name="adhar" type="file" onchange="loadFile(event, 'adharpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php //echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="adharpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>   -->
                                                        <div class="col-sm-6 proprietorship" style="display: none">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Passport Size Photo</label>
                                                                <input class="form-control" id="passportpic" name="passportpic" type="file" onchange="loadFile(event, 'passportpicpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="passportpicpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <!--proritership end-->
                                                        
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card<span id="panSpan"></span></label>
                                                                <input class="form-control" id="pand" name="pan" type="file" onchange="loadFile(event, 'pandpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pandpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Address Proof/Electricity bill</label>
                                                                <input class="form-control" id="addressproof" name="electricity" type="file" onchange="loadFile(event, 'addressproofpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="addressproofpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>  

                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Cancel Check/Bank Statement</label>
                                                                <input class="form-control" id="bstatdoc" name="bstatdoc" type="file" onchange="loadFile(event, 'bstatdocpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bstatdocpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="rent" id="" value="1" />Yes <input type="radio" name="rent" id="" value="0" />No
                                                            <div id="rentAgree">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent aggrement</label>
                                                                    <input class="form-control" id="rentdoc" name="rentdoc" type="file" onchange="loadFile(event, 'rentdocpre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="rentdocpre" width="200px" height="200px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--content end-->
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