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
                                <!--<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>-->
                                <a href="<?php echo base_url('companyregistration');?>" class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></a>
                            </div>
                            <h3 class="panel-title">Company Registration Information</h3>
                        </div>
                        <!--Block Styled Form -->
                        <!--===================================================-->
                        <form id="company-registration-form" method="post">
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
                                                                <select class="form-control selectpicker" id="bussinessType" name="ctype">
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
                                                                <label class="control-label"> Company Name 1 </label>
                                                                <input type="text" class="form-control" placeholder="Company Name 1" name="comp_name1" id="comp_name1" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Company Name 2 </label>
                                                                <input type="text" class="form-control" placeholder="Company Name 2" name="comp_name2" id="comp_name2" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Company Name 3 </label>
                                                                <input type="text" class="form-control" placeholder="Company Name 3" name="comp_name3" id="comp_name3" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Company Name 4 </label>
                                                                <input type="text" class="form-control" placeholder="Company Name 4" name="comp_name4" id="comp_name4" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> State of the Registered Office </label>
                                                                <input type="text" class="form-control" placeholder="State of the Registered Office" name="reg_office" id="reg_office" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">  Objects specified</label>
                                                                <input type="text" class="form-control" placeholder="Objects specified" name="objects_specified" id="objects_specified" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Authorized capital </label>
                                                                <input type="text" class="form-control" placeholder="Authorized capital" name="authorized_capital" id="authorized_capital" />
                                                            </div>
                                                        </div>                                                                
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label"> Subscribed capital </label>
                                                                <input type="text" class="form-control" placeholder="Subscribed capital" name="subscribed_capital" id="subscribed_capital" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Nature of the business</label>
                                                                <textarea class="form-control" name="nature_of_buss" id="nature_of_buss" rows="1"></textarea>
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
                                                            <div id="directorError"></div>
                                                            <h3 class="head text-center">Director details</h3>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error">*</span> Name Of Director</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="dName" id="dName" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error">*</span> Contact Number</label>
                                                                        <input type="text" class="form-control" placeholder="enter your name" name="dContact" id="dContact" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <input type="email" class="form-control" placeholder="enter your name" name="dEmail" id="dEmail" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error">*</span> Education Qualification</label>
                                                                        <input type="text" class="form-control" placeholder="Education Qualification" name="dEducation" id="dEducation" />

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error">*</span> Share Holding Percentage </label>
                                                                        <input type="text" class="form-control" placeholder="Share Holding Percentage " name="shareholding" id="shareholding" onkeypress="return (event.charCode != 8 && event.charCode == 0 || (event.charCode >= 48 && event.charCode <= 57))" value="0"/>

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error">*</span>Residential Address as per Address Proof </label>
                                                                        <textarea class="form-control" placeholder="Residential Address" name="residentialaddress" id="residentialaddress"> </textarea>

                                                                        <!--<input type="text" class="form-control" placeholder="" name="distributorid" id="distributorid">-->
                                                                    </div>
                                                                </div>

                                                                <!--//documents-->
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Select Passport size Photo</label>

                                                                        <input class="form-control" id="pPhotodoc" name="pPhotodoc" type="file" onchange="loadFile(event, 'pPhotodocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPhotodocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Select Aadhar card</label>

                                                                        <input class="form-control" id="pAadhardoc" name="pAadhardoc" type="file" onchange="loadFile(event, 'pAadhardocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pAadhardocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Select Pan card</label>

                                                                        <input class="form-control" id="pPandoc" name="pPandoc" type="file" onchange="loadFile(event, 'pPandocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPandocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Upload Sahi</label>

                                                                        <input class="form-control" id="pSahidoc" name="pSahidoc" type="file" onchange="loadFile(event, 'pSahidocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pSahidocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Upload bank statment / Mobile bill</label>

                                                                        <input class="form-control" id="pbankstdoc" name="pbankstdoc" type="file" onchange="loadFile(event, 'pbankstdocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pbankstdocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label"><span class="error"></span>Upload E-Bill</label>

                                                                        <input class="form-control" id="pEbilldoc" name="pEbilldoc" type="file" onchange="loadFile(event, 'pEbilldocpre')" />
                                                                        <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pEbilldocpre" width="20px" height="20px" />
                                                                    </div>
                                                                </div>




                                                                <div class="text-center">
                                                                    <button class="btn btn-success btn-outline-rounded green" id="addPartner" type="button"> Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive">

                                                        <table class="table table-striped table-bordered bg-white" id="directorTable">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Name Of Director</th>
                                                                    <th scope="col">Contact</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Edu. Qualification</th>
                                                                    <th scope="col">Share Holding %</th>
                                                                    <th scope="col">Address</th>
                                                                    <th scope="col">photo</th>
                                                                    <th scope="col">Adharcard</th>
                                                                    <th scope="col">Pancard</th>
                                                                    <th scope="col">Sahi</th>
                                                                    <th scope="col">bank statment / Mobile bill</th>
                                                                    <th scope="col">E-Bill</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="directorList">
                                                                <tr id="rawRow">
                                                                    <td colspan="13" align="center">
                                                                        No Data Found!
                                                                    </td>
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
                                                                                <input type="file" class="form-control" name="bizbill" id="bizbill" onchange="loadFile(event, 'bizbillpre')" />
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
                                                                                <input type="file" class="form-control" name="rent" id="rent" onchange="loadFile(event, 'rentpre')" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <label for="output"></label>
                                                                                <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="rentpre" width="200px" height="200px" />
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
