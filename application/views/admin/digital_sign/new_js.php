<script>
    var url = '<?php echo base_url(); ?>';
    $('#digital-sign-form').on('submit', function (e) {
        e.preventDefault();

    var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        formdata.append('userid',userid);
        var amount = servicecharges.get('2');
        
        if (returnVal) {
            if(check_balance(userid,amount)){
            $.ajax({

                url: url + 'createdigital',

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
        }else{
                 window.open(url+ 'wallet','_blank');
                // window.location.replace(url + 'wallet');
             }

        }

    });

    function goback() {

        window.location.replace(url + 'digital_sign/show');
    }


</script>
