<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#userid').val(product.userid);
        $('#adharnumber').val(product.adharnumber);
        $('#nameofent').val(product.nameofent);
        $('#gender').val(product.gender);
        $('#mobilenumber').val(product.mobilenumber);
        $('#emailid').val(product.emailid);
        $('#category').val(product.category);
        $('#typeoforg').val(product.typeoforg);
        $('#ustate').val(product.ustate);
        $('#district').val(product.district);
        $('#city').val(product.city);
        $('#pincode').val(product.pincode);
        $('#postoffice').val(product.postoffice);
        $('#regdate').val(product.regdate);
        $('#bankName').val(product.bankName);
        $('#ifsc').val(product.ifsc);
        $('#bankAc').val(product.bankAc);
        $('#men').val(product.men);
        $('#women').val(product.women);


    }

    loadDetails(details);

    $('#udyogAadharForm').on('submit', function (e) {

        e.preventDefault();

    var returnVal = $("#udyogAadharForm").valid();

        if (returnVal) {
        var formdata = new FormData(this);

            $.ajax({

                url: url + 'UdyogAdhar/updateudyog',

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