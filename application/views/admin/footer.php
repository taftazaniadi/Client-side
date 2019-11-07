    <!-- jquery -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- Jquery Core Js -->
    <script type="text/javascript" src="<?php echo site_url('assets/admin/js/custom.js') ?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo site_url('assets/admin/plugins/bootstrap/js/bootstrap.js'); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/bootstrap-select/js/bootstrap-select.js'); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/node-waves/waves.js'); ?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js'); ?>"></script>


    <!-- Custom Js -->
    <script src="<?php echo site_url('assets/admin/js/admin.js'); ?>"></script>
    <script src="<?php echo site_url('assets/admin/js/pages/tables/jquery-datatable.js'); ?>"></script>

    <!-- Demo Js -->
<!-- 
    <script src="<?php echo site_url('assets/admin/js/demo.js'); ?>"></script> -->
   <!--  <script src="<?php echo site_url('assets/admin/'); ?>plugins/tinymce/tinymce.js"></script> -->

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo site_url('assets/admin/'); ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo site_url('assets/admin/'); ?>js/pages/forms/editors.js"></script>
    
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo site_url('assets/admin/'); ?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script type="text/javascript">
        
            $(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('user/GetCountryName') ?>",
            data: {
                keyword: $("#country").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['nama'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());
    });
});
    </script>

    
</body>

</html>