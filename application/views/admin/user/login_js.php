<script>
    var url = '<?php echo base_url(); ?>';
    $('#loginForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();
        var formdata = new FormData(this);

        if (true) {

            $.ajax({

                url: url + 'LoginController/authenticate',

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

                    window.location.replace(url + 'services/User/dashboard');



                    } else {

                        swal("Error!", response.Message, "error");

                    }

                }

            });

        }

    });

    

</script>
