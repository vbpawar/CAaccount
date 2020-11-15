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
            <!-- <h3><i class="glyphicon glyphicon-piggy-bank"></i> PF Withdrawal</h3> -->
            <h3><img src="<?php echo base_url('/admin_assets/img/withdraw_512x512.png'); ?>" /> PF Withdrawal</h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">PF Withdrawal</li>
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
                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                            </div>
                            <h3 class="panel-title">PF Withdrawal Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="pf-withdrawl-form" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
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
                                                    <li>
                                                        <a href="#bankdet" data-toggle="tab" title="Bank Details">
                                                            <span class="round-tabs three">
                                                                <i class="fa fa-bank"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#documenttab" data-toggle="tab" title="Documents">
                                                            <span class="round-tabs four">
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
                                                    <h3 class="head text-center">personal details</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Name (as per pan card)</label>
                                                                <input type="text" class="form-control" placeholder="Enter your name as per pan card" name="pan_name" id="pan_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Card Number</label>

                                                                <input type="text" class="form-control" placeholder="Enter your unique pan card number" name="pan_number" id="pan_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Name (as per aadhar card)</label>
                                                                <input type="text" class="form-control" placeholder="Enter your name as per aadhar card" name="aadhar_name" id="aadhar_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Aadhar Card Number</label>

                                                                <input type="text" class="form-control" placeholder="Enter your 12 digit aadhar card number" name="aadhar_number" id="aadhar_number" />
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
                                                                <label class="control-label">Mobile Number</label>

                                                                <input type="text" class="form-control" placeholder="Enter your 10 digit mobile number" name="contact_number" id="contact_number" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>

                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="emailid" id="emailid" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">UAN Number</label>

                                                                <input type="text" class="form-control" placeholder="" name="uanraw" id="uan" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">UAN Password</label>

                                                                <input type="text" class="form-control" placeholder="" name="uanp" id="uanp" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Confirm UAN Password</label>

                                                                <input type="text" class="form-control" placeholder="" name="uanp" id="uanp" />
                                                            </div>
                                                        </div> -->
                                                    </div>

                                                    <!-- <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </p> -->
                                                </div>
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

                                                                <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="pincode" />
                                                            </div>
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
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="documenttab">
                                                <h3 class="head text-center">documents attachment</h3>

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
                                                                                <input type="file" class="form-control" name="adhar" id="adhar" onchange="loadFile(event,'adharpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="adharpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Pan Card</label>
                                                                                <input class="form-control" id="pan" name="pan" type="file" onchange="loadFile(event,'panpre')" />
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
                                                                                <input class="form-control" id="pas" name="pas" type="file" onchange="loadFile(event,'paspre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="paspre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    

                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>













                                                    
                                                    <p class="text-center">
                                                        <button href="" class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>
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
