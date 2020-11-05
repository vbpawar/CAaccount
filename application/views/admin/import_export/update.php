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
            <h3><i class="fa fa-home"></i> Import Export</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Import Export</li>
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
                <form action="" method="post" id="importForm">
                    <section class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Import Export</h3>
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
                                                <div class="wizard-container">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <h4 class="text-primary"><i class="fa fa-sign-in"></i> Entity Details</h4>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Type of Organization/Nature of Concern </label>
                                                                    <input type="text" name="typeoforg" id="typeoforg" class="form-control" placeholder="" />
                                                                    <input type="hidden" name="userid" id="userid" class="form-control" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Preferred/Business Activity</label>
                                                                    <input type="text" name="prefactivity" id="prefactivity" class="form-control" placeholder="" />
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Entity PAN Number<span class="text-danger">*</span></label>
                                                                    <input type="text" name="pannumber" id="pannumber" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Entity Name as per pan card </label>
                                                                    <input type="text" name="panname" id="panname" class="form-control" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Date of Incorporation/ DOB as on PAN</label>

                                                                    <input type="date" name="DOBpan" id="DOBpan" class="form-control" placeholder="" />
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Entity Branch Details</label>
                                                                    <input type="text" name="branchdetails" id="branchdetails" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Address </label>
                                                                    <input type="text" name="uaddress" id="uaddress" class="form-control" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Country</label>
                                                                    <input type="text" name="country" id="country" class="form-control" placeholder="" />
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>State</label>
                                                                    <input type="text" name="ustate" id="ustate" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>District </label>
                                                                    <input type="text" name="district" id="district" class="form-control" placeholder="" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>City</label>
                                                                    <input type="text" name="city" id="city" class="form-control" placeholder="" />
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label>Pincode</label>
                                                                    <input type="text" name="pincode" id="pincode" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <h4 class="semibold text-primary"><i class="fa fa-user"></i> Entity Bank Details</h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Bank Name </label>
                                                                <input type="text" name="bankname" id="bankname" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Account Holder Name</label>
                                                                <input type="text" name="acholdername" id="acholdername" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Bank Account No</label>
                                                                <input type="text" name="acno" id="acno" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Branch Name </label>
                                                                <input type="text" name="branchname" id="branchname" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>IFSC Code</label>
                                                                <input type="text" name="ifsccode" id="ifsccode" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>CIN (In case of Limited Company)</label>
                                                                <input type="text" name="cin" id="cin" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>GSTIN No. (If available) </label>
                                                                <input type="text" name="gstno" id="gstno" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <!-- <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Select State: </label>
                                                            <select class="form-control" id="source2">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <h4 class="semibold text-primary"><i class="fa fa-book"></i> Director/Projector/Karta/Managing Trustee Details</h4>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Name as per PAN card </label>
                                                                <input type="text" name="spanname" id="spanname" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>PAN Number<span class="text-danger">*</span></label>
                                                                <input type="text" name="spannumber" id="spannumber" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Date of Birth</label>

                                                                <input type="date" name="dob" id="dob" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Line I </label>
                                                                <input type="text" name="line1" id="line1" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Line II</label>
                                                                <input type="text" name="line2" id="line2" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>City</label>
                                                                <input type="text" name="scity" id="scity" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>State </label>
                                                                <input type="text" name="sstate" id="sstate" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Pin </label>
                                                                <input type="text" name="spin" id="spin" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Mobile<span class="text-danger">*</span></label>
                                                                <input type="text" name="smobile" id="smobile" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Email<span class="text-danger">*</span> </label>
                                                                <input type="text" name="semailid" id="semailid" class="form-control" placeholder="" />
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Aadhar No.</label>
                                                                <input type="text" name="sadharnumber" id="sadharnumber" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                                <label class="form-label">Voter ID/ Aadhar card/ Passport </label>
                                                                                <input type="file" class="form-control" name="adhar" id="adhar" onchange="loadFile(event,'adharpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="adharpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Individual's/  Firm's/ Company's PAN Card </label>
                                                                                <input class="form-control" name="pan" id="pan" type="file" onchange="loadFile(event,'panpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="panpre" width="200px" height="200px"  />
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Individual/ Company's Cancle Cheque of Current Bank Account</label>
                                                                                <input type="file" class="form-control" name="chec" id="chec" onchange="loadFile(event,'balpre')"/>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="balpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Rent Agreement/ Electricity bill copy of the premise</label>
                                                                                <input type="file" class="form-control" name="Electronics" id="Electronics" onchange="loadFile(event,'billpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="billpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                    <!-- <div class="row">
                                       

                                       
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Individual's/  Firm's/ Company's PAN Card </label>
                                                <input type="file" class="form-control" name="Pan" id="Pan" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Voter ID/ Aadhar card/ Passport</label>
                                                <input type="file" class="form-control" name="Electronics" id="Electronics" placeholder="" name="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Individual/ Company's Cancle Cheque of Current Bank Account </label>
                                                <input type="file" class="form-control" name="Passbook" id="Passbook" placeholder="" name="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Rent Agreement/ Electricity bill copy of the premise</label>
                                                <input type="file" class="form-control" name="Electricity" id="Electricity" placeholder="" name="" />
                                            </div>
                                        </div>
                                        
                                        <!-- 1) Individual's or Frim's Company's copy of PAN Card. 2 ) Individual's voter ID or Aadhar card or Passport copy. 3) Individual's or company's or firm's cancle cheque copy of current bank account . 4) Copy of Rent Agreement or Electricity bill copy of the premise. -->
                                    </div> -->
                                </div>
                                                

                                                <div>
                                                    <hr />
                                                    <div class="tab-sub-head">
                                                        <div class="text-left">
                                                            <a class="btn btn-primary" href="<?php echo base_url('services/ImportExport/show');?> " role="button">Cancel</a>
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
