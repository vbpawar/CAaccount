<div id="includeBox">

</div>
<div id="deleteAlert"></div>
<div class="boxed showDiv">
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
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
                                    <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageheader">
            <h3><i class="fas fa-file-signature"></i> Digital Signature </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Digital Signature </li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <!-- Basic Data Tables -->
            <!--===================================================-->
            <div class="panel">

                <div class="panel-body">
                    <?php
                    $data = $this->session->userdata();
                    if ($data['Data']['role'] == 3) {
                        echo '<a class="btn btn-primary" href="' . base_url() . 'digital_sign/cerate" role="button">Add New Entry</a>';
                    }
                    ?>
                <!--<a class="btn btn-primary" href="<?php // echo base_url('digital_sign/cerate'); ?> " role="button">Add New Entry</a>-->
                    <table  class="table table-striped table-bordered" id="service">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Pan No.</th>
                                <th class="min-tablet">Aadhar No.</th>
                                <th class="min-tablet">Mobile No.</th>
                                <th class="min-tablet">Email ID</th>
                                <th class="min-tablet">Created At</th>
                                <th class="min-tablet">Status</th>
                                <th class="min-desktop">Action</th>
                            </tr>
                        </thead>
                        <tbody class="serviceList">



                        </tbody>
                    </table>
                </div>
            </div>
            <!--===================================================-->

        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
</div>
<!-- FOOTER -->
<!--===================================================-->
<footer id="footer">
    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pull-right">
        <ul class="footer-list list-inline">
            <li>
                <p class="text-sm">SEO Proggres</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                </div>
            </li>
            <li>
                <p class="text-sm">Online Tutorial</p>
                <div class="progress progress-sm progress-light-base">
                    <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                </div>
            </li>
            <li>
                <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
            </li>
        </ul>
    </div>
    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <p class="pad-lft">&#0169; 2015 Your Company</p>
</footer>
<!--===================================================-->
<!-- END FOOTER -->
<!-- SCROLL TOP BUTTON -->
<!--===================================================-->
<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
<!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!-- Status Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--form-->
            <form id="statusUpdateForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Status Approval</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--card start-->
                    <div class="card">
                        <input type="hidden" name="did" id="did"/>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <!--<input type="text" class="form-control" placeholder="nature of bussness" name="shopName" id="shopName" />-->
                            <select class="form-control selectpicker" id="statusRemark" name="status">
                                <option value="1">Pending...</option>
                                <option value="2">Hold</option>
                                <option value="3">Rejected</option>
                                <option value="4">Completed</option>
                            </select>
                        </div>
                        <div class="form-group" id="remarkField">
                            <label class="control-label"><span class="error"></span>Remark</label>

                            <textarea class="form-control" name="remark" ></textarea>
                        </div>
                        <div class="form-group">

                            <label class="control-label">Attachment 1</label>
                            <input class="form-control" id="result1" name="result1" type="file" />

                        </div>
                        <div class="form-group">

                            <label class="control-label">Attachment 2</label>
                            <input class="form-control" id="result2" name="result2" type="file"  />

                        </div>


                    </div>
                    <!--card end-->
                </div>
                <div class="modal-footer">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Documnet Modal -->
<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Download Attachments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--card start-->
                <div class="card">
                    <!--table-->
                    <table class="table table-striped">

                        <tbody id="documentList">


                        </tbody>
                    </table>
                    <!--table-->

                    <!--card end-->
                </div>

            </div>
        </div>
    </div>
    <div id="loader"></div>