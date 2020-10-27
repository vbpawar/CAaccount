<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#projectedid').val(product.projectedid);
        $('#nameasperadhar').val(product.nameasperadhar);
        $('#pancardnumber').val(product.pancardnumber);
        $('#mobilenumber').val(product.mobilenumber);
        $('#DOB').val(product.DOB);
        $('#emailid').val(product.emailid);
        $('#projectAmt').val(product.projectAmt);
        $('#shopaddress').val(product.shopAddress);
        $('#homeaddress').val(product.homeAddress);

    }

    loadDetails(details);

    $('#balancesheetForm').on('submit', function (e) {
        e.preventDefault();

//    var returnVal = $("#balancesheetForm").valid();

        if (true) {
        var formdata = new FormData(this);
        formdata.append('userid', 1);
//        alert('ok1');
//        console.log(formdata);
            $.ajax({

                url: url + 'BalancedProjectSheet/updatebill',

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

//    function goback() {
//
//        window.location.replace(url + 'services/certificate/show');
////$('.showDiv').show();
////$('.updateDiv').hide();
//    }
</script>