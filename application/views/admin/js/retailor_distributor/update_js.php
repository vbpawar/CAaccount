<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#distributorid').val(product.distributorid);
        $('#retailorid').val(product.retailorid);


    }

    loadDetails(details);

    $('#distributorForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();

        if (true) {
            var formdata = new FormData(this);
            formdata.append('distretid', ulaborid);
            $.ajax({

                url: url + 'Distributor_retailors/updateretailors',

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


</script>