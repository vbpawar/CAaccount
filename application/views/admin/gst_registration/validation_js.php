<script>
//    $('#dynamicLi').hide();
    $('.proprietorship').show();
    
    $('#rentAgree').hide();
    $('#Partners_director').hide();
//bussiness type change then appear new tab
    $('#bussinessType').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value == 1) {
            $('.proprietorship').show();
            $('.partnerhip').hide();
            $('.pvtltd').hide();
            $('.ppl').hide();
            $('#panSpan').html('');
        } else if (value == 2) {
            $('.proprietorship').hide();
            $('.partnerhip').show();
            $('.pvtltd').hide();
            $('.ppl').hide();
            $('#panSpan').html(' of partner ship firm');
        } else if (value == 3) {
            $('.proprietorship').hide();
            $('.partnerhip').hide();
            $('.pvtltd').show();
            $('.ppl').hide();
            $('#panSpan').html(' of Company');
        } else if (value == 4) {
            $('.proprietorship').hide();
            $('.partnerhip').hide();
            $('.pvtltd').hide();
            $('.ppl').show();
            $('#panSpan').html(' of public private ltd.');
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



    //add parteners in table
    $('#addPartener').click(function (e) {

        var partnerName = $('#partnerName').val();
        var pAadhar = $('#pAadhar').val();
        var pPancard = $('#pPancard').val();
        var pEmail = $('#pEmail').val();
        var pMobile = $('#pMobile').val();
        var photodoc = $('#pPhotodoc').prop('files')[0];
        var aadhardoc = $('#pAadhardoc').prop('files')[0];
        var pandoc = $('#pPandoc').prop('files')[0];
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
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="pPhoto` + pAadhar + `pre" width="20px" height="20px" />
                                <input type="hidden" id="pPhoto_doc` + pAadhar + `" value=""/>
                                    
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
                        <i class="fa fa-trash-alt" ></i>
                        </button>
                        </td>
                        </tr>`;

                $('#partnerData').html(tableData);
                
//                set partners documents
                $('#pPhoto' + pAadhar + 'pre').attr("src", URL.createObjectURL(photodoc));
                $('#pAadhar' + pAadhar + 'pre').attr("src", URL.createObjectURL(aadhardoc));
                $('#pPan' + pAadhar + 'pre').attr("src", URL.createObjectURL(pandoc));
                getPhotoBase64(photodoc).then(function (data) {
                    //set string in hidden field
                    $('#pPhoto_doc' + pAadhar).val(data);
                });
                getPhotoBase64(aadhardoc).then(function (data) {
                    //set string in hidden field
                    $('#pAadhar_doc' + pAadhar).val(data);
                });
                getPhotoBase64(pandoc).then(function (data) {
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
            $('.partnerError').html(errorData);

        }

    });
    function deletePartner(id) {
        $('#r' + id).remove();
    }

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
</script>