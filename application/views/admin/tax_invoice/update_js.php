<script>

    function loadDetails(product) {
        $('#pan_name').val(product.pan_name);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        $('#aadhar_number').val(product.aadhar_number);
        $('#contact_number').val(product.contact_number);
        $('#emailid').val(product.emailid);
        $('#intype').val(product.intype);
        $('#premise_name').val(product.premise_name);
        $('#flat_number').val(product.flat_number);
        $('#road').val(product.road);
        $('#area').val(product.area);
        $('#village').val(product.village);
        $('#taluka').val(product.taluka);
        $('#district').val(product.district);
        $('#state').val(product.state);
        $('#pincode').val(product.pincode);
        $('#seller_business_name').val(product.s_shopname);
        $('#seller_address').val(product.s_address);
        $('#seller_email').val(product.s_mail);
        $('#seller_contact').val(product.s_contact);
        $('#seller_gst_number').val(product.s_gst);
        $('#buyer_business_name').val(product.b_shopname);
        $('#buyer_address').val(product.b_address);
        $('#buyer_email').val(product.b_mail);
        $('#buyer_contactno').val(product.b_contact);
        $('#buyer_gst_number').val(product.b_gst);
        $('#shopping_business_name').val(product.shop_shopname);
        $('#shop_email').val(product.shop_mail);
        $('#shop_contactno').val(product.shop_contact);
        $('#shop_gst_number').val(product.shop_gst);
        $('#shop_address').val(product.shop_address);
        
        
        
   showInvoiceDetailList(product.invoices);        
        
    }

    loadDetails(details);


function showInvoiceDetailList(pList) {
        const count = pList.length;
        var tableData='';
        if(count>0){
            for(var i=0;i<count;i++){
                tableData += $('#partnerTable tbody').html();
                tableData += `<tr id="r` + pList[i]['pname'] + `">
                        <td>` + pList[i]['pname'] + `</td>
                        <td>` + pList[i]['hsn'] + `</td>
                        <td>` + pList[i]['quantity'] + `</td>
                        <td>` + pList[i]['rate'] + `</td>
                        <td>` + pList[i]['gst'] + `</td>
                        <td>` + pList[i]['cgst'] + `</td>
                        <td>` + pList[i]['sgst'] + `</td>
                        <td>` + pList[i]['amount'] + `</td>
                        <td>` + pList[i]['total_amount'] + `</td>
                        </tr>`;
            }
            

        }else{
            tableData += $('#billTable tbody').html();
            tableData +=`<tr><td colspan="5" align="center">No records found!</td></tr>`;
        }
        $('#billData').html(tableData);
    }



var form  = document.getElementById("taxinvoice-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
    // allElements[i].readOnly = true;
       allElements[i].disabled=true;
}




    
</script>