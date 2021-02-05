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
    $('#seller_enableGst').change(function () {
        if (this.checked) {
            $("#seller_gst_number").prop('disabled', false);
//    alert('checked')
        } else {
//    alert('unchecked')
            $("#seller_gst_number").prop('disabled', true);
        }
    });

//    gst enable/disable
    $('#buyer_enableGst').change(function () {
        if (this.checked) {
            $("#buyer_gst_number").prop('disabled', false);
//    alert('checked')
        } else {
//    alert('unchecked')
            $("#buyer_gst_number").prop('disabled', true);
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
    $('#addBill').click(function (e) {
        var productName = $('#productName').val();
        var hsn = $('#hsn').val();
        var quantity = $('#quantity').val();
        var rate = $('#rate').val();
        var amount = $('#amount').val();
        var gst = $('#gst').val();
        var igst = $('#igst').val();
        var sgst = $('#sgst').val();
        var taotalamt = $('#taotalamt').val();
        var tableData = '';
//   alert(partnerName+' '+pMobile);
//if fields are not empty then add in table 
//else empty then set errors
        if (productName != '' && hsn != '' && quantity != '' && rate != '' && amount != '') {
            console.log($('#r' + productName).length);
           if (!($('#r' + productName).length)) {
                tableData += $('#billTable tbody').html();
                tableData += `<tr id="r` + productName + `">
                        <td>` + productName + `</td>
                        <td>` + hsn + `</td>
                        <td>` + quantity + `</td>
                        <td>` + rate + `</td>
                        <td>` + amount + `</td>
                        <td>` + gst + `</td>
                        <td>` + igst + `</td>
                        <td>` + sgst + `</td>
                        <td>` + taotalamt + `</td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('` + productName + `')">
                        <i class="fa fa-trash-alt" ></i>
                        </button>
                        </td>
                        </tr>`;
                            console.log(tableData);
                $('#billData').html(tableData);
            }
        } else {
            var errorData = '';
            if (productName == '') {
                errorData += '<span id="pNameError" class="text-danger"> *Enter Product Name</span><br/>';
            }
            if (hsn == '') {
                errorData += '<span id="pAadharError" class="text-danger"> *Enter Aadhar No.</span><br/>';
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