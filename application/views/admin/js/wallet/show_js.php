<script>
function load_balance(){
    $.ajax({
        url:'<?php echo base_url('/loadbalance');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response.Data.balance);
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
function check_balance(userid,amount){
    var check = false;
    $.ajax({
        url:'<?php echo base_url('/checkbalance');?>',
        type:'POST',
        dataType:'json',
        data:{userid:userid,amount:amount},
        async:false,
        success:function(response){
           if(response.Responsecode==200){
           check = true;
           }else{
               check = false;
           }
        }
    });
    return check;
}
function load_transaction(){
    if(check_balance(2,500)){
        console.log('working');
    }
    $.ajax({
        url:'<?php echo base_url('/loadtransaction');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response.Data);
            var options = '';
            if(response.Data !=null){
                var data = response.Data;
               for(var i=0;i<data.length;i++){
                   options += ` <tr class="bg-blue">
                                                                        
                                                                    
                                                                        <td class="pt-3"> <span class="fa fa-exchange mr-1"></span> `+data[i].transaction_type+` </td>
                                                                        <td class="pt-3"><span><img src="<?php echo base_url('/admin_assets/img/phonepe.png'); ?>" ></span></td>
                                                                        <td class="pt-3">`+data[i].transactiondate+`</td>
                                                                        <td class="pt-3"> <span class="fa fa-long-arrow-up mr-1"></span> ₹ `+data[i].amount+` </td>
                                                                    </tr>
                                                                    <tr id="spacing-row">
                                                                        <td></td>
                                                                    </tr>`;
        
               }
            }
           
           $('#wallet_data').html(options);
        }
    });
}
load_balance();
load_transaction();
</script>