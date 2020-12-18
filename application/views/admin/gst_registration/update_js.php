<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#pan_name').val(product.pan_name);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        $('#aadhar_number').val(product.aadhar_number);
        $('#contact_number').val(product.contact_number);
        $('#emailid').val(product.emailid);
        $('#dob').val(product.dob);
        $('#premise_name').val(product.premise_name);
        $('#flat_number').val(product.flat_number);
        $('#road').val(product.road);
        $('#area').val(product.area);
        $('#village').val(product.village);
        $('#taluka').val(product.taluka);
        $('#district').val(product.district);
        $('#state').val(product.state);
        $('#pincode').val(product.pincode);
        $('#s_premise_name').val(product.s_premise_name);
        $('#s_flat_number').val(product.s_flat_number);
        $('#s_road').val(product.s_road);
        $('#s_area').val(product.s_area);
        $('#s_village').val(product.s_village);
        $('#s_taluka').val(product.s_taluka);
        $('#s_district').val(product.s_district);
        $('#s_state').val(product.s_state);
        $('#s_pincode').val(product.s_pincode);
        $('#shop_name').val(product.shop_name);
        $('#office_contact').val(product.office_contact);
        $('#office_mailid').val(product.office_mailid);
        $('#buss_start_date').val(product.buss_start_date);
        $('#nature_of_buss').val(product.nature_of_buss);
        $('#busstype').val(product.buss_type);
        $('#male').val(product.male);
        $('#female').val(product.female);
        $('#bank_name').val(product.bank_name);
        $('#ac_number').val(product.ac_number);
        $('#ifsc_number').val(product.ifsc_number);
        $('#turn_over_amt').val(product.turn_over_amt);
        
        
        showPartnersList(product.partners);
    }

    loadDetails(details);


function showPartnersList(pList) {
        const count = pList.length;
        var tableData='';
        if(count>0){
            for(var i=0;i<count;i++){
                tableData += $('#partnerTable tbody').html();
                tableData += `<tr id="r` + pList[i]['aadhar_number'] + `">
                        <td>` + pList[i]['partner_name'] + `</td>
                        <td>` + pList[i]['aadhar_number'] + `</td>
                        <td>` + pList[i]['pan_number'] + `</td>
                        <td>` + pList[i]['emailid'] + `</td>
                        <td>` + pList[i]['contact_number'] + `</td>
                        </tr>`;
            }
            

        }else{
            tableData += $('#partnerTable tbody').html();
            tableData +=`<tr><td colspan="5" align="center">No records found!</td></tr>`;
        }
        $('#partnerData').html(tableData);
    }



var form  = document.getElementById("gst-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
    // allElements[i].readOnly = true;
       allElements[i].disabled=true;
}




    
</script>