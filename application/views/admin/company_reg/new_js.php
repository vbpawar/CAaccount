<script>

    $("#addPartner").click(function () {
        $('#directorError').empty();
        var dName = $('#dName').val();
        var dContact = $('#dContact').val();
        var dEmail = $('#dEmail').val();
        var dEducation = $('#dEducation').val();
        var shareholding = $('#shareholding').val();
        var residentialaddress = $('#residentialaddress').val();
        var pPhotodoc = $('#pPhotodocpre').attr('src');
        var pAadhardoc = $('#pAadhardocpre').attr('src');
        var pPandoc = $('#pPandocpre').attr('src');
        var pSahidoc = $('#pSahidocpre').attr('src');
        var pbankstdoc = $('#pbankstdocpre').attr('src');
        var pEbilldoc = $('#pEbilldocpre').attr('src');
        var error = '';
        var tableData = '';
        if (dName != '' && dContact != '' && shareholding > 0 && residentialaddress != '' && dEducation != '') {
            $('#rawRow').remove();
            tableData += $('#directorList').html();
//            var count = $('#directorTable >tbody >tr').length;
            if (!$('#r' + dContact).length)
            {
                tableData += `<tr id="r` + dContact + `">
                            <td>` + dName + `</td>
                            <td>` + dContact + `</td>
                            <td>` + dEmail + `</td>
                            <td>` + dEducation + `</td>
                            <td>` + shareholding + `</td>
                            <td>` + residentialaddress + `</td>
                            <td><a href="` + pPhotodoc + `" download>
                                 Download
                                 </a>
                            </td>
                            <td><a href="`+ pAadhardoc +`" download>
                                 Download
                                 </a>
                            </td>
                            <td><a href="`+ pPandoc +`" download>
                                 Download
                                 </a>
                            </td>
                            <td><a href="`+ pSahidoc +`" download>
                                 Download
                                 </a>
                            </td>
                            <td><a href="`+ pbankstdoc +`" download>
                                 Download
                                 </a>
                            </td>
                            <td><a href="`+ pEbilldoc +`" download>
                                 Download
                                 </a>
                            </td>
                            <td>
<a href="#directorTable" class="btn btn-secondary btn-sm text-danger" onclick="rowDelete('` + dContact + `')" title="delete">
                        <i class="fa fa-trash-alt" aria-hidden="true"></i>
                        </a>
                            </td>
                         </tr>`;


                $('#directorList').html(tableData);
            }
        } else {
            if (dName == '') {
                error += '<span class="error">* Please Enter Director Name</span><br>';
            }
            if (dContact == '') {
                error += '<span class="error">* Please Enter Contact Number</span><br>';
            }
            if (dEducation == '') {
                error += '<span class="error">* Please Enter Education Qualification</span><br>';
            }
            if (shareholding == 0) {
                error += '<span class="error">* Please Enter Shareholding Percentage</span><br>';
            }
            if (residentialaddress == '') {
                error += '<span class="error">* Please Enter Residential Address</span><br>';
            }

            $('#directorError').html(error);
        }

    });

    function rowDelete(contact) {
        $('#r' + contact).remove();
    }

</script>
