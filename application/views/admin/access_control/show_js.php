<script>
    var url = '<?php echo base_url(); ?>';
    var userList = new Map();
    var userAccess=null;
    const loadList = () => {

        $.ajax({

            url: url + 'getusers',

            type: 'get',

            dataType: 'json',

            success: function (response) {
//                console.log('===============response===================');
//                console.log(response);
                if (response.Responsecode == 200 && response.Data != null) {

                    const count = response.Data.length;
                    userAccess=response.access;
                    
                    for (var i = 0; i < count; i++) {

                        userList.set(response.Data[i].userid, response.Data[i]);
//                            console.log(userList); 
                    }

                    showList(userList);

                }

            }

        });
    }
    loadList();


    const showList = serviceList => {
        $('#service').dataTable().fnDestroy();

        $('.serviceList').empty();

        var tblData = '', badge,flag=false,action=null;
        var session_user = '<?php echo $_SESSION['Data']['role'];?>';
        if(session_user =='2'){
            flag = true;
        }
        for (let k of serviceList.keys()) {

            let services = serviceList.get(k);
            if(flag){
                action = '<td style="width:5%"></td>';
            }   else{
                action = '<td style="width:5%"><a href="#" onclick="editData(' + (k) + ')" title="edit details"><i class="fa fa-edit text-success"></i></a> <a href="#!" onclick="deleteData(' + (k) + ')" title="Active/Inactive"><i class="fa fa-info text-danger"></i></a></td>';
                //  <a href="#!" onclick="deleteData(' + (k) + ')" title="Delete"><i class="fa fa-trash text-danger"></i></a></td>';
            }
            if(services.isactive=='1'){
                status = '<span class="badge badge-pill badge-primary">Active</span>';
            }else{
                status = '<button class="badge badge-pill badge-danger">InActive</button>';
            }
            tblData += '<tr><td>' + services.firstname+" "+services.lastname + '</td>';
            tblData += '<td>' + services.contact + '</td>';
            tblData += '<td>' + services.emailid + '</td>';
            tblData += '<td>' + services.role + '</td>';
            tblData += '<td>' + status + '</td>';
            tblData += '<div class="table-actions">';
            tblData += action;
            tblData += '</div></tr>';
        }
//console.log(tblData);
        $('.serviceList').html(tblData);

        $('#service').dataTable({

            searching: true,

            retrieve: true,

            bPaginate: $('tbody tr').length > 10,

            order: [],

            columnDefs: [{orderable: true, targets: [0,1,2,3,4]}],

            dom: 'Bfrtip',

            buttons: ['copy', 'csv', 'excel', 'pdf'],

            destroy: true

        });

    }

    var editData = laborid => {

        laborid = laborid.toString();

        if (userList.has(laborid)) {

            $('.showDiv').hide();

            var product = userList.get(laborid);

            ulaborid = laborid;
            details = product;
//        $('#includeBox').load('services/certificate/update'); 
            $.ajax({
                type: 'get',
                url: url+'user/update',
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
    var product = userList.get(laborid);
    var name=product.firstname+' '+product.lastname;
    var msg='Do you want to Active/Inactive '+name+' Information ?';
    
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

            url: url + 'user/activateuser',

            type: 'POST',

            data:{userid:laborid},

//            cache: false,
//
//            contentType: false,
//
//            processData: false,

            dataType: 'json',

            success: function(response) {

//                console.log(response.userId);

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

        window.location.replace(url + 'users/show');
//$('.showDiv').show();
//$('.updateDiv').hide();
    }

</script>
