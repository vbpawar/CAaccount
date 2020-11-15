<script>
function loadroles(){
    $.ajax({
        url:'<?php echo base_url('/getroles');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = '';
            
           if(response.Responsecode==200){
            var data = response.Data;
               for(var i=0;i<data.length;i++){
                options += "<option value="+data[i].roleid+">"+data[i].role+"</option>";
               }
               
           }
           $('#roleid').html(options);
        }
    });
}

function loadaccess(){
    $.ajax({
        url:'<?php echo base_url('/activities');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            var options = ``;
            
           if(response.Responsecode==200){
            var data = response.Data;
               for(var i=0;i<data.length;i++){
                options += ` <div class="form-check col-sm-4" > <input class="form-check-input" type="checkbox" value="`+data[i].activityid+`">
                                                        <label class="form-check-label">
                                                            `+data[i].activity+`
                                                        </label>  </div>`;
               }
               
           }
         $('.role_access').html(options);
        }
    });
}
loadroles();
loadaccess();
</script>