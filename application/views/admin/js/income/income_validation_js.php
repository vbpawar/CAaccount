<script>
$('#dynamicLi').hide();
 $('#bustype').change(function () {
     
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

//add parteners in table
    $('#addPartener').click(function (e) {

        var partnerName = $('#partnerName').val();
        var pAadhar = $('#pAadhar').val();
        var pPancard = $('#pPancard').val();
        var pEmail = $('#pEmail').val();
        var pMobile = $('#pMobile').val();
        var tableData = '';
//   alert(partnerName+' '+pMobile);
        tableData += $('#partnerTable tbody').html();
        tableData += `<tr id="r`+pAadhar+`">
                        <td>`+partnerName+`</td>
                        <td>`+pAadhar+`</td>
                        <td>`+pPancard+`</td>
                        <td>`+pEmail+`</td>
                        <td>`+pMobile+`</td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('`+pAadhar+`')">
                        <i class="fa fa-trash-alt" ></i>
                        </button>
                        </td>
                        </tr>`;
                            
                            $('#partnerData').html(tableData);
    });
    function deletePartner(id) {
        $('#r' + id).remove();
    }


    $(function () {

        $("#caCertificateForm").validate({

            ignore: [], rules: {

                nameasperadhar: {

                    required: true, minlength: 2, maxlength: 255

                },

                pancardnumber: {

                    required: true, minlength: 2, maxlength: 255

                },
                mobilenumber: {

//                required: true, minlength: 10, maxlength: 10
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10

                },

                shopaddress: {
                    required: true, minlength: 2, maxlength: 255
                }

            }

            , messages: {

                nameasperadhar: {

                    required: 'Enter Name as per Aadharcard', minlength: 'please enter more word', maxlength: 'length is exceed'

                },

                pancardnumber: {

                    required: 'Enter PANCARD Number', minlength: 'please enter more word', maxlength: 'length is exceed'

                },
                mobilenumber: {

                    required: 'Enter Mobile Number', minlength: 'please enter Valid Mobile Number', maxlength: 'please enter Valid Mobile Number'

                },
                
                shopaddress: {

                    required: 'Enter Shop Address', minlength: 'please enter more word', maxlength: 'length is exceed'

                }

            }

        });

    });


</script>