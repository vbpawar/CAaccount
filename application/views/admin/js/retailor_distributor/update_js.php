<script>
function loadretailors(){
    $.ajax({
        url:'<?php echo base_url('/retailors');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response);
            var options = ``;
            
            if(response.Responsecode==200){
            var data = response.Data;
               for(var i=0;i<data.length;i++){
               options += "<option value="+data[i].userid+">"+data[i].firstname+' '+data[i].lastname+"</option>";
               }
               
           }
           $('#retailorid').html(options);
        }
    });
}

function loaddistributors(){
    $.ajax({
        url:'<?php echo base_url('/distributors');?>',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response);
            var options = ``;
            
            if(response.Responsecode==200){
            var data = response.Data;
               for(var i=0;i<data.length;i++){
               options += "<option value="+data[i].userid+">"+data[i].firstname+' '+data[i].lastname+"</option>";
               }
               
           }
           $('#distributorid').html(options);
        }
    });
}

    function loadDetails(product) {
        loadretailors();
        loaddistributors();
//    $('#pic_productId').val(product.testimonialId);
        console.log(product);
        $('#distributorid').val(product.distributorid);
        $('#retailorid').val(product.retailorid);


    }

    loadDetails(details);

    $('#distributorForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();

        if (true) {
            var formdata = new FormData(this);
            formdata.append('distretid', ulaborid);
            $.ajax({

                url: url + 'Distributor_retailors/updateretailors',

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
//                         var productid = response.Data.customerId;
//                    productid = productid.toString();
                        swal("Congrats!", response.Message, "success");
                        goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });

        }

    });


</script>