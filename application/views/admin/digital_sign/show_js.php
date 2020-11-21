<script>
    var url = '<?php echo base_url(); ?>';
    var digitalSign = new Map();

    const loadList = () => {

        $.ajax({

            url: url + 'load_digital',

            type: 'get',

            dataType: 'json',

            success: function (response) {

                console.log(response);
                if (response.Responsecode == 200 && response.Data != null) {

                    const count = response.Data.length;

                    for (var i = 0; i < count; i++) {

                        digitalSign.set(response.Data[i].did, response.Data[i]);

                    }

                    showList(digitalSign);

                }

            }

        });
    }
    loadList();


    const showList = serviceList => {
        $('#service').dataTable().fnDestroy();

        $('.serviceList').empty();

        var tblData = '', badge;

        for (let k of serviceList.keys()) {

            let services = serviceList.get(k);
            tblData += '<tr><td>' + services.aadhar_name + '</td>';
            tblData += '<td>' + services.pan_number + '</td>';
            tblData += '<td>' + services.aadhar_number + '</td>';
            tblData += '<td>' + services.contact_number + '</td>';
            tblData += '<td>' + services.emailid + '</td>';
            tblData += '<td>' + services.createdat + '</td>';
            tblData += '<td>' + services.status + '</td>';

            tblData += '<div class="table-actions">';
                tblData += `<td style="width:5%"><a href="#" onclick="editData(` + (k) + `)" title="edit details"><i class="fa fa-info-circle text-info"></i></a> `;
                <?php
                $data = $this->session->userdata();
                    if ($data['Data']['role'] == 1 || $data['Data']['role'] ==4) {?>
          tblData +=  `&nbsp; <a href="#@" onclick="changeStatus(` + (k) + `)" title="Change Status"><i class="fa fa-edit text-success"></i></a>`; 
                      <?php  
                    }
                ?>
              tblData +=` &nbsp; <a href="#$" onclick="documentList(` + (k) + `)" title="Document List"><i class="fa fa-file text-success"></i></a></td>`;
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

        if (digitalSign.has(laborid)) {

            $('.showDiv').hide();

            var product = digitalSign.get(laborid);

            ulaborid = laborid;
            details = product;
//        $('#includeBox').load('services/certificate/update'); 
            $.ajax({
                type: 'get',
                url: url+'digital_sign/update',
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

        window.location.replace(url + 'services/certificate/show');
//$('.showDiv').show();
//$('.updateDiv').hide();
    }

</script>
<?php $this->view('admin/js/comman_modal_js'); ?>