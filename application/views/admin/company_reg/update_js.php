<script>
    var url = '<?php echo base_url(); ?>';
    function loadDetails(product) {

        $('#shop_name').val(product.shop_name);
        $('#shop_address').val(product.shop_address);
        $('#start_up_date').val(product.start_up_date);
        $('#natureofbuss').val(product.natureofbuss);
        $('#msg').val(product.msg);


        showPartnersList(product.partners);
        showPartnerInvestment(product.partners_investment);
    }

    loadDetails(details);


    function showPartnersList(pList) {
        const count = pList.length;
        var tableData = '';
        if (count > 0) {
            for (var i = 0; i < count; i++) {
                tableData += $('#partnerTable tbody').html();
                tableData += `<tr id="r` + pList[i]['aadhar_number'] + `">
                        <td>` + pList[i]['partner_name'] + `</td>
                        <td>` + pList[i]['aadhar_number'] + `</td>
                        <td>` + pList[i]['pan_name'] + `</td>
                        <td>` + pList[i]['pan_number'] + `</td>
                        <td>` + pList[i]['emailid'] + `</td>
                        <td>` + pList[i]['mobile_number'] + `</td>
                            <td><a href="` + (url + pList[i]['electricity']) + `" download="` + pList[i]['partner_name'] + `_electricitybill"><u>Download</u></a></td>
                            <td><a href="` + (url + pList[i]['aadhar']) + `" download="` + pList[i]['partner_name'] + `_aadhar"><u>Download</u></a></td>
                            <td><a href="` + (url + pList[i]['pan']) + `" download="` + pList[i]['partner_name'] + `_pancard"><u>Download</u></a></td>
                        </tr>`;
            }


        } else {
            tableData += $('#partnerTable tbody').html();
            tableData += `<tr><td colspan="5" align="center">No records found!</td></tr>`;
        }
        $('#partnerData').html(tableData);
    }



    function showPartnerInvestment(pList) {
        const count = pList.length;
        var tableData = '';
        var total = 0;
        if (count > 0) {
            for (var i = 0; i < count; i++) {
                tableData += $('#investmentTable tbody').html();
                tableData += `<tr id="">
                        <td>` + pList[i]['partner_name'] + `</td>
                        <td class="investmentId">` + pList[i]['investment'] + `</td>
                   </tr>
                    `;
                var value = parseFloat(pList[i]['investment']);
                if (!isNaN(value)) {
                    total += value;
                }
            }


        } else {
            tableData += $('#partnerTable tbody').html();
            tableData += `<tr><td colspan="2" align="center">No records found!</td></tr>`;
        }
        $('#investmentData').html(tableData);
        $('#investmentTable tfoot td').eq(0).text('Total Investment: ' + total);
    }





    var form = document.getElementById("company-registration-form");
    var allElements = form.elements;
    for (var i = 0, l = allElements.length; i < l; ++i) {
        // allElements[i].readOnly = true;
        allElements[i].disabled = true;
    }





</script>