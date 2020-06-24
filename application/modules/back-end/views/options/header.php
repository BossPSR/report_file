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
    <link href="public/backend/assets/fileupload/css/uploads.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/themes/semi-dark-layout.css">

    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/newstyle.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/forms/select/select2.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="public/backend/assets/css/plugins/extensions/toastr.css">

    <link rel="stylesheet" href="public/frontend/assets/dist/dropzone.css">

    <script src="public/frontend/assets/dist/dropzone.js"></script>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

    <script src="public/backend/assets/vendors/js/vendors.min.js"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>


                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="change?type=english&uri=<?php echo $this->uri->segment(1); ?>"><i class="flag-icon flag-icon-fr"></i> English</a>
                                <a class="dropdown-item" href="change?type=thailand&uri=<?php echo $this->uri->segment(1); ?>"><i class="flag-icon flag-icon-us"></i> Thailand</a>
                            </div>
                        </li>

                        <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> -->
                        <?php $profile = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array(); ?>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $profile['email']; ?></span><span class="user-status"><?php echo $profile['username']; ?></span></div><span><img class="round" src="public/backend/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="Logout_admin"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="public/backend/assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="public/backend/assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="public/backend/assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="public/backend/assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="public/backend/assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="public/backend/assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="public/backend/assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="public/backend/assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <?php $profile = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array(); ?>
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <?php if ($profile['is_admin'] == '3') : ?>
                        <li class="nav-item <?php if ($this->uri->segment(1) == "back_dashboard") {
                                                echo 'active';
                                            } ?>">
                            <a href="back_dashboard"><i class="feather icon-home"></i><span data-i18n="Dashboard"><?= $this->lang->line("Dashboard"); ?></span></a>
                        </li>
                        <?php
                        $notify_public = 0;
                        $notifyTeam = 0;
                        $teamList = $this->db->get_where('tbl_team', ['notify_admin' => 0])->result_array();
                        foreach ($teamList as $team_list) {
                            if ($team_list['notify_admin'] == 0 && $team_list['status'] == 0) {
                                $notifyTeam += 1;
                            }
                        }
                        $notify_public += $notifyTeam;
                        ?>
                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "back_team" || $this->uri->segment(1) ==  "back_user" || $this->uri->segment(1) ==  "back_admin" || $this->uri->segment(1) ==  "back_poster" || $this->uri->segment(1) ==  "back_vdo") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">Tool Admin <span class="badge badge badge-warning badge-pill" style="<?php if ($notify_public == 0) {
                                                                                                                                                                                                                                                                                            echo "display:none";
                                                                                                                                                                                                                                                                                        } ?>"><?php echo $notify_public ?></span></span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_admin") {
                                                                                echo 'active';
                                                                            } ?>" href="back_admin" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-square"></i>admin List</a>
                                </li>

                                <li class="dropdown dropdown-submenu  <?php if ($this->uri->segment(1) == "back_team") {
                                                                            echo 'active';
                                                                        } ?>" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i class="feather icon-pie-chart"></i>Team List</a>
                                    <ul class="dropdown-menu ">
                                        <li data-menu=""><a class="dropdown-item  <?php if ($this->uri->segment(1) == "back_team") {
                                                                                        echo 'active';
                                                                                    } ?>" href="back_team" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>Team List <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notifyTeam == 0) {
                                                                                                                                                                                                                                                                                echo "display:none";
                                                                                                                                                                                                                                                                            } ?>"><?php echo $notifyTeam; ?></span></a>
                                        </li>

                                        <li data-menu=""><a class="dropdown-item  <?php if ($this->uri->segment(1) == "T3_online") {
                                                                                        echo 'active';
                                                                                    } ?>" href="T3_online" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>T3 online Request</a>
                                        </li>


                                    </ul>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_user") {
                                                                                echo 'active';
                                                                            } ?>" href="back_user" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-message-square"></i>User List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_poster") {
                                                                                echo 'active';
                                                                            } ?>" href="back_poster" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-camera"></i>Poster List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_vdo") {
                                                                                echo 'active';
                                                                            } ?>" href="back_vdo" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-instagram"></i>Video List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Position") {
                                                                                echo 'active';
                                                                            } ?>" href="Position" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-layers"></i>Position List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "price_mangement") {
                                                                                echo 'active';
                                                                            } ?>" href="price_mangement" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-layers"></i>Price management</a>
                                </li>

                            </ul>
                        </li>
                        <?php
                        $notifyMystore = 0;

                        $notify_checkFor_sell = 0;
                        $this->db->where('notify_admin', 0);
                        $this->db->where('is_check', 0);
                        $this->db->where('status_chack', 0);
                        $this->db->group_by('store_id');
                        $uploadStore = $this->db->get('tbl_upload_store')->result_array();
                        foreach ($uploadStore as $upload_store) {
                            if ($upload_store['status_chack'] == 0) {
                                $notify_checkFor_sell += 1;
                            }
                        }

                        $notify_storeFor_sell = 0;
                        $this->db->where('is_check', 0);
                        $this->db->where('status_chack', 1);
                        $this->db->where('grade', null);
                        $this->db->where('status_check_drop', null);
                        $this->db->group_by('store_id');
                        $uploadStoreFor = $this->db->get('tbl_upload_store')->result_array();
                        foreach ($uploadStoreFor as $uploadStoreFor) {

                            $notify_storeFor_sell += 1;
                        }

                        $notify_myStore = 0;
                        $this->db->where('notify_admin', 0);
                        $this->db->group_by('order_id');
                        $uploadOrder = $this->db->get('tbl_upload_order')->result_array();
                        foreach ($uploadOrder as $upload_order) {
                            if ($upload_order['status_book'] == 0 && $upload_order['is_check'] == 0) {
                                $notify_myStore += 1;
                            }
                        }

                        $notifyMystore += $notify_checkFor_sell;
                        $notifyMystore += $notify_storeFor_sell;
                        $notifyMystore += $notify_myStore;
                        ?>
                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "back_store_buy" ||  $this->uri->segment(1) ==  "back_store_reject_for_buy" ||  $this->uri->segment(1) ==  "Section" ||  $this->uri->segment(1) ==  "back_store" ||  $this->uri->segment(1) ==  "back_store_checkForsell" ||  $this->uri->segment(1) ==  "back_store_reject" ||  $this->uri->segment(1) ==  "back_upload_main_search") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">My Store <span class="badge badge badge-warning badge-pill" style="<?php if ($notifyMystore == 0) {
                                                                                                                                                                                                                                                                                            echo "display:none";
                                                                                                                                                                                                                                                                                        } ?>"><?php echo $notifyMystore; ?></span></span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_store_checkForsell") {
                                                                                echo 'active';
                                                                            } ?>" href="back_store_checkForsell" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-square"></i>Check for sell <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_checkFor_sell == 0) {
                                                                                                                                                                                                                                                                                                    echo "display:none";
                                                                                                                                                                                                                                                                                                } ?>"><?php echo $notify_checkFor_sell; ?></span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Section") {
                                                                                echo 'active';
                                                                            } ?>" href="Section" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-layers"></i>Store for sell <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_storeFor_sell == 0) {
                                                                                                                                                                                                                                                                            echo "display:none";
                                                                                                                                                                                                                                                                        } ?>"><?php echo $notify_storeFor_sell; ?></span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_upload_main_search") {
                                                                                echo 'active';
                                                                            } ?>" href="back_upload_main_search" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-upload-cloud"></i>Upload to main search</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_store_buy") {
                                                                                echo 'active';
                                                                            } ?>" href="back_store_buy" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-package"></i>Store For buy <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_myStore == 0) {
                                                                                                                                                                                                                                                                                    echo "display:none";
                                                                                                                                                                                                                                                                                } ?>"><?php echo $notify_myStore; ?></span></a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_store_reject") {
                                                                                echo 'active';
                                                                            } ?>" href="back_store_reject" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-square"></i>Reject For sell</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_store_reject_for_buy") {
                                                                                echo 'active';
                                                                            } ?>" href="back_store_reject_for_buy" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Reject For buy</a>
                                </li>



                            </ul>
                        </li>

                        <?php
                        $notifywithdraw = 0;
                        $notify_notifywithdraw = 0;
                        $notify_notifywithdraw_team = 0;

                        $this->db->select('*');
                        $this->db->from('tbl_withdraw');
                        $this->db->where('status', 1);
                        $ws = $this->db->get()->result_array();

                        foreach ($ws as $ws) {

                            if ($ws) {
                                $notify_notifywithdraw += 1;
                            }
                        }

                        $this->db->select('*');
                        $this->db->from('tbl_withdraw_team');
                        $this->db->where('status', 1);
                        $wst = $this->db->get()->result_array();

                        foreach ($wst as $wst) {

                            if ($wst) {
                                $notify_notifywithdraw_team += 1;
                            }
                        }

                        $notifywithdraw += $notify_notifywithdraw;
                        $notifywithdraw += $notify_notifywithdraw_team;
                        ?>

                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "back_withdraw" || $this->uri->segment(1) == "withdraw_realtime") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Order Result">Withdraw <span class="badge badge badge-warning badge-pill" style="<?php if ($notifywithdraw == 0) {
                                                                                                                                                                                                                                                                                                echo "display:none";
                                                                                                                                                                                                                                                                                            } ?>"><?php echo $notifywithdraw ?></span></span></a>
                            <ul class="dropdown-menu">

                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "back_withdraw") {
                                                                                echo 'active';
                                                                            } ?>" href="back_withdraw" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>Withdraw <span class="badge badge badge-warning badge-pill" style="<?php if ($notify_notifywithdraw == 0) {
                                                                                                                                                                                                                                                                echo "display:none";
                                                                                                                                                                                                                                                            } ?>"><?php echo $notify_notifywithdraw ?></span></a>
                                </li>

                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "withdraw_realtime") {
                                                                                echo 'active';
                                                                            } ?>" href="withdraw_realtime" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Withdraw Team <span class="badge badge badge-warning badge-pill" style="<?php if ($notify_notifywithdraw_team == 0) {
                                                                                                                                                                                                                                                                        echo "display:none";
                                                                                                                                                                                                                                                                    } ?>"><?php echo $notify_notifywithdraw_team ?></span></a>
                                </li>

                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "withdraw_history") {
                                                                                echo 'active';
                                                                            } ?>" href="withdraw_history" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>Withdraw history </a>
                                </li>

                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "withdraw_team_history") {
                                                                                echo 'active';
                                                                            } ?>" href="withdraw_team_history" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Withdraw Team history </a>
                                </li>

                            </ul>

                        </li>


                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "approved" || $this->uri->segment(1) == "not-approved" || $this->uri->segment(1) == "Delivery") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Order Result">Order Result</span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "approved") {
                                                                                echo 'active';
                                                                            } ?>" href="approved" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>Approved</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "not-approved") {
                                                                                echo 'active';
                                                                            } ?>" href="not-approved" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Not Approved</a>
                                </li>
                                <!-- <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Delivery") {
                                                                                    echo 'active';
                                                                                } ?>" href="Delivery" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Delivery</a>
                                </li> -->
                            </ul>

                        </li>

                        <?php
                        $notifyCustomer_order = 0;
                        $notifyNot_satisfied = 0;
                        $this->db->where('notify_admin', 0);
                        $this->db->group_by('order_id');
                        $customer_order = $this->db->get('tbl_upload_order')->result_array();
                        foreach ($customer_order as $customerOrder) {
                            if ($customerOrder['notify_admin'] == 0 && $customerOrder['status_book'] == 2 && $customerOrder['status_pay'] == 1) {
                                $notifyNot_satisfied += 1;
                            }
                        }
                        $notifyCustomer_order += $notifyNot_satisfied;
                        ?>
                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "Satisfied" || $this->uri->segment(1) == "Not_Satisfied") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-users"></i><span data-i18n="Order Result">Customer Order <span class="badge badge badge-warning badge-pill" style="<?php if ($notifyCustomer_order == 0) {
                                                                                                                                                                                                                                                                                                        echo "display:none";
                                                                                                                                                                                                                                                                                                    } ?>"><?php echo $notifyCustomer_order; ?></span></span></a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "orverall") {
                                                                                echo 'active';
                                                                            } ?>" href="orverall" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>Orverall</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Satisfied") {
                                                                                echo 'active';
                                                                            } ?>" href="Satisfied" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>Satisfied</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Not_Satisfied") {
                                                                                echo 'active';
                                                                            } ?>" href="Not_Satisfied" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-x-circle"></i>Not Satisfied <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notifyNot_satisfied == 0) {
                                                                                                                                                                                                                                                                                    echo "display:none";
                                                                                                                                                                                                                                                                                } ?>"><?php echo $notifyNot_satisfied; ?></span></a>
                                </li>
                            </ul>

                        </li>
                        <?php
                        $notifyBookmark = 0;
                        $notify_pay = 0;
                        $notify_not_pay = 0;
                        $notify_con = 0;
                        $notify_GT = 0;

                        $this->db->select('*');
                        $this->db->from('tbl_morefile_GT');
                        $this->db->where('status_more_file', 1);
                        $this->db->where('status_see_more_file_team', 0);
                        $this->db->group_by('order_id');
                        $bookmarkGT = $this->db->get()->result_array();

                        foreach ($bookmarkGT as $bookmarkGT) {

                            $notify_GT += 1;
                        }

                        $this->db->select('*');
                        $this->db->from('tbl_upload_order');
                        $this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id');
                        $this->db->where('tbl_upload_order.status_admin', 0);
                        // $this->db->where('tbl_upload_order.notify_admin', 0);
                        $this->db->group_by('tbl_upload_order.order_id');
                        $bookmarkPay = $this->db->get()->result_array();

                        foreach ($bookmarkPay as $bookmark_pay) {

                            if ($bookmark_pay['status_book'] != 0 && $bookmark_pay['status_pay'] == 1 && $bookmark_pay['status_delivery'] == 0) {
                                $notify_pay += 1;
                            }
                        }

                        $this->db->where('notify_admin', 0);
                        $this->db->group_by('order_id');
                        $bookmarkPay2 = $this->db->get('tbl_upload_order')->result_array();
                        foreach ($bookmarkPay2 as $bookmark_pay2) {

                            if ($bookmark_pay2['status_book'] != 0 && $bookmark_pay2['status_pay'] == 0 && $bookmark_pay2['is_check'] == 0) {
                                $notify_not_pay += 1;
                            }
                        }

                        $this->db->select('*,tbl_upload_order.is_check AS rej');
                        $this->db->from('tbl_upload_order_team');
                        $this->db->join('tbl_upload_order', 'tbl_upload_order_team.order_id=tbl_upload_order.order_id', 'left');
                        $this->db->where('tbl_upload_order_team.status_admin', 0);
                        $this->db->where('tbl_upload_order.status_delivery', 0);
                        $this->db->group_by('tbl_upload_order_team.order_id');
                        $Complete = $this->db->get()->result_array();

                        foreach ($Complete as $Complete) {

                            if ($Complete['status_book'] != 0 && $Complete['status_pay'] == 1 && $Complete['rej'] == 0 && $Complete['status_delivery'] == 0) {
                                $notify_con += 1;
                            }
                        }

                        $notifyBookmark += $notify_pay;
                        $notifyBookmark += $notify_not_pay;
                        $notifyBookmark += $notify_con;
                        $notifyBookmark += $notify_GT;

                        ?>
                        <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "Bookmark" || $this->uri->segment(1) == "More_File" || $this->uri->segment(1) == "Bookmark_notpay" || $this->uri->segment(1) == "Complete" || $this->uri->segment(1) == "Feedback") {
                                                            echo 'active';
                                                        } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-server"></i><span data-i18n="Order Result">Bookmark <span class="badge badge badge-warning badge-pill" style="<?php if ($notifyBookmark == 0) {
                                                                                                                                                                                                                                                                                                echo "display:none";
                                                                                                                                                                                                                                                                                            } ?>"><?php echo $notifyBookmark; ?></span></span></a>
                            <ul class="dropdown-menu">
                                <li data-menu="">
                                    <a class="dropdown-item <?php if ($this->uri->segment(1) == "Bookmark") {
                                                                echo 'active';
                                                            } ?>" href="Bookmark" data-toggle="dropdown" data-i18n="Email">
                                        <i class="feather icon-book"></i>Pay <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_pay == 0) {
                                                                                                                                                            echo "display:none";
                                                                                                                                                        } ?>"><?php echo $notify_pay; ?></span>
                                    </a>
                                </li>
                                <li data-menu="">
                                    <a class="dropdown-item <?php if ($this->uri->segment(1) == "Bookmark_notpay") {
                                                                echo 'active';
                                                            } ?>" href="Bookmark_notpay" data-toggle="dropdown" data-i18n="Email">
                                        <i class="feather icon-book"></i>Not Pay <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_not_pay == 0) {
                                                                                                                                                                echo "display:none";
                                                                                                                                                            } ?>"><?php echo $notify_not_pay; ?></span>
                                    </a>
                                </li>
                                <li data-menu="">
                                    <a class="dropdown-item <?php if ($this->uri->segment(1) == "Complete") {
                                                                echo 'active';
                                                            } ?>" href="Complete" data-toggle="dropdown" data-i18n="Email">
                                        <i class="feather icon-check"></i>Complete <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_con == 0) {
                                                                                                                                                                    echo "display:none";
                                                                                                                                                                } ?>"><?php echo $notify_con; ?></span>
                                    </a>
                                </li>
                                <li data-menu="">


                                <li class="dropdown dropdown-submenu  <?php if ($this->uri->segment(1) == "Feedback" || $this->uri->segment(1) == "Feedback_team") {
                                                                            echo 'active';
                                                                        } ?>" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i class="feather icon-pie-chart"></i>Feedback</a>
                                    <ul class="dropdown-menu ">
                                        <li data-menu=""><a class="dropdown-item  <?php if ($this->uri->segment(1) == "Feedback") {
                                                                                        echo 'active';
                                                                                    } ?>" href="feedback_notification" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>Feedback Notification</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="feedback_all" data-toggle="dropdown" data-i18n="Chartjs"><i class="feather icon-circle"></i>Feedback All</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="<?php if ($this->uri->segment(1) == "More_File") {
                                                echo 'active';
                                            } ?>"><a class="dropdown-item " href="More_File"><i class="feather icon-pie-chart"></i>More File <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notify_GT == 0) {
                                                                                                                                                                                                                            echo "display:none";
                                                                                                                                                                                                                        } ?>"><?php echo $notify_GT; ?></span></a>

                                </li>


                        </li>

                </ul>

                </li>
                <?php
                        $notify_notifystockadmin = 0;
                        $notifystockadmin = 0;

                        $this->db->select('*');
                        $this->db->from('tbl_upload_order');
                        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
                        $this->db->where('tbl_upload_team.teamId', null);
                        $this->db->where('tbl_upload_order.status_admin', 1);
                        $this->db->group_by('tbl_upload_order.order_id');
                        $stockadmin = $this->db->get()->result_array();

                        foreach ($stockadmin as $stockadmin) {

                            if ($stockadmin) {
                                $notify_notifystockadmin += 1;
                            }
                        }

                        $notifystockadmin += $notify_notifystockadmin;
                ?>

                <li class="dropdown nav-item <?php if ($this->uri->segment(1) == "Stock" || $this->uri->segment(1) == "my_stock_admin") {
                                                    echo 'active';
                                                } ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-inbox"></i><span data-i18n="Order Result">My Stock <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notifystockadmin == 0) {
                                                                                                                                                                                                                                                                                                        echo "display:none";
                                                                                                                                                                                                                                                                                                    } ?>"><?php echo $notifystockadmin; ?></span> </span></a>
                    <ul class="dropdown-menu">
                        <!-- <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "Stock") {
                                                                            echo 'active';
                                                                        } ?>" href="Stock" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-credit-card"></i>My Stock</a>
                        </li> -->
                        <li data-menu=""><a class="dropdown-item <?php if ($this->uri->segment(1) == "my_stock_admin") {
                                                                        echo 'active';
                                                                    } ?>" href="my_stock_admin" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-check-circle"></i>My StockAdmin <span class="badge badge badge-warning badge-pill" style="margin-left:5px; <?php if ($notifystockadmin == 0) {
                                                                                                                                                                                                                                                                                echo "display:none";
                                                                                                                                                                                                                                                                            } ?>"><?php echo $notifystockadmin; ?></span></a>
                        </li>
                    </ul>
                </li>

                </ul>

            <?php elseif ($profile['is_admin'] == '2') : ?>
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="nav-link" href="#"><i class="feather icon-layers"></i><span data-i18n="UI Elements">Customer Order</span></a></li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-edit-2"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Pages">Pages</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span data-i18n="Others">Others</span></a>

                    </li>
                </ul>
            <?php else : ?>
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="nav-link" href="#"><i class="feather icon-layers"></i><span data-i18n="UI Elements">Customer Order</span></a></li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Pages">Pages</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span data-i18n="Others">Others</span></a>

                    </li>
                </ul>
            <?php endif ?>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->
    <?php $admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array(); ?>
    <script>
        <?php if ($admin == true) { ?>
            setInterval(function() {
                checkStatus();
            }, 3000);

            function checkStatus() {
                $.ajax({
                    url: 'checkStatusAdmin',
                    data: {
                        IdAdmin: '<?php echo $admin['adminId']; ?>'
                    },
                    success: function(getData) {

                        console.log(getData);

                    }
                });
            }
        <?php } ?>
    </script>