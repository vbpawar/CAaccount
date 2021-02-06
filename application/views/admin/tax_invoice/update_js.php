<script>

    function loadDetails(product) {
        $('#pan_name').val(product.pan_name);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        
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



var form  = document.getElementById("udyog-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
    // allElements[i].readOnly = true;
       allElements[i].disabled=true;
}




    
</script>