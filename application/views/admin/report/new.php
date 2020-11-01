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
            <h3><i class="fa fa-home"></i> Forms Wizard</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">forms wizard</li>
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
                <form action="" method="post" id="reportForm">
                    <section class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Report Form</h3>
                        </div>

                        <div class="panel">
                            <div class="panel-body">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#home">Report Details</a></li>
                                    <li><a data-toggle="pill" href="#menu1">Documents</a></li>
                                    <!-- <li><a data-toggle="pill" href="#menu2">Menu 2</a></li> -->
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Project Cost</label>
                                                                <input type="text" class="form-control" placeholder="" name="cost" id="cost" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Bank Loan</label>
                                                                <input type="text" class="form-control" placeholder="" name="loanamt" id="loanamt" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Own Capital</label>
                                                                <input type="text" class="form-control" placeholder="" name="owncapital" id="owncapital" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Loan Period(Year)</label>
                                                                <select name="noofyear" id="noofyear" class="form-control">
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Repayment Schedule</label>
                                                                <select class="form-control" id="repayment_shedule" name="repayment_shedule">
                                                                    <option value="1">Yes</option>
                                                                    <option value="2" selected>No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3" id="otherFieldGroupDiv">
                                                            <div class="form-group">
                                                                <label class="form-label">Repayment Attachment</label>
                                                                <input type="file" class="form-control" placeholder="" name="repayment_attachment" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Last Year Balance-sheet</label>
                                                                <select class="form-control" id="lastyear_bal_sheet" name="lastyear_bal_sheet">
                                                                    <option value="1">Yes</option>
                                                                    <option value="2" selected>No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3" id="otherFieldGroupDiv2">
                                                            <div class="form-group">
                                                                <label class="form-label">Balance-sheet Attachment</label>
                                                                <input type="file" class="form-control" name="Balance-sheet_Attachment" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Mobile</label>
                                                                <input type="text" class="form-control" placeholder="primary mobile no." name="mobile" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Email</label>
                                                                <input type="email" class="form-control" placeholder="example@gmail.com" name="email" />
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
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="form-label"> PAN Card </label>
                                                                <input type="file" class="form-control" name="Pan" id="Pan" placeholder="" name="" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Aadhar card </label>
                                                                <input type="file" class="form-control" name="Passbook" id="Passbook" placeholder="" name="" />
                                                            </div>
                                                        </div>

                                                        <!-- 1) Individual's or Frim's Company's copy of PAN Card. 2 ) Individual's voter ID or Aadhar card or Passport copy. 3) Individual's or company's or firm's cancle cheque copy of current bank account . 4) Copy of Rent Agreement or Electricity bill copy of the premise. -->
                                                    </div>
                                                </div>

                                                <div>
                                                    <hr />
                                                    <div class="tab-sub-head">
                                                        <div class="text-left">
                                                            <button class="btn btn-primary" type="button" name="Reset" value="Reset" id="resetForm1">Reset</button>
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
