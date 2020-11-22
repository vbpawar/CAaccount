<script>
//"use strict";
//var x;
//x = 3.14;


function validChecker(){
    var errorMsg='';
    var status=true;
//    var scrl = $(document).scrollTop(100)
    
    
    if($('#service').val()==''){
        errorMsg +='<span id="serviceError" style="color:red;">*Please Enter Service Name</span><br>'
        status=false;
        
        
    }
    if($('#charges').val()==''){
        errorMsg +='<span id="chargesError" style="color:red;">*Please Enter Service Charge</span><br>'
        status=false;
        
        
    }
    
    $('#error-container').html(errorMsg);
    return status;
}

$('#charges').keyup(function () {
        $('#chargesError').empty();
    });
$('#service').keyup(function () {
        $('#serviceError').empty();
    });

</script>