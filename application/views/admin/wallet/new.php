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
            <h3><i class="fas fa-wallet"></i> Wallet</h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Wallet</li>
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
                            <h3 class="panel-title">Wallet Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form action="<?php echo base_url().'register/pay';?>" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <!-- <div class="liner"></div> -->

                                                    <li class="active">
                                                        <a href="#wallet" data-toggle="tab" title="Wallet">
                                                            <span class="round-tabs two">
                                                                <i class="fas fa-wallet"></i>
                                                                <i class="glyphicon glyphicon-cash"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="#transact" data-toggle="tab" title="Transactions">
                                                            <span class="round-tabs three">
                                                                <i class="glyphicon glyphicon-random"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#addmoneys" data-toggle="tab" title="Add Money">
                                                            <span class="round-tabs four">
                                                                <i class="fa fa-inr"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    
                                                    <?php
                                                    $data = $this->session->userdata();
                                                    if($data['Data']['role'] == 1){
                                                    ?>
                                                        <li>
                                                        <a href="#wallet_users" data-toggle="tab" title="Users Wallet">
                                                            <span class="round-tabs five">
                                                                <i class="glyphicon glyphicon-random"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#transafermny" data-toggle="tab" title="Transafer Money">
                                                            <span class="round-tabs one">
                                                                <i class="glyphicon glyphicon-share"></i>
                                                                <i class="fas fa-comment-dollar"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <?php } ?>
                                                  
                                                    

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
                                                <div class="tab-pane fade in active" id="wallet">
                                                    <h3 class="head text-center"></h3>

                                                    <p class="text-center">Wallet Amount:
                                                        <a href="#" class="btn btn-info btn-outline-rounded" style="color: blue;" id="wallet_amt"><span style="margin-left: 10px;" class="fa fa-money"></span></a>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="transafermny">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Name</label>
                                                                <input type="disabled" class="form-control" placeholder="Wasim Shaikh" name="retailorid" id="retailorid" />

                                                                <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Account ID</label>

                                                                <input type="disabled" class="form-control" placeholder="0011110" name="retailorid" id="retailorid" />
                                                            </div>
                                                        </div>
                                                        <a href="" class="btn btn-success btn-outline-rounded green">Send Money<span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="transact">
                                                    <div class="container rounded mt-5 bg-white p-md-5">
                                                        <h3 class="head text-center">Transaction history</h3>

                                                        <!-- <div class="h2 font-weight-bold">Meetings</div> -->
                                                        <div class="table-responsive">
                                                            <table class="table" id="service">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Activity</th>
                                                                    <th scope="col">Payment Id</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Message</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="serviceList">
                                                                  
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="addmoneys">
                                                    <div class="row">
                                                        <div class="col-sm-4"></div>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Amount</label>

                                                                <input type="text" class="form-control" placeholder="200" name="amount" id="amount" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4"></div>
                                                    </div>
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>
                                                    <h3 class="head text-center">thanks for staying tuned! <span style="color: #f48260;">♥</span></h3>

                                                    <p class="text-center">
                                                        <button type="submit" class="btn btn-info btn-outline-rounded green">
                                                            Add Money to Wallet <span style="margin-left: 10px;"><img src="<?php echo base_url('/admin_assets/img/addmoney.png'); ?>" style="height: 25px; width: 25px;" /></span>
                                                        </button>
                                                    </p>
                                                    <div id="ak"></div>
                                                </div>
                                                <div class="tab-pane fade" id="wallet_users">
                                                    <div class="container rounded mt-5 bg-white p-md-5">
                                                        <h3 class="head text-center">Wallet Balances</h3>

                                                        <!-- <div class="h2 font-weight-bold">Meetings</div> -->
                                                        <div class="table-responsive">
                                                            <table class="table" id="userlist">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">User</th>
                                                                    <th scope="col">Contact Number</th>
                                                                    <th scope="col">Role</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">#</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="userlistdata">
                                                                   
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
        <div id="loader"></div>
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="updatebalance" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Amount Deduct from wallet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--card start-->
                    <div class="card">
                        <div class="form-group">
                            <label class="control-label">Amount Deduct</label>
                            <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" />
                        </div>
                        <div class="form-group">
                            <label class="control-label"><span class="error">*</span>Remark</label>
                            <textarea class="form-control" id="remark" ></textarea>
                        </div>
                    </div>
                    <!--card end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
