<script>
    var url = '<?php echo base_url(); ?>';
//alert('ok');

    function getPartnersData() {

        var data = [];
        var name;
        var aadharno;
        var panno;
        var mobileno;
        var emailid;
        var i = 0;
        $('#partnerTable tbody>tr').each(function (index, tr) {
            var tds = $(tr).find('td');
            name = tds[0].textContent;
            aadharno = tds[1].textContent;
            panno = tds[2].textContent;
            mobileno = tds[3].textContent;
            emailid = tds[4].textContent;
            data[i++] = {
                p_partner_name: name,
                p_aadhar_number: aadharno,
                p_pan_number: panno,
                p_contact_number: mobileno,
                p_emailid: emailid
            }
        });
        return data;
    }

    $('#incomeForm').on('submit', function (e) {
        e.preventDefault();
      var  patnersData = getPartnersData();
     var jsonString= JSON.stringify(patnersData);
//console.log(patnersData);
  var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=servicecharges.get('6');
        formdata.append('userid',userid);
        formdata.append('partnerdata',jsonString);

        if (returnVal) {
             if(check_balance(userid,amount)){
            $.ajax({

                url: url + 'createincome',

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

        window.location.replace(url + 'income');
    }


</script>