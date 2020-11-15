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
                                                    <li class="">
                                                        <a href="#transafermny" data-toggle="tab" title="Transafer Money">
                                                            <span class="round-tabs one">
                                                                <i class="glyphicon glyphicon-share"></i>
                                                                <i class="fas fa-comment-dollar"></i>
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

                                                    <p class="text-center">
                                                        <a href="" class="btn btn-info btn-outline-rounded" style="color: blue;">Amount 5000<span style="margin-left: 10px;" class="fa fa-money"></span></a>
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
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Time</th>
                                                                        <th scope="col">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="bg-blue">
                                                                        <td class="pt-2">
                                                                            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt="" />
                                                                            <div class="pl-lg-5 pl-md-3 pl-1 name">Emilia Kollette</div>
                                                                        </td>
                                                                        <td class="pt-3 mt-1">25 Sep 2020</td>
                                                                        <td class="pt-3">11:00 AM</td>
                                                                        <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                                                                        <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr class="bg-blue">
                                                                        <td class="pt-2">
                                                                            <img src="https://images.pexels.com/photos/3765114/pexels-photo-3765114.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-circle" alt="" />
                                                                            <div class="pl-lg-5 pl-md-3 pl-1 name">Anny Adams</div>
                                                                        </td>
                                                                        <td class="pt-3">26 Sep 2020</td>
                                                                        <td class="pt-3">11:00 AM</td>
                                                                        <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                                                                        <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr class="bg-blue">
                                                                        <td class="pt-2">
                                                                            <img src="https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt="" />
                                                                            <div class="pl-lg-5 pl-md-3 pl-1 name">Arnold Linn</div>
                                                                        </td>
                                                                        <td class="pt-3">26 Sep 2020</td>
                                                                        <td class="pt-3">02:00 PM</td>
                                                                        <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                                                                        <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr class="bg-blue">
                                                                        <td class="pt-2">
                                                                            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt="" />
                                                                            <div class="pl-lg-5 pl-md-3 pl-1 name">Josh Limosel</div>
                                                                        </td>
                                                                        <td class="pt-3">26 Sep 2020</td>
                                                                        <td class="pt-3">04:00 PM</td>
                                                                        <td class="pt-3"><span class="fa fa-minus pl-3"></span></td>
                                                                        <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                                                                    </tr>
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
