<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="" target="_blank">Repost,</a>All rights Reserved</span>
        <!-- <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button> -->
    </p>
</footer>
<!-- END: Footer-->

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
<script src="public/backend/app-assets/vendors/js/coming-soon/jquery.countdown.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- <script src="public/backend/assets/vendors/js/extensions/dropzone.min.js"></script> -->
<script src="public/backend/assets/fileupload/global.js" type="text/javascript"></script>
<script src="public/backend/assets/fileupload/js/uploadslider.js" type="text/javascript"></script>

<!-- BEGIN: Theme JS-->
<script src="public/backend/assets/js/core/app-menu.js"></script>
<script src="public/backend/assets/js/core/app.js"></script>
<script src="public/backend/assets/js/scripts/components.js"></script>
<script src="public/backend/assets/js/scripts/modal/components-modal.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="public/backend/assets/js/scripts/datatables/datatable.js"></script>
<script src="public/backend/assets/js/scripts/pages/dashboard-analytics.js"></script>
<script src="public/backend/assets/js/scripts/ui/data-list-view.js"></script>

<!-- END: Page JS-->
<script src="public/backend/app-assets/js/scripts/pages/coming-soon.js"></script>
<script src="public/backend/assets/js/jquery.countdown.min.js"></script>
<script src="public/backend/assets/js/scripts/sweetalert.min.js"></script>

<script src="public/backend/assets/vendors/js/extensions/toastr.min.js"></script>

<script src="public/backend/assets/vendors/js/forms/select/select2.full.min.js"></script>

<script src="public/backend/assets/js/scripts/forms/select/form-select2.js"></script>

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

<script>
    function confirmalertunlock(data) {

        swal({
            title: "Are you sure Unloc?",
            text: "Are you sure you want to unlock this document ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'back_store_status_reject?id=' + data;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_upload_de(data1, data2) {

        swal({
            title: "Are you sure Unloc?",
            text: "Are you sure you want to unlock this document ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'sendEmail_delivery?id=' + data1 + '&email=' + data2;
            }
        })
    }
</script>

<!-- <script>
    function confirmalertunlock_upload_Feedback(data3,data4) {

        swal({
            title: "Are you sure Feedback?",
            text: "Are you sure you want to unlock this document ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'Status_Feedback?tid=' + data3 + '&id=' + data4 ;
            }
        })
    }
</script> -->
<script>
    <?php if ($this->session->flashdata('slide_ss')) : ?>
        swal("Complete", "Successfully blocked information", "success");
    <?php endif; ?>
    <?php if ($this->session->flashdata('slide_false')) : ?>
        swal("Error", "Not Successfully blocked information", "error");
    <?php endif; ?>
</script>
<script>
    function confirmalertunlock_upload_morefile(data5, data6) {

        swal({
            title: "Are you sure upload morefile?",
            text: "Are you sure you this upload morefile ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'status_more_file_team?id=' + data5 + '&order=' + data6;
            }
        })
    }
</script>

<script>
    function confileFeedback_team(data) {

        swal({
            title: "Are you sure upload Feedback to Team ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'status_feedback_now?id=' + data;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_del_vdo(data6) {

        swal({
            title: "Are you sure delete?",
            text: "Are you sure you delete Video ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_vdo?id=' + data6;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_del_poster(data7) {

        swal({
            title: "Are you sure poster?",
            text: "Are you sure you delete poster ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_poster?id=' + data7;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_del_admin(data8) {

        swal({
            title: "Are you sure Admin?",
            text: "Are you sure you delete Admin ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'back_admin_delete_admin?id=' + data8;
            }
        })
    }
</script>


<script>
    function confirmalert_del_all(data8) {

        swal({
            title: "Are you sure ?",
            text: "Are you sure you delete all ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_reject_all?id=' + data8;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_del_Dm(data15) {

        swal({
            title: "Are you sure DM?",
            text: "Are you sure you delete DM ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_dm?id=' + data15;
            }
        })
    }
</script>

<script>
    function confirmalertunlock_del_reject_for_sell(data9) {

        swal({
            title: "Are you sure reject_for_sell",
            text: "Are you sure you delete reject_for_sell",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'status_reject_del?id=' + data9;
            }
        })
    }
</script>
<script>
    function confirmalertunlock_delete_position(data10) {

        swal({
            title: "Are you sure delete Position",
            text: "Are you sure you delete delete Position",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_Position?id=' + data10;
            }
        })
    }
</script>
<script>
    function confirmalertunlock_reject(data11) {

        swal({
            title: "Are you sure clover File?",
            text: "Are you sure you this clover File ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'status_reject_forbey?id=' + data11;
            }
        })
    }
</script>

<script>
    function Edit_Modify_fee(data12) {

        swal({
            title: "Are you sure Edit Modify fee?",
            text: "Are you sure you this Edit_Modify_fee ?",
            icon: "warning",
            buttons: true,
            successMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'Edit_Modify_fee?id=' + data12;
            }
        })
    }
</script>

<script>
    function confirmBandUser(data) {

        swal({
            title: "Block User",
            text: "ท่านต้องการ Block User ใช่ใหม่ ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'block_user?idUser=' + data;
            }
        })
    }
</script>
<script>
    function confirmalertunlock_del_unblock(data22) {

        swal({
            title: "UnBlock",
            text: "ท่านต้องการ UnBlock ใช่ใหม่ ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location = 'delete_unlock?tm_id=' + data22;
            }
        })
    }
</script>



<!-- uploadslider -->

</body>
<!-- END: Body-->

</html>