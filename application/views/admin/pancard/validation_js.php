<script>
$('#app_type').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value== 2) {
            $('#pandiv').show();
        } else{
            $('#pandiv').hide();
        }
    });

function validChecker(){
    var errorMsg='';
    var status=true;
    
    return status;
}


</script>