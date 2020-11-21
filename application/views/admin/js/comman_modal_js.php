<script>
$('#remarkField').hide();
function changeStatus(id) {
    $('#statusModal').modal('toggle');
}


function documentList(id) {
    $('#documentModal').modal('toggle');
}



//remark field enable disable on status change 
$('#statusRemark').change(function() {
     //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value== 2 || value==3) {
            $('#remarkField').show();
        } else {
            $('#remarkField').hide();
        }
});

</script>