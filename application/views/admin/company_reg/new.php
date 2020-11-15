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
            <h3><i class="fa fa-briefcase"></i> <span><i class="far fa-registered"></i></span> Company Registration</h3>
            <!-- <h3><img src="<?php echo base_url('/admin_assets/img/withdraw_512x512.png'); ?>" /> Company Registration</h3> -->

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Company Registration</li>
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
                            <h3 class="panel-title">Company Registration Information</h3>
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
                                                        <a href="#companytab" data-toggle="tab" title="Company Details">
                                                            <span class="round-tabs one">
                                                                <i class="fas fa-briefcase"></i>
                                                                <!-- <i class="glyphicon glyphicon-profile"></i> -->
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#directtab" data-toggle="tab" title="Directors Details">
                                                            <span class="round-tabs two">
                                                                <!-- <i class="fa fa-address-card"></i> -->
                                                                <img src="<?php echo base_url('/admin_assets/img/directr.png'); ?>" style="height:35px;width:35px"/>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    

                                                    <li>
                                                        <a href="#documenttab" data-toggle="tab" title="Documents">
                                                            <span class="round-tabs three">
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
                                                <div class="tab-pane fade in active" id="companytab">
                                                <h3 class="head text-center">Company details</h3>
                                                            <div class="row">
                                                            <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Registration Type</label>
                                                                <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                                                                <select class="form-control selectpicker" id="bussinessType">
                                                                    <option value="1">Private Limited Company</option>
                                                                    <option value="2">Limited Liability partnership </option>
                                                                    <option value="3">One Person Company </option>
                                                                    <option value="5">Producer Company </option>
                                                                    <option value="6">Nidhi Company </option>
                                                                    <option value="7">Holding And Subsidiary Companies</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Company Name</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">  Registered Office of the State</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> The Objects to be pursued by the company</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">  objects specified</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Authorized capital and Subscribed capital</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nature of the business</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    

                                                    <!-- <p class="text-center">
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Amount 5000<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </p> -->
                                                </div>
                                                <div class="tab-pane fade" id="directtab">
                                                <div class="panel">
                                                        <div class="panel-body">
                                                            <h3 class="head text-center">Director details</h3>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Name Of Director</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Contact Number</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <input type="email" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Education</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Share Holding</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="retailorid" id="retailorid" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Residential Address</label>
                                                                        <textarea class="form-control" placeholder="enter your name" name="retailorid" id="retailorid"> </textarea>

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a href="" class="btn btn-success btn-outline-rounded green" type="submit"> Add <span style="" class=""></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                    
                                                        <table class="table table-striped table-dark">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name Of Director</th>
                                                                    <th scope="col">Contact</th>
                                                                    <th scope="col">Share Holding</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>8888888888</td>
                                                                    <td>50%</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>8888888888</td>
                                                                    <td>25%</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>8888888888</td>
                                                                    <td>25%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  
                                                   
                                                </div>
                                               
                                                <div class="tab-pane fade" id="documenttab">
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
                                                                                <label class="form-label">Business Place Electricity Bill </label>
                                                                                <input type="file" class="form-control" name="bizbill" id="bizbill" onchange="loadFile(event,'bizbillpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bizbillpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="form-label">Offices/ Business Place  Rent Agreement </label>
                                                                                <input type="file" class="form-control" name="rent" id="rent" onchange="loadFile(event,'rentpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="rentpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>
                                                                        <div class="form-group">
                                                                                <label class="form-label">Director Passport Size Photo </label>
                                                                                <input type="file" class="form-control" name="pasp" id="pasp" onchange="loadFile(event,'pasppre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pasppre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="form-label">Director Aadhar Card </label>
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
                                                                                <label class="control-label">Director Pan Card</label>
                                                                                <input class="form-control" id="pan" name="pan" type="file" onchange="loadFile(event,'panpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="panpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Director Bank Statement 1 Page / Mobile Phone Bill  </label>
                                                                                <input class="form-control" id="phonbil" name="phonbil" type="file" onchange="loadFile(event,'phonbilpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="phonbilpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

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
