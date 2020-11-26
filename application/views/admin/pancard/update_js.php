<script>

    function loadDetails(product) {
//    $('#pic_productId').val(product.testimonialId);


        $('#userid').val(product.userid);
         $('#appType').val(product.appType);
         $('#category').val(product.category);
         $('#aadharnumber').val(product.aadharnumber);
         $('#nameasperadhar').val(product.nameasperadhar);
         $('#title').val(product.title);
         $('#lname').val(product.lname);
         $('#fname').val(product.fname);
         $('#mname').val(product.mname);
         $('#dob').val(product.dob);
         $('#gender').val(product.gender);
         $('#contact').val(product.contact);
         $('#emailid').val(product.emailid);
         $('#fatherlname').val(product.fatherlname);
         $('#fatherfname').val(product.fatherfname);
         $('#fathermname').val(product.fathermname);
         $('#motherlname').val(product.motherlname);
         $('#motherfname').val(product.motherfname);
         $('#mothermname').val(product.mothermname);
         $('#sourceofincome').val(product.sourceofincome);
         $('#rflat').val(product.rflat);
         $('#rnameofpremise').val(product.rnameofpremise);
         $('#rstreet').val(product.rstreet);
         $('#rarea').val(product.rarea);
         $('#rtown').val(product.rtown);
         $('#rcountry').val(product.rcountry);
         $('#rstate').val(product.rstate);
         $('#rpincode').val(product.rpincode);
         $('#onameofoffice').val(product.onameofoffice);
         $('#oflat').val(product.oflat);
         $('#onameofpremise').val(product.onameofpremise);
         $('#oroad').val(product.oroad);
         $('#oarea').val(product.oarea);
         $('#otown').val(product.otown);
         $('#ocountry').val(product.ocountry);
         $('#ostate').val(product.ostate);
         $('#opincode').val(product.opincode);
         $('#countrycode').val(product.countrycode);
         $('#stdcode').val(product.stdcode);
         $('#mobile').val(product.mobile);
         $('#semailid').val(product.semailid);

        




    }

    loadDetails(details);

    $('#wizard').on('submit', function (e) {

        e.preventDefault();

//    var returnVal = $("#caCertificateForm").valid();

        if (true) {
            var formdata = new FormData(this);
            formdata.append('userid', 1);
            $.ajax({

                url: url + 'PanCard/updatepanacard',

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