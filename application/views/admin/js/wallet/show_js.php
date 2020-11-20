<script>
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

bPaginate: $('tbody tr').length > 5,

order: [],

columnDefs: [{orderable: false, targets: []}],

dom: 'Bfrtip',

buttons: ['copy', 'csv', 'excel', 'pdf'],

destroy: true

});
        }
    });
}
function load_user_balance(){
    $.ajax({
        url:'<?php echo base_url('/userbalances');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = '';
            if(response.Data !=null){
                var data = response.Data;
                var show = `#`;
               for(var i=0;i<data.length;i++){
                   if(data[i].balance > 0){
                       show = `<a href="#" onclick="update_balance(`+data[i].userid+`)" title="Deduct Amount"><i class="fa fa-info-circle text-info"></i></a>`;
                   }else{
                       show = `#`;
                   }
                   options += ` <tr class="bg-blue">
                                                                    <td  class="pt-3"> <span class="fa fa-user mr-1"></span> ` +data[i].firstname+` `+data[i].lastname+`</td>

                                                                    <td  class="pt-3">`+data[i].contact+`</td>
                                                                    <td  class="pt-3">`+data[i].role+`</td>
                                                                    <td  class="pt-3">  ₹ ` +data[i].balance+` </td>
                                                                    <td  class="pt-3" style="width:5%">`+show+`</td>

                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>`;
        
                                                                   
               }
            }
           
           $('#wallet_user_data').html(options);
           $('#user_w').dataTable({

searching: true,

retrieve: true,

bPaginate: $('tbody tr').length > 5,

order: [],

columnDefs: [{orderable: false, targets: []}],

dom: 'Bfrtip',

buttons: ['copy', 'csv', 'excel', 'pdf'],

destroy: true

});
        }
    });
}
load_balance();
load_transaction();
load_user_balance();

function update_balance(userid){
    $('#statusModal').modal('toggle');
}
</script>