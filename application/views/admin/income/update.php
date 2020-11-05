<div class="boxed">
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
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> INCOME</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">INCOME</li>
                </ol>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" id="balancesheetForm">
                        <section class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update INCOME</h3>
                            </div>

                            <div class="panel">
                                <div class="panel-body">
                                    <ul class="nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#home"> Details</a></li>
                                        <li><a data-toggle="pill" href="#menu1">Documents</a></li>
                                        <!-- <li><a data-toggle="pill" href="#menu2">Menu 2</a></li> -->
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Select Type </label>
                                                                <select class="form-control" required="" id="typeof" name="typeof">
                                                                    <option value="1" id="typeof" name="typeof">Bussiness</option>
                                                                    <option value="2" id="typeof" name="typeof">Salary </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" id="otherFieldGroupDiv">
                                                        <!-- <div class="header"><strong>BUSINESS INFO</strong></div> -->
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Business Name</label>
                                                                <input type="text" class="form-control" name="bussiname" id="bussiname" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Premise Name</label>
                                                                <input type="text" class="form-control" name="premisename" id="premisename" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label" name="assesmentyear"> Choose Assesment Year </label>
                                                                <select class="form-control" name="assesmentyear" id="assesmentyear" title="change year if needed">
                                                                    <option value="">--Select--</option>
                                                                    <option value="Proprietorship">2020-2021</option>
                                                                    <option value="Partnership Firm">2019-2020 </option>
                                                                    <option value="Partnership Firm">2018-2019 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- <div class="header"><strong>PERSONAL INFO</strong></div> -->

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" class="form-control" name="fname" id="fname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Middle Name</label>
                                                                <input type="text" class="form-control" name="mname" id="mname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" class="form-control" name="lname" id="lname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Gender</label>
                                                                <select class="form-control" name="gender" required="" id="gender">
                                                                    <option value="">--Select--</option>
                                                                    <option name="male" id="male" value="">Male</option>
                                                                    <option name="female" id="female" value="">Female </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Date Of Birth </label>
                                                                <input type="date" name="dob" id="dob" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Number </label>
                                                                <input type="text" name="pan" id="pan" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Fathers Name </label>
                                                                <input type="text" name="father" id="father" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile No. </label>
                                                                <input type="text" name="mobile" id="mobile" class="form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email </label>
                                                                <input type="email" name="email" id="email" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr />

                                                    <div class="row">
                                                        <!-- <div class="header"><strong>BUSINESS CONTACT</strong></div> -->
                                                        <!-- <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile No.</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" class="form-control" />
                                                    </div>
                                                </div> -->
                                                    </div>
                                                    <hr />

                                                    <div class="row">
                                                        <!-- <div class="header"><strong>ADDRESS</strong></div> -->
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Country</label>
                                                                <input type="text" class="form-control" placeholder="" name="country" id="country" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>
                                                                <input type="text" class="form-control" name="ustate" id="ustate" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">City/Town</label>
                                                                <input type="text" class="form-control" name="city" id="city" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Flat/door/block no.</label>
                                                                <input type="text" class="form-control" placeholder="" name="flat" id="flat" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Road/Street</label>
                                                                <input type="text" class="form-control" name="road" id="road" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text" class="form-control" name="pincode" id="pincode" />
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Flat/door/block no.</label>
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>-->
                                                    </div>
                                                    <hr />
                                                </div>
                                            </div>
                                            <div class="tab-sub-head">
                                                <div class="text-left">
                                                <a class="btn btn-primary" href="<?php echo base_url('services/Income/show');?> " role="button">Cancel</a>
                                                    <button class="btn btn-primary" type="submit" name="reg" value="Submit" id="submitForm">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="menu1" class="tab-pane fade">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div>
                                                            <table class="table table-image">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">DOCUMENT</th>
                                                                        <th scope="col">PREVIEW</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="form-label">Bank Statement </label>
                                                                                <input type="file" class="form-control" name="bankstat" id="bankstat" onchange="loadFile(event,'bankstatpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bankstatpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> 16 No. form Part A & Part B</label>
                                                                                <input class="form-control" id="form16" name="form16" type="file" onchange="loadFile(event,'form16pre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Salary Sleep</label>
                                                                                <input type="file" id="salarysleep" name="salarysleep" class="form-control" onchange="loadFile(event,'salarysleeppre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="salarysleeppre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Investment proof</label>
                                                                                <input type="file" class="form-control" name="invest" id="invest" onchange="loadFile(event,'investpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="investpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">LIC Sleep </label>
                                                                                <input type="file" class="form-control" name="lic" id="lic" onchange="loadFile(event,'licpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="licpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Loan certificate </label>
                                                                                <input type="file" class="form-control" name="loancert" id="loancert" onchange="loadFile(event,'loancertpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="loancertpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                <//!-- <div class="header"><strong>RESIDENTIAL ADDRESS</strong></div> --//>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Bank Statement(if yes show attachment)</label>
                                                        <select class="form-control" name="type_of_organisation" required="">
                                                            <!//-- <option value="">--Select--</option> --//>
                                                            <option value="Proprietorship">Yes</option>
                                                            <option value="Partnership Firm">No </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Bank Statement Attachment</label>
                                                        <input type="file" class="form-control" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">16 no. form Part A & Part B(if yes show attachment)</label>
                                                        <select class="form-control" name="type_of_organisation" required="">
                                                            <!//-- <option value="">--Select--</option> --//>
                                                            <option value="Proprietorship">Yes</option>
                                                            <option value="Partnership Firm">No </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">16 No. form Part A & Part B Attachment</label>
                                                        <input type="file" class="form-control" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Salary Sleep(if yes show attachment)</label>
                                                        <select class="form-control" name="type_of_organisation" required="">
                                                            <//!-- <option value="">--Select--</option> --//>
                                                            <option value="Proprietorship">Yes</option>
                                                            <option value="Partnership Firm">No </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label"> Salary Sleep Attachment</label>
                                                        <input type="file" class="form-control" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Investment proof(if yes show attachment)</label>
                                                        <select class="form-control" name="type_of_organisation" required="">
                                                            </!-- <option value="">--Select--</option> --/>
                                                            <option value="Proprietorship">Yes</option>
                                                            <option value="Partnership Firm">No </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Investment proof Attachment</label>
                                                        <input type="file" class="form-control" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label"> LIC Sleep</label>
                                                        <input type="file" name= "lic" class="form-control" />
                                                    </div>
                                                </div>
                                                

                                                

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="control-label"> Loan certificate </label>
                                                        <input type="file" name= "form_a" class="form-control" />
                                                    </div>
                                                </div>
                                            </div> -->
                                                </div>

                                                <div>
                                                    <hr />
                                                    <div class="tab-sub-head">
                                                        <div class="text-left">
                                                            <a class="btn btn-primary" href="<?php echo base_url('services/UdyogAadhar/show');?> " role="button">Cancel</a>
                                                            <button class="btn btn-primary" type="submit" name="reg" value="Submit" id="submitForm">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!--===================================================-->
                                <!--End Block Styled Form -->
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
