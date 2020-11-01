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
                                <section class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">PAN Application</h3>
                                    </div>

                                    <div class="panel-body">
                                        <!-- START Form Wizard -->
                                        <form class="form-horizontal form-bordered" action="#" id="wizard">
                                            <!-- Wizard Container 0 -->
                                           

                                            <!-- Wizard Container 1 -->
                                            <div class="wizard-title">Personal Details</div>
                                            <div class="wizard-container">
                                                <div class="panel">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Category</label>
                                                                    <select class="form-control" name="type_of_organisation" required="">
                                                                        <option value="P">INDIVIDUAL</option>
                                                                                <option value="A">ASSOCIATION OF PERSONS</option>
                                                                                <option value="B">BODY OF INDIVIDUALS</option>
                                                                                <option value="C">COMPANY</option>
                                                                                <option value="T">TRUST</option>
                                                                                <option value="E">LIMITED LIABILITY PARTNERSHIP</option>
                                                                                <option value="F">FIRM</option>
                                                                                <option value="G">GOVERNMENT</option>
                                                                                <option value="H">HINDU UNDIVIDED FAMILY</option>
                                                                                <option value="J">ARTIFICIAL JURIDICAL PERSON</option>
                                                                                <option value="L">LOCAL AUTHORITY</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Application Type</label>
                                                                    <select class="form-control" name="type_of_organisation" required="">
                                                                        <option value="49A">New PAN - Indian </option>
                                                                        <option value="49AA">New PAN - Foreiger </option>
                                                                        <option value="CR">Changes/Correction </option>
                                                                        <option value="CR">Reprint </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="nameAadhaar_id_div">
                                                                    <label>Aadhar No.</label>
                                                                    <input id="rvNameAadhaar_id" name="rvNameAadhaar" class="form-control" type="text" value="" maxlength="12" autocomplete="off" />
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="nameAadhaar_id_div">
                                                                    <label>Name as per Aadhaar</label>

                                                                    <input id="rvNameAadhaar_id" name="rvNameAadhaar" class="form-control" type="text" value="" maxlength="100" autocomplete="off" />
                                                                    <span class="help-block" id="rvNameAadhaar_id_error"></span>
                                                                </div>
                                                            </div>

                                                                        
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel">
                                                    <h5 class="panel-title text-info">
                                                        Applicant Details
                                                        <i
                                                            class="icon-info22 blue"
                                                            data-placement="top"
                                                            data-popup="tooltip"
                                                            title=""
                                                            data-original-title="Initials are not permitted in first and last name. Applicant's proof of identity, proof of address and proof of date of birth should contain the exact name mentioned in this field"
                                                        ></i>
                                                    </h5>
                                                    <div class="panel-body bg-secondary">
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="l_name_div">
                                                                    <label>Last Name / Surname <span class="text-danger">*</span></label>

                                                                    <input id="l_name" name="lastName" class="form-control" type="text"  />
                                                                    <span class="help-block" id="l_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="f_name_div">
                                                                    <label>First Name</label>
                                                                    <input id="f_name" name="firstName" class="form-control" type="text"  />
                                                                    <span class="help-block" id="f_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="m_name_div">
                                                                    <label>Middle Name</label>
                                                                    <input id="m_name" name="middleName" class="form-control" type="text" />
                                                                    <span class="help-block" id="m_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="form-label"></label>
                                                                    <label class="form-label">Birth Date</label>
                    
                                                                    <input type="date" class="form-control" placeholder="" name="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender</label>
                                                                    <select class="form-control" name="type_of_organisation" required="">
                                                                        <option value="">--Select--</option>
                                                                        <option value="Proprietorship">Male</option>
                                                                        <option value="Partnership Firm">Female </option>
                                                                        <option value="Public Limited">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                           

                                                            

                                                            <div class="row">
                                                                
                                                                

                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Mobile No.</label>
                                                                        <input type="text" class="form-control" placeholder="" name="" />
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Email</label>
                                                                        <input type="email" class="form-control" placeholder="" name="" />
                                                                    </div>
                                                                </div>

                                                                
                                                            </div>
                                                            

                                                           
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    
                                                    <div class="panel-body">
                                                        
                                                        

                                                        <div id="hideOther" style="display: none;">
                                                           
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group" id="o_l_name_div">
                                                                        <label>Last Name / Surname<span class="text-danger">*</span></label>

                                                                        <input id="o_l_name" name="rvOtherKnownLastname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                        <span class="help-block" id="o_l_name_error"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <div class="form-group" id="o_f_name_div">
                                                                        <label>First Name</label>

                                                                        <input id="o_f_name" name="rvOtherKnownFirstname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                        <span class="help-block" id="o_f_name_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group" id="o_m_name_div">
                                                                        <label>Middle Name</label>

                                                                        <input id="o_m_name" name="rvOtherKnownMiddlename" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                        <span class="help-block" id="o_m_name_error"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel">
                                                    <div class="panel-title text-info">Details of Parents (Applicable only for Individual applicants)</div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <!-- Added By vaibhav for SingleParent :START-->
                                                            <div class="col-sm-9">
                                                                <div class="sub-heading">
                                                                    <p><b>Whether mother is a single parent and you wish to apply for PAN by furnishing the name of your mother only ? </b></p>
                                                                    (Please tick as applicable)<br />
                                                                    If yes,please fill in mother's name in the appropriate space provided below.
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label class="radio-inline">
                                                                        <!-- <input id="single_parent_yes" name="parent" name="single_parent" type="radio" value="S"/> <b>Yes</b> -->
                                                                        <input type="radio" name="single_parent" id="single_parent_yes" class="singleParentRadio" value="S" />Yes
                                                                    </label>

                                                                    <label class="radio-inline">
                                                                        <!--<input id="single_parent_no" name="parent" name="single_parent" type="radio" value="F" checked="checked"/><b> No</b> -->
                                                                        <input type="radio" name="single_parent" id="single_parent_no" class="singleParentRadio" value="N" checked="" />No
                                                                    </label>
                                                                    <span class="help-block" id="single_parent_error"></span>
                                                                </div>
                                                            </div>

                                                            <!-- Added By vaibhav for SingleParent :END-->

                                                            <div class="col-sm-12">
                                                                <hr class="m-t-0" />
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="sub-heading">
                                                                    <h6 class="panel-title">Father's Name (Even married women should fill in father's name only)</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="fal_name_div">
                                                                    <label>Father's Last Name / Surname<span class="text-danger" id="fatherMandatoryAsterisk">*</span></label>
                                                                    <input id="fal_name" name="rvFatherLastname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="fal_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="faf_name_div">
                                                                    <label>Father's First Name</label>
                                                                    <input id="faf_name" name="rvFatherFirstname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="faf_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="fam_name_div">
                                                                    <label>Father's Middle Name</label>
                                                                    <input id="fam_name" name="rvFatherMiddlename" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="fam_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <hr class="m-t-0" />
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="sub-heading">
                                                                    <h6 class="panel-title" id="motherNameHeading">Mother's Name (Optional)</h6>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="mol_name_div">
                                                                    <label>Mother's Last Name / Surname<span class="text-danger" id="motherMandatoryAsterisk"></span></label>
                                                                    <input id="mol_name" name="rvMotherLastname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="mol_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="mof_name_div">
                                                                    <label>Mother's First Name</label>
                                                                    <input id="mof_name" name="rvMotherFirstname" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="mof_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="mom_name_div">
                                                                    <label>Mother's Middle Name</label>
                                                                    <input id="mom_name" name="rvMotherMiddlename" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="mom_name_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="sub-heading">
                                                                    <h6 class="panel-title">
                                                                        Parents name to be printed on the PAN Card
                                                                        <i
                                                                            class="icon-info22 blue"
                                                                            data-placement="top"
                                                                            data-popup="tooltip"
                                                                            title=""
                                                                            data-original-title="Select the name of either father or mother which you may like to be printed on PAN card (Select one only)"
                                                                        ></i>
                                                                    </h6>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group" id="parent_father_div">
                                                                    <label class="radio-inline"> <input id="parent_father" name="parent" type="radio" value="F" checked="checked" /> Father's Name </label>

                                                                    <label class="radio-inline"> <input id="parent_mother" name="parent" type="radio" value="M" /> Mother's Name </label>
                                                                    <span class="help-block" id="parent_father_error"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ Wizard Container 1 -->
                                            <!-- Wizard Container 2 -->
                                            <div class="wizard-title">
                                                Contact & other details
                                            </div>
                                            <div class="wizard-container">
                                                <div class="panel">
                                                    <div class="panel-title text-info">Source of Income*</div>
                                                    <div class="panel-body">
                                                        <label class="display-block">Please tick as applicable</label>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="sal_id_div">
                                                                    <div class="checkbox">
                                                                        <label> <input id="sal_id" name="Salary" type="checkbox" value="1" /><input type="hidden" name="_Salary" value="on" /> Salary </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input id="buss" name="radioIncomeCheck" type="checkbox" value="B" /><input type="hidden" name="_radioIncomeCheck" value="on" /> Income from Business / Profession
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            

                                                            

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label> <input id="inc_house" name="Salary" type="checkbox" value="2" /><input type="hidden" name="_Salary" value="on" /> Income from House property </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label> <input id="inc_other_sources" name="Salary" type="checkbox" value="3" /><input type="hidden" name="_Salary" value="on" /> Income from Other sources </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label> <input id="capital_gains" name="Salary" type="checkbox" value="4" /><input type="hidden" name="_Salary" value="on" /> Capital Gains </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label> <input id="no_income" name="Salary" type="checkbox" value="5" /><input type="hidden" name="_Salary" value="on" /> No income </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span class="help-block" id="sal_id_error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row panel">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Business/Profession code</label>

                                                            <select id="business_Id1" name="businessCode" class="form-control " >
                                                                <option value="none">Select Business/Profession code</option>
                                                                <option value="03">Architecture</option>
                                                                <option value="13">Builders and Developers</option>
                                                                <option value="04">Chartered Accountant / Accountancy</option>
                                                                <option value="19">Cinema Halls and Other Theaters</option>
                                                                <option value="07">Company Secretary</option>
                                                                <option value="02">Engineering</option>
                                                                <option value="11">Films, TV and such other entertainment</option>
                                                                <option value="09">Government Contractors</option>
                                                                <option value="12">Information Technology</option>
                                                                <option value="10">Insurance Agency</option>
                                                                <option value="05">Interior Decoration</option>
                                                                <option value="08">Legal Practitioner and Solicitors</option>
                                                                <option value="01">Medical Profession and Business</option>
                                                                <option value="14">Members of Stock Exchange and Share Brokers and Sub-brokers</option>
                                                                <option value="16">Operations of Ship, Hovercraft, Aircrafts or Helicopters</option>
                                                                <option value="20">Others</option>
                                                                <option value="18">Ownership of Horses or Jockeys</option>
                                                                <option value="15">Performing Arts and Yatra</option>
                                                                <option value="17">Plying Taxis, Lorries, Trucks, Buses or other Commercial Vehicles</option>
                                                                <option value="06">Technical Consultancy</option>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="panel">
                                                    <div class="panel-title text-info">Residence Address</div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="rFlat_div">
                                                                    <label>Flat / Room / Door / Block No.</label>
                                                                    <input id="rFlat" name="rvResaddFlat" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="rFlat_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="rName_div">
                                                                    <label>Name of Premises/Building/Village</label>
                                                                    <input id="rName" name="rvResaddBuilding" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="rName_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="rRoad_div">
                                                                    <label>Road/Street/Lane/Post Office</label>
                                                                    <input id="rRoad" name="rvResaddPostoffice" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="rRoad_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="rArea_div">
                                                                    <label>Area/Locality/Taluka/Sub-Division</label>
                                                                    <input id="rArea" name="rvResaddLocality" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="rArea_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="rCountry_div">
                                                                    <label>Town/City/District</label>
                                                                    <input id="rCountry" name="rvResaddCity" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="rCountry_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="country_name_div">
                                                                    <label>Country Name</label>

                                                                    <select id="country_name" name="rvResaddCountry" class="form-control" >
                                                                        <option value="none"></option>
                                                                        <option value="93">AFGHANISTAN</option>
                                                                        <option value="35818">ALAND ISLANDS</option>
                                                                        <option value="355">ALBANIA</option>
                                                                        <option value="213">ALGERIA</option>
                                                                        <option value="684">AMERICAN SAMOA</option>
                                                                        <option value="376">ANDORRA</option>
                                                                        <option value="244">ANGOLA</option>
                                                                        <option value="A264">ANGUILLA</option>
                                                                        <option value="A672">ANTARCTICA</option>
                                                                        <option value="1268">ANTIGUA AND BARBUDA</option>
                                                                        <option value="54">ARGENTINA</option>
                                                                        <option value="374">ARMENIA</option>
                                                                        <option value="297">ARUBA</option>
                                                                        <option value="A61">AUSTRALIA</option>
                                                                        <option value="43">AUSTRIA</option>
                                                                        <option value="994">AZERBAIJAN</option>
                                                                        <option value="1242">BAHAMAS</option>
                                                                        <option value="973">BAHRAIN</option>
                                                                        <option value="880">BANGLADESH</option>
                                                                        <option value="1246">BARBADOS</option>
                                                                        <option value="375">BELARUS</option>
                                                                        <option value="32">BELGIUM</option>
                                                                        <option value="501">BELIZE</option>
                                                                        <option value="229">BENIN</option>
                                                                        <option value="1441">BERMUDA</option>
                                                                        <option value="975">BHUTAN</option>
                                                                        <option value="58">BOLIVARIAN REPUBLIC OF VENEZUELA</option>
                                                                        <option value="387">BOSNIA AND HERZEGOVINA</option>
                                                                        <option value="267">BOTSWANA</option>
                                                                        <option value="A47">BOUVET ISLAND</option>
                                                                        <option value="55">BRAZIL</option>
                                                                        <option value="246">BRITISH INDIAN OCEAN TERRITORY</option>
                                                                        <option value="673">BRUNEI DARUSSALAM</option>
                                                                        <option value="359">BULGARIA</option>
                                                                        <option value="226">BURKINA FASO</option>
                                                                        <option value="257">BURUNDI</option>
                                                                        <option value="855">CAMBODIA</option>
                                                                        <option value="237">CAMEROON</option>
                                                                        <option value="A1">CANADA</option>
                                                                        <option value="238">CAPE VERDE</option>
                                                                        <option value="1345">CAYMAN ISLANDS</option>
                                                                        <option value="236">CENTRAL AFRICAN REPUBLIC</option>
                                                                        <option value="235">CHAD</option>
                                                                        <option value="56">CHILE</option>
                                                                        <option value="86">CHINA</option>
                                                                        <option value="B61">CHRISTMAS ISLAND</option>
                                                                        <option value="C61">COCOS (KEELING) ISLANDS</option>
                                                                        <option value="57">COLOMBIA</option>
                                                                        <option value="A269">COMOROS</option>
                                                                        <option value="242">CONGO</option>
                                                                        <option value="682">COOK ISLANDS</option>
                                                                        <option value="506">COSTA RICA</option>
                                                                        <option value="225">COTE D'IVOIRE</option>
                                                                        <option value="385">CROATIA</option>
                                                                        <option value="53">CUBA</option>
                                                                        <option value="357">CYPRUS</option>
                                                                        <option value="420">CZECH REPUBLIC</option>
                                                                        <option value="850">DEMOCRATIC PEOPLE'S REPUBLIC OF KOREA(NORTH KOREA)</option>
                                                                        <option value="45">DENMARK</option>
                                                                        <option value="253">DJIBOUTI</option>
                                                                        <option value="1767">DOMINICA</option>
                                                                        <option value="1829">DOMINICAN REPUBLIC</option>
                                                                        <option value="593">ECUADOR</option>
                                                                        <option value="20">EGYPT</option>
                                                                        <option value="503">EL SALVADOR</option>
                                                                        <option value="240">EQUATORIAL GUINEA</option>
                                                                        <option value="291">ERITREA</option>
                                                                        <option value="372">ESTONIA</option>
                                                                        <option value="251">ETHIOPIA</option>
                                                                        <option value="A500">FALKLAND ISLANDS (MALVINAS)</option>
                                                                        <option value="298">FAROE ISLANDS</option>
                                                                        <option value="679">FIJI</option>
                                                                        <option value="358">FINLAND</option>
                                                                        <option value="389">FMR. YUGOSLAV REP.OF MACEDONIA</option>
                                                                        <option value="33">FRANCE</option>
                                                                        <option value="594">FRENCH GUIANA</option>
                                                                        <option value="689">FRENCH POLYNESIA</option>
                                                                        <option value="0">FRENCH SOUTHERN TERRITORIES</option>
                                                                        <option value="241">GABON</option>
                                                                        <option value="220">GAMBIA</option>
                                                                        <option value="995">GEORGIA</option>
                                                                        <option value="49">GERMANY</option>
                                                                        <option value="233">GHANA</option>
                                                                        <option value="350">GIBRALTAR</option>
                                                                        <option value="30">GREECE</option>
                                                                        <option value="299">GREENLAND</option>
                                                                        <option value="1473">GRENADA</option>
                                                                        <option value="A590">GUADELOUPE</option>
                                                                        <option value="1671">GUAM</option>
                                                                        <option value="502">GUATEMALA</option>
                                                                        <option value="441481">GUERNSEY</option>
                                                                        <option value="224">GUINEA</option>
                                                                        <option value="245">GUINEA-BISSAU</option>
                                                                        <option value="592">GUYANA</option>
                                                                        <option value="509">HAITI</option>
                                                                        <option value="D61">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                        <option value="379">HOLY SEE (VATICAN CITY STATE)</option>
                                                                        <option value="504">HONDURAS</option>
                                                                        <option value="852">HONG KONG</option>
                                                                        <option value="36">HUNGARY</option>
                                                                        <option value="354">ICELAND</option>
                                                                        <option value="91">INDIA</option>
                                                                        <option value="62">INDONESIA</option>
                                                                        <option value="964">IRAQ</option>
                                                                        <option value="353">IRELAND</option>
                                                                        <option value="98">ISLAMIC REPUBLIC OF IRAN</option>
                                                                        <option value="441624">ISLE OF MAN</option>
                                                                        <option value="972">ISRAEL</option>
                                                                        <option value="39">ITALY</option>
                                                                        <option value="1876">JAMAICA</option>
                                                                        <option value="81">JAPAN</option>
                                                                        <option value="441534">JERSEY</option>
                                                                        <option value="962">JORDAN</option>
                                                                        <option value="A7">KAZAKHSTAN</option>
                                                                        <option value="254">KENYA</option>
                                                                        <option value="686">KIRIBATI</option>
                                                                        <option value="965">KUWAIT</option>
                                                                        <option value="996">KYRGYZSTAN</option>
                                                                        <option value="856">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                                                        <option value="371">LATVIA</option>
                                                                        <option value="961">LEBANON</option>
                                                                        <option value="266">LESOTHO</option>
                                                                        <option value="231">LIBERIA</option>
                                                                        <option value="218">LIBYAN ARAB JAMAHIRIYA</option>
                                                                        <option value="423">LIECHTENSTEIN</option>
                                                                        <option value="370">LITHUANIA</option>
                                                                        <option value="352">LUXEMBOURG</option>
                                                                        <option value="853">MACAO</option>
                                                                        <option value="261">MADAGASCAR</option>
                                                                        <option value="265">MALAWI</option>
                                                                        <option value="60">MALAYSIA</option>
                                                                        <option value="960">MALDIVES</option>
                                                                        <option value="223">MALI</option>
                                                                        <option value="356">MALTA</option>
                                                                        <option value="692">MARSHALL ISLANDS</option>
                                                                        <option value="596">MARTINIQUE</option>
                                                                        <option value="222">MAURITANIA</option>
                                                                        <option value="230">MAURITIUS</option>
                                                                        <option value="B269">MAYOTTE</option>
                                                                        <option value="52">MEXICO</option>
                                                                        <option value="377">MONACO</option>
                                                                        <option value="976">MONGOLIA</option>
                                                                        <option value="382">MONTENEGRO</option>
                                                                        <option value="1664">MONTSERRAT</option>
                                                                        <option value="A212">MOROCCO</option>
                                                                        <option value="258">MOZAMBIQUE</option>
                                                                        <option value="95">MYANMAR</option>
                                                                        <option value="B264">NAMIBIA</option>
                                                                        <option value="674">NAURU</option>
                                                                        <option value="977">NEPAL</option>
                                                                        <option value="31">NETHERLANDS</option>
                                                                        <option value="687">NEW CALEDONIA</option>
                                                                        <option value="A64">NEW ZEALAND</option>
                                                                        <option value="505">NICARAGUA</option>
                                                                        <option value="227">NIGER</option>
                                                                        <option value="234">NIGERIA</option>
                                                                        <option value="683">NIUE</option>
                                                                        <option value="B672">NORFOLK ISLAND</option>
                                                                        <option value="1670">NORTHERN MARIANA ISLANDS</option>
                                                                        <option value="B47">NORWAY</option>
                                                                        <option value="968">OMAN</option>
                                                                        <option value="92">PAKISTAN</option>
                                                                        <option value="680">PALAU</option>
                                                                        <option value="970">PALESTINIAN TERRITORY, OCCUPIED</option>
                                                                        <option value="507">PANAMA</option>
                                                                        <option value="675">PAPUA NEW GUINEA</option>
                                                                        <option value="595">PARAGUAY</option>
                                                                        <option value="51">PERU</option>
                                                                        <option value="63">PHILIPPINES</option>
                                                                        <option value="B64">PITCAIRN</option>
                                                                        <option value="48">POLAND</option>
                                                                        <option value="351">PORTUGAL</option>
                                                                        <option value="1787">PUERTO RICO</option>
                                                                        <option value="974">QATAR</option>
                                                                        <option value="82">REPUBLIC OF KOREA(SOUTH KOREA)</option>
                                                                        <option value="373">REPUBLIC OF MOLDOVA</option>
                                                                        <option value="262">REUNION</option>
                                                                        <option value="40">ROMANIA</option>
                                                                        <option value="B7">RUSSIAN FEDERATION</option>
                                                                        <option value="250">RWANDA</option>
                                                                        <option value="B590">SAINT BARTHELEMY</option>
                                                                        <option value="1869">SAINT KITTS AND NEVIS</option>
                                                                        <option value="1758">SAINT LUCIA</option>
                                                                        <option value="C590">SAINT MARTIN</option>
                                                                        <option value="508">SAINT PIERRE AND MIQUELON</option>
                                                                        <option value="1784">SAINT VINCENT AND THE GRENADINES</option>
                                                                        <option value="685">SAMOA</option>
                                                                        <option value="378">SAN MARINO</option>
                                                                        <option value="239">SAO TOME AND PRINCIPE</option>
                                                                        <option value="966">SAUDI ARABIA</option>
                                                                        <option value="221">SENEGAL</option>
                                                                        <option value="381">SERBIA</option>
                                                                        <option value="248">SEYCHELLES</option>
                                                                        <option value="232">SIERRA LEONE</option>
                                                                        <option value="65">SINGAPORE</option>
                                                                        <option value="421">SLOVAKIA</option>
                                                                        <option value="386">SLOVENIA</option>
                                                                        <option value="677">SOLOMON ISLANDS</option>
                                                                        <option value="252">SOMALIA</option>
                                                                        <option value="27">SOUTH AFRICA</option>
                                                                        <option value="B500">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                        <option value="34">SPAIN</option>
                                                                        <option value="94">SRI LANKA</option>
                                                                        <option value="B249">SUDAN</option>
                                                                        <option value="597">SURINAME</option>
                                                                        <option value="C47">SVALBARD AND JAN MAYEN</option>
                                                                        <option value="268">SWAZILAND</option>
                                                                        <option value="46">SWEDEN</option>
                                                                        <option value="41">SWITZERLAND</option>
                                                                        <option value="963">SYRIAN ARAB REPUBLIC</option>
                                                                        <option value="886">TAIWAN, PROVINCE OF CHINA</option>
                                                                        <option value="992">TAJIKISTAN</option>
                                                                        <option value="66">THAILAND</option>
                                                                        <option value="243">THE DEMOCRATIC REPUBLIC OF THE CONGO</option>
                                                                        <option value="670">TIMOR-LESTE</option>
                                                                        <option value="228">TOGO</option>
                                                                        <option value="690">TOKELAU</option>
                                                                        <option value="676">TONGA</option>
                                                                        <option value="1868">TRINIDAD AND TOBAGO</option>
                                                                        <option value="216">TUNISIA</option>
                                                                        <option value="90">TURKEY</option>
                                                                        <option value="993">TURKMENISTAN</option>
                                                                        <option value="1649">TURKS AND CAICOS ISLANDS</option>
                                                                        <option value="688">TUVALU</option>
                                                                        <option value="256">UGANDA</option>
                                                                        <option value="380">UKRAINE</option>
                                                                        <option value="971">UNITED ARAB EMIRATES</option>
                                                                        <option value="44">UNITED KINGDOM</option>
                                                                        <option value="255">UNITED REPUBLIC OF TANZANIA</option>
                                                                        <option value="B1">UNITED STATES</option>
                                                                        <option value="598">URUGUAY</option>
                                                                        <option value="998">UZBEKISTAN</option>
                                                                        <option value="678">VANUATU</option>
                                                                        <option value="84">VIET NAM</option>
                                                                        <option value="1284">VIRGIN ISLANDS, BRITISH</option>
                                                                        <option value="1340">VIRGIN ISLANDS, U.S.</option>
                                                                        <option value="681">WALLIS AND FUTUNA</option>
                                                                        <option value="B212">WESTERN SAHARA</option>
                                                                        <option value="967">YEMEN</option>
                                                                        <option value="260">ZAMBIA</option>
                                                                        <option value="263">ZIMBABWE</option>
                                                                    </select>
                                                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                                                        <span class="selection">
                                                                            <span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"
                                                                                tabindex="0"
                                                                                aria-labelledby="select2-country_name-container"
                                                                            >
                                                                                <span class="select2-selection__rendered" id="select2-country_name-container" title=""></span>
                                                                                <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                    </span>
                                                                    <span class="help-block" id="country_name_error"></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="State">
                                                                    <label>State/Union Territory</label>
                                                                    <input id="State" name="State" class="form-control" type="text" value="" maxlength="11" autocomplete="off" />
                                                                    <span class="help-block" id="res_zip_code_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="res_pin_code_div">
                                                                    <label>Pin Code</label>
                                                                    <input id="res_pin_code" name="rvResaddPin" class="form-control" type="text" value="" maxlength="6" autocomplete="off" />
                                                                    <span class="help-block" id="res_pin_code_error"></span>
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-title text-info">Office Address</div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group" id="ofc_name_div">
                                                                    <label>Name of Office</label>
                                                                    <input id="ofc_name" name="ofc_name" class="form-control" type="text" value="" maxlength="75" autocomplete="off" />
                                                                    <span class="help-block" id="ofc_name_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="oFlat_div">
                                                                    <label>Flat / Room / Door / Block No.</label>
                                                                    <input id="oFlat" name="rvOffaddFlat" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="oFlat_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="oName_div">
                                                                    <label>Name of Premises/Building/Village</label>
                                                                    <input id="oName" name="rvOffaddBuilding" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="oName_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="oRoad_div">
                                                                    <label>Road/Street/Lane/Post Office</label>
                                                                    <input id="oRoad" name="rvOffaddPostoffice" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="oRoad_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="oArea_div">
                                                                    <label>Area/Locality/Taluka/Sub-Division</label>
                                                                    <input id="oArea" name="rvOffaddLocality" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="oArea_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="oCountry_div">
                                                                    <label>Town/City/District</label>
                                                                    <input id="oCountry" name="rvOffaddCity" class="form-control" type="text" value="" maxlength="25" autocomplete="off" />
                                                                    <span class="help-block" id="oCountry_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="country_name_ofc_div">
                                                                    <label class="form-lable">Country Name</label>
                                                                    <select id="country_name_ofc" name="rvOffaddCountry" class="form-control">
                                                                        
                                                                        <option value="93">AFGHANISTAN</option>
                                                                        <option value="35818">ALAND ISLANDS</option>
                                                                        <option value="355">ALBANIA</option>
                                                                        <option value="213">ALGERIA</option>
                                                                        <option value="684">AMERICAN SAMOA</option>
                                                                        <option value="376">ANDORRA</option>
                                                                        <option value="244">ANGOLA</option>
                                                                        <option value="A264">ANGUILLA</option>
                                                                        <option value="A672">ANTARCTICA</option>
                                                                        <option value="1268">ANTIGUA AND BARBUDA</option>
                                                                        <option value="54">ARGENTINA</option>
                                                                        <option value="374">ARMENIA</option>
                                                                        <option value="297">ARUBA</option>
                                                                        <option value="A61">AUSTRALIA</option>
                                                                        <option value="43">AUSTRIA</option>
                                                                        <option value="994">AZERBAIJAN</option>
                                                                        <option value="1242">BAHAMAS</option>
                                                                        <option value="973">BAHRAIN</option>
                                                                        <option value="880">BANGLADESH</option>
                                                                        <option value="1246">BARBADOS</option>
                                                                        <option value="375">BELARUS</option>
                                                                        <option value="32">BELGIUM</option>
                                                                        <option value="501">BELIZE</option>
                                                                        <option value="229">BENIN</option>
                                                                        <option value="1441">BERMUDA</option>
                                                                        <option value="975">BHUTAN</option>
                                                                        <option value="58">BOLIVARIAN REPUBLIC OF VENEZUELA</option>
                                                                        <option value="387">BOSNIA AND HERZEGOVINA</option>
                                                                        <option value="267">BOTSWANA</option>
                                                                        <option value="A47">BOUVET ISLAND</option>
                                                                        <option value="55">BRAZIL</option>
                                                                        <option value="246">BRITISH INDIAN OCEAN TERRITORY</option>
                                                                        <option value="673">BRUNEI DARUSSALAM</option>
                                                                        <option value="359">BULGARIA</option>
                                                                        <option value="226">BURKINA FASO</option>
                                                                        <option value="257">BURUNDI</option>
                                                                        <option value="855">CAMBODIA</option>
                                                                        <option value="237">CAMEROON</option>
                                                                        <option value="A1">CANADA</option>
                                                                        <option value="238">CAPE VERDE</option>
                                                                        <option value="1345">CAYMAN ISLANDS</option>
                                                                        <option value="236">CENTRAL AFRICAN REPUBLIC</option>
                                                                        <option value="235">CHAD</option>
                                                                        <option value="56">CHILE</option>
                                                                        <option value="86">CHINA</option>
                                                                        <option value="B61">CHRISTMAS ISLAND</option>
                                                                        <option value="C61">COCOS (KEELING) ISLANDS</option>
                                                                        <option value="57">COLOMBIA</option>
                                                                        <option value="A269">COMOROS</option>
                                                                        <option value="242">CONGO</option>
                                                                        <option value="682">COOK ISLANDS</option>
                                                                        <option value="506">COSTA RICA</option>
                                                                        <option value="225">COTE D'IVOIRE</option>
                                                                        <option value="385">CROATIA</option>
                                                                        <option value="53">CUBA</option>
                                                                        <option value="357">CYPRUS</option>
                                                                        <option value="420">CZECH REPUBLIC</option>
                                                                        <option value="850">DEMOCRATIC PEOPLE'S REPUBLIC OF KOREA(NORTH KOREA)</option>
                                                                        <option value="45">DENMARK</option>
                                                                        <option value="253">DJIBOUTI</option>
                                                                        <option value="1767">DOMINICA</option>
                                                                        <option value="1829">DOMINICAN REPUBLIC</option>
                                                                        <option value="593">ECUADOR</option>
                                                                        <option value="20">EGYPT</option>
                                                                        <option value="503">EL SALVADOR</option>
                                                                        <option value="240">EQUATORIAL GUINEA</option>
                                                                        <option value="291">ERITREA</option>
                                                                        <option value="372">ESTONIA</option>
                                                                        <option value="251">ETHIOPIA</option>
                                                                        <option value="A500">FALKLAND ISLANDS (MALVINAS)</option>
                                                                        <option value="298">FAROE ISLANDS</option>
                                                                        <option value="679">FIJI</option>
                                                                        <option value="358">FINLAND</option>
                                                                        <option value="389">FMR. YUGOSLAV REP.OF MACEDONIA</option>
                                                                        <option value="33">FRANCE</option>
                                                                        <option value="594">FRENCH GUIANA</option>
                                                                        <option value="689">FRENCH POLYNESIA</option>
                                                                        <option value="0">FRENCH SOUTHERN TERRITORIES</option>
                                                                        <option value="241">GABON</option>
                                                                        <option value="220">GAMBIA</option>
                                                                        <option value="995">GEORGIA</option>
                                                                        <option value="49">GERMANY</option>
                                                                        <option value="233">GHANA</option>
                                                                        <option value="350">GIBRALTAR</option>
                                                                        <option value="30">GREECE</option>
                                                                        <option value="299">GREENLAND</option>
                                                                        <option value="1473">GRENADA</option>
                                                                        <option value="A590">GUADELOUPE</option>
                                                                        <option value="1671">GUAM</option>
                                                                        <option value="502">GUATEMALA</option>
                                                                        <option value="441481">GUERNSEY</option>
                                                                        <option value="224">GUINEA</option>
                                                                        <option value="245">GUINEA-BISSAU</option>
                                                                        <option value="592">GUYANA</option>
                                                                        <option value="509">HAITI</option>
                                                                        <option value="D61">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                        <option value="379">HOLY SEE (VATICAN CITY STATE)</option>
                                                                        <option value="504">HONDURAS</option>
                                                                        <option value="852">HONG KONG</option>
                                                                        <option value="36">HUNGARY</option>
                                                                        <option value="354">ICELAND</option>
                                                                        <option value="91">INDIA</option>
                                                                        <option value="62">INDONESIA</option>
                                                                        <option value="964">IRAQ</option>
                                                                        <option value="353">IRELAND</option>
                                                                        <option value="98">ISLAMIC REPUBLIC OF IRAN</option>
                                                                        <option value="441624">ISLE OF MAN</option>
                                                                        <option value="972">ISRAEL</option>
                                                                        <option value="39">ITALY</option>
                                                                        <option value="1876">JAMAICA</option>
                                                                        <option value="81">JAPAN</option>
                                                                        <option value="441534">JERSEY</option>
                                                                        <option value="962">JORDAN</option>
                                                                        <option value="A7">KAZAKHSTAN</option>
                                                                        <option value="254">KENYA</option>
                                                                        <option value="686">KIRIBATI</option>
                                                                        <option value="965">KUWAIT</option>
                                                                        <option value="996">KYRGYZSTAN</option>
                                                                        <option value="856">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                                                        <option value="371">LATVIA</option>
                                                                        <option value="961">LEBANON</option>
                                                                        <option value="266">LESOTHO</option>
                                                                        <option value="231">LIBERIA</option>
                                                                        <option value="218">LIBYAN ARAB JAMAHIRIYA</option>
                                                                        <option value="423">LIECHTENSTEIN</option>
                                                                        <option value="370">LITHUANIA</option>
                                                                        <option value="352">LUXEMBOURG</option>
                                                                        <option value="853">MACAO</option>
                                                                        <option value="261">MADAGASCAR</option>
                                                                        <option value="265">MALAWI</option>
                                                                        <option value="60">MALAYSIA</option>
                                                                        <option value="960">MALDIVES</option>
                                                                        <option value="223">MALI</option>
                                                                        <option value="356">MALTA</option>
                                                                        <option value="692">MARSHALL ISLANDS</option>
                                                                        <option value="596">MARTINIQUE</option>
                                                                        <option value="222">MAURITANIA</option>
                                                                        <option value="230">MAURITIUS</option>
                                                                        <option value="B269">MAYOTTE</option>
                                                                        <option value="52">MEXICO</option>
                                                                        <option value="377">MONACO</option>
                                                                        <option value="976">MONGOLIA</option>
                                                                        <option value="382">MONTENEGRO</option>
                                                                        <option value="1664">MONTSERRAT</option>
                                                                        <option value="A212">MOROCCO</option>
                                                                        <option value="258">MOZAMBIQUE</option>
                                                                        <option value="95">MYANMAR</option>
                                                                        <option value="B264">NAMIBIA</option>
                                                                        <option value="674">NAURU</option>
                                                                        <option value="977">NEPAL</option>
                                                                        <option value="31">NETHERLANDS</option>
                                                                        <option value="687">NEW CALEDONIA</option>
                                                                        <option value="A64">NEW ZEALAND</option>
                                                                        <option value="505">NICARAGUA</option>
                                                                        <option value="227">NIGER</option>
                                                                        <option value="234">NIGERIA</option>
                                                                        <option value="683">NIUE</option>
                                                                        <option value="B672">NORFOLK ISLAND</option>
                                                                        <option value="1670">NORTHERN MARIANA ISLANDS</option>
                                                                        <option value="B47">NORWAY</option>
                                                                        <option value="968">OMAN</option>
                                                                        <option value="92">PAKISTAN</option>
                                                                        <option value="680">PALAU</option>
                                                                        <option value="970">PALESTINIAN TERRITORY, OCCUPIED</option>
                                                                        <option value="507">PANAMA</option>
                                                                        <option value="675">PAPUA NEW GUINEA</option>
                                                                        <option value="595">PARAGUAY</option>
                                                                        <option value="51">PERU</option>
                                                                        <option value="63">PHILIPPINES</option>
                                                                        <option value="B64">PITCAIRN</option>
                                                                        <option value="48">POLAND</option>
                                                                        <option value="351">PORTUGAL</option>
                                                                        <option value="1787">PUERTO RICO</option>
                                                                        <option value="974">QATAR</option>
                                                                        <option value="82">REPUBLIC OF KOREA(SOUTH KOREA)</option>
                                                                        <option value="373">REPUBLIC OF MOLDOVA</option>
                                                                        <option value="262">REUNION</option>
                                                                        <option value="40">ROMANIA</option>
                                                                        <option value="B7">RUSSIAN FEDERATION</option>
                                                                        <option value="250">RWANDA</option>
                                                                        <option value="B590">SAINT BARTHELEMY</option>
                                                                        <option value="1869">SAINT KITTS AND NEVIS</option>
                                                                        <option value="1758">SAINT LUCIA</option>
                                                                        <option value="C590">SAINT MARTIN</option>
                                                                        <option value="508">SAINT PIERRE AND MIQUELON</option>
                                                                        <option value="1784">SAINT VINCENT AND THE GRENADINES</option>
                                                                        <option value="685">SAMOA</option>
                                                                        <option value="378">SAN MARINO</option>
                                                                        <option value="239">SAO TOME AND PRINCIPE</option>
                                                                        <option value="966">SAUDI ARABIA</option>
                                                                        <option value="221">SENEGAL</option>
                                                                        <option value="381">SERBIA</option>
                                                                        <option value="248">SEYCHELLES</option>
                                                                        <option value="232">SIERRA LEONE</option>
                                                                        <option value="65">SINGAPORE</option>
                                                                        <option value="421">SLOVAKIA</option>
                                                                        <option value="386">SLOVENIA</option>
                                                                        <option value="677">SOLOMON ISLANDS</option>
                                                                        <option value="252">SOMALIA</option>
                                                                        <option value="27">SOUTH AFRICA</option>
                                                                        <option value="B500">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                        <option value="34">SPAIN</option>
                                                                        <option value="94">SRI LANKA</option>
                                                                        <option value="B249">SUDAN</option>
                                                                        <option value="597">SURINAME</option>
                                                                        <option value="C47">SVALBARD AND JAN MAYEN</option>
                                                                        <option value="268">SWAZILAND</option>
                                                                        <option value="46">SWEDEN</option>
                                                                        <option value="41">SWITZERLAND</option>
                                                                        <option value="963">SYRIAN ARAB REPUBLIC</option>
                                                                        <option value="886">TAIWAN, PROVINCE OF CHINA</option>
                                                                        <option value="992">TAJIKISTAN</option>
                                                                        <option value="66">THAILAND</option>
                                                                        <option value="243">THE DEMOCRATIC REPUBLIC OF THE CONGO</option>
                                                                        <option value="670">TIMOR-LESTE</option>
                                                                        <option value="228">TOGO</option>
                                                                        <option value="690">TOKELAU</option>
                                                                        <option value="676">TONGA</option>
                                                                        <option value="1868">TRINIDAD AND TOBAGO</option>
                                                                        <option value="216">TUNISIA</option>
                                                                        <option value="90">TURKEY</option>
                                                                        <option value="993">TURKMENISTAN</option>
                                                                        <option value="1649">TURKS AND CAICOS ISLANDS</option>
                                                                        <option value="688">TUVALU</option>
                                                                        <option value="256">UGANDA</option>
                                                                        <option value="380">UKRAINE</option>
                                                                        <option value="971">UNITED ARAB EMIRATES</option>
                                                                        <option value="44">UNITED KINGDOM</option>
                                                                        <option value="255">UNITED REPUBLIC OF TANZANIA</option>
                                                                        <option value="B1">UNITED STATES</option>
                                                                        <option value="598">URUGUAY</option>
                                                                        <option value="998">UZBEKISTAN</option>
                                                                        <option value="678">VANUATU</option>
                                                                        <option value="84">VIET NAM</option>
                                                                        <option value="1284">VIRGIN ISLANDS, BRITISH</option>
                                                                        <option value="1340">VIRGIN ISLANDS, U.S.</option>
                                                                        <option value="681">WALLIS AND FUTUNA</option>
                                                                        <option value="B212">WESTERN SAHARA</option>
                                                                        <option value="967">YEMEN</option>
                                                                        <option value="260">ZAMBIA</option>
                                                                        <option value="263">ZIMBABWE</option>
                                                                    </select>
                                                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                                                        <span class="selection">
                                                                            <span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"
                                                                                tabindex="0"
                                                                                aria-labelledby="select2-country_name_ofc-container"
                                                                            >
                                                                                <span class="select2-selection__rendered" id="select2-country_name_ofc-container" title=""></span>
                                                                                <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                    </span>
                                                                    <span class="help-block" id="country_name_ofc_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="State">
                                                                    <label>State/Union Territory</label>
                                                                    <input id="State" name="State" class="form-control" type="text" value="" maxlength="11" autocomplete="off" />
                                                                    <span class="help-block" id="res_zip_code_error"></span>
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="ofc_pin_code_div">
                                                                    <label>Pin Code</label>
                                                                    <input id="ofc_pin_code" name="rvOffaddPin" class="form-control" type="text" value="" maxlength="6" autocomplete="off" />
                                                                    <span class="help-block" id="ofc_pin_code_error"></span>
                                                                </div>
                                                            </div>

                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-title text-info">Telephone Number & Email ID details*</div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="tel_num_isdcode_div">
                                                                    <label>Country code (ISD code)<span class="text-danger">*</span></label>
                                                                    <select id="tel_num_isdcode" name="rvIsdCode" class="form-control">
                                                                        <option value="none">--- Select ---</option>
                                                                        <option value="93">AFGHANISTAN (93)</option>
                                                                        <option value="35818">ALAND ISLANDS (35818)</option>
                                                                        <option value="355">ALBANIA (355)</option>
                                                                        <option value="213">ALGERIA (213)</option>
                                                                        <option value="684">AMERICAN SAMOA (684)</option>
                                                                        <option value="376">ANDORRA (376)</option>
                                                                        <option value="244">ANGOLA (244)</option>
                                                                        <option value="A264">ANGUILLA (A264)</option>
                                                                        <option value="A672">ANTARCTICA (A672)</option>
                                                                        <option value="1268">ANTIGUA AND BARBUDA (1268)</option>
                                                                        <option value="54">ARGENTINA (54)</option>
                                                                        <option value="374">ARMENIA (374)</option>
                                                                        <option value="297">ARUBA (297)</option>
                                                                        <option value="A61">AUSTRALIA (A61)</option>
                                                                        <option value="43">AUSTRIA (43)</option>
                                                                        <option value="994">AZERBAIJAN (994)</option>
                                                                        <option value="1242">BAHAMAS (1242)</option>
                                                                        <option value="973">BAHRAIN (973)</option>
                                                                        <option value="880">BANGLADESH (880)</option>
                                                                        <option value="1246">BARBADOS (1246)</option>
                                                                        <option value="375">BELARUS (375)</option>
                                                                        <option value="32">BELGIUM (32)</option>
                                                                        <option value="501">BELIZE (501)</option>
                                                                        <option value="229">BENIN (229)</option>
                                                                        <option value="1441">BERMUDA (1441)</option>
                                                                        <option value="975">BHUTAN (975)</option>
                                                                        <option value="58">BOLIVARIAN REPUBLIC OF VENEZUELA (58)</option>
                                                                        <option value="387">BOSNIA AND HERZEGOVINA (387)</option>
                                                                        <option value="267">BOTSWANA (267)</option>
                                                                        <option value="A47">BOUVET ISLAND (A47)</option>
                                                                        <option value="55">BRAZIL (55)</option>
                                                                        <option value="246">BRITISH INDIAN OCEAN TERRITORY (246)</option>
                                                                        <option value="673">BRUNEI DARUSSALAM (673)</option>
                                                                        <option value="359">BULGARIA (359)</option>
                                                                        <option value="226">BURKINA FASO (226)</option>
                                                                        <option value="257">BURUNDI (257)</option>
                                                                        <option value="855">CAMBODIA (855)</option>
                                                                        <option value="237">CAMEROON (237)</option>
                                                                        <option value="A1">CANADA (A1)</option>
                                                                        <option value="238">CAPE VERDE (238)</option>
                                                                        <option value="1345">CAYMAN ISLANDS (1345)</option>
                                                                        <option value="236">CENTRAL AFRICAN REPUBLIC (236)</option>
                                                                        <option value="235">CHAD (235)</option>
                                                                        <option value="56">CHILE (56)</option>
                                                                        <option value="86">CHINA (86)</option>
                                                                        <option value="B61">CHRISTMAS ISLAND (B61)</option>
                                                                        <option value="C61">COCOS (KEELING) ISLANDS (C61)</option>
                                                                        <option value="57">COLOMBIA (57)</option>
                                                                        <option value="A269">COMOROS (A269)</option>
                                                                        <option value="242">CONGO (242)</option>
                                                                        <option value="682">COOK ISLANDS (682)</option>
                                                                        <option value="506">COSTA RICA (506)</option>
                                                                        <option value="225">COTE D'IVOIRE (225)</option>
                                                                        <option value="385">CROATIA (385)</option>
                                                                        <option value="53">CUBA (53)</option>
                                                                        <option value="357">CYPRUS (357)</option>
                                                                        <option value="420">CZECH REPUBLIC (420)</option>
                                                                        <option value="850">DEMOCRATIC PEOPLE'S REPUBLIC OF KOREA(NORTH KOREA) (850)</option>
                                                                        <option value="45">DENMARK (45)</option>
                                                                        <option value="253">DJIBOUTI (253)</option>
                                                                        <option value="1767">DOMINICA (1767)</option>
                                                                        <option value="1829">DOMINICAN REPUBLIC (1829)</option>
                                                                        <option value="593">ECUADOR (593)</option>
                                                                        <option value="20">EGYPT (20)</option>
                                                                        <option value="503">EL SALVADOR (503)</option>
                                                                        <option value="240">EQUATORIAL GUINEA (240)</option>
                                                                        <option value="291">ERITREA (291)</option>
                                                                        <option value="372">ESTONIA (372)</option>
                                                                        <option value="251">ETHIOPIA (251)</option>
                                                                        <option value="A500">FALKLAND ISLANDS (MALVINAS) (A500)</option>
                                                                        <option value="298">FAROE ISLANDS (298)</option>
                                                                        <option value="679">FIJI (679)</option>
                                                                        <option value="358">FINLAND (358)</option>
                                                                        <option value="389">FMR. YUGOSLAV REP.OF MACEDONIA (389)</option>
                                                                        <option value="33">FRANCE (33)</option>
                                                                        <option value="594">FRENCH GUIANA (594)</option>
                                                                        <option value="689">FRENCH POLYNESIA (689)</option>
                                                                        <option value="0">FRENCH SOUTHERN TERRITORIES (0)</option>
                                                                        <option value="241">GABON (241)</option>
                                                                        <option value="220">GAMBIA (220)</option>
                                                                        <option value="995">GEORGIA (995)</option>
                                                                        <option value="49">GERMANY (49)</option>
                                                                        <option value="233">GHANA (233)</option>
                                                                        <option value="350">GIBRALTAR (350)</option>
                                                                        <option value="30">GREECE (30)</option>
                                                                        <option value="299">GREENLAND (299)</option>
                                                                        <option value="1473">GRENADA (1473)</option>
                                                                        <option value="A590">GUADELOUPE (A590)</option>
                                                                        <option value="1671">GUAM (1671)</option>
                                                                        <option value="502">GUATEMALA (502)</option>
                                                                        <option value="441481">GUERNSEY (441481)</option>
                                                                        <option value="224">GUINEA (224)</option>
                                                                        <option value="245">GUINEA-BISSAU (245)</option>
                                                                        <option value="592">GUYANA (592)</option>
                                                                        <option value="509">HAITI (509)</option>
                                                                        <option value="D61">HEARD ISLAND AND MCDONALD ISLANDS (D61)</option>
                                                                        <option value="379">HOLY SEE (VATICAN CITY STATE) (379)</option>
                                                                        <option value="504">HONDURAS (504)</option>
                                                                        <option value="852">HONG KONG (852)</option>
                                                                        <option value="36">HUNGARY (36)</option>
                                                                        <option value="354">ICELAND (354)</option>
                                                                        <option value="91">INDIA (91)</option>
                                                                        <option value="62">INDONESIA (62)</option>
                                                                        <option value="964">IRAQ (964)</option>
                                                                        <option value="353">IRELAND (353)</option>
                                                                        <option value="98">ISLAMIC REPUBLIC OF IRAN (98)</option>
                                                                        <option value="441624">ISLE OF MAN (441624)</option>
                                                                        <option value="972">ISRAEL (972)</option>
                                                                        <option value="39">ITALY (39)</option>
                                                                        <option value="1876">JAMAICA (1876)</option>
                                                                        <option value="81">JAPAN (81)</option>
                                                                        <option value="441534">JERSEY (441534)</option>
                                                                        <option value="962">JORDAN (962)</option>
                                                                        <option value="A7">KAZAKHSTAN (A7)</option>
                                                                        <option value="254">KENYA (254)</option>
                                                                        <option value="686">KIRIBATI (686)</option>
                                                                        <option value="965">KUWAIT (965)</option>
                                                                        <option value="996">KYRGYZSTAN (996)</option>
                                                                        <option value="856">LAO PEOPLE'S DEMOCRATIC REPUBLIC (856)</option>
                                                                        <option value="371">LATVIA (371)</option>
                                                                        <option value="961">LEBANON (961)</option>
                                                                        <option value="266">LESOTHO (266)</option>
                                                                        <option value="231">LIBERIA (231)</option>
                                                                        <option value="218">LIBYAN ARAB JAMAHIRIYA (218)</option>
                                                                        <option value="423">LIECHTENSTEIN (423)</option>
                                                                        <option value="370">LITHUANIA (370)</option>
                                                                        <option value="352">LUXEMBOURG (352)</option>
                                                                        <option value="853">MACAO (853)</option>
                                                                        <option value="261">MADAGASCAR (261)</option>
                                                                        <option value="265">MALAWI (265)</option>
                                                                        <option value="60">MALAYSIA (60)</option>
                                                                        <option value="960">MALDIVES (960)</option>
                                                                        <option value="223">MALI (223)</option>
                                                                        <option value="356">MALTA (356)</option>
                                                                        <option value="692">MARSHALL ISLANDS (692)</option>
                                                                        <option value="596">MARTINIQUE (596)</option>
                                                                        <option value="222">MAURITANIA (222)</option>
                                                                        <option value="230">MAURITIUS (230)</option>
                                                                        <option value="B269">MAYOTTE (B269)</option>
                                                                        <option value="52">MEXICO (52)</option>
                                                                        <option value="377">MONACO (377)</option>
                                                                        <option value="976">MONGOLIA (976)</option>
                                                                        <option value="382">MONTENEGRO (382)</option>
                                                                        <option value="1664">MONTSERRAT (1664)</option>
                                                                        <option value="A212">MOROCCO (A212)</option>
                                                                        <option value="258">MOZAMBIQUE (258)</option>
                                                                        <option value="95">MYANMAR (95)</option>
                                                                        <option value="B264">NAMIBIA (B264)</option>
                                                                        <option value="674">NAURU (674)</option>
                                                                        <option value="977">NEPAL (977)</option>
                                                                        <option value="31">NETHERLANDS (31)</option>
                                                                        <option value="687">NEW CALEDONIA (687)</option>
                                                                        <option value="A64">NEW ZEALAND (A64)</option>
                                                                        <option value="505">NICARAGUA (505)</option>
                                                                        <option value="227">NIGER (227)</option>
                                                                        <option value="234">NIGERIA (234)</option>
                                                                        <option value="683">NIUE (683)</option>
                                                                        <option value="B672">NORFOLK ISLAND (B672)</option>
                                                                        <option value="1670">NORTHERN MARIANA ISLANDS (1670)</option>
                                                                        <option value="B47">NORWAY (B47)</option>
                                                                        <option value="968">OMAN (968)</option>
                                                                        <option value="92">PAKISTAN (92)</option>
                                                                        <option value="680">PALAU (680)</option>
                                                                        <option value="970">PALESTINIAN TERRITORY, OCCUPIED (970)</option>
                                                                        <option value="507">PANAMA (507)</option>
                                                                        <option value="675">PAPUA NEW GUINEA (675)</option>
                                                                        <option value="595">PARAGUAY (595)</option>
                                                                        <option value="51">PERU (51)</option>
                                                                        <option value="63">PHILIPPINES (63)</option>
                                                                        <option value="B64">PITCAIRN (B64)</option>
                                                                        <option value="48">POLAND (48)</option>
                                                                        <option value="351">PORTUGAL (351)</option>
                                                                        <option value="1787">PUERTO RICO (1787)</option>
                                                                        <option value="974">QATAR (974)</option>
                                                                        <option value="82">REPUBLIC OF KOREA(SOUTH KOREA) (82)</option>
                                                                        <option value="373">REPUBLIC OF MOLDOVA (373)</option>
                                                                        <option value="262">REUNION (262)</option>
                                                                        <option value="40">ROMANIA (40)</option>
                                                                        <option value="B7">RUSSIAN FEDERATION (B7)</option>
                                                                        <option value="250">RWANDA (250)</option>
                                                                        <option value="B590">SAINT BARTHELEMY (B590)</option>
                                                                        <option value="1869">SAINT KITTS AND NEVIS (1869)</option>
                                                                        <option value="1758">SAINT LUCIA (1758)</option>
                                                                        <option value="C590">SAINT MARTIN (C590)</option>
                                                                        <option value="508">SAINT PIERRE AND MIQUELON (508)</option>
                                                                        <option value="1784">SAINT VINCENT AND THE GRENADINES (1784)</option>
                                                                        <option value="685">SAMOA (685)</option>
                                                                        <option value="378">SAN MARINO (378)</option>
                                                                        <option value="239">SAO TOME AND PRINCIPE (239)</option>
                                                                        <option value="966">SAUDI ARABIA (966)</option>
                                                                        <option value="221">SENEGAL (221)</option>
                                                                        <option value="381">SERBIA (381)</option>
                                                                        <option value="248">SEYCHELLES (248)</option>
                                                                        <option value="232">SIERRA LEONE (232)</option>
                                                                        <option value="65">SINGAPORE (65)</option>
                                                                        <option value="421">SLOVAKIA (421)</option>
                                                                        <option value="386">SLOVENIA (386)</option>
                                                                        <option value="677">SOLOMON ISLANDS (677)</option>
                                                                        <option value="252">SOMALIA (252)</option>
                                                                        <option value="27">SOUTH AFRICA (27)</option>
                                                                        <option value="B500">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS (B500)</option>
                                                                        <option value="34">SPAIN (34)</option>
                                                                        <option value="94">SRI LANKA (94)</option>
                                                                        <option value="B249">SUDAN (B249)</option>
                                                                        <option value="597">SURINAME (597)</option>
                                                                        <option value="C47">SVALBARD AND JAN MAYEN (C47)</option>
                                                                        <option value="268">SWAZILAND (268)</option>
                                                                        <option value="46">SWEDEN (46)</option>
                                                                        <option value="41">SWITZERLAND (41)</option>
                                                                        <option value="963">SYRIAN ARAB REPUBLIC (963)</option>
                                                                        <option value="886">TAIWAN, PROVINCE OF CHINA (886)</option>
                                                                        <option value="992">TAJIKISTAN (992)</option>
                                                                        <option value="66">THAILAND (66)</option>
                                                                        <option value="243">THE DEMOCRATIC REPUBLIC OF THE CONGO (243)</option>
                                                                        <option value="670">TIMOR-LESTE (670)</option>
                                                                        <option value="228">TOGO (228)</option>
                                                                        <option value="690">TOKELAU (690)</option>
                                                                        <option value="676">TONGA (676)</option>
                                                                        <option value="1868">TRINIDAD AND TOBAGO (1868)</option>
                                                                        <option value="216">TUNISIA (216)</option>
                                                                        <option value="90">TURKEY (90)</option>
                                                                        <option value="993">TURKMENISTAN (993)</option>
                                                                        <option value="1649">TURKS AND CAICOS ISLANDS (1649)</option>
                                                                        <option value="688">TUVALU (688)</option>
                                                                        <option value="256">UGANDA (256)</option>
                                                                        <option value="380">UKRAINE (380)</option>
                                                                        <option value="971">UNITED ARAB EMIRATES (971)</option>
                                                                        <option value="44">UNITED KINGDOM (44)</option>
                                                                        <option value="255">UNITED REPUBLIC OF TANZANIA (255)</option>
                                                                        <option value="B1">UNITED STATES (B1)</option>
                                                                        <option value="598">URUGUAY (598)</option>
                                                                        <option value="998">UZBEKISTAN (998)</option>
                                                                        <option value="678">VANUATU (678)</option>
                                                                        <option value="84">VIET NAM (84)</option>
                                                                        <option value="1284">VIRGIN ISLANDS, BRITISH (1284)</option>
                                                                        <option value="1340">VIRGIN ISLANDS, U.S. (1340)</option>
                                                                        <option value="681">WALLIS AND FUTUNA (681)</option>
                                                                        <option value="B212">WESTERN SAHARA (B212)</option>
                                                                        <option value="967">YEMEN (967)</option>
                                                                        <option value="260">ZAMBIA (260)</option>
                                                                        <option value="263">ZIMBABWE (263)</option>
                                                                    </select>
                                                                    
                                                                    <span class="help-block" id="tel_num_isdcode_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="tel_num_stdcode_div">
                                                                    <label>Area / STD Code</label>
                                                                    <input id="tel_num_stdcode" name="rvStdCode" class="form-control" type="text" value="" maxlength="7" autocomplete="off" />
                                                                    <span class="help-block" id="tel_num_stdcode_error"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="tel_num_div">
                                                                    <label>Telephone / Mobile Number</label>
                                                                    <input id="tel_num" name="rvContactNo" class="form-control" type="text"  />
                                                                    <span class="help-block" id="tel_num_error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group" id="email_id_div">
                                                                    <label>Email ID</label>
                                                                    <input id="email_id" name="emailId" class="form-control" type="text"  maxlength="40"  />
                                                                    <span class="help-block" id="email_id_error"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                            </div>
                                            <!--/ Wizard Container 2 -->
                                           

                                            
                                        </form>
                                        <!--/ END Form Wizard -->
                                    </div>
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