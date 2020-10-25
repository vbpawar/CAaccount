<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);

        $('#reportid').val(product.reportid);
        $('#cost').val(product.cost);
        $('#loanamt').val(product.loanamt);
        $('#owncapital').val(product.owncapital);
        $('#noofyear').val(product.noofyear);
        $('#repayment_shedule').val(product.repayment_shedule);
        $('#lastyear_bal_sheet').val(product.lastyear_bal_sheet);

    }

    loadDetails(details);

    $('#reportForm').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();

        if (true) {
            var formdata = new FormData(this);
            formdata.append('userid', 1);
            $.ajax({

                url: url + 'Project_report/updatereport',

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