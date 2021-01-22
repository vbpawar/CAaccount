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
            <h3><img src="<?php echo base_url('/admin_assets/img/udyog_icon.png'); ?>" style="height:35px;width:35px" /> Tax Invoice</h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Tax Invoice</li>
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
                                <a href="<?php echo base_url('taxInvoice');?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Tax Invoice Information</h3>
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
                                                        <a href="#taxinvoice" data-toggle="tab" title="Tax Invoice Details">
                                                            <span class="round-tabs one">
                                                                <i class="fa fa-file-invoice"></i>
                                                                <!--<i class="fa fa-user"></i>-->
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
                                                <div class="tab-pane fade in active" id="taxinvoice">
                                                    <h3 class="head text-center">Tax Invoice Information</h3>
                                                    <div class="row">
<div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"><span class="error">*</span> Name (as per pan card)</label>
                                                            <input type="text" class="form-control" placeholder="Enter your name as per pan card" name="pan_name" id="pan_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"><span class="error">*</span> PAN Card Number</label>

                                                            <input type="text" class="form-control" placeholder="Enter your unique pan card number" name="pan_number" id="pan_number" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"><span class="error">*</span> Name (as per aadhar card)</label>
                                                            <input type="text" class="form-control" placeholder="Enter your name as per aadhar card" name="aadhar_name" id="aadhar_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"><span class="error">*</span> Aadhar Card Number</label>

                                                            <input type="text" class="form-control" placeholder="Enter your 12 digit aadhar card number" name="aadhar_number" id="aadhar_number" />
                                                        </div>
                                                    </div>
                                                        
                                                         <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span> Mobile Number</label>

                                                                <input type="text" class="form-control" placeholder="Mobile Number" name="contact_number" id="contact_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span> Email</label>

                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="emailid" id="emailid" />
                                                            </div>
                                                        </div>
                                                        
                                                          <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Tax Invoice</label>
                                                                <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                                <select class="form-control selectpicker" id="buss_type" name="buss_type">
                                                                    <option value="1">Proprietorship</option>
                                                                    <option value="2">Partnership</option>
                                                                    <option value="3">Private Limited</option>
                                                                    <option value="4">Public Private Limited</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                                                                                
                                                    </div>

                                                    <!-- <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </p> -->
                                                </div>
                                                <div class="tab-pane fade" id="addressdet">
                                                    <h3 class="head text-center">Residential address</h3>
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
                                                <div class="row bg-info">
                                                    <div class="col-md-6"><h5>Seller Details</h5></div>                                                    
                                                </div>
                                                        
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"> Business/Shop/Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Business Name" name="businessName" id="businessName" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Business Address</label>

                                                            <input type="text" class="form-control" placeholder="Business Address" name="businessAdd" id="businessAdd" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>

                                                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Mobile No.</label>

                                                            <input type="text" class="form-control" placeholder="Mobile No" name="mobileNo" id="mobileNo" />
                                                        </div>
                                                    </div>
                                                        
                                                   <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">GST Number</label>
                                                                <input type="text" class="form-control" name="gst_number" id="gst_number" disabled="" />
                                                                <input type="checkbox" name="" id="enableGst" />Enable GST
                                                            </div>
                                                    </div>
                                                        
                                                    </div>
                                                        <!---Row 1 end -->
                                    <div class="row">                                 

                                                <div class="row bg-info">
                                                    <div class="col-md-6"><h5>Buyer Details</h5></div>                                                    
                                                </div>
                                        
                                              <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"> Business/Shop/Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Business Name" name="businessName1" id="businessName1" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Business Address</label>

                                                            <input type="text" class="form-control" placeholder="Business Address" name="businessAdd1" id="businessAdd1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>

                                                            <input type="email" class="form-control" placeholder="Email" name="email1" id="email1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Mobile No.</label>

                                                            <input type="text" class="form-control" placeholder="Mobile No" name="mobileNo1" id="mobileNo1" />
                                                        </div>
                                                    </div>
                                                        
                                                    <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">GST Number</label>
                                                                <input type="text" class="form-control" name="gst_number1" id="gst_number1" disabled="" />
                                                                <input type="checkbox" name="" id="enableGst1" />Enable GST
                                                            </div>
                                                    </div>

                                    </div>                
                                                
                                                        <!---Row 2 end -->
                                                        
                                    <div class="row">
                                        
                                        <div class="row bg-info">
                                            <h5>Invoice Details</h5>
                                        </div>

                                        <div class="row">

                                                    <div class="col-sm-10">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Product Name</label>
                                                                <input type="text" class="form-control" placeholder="" name="productName" id="productName"/>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>HSN</label>
                                                                <input type="text" class="form-control" placeholder="" name="hsn" id="hsn"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Quantity</label>
                                                                <input type="text" class="form-control" placeholder="" name="quantity" id="quantity"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Rate</label>
                                                                <input type="text" class="form-control" placeholder="" name="rate" id="rate"/>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Amount</label>

                                                                <input type="text" class="form-control" placeholder="" name="amount" id="amount"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>GST Rate</label>
                                                                <input type="text" class="form-control" placeholder="" name="gst" id="gst"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>CGST)</label>
                                                                <input type="text" class="form-control" placeholder="" name="igst" id="igst"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>SGST</label>
                                                                <input type="text" class="form-control" placeholder="" name="sgst" id="sgst"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Total Amount</label>
                                                                <input type="text" class="form-control" placeholder="" name="taotalamt" id="taotalamt"/>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!--  <div>
                                                           <a href="#billtab" data-toggle="tab" title="Bill Details">
                                                       <span class="round-tabs four">
                                                           <i class="fa fa-trash-alt"></i>
                                                       </span>
                                                   </a>
                                                       </div>-->
                                                    <!--//            add parteners button-->
                                                    <div class="col-sm-2">
                                                        <div class="row mt-5" style="margin-top: 25px;">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label"></label>
                                                                    <button type="button" class="btn btn-info" id="addBill">Add </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--//partener table list-->



                                                    <div class="row">
                                                        <table class="table table-bordered" id="billTable">
                                                            <tr>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Product Name</th>
                                                                    <th scope="col">HSN</th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Rate</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">GST Rate</th>
                                                                    <th scope="col">CGST</th>
                                                                    <th scope="col">SGST</th>
                                                                    <th scope="col">Total Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="billData">   

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                        
                                    </div>
                                                        
                                                        
                                                        <!---Row 3 end -->
                                                </div>
                                                <div class="tab-pane fade" id="partnership">
                                                    <div class="row">
                                                        <div class="partnerError text-center"></div>
                                                        <div class="col-sm-10">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span> Partner Name</label>
                                                                    <input type="text" class="form-control" placeholder="enter Partner name" name="partnerName" id="partnerName"/>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Aadharcard Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pAadhar" id="pAadhar"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Pancard Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pPancard" id="pPancard"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Email Id</label>

                                                                    <input type="email" class="form-control" placeholder="" name="pEmail" id="pEmail"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Mobile Number</label>

                                                                    <input type="text" class="form-control" placeholder="" name="pMobile" id="pMobile"/>
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