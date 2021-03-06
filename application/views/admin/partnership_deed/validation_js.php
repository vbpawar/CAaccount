<script>
    $('.electricityAttach').hide();
    $('.otherdocAttach').hide();
//    $('#dynamicLi').hide();

//electricity bill attachment
    $('input[type=radio]').on('change', function () {
        switch ($(this).val()) {
            case 'Y' :
                $('#inv_proof').show();
                break;
            case 'Z' :
                $('#inv_proof').hide();
                break;
            case 'a' :
                $('#buss_loan_cert').show();
                break;
            case 'b' :
                $('#buss_loan_cert').hide();
                break;
            case 'w' :
                $('#other_doc1').show();
                break;
            case 'x' :
                $('#other_doc1').hide();
                break;
            case 'c' :
                $('#other_doc2').show();
                break;
            case 'd' :
                $('#other_doc2').hide();
                break;
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
        var pPanName = $('#pan_name').val();
        var pPancard = $('#pPancard').val();
        var pEmail = $('#pEmail').val();
        var pMobile = $('#pMobile').val();
        var pEBilldoc = $('#pEBilldoc').prop('files')[0];
        var pAadhardoc = $('#pAadhardoc').prop('files')[0];
        var pPandoc = $('#pPandoc').prop('files')[0];
        var tableData = '';
//   alert(partnerName+' '+pMobile);
//if fields are not empty then add in table 
//else empty then set errors
        if (partnerName != '' && pAadhar != '' && pPancard != '' && pEmail != '' && pMobile != '' && pEBilldoc != '' && pAadhardoc != '' && pPandoc != '') {
            if (!($('#r' + pAadhar).length)) {
                tableData += $('#partnerTable tbody').html();
                tableData += `<tr id="r` + pAadhar + `">
                        <td>` + partnerName + `</td>
                        <td>` + pAadhar + `</td>
                        <td>` + pPanName + `</td>
                        <td>` + pPancard + `</td>
                        <td>` + pEmail + `</td>
                        <td>` + pMobile + `</td>
                        <td>
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pEbill` + pAadhar + `pre" width="20px" height="20px" />
                                <input type="hidden" id="pEbill_doc` + pAadhar + `" value=""/>
                                    
                        </td>
                        <td>
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pAadhar` + pAadhar + `pre" width="20px" height="20px" />
                                <input type="hidden" id="pAadhar_doc` + pAadhar + `"/>
                        </td>
                        <td>
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPan` + pAadhar + `pre" width="20px" height="20px" />
                                <input type="hidden" id="pPan_doc` + pAadhar + `"/>
                        </td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('` + pAadhar + `')">
                        Delete
                        </button>
                        </td>
                        </tr>`;

                $('#partnerData').html(tableData);
                
                //                set partners documents
                $('#pEbill' + pAadhar + 'pre').attr("src", URL.createObjectURL(pEBilldoc));
                $('#pAadhar' + pAadhar + 'pre').attr("src", URL.createObjectURL(pAadhardoc));
                $('#pPan' + pAadhar + 'pre').attr("src", URL.createObjectURL(pPandoc));
                
                getPhotoBase64(pEBilldoc).then(function (data) {
                    //set string in hidden field
                    $('#pEbill_doc' + pAadhar).val(data);
                });
                getPhotoBase64(pAadhardoc).then(function (data) {
                    //set string in hidden field
                    $('#pAadhar_doc' + pAadhar).val(data);
                });
                getPhotoBase64(pPandoc).then(function (data) {
                    //set string in hidden field
                    $('#pPan_doc' + pAadhar).val(data);
                });
                
                
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
            if (pEBilldoc == '') {
                errorData += '<span id="pPhotodocError" class="text-danger"> *Select Photo</span><br/>';
            }
            if (pAadhardoc == '') {
                errorData += '<span id="pAadhardocError" class="text-danger"> *Select Aadhar Card</span><br/>';
            }
            if (pPandoc == '') {
                errorData += '<span id="pPandocError" class="text-danger"> *Select Pan Card</span><br/>';
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
    $('#pPhotodoc').keyup(function () {
        $('#pPhotodocError').empty();
    });
    $('#pAadhardoc').keyup(function () {
        $('#pAadhardocError').empty();
    });
    $('#pPandoc').keyup(function () {
        $('#pPandocError').empty();
    });



//base64 file upload
    async   function getPhotoBase64(fileData) {
//        alert(id);
//        var f = $(id).prop('files')[0];
        var f = fileData;
        return  await toBase64(f);

    }

    const toBase64 = file => new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });



    //form validation
    function validChecker() {
        var errorMsg = '';
        var status = true;
        var scrl = $(document).scrollTop(100)

        if ($('#pan_name').val() == '') {
            errorMsg += '<span id="panError" style="color:red;">*Please Enter Name as per Pan</span><br>'
            status = false;


        }
        if ($('#pan_number').val() == '') {
            errorMsg += '<span id="panNoError" style="color:red;">*Please Enter Pan No.</span><br>'
            status = false;

        }
        if ($('#aadhar_name').val() == '') {
            errorMsg += '<span id="adharerr" style="color:red;">*Please Enter Name as per Adhar</span><br>'
            status = false;

        }
        if ($('#aadhar_number').val() == '') {
            errorMsg += '<span id="adharnumerr" style="color:red;">*Please Enter 12 digit Adhar Number</span><br>'
            status = false;

        }
        if ($('#contact_number').val() == '') {
            errorMsg += '<span id="contacterr" style="color:red;">*Please Enter 10 Digit Mobile Number</span><br>'
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

//    add investment Table
    $('#addInvestment').click(function () {

        var partenerName = $('#partenerName').val();
        var partner_investment = $('#partner_investment').val();
        var tableData1 = '';
        var total = 0;
        if ($('#r' + partenerName.replace(/ /g, "_")).length == 0) {
//            $('#totalInvest').remove();
//            $('#investmentTable .investmentId').each(function () {
//                total =total+parseFloat($(this).html());
////                alert($(this).html());
//                if(total==0){
//                    total=total+parseFloat(partner_investment);
//                }
//                  alert(total);
//            });
//            



            tableData1 += $('#investmentTable tbody').html();
            tableData1 += `<tr id="r` + partenerName.replace(/ /g, "_") + `">
                        <td>` + partenerName + `</td>
                        <td class="investmentId">` + partner_investment + `</td>
                            <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartnerInvestment('` + partenerName.replace(/ /g, "_") + `')" title="delete">
                                Delete
                        </button>
                        </td>
                   </tr>
                    `;

            $('#investmentData').html(tableData1);

            //        investment satrt

            $('#investmentTable tr').each(function () {
                var value = parseFloat($('td', this).eq(1).text());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            $('#investmentTable tfoot td').eq(0).text('Total Investment: ' + total);
//        investment end




        }
    });


    function  deletePartnerInvestment(partnerName) {
        $('#r' + partnerName).remove();
        var total = 0;
        //        investment satrt

        $('#investmentTable tr').each(function () {
            var value = parseFloat($('td', this).eq(1).text());
            if (!isNaN(value)) {
                total += value;
            }
        });
        $('#investmentTable tfoot td').eq(0).text('Total Investment: ' + total);
//        investment end
    }


</script>