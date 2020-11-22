<script>
    var url = '<?php echo base_url(); ?>';
    $('#pf-withdrawl-form').on('submit', function (e) {

        e.preventDefault();

    var returnVal = validChecker();
        var formdata = new FormData(this);
        formdata.append('userid',<?php echo $_SESSION['Data']['userid'];?>);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount = 100;
        if (servicecharges.has('1')) {
        var product = servicecharges.get('1');
        amount = product.charges;
        }
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
