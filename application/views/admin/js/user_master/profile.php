<script>
var url = '<?php echo base_url(); ?>';
 function loadDetails() {
    var userid = <?php echo $_SESSION['Data']['userid']?>; 
    $.ajax({
                url: url + 'User/findUser',
                type: 'GET',
                dataType: 'json',
                data:{userid:userid},
                success: function (response) {
              
                    if (response.Responsecode == 200) {
                        var product = response.Data;
                        $('#firstname').val(product.firstname);
$('#lastname').val(product.lastname);
$('#upassword').val(product.upassword);
$('#password').val(product.upassword);
$('#country').val(product.country);
$('#ustate').val(product.ustate);
$('#city').val(product.city);
$('#pincode').val(product.pincode);
$('#uaddress').val(product.uaddress);
                    } else {
                        swal("Error!", response.Message, "success");
                    }
                }
            });
}

loadDetails();
    
$('#profileForm').on('submit', function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('userid',<?php echo $_SESSION['Data']['userid']; ?>);
            $.ajax({
                url: url + 'updatepassword',
                type: 'POST',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
               if(response !=null){
                    if (response.Responsecode == 200) {
                        swal("Congrats!", response.Message, "success");
                    } else {
                        swal("Error!", response.Message, "warning");
                    }
                }
            }
            });
    });
</script>
