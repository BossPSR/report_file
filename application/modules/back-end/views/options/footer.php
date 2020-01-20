
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="public/backend/assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="public/backend/assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="public/backend/assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="public/backend/assets/vendors/js/extensions/tether.min.js"></script>
    <script src="public/backend/assets/vendors/js/extensions/shepherd.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="public/backend/assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="public/backend/assets/js/core/app-menu.js"></script>
    <script src="public/backend/assets/js/core/app.js"></script>
    <script src="public/backend/assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="public/backend/assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="public/backend/assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    <?php if ($suss = $this->session->flashdata('save_ss2')) : ?>
        swal("Good job!", '<?php echo $suss; ?>', "success");
    <?php endif; ?>
    <?php if ($error = $this->session->flashdata('del_ss2')) : ?>
        swal("Fail !", '<?php echo $error; ?>', "error");
    <?php endif; ?>
</script>
<script>
    $('#password, #c_password').on('keyup', function() {
        if ($('#password').val() == $('#c_password').val()) {
            $('#message').html('Matches').css('color', 'green');
        } else
            $('#message').html('Not Matches').css('color', 'red');
    });
</script>
</body>
<!-- END: Body-->

</html>