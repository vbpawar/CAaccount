<script>
    var url = '<?php echo base_url(); ?>';

  var serviceCharges= <?php echo json_encode($_SESSION['serviceCharges']);?>;

    $('#pf-withdrawl-form').on('submit', function (e) {

        e.preventDefault();

    var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=serviceCharges[0]['charges'];
        formdata.append('userid',userid);

        if (returnVal) {
             if(check_balance(userid,amount)){
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
             }else{
                 window.open(url+ 'wallet','_blank');
                // window.location.replace(url + 'wallet');
             }

        }

    });

    function goback() {

        window.location.replace(url + 'pf_withdrawal/show');
    }


</script>
