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
        var p_photodoc;
        var p_adhardoc;
        var p_pandoc;
        var i = 0;
        $('#partnerTable tbody>tr').each(function (index, tr) {
            var tds = $(tr).find('td');
            name = tds[0].textContent;
            aadharno = tds[1].textContent;
            panno = tds[2].textContent;
            emailid = tds[3].textContent;
            mobileno = tds[4].textContent;
            p_photodoc = $('#pPhoto'+aadharno).val();
            p_adhardoc = $('#pAadhar'+aadharno).val();
            p_pandoc = $('#pPan'+aadharno).val();
            data[i++] = {
                p_partner_name: name,
                p_aadhar_number: aadharno,
                p_pan_number: panno,
                p_contact_number: mobileno,
                p_emailid: emailid,
                p_photodoc: p_photodoc,
                p_adhardoc: p_adhardoc,
                p_pandoc: p_pandoc
            }
        });
        return data;
    }

    $('#gst-form').on('submit', function (e) {
        e.preventDefault();
      var  patnersData = getPartnersData();
     var jsonString= JSON.stringify(patnersData);
//console.log(patnersData);
  var returnVal = validChecker();
        var formdata = new FormData(this);
        var userid = <?php echo $_SESSION['Data']['userid'];?>;
        var amount=servicecharges.get('7');
        formdata.append('userid',userid);
        formdata.append('partnerdata',jsonString);

        if (returnVal) {
             if(check_balance(userid,amount)){
            $.ajax({

                url: url + 'creategst',

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

        window.location.replace(url + 'gst');
    }


</script>
