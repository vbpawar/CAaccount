<script>
   var url = "<?php echo base_url(); ?>";
function resetpassword(){
    var email = "<?php echo $_GET['key'];?>";
    var token = "<?php echo $_GET['token'];?>";
    $('#useremail').text(email);
    $.ajax({
                url: url + "LoginController/checkemailexpire",
                type: "GET",
                data: {email:email,token:token},
                dataType: "json",
                success: function (response) {
                    if (response.Responsecode == 200) {
                        if(response.Data){
                            $('#linkshow').show();
                        }else{
                            $('#linkdown').show();   
                        }
                    } else {
                        $('#linkdown').show(); 
                    }
                }
            });
}
resetpassword();

$("#resetp").on("submit", function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
            $.ajax({
                url: url + "LoginController/changepasswrd",
                type: "POST",
                data: formdata,
                dataType: "json",
                success: function (response) {
                    if (response.Responsecode == 200) {
                        window.location.href="<?php echo base_url();?>";
                    } else {
                       alert(response.Message);
                    }
                }
            });
    });
</script>