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
            <h3><img src="<?php echo base_url('/admin_assets/img/withdraw_512x512.png'); ?>" /> GST Registration </h3>

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
                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                            </div>
                            <h3 class="panel-title">GST Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="pf-withdrawl-form" method="post">
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
                                                                <i class="fa fa-store"></i>
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
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"> GST reg composition scheme</label>
                                                                    <input type="text" class="form-control" placeholder="" name="" id="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">GST reg monthly</label>
                                                                    <select class="form-control" name="" id="">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                    </select>
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
                                                                <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Card Number</label>

                                                                <input type="text" class="form-control" placeholder="ABCD0101E" name="panno" id="panno" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Name(as per aadharcard)</label>

                                                                <input type="text" class="form-control" placeholder="Enter your name" name="aadharName" id="aadharName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Aadhar Card Number</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>

                                                                <input type="text" class="form-control" placeholder="8888888888" name="mobile" id="mobile" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>

                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="email" id="email" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </p> -->
                                                </div>
                                                <div class="tab-pane fade" id="addressdet">
                                                    <h3 class="head text-center">resdential aadress</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat Number</label>

                                                                <input type="text" class="form-control" placeholder="ABCD0101E" name="panno" id="panno" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Area</label>

                                                                <input type="text" class="form-control" placeholder="123456789123" name="aadhar" id="aadhar" />
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="shopdetails">
                                                    <h3 class="head text-center">Shop Details</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Shop/Business Name</label>
                                                                <input type="text" class="form-control" placeholder="Enter Shop/Business name" name="shopName" id="shopName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Office Contact Number</label>
                                                                <input type="text" class="form-control" placeholder="Office Contact Number" name="shopName" id="shopName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Official/Work/Permanent</label>
                                                                <input type="text" class="form-control" placeholder="official/work/permanent" name="shopName" id="shopName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Startup Date</label>
                                                                <input type="date" class="form-control" placeholder="bussness startup date" name="shopName" id="shopName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Nature of Business</label>
                                                                <textarea class="form-control" name="shopName" id="shopName" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Type</label>
                                                                <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                                <select class="form-control selectpicker" id="bussinessType">
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
                                                                <input type="text" class="form-control" placeholder="enter your name" name="shopPremiseName" id="shopPremiseName" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
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
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <h4>Number of Employee</h4>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Male</label>

                                                                <input type="text" class="form-control" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Female</label>

                                                                <input type="text" class="form-control" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane fade" id="documenttab">
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>

                                                    <!--properitership-->
                                                    <div class="row" id="proprietorship">
                                                        <!--content start-->
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">photo of prop</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">address proof(Electricity bill)</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>  

                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">cancel check/bank stat</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">passport size photo</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="rent" id="" value="1" />Yes <input type="radio" name="rent" id="" value="0" />No
                                                            <div id="rentAgree">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent aggrement</label>
                                                                    <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--content end-->
                                                    </div>

                                                    <!--private limited-->
                                                    <div class="row" id="pvtltd">
                                                        <!--content start-->
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card of company</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">electricity bill of business</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">cancel check/passbook</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">copy board resolutionok</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="rentPrivate" id="" value="1" />Yes <input type="radio" name="rentPrivate" id="" value="0" />No
                                                            <div id="rentAgree2">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent aggrement</label>
                                                                    <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--content end-->
                                                    </div>
                                                    <!--public private limited-->
                                                    <div class="row" id="ppl">
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card of ppl</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">copy of reg cert</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">electricity bill</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16p')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16p" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--partnerhip-->
                                                    <div class="row" id="partnerhip">
                                                        <!--content start-->
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card of partner ship firm</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">copy of partner ship deed</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Address pfroof(electricity bill)</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">cancel check/bank stmt</label>
                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="partnerRent" id="partnerRent" value="1" />Yes <input type="radio" name="partnerRent" id="partnerRent" value="0" />No
                                                            <div id="rentAgree1">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent aggrement</label>
                                                                    <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--content end-->

                                                    </div>
                                                    <!--all partners start-->
                                                    <div class="col-sm-12" id="Partners_director">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Partner/Director Name</label>
                                                                        <input type="text" class="form-control" placeholder="enter Partner name" name="partnerName" id="partnerName" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Aadharcard Number</label>

                                                                        <input type="text" class="form-control" placeholder="ABCD0101E" name="pAadhar" id="pAadhar" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Pancard Number</label>

                                                                        <input type="text" class="form-control" placeholder="" name="pPancard" id="pPancard" />
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

                                                            <!--//partener table list-->
                                                            <div class="row">
                                                                <table class="table table-bordered" id="partnerTable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Partener/Director Name</th>
                                                                            <th scope="col">Aadharcard No.</th>
                                                                            <th scope="col">Pancard No.</th>
                                                                            <th scope="col">Photo Attachment</th>
                                                                            <th scope="col">Aadhar Attachment</th>
                                                                            <th scope="col">Pancard Attachment</th>
                                                                            <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="partnerData">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--all partners end-->
                                                    <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
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
