<script>
    var url = '<?php echo base_url(); ?>';


    $('#eway-form').on('submit', function (e) {

        e.preventDefault();

    // var returnVal = validChecker();
    var  invoiceData = geInvoiceDetails();

     var jsonString= JSON.stringify(invoiceData);
    console.log(jsonString);
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=servicecharges.get('13');
        formdata.append('userid',userid);
        formdata.append('invoicedata',jsonString);

        // if (returnVal) {
             if(check_balance(userid,amount)){
            $.ajax({

                url: url + 'add_bill',

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

        // }

    });

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
var igst;
var totalAmount;
var i = 0;
$('#billTable tbody>tr').each(function (index, tr) {
    var tds = $(tr).find('td');
    productName = tds[0].textContent;
    discription = tds[1].textContent;
    hsn = tds[2].textContent;
    quantity = tds[3].textContent;
    unit = tds[4].textContent;
    value = tds[5].textContent;
    gst = tds[6].textContent;
    igst = tds[7].textContent;
    cess = tds[8].textContent;
    noncess = tds[9].textContent;
    data[i++] = {
        pname: productName,
        discription: discription,
        hsn:hsn,
        quantity: quantity,
        unit: unit,
        value: value,
        gst: gst,
        igst: igst,
        advolRate: cess,
        nonAdvol: noncess
    }
});
return data;
}

    function goback() {

        window.location.replace(url + 'ewayBill');
    }


</script>
