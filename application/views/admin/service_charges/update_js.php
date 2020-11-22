<script>
    function loadDetails(product) {
        $('#chargesid').val(product.chargesid);
        $('#service').val(product.servicename);
        $('#charges').val(product.charges);
    }

    loadDetails(details);
    
     $('#serviceChargeForm').on('submit', function (e) {
        e.preventDefault();

    var returnVal = validChecker();
        if (returnVal) {
        var formdata = new FormData(this);

            $.ajax({

                url: url + 'updatecharges',

                type: 'POST',

                data: formdata,

                cache: false,

                contentType: false,

                processData: false,

                dataType: 'json',

                success: function (response) {

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