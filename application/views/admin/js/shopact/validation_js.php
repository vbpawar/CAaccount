<script>
    $('.electricityAttach').hide();
    $('#dynamicLi').hide();

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
            $("#gst").prop('disabled', false);
        } else {
            $("#gst").prop('disabled', true);
        }
    });

    $('#natofBussiness').change(function () {
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
    
 
</script>