<script>
    $('.electricityAttach').hide();
    $('.otherdocAttach').hide();
//    $('#dynamicLi').hide();

//electricity bill attachment
    $("input[name='elect']").change(function () {

        var radioValue = $("input[name='elect']:checked").val();
        if (radioValue == 1) {
            $('.electricityAttach').show();
        } else if (radioValue == 0) {
            $('.electricityAttach').hide();
        }


    });

//    gst enable/disable
    $('#enableGst').change(function () {
        if (this.checked) {
            $("#gst_number").prop('disabled', false);
//    alert('checked')
        } else {
//    alert('unchecked')
            $("#gst_number").prop('disabled', true);
        }
    });

//    gst enable/disable
    $('#enableGst1').change(function () {
        if (this.checked) {
            $("#gst_number1").prop('disabled', false);
//    alert('checked')
        } else {
//    alert('unchecked')
            $("#gst_number1").prop('disabled', true);
        }
    });


//bussiness type change then appear new tab
    $('#buss_type').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value != 1) {
            $('#dynamicLi').show();
            $('.otherdocAttach').show();
        } else {
            $('#dynamicLi').hide();
            $('.otherdocAttach').hide();
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
    //partners add list error remove
    $('#partnerName').keyup(function () {
        $('#pNameError').empty();
    });
    $('#pAadhar').keyup(function () {
        $('#pAadharError').empty();
    });
    $('#pPancard').keyup(function () {
        $('#pPanError').empty();
    });
    $('#pEmail').keyup(function () {
        $('#pEmailError').empty();
    });
    $('#pMobile').keyup(function () {
        $('#pMobileError').empty();
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