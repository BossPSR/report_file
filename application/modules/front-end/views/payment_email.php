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

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="padding:100px; text-align: center; font-size: 18px;">
                    <div class="form-group">File Name : <?php echo $file_name; ?></div>
                    <div class="form-group">Order ID : <?php echo $order_id; ?></div>
                    <div class="form-group">Price : <?php echo $price_file; ?></div>
                    <div class="form-group">Discount : <?php echo $discount; ?>%</div>
                    <div>Customer ID: CM<?php echo $customer_id; ?></div>
                    <form action="payment_email_success" method="POST">
                        <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
                        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                        <input type="hidden" name="price_file" value="<?php echo $price_file; ?>">
                        <input type="hidden" name="discount" value="<?php echo $discount; ?>">
                        <input type="hidden" name="customer_id" value="CM<?php echo $customer_id; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $customer_id; ?>">
                        <div style="margin:15px 0;">
                            <label for="">E-mail : </label>
                            <input type="email" name="email">
                        </div>
                       
                        <input type="hidden" name="price_dis" value="<?php echo $price_dis; ?>">
                        <button class="btn btn-success">Pay $<?php echo $price_dis; ?> To Start</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS  -->

<!-- Plugins JS -->
<script src="public/frontend/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="public/frontend/assets/js/main.js"></script>


<!-- <script src="assets/reponsive/js/jquery.min.js"></script>
<script src="assets/reponsive/js/bootstrap.min.js"></script> -->
<script src="assets/reponsive/plugins/selectator/fm.selectator.js"></script>

<script>
    <?php if ($this->session->flashdata('error_cash')) : ?>
        swal("คำเตือน", "Cash ของคุณยังไม่เพียงพอ", "error");
    <?php endif; ?>
</script>
</body>

</html>