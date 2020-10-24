<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#userid').val(product.userid);
        $('#certid').val(product.certid);
        $('#nameasperadhar').val(product.nameasperadhar);
        $('#pancardnumber').val(product.pancardnumber);
        $('#mobilenumber').val(product.mobilenumber);
        $('#emailid').val(product.emailid);
        $('#shopaddress').val(product.shopaddress);
        $('#homeaddress').val(product.homeaddress);
        $('#reason').val(product.reason);

    }

    loadDetails(details);

    $('#caCertificateForm').on('submit', function (e) {

        e.preventDefault();

    var returnVal = $("#caCertificateForm").valid();

        if (returnVal) {
        var formdata = new FormData(this);

            $.ajax({

                url: url + 'Certificate_service/updatecertificate',

                type: 'POST',

                data: formdata,

                cache: false,

                contentType: false,

                processData: false,

                dataType: 'json',

                success: function (response) {
//                alert(response.Data.customerId);
//                console.log(response);

                    if (response.Responsecode == 200) {
//                         var productid = response.Data.customerId;
//                    productid = productid.toString();
                        swal("Congrats!", response.Message, "success");
                        goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });

        }

    });

//    function goback() {
//
//        window.location.replace(url + 'services/certificate/show');
////$('.showDiv').show();
////$('.updateDiv').hide();
//    }
</script>