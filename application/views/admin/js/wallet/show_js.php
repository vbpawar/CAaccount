<script>
function load_balance(){
    $.ajax({
        url:'<?php echo base_url('/loadbalance');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response.Data.balance);
            var options = '';
            
        //    if(response.Responsecode==200){
        //     var data = response.Data;
        //        for(var i=0;i<data.length;i++){
        //         options += "<option value="+data[i].roleid+">"+data[i].role+"</option>";
        //        }
               
        //    }
           $('#wallet_amt').html(response.Data.balance);
        }
    });
}
function load_transaction(){
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
                options += `<tr>
                <td>`+data[i].transaction_type+`</td>
                <td>`+data[i].amount+`</td>
                <td>`+data[i].transactiondate+`</td>
                </tr>`;
               }
            }
           
           //$('#wallet_amt').html(response.Data.balance);
        }
    });
}
load_balance();
load_transaction();
</script>