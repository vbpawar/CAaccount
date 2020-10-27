<script>
    var url = '<?php echo base_url(); ?>';
    var balancesheetList = new Map();

    const loadList = () => {

        $.ajax({

            url: url + 'BalancedProjectSheet/getsheets',

            type: 'get',

            dataType: 'json',

            success: function (response) {

                if (response.Responsecode == 200 && response.Data != null) {

                    const count = response.Data.length;

                    for (var i = 0; i < count; i++) {

                        balancesheetList.set(response.Data[i].projectedid, response.Data[i]);

                    }

                    showList(balancesheetList);

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
            tblData += '<tr><td>' + services.nameasperadhar + '</td>';
            tblData += '<td>' + services.pancardnumber + '</td>';
            tblData += '<td>' + services.DOB + '</td>';
            tblData += '<td>' + services.mobilenumber + '</td>';
            tblData += '<td>' + services.emailid + '</td>';
            tblData += '<td>' + services.projectAmt + '</td>';
            tblData += '<td>' + services.shopAddress + '</td>';
            tblData += '<td>' + services.homeAddress + '</td>';

            tblData += '<div class="table-actions">';

            tblData += '<td style="width:5%"><a href="#" onclick="editData(' + (k) + ')" title="edit details"><i class="fa fa-edit text-success"></i></a> &nbsp;&nbsp;&nbsp; <a href="#!" onclick="deleteData(' + (k) + ')" title="Delete"><i class="fa fa-trash text-danger"></i></a></td>';

            tblData += '</div></tr>';

        }
//console.log(tblData);
        $('.serviceList').html(tblData);

        $('#service').dataTable({

            searching: true,

            retrieve: true,

            bPaginate: $('tbody tr').length > 10,

            order: [],

            columnDefs: [{orderable: true, targets: [0, 1, 2, 3, 4, 5, 6, 7]}],

            dom: 'Bfrtip',

            buttons: ['copy', 'csv', 'excel', 'pdf'],

            destroy: true

        });

    }

    var editData = laborid => {

        laborid = laborid.toString();

        if (balancesheetList.has(laborid)) {

            $('.showDiv').hide();

            var product = balancesheetList.get(laborid);

            ulaborid = laborid;
            details = product;
//        $('#includeBox').load('services/certificate/update'); 
            $.ajax({
                type: 'get',
                url: url+'services/balancesheet/update',
                dataType: 'html',
                success: function (html) {
                    // success callback -- replace the div's innerHTML with
                    // the response from the server.
                    $('#includeBox').html(html);
                }
            });

        }

    }
    
    
    var deleteData = laborid =>{
    laborid = laborid.toString();
    var product = caCertificate.get(laborid);
    var name=product.nameasperadhar;
    var msg='Do you want to delete '+name+' Information ?';
    
    var alert1 = '';
    alert1 += '<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    alert1 += '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">';
    alert1 += '<h5 class="modal-title" id="exampleModalLabel">Delete Alert!</h5>';
    alert1 += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    alert1 += '<div class="modal-body">' + msg + '</div>';
    alert1 += '<div class="modal-footer"><button type="button" onclick="deletePermission(' + laborid + ')"  class="btn btn-primary">Yes</button><button type="button" class="btn btn-secondary" data-dismiss="modal">No</button></div></div></div></div>';

    $('#deleteAlert').html(alert1);
    $('#deleteModal').modal().show();

}

function deletePermission(laborid) {
    $('#deleteModal').modal('hide');
      $.ajax({

            url: url + 'Certificate_service/removecertificate',

            type: 'POST',

            data:{certid:laborid},

//            cache: false,
//
//            contentType: false,
//
//            processData: false,

            dataType: 'json',

            success: function(response) {

                console.log(response.userId);

                if (response.Responsecode == 200) {

                    swal({

                        position: 'top-end',
//
                        icon: 'success',

                        title: response.Message,

                        Button: false,

                        timer: 1500

                    })

//                    var productid = response.certid;
//                    productid = productid.toString();
//
//                    if(ca.has(productid)){
//
//                        customer.delete(productid);
//
//                    }
//
//
//                    showtest(customer);

                    goback();

                } else {

                    swal({

                        position: 'top-end',

                        icon: 'warning',

                        title: response.Message,

                        Button: false,

                        timer: 1500

                    })

                }

            }

        });
}

function goback() {

        window.location.replace(url + 'services/certificate/show');
//$('.showDiv').show();
//$('.updateDiv').hide();
    }

</script>
