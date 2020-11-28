<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);


        $('#premise_name').val(product.premise_name);
         $('#flat_number').val(product.flat_number);
         $('#road').val(product.road);
         $('#area').val(product.area);
         $('#village').val(product.village);
         $('#taluka').val(product.taluka);
         $('#district').val(product.district);
         $('#state').val(product.state);
         $('#pincode').val(product.pincode);
         $('#app_type').val(product.app_type);
         $('#category').val(product.category);
         if(product.app_type==2){
         $('#pan_number').val(product.pan_number);
         $('#pandiv').show();
         }
         $('#aadhar_name').val(product.aadhar_name);
         $('#contact_number').val(product.contact_number);
         $('#emailid').val(product.emailid);
         $('#userid').val(product.userid);
    }

    loadDetails(details);

   var form  = document.getElementById("pancard-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
    // allElements[i].readOnly = true;
       allElements[i].disabled=true;
}


</script>