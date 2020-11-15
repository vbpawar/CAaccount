<script>
    var url = '<?php echo base_url(); ?>';
    $('#pf-withdrawl-form').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();
        var formdata = new FormData(this);
        formdata.append('userid',<?php echo $_SESSION['Data']['userid'];?>);
//        console.log(formdata);
        if (true) {

            $.ajax({

                url: url + 'createpf',

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

        window.location.replace(url + 'pf_withdrawal/show');
    }


</script>
