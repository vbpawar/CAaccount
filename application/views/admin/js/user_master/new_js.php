<script>
    var url = '<?php echo base_url(); ?>';
    $('#userForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();
        var formdata = new FormData(this);
        formdata.append('userid',1);

        if (true) {

            $.ajax({

                url: url + 'User/createUser',

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

        window.location.replace(url + 'services/UserMaster/show');
    }


</script>
