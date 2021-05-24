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
            <!-- <h3><i class="glyphicon glyphicon-piggy-bank"></i> Udyog Aadhar</h3> -->
            <h3><img src="<?php echo base_url('/admin_assets/img/udyog_icon.png'); ?>" style="height:35px;width:35px" /> Partnership Deed </h3>

            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active">Partnership Deed</li>
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
                                <a href="<?php echo base_url('partnershipDeed'); ?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Partnership Deed Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="partnershipdeed-form" method="post">
                            <section style="background: #efefe9;">
                                <div class="container">
                                    <div class="row">
                                        <div class="ml-0">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class="board-inner">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <!-- <div class="liner"></div> -->


                                                    <li class="active">
                                                        <a href="#partnerdat" data-toggle="tab" title="Partner Details">
                                                            <span class="round-tabs two">
                                                                <i class="fa fa-address-card"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#shopdetails" data-toggle="tab" title="Shop Address">
                                                            <span class="round-tabs three">
                                                                <!--<i class="fa fa-address-card"></i>-->
                                                                <!-- <i class="fa fa-store"></i> -->
                                                                <img src="<?php echo base_url('/admin_assets/img/shop_icon.png'); ?>" style="height:35px;width:35px"/>

                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#investment" data-toggle="tab" title="Parthership capital details">
                                                            <span class="round-tabs five">
                                                                <i class="fa fa-handshake"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li style="display: none;">
                                                        <a href="#documenttab" data-toggle="tab" title="Documents">
                                                            <span class="round-tabs six">
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

                                                <div class="tab-pane fade in active" id="partnerdat">
                                                    <h3 class="head text-center">Partner Details</h3>
                                                   

                                                    <!--//partener table list-->
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="partnerTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Partener/Director</th>
                                                                        <th scope="col">Aadharcard No.</th>
                                                                        <th scope="col">Name as per pancard</th>
                                                                        <th scope="col">Pancard No.</th>
                                                                        <th scope="col">Emailid</th>
                                                                        <th scope="col">Mobile No.</th>
                                                                        <th scope="col">Electricity Bill Attach</th>
                                                                        <th scope="col">Aadhar Attach</th>
                                                                        <th scope="col">Pancard Attach</th>
                                                                        <!--<th scope="col">Action</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="partnerData">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--</div>-->

                                                </div>
                                                <div class="tab-pane fade" id="shopdetails">
                                                    <h3 class="head text-center">Shop Address</h3>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Shop/Business Name</label>
                                                                <input type="text" class="form-control" placeholder="Enter Shop/Business name" name="shop_name" id="shop_name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Addres as per Electricity Bill</label>
                                                                <input type="text" class="form-control" placeholder="Address" name="shop_address" id="shop_address" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Start Up Date </label>

                                                                <input type="date" class="form-control" name="start_up_date" id="start_up_date" />
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Nature of Bussiness </label>
                                                                <textarea class="form-control" name="natureofbuss" id="natureofbuss" ></textarea>

                                                                    <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Massage Box(Minimun 500 Words) </label>
                                                                <textarea class="form-control" name="msg" id="msg" ></textarea>

                                                                    <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                            </div>
                                                        </div>`

                                                        <!-----     <div class="col-sm-12">
                                                                       <div class="row bg-info">
                                                                           <h4>Partner Details</h4>
                                                                       </div>
                                                                            
                                                                            <div class="col-sm-10">
                                                                           <div class="col-sm-4">
                                                                               <div class="form-group">
                                                                                   <label class="control-label"><span class="error">*</span> Partner Name</label>
                                                                                   <input type="text" class="form-control" placeholder="enter Partner name" name="partnerName" id="partnerName"/>
                                                                               </div>
                                                                           </div>
               
                                                                           <div class="col-sm-4">
                                                                               <div class="form-group">
                                                                                   <label class="control-label"><span class="error">*</span>Aadharcard Number</label>
               
                                                                                   <input type="text" class="form-control" placeholder="" name="pAadhar" id="pAadhar"/>
                                                                               </div>
                                                                           </div>
                                                                           <div class="col-sm-4">
                                                                               <div class="form-group">
                                                                                   <label class="control-label"><span class="error">*</span>Pancard Number</label>
               
                                                                                   <input type="text" class="form-control" placeholder="" name="pPancard" id="pPancard"/>
                                                                               </div>
                                                                           </div>
                                                                           <div class="col-sm-6">
                                                                               <div class="form-group">
                                                                                   <label class="control-label"><span class="error">*</span>Email Id</label>
               
                                                                                   <input type="email" class="form-control" placeholder="" name="pEmail" id="pEmail"/>
                                                                               </div>
                                                                           </div>
                                                                           <div class="col-sm-6">
                                                                               <div class="form-group">
                                                                                   <label class="control-label"><span class="error">*</span>Mobile Number</label>
               
                                                                                   <input type="text" class="form-control" placeholder="" name="pMobile" id="pMobile"/>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                            
                                                                            <div class="col-sm-2">
                                                                           <div class="row mt-5" style="margin-top: 25px;">
                                                                               <div class="col-sm-12">
                                                                                   <div class="form-group">
                                                                                       <label class="control-label"></label>
                                                                                       <button type="button" class="btn btn-info" id="addPartener">Add Parteners</button>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                            
                                                                            <div class="row">
                                                                           <table class="table table-bordered" id="partnerTable">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th scope="col">Partener Name</th>
                                                                                       <th scope="col">Aadharcard No.</th>
                                                                                       <th scope="col">Pancard No.</th>
                                                                                       <th scope="col">Mobile No.</th>
                                                                                       <th scope="col">Email Id</th>
                                                                                       <th scope="col">Action</th>
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
                                                        <!--         </tbody>
                                                             </table>
                                                         </div>
                                                              
                                                          </div>-->

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="investment">
                                                    <h3 class="head text-center">Parthership Capital Details</h3>
                                                   
                                                    <!--//partener table list-->
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="investmentTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Partener/Director</th>
                                                                        <th scope="col">Partener Investment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="investmentData">

                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td colspan="3" align="center">Total Investment:</td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--</div>-->


                                                </div>


                                                <div class="tab-pane fade" id="documenttab">
                                                    <div class="text-center">
                                                        <i class="img-intro icon-checkmark-circle"></i>
                                                    </div>


                                                    <!--extra attachment-->
                                                    <div class="row card">
                                                        <div>
                                                            <table class="table table-image">
                                                                <tbody>

                                                                    <tr class="saldocClass">
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label class="control-label"> Rent Agreement</label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="rent_agree" id="yes" value="Y"/>
                                                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                    <input class="form-check-input" type="radio" name="rent_agree" id="no" value="Z"/>
                                                                                    <label class="form-check-label" for="">No</label>
                                                                                    <input class="form-control" id="inv_proof" name="rentaggrement" type="file" onchange="loadFile(event, 'invpre')" style="display:none;"/>
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
                                                                                <label class="control-label"> Shop E-Bill</label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="shop_ebill" id="yes" value="a" />
                                                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                    <input class="form-check-input" type="radio" name="shop_ebill" id="no" value="b" />
                                                                                    <label class="form-check-label" for="">No</label>
                                                                                </div>
                                                                                <input type="file" class="form-control" placeholder="" name="shopbill" id="buss_loan_cert" onchange="loadFile(event, 'bcertpre')" style="display:none;"/>
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
                                                                                <label class="control-label"> Other Document 1</label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="other_doc1" id="yes" value="w"/>
                                                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                    <input class="form-check-input" type="radio" name="other_doc1" id="no" value="x"/>
                                                                                    <label class="form-check-label" for="">No</label>
                                                                                    <input class="form-control" id="other_doc1" name="other_1" type="file" onchange="loadFile(event, 'doc1pre')" style="display:none;"/>
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
                                                                                <label class="control-label"> Other Document 2</label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="other_doc2" id="yes" value="c" />
                                                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                                    <input class="form-check-input" type="radio" name="other_doc2" id="no" value="d" />
                                                                                    <label class="form-check-label" for="">No</label>
                                                                                </div>
                                                                                <input type="file" class="form-control" placeholder="" name="other_2" id="other_doc2" onchange="loadFile(event, 'doc2pre')" style="display:none;"/>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="bcertpre" width="200px" height="200px" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>


                                                    <p class="text-center">
                                                        <button class="btn btn-success btn-outline-rounded green" type="submit"> Submit <span style="margin-left: 10px;" class="glyphicon glyphicon-send"></span></button>
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