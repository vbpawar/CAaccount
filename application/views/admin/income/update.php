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
            <!-- <h3><i class="glyphicon glyphicon-piggy-bank"></i> Income</h3> -->
            <h3><img src="<?php echo base_url('/admin_assets/img/icome.png'); ?>" style="height:35px;width:35px"/> Income Tax</h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Income</li>
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
                                <a href="<?php echo base_url();?>income" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="card-title">Income Tax Form</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="incomeForm" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <!-- <div class="liner"></div> -->
                                                    <li class="active">
                                                        <a href="#inctype" data-toggle="tab" title="Income Type">
                                                            <span class="round-tabs one">
                                                                <img src="<?php echo base_url('/admin_assets/img/incometype.png'); ?>" style="height:35px;width:35px"/>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#personal" data-toggle="tab" title="Personal Details">
                                                            <span class="round-tabs two">
                                                                <i class="fa fa-user"></i>
                                                                <!-- <i class="glyphicon glyphicon-profile"></i> -->
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#multic" data-toggle="tab" title="Amounts">
                                                            <span class="round-tabs three">
                                                                <img src="<?php echo base_url('/admin_assets/img/amount.png'); ?>" style="height:35px;width:35px"/>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li id="busProfDetailLi">
                                                        <a href="#addressdet" data-toggle="tab" title="Bussiness Details">
                                                            <span class="round-tabs four">
                                                                <img src="<?php echo base_url('/admin_assets/img/busdetail.png'); ?>" style="height:35px;width:35px"/>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- <li>
                                                        <a href="#bankdet" data-toggle="tab" title="Bank etails">
                                                            <span class="round-tabs three">
                                                                <i class="fa fa-bank"></i>
                                                            </span>
                                                        </a>
                                                    </li> -->

                                                    <li id="dynamicLi">
                                                        <a href="#partenship" data-toggle="tab" title="Parteners Detail">
                                                            <span class="round-tabs five">
                                                                <i class="fa fa-handshake"></i>
                                                            </span>
                                                        </a>
                                                    </li>

<!--                                                    <li>
                                                        <a href="#documenttab" data-toggle="tab" title="Documents">
                                                            <span class="round-tabs six">
                                                                <i class="fa fa-file"></i>
                                                            </span>
                                                        </a>
                                                    </li>-->

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
                                                <div class="tab-pane fade in active" id="inctype">
                                                    <div class="row card">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Income Type</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inctype" id="bussCheck" value="1" />
                                                                    <label class="form-check-label" for="inlineRadio1">Business and Profession</label>
                                                                    <input class="form-check-input" type="radio" name="inctype" id="salCheck" value="2" />
                                                                    <label class="form-check-label" for="">Salaried</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="personal">
                                                    <div class="row card">
                                                        <h3 class="head text-center card-title bg-info">Personal</h3>

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
                                                                <label class="control-label"> Name (as per aadhar card)</label>
                                                                <input type="text" class="form-control" placeholder="Name (as per aadhar card)" name="aadhar_name" id="aadhar_name" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
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
                                                                <label class="control-label">Date of Birth</label>

                                                                <input type="date" class="form-control" name="dob" id="dob" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Assesment Year</label>

                                                                <select class="form-control" name="" id="">
                                                                    <option class="form-control" value="">2019</option>
                                                                    <option class="form-control" value="">2020</option>
                                                                    <option class="form-control" value="">2021</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>

                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="emailid" id="emailid" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Contact No.</label>

                                                                <input type="text" class="form-control" placeholder="" name="contact_number" id="contact_number" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <h3 class="head text-center card-title bg-info">Residential Address</h3>

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

                                                                <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="pincode" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="multic">
                                                    <div class="row card">
                                                        <div class="row">
                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Turn Over Amount</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="turn_over_amt" id="turn_over_amt" disabled="" />

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Loan Amount</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="loan_amt" id="loan_amt" disabled="" />

                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 salCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Income From Other Source</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="income_from_other" id="income_from_other"  disabled=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 salCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> LIC slip</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="lic_slip" id="lic_slip"  disabled=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 salCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Home Loan</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="home_loan" id="home_loan" disabled=""/>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 salCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Investment Amount</label>
                                                                    

                                                                    <input type="text" class="form-control" placeholder="" name="invs_amt" id="invs_amt" disabled=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Sandry Creditors</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="sandry_creditor" id="sandry_creditor" disabled=""/>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Sandry Debitors</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="sandry_debitor" id="sandry_debitor" disabled="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Stock Amount</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="stock_amt" id="stock_amt" disabled=""/>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Cash Balance</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="cash_bal" id="cash_bal" disabled=""/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Bussness Loan</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="buss_loan" id="buss_loan" disabled="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 bussCheckClass">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Personal Loan</label>
                                                                    
                                                                    <input type="text" class="form-control" placeholder="" name="personal_loan" id="personal_loan" disabled=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="addressdet">
                                                    <div class="row card">
                                                        <div class="row">
                                                            <!-- <h3 class="head text-center card-title bg-info">Business</h3> -->

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Business Name</label>
                                                                    <input type="text" class="form-control" placeholder="Business Name" name="bname" id="bname" />

                                                                    <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Nature of Business</label>
                                                                    <textarea class="form-control" name="natureofbuss" id="natureofbuss" ></textarea>

                                                                    <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"> Place of Business</label>
                                                                    <input type="text" class="form-control" placeholder="Place of Business" name="place_of_buss" id="place_of_buss" />

                                                                    <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Bussiness Type</label>

                                                                <select class="form-control" name="buss_type" id="bustype">
                                                                    <option class="form-control" value="1">Propertireship</option>
                                                                    <option class="form-control" value="2">Partner</option>
                                                                    <option class="form-control" value="3">Private Limited</option>
                                                                    <option class="form-control" value="4">Public Private Limited</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="partenship">
                                                    <div class="row">
                                                        <div class="partnerError text-center"></div>
                                                        <div class="col-sm-12">
                                                            

                                                        <!--//partener table list-->
                                                        <div class="row text-center">
                                                            <table class="table table-bordered" id="partnerTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Partener Name</th>
                                                                        <th scope="col">Aadharcard No.</th>
                                                                        <th scope="col">Pancard No.</th>
                                                                        <th scope="col">Mobile No.</th>
                                                                        <th scope="col">Email Id</th>
                                                                        <!--<th scope="col">Action</th>-->
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

                                                <div class="tab-pane fade" id="documenttab">
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>

                                                    <div class="row card">
                                                        <div>
                                                            <table class="table table-image">
                                                                <!-- <thead>
                                                                    <tr>
                                                                        <th scope="col">DOCUMENT</th>
                                                                        <th scope="col">PREVIEW</th>
                                                                    </tr>
                                                                </thead> -->

                                                                <tbody>
                                                                    <!-- <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Form-Type (SHOW ONLY IF SALARY) </label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="" id="yes" value="yes" onchange="loadFile(event,'form16pre')" />
                                                                                    <label class="form-check-label" for="inlineRadio1">form -16-A-part</label>
                                                                                    <input class="form-check-input" type="radio" name="no" id="no" value="no" />
                                                                                    <label class="form-check-label" for="">form -B-part</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr> -->
                                                                    <!--salaried start-->
                                                                    <tr>
                                                                <div class="col-sm-4" id="ssdocType">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Document Type</label>

                                                                        <select class="form-control" name="saldocType" id="saldocType">
                                                                            <option class="form-control" value="0">Select Document</option>
                                                                            <option class="form-control" value="1">Form-16</option>
                                                                            <option class="form-control" value="2">Bank Statement</option>
                                                                            <option class="form-control" value="3">Salary Slip</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                </tr>
                                                                <tr class="form16Class">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">FORM-16- A-part</label>
                                                                            <input type="file" class="form-control" name="form16a" id="form16a" onchange="loadFile(event, 'form16apre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16apre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">FORM-16- B-part</label>
                                                                            <input type="file" class="form-control" name="form16b" id="form16b" onchange="loadFile(event, 'form16bpre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16bpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="salBankClass">
                                                                   <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Bank Statement </label>
                                                                            <input type="file" class="form-control" name="salBankStatement" id="salBankStatement" onchange="loadFile(event, 'salBankStatementpre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="salBankStatementpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td> 
                                                                </tr>
                                                                <tr class="salSlarySlipClass">
                                                                   <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Salary Slip </label>
                                                                            <input type="file" class="form-control" name="salSalarySlip" id="salSalarySlip" onchange="loadFile(event, 'salSalarySlippre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="salSalarySlippre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td> 
                                                                </tr>
                                                                <tr class="saldocClass">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Investment Proof</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="invet_proof" id="yes" value="Y"/>
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="invet_proof" id="no" value="Z"/>
                                                                                <label class="form-check-label" for="">No</label>
                                                                                <input class="form-control" id="inv_proof" name="inv_proof" type="file" onchange="loadFile(event, 'invpre')" style="display:none;"/>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="invpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Bussiness Loan Certficate</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="bloancert" id="yes" value="a" />
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="bloancert" id="no" value="b" />
                                                                                <label class="form-check-label" for="">No</label>
                                                                            </div>
                                                                            <input type="file" class="form-control" placeholder="" name="buss_loan_cert" id="buss_loan_cert" onchange="loadFile(event, 'bcertpre')" style="display:none;"/>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bcertpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="saldocClass">


                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> LIC reciept </label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="lcert" id="yes" value="c" />
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="lcert" id="no" value="d" />
                                                                                <label class="form-check-label" for="">No</label>
                                                                            </div>
                                                                            <input type="file" class="form-control" placeholder="" name="lic_cert" id="lic_cert" onchange="loadFile(event, 'licpre')" style="display:none;" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="licpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Income from other source</label>
                                                                            
                                                                            <input type="file" class="form-control" placeholder="" name="inc_other" id="inc_other" onchange="loadFile(event, 'incopre')" style="display:none;" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="incopre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--salaried end-->
                                                                <!--bussiness and prof-->
                                                                <tr class="bussdocClass">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Aadhar Card </label>
                                                                            <input type="file" class="form-control" name="adhar" id="adhar" onchange="loadFile(event, 'adharpre')" />
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
                                                                <tr class="bussdocClass">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Bank Statement/Passbook</label>
                                                                            <input class="form-control" id="bankstt" name="bankstt" type="file" onchange="loadFile(event, 'stmpre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="stmpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Home Loan Certificate</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="h_loan" id="yes" value="g" />
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="h_loan" id="no" value="h" />
                                                                                <label class="form-check-label" for="">No</label>
                                                                            </div>
                                                                            <input type="file" class="form-control" placeholder="" name="home_cert" id="home_cert" onchange="loadFile(event, 'homel')" style="display:none;" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="homel" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bussdocClass">

                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Personal Loan</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="" id="yes" value="i" />
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="no" id="no" value="j" />
                                                                                <label class="form-check-label" for="">No</label>
                                                                            </div>
                                                                            <input type="file" class="form-control" placeholder="" name="pe_loan" id="pe_loan" onchange="loadFile(event, 'prespre')" style="display:none;" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="prespre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="control-label"> Last Year Balance Sheet Copy</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="bsheet" id="yes" value="k" />
                                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                <input class="form-check-input" type="radio" name="bsheet" id="no" value="l" />
                                                                                <label class="form-check-label" for="">No</label>
                                                                            </div>
                                                                            <input type="file" class="form-control" placeholder="" name="bal_sheet" id="bal_sheet" onchange="loadFile(event, 'lastblpre')" style="display:none;" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="lastblpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bussdocClass">
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Other Documents</label>
                                                                            <input type="file" class="form-control" name="otherd" id="otherd" onchange="loadFile(event, 'otherdpre')" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <label for="output"></label>
                                                                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="otherdpre" width="200px" height="200px" />
                                                                        </div>
                                                                    </td>

                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <p class="text-center">
                                                        <!--<button class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>-->
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