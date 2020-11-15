<script>
//"use strict";
//var x;
//x = 3.14;


function validChecker(){
    var errorMsg='';
    var status=true;
    
    if($('#pan_name').val()==''){
        errorMsg +='<span id="panError" style="color:red;">*Please Enter Name as per Pan</span><br>'
        status=false;
    }
    if($('#pan_number').val()==''){
        errorMsg +='<span id="panNoError" style="color:red;">*Please Enter Pan No.</span><br>'
        status=false;
    }
    $('#error-container').html(errorMsg);
    return status;
}

$('#pan_name').keyup(function () {
        $('#panError').empty();
    });
$('#pan_number').keyup(function () {
        $('#panNoError').empty();
    });

</script>