<script>
//    $('#dynamicLi').hide();
    $('#proprietorship').show();
    $('#partnerhip').hide();
    $('#pvtltd').hide();
    $('#ppl').hide();
    $('#rentAgree').hide();
    $('#rentAgree1').hide();
    $('#rentAgree2').hide();
    $('#rentAgree3').hide();
    $('#partnerhip').hide();
    $('#Partners_director').hide();
//bussiness type change then appear new tab
    $('#bussinessType').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value == 1) {
            $('#proprietorship').show();
            $('#partnerhip').hide();
        } else if (value == 2) {
            $('#proprietorship').hide();
            $('#partnerhip').show();
        } else if (value == 3) {
            $('#proprietorship').hide();
            $('#partnerhip').hide();
            $('#pvtltd').show();
            $('#ppl').hide();
            $('#partnerhip').hide();
        } else if (value == 4) {
            $('#proprietorship').hide();
            $('#partnerhip').hide();
            $('#pvtltd').hide();
            $('#ppl').show();
        }
    });

//Do you have rent aggrement?
    $("input[name='rent']").change(function () {

        var radioValue = $("input[name='rent']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree').show();
        } else if (radioValue == 0) {
            $('#rentAgree').hide();
        }


    });
//Do you have rent aggrement? for partners
    $("input[name='partnerRent']").change(function () {

        var radioValue = $("input[name='partnerRent']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree1').show();
        } else if (radioValue == 0) {
            $('#rentAgree1').hide();
        }


    });
//Do you have rent aggrement? for private
    $("input[name='rentPrivate']").change(function () {

        var radioValue = $("input[name='rentPrivate']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree2').show();
        } else if (radioValue == 0) {
            $('#rentAgree2').hide();
        }


    });
//Do you have rent aggrement? for private
    $("input[name='rentPPL']").change(function () {

        var radioValue = $("input[name='rentPPL']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree3').show();
        } else if (radioValue == 0) {
            $('#rentAgree3').hide();
        }


    });



    //add parteners in table
    $('#addPartener').click(function (e) {

        var partnerName = $('#partnerName').val();
        var pAadhar = $('#pAadhar').val();
        var pPancard = $('#pPancard').val();
        var pEmail = $('#pEmail').val();
        var pMobile = $('#pMobile').val();
        var tableData = '';
//   alert(partnerName+' '+pMobile);
//if fields are not empty then add in table 
//else empty then set errors
        if (partnerName != '' && pAadhar != '' && pPancard != '' && pEmail != '' && pMobile != '') {
            if (!($('#r' + pAadhar).length)) {
                tableData += $('#partnerTable tbody').html();
                tableData += `<tr id="r` + pAadhar + `">
                        <td>` + partnerName + `</td>
                        <td>` + pAadhar + `</td>
                        <td>` + pPancard + `</td>
                        <td>` + pEmail + `</td>
                        <td>` + pMobile + `</td>
                        <td><input class="" id="pPhoto` + pAadhar + `" name="pPhoto` + pAadhar + `" type="file" onchange="loadFile(event, 'pPhoto` + pAadhar + `pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPhoto` + pAadhar + `pre" width="20px" height="20px" />
                        </td>
                        <td><input class="" id="pAadhar` + pAadhar + `" name="pAadhar` + pAadhar + `" type="file" onchange="loadFile(event, 'pAadhar` + pAadhar + `pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pAadhar` + pAadhar + `pre" width="20px" height="20px" />
                        </td>
                        <td><input class="" id="pPan` + pAadhar + `" name="pPan` + pAadhar + `" type="file" onchange="loadFile(event, 'pPan` + pAadhar + `pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPan` + pAadhar + `pre" width="20px" height="20px" />
                        </td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('` + pAadhar + `')">
                        <i class="fa fa-trash-alt" ></i>
                        </button>
                        </td>
                        </tr>`;

                $('#partnerData').html(tableData);
            }
        } else {
            var errorData = '';
            if (partnerName == '') {
                errorData += '<span id="pNameError" class="text-danger"> *Enter Partner Name</span><br/>';
            }
            if (pAadhar == '') {
                errorData += '<span id="pAadharError" class="text-danger"> *Enter Aadhar No.</span><br/>';
            }
            if (pPancard == '') {
                errorData += '<span id="pPanError" class="text-danger"> *Enter Pan No.</span><br/>';
            }
            if (pEmail == '') {
                errorData += '<span id="pEmailError" class="text-danger"> *Enter Emailid</span><br/>';
            }
            if (pMobile == '') {
                errorData += '<span id="pMobileError" class="text-danger"> *Enter Mobile No.</span><br/>';
            }
            $('.partnerError').html(errorData);
        }

    });
    function deletePartner(id) {
        $('#r' + id).remove();
    }



//partnerdetails 
    $('#dynamicLi').hide();
    $('#bussinessType').change(function () {

        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value != 1) {
            $('#dynamicLi').show();
        } else {
            $('#dynamicLi').hide();
        }
    });


//form validation
    function validChecker(){
    var errorMsg='';
    var status=true;
    var scrl = $(document).scrollTop(100)
    
    if($('#pan_name').val()==''){
        errorMsg +='<span id="panError" style="color:red;">*Please Enter Name as per Pan</span><br>'
        status=false;
        
        
    }
    if($('#pan_number').val()==''){
        errorMsg +='<span id="panNoError" style="color:red;">*Please Enter Pan No.</span><br>'
        status=false;
        
    }
    if($('#aadhar_name').val()==''){
        errorMsg +='<span id="adharerr" style="color:red;">*Please Enter Name as per Adhar</span><br>'
        status=false;
        
    }
    if($('#aadhar_number').val()==''){
        errorMsg +='<span id="adharnumerr" style="color:red;">*Please Enter 12 digit Adhar Number</span><br>'
        status=false;
        
    }
    if($('#contact_number').val()==''){
        errorMsg +='<span id="contacterr" style="color:red;">*Please Enter 10 Digit Mobile Number</span><br>'
        status=false;
        
        
    }
    $('#error-container').html(errorMsg);
    return status;
}

    $('#pan_name').keyup(function () {
        $('#panError').empty();
    });
    $('#pan_number').keyup(function () {
        $('#panNoError').empty();
    });
</script>