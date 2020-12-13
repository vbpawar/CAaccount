<script>
    function loadDetails(product) {
        $('#pan_name').val(product.pan_name);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        $('#aadhar_number').val(product.aadhar_number);
        $('#contact_number').val(product.contact_number);
        $('#emailid').val(product.emailid);
      
        $('#shop_name').val(product.shop_name);
        $('#gst_number').val(product.gst_number);
        $('#gst_id').val(product.gst_id);
        $('#gst_pwd').val(product.gst_pwd);
    }
loadDetails(details);
var form  = document.getElementById("gst-form");
var allElements = form.elements;
for (var i = 0, l = allElements.length; i < l; ++i) {
       allElements[i].disabled=true;
}   
</script>