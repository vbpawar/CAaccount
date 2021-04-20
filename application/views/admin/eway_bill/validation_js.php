<script>

    //add parteners in table
    $('#addBill').click(function (e) {

        var productName = $('#productName').val();
        var discription = $('#discription').val();
        var hsn = $('#hsn').val();
        var quantity = $('#quantity').val();
        var unit = $('#unit').val();
       
        var value = $('#value').val();
        var gst = $('#gst').val();
        var igst = $('#igst').val();
        var advolRate = $('#advolRate').val();
        var nonAdvol = $('#nonAdvol').val();
       
        var tableData = '';
//   alert(partnerName+' '+pMobile);
//if fields are not empty then add in table 
//else empty then set errors
        if (productName != '' && discription != '' && hsn != '' && quantity != '' && unit != '' && value !=''&& gst !='' && igst !='' && advolRate !='' && nonAdvol !='' ) {
            if (!($('#r' + productName.replace(/ /g, "_")).length)) {
                tableData += $('#billTable tbody').html();
                console.log(tableData);
                tableData += `<tr id="r` + productName.replace(/ /g, "_") + `">
                        <td>` + productName + `</td>
                        <td>` + discription + `</td>
                        <td>` + hsn + `</td>
                        <td>` + quantity + `</td>
                        <td>` + unit + `</td>
                        <td>` + value + `</td>
                        <td>` + gst + `</td>
                        <td>` + igst + `</td>
                        <td>` + advolRate + `</td>
                        <td>` + nonAdvol + `</td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('` + productName.replace(/ /g, "_") + `')">
                        Delete
                        </button>
                        </td>
                        </tr>`;
//                            console.log(tableData);
                $('#billData').html(tableData);

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

</script>