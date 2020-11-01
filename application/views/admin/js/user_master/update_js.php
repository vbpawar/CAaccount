<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#billid').val(product.billid);
        $('#gstid').val(product.gstid);
        $('#gstnumber').val(product.gstnumber);
        $('#gstpwd').val(product.gstpwd);
        $('#mobilenumber').val(product.mobilenumber);
        $('#emailid').val(product.emailid);

    }

    loadDetails(details);

    $('#userForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#userForm").valid();

        if (true) {
        var formdata = new FormData(this);
        formdata.append('userid',1);
            $.ajax({

                url: url + 'E_waybill/updatebill',

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