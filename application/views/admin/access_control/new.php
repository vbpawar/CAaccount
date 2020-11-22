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
            <h3><img src="<?php echo base_url('/admin_assets/img/access.png'); ?>" style="height:35px;width:35px"/>Access Control</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">accessControl</li>
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
                                <a href="<?php echo base_url('users/show');?>"  class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Add New Entry</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="accessControlForm" method="post">
                            <section style="background: #efefe9;" class="justify-content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <div class="liner"></div>
                                                    <li class="active">
                                                        <a href="#profile" data-toggle="tab" title="Profile">
                                                            <span class="round-tabs one">
                                                                <i class="glyphicon glyphicon-user"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#services" data-toggle="tab" title="Services">
                                                            <span class="round-tabs two">
                                                                <i class="glyphicon glyphicon-th"></i>
                                                                <img src="<?php echo base_url('/admin_assets/img/access.png'); ?>" style="height:25px;width:25px"/>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#sbm" data-toggle="tab" title="Submit">
                                                            <span class="round-tabs three">
                                                                <i class="glyphicon   glyphicon-ok"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <!-- <li>
                                                                <a href="#settings" data-toggle="tab" title="blah blah">
                                                                    <span class="round-tabs four">
                                                                        <i class="glyphicon glyphicon-comment"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#doner" data-toggle="tab" title="completed">
                                                                    <span class="round-tabs five">
                                                                        <i class="glyphicon glyphicon-ok"></i>
                                                                    </span>
                                                                </a>
                                                            </li> -->
                                                </ul>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="profile">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Role</label>
                                                                <select name="roleid" id="roleid" class="form-control">
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" class="form-control" placeholder="First" name="firstname" id="firstname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Last" name="lastname" id="lastname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Contact</label>
                                                                <input type="text" class="form-control" placeholder="Contact" name="contact" id="contact" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="email" class="form-control" placeholder="Email" id="emailid" name="emailid" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Address</label>
                                                                <textarea class="form-control" placeholder="Address" id="uaddress" name="uaddress"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Contry</label>
                                                                <input type="text" class="form-control" placeholder="Country" id="country" name="country" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">State</label>
                                                                <input type="text" class="form-control" placeholder="State" id="ustate" name="ustate" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" class="form-control" placeholder="City" id="city" name="city" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text" class="form-control" placeholder="Contact" id="pincode" name="pincode" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Password</label>
                                                                <input type="password" class="form-control" placeholder="" name="Password" />
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Confirm Password</label>
                                                                <input type="password" class="form-control" placeholder="confirm your password" name="upassword" id="upassword" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="services">
                                                <div class="row role_access">
                                                 
                                                   
                                                </div>
                                               
                                                </div>
                                                
                                               
                                                <div class="tab-pane fade" id="sbm">
                                                        <p class="text-center">
                                                            <button class="btn btn-success btn-outline-rounded green" type="submit">Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>
                                                        </p>
                                                   
                                                </div>
                                                <!-- <div class="tab-pane fade" id="settings">
                                                            <h3 class="head text-center">Drop comments!</h3>
                                                            <p class="narrow text-center">
                                                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                                            </p>

                                                            <p class="text-center">
                                                                <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="doner">
                                                            <div class="text-center">
                                                                <i class="img-intro icon-checkmark-circle"></i>
                                                            </div>
                                                            <h3 class="head text-center">thanks for staying tuned! <span style="color: #f48260;">♥</span> Bootstrap</h3>
                                                            <p class="narrow text-center">
                                                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                                            </p>
                                                        </div> -->
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
