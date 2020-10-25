<script>
    

$(function () {

$("#caCertificateForm").validate({

    ignore: [],
    rules: {

        nameasperadhar: {

            required: true,
            minlength: 2,
            maxlength: 255

        },

        pancardnumber: {

            required: true,
            minlength: 2,
            maxlength: 255

        },
        mobilenumber: {

            //                required: true, minlength: 10, maxlength: 10
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10

        },

        shopaddress: {
            required: true,
            minlength: 2,
            maxlength: 255
        }

    }

    ,
    messages: {

        nameasperadhar: {

            required: 'Enter Name as per Aadharcard',
            minlength: 'please enter more word',
            maxlength: 'length is exceed'

        },

        pancardnumber: {

            required: 'Enter PANCARD Number',
            minlength: 'please enter more word',
            maxlength: 'length is exceed'

        },
        mobilenumber: {

            required: 'Enter Mobile Number',
            minlength: 'please enter Valid Mobile Number',
            maxlength: 'please enter Valid Mobile Number'

        },

        shopaddress: {

            required: 'Enter Shop Address',
            minlength: 'please enter more word',
            maxlength: 'length is exceed'

        }

    }

});

});



</script>