<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#pan_name').val(product.pan_name);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        $('#aadhar_number').val(product.aadhar_number);
        $('#dob').val(product.dob);
        $('#contact_number').val(product.contact_number);
        $('#emailid').val(product.emailid);

        $('#shop_name').val(product.bussness_name);
        $('#shop_adhar').val(product.shop_adhar);
        $('#gst_number').val(product.gst_number);
        $('#eway_bill_id').val(product.eway_bill_id);
        $('#bill_pwd').val(product.bill_pwd);

        $('#transporterName').val(product.transporter_name);
        $('#transporterId').val(product.transporter_id);
        $('#distance_km').val(product.distance_km);

        $('#vehicle_number').val(product.vehicle_number);
        $('#transport_doc_number').val(product.transport_doc_number);
        $('#final_date').val(product.final_date);

        $('#inputName').val(product.sname);
        $('#inputGSTIN').val(product.gstn);
        $('#inputState').val(product.sstate);
        $('#inputAddress').val(product.saddress);
        $('#inputPlace').val(product.place);
        $('#inputPincode').val(product.pincode);

        $('#inputName1').val(product.bname);
        $('#inputGSTIN1').val(product.b_gstn);
        $('#inputState1').val(product.bstate);
        $('#inputAddress1').val(product.b_address);
        $('#inputPlace1').val(product.b_place);
        $('#inputPincode1').val(product.b_pincode);

        $('#taxamount').val(product.tax_amt);
        $('#cgstamt').val(product.cgst_amt);
        $('#sgstamt').val(product.sgst_amt);
        $('#igstamt').val(product.igst_amt);
        $('#cess_advol_amt').val(product.cess_advol_amt);
        $('#cess_non_amt').val(product.cess_non_amt);
        $('#other_amt').val(product.other_amt);
        $('#invoice_amt').val(product.invoice_amt);
        showPartnersList(product.invoices);
    }

    loadDetails(details);

    
function showPartnersList(pList) {
        const count = pList.length;
        var tableData='';
        if(count>0){
            for(var i=0;i<count;i++){
                tableData += $('#billTable tbody').html();
                tableData += `<tr id="r` + pList[i]['pname'] + `">
                <td>` + pList[i]['pname'] + `</td>
                        <td>` + pList[i]['pdesc'] + `</td>
                        <td>` + pList[i]['hsn'] + `</td>
                        <td>` + pList[i]['quantity'] + `</td>
                        <td>` + pList[i]['unit'] + `</td>
                        <td>` + pList[i]['variable_value'] + `</td>
                        <td>` + pList[i]['gst_rate'] + `</td>
                        <td>` + pList[i]['igst_rate'] + `</td>
                        <td>` + pList[i]['cess_advol_rate'] + `</td>
                        <td>` + pList[i]['cess_non_advol_rate'] + `</td>
                        <td>Delete</td>
                        </tr>`;
            }
            

        }else{
            tableData += $('#billTable tbody').html();
            tableData +=`<tr><td colspan="5" align="center">No records found!</td></tr>`;
        }
        $('#billData').html(tableData);
    }





var form  = document.getElementById("pf-withdrawl-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
    // allElements[i].readOnly = true;
       allElements[i].disabled=true;
}




    $(document).ready(function () {
//        $("#pf-withdrawl-form :input").prop("disabled", true);
$("body").find("*").prop('disabled', true);
    });
//    function goback() {
//
//        window.location.replace(url + 'services/certificate/show');
////$('.showDiv').show();
////$('.updateDiv').hide();
//    }
</script>