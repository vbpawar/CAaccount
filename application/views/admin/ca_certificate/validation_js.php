<script>
//"use strict";
//var x;
//x = 3.14;


function validChecker(){
    var errorMsg='';
    var status=true;
    var scrl = $(document).scrollTop(100)
    
    if($('#pan_name').val()==''){
        errorMsg +='<span id="panError" style="color:red;">*Please Enter Name as per Pan</span><br>'
        status=false;
        
        
    }
    if($('#pan_number').val()==''){
        errorMsg +='<span id="panNoError" style="color:red;">*Please Enter Pan No.</span><br>'
        status=false;
        
    }
    if($('#aadhar_name').val()==''){
        errorMsg +='<span id="adharerr" style="color:red;">*Please Enter Name as per Adhar</span><br>'
        status=false;
        
    }
    if($('#aadhar_number').val()==''){
        errorMsg +='<span id="adharnumerr" style="color:red;">*Please Enter 12 digit Adhar Number</span><br>'
        status=false;
        
    }
    if($('#contact_number').val()==''){
        errorMsg +='<span id="contacterr" style="color:red;">*Please Enter 10 Digit Mobile Number</span><br>'
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
$('#aadhar_name').keyup(function () {
        $('#adharerr').empty();
    });
    $('#aadhar_number').keyup(function () {
        $('#adharnumerr').empty();
    });

    $('#contact_number').keyup(function () {
        $('#contacterr').empty();
    });

</script>