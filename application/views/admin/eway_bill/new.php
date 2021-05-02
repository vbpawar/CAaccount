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
            <!-- <h3><i class="glyphicon glyphicon-piggy-bank"></i> Eway Bill</h3> -->
            <h3><img src="<?php echo base_url('/admin_assets/img/withdraw_512x512.png'); ?>" /> Eway Bill</h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Eway Bill</li>
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
<!--                                 <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button> -->
                                <a href="<?php echo base_url('ewayBill'); ?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Eway Bill Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="eway-form" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
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
                                                    <a style="display: none;" href="#addressdet" data-toggle="tab" title="Address Details">
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



                                                <li>
                                                    <a href="#billtab" data-toggle="tab" title="Bill Details">
                                                        <span class="round-tabs four">
                                                            <i class="fa fa-hands"></i>
                                                        </span>
                                                    </a>
                                                </li> 
                                                <li class="">
                                                    <a href="#submitButton" data-toggle="tab" title="Submit Details">
                                                        <span class="round-tabs four">
                                                            <!--<i class="fa fa-address-card"></i>-->
                                                            <!-- <i class="fa fa-store"></i> -->
                                                            <img src="<?php echo base_url('/admin_assets/img/submit_icon.png'); ?>" style="height:35px;width:35px"/>

                                                        </span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>



                                        <div id="error-container"></div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="personal">
                                                <h3 class="head text-center">personal details</h3>
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

                                                            <input type="text" class="form-control" placeholder="Enter your 12 digit aadhar card number" name="aadhar_number" id="aadhar_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Date of Birth</label>

                                                            <input type="date" class="form-control" placeholder="Enter  Date of Birth" name="dob" id="dob" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label"><span class="error">*</span> Mobile Number</label>

                                                            <input type="text" class="form-control" placeholder="Enter your 10 digit mobile number" name="contact_number" id="contact_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>

                                                            <input type="email" class="form-control" placeholder="example@gmail.com" name="emailid" id="emailid" />
                                                        </div>
                                                    </div>

                                                    <!--   <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">UAN Number</label>

                                                                <input type="text" class="form-control" placeholder="UAN Number" name="uan_number" id="uan_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">UAN Password</label>

                                                                <input type="text" class="form-control" placeholder="" name="uan_password" id="uan_password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    -->





                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Business Type</label>
                                                            <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                            <select class="form-control selectpicker" id="buss_type" name="buss_type">
                                                                <option value="1">Propritership</option>
                                                                <option value="2">Partnership</option>
                                                                <option value="3">Limited Liability Partnership</option>
                                                                <option value="4">Private Limited Company</option>
                                                            </select>
                                                        </div>
                                                    </div>

<!-- <p class="text-center">
  <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
</p> -->
                                                </div>   </div> 
                                            <div class="tab-pane fade" id="addressdet">
                                                <h3 class="head text-center">residential address details</h3>

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

                                                            <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="pincode" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
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
                                                            <label class="control-label">Shop Aadhar</label>
                                                            <input type="text" class="form-control" placeholder="shop adhar" name="shop_adhar" id="shop_adhar" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">GST Number</label>
                                                            <input type="text" class="form-control" placeholder="gst number" name="gst_number" id="gst_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
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
                                                            <label class="control-label">Eway Bill Id</label>
                                                            <input type="text" class="form-control" placeholder="eway bill id" name="eway_bill_id" id="eway_bill_id" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Eway Bill Password</label>
                                                            <!--<textarea class="form-control" placeholder="password" name="eway_bill_pass" id="eway_bill_pass" rows="1"></textarea>-->
                                                            <input type="text" class="form-control" placeholder="password" name="bill_pwd" id="bill_pwd" />
                                                        </div>
                                                    </div>

                                                </div>                                              


                                            </div>     
                                            <div class="tab-pane fade" id="billtab">
                                                <h3 class="head text-center">Bill Details</h3>
                                                <div class="row bg-info">
                                                    <div class="col-md-6">Bill From</div>
                                                    <div class="col-md-6">Dispatch From</div>
                                                </div>
                                                <!--row 1-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputGSTIN" class="col-sm-2 col-form-label"> GSTIN</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputGSTIN" name="inputGSTIN" placeholder="GSTIN" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputState" class="col-sm-2 col-form-label">State</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputState" name="inputState" placeholder="State"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                    </div>
                                                    <!--col end-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-6">
                                                                <input type="textarea" class="form-control" id="inputAddress" name="inputAddress" placeholder="Address"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputPlace" class="col-sm-2 col-form-label">Place</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputPlace" name="inputPlace" placeholder="Place"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputPincode" class="col-sm-2 col-form-label">Pincode</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputPincode" name="inputPincode" placeholder="Pincode" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                    </div>
                                                    <!--col end-->
                                                </div>
                                                <!--row 2-->
                                                <div class="row bg-info">
                                                    <div class="col-md-6">Bill To</div>
                                                    <div class="col-md-6">Ship To</div>
                                                </div>
                                                <!--row 1-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="inputName1" class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputName1" name="inputName1" placeholder="Name"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputGSTIN1" class="col-sm-2 col-form-label"> GSTIN</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputGSTIN1" name="inputGSTIN1" placeholder="GSTIN" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputState1" class="col-sm-2 col-form-label">State</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputState1" name="inputState1" placeholder="State"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                    </div>
                                                    <!--col end-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="inputAddress1" class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-6">
                                                                <input type="textarea" class="form-control" id="inputAddress1" id="inputAddress1" placeholder="Address"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputPlace1" class="col-sm-2 col-form-label">Place</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputPlace1" id="inputPlace1" placeholder="Place"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                        <div class="form-group row">
                                                            <label for="inputPincode1" class="col-sm-2 col-form-label">Pincode</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputPincode1" name="inputPincode1" placeholder="Pincode" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>
                                                        </div>
                                                        <!--sub row end-->
                                                    </div>
                                                    <!--col end-->
                                                </div>
                                                <div class="row bg-info">
                                                    Items Details
                                                </div>
                                                <!--row 5-->
                                                <div class="row">

                                                    <div class="col-sm-10">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Product Name</label>
                                                                <input type="text" class="form-control" placeholder="" name="productName" id="productName"/>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Discription</label>
                                                                <input type="text" class="form-control" placeholder="" name="discription" id="discription"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>HSN</label>
                                                                <input type="text" class="form-control" placeholder="" name="hsn" id="hsn" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Quantity</label>
                                                                <input type="text" class="form-control" placeholder="" name="quantity" id="quantity" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Unit</label>
                                                                <input type="text" class="form-control" placeholder="" name="unit" id="unit" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Value/Variable value(Rs)</label>

                                                                <input type="text" class="form-control" placeholder="" name="value" id="value" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>CGST+SGST Rate(%)</label>
                                                                <input type="text" class="form-control" placeholder="" name="gst" id="gst" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>IGST Rate(%)</label>
                                                                <input type="text" class="form-control" placeholder="" name="igst" id="igst" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>CESS Advol Rate(%)</label>
                                                                <input type="text" class="form-control" placeholder="" name="advolRate" id="advolRate" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>CESS non.Advol Rate(%)</label>
                                                                <input type="text" class="form-control" placeholder="" name="nonAdvol" id="nonAdvol" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
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
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Product Name</th>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col">HSN</th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Unit</th>
                                                                    <th scope="col">Value/Variable</th>
                                                                    <th scope="col">CGST+SGST Rate</th>
                                                                    <th scope="col">SGST Rate</th>
                                                                    <th scope="col">CESS Advol Rate</th>
                                                                    <th scope="col">CESS Non Advol Rate</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="billData">   

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-sm-10">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Total Tax'ble Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="taxamount" id="taxamount" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>
                                                            </div>




                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>CGST Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="cgstamt" id="cgstamt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>SGST Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="sgstamt" id="sgstamt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>IGST Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="igstamt" id="igstamt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>CESS Advol Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="cess_advol_amt" id="cess_advol_amt"/ onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;">
                                                                </div>

                                                            </div>


                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>CESS non.Advol Amount</label>

                                                                    <input type="text" class="form-control" placeholder="" name="cess_non_amt" id="cess_non_amt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Other Amount(+/-)</label>
                                                                    <input type="text" class="form-control" placeholder="" name="other_amt" id="other_amt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Total Inv. Amount</label>
                                                                    <input type="text" class="form-control" placeholder="" name="invoice_amt" id="invoice_amt" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46;"/>
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


                                                    </div>
                                                    <!--row 6-->

                                                    <div class="row bg-info">
                                                        <div class="col-md-6">Transportation Details</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="partnerError text-center"></div>
                                                        <div class="col-sm-10">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Transporter Name</label>
                                                                    <input type="text" class="form-control" placeholder="" name="transporterName" id="transporterName"/>
                                                                </div>

                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Transporter Id</label>
                                                                    <input type="text" class="form-control" placeholder="" name="transporterId" id="transporterId"/>
                                                                </div>

                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><span class="error">*</span>Approximate Distance (in KM)</label>
                                                                    <input type="text" class="form-control" placeholder="" name="distance_km" id="distance_km"/>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!--row 7  -->
                                                    <div class="row bg-info">
                                                        <div class="col-md-6">Part B</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Mode </label>
                                                                <input class="form-check-input" type="radio" name="modeRadio" id="inlineRadio1" value="road">
                                                                <label class="control-label"for="inlineRadio1">Road</label>
                                                                <label class="form-check-label" for="inlineRadio1"></label>
                                                                <input class="form-check-input" type="radio" name="modeRadio" id="inlineRadio2" value="rail">
                                                                <label class="form-check-label" for="inlineRadio1">Rail</label>
                                                                <input class="form-check-input" type="radio" name="modeRadio" id="inlineRadio2" value="air">
                                                                <label class="form-check-label" for="inlineRadio1">Air</label>
                                                                <input class="form-check-input" type="radio" name="modeRadio" id="inlineRadio4" value="ship">
                                                                <label class="form-check-label" for="inlineRadio1">Ship</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Vehicle Type</label>
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="regular">
                                                                <label class="form-check-label" for="inlineRadio1">Regular</label>
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="dimensional">
                                                                <label class="form-check-label" for="inlineRadio1">Over Dimensional Cargo</label>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Vehicle No.</label>
                                                                <input class="form-control" type="text" name="vehicle_number" id="vehicle_number">

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Transporter Doc.No.</label>
                                                                <input class="form-control" type="text" name="transport_doc_number" id="transport_doc_number" value="">

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"><span class="error">*</span>Date </label>
                                                                <input class="form-control" type="date" name="final_date" id="final_date" value="">

                                                            </div>
                                                        </div>



                                                    </div>    
                                                    <!--row 8-->
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="submitButton">
                                                <h3 class="text-center">SUBMIT FORM DETAILS</h3>
                                                <p class="text-center">
                                                    <button class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>
                                                </p>
                                            </div>


                                            <div class="clearfix"></div>
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
