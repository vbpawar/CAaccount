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
            <h3><i class="fa fa-home"></i> Udyog Aadhar</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Udyog Aadhar</li>
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
                    <section class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Udyog Aadhar</h3>
                        </div>
                        <form action="" id="udyogAadharForm" method="post" enctype="">
                            <div class="panel">
                                <div class="panel-body">
                                    <ul class="nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#home">Form Details</a></li>
                                        <li><a data-toggle="pill" href="#menu1">Documents</a></li>
                                        <!-- <li><a data-toggle="pill" href="#menu2">Menu 2</a></li> -->
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="panel-title bg-info"><strong>Entrepreneur Details</strong></div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Aadhar Number</label>
                                                                <input type="text" class="form-control" placeholder="" name="adharnumber" id="adharnumber" />
                                                                <input type="hidden" class="form-control" name="userid" value="1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Name Of Entrepreneur</label>
                                                                <input type="text" class="form-control" placeholder="" name="nameofent" id="nameofent" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Gender</label>
                                                                <select class="form-control" name="gender" id="gender" required="">
                                                                    <option value="0">--Select--</option>
                                                                    <option value="1">Male</option>
                                                                    <option value="2">Female </option>
                                                                    <option value="3">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Category</label>
                                                                <select class="form-control" name="category" id="category" required="">
                                                                    <option value="">--Select--</option>
                                                                    <option value="ST">ST</option>
                                                                    <option value="SC">SC </option>
                                                                    <option value="OBC">OBC</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile No.</label>
                                                                <input type="text" class="form-control" placeholder="" name="mobilenumber" id="mobilenumber" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="email" class="form-control" placeholder="" name="emailid" id="emailid" />
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
                                                                <input type="text" class="form-control" placeholder="" name="nameofentr" id="nameofentr" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Type Of Organization</label>
                                                                <select class="form-control" name="typeoforg" id="typeoforg" required="">
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
                                                            <input type="text" class="form-control" placeholder="" name="" id="" />
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
                                                            <input type="text" class="form-control" placeholder="" name="city" id="city" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Post Office</label>
                                                            <input type="text" class="form-control" placeholder="" name="postoffice" id="postoffice" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Pincode</label>
                                                            <input type="text" class="form-control" placeholder="" name="pincode" id="pincode" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <input type="text" class="form-control" placeholder="" name="ustate" id="ustate" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">District</label>
                                                            <input type="text" class="form-control" placeholder="" name="district" id="district" />
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

                                                                <input type="date" class="form-control" placeholder="" name="regdate" id="regdate" />
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

                                                                <input type="text" class="form-control" placeholder="" name="bankName" id="bankName" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">IFC Code</label>

                                                                <input type="text" class="form-control" placeholder="" name="ifsc" id="ifsc" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Bank Account Number</label>

                                                                <input type="text" class="form-control" placeholder="" name="bankAc" id="bankAc" />
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
                                                        <div class="panel-title bg-info">
                                                            <strong>Number of Employees <span class="text-danger">*</span></strong>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Men </label>
                                                                <input type="text" class="form-control" name="men" id="men" placeholder="2" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Women </label>
                                                                <input type="text" class="form-control" name="women" id="women" placeholder="1" />
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
                                                                                <label class="form-label">Aadhar card </label>
                                                                                <input type="file" class="form-control" name="adhar" id="adhar" onchange="loadFile(event,'adharpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="./admin_assets/img/doc_pre.png" alt="" id="adharpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Pan card</label>
                                                                                <input class="form-control" name="file" type="file" onchange="loadFile(event,'panpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="" alt="" id="panpre" width="200px" height="200px"  />
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Last Year Balancesheet Copy</label>
                                                                                <input type="file" class="form-control" onchange="loadFile(event,'balpre')"/>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="" alt="" id="balpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Electronics Bill</label>
                                                                                <input type="file" class="form-control" name="Electronics" id="Electronics" onchange="loadFile(event,'billpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="" alt="" id="billpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Check / Bank Passbook </label>
                                                                                <input type="file" class="form-control" name="Passbook" id="Passbook" onchange="loadFile(event,'passpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="" alt="" id="passpre" width="200px" height="200px" />
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
                                                                <label class="form-label">Aadhar card </label>
                                                                <input type="file" class="form-control" name="Passbook" id="Passbook" placeholder="" name="" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Pan card</label>
                                                                <input class="form-control" name="file" type="file" multiple />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Last Year Balancesheet Copy</label>
                                                                <input type="file" class="form-control" placeholder="" />
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
                                                    </div> -->
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
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
