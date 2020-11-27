<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#uid').val(product.uid);
        $('#adharnumber').val(product.adharnumber);
        $('#nameofent').val(product.nameofent);
        $('#gender').val(product.gender);
        $('#mobilenumber').val(product.mobilenumber);
        $('#emailid').val(product.emailid);
        $('#category').val(product.category);
        $('#nameofentr').val(product.nameofentr);
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

//    var returnVal = $("#caCertificateForm").valid();
        var formdata = new FormData(this);
            formdata.append('userid',1);
        if (true) {

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

                        swal("Congrats!", response.Message, "success");



                        goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });

        }

    });

    


</script>