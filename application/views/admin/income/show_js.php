<script>

    var url = '<?php echo base_url(); ?>';
    var pfWithdrawal = new Map();
    const loadList = () => {
        var userid =<?php echo $_SESSION['Data']['userid']; ?>;
        var roleid =<?php echo $_SESSION['Data']['role']; ?>;
        $.ajax({

            url: url + 'loadincome',
            type: 'get',
            data: {userid: userid, roleid: roleid},
            dataType: 'json',
            success: function (response) {

                console.log(response);
                if (response.Responsecode == 200 && response.Data != null) {

                    const count = response.Data.length;
                    for (var i = 0; i < count; i++) {
                        pfWithdrawal.set(response.Data[i].inid, response.Data[i]);
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
            console.log(services);
            switch (services.status) {
                case '1':
                    status = '<span class="badge badge-pill badge-primary">Pending...</span>';
                    break;
                case '2':
                    status = '<button class="badge badge-pill badge-warning" onclick="returnStatus(' + (k) + ',2)">Hold</button>';
                    break;
                case '3':
                    status = '<button class="badge badge-pill badge-danger" onclick="returnStatus(' + (k) + ',3)">Rejected</button>';
                    break;
                case '4':
                    status = '<button class="badge badge-pill badge-success" onclick="returnStatus(' + (k) + ',4)">Completed</button>';
                    break;
            }
            tblData += '<tr><td>' + services.firstname+' '+services.lastname + '</td>';
            tblData += '<td>' + services.aadhar_name + '</td>';
            tblData += '<td>' + services.aadhar_number + '</td>';
            tblData += '<td>' + services.contact_number + '</td>';
            tblData += '<td>' + services.emailid + '</td>';
            tblData += '<td>' + services.createdat + '</td>';
            tblData += '<td>' + status + '</td>';

            tblData += '<div class="table-actions">';
            tblData += `<td style="width:5%"><a href="#" onclick="editData(` + (k) + `)" title="edit details"><i class="fa fa-info-circle text-info"></i></a> `;
<?php
$data = $this->session->userdata();
if (($data['Data']['role'] == 1 || $data['Data']['role'] == 4)) {
    ?>
                if (services.status == '1' || services.status == '2') {
    //    alert(services.status);
                    tblData += `&nbsp; <a href="#@"  onclick="changeStatus(` + (k) + `)" title="Change Status"><i class="fa fa-edit text-success"></i></a>`;
                }
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
                url: url + 'income/update',
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

        window.location.replace(url + 'income');
//$('.showDiv').show();
//$('.updateDiv').hide();
    }

    $('#remarkField').hide();
    function changeStatus(id) {
        var temp=pfWithdrawal.get(id.toString());
        $('#id').val(id);
         $('#digital_amount').val(servicecharges.get('6'));
        $('#digital_uid').val(temp.userid);
        $('#statusModal').modal('toggle');
    }


    function documentList(id) {
        $.ajax({
            url: url + 'getincomedocs',

            type: 'POST',

            data: {id: id},

            cache: false,

            dataType: 'json',
            success: function (response) {
                const count = response.length;
                var docTable = '';
                if(count>0){
                for (var i = 0; i < count; i++) {
                    docTable += ` <tr>
      <td>
          <a href="` + (url + 'documents/income/' + response[i].docid + '.' + response[i].extension) + `" class="stretched-link" download>` + response[i].doctype + `</a>
      </td>
    </tr>`;
                }
                }else{
                   docTable +=`<tr><td>No Attachment found!</td></tr>`; 
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
        if (value == 2 || value == 3 || value == 4) {
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

            url: url + 'update_income_status',

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


    function returnStatus(id,st) {
        $.ajax({

            url: url + 'get_income_remarks',
            type: 'post',
            data: {rowid: id},
            dataType: 'json',
            success: function (response) {

                console.log(response);
                var dateTime = '';
                var status='';
                switch (st) {
                
                case 2:
                    status = 'Hold';
                    break;
                case 3:
                    status = 'Rejected';
                    break;
                case 4:
                    status = 'Completed';
                    break;
            }
            var pfid=id.toString();
            var product = pfWithdrawal.get(pfid);
                const count = response.length;
                var tableData = `<tr><td>`+status+` On:</td><td> <span id="dateTime"></sapn></td></tr>`;
                 tableData += `<tr><td>Remark:</td><td rowspan="2">`+product.remark+`</td></tr>`;
                for (var i = 0; i < count; i++) {
                  
                    tableData += `<tr><td colspan="2" align="center">
                <a href="` + (url + 'documents/remarks/' + response[i].remarkid + '.' + response[i].extension) + `" class="stretched-link" download>Attachment` + i + `</a>                
                    </td></tr>`;
                }
                dateTime = product.updatedat;
                $('#remarkList').html(tableData);
                $('#dateTime').text(dateTime);
                $('#remarkModal').modal('toggle');

            }
        });
    }
</script>
