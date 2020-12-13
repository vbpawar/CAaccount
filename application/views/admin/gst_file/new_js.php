<script>
    var url = '<?php echo base_url(); ?>';
    var flag = 1;
    $('#gst-form').on('submit', function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=servicecharges.get('8');
        if(flag == 0){
            amount=servicecharges.get('9');
        }
        formdata.append('userid',userid);
        if(check_balance(userid,amount)){
            $.ajax({
                url: url + 'GST_file_controller/add_gst_form',
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
             }else{
                 window.open(url+ 'wallet','_blank');
             }
    });
    function goback() {
        window.location.replace(url + 'loadgstfile');
    }

    $('input[type=radio][name=gst_type]').change(function() {
    if (this.value == "yes") {
        flag = 1;
        $('#proprietorship').show();
    }
    else if (this.value == 'no') {
        flag = 0;
        $('#proprietorship').hide();
    }
});
</script>
