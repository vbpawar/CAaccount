<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#pan_name').val(product.pan_name);
        $('#uan_number').val(product.uan_number);
        $('#uan_password').val(product.uan_password);
        $('#nature_of_buss').val(product.nature_of_buss);
        $('#trade_name').val(product.trade_name);
        $('#place_of_buss').val(product.place_of_buss);
        $('#pan_number').val(product.pan_number);
        $('#aadhar_name').val(product.aadhar_name);
        $('#aadhar_number').val(product.aadhar_number);
        $('#dob').val(product.dob);
        $('#contact_number').val(product.contact_number);
        $('#emailid').val(product.emailid);
        $('#premise_name').val(product.premise_name);
        $('#flat_number').val(product.flat_number);
        $('#road').val(product.road);
        $('#area').val(product.area);
        $('#village').val(product.village);
        $('#taluka').val(product.taluka);
        $('#district').val(product.district);
        $('#state').val(product.state);
        $('#pincode').val(product.pincode);
        $('#bank_name').val(product.bank_name);
        $('#ac_number').val(product.ac_number);
        $('#ifsc_number').val(product.ifsc_number);

    }

    loadDetails(details);


var form  = document.getElementById("digital-sign-form");
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