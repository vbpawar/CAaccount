<script>
    $('#proprietorship').show();
    $('#partnerhip').hide();
    $('#pvtltd').hide();
    $('#ppl').hide();
    $('#rentAgree').hide();
    $('#rentAgree1').hide();
    $('#rentAgree2').hide();
    $('#rentAgree3').hide();
    $('#partnerhip').hide();
    $('#Partners_director').hide();
//bussiness type change then appear new tab
    $('#bussinessType').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value == 1) {
            $('#proprietorship').show();
            $('#partnerhip').hide();
            $('#Partners_director').hide();
        } else if (value == 2) {
            $('#proprietorship').hide();
            $('#partnerhip').show();
            $('#Partners_director').show();
        } else if (value == 3) {
            $('#proprietorship').hide();
            $('#partnerhip').hide();
            $('#pvtltd').show();
            $('#Partners_director').show();
            $('#ppl').hide();
            $('#partnerhip').hide();
        }else if(value==4){
            $('#proprietorship').hide();
            $('#partnerhip').hide();
            $('#pvtltd').hide();
            $('#ppl').show();
            $('#Partners_director').show();
        }
    });

//Do you have rent aggrement?
$("input[name='rent']").change(function () {

        var radioValue = $("input[name='rent']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree').show();
        } else if (radioValue == 0) {
            $('#rentAgree').hide();
        }


    });
//Do you have rent aggrement? for partners
$("input[name='partnerRent']").change(function () {

        var radioValue = $("input[name='partnerRent']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree1').show();
        } else if (radioValue == 0) {
            $('#rentAgree1').hide();
        }


    });
//Do you have rent aggrement? for private
$("input[name='rentPrivate']").change(function () {

        var radioValue = $("input[name='rentPrivate']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree2').show();
        } else if (radioValue == 0) {
            $('#rentAgree2').hide();
        }


    });
//Do you have rent aggrement? for private
$("input[name='rentPPL']").change(function () {

        var radioValue = $("input[name='rentPPL']:checked").val();
        if (radioValue == 1) {
            $('#rentAgree3').show();
        } else if (radioValue == 0) {
            $('#rentAgree3').hide();
        }


    });
    
    
    
    //add parteners in table
    $('#addPartener').click(function (e) {

        var partnerName = $('#partnerName').val();
        var pAadhar = $('#pAadhar').val();
        var pPancard = $('#pPancard').val();
       
        var tableData = '';
//   alert(partnerName+' '+pMobile);
        tableData += $('#partnerTable tbody').html();
        tableData += `<tr id="r`+pAadhar+`">
                        <td>`+partnerName+`</td>
                        <td>`+pAadhar+`</td>
                        <td>`+pPancard+`</td>
                        <td><input class="" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="40px" height="40px" />
                        </td>
                        <td><input class="" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="40px" height="40px" />
                        </td>
                        <td><input class="" id="form16" name="form16" type="file" onchange="loadFile(event, 'form16pre')" />
                            <img src="<?php echo base_url('/admin_assets/img/doc_pre.png'); ?>" alt="" id="form16pre" width="40px" height="40px" />
                        </td>
                        <td>
                        <button type="button" class="btn btn-secondary btn-sm text-danger" onclick="deletePartner('`+pAadhar+`')">
                        <i class="fa fa-trash-alt" ></i>
                        </button>
                        </td>
                        </tr>`;
                            
                            $('#partnerData').html(tableData);
    });
    function deletePartner(id) {
        $('#r' + id).remove();
    }

</script>