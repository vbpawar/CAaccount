<script>
    var url = '<?php echo base_url(); ?>';
   var charges = new Map();
    var loadList = () => {
$.ajax({
    url: '<?php echo base_url('/loadcharges');?>',
    type: 'get',
    dataType: 'json',
    success: function (response) {
        if (response.Responsecode == 200 && response.Data != null) {
            const count = response.Data.length;
            for (var i = 0; i < count; i++) {
                charges.set(response.Data[i].chargesid, response.Data[i]);
            }
            showList(charges);
        }

    }

});
}
loadList();
    const showList = serviceList => {
        $('#service').dataTable().fnDestroy();

        $('.serviceList').empty();

        var tblData = '', badge,tlist='';
        var roleid = <?php echo $_SESSION['Data']['role'];?>;
        for (let k of serviceList.keys()) {

            let services = serviceList.get(k);
            tlist = '';
            console.log(services);
            if(roleid=='1'){
                tlist = '<td style="width:5%"><a href="#" onclick="editData(' + (k) + ')" title="edit details"><i class="fa fa-edit text-success"></i></a> &nbsp;&nbsp;&nbsp; <a href="#!" onclick="deleteData(' + (k) + ')" title="Delete"><i class="fa fa-trash text-danger"></i></a></td>';
            }else{
                tlist = '<td style="width:5%"></td>';  
            }
            tblData += '<tr><td>' +services.servicename+'</td>';
            tblData += '<td>'+services.charges+'</td>';

            tblData += '<div class="table-actions">';

            tblData += tlist;

            tblData += '</div></tr>';

        }
//console.log(tblData);
        $('.serviceList').html(tblData);

        $('#service').dataTable({

            searching: true,

            retrieve: true,

            bPaginate: $('tbody tr').length > 10,

            order: [],

            columnDefs: [{orderable: true, targets: [0, 1, 2]}],

            dom: 'Bfrtip',

            buttons: ['copy', 'csv', 'excel', 'pdf'],

            destroy: true

        });

    }

    var editData = laborid => {

        laborid = laborid.toString();

        if (charges.has(laborid)) {

            $('.showDiv').hide();

            var product = charges.get(laborid);

            ulaborid = laborid;
            details = product;
//        $('#includeBox').load('services/certificate/update'); 
            $.ajax({
                type: 'get',
                url: url+'servicecharge/update',
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
    var product = charges.get(laborid);
    var name=product.servicename;
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

            url: url + 'removecharges',

            type: 'POST',

            data:{chargesid:laborid},

//            cache: false,
//
//            contentType: false,
//
//            processData: false,

            dataType: 'json',

            success: function(response) {


                if (response.Responsecode == 200) {

                    swal({

                        position: 'top-end',
//
                        icon: 'success',

                        title: response.Message,

                        Button: false,

                        timer: 1500

                    })

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

        window.location.replace(url + 'servicecharge');
    }

</script>
