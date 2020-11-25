<script>
var userList = new Map();
var global_user = null;
function load_balance(){
    $.ajax({
        url:'<?php echo base_url('/loadbalance');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = '';
            var amount = 0.00;
           if(response.Data.balance!=null){
            var data = response.Data;
            amount = response.Data.balance;
           }
           $('#wallet_amt').html(amount);
        }
    });
}

function load_transaction(){
    $.ajax({
        url:'<?php echo base_url('/loadtransaction');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = '';
            if(response.Data !=null){
                var data = response.Data;
               for(var i=0;i<data.length;i++){
                   options += ` <tr class="bg-blue">
                                                                        
                                                                    
                                                                        <td class="pt-3"> <span class="fa fa-exchange mr-1"></span> `+data[i].transaction_type+` </td>
                                                                        <td class="pt-3"><span><img src="<?php echo base_url('/admin_assets/img/phonepe.png'); ?>" ></span></td>
                                                                        <td class="pt-3">`+data[i].transactiondate+`</td>
                                                                        <td class="pt-3"> ₹ `+data[i].amount+` </td>
                                                                        <td class="pt-3"> ₹ `+data[i].message+` </td>
                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>`;
        
               }
            }
           
           $('#wallet_data').html(options);
           
           $('#w_w').dataTable({

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
    });
}
function load_user_balance(){
    userList.clear();
    $.ajax({
        url:'<?php echo base_url('/userbalances');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = '';
            if(response.Data !=null){
                var data = response.Data;
               
               for(var i=0;i<data.length;i++){
                
                userList.set(data[i].userid, data[i]);
                                                                   
               }
               showList(userList);
            }
        }
    });
}

const showList = serviceList => {
        $('#user_w').dataTable().fnDestroy();

        $('#wallet_user_data').empty();

        var options = '';
        var show = `#`;
        for (let k of serviceList.keys()) {

            let services = serviceList.get(k);
           
            if(services.balance > 0){
                       show = `<a href="#" onclick="update_balance(`+k+`)" title="Deduct Amount"><i class="fa fa-info-circle text-info"></i></a>`;
                   }else{
                       show = `#`;
                   }
                   options += ` <tr class="bg-blue">
                                                                    <td  class="pt-3"> <span class="fa fa-user mr-1"></span> ` +services.firstname+` `+services.lastname+`</td>

                                                                    <td  class="pt-3">`+services.contact+`</td>
                                                                    <td  class="pt-3">`+services.role+`</td>
                                                                    <td  class="pt-3">  ₹ ` +services.balance+` </td>
                                                                    <td  class="pt-3" style="width:5%">`+show+`</td>

                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>`;
        }

        $('#wallet_user_data').html(options);

        $('#user_w').dataTable({

            searching: true,

            retrieve: true,

            bPaginate: $('tbody tr').length > 10,

            order: [],

            columnDefs: [{orderable: true, targets: [0,1,2,3]}],

            dom: 'Bfrtip',

            buttons: ['copy', 'csv', 'excel', 'pdf'],

            destroy: true

        });

    }
load_balance();
load_transaction();
load_user_balance();

function update_balance(userid){
    userid = userid.toString();
if (userList.has(userid)) {
    global_user = userid;
    var product = userList.get(userid);
    $('#statusModal').modal('toggle');
}
}

var url = '<?php echo base_url(); ?>';
    $('#updatebalance').on('submit', function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
      formdata.append('userid',global_user);
            $.ajax({
                url: url + 'updatewallet',
                type: 'POST',
                data: formdata,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.Responsecode == 200) {
                        swal("Congrats!", response.Message, "success");
                        $('#statusModal').modal('toggle');
                        load_user_balance();
                        load_balance();
                    } else {
                        swal("Error!", response.Message, "success");
                    }
                }
            });
    });
</script>