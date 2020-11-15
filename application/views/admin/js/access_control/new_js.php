<script>

    var url = '<?php echo base_url(); ?>';
    $('#accessControlForm').on('submit', function (e) {
        e.preventDefault();
//        var arr=getAccess();
        var array = []
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

        for (var i = 0; i < checkboxes.length; i++) {
            array.push(checkboxes[i].value)
        }
        console.log(array);
    //    array = JSON.stringify(array);
        console.log(array);
//    var returnVal = $("#caCertificateForm").valid();
        var formdata = new FormData(this);
            formdata.append('access',array);
        if (true) {

            $.ajax({

                url: url + 'createuser',

                type: 'POST',

                data: formdata,

                cache: false,

                contentType: false,

                processData: false,

                dataType: 'json',

                success: function (response) {
//                alert(response.Data.customerId);
                console.log(response);

                    if (response.Responsecode == 200) {

                        swal("Congrats!", response.Message, "success");



                     //   goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });

        }

    });

    function goback() {

        window.location.replace(url + 'users/show');
    }

//    function getAccess() {
//        var data = [];
//        $("input:checkbox[name=type]:checked").each(function () {
//            data.push($(this).val());
//        });
//        console.log(data);
//    }

</script>
