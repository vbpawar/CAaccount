<!--JAVASCRIPT-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url('admin_assets/js/jquery-2.1.1.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="<?php echo base_url('admin_assets/js/bootstrap.min.js'); ?>"></script>
<!--Fast Click [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/plugins/fast-click/fastclick.min.js'); ?>"></script>
<!--Jquery Nano Scroller js [ REQUIRED ]-->
<script src="<?php echo base_url('admin_assets/plugins/nanoscrollerjs/jquery.nanoscroller.min.js'); ?>"></script>
<!--Metismenu js [ REQUIRED ]-->
<script src="<?php echo base_url('admin_assets/plugins/metismenu/metismenu.min.js'); ?>"></script> 
<!--Jasmine Admin [ RECOMMENDED ]-->
<script src="<?php echo base_url('admin_assets/js/scripts.js'); ?>"></script>
<!--Switchery [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/plugins/switchery/switchery.min.js'); ?>"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/'); ?>plugins/parsley/parsley.min.js"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/'); ?>plugins/jquery-steps/jquery-steps.min.js"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/plugins/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/'); ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!--Masked Input [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/'); ?>plugins/masked-input/bootstrap-inputmask.min.js"></script>
<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/'); ?>plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
<!--Fullscreen jQuery [ OPTIONAL ]-->
<script src="<?php echo base_url('admin_assets/plugins/screenfull/screenfull.js'); ?>"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="<?php echo base_url('admin_assets/'); ?>js/demo/wizard.js"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="<?php echo base_url('admin_assets/'); ?>js/demo/form-wizard.js"></script>
<!--Demo script [ DEMONSTRATION ]-->
<script src="<?php echo base_url('admin_assets/js/demo/form-layout.js'); ?>"></script>
<!--sweet alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--DataTables [ OPTIONAL ]-->

<script src="<?php echo base_url('admin_assets/plugins/datatables/media/js/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('admin_assets/plugins/datatables/media/js/dataTables.bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('admin_assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js'); ?>"></script>



<script> //img preview code ######DON'T REMOVE ####
    var $loading = $('#loader').hide();
    $(document)
            .ajaxStart(function () {
                console.log('loader ok');
                $loading.show();

            })
            .ajaxStop(function () {
                $loading.hide();
            });


    var servicecharges = new Map();
    var loadFile = function (event, out) {
//    console.log("da")
        var output = document.getElementById(out);

        output.src = URL.createObjectURL(event.target.files[0]);
    };
    function check_balance(userid, amount) {
        var check = false;
        $.ajax({
            url: '<?php echo base_url('/checkbalance'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {userid: userid, amount: amount},
            async: false,
            success: function (response) {
                if (response.Responsecode == 200) {
                    check = true;
                } else {
                    check = false;
                }
            }
        });
        return check;
    }
    var load_service_charges = () => {
        var sCharges =<?php echo json_encode($_SESSION['serviceCharges']); ?>;
        servicecharges.clear();
        const count = sCharges.length;
        for (var i = 0; i < count; i++) {
            servicecharges.set(sCharges[i]['chargesid'], sCharges[i]['charges']);
        }
    }


    load_service_charges();



</script>
