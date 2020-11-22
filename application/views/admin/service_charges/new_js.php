<script>
    var url = '<?php echo base_url(); ?>';
    $('#serviceChargeForm').on('submit', function (e) {

        e.preventDefault();

    var returnVal = validChecker();
        var formdata = new FormData(this);
//        console.log(formdata);
        if (returnVal) {
            $.ajax({

                url: url + 'addcharges',

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

    
function goback() {

        window.location.replace(url + 'servicecharge');
    }

</script>
