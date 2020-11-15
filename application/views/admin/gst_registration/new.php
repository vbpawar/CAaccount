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
                                                                <!-- <i class="fa fa-store"></i> -->
                                                                <img src="<?php echo base_url('/admin_assets/img/shop_icon.png'); ?>" style="height:35px;width:35px"/>

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
                                                                <input type="text" class="form-control" placeholder="Name (as per pan card)" name="retailorid" id="retailorid" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Card Number</label>

                                                                <input type="text" class="form-control" placeholder="PAN Card Number" name="panno" id="panno" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Name(as per aadharcard)</label>

                                                                <input type="text" class="form-control" placeholder="Name(as per aadharcard)" name="aadharName" id="aadharName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Aadhar Card Number</label>

                                                                <input type="text" class="form-control" placeholder="Aadhar Card Number" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>

                                                                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="mobile" />
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
                                                    <h3 class="head text-center">Residential Address</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Premise Name</label>
                                                                <input type="text" class="form-control" placeholder="Premise Name" name="retailorid" id="retailorid" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat Number</label>

                                                                <input type="text" class="form-control" placeholder="Flat Number" name="panno" id="panno" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road</label>

                                                                <input type="text" class="form-control" placeholder="Road" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Area</label>

                                                                <input type="text" class="form-control" placeholder="Area" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Village</label>

                                                                <input type="text" class="form-control" placeholder="Village" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Taluka</label>

                                                                <input type="text" class="form-control" placeholder="Taluka" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">District</label>

                                                                <input type="text" class="form-control" placeholder="District" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>

                                                                <input type="text" class="form-control" placeholder="State" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>

                                                                <input type="text" class="form-control" placeholder="Pincode" name="aadhar" id="aadhar" />
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
                                                                <input type="text" class="form-control" placeholder="Shop/Business Name" name="shopName" id="shopName" />
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
                                                                <input type="text" class="form-control" placeholder="Official/Work/Permanent" name="shopName" id="shopName" />
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
                                                                <textarea class="form-control" placeholder="Nature of Business" name="shopName" id="shopName" rows="1"></textarea>
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
                                                                <input type="text" class="form-control" placeholder="Premise Name" name="shopPremiseName" id="shopPremiseName" />

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

                                                                <input type="text" class="form-control" placeholder="Area" name="area" id="area" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Village</label>

                                                                <input type="text" class="form-control" placeholder="Village" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Taluka</label>

                                                                <input type="text" class="form-control" placeholder="Taluka" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">District</label>

                                                                <input type="text" class="form-control" placeholder="District" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>

                                                                <input type="text" class="form-control" placeholder="State" name="aadhar" id="aadhar" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>

                                                                <input type="text" class="form-control" placeholder="Pincode" name="aadhar" id="aadhar" />
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
                                                                <label class="control-label">Photo of Prop</label>
                                                                <input class="form-control" id="propertypic" name="propertypic" type="file" onchange="loadFile(event, 'propertypicp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="propertypicp" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card</label>
                                                                <input class="form-control" id="pand" name="pand" type="file" onchange="loadFile(event, 'pandpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pandpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Address Proof(Electricity bill)</label>
                                                                <input class="form-control" id="addressproof" name="addressproof" type="file" onchange="loadFile(event, 'addressproofpre')" />
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

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Passport Size Photo</label>
                                                                <input class="form-control" id="passportpic" name="passportpic" type="file" onchange="loadFile(event, 'passportpicpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="passportpicpre" width="200px" height="200px" />
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

                                                    <!--private limited-->
                                                    <div class="row" id="pvtltd">
                                                        <!--content start-->
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">pan card of company</label>
                                                                <input class="form-control" id="cpandoc" name="cpandoc" type="file" onchange="loadFile(event, 'cpandocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="cpandocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Electricity Bill of Business</label>
                                                                <input class="form-control" id="bizelectridoc" name="bizelectridoc" type="file" onchange="loadFile(event, 'bizelectridocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bizelectridocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">cancel check/passbook</label>
                                                                <input class="form-control" id="passbookdoc" name="passbookdoc" type="file" onchange="loadFile(event, 'passbookdocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="passbookdocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy Board Resolutionok</label>
                                                                <input class="form-control" id="boarddoc" name="boarddoc" type="file" onchange="loadFile(event, 'boarddocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="boarddocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="rentPrivate" id="" value="1" />Yes <input type="radio" name="rentPrivate" id="" value="0" />No
                                                            <div id="rentAgree2">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent aggrement</label>
                                                                    <input class="form-control" id="rentagreemnt" name="rentagreemnt" type="file" onchange="loadFile(event, 'rentagreemntpre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="rentagreemntpre" width="200px" height="200px" />
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
                                                                <input class="form-control" id="pplpandoc" name="pplpandoc" type="file" onchange="loadFile(event, 'pplpandocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pplpandocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy of Reg Cert</label>
                                                                <input class="form-control" id="regcertdoc" name="regcertdoc" type="file" onchange="loadFile(event, 'regcertdocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="regcertdocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Electricity Bill</label>
                                                                <input class="form-control" id="electbilldoc" name="electbilldoc" type="file" onchange="loadFile(event, 'electbilldocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="electbilldocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">PPL Agreement</label>
                                                                <input class="form-control" id="pplagreedoc" name="pplagreedoc" type="file" onchange="loadFile(event, 'pplagreedocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pplagreedocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Cancel Check/Bank stmt</label>
                                                                <input class="form-control" id="cancelcheckdoc" name="cancelcheckdoc" type="file" onchange="loadFile(event, 'cancelcheckdocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="cancelcheckdocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Board resolution</label>
                                                                <input class="form-control" id="resolvdoc" name="resolvdoc" type="file" onchange="loadFile(event, 'resolvdocp')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="resolvdocp" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Do you have rent aggrement?</h4>
                                                            <input type="radio" name="rentPPL" id="" value="1" />Yes <input type="radio" name="rentPPL" id="" value="0" />No
                                                            <div id="rentAgree3">
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label">Rent Agreement</label>
                                                                    <input class="form-control" id="rentdocu" name="rentdocu" type="file" onchange="loadFile(event, 'rentdocupre')" />
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="output"></label>
                                                                    <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="rentdocupre" width="200px" height="200px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--partnerhip-->
                                                    <div class="row" id="partnerhip">
                                                        <!--content start-->
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Pan Card of Partnership Firm</label>
                                                                <input class="form-control" id="psfirmpandoc" name="psfirmpandoc" type="file" onchange="loadFile(event, 'psfirmpandocpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="psfirmpandocpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Copy of Partnership Deed</label>
                                                                <input class="form-control" id="psdeeddoc" name="psdeeddoc" type="file" onchange="loadFile(event, 'psdeeddocpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="psdeeddocpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Address proof(electricity bill)</label>
                                                                <input class="form-control" id="addproofdoc" name="addproofdoc" type="file" onchange="loadFile(event, 'addproofdocpre')" />
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="output"></label>
                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="addproofdocpre" width="200px" height="200px" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label">Cancel Check/bank stmt</label>
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
