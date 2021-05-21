<script>
    var url = '<?php echo base_url(); ?>';
//alert('ok');

    function getPartnersData() {

        var data = [];
        var partner_name;
        var aadhar_number;
        var pan_name;
        var pan_number;
        var mobile_number;
        var emailid;
        var electricity_doc;
        var aadhar_doc;
        var pan_doc;
        var i = 0;
        $('#partnerTable tbody>tr').each(function (index, tr) {
            var tds = $(tr).find('td');
            partner_name = tds[0].textContent;
            aadhar_number = tds[1].textContent;
            pan_name = tds[2].textContent;
            pan_number = tds[3].textContent;
            emailid = tds[4].textContent;
            mobile_number = tds[5].textContent;

            electricity_doc = $('#pEbill_doc' + aadhar_number).val();
            aadhar_doc = $('#pAadhar_doc' + aadhar_number).val();
            pan_doc = $('#pPan_doc' + aadhar_number).val();


            data[i++] = {
                partner_name: partner_name,
                aadhar_number: aadhar_number,
                pan_name: pan_name,
                pan_number: pan_number,
                mobile_number: mobile_number,
                emailid: emailid,
                electricity: electricity_doc,
                aadhar: aadhar_doc,
                pan: pan_doc
            }
        });
        return data;
    }

    function gePartnersInvestment() {
        var data = [];
        var partner_name;
        var partner_invst;
        var i = 0;
        
         $('#investmentTable tbody>tr').each(function (index, tr) {
            var tds = $(tr).find('td');
            partner_name = tds[0].textContent;
            partner_invst = tds[1].textContent;

            data[i++] = {
                partner_name: partner_name,
                aadhar_number: partner_invst
            }
        });
        return data;
    }



    $('#partnershipdeed-form').on('submit', function (e) {
        e.preventDefault();
        var patnersData = getPartnersData();
        var jsonString = JSON.stringify(patnersData);
        var partnerInvstData=gePartnersInvestment();
        var invstString = JSON.stringify(partnerInvstData);
//console.log(patnersData);
        var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid']; ?>;
        var amount = servicecharges.get('15');
        formdata.append('userid', userid);
        formdata.append('partnerdata', jsonString);
        formdata.append('partnerinvestdata', invstString);

        if (returnVal) {
            if (check_balance(userid, amount)) {
                $.ajax({

                    url: url + 'add_PartnershipDeed',

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
            } else {
                window.open(url + 'wallet', '_blank');
                // window.location.replace(url + 'wallet');
            }

        }

    });

    function goback() {

        window.location.replace(url + 'partnershipDeed');
    }


</script>
