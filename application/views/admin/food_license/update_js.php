<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#app_type').val(product.app_type);
        $('#address').val(product.faddress);
        $('#state').val(product.fstate);
        $('#zone').val(product.district);
        $('#division').val(product.subdivision);
        $('#village').val(product.village);
        $('#pincode').val(product.pincode);
        $('#landmark').val(product.landmark);
        $('#tel_no').val(product.telephone);
        $('#mob_no').val(product.mobile_number);
        $('#fax').val(product.fax);
        $('#email').val(product.emailid);
        $('#alternate_no').val(product.mobile_alternate);
        $('#male').val(product.noofyear);
        // $('#taluka').val(product.taluka);
        // $('#district').val(product.district);
        // $('#state').val(product.state);
        // $('#pincode').val(product.pincode);
        // $('#bank_name').val(product.bank_name);
        // $('#ac_number').val(product.ac_number);
        // $('#ifsc_number').val(product.ifsc_number);

    }

    loadDetails(details);


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