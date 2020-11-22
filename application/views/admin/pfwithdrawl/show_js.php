<script>

    var url = '<?php echo base_url(); ?>';
    var pfWithdrawal = new Map();
    const loadList = () => {
        var userid =<?php echo $_SESSION['Data']['userid']; ?>;
        var roleid =<?php echo $_SESSION['Data']['role']; ?>;
        $.ajax({

            url: url + 'load_pf',
            type: 'get',
            data: {userid: userid, roleid: roleid},
            dataType: 'json',
            success: function (response) {

                console.log(response);
                if (response.Responsecode == 200 && response.Data != null) {

                    const count = response.Data.length;
                    for (var i = 0; i < count; i++) {
                        pfWithdrawal.set(response.Data[i].pfid, response.Data[i]);
                    }

                    showList(pfWithdrawal);
                }

            }
        });
    }
    loadList();
    const showList = serviceList => {
        $('#service').dataTable().fnDestroy();
        $('.serviceList').empty();
        var tblData = '', badge, status;
        for (let k of serviceList.keys()) {
            let services = serviceList.get(k);
            switch (services.status) {
                case '1':
                    status = '<span class="badge badge-pill badge-primary">Pending...</span>';
                    break;
                case '2':
                    status = '<span class="badge badge-pill badge-warning">Hold</span>';
                    break;
                case '3':
                    status = '<span class="badge badge-pill badge-danger">Rejected</span>';
                    break;
                case '4':
                    status = '<span class="badge badge-pill badge-success">Completed</span>';
                    break;
            }
            tblData += '<tr><td>' + services.aadhar_name + '</td>';
            tblData += '<td>' + services.pan_number + '</td>';
            tblData += '<td>' + services.aadhar_number + '</td>';
            tblData += '<td>' + services.contact_number + '</td>';
            tblData += '<td>' + services.emailid + '</td>';
            tblData += '<td>' + services.createdat + '</td>';
            tblData += '<td>' + status + '</td>';

            tblData += '<div class="table-actions">';
            tblData += `<td style="width:5%"><a href="#" onclick="editData(` + (k) + `)" title="edit details"><i class="fa fa-info-circle text-info"></i></a> `;
<?php
$data = $this->session->userdata();
if ($data['Data']['role'] == 1 || $data['Data']['role'] == 4) {
    ?>
                tblData += `&nbsp; <a href="#@" onclick="changeStatus(` + (k) + `)" title="Change Status"><i class="fa fa-edit text-success"></i></a>`;
    <?php
}
?>
            tblData += ` &nbsp; <a href="#$" onclick="documentList(` + (k) + `)" title="Document List"><i class="fa fa-file text-success"></i></a></td>`;
            tblData += '</div></tr>';


        }
//console.log(tblData);
        $('.serviceList').html(tblData);
        $('#service').dataTable({

            searching: true,
            retrieve: true,
            bPaginate: $('tbody tr').length > 10,
            order: [],
            columnDefs: [{orderable: true, targets: []}],
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf'],
            destroy: true

        });
    }

    var editData = laborid => {
        laborid = laborid.toString();
        if (pfWithdrawal.has(laborid)) {

            $('.showDiv').hide();
            var product = pfWithdrawal.get(laborid);
            ulaborid = laborid;
            details = product;
//        $('#includeBox').load('services/certificate/update'); 
            $.ajax({
                type: 'get',
                url: url + 'pf_withdrawal/update',
                dataType: 'html',
                success: function (html) {
                    // success callback -- replace the div's innerHTML with
                    // the response from the server.
                    $('#includeBox').html(html);
                }
            });
        }

    }



    function goback() {

        window.location.replace(url + 'pf_withdrawal/show');
//$('.showDiv').show();
//$('.updateDiv').hide();
    }

    $('#remarkField').hide();
    function changeStatus(id) {
        $('#pfid').val(id);
        $('#statusModal').modal('toggle');
    }


    function documentList(id) {
        $.ajax({
            url: url + 'getpfdocs',

            type: 'POST',

            data: {pfid: id},

            cache: false,

            dataType: 'json',
            success: function (response) {
                const count = response.length;
                var docTable = '';
                for (var i = 0; i < count; i++) {
                    docTable += ` <tr>
      <td>
          <a href="` + (url + 'documents/pf/' + response[i].docid + '.' + response[i].extension) + `" class="stretched-link" download>` + response[i].doctype + `</a>
      </td>
    </tr>`;
                }
                $('#documentList').html(docTable);
                $('#documentModal').modal('toggle');
            }
        });
    }



//remark field enable disable on status change 
    $('#statusRemark').change(function () {
        //Use $option (with the "$") to see that the variable is a jQuery object
        var $option = $(this).find('option:selected');
        //Added with the EDIT
        var value = $option.val();//to get content of "value" attrib
        if (value == 2 || value == 3) {
            $('#remarkField').show();
        } else {
            $('#remarkField').hide();
        }
    });


//status form submit
    $('#statusUpdateForm').on('submit', function (e) {

        e.preventDefault();

        var formdata = new FormData(this);
        $.ajax({

            url: url + 'updatestatus',

            type: 'POST',

            data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
//                alert(response.Data.customerId);
//                console.log(response);

                if (response.Responsecode == 200) {

                    swal("Congrats!", response.Message, "success");



                    goback();

                } else {

                    swal("Error!", response.Message, "success");

                }

            }

        });
    });
</script>
