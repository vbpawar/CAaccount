<script>
   var url = "<?php echo base_url(); ?>";
function resetpassword(){
    var email = "<?php echo $_GET['key'];?>";
    var token = "<?php echo $_GET['token'];?>";
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
</script>