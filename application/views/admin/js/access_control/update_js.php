<script>

    function loadDetails(product) {

        $('#userid').val(product.userid);
        $('#roleid').change(product.roleid);
        $('#emailid').val(product.emailid);
        $('#firstname').val(product.firstname);
        $('#lastname').val(product.lastname);
        $('#upassword').val(product.upassword);
        $('#contact').val(product.contact);
        $('#country').val(product.country);
        $('#ustate').val(product.ustate);
        $('#city').val(product.city);
        $('#pincode').val(product.pincode);
        $('#uaddress').val(product.uaddress);

    }

    loadDetails(details);

    $('#userForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#userForm").valid();

        if (true) {
        var formdata = new FormData(this);
            $.ajax({

                url: url + 'User/updateuser',

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