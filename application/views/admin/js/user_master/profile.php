<script>
    var url = '<?php echo base_url(); ?>';
$('#profileForm').on('submit', function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('userid',<?php echo $_SESSION['Data']['userid']; ?>);
            $.ajax({
                url: url + 'updateprofile',
                type: 'POST',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
//                console.log(response);
                    if (response.Responsecode == 200) {
                        swal("Congrats!", response.Message, "success");
                    } else {
                        swal("Error!", response.Message, "success");
                    }
                }
            });
    });
</script>
