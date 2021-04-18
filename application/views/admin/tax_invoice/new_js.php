<script>
    var url = '<?php echo base_url(); ?>';
//alert('ok');

    function geInvoiceDetails() {

        var data = [];
        var productName;
        var hsn;
        var quantity;
        var rate;
        var amount;
        var gst;
        var cgst;
        var sgst;
        var totalAmount;
        var i = 0;
        $('#billTable tbody>tr').each(function (index, tr) {
            var tds = $(tr).find('td');
            productName = tds[0].textContent;
            hsn = tds[1].textContent;
            quantity = tds[2].textContent;
            rate = tds[3].textContent;
            amount = tds[4].textContent;
            gst = tds[5].textContent;
            cgst = tds[6].textContent;
            sgst = tds[7].textContent;
            totalAmount = tds[8].textContent;
            data[i++] = {
                pname: productName,
                hsn: hsn,
                quantity: quantity,
                rate: rate,
                amount: amount,
                gst: gst,
                cgst: cgst,
                sgst: sgst,
                total_amount: totalAmount
            }
        });
        return data;
    }

    $('#taxinvoice-form').on('submit', function (e) {
        
        e.preventDefault();
      var  invoiceData = geInvoiceDetails();
//      console.log('@@@@@@@array@@@@@@');
//      console.log(invoiceData);
     var jsonString= JSON.stringify(invoiceData);
//    console.log('#####String#####');
    console.log(jsonString);
  var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=servicecharges.get('12');
        formdata.append('userid',userid);
        formdata.append('invoicedata',jsonString);

        if (returnVal) {
             if(check_balance(userid,amount)){
            $.ajax({

                url: url + 'add_invoice',

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

                        swal("Congrats!", response.Message, "success");



                        goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });
             }else{
                 window.open(url+ 'wallet','_blank');
                // window.location.replace(url + 'wallet');
             }

        }

    });

    function goback() {

        window.location.replace(url + 'taxInvoice');
    }


</script>
