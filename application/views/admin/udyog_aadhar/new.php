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
            <h3><i class="fa fa-home"></i> Form Layout</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">form layout</li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="eq-height">
                    <div class="col-sm-6 eq-box-sm">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Add New Entry</h3>
                            </div>
                            <!--Block Styled Form -->
                            <!--===================================================-->
                            <form id="caCertificateForm" method="post">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Entrepreneur Details</strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Aadhar Number</label>
                                                <input type="text" class="form-control" placeholder="" name="nameasperadhar" />
                                                <input type="hidden" class="form-control" name="" value="1" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Name Of Entrepreneur</label>
                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Gender</label>
                                                <select class="form-control" name="type_of_organisation" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="Proprietorship">Male</option>
                                                    <option value="Partnership Firm">Female </option>
                                                    <option value="Public Limited">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select class="form-control" name="type_of_organisation" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="Proprietorship">ST</option>
                                                    <option value="Partnership Firm">SC </option>
                                                    <option value="Private Limited">OBC</option>
                                                    <option value="Public Limited">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Mobile No.</label>
                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Enteprise Details</strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Name Of Enteprise</label>
                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Type Of Organization</label>
                                                <select class="form-control" name="type_of_organisation" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="Proprietorship">Proprietory</option>
                                                    <option value="Partnership Firm">Partnership </option>
                                                    <option value="Private Limited">Private Limited Company</option>
                                                    <option value="Public Limited">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Village/Town </label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Road</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Shop no.</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Post Office</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Pincode</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">District</label>
                                            <input type="text" class="form-control" placeholder="" name="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Status of Enterprise </strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <label class="control-label">Registration Date</label>

                                                <input type="date" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Bank Details </strong></div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <!-- <label class="control-label"> </label> -->
                                                <label class="control-label">Bank Name</label>

                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">IFC Code</label>

                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Bank Account Number</label>

                                                <input type="text" class="form-control" placeholder="" name="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Manufaturing/ Services</strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label"> </label>
                                                <input type="text" class="form-control" name="Manufaturing" id="Manufaturing" placeholder="" name="" />
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Number of Employees <span class="text-danger">*</span></strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Men </label>
                                                <input type="text" class="form-control" name="Men1" id="Men1" placeholder="2" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Women </label>
                                                <input type="text" class="form-control" name="Women1" id="Women1" placeholder="1" name="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="panel-title bg-info"><strong>Documents <span class="text-danger">*</strong></div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Aadhar Card </label>
                                                <input type="file" class="form-control" name="Aadhar" id="Aadhar" placeholder="" name="" />
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Pan Card </label>
                                                <input type="file" class="form-control" name="Pan" id="Pan" placeholder="" name="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Electronics Bill</label>
                                                <input type="file" class="form-control" name="Electronics" id="Electronics" placeholder="" name="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Check / Bank Passbook </label>
                                                <input type="file" class="form-control" name="Passbook" id="Passbook" placeholder="" name="" />
                                            </div>
                                        </div>
                                        
                                        
                                        <!-- 1) Pan Card, 2) Aadhar Card , 3) Shop Address 4) Residence Address 5) Electronics Bill 5) Check / Bank Passbook 6) Mobile Number 7) Mail ID -->
                                    </div>
                                </div>

                                <div class="panel-footer text-right">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Block Styled Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
