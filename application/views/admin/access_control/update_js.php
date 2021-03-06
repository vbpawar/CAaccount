<script>

    function loadDetails(product) {

        $('#userid').val(product.userid);
        $('#roleid').val(product.roleid);
        $('#emailid').val(product.emailid);
        $('#firstname').val(product.firstname);
        $('#lastname').val(product.lastname);
        $('#password').val(product.upassword);
        $('#upassword').val(product.upassword);
        $('#contact').val(product.contact);
        $('#country').val(product.country);
        $('#ustate').val(product.ustate);
        $('#city').val(product.city);
        $('#pincode').val(product.pincode);
        $('#uaddress').val(product.uaddress);

        //


    }

//load roles
    function loadroles() {
        $.ajax({
            url: '<?php echo base_url('/getroles'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var options = '';

                if (response.Responsecode == 200) {
                    var data = response.Data;
                    for (var i = 0; i < data.length; i++) {
                        options += "<option  value=" + data[i].roleid + ">" + data[i].role + "</option>";
                    }

                }
                $('#roleid').html(options);
            }
        });
    }
//    loadroles();
    loadDetails(details);
    checkedAccess(details.userid);

//checked box checked with access control
    function checkedAccess(userid) {

        $.ajax({
            url: '<?php echo base_url('/activities'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var options = ``;

                if (response.Responsecode == 200) {
                    var data = response.Data;
                    for (var i = 0; i < data.length; i++) {
//                        console.log(data[i].activityid + " activities=" + userAccess[i]['activityid']);
//                        console.log(userAccess[i]['userid'] + " user=" + userid);


                        ////////////////////
                        options += ` <div class="form-check col-sm-4" > <input class="form-check-input " id="activity` + data[i].activityid + `"  type="checkbox" value="` + data[i].activityid + `">
                                                        <label class="form-check-label">
                                                            ` + data[i].activity + `
                                                        </label>  </div>`;

                    }

                }
                $('.role_access').html(options);
                for (var j = 0; j < userAccess.length; j++) {
                    if (userAccess[j]['userid'] == userid) {
                        document.getElementById("activity" + userAccess[j]['activityid']).checked = true;
                    }
                }
            }
        });
    }

     $('#accessControlForm').on('submit', function (e) {
        e.preventDefault();
        var array = []
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

        for (var i = 0; i < checkboxes.length; i++) {
            array.push(checkboxes[i].value)
        }
        var formdata = new FormData(this);
            formdata.append('access',array);
        if (true) {

            $.ajax({

                url: url + 'updateprofile',

                type: 'POST',

                data: formdata,

                cache: false,

                contentType: false,

                processData: false,

                dataType: 'json',

                success: function (response) {
                    if (response.Responsecode == 200) {

                        swal("Congrats!", response.Message, "success");



                        goback();

                    } else {

                        swal("Error!", response.Message, "success");

                    }

                }

            });

        }

    });

    function goback() {
        window.location.replace(url + 'users/show');
// $('.showDiv').show();
// $('.updateDiv').hide();
    }
</script>