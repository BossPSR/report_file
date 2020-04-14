<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Report file.com</title>
    <link rel="apple-touch-icon" href="public/backend/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="public/backend/assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .ss {
            font-weight: 500;
            font-size: 18px;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " style="font-size: 17px;" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="padding: 40px;margin-top: 100px;text-align: center;background: white;">
                   
                    <h2 class="form-group">ชำระเงินเอกสาร</h2>
                    <hr>

                    <div class="form-group row">
                        <label class="col-3 text-right ss" for="">File Name : </label>
                        <div class="col-9 text-left">
                            <?php echo $file_name; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-right ss" for="">Order ID : </label>
                        <div class="col-9 text-left">
                            <?php echo $order_id; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-right ss" for="">Price : </label>
                        <div class="col-9 text-left">
                            <?php echo $price_file; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-right ss" for="">Discount : </label>
                        <div class="col-9 text-left">
                            <?php echo $discount; ?>%
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-right ss" for="">Customer ID :</label>
                        <div class="col-9 text-left">
                            <?php echo $customer_id; ?>
                        </div>
                    </div>
                    <form action="payment_email_success" method="POST">
                        <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                        <input type="hidden" name="price_file" value="<?php echo $price_file; ?>">
                        <input type="hidden" name="discount" value="<?php echo $discount; ?>">
                        <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
                        <div class="form-group row">
                            <label class="col-3 text-right ss" for="">E-mail : </label> 
                            <div class="col-8">
                                <input type="email" class="form-control" name="email" value=" <?php echo $this->session->userdata('email'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 text-right ss" for=""></label> 
                            <div class="col-8 text-left" style="color:red">
                                * ถ้าลูกค้าทำการเปลี่ยน Email สามารถกรอกใหม่ได้
                            </div>
                        </div>

                        <input type="hidden" name="price_dis" value="<?php echo $price_dis; ?>">
                        <button class="btn btn-success">Pay $<?php echo $price_dis; ?> To Start</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="public/frontend/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="public/frontend/assets/js/main.js"></script>


    <!-- <script src="assets/reponsive/js/jquery.min.js"></script>
<script src="assets/reponsive/js/bootstrap.min.js"></script> -->
    <script src="assets/reponsive/plugins/selectator/fm.selectator.js"></script>
    <script>
        function confirmalertunlock(data, data2, data3, data4) {

            swal({
                title: "Are you sure Unloc?",
                text: "Are you sure you want to unlock this document ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    window.location = 'unlock_document?upload_id=' + data + '&userId=' + data2 + '&price=' + data3 + '&merchant_id=' + data4;
                }
            })
        }
    </script>

    <script>
        function confirmalertreject(data, data2) {

            swal({
                title: "Are you sure Reject?",
                text: "Are you sure you want to reject this document ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    window.location = 'reject_document?bookid=' + data + '&merchant_id=' + data2;
                }
            })
        }
    </script>

    <script>
        function confirmalert2(data) {

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    window.location = 'my-upload-delete?Id=' + data;
                    swal("Good job!", "You clicked the button!", "success");
                } else {
                    swal("Your imaginary file is safe!");
                }
            })
        }
    </script>
    <script>
        function confirmalert_buy() {

            swal("Good job!", "", "success");
            setTimeout(function() {
                window.location.reload('home');
            }, 1000);
            // window.location = 'buy';
        }
    </script>

    <script>
        $('#myModal2').modal('show')
    </script>



    <!-- <script src="public/frontend/assets/dist/dropzone-amd-module.js"></script> -->

    <script src="public/frontend/assets/js/myscript.js"></script>


    <script type='text/javascript'>
        // Dropzone.autoDiscover = false;
        $("#dropzone2").dropzone({
            addRemoveLinks: true,
            maxFiles: 5,
            removedfile: function(file) {
                var name = file.name;
                $.ajax({
                    type: 'POST',
                    url: 'store_upload',
                    data: {
                        name: name,
                        request: 2
                    },
                    success: function(data) {
                        console.log('success: ' + data);
                    },

                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
    </script>

    <!-- Script -->
    <script type='text/javascript'>
        // Dropzone.autoDiscover = false;
        $("#fileupload").dropzone({
            addRemoveLinks: true,
            maxFiles: 5,
            removedfile: function(file) {
                var name = file.name;
                $.ajax({
                    type: 'POST',
                    url: 'buy_upload',
                    data: {
                        name: name,
                        request: 2,
                        date_req: x
                    },
                    success: function(data) {
                        console.log('success: ' + data);
                    },

                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
    </script>



    <script>
        $('#password, #c_password').on('keyup', function() {
            if ($('#password').val() == $('#c_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    </script>

    <script src="public/frontend/assets/js/pdfobject.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


    <script>
        AOS.init();
    </script>

    <script>
        var options = {
            height: "23rem",
            width: "19rem",
            pdfOpenParams: {
                view: 'FitV',
                page: '1'
            },
        };
        PDFObject.embed("public/image/ข้อเสนอโครงการ.pdf", "#example1", options);
        var options1 = {
            height: "23rem",
            width: "19rem",
            pdfOpenParams: {
                view: 'FitV',
                page: '2'
            },
        };
        PDFObject.embed("public/image/ข้อเสนอโครงการ.pdf", "#example2", options1);
        var options2 = {
            height: "23rem",
            width: "19rem",
            pdfOpenParams: {
                view: 'FitV',
                page: '2'
            },
        };
        PDFObject.embed("public/image/ข้อเสนอโครงการ.pdf", "#example3", options2);
        var options3 = {
            height: "23rem",
            width: "19rem",
            pdfOpenParams: {
                view: 'FitV',
                page: '2'
            },
        };
        PDFObject.embed("public/image/ข้อเสนอโครงการ.pdf", "#example4", options3);
    </script>

    <script>
        $(document).ready(function() {
            $(".target_menuright").click(function() {
                $(".target_menuright").toggleClass("target_menuright_active");
                $(".right_menu_new").slideToggle("slow");

            });
        });
    </script>>



</body>

</html>