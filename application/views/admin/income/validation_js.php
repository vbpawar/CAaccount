<script>

    $('.form16Class').hide();
    $('.salBankClass').hide();
    $('.salSlarySlipClass').hide();

    $('input[type=radio]').on('change', function () {
        switch ($(this).val()) {
            case 'A' :
//           $('#turn_over_amt').show();
                $("#turn_over_amt").prop('disabled', false);
                break;
            case 'B' :
                $("#turn_over_amt").prop('disabled', true);

//                $('#turn_over_amt').hide();
//                $('#turn_over_amt').val(' ');
                break;
            case 'C' :
//                $('#loan_amt').show();
                $("#loan_amt").prop('disabled', false);
                break;
            case 'D' :
                $("#loan_amt").prop('disabled', true);
//                $('#loan_amt').hide();
//                $('#loan_amt').val(' ');
                break;
            case 'E' :
                $("#income_from_other").prop('disabled', false);
//                $('#income_other_source').show();
                break;
            case 'F' :
                $("#income_from_other").prop('disabled', true);
//                $('#income_other_source').hide();
//                $('#income_other_source').val(' ');
                break;
            case 'G' :
                $("#lic_slip").prop('disabled', false);
//                $('#licslip').show();
                break;
            case 'H' :
                $("#lic_slip").prop('disabled', true);
//                $('#licslip').hide();
//                $('#licslip').val(' ');
                break;
            case 'I' :
                $("#home_loan").prop('disabled', false);
//                $('#home_loan').show();
                break;
            case 'J' :
                $("#home_loan").prop('disabled', true);
//                $('#home_loan').hide();
//                $('#home_loan').val(' ');
                break;
            case 'K' :
                $("#invs_amt").prop('disabled', false);
//                $('#invest_amt').show();
                break;
            case 'L' :
                $("#invs_amt").prop('disabled', true);
//                $('#invest_amt').hide();
//                $('#invest_amt').val(' ');
                break;
            case 'M' :
                $("#sandry_creditor").prop('disabled', false);
//                $('#sandry_credit').show();
                break;
            case 'N' :
                $("#sandry_creditor").prop('disabled', true);
//                $('#sandry_credit').hide();
//                $('#sandry_credit').val(' ');
                break;
            case 'O' :
                $("#sandry_debitor").prop('disabled', false);
//                $('#sandry_debit').show();
                break;
            case 'P' :
                $("#sandry_debitor").prop('disabled', true);
//                $('#sandry_debit').hide();
//                $('#sandry_debit').val(' ');
                break;
            case 'Q' :
                $("#stock_amt").prop('disabled', false);
//                $('#stock_amt').show();
                break;
            case 'R' :
                $("#stock_amt").prop('disabled', true);
//                $('#stock_amt').hide();
//                $('#stock_amt').val(' ');
                break;
            case 'S' :
                $("#cash_bal").prop('disabled', false);
//                $('#cash_balance').show();
                break;
            case 'T' :
                $("#cash_bal").prop('disabled', true);
//                $('#cash_balance').hide();
//                $('#cash_balance').val(' ');
                break;
            case 'U' :
                $("#buss_loan").prop('disabled', false);
//                $('#buss_loan').show();
                break;
            case 'V' :
                $("#buss_loan").prop('disabled', true);
//                $('#buss_loan').hide();
//                $('#buss_loan').val(' ');
                break;
            case 'W' :
                $("#personal_loan").prop('disabled', false);
//                $('#pers_loan').show();
                break;
            case 'X' :
                $("#personal_loan").prop('disabled', true);
//                $('#pers_loan').hide();
//                $('#pers_loan').val(' ');
                break;
            case 'Y' :
                $('#inv_proof').show();
                break;
            case 'Z' :
                $('#inv_proof').hide();
                break;
            case 'k' :
                $('#bal_sheet').show();
                break;
            case 'l' :
                $('#bal_sheet').hide();
                break;
            case 'i' :
                $('#pe_loan').show();
                break;
            case 'j' :
                $('#pe_loan').hide();
                break;
            case 'g' :
                $('#home_cert').show();
                break;
            case 'h' :
                $('#home_cert').hide();
                break;
            case 'e' :
                $('#inc_other').show();
                break;
            case 'f' :
                $('#inc_other').hide();
                break;
            case 'c' :
                $('#lic_cert').show();
                break;
            case 'd' :
                $('#lic_cert').hide();
                break;
            case 'a' :
                $('#buss_loan_cert').show();
                break;
            case 'b' :
                $('#buss_loan_cert').hide();
                break;
        }
    });

//    Bussiness and professional radio 
    $('#bussCheck').on('change', function () {
        //radio
        $('.bussCheckClass').show();
        $('.saldocClass').hide();
        //documents
        $('.saldocClass').hide();
        $('.bussdocClass').show();
        //business document tab show
        $('#busProfDetailLi').show();
        $('#ssdocType').hide();
        $('.form16Class').hide();
        $('.salBankClass').hide();
        $('.salSlarySlipClass').hide();
    });
    $('#salCheck').on('change', function () {
        //radio
        $('.bussCheckClass').hide();
        $('.salCheckClass').show();
        //documents
        $('.saldocClass').show();
        $('#ssdocType').show();
        $('.bussdocClass').hide();
        //business document tab hide
        $('#busProfDetailLi').hide();
    });

    //salaried dropdown change then document change

    $('#saldocType').change(function () {

        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib


        switch (value) {
            case "0":
                $('.form16Class').hide();
                $('.salBankClass').hide();
                $('.salSlarySlipClass').hide();
                break;
            case "1":
                $('.form16Class').show();
                $('.salBankClass').hide();
                $('.salSlarySlipClass').hide();
                break;
            case "2":
                $('.form16Class').hide();
                $('.salBankClass').show();
                $('.salSlarySlipClass').hide();
                break;
            case "3":
                $('.form16Class').hide();
                $('.salBankClass').hide();
                $('.salSlarySlipClass').show();
                break;


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
    function validChecker() {
        var errorMsg = '';
        var status = true;

        if ($('#pan_name').val() == '') {
            errorMsg += '<span id="panError" style="color:red;">*Please Enter Name as per Pan</span><br>'
            status = false;
        }
        if ($('#pan_number').val() == '') {
            errorMsg += '<span id="panNoError" style="color:red;">*Please Enter Pan No.</span><br>'
            status = false;
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