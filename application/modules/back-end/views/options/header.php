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
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
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
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
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
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="public/backend/assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
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
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item <?php if($this->uri->segment(1) == "back_dashboard"){echo 'active';} ?>" >
                        <a href="back_dashboard" ><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                       
                    </li>
                    <li class="dropdown nav-item <?php if($this->uri->segment(1) == "back_team" ||$this->uri->segment(1) ==  "back_user"){echo 'active';} ?>" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">Team & User</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item <?php if($this->uri->segment(1) == "back_team"){echo 'active';} ?>" href="back_team" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-mail"></i>Team List</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item <?php if($this->uri->segment(1) == "back_user"){echo 'active';} ?>" href="back_user" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-message-square"></i>User List</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown" data-i18n="Todo"><i class="feather icon-check-square"></i>Todo</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-calender.html" data-toggle="dropdown" data-i18n="Calender"><i class="feather icon-calendar"></i>Calender</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Ecommerce"><i class="feather icon-shopping-cart"></i>Ecommerce</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-shop.html" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-circle"></i>Shop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-details.html" data-toggle="dropdown" data-i18n="Details"><i class="feather icon-circle"></i>Details</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-wishlist.html" data-toggle="dropdown" data-i18n="Wish List"><i class="feather icon-circle"></i>Wish List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-checkout.html" data-toggle="dropdown" data-i18n="Checkout"><i class="feather icon-circle"></i>Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="User"><i class="feather icon-user"></i>User</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-user-list.html" data-toggle="dropdown" data-i18n="List"><i class="feather icon-circle"></i>List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-view.html" data-toggle="dropdown" data-i18n="View"><i class="feather icon-circle"></i>View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-edit.html" data-toggle="dropdown" data-i18n="Edit"><i class="feather icon-circle"></i>Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="nav-link" href="#"><i class="feather icon-layers"></i><span data-i18n="UI Elements">Customer Order</span></a></li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-edit-2"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Form Elements"><i class="feather icon-copy"></i>Form Elements</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="form-select.html" data-toggle="dropdown" data-i18n="Select"><i class="feather icon-circle"></i>Select</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown" data-i18n="Switch"><i class="feather icon-circle"></i>Switch</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-checkbox.html" data-toggle="dropdown" data-i18n="Checkbox"><i class="feather icon-circle"></i>Checkbox</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-radio.html" data-toggle="dropdown" data-i18n="Radio"><i class="feather icon-circle"></i>Radio</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown" data-i18n="Input"><i class="feather icon-circle"></i>Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle="dropdown" data-i18n="Input Groups"><i class="feather icon-circle"></i>Input Groups</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-number-input.html" data-toggle="dropdown" data-i18n="Number Input"><i class="feather icon-circle"></i>Number Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-textarea.html" data-toggle="dropdown" data-i18n="Textarea"><i class="feather icon-circle"></i>Textarea</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-date-time-picker.html" data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i class="feather icon-circle"></i>Date &amp; Time Picker</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-layout.html" data-toggle="dropdown" data-i18n="Form Layout"><i class="feather icon-box"></i>Form Layout</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown" data-i18n="Form Wizard"><i class="feather icon-package"></i>Form Wizard</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown" data-i18n="Form Validation"><i class="feather icon-check-circle"></i>Form Validation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table.html" data-toggle="dropdown" data-i18n="Table"><i class="feather icon-server"></i>Table</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-datatable.html" data-toggle="dropdown" data-i18n="Datatable"><i class="feather icon-grid"></i>Datatable</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-ag-grid.html" data-toggle="dropdown" data-i18n="agGrid Table"><i class="feather icon-grid"></i>agGrid Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="page-user-profile.html" data-toggle="dropdown" data-i18n="Profile"><i class="feather icon-user"></i>Profile</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-account-settings.html" data-toggle="dropdown" data-i18n="Account Settings"><i class="feather icon-settings"></i>Account Settings</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-faq.html" data-toggle="dropdown" data-i18n="FAQ"><i class="feather icon-help-circle"></i>FAQ</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-knowledge-base.html" data-toggle="dropdown" data-i18n="Knowledge Base"><i class="feather icon-info"></i>Knowledge Base</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-search.html" data-toggle="dropdown" data-i18n="Search"><i class="feather icon-search"></i>Search</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-invoice.html" data-toggle="dropdown" data-i18n="Invoice"><i class="feather icon-file"></i>Invoice</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Authentication"><i class="feather icon-unlock"></i>Authentication</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="auth-login.html" data-toggle="dropdown" data-i18n="Login"><i class="feather icon-circle"></i>Login</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-register.html" data-toggle="dropdown" data-i18n="Register"><i class="feather icon-circle"></i>Register</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-forgot-password.html" data-toggle="dropdown" data-i18n="Forgot Password"><i class="feather icon-circle"></i>Forgot Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-reset-password.html" data-toggle="dropdown" data-i18n="Reset Password"><i class="feather icon-circle"></i>Reset Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-lock-screen.html" data-toggle="dropdown" data-i18n="Lock Screen"><i class="feather icon-circle"></i>Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Miscellaneous"><i class="feather icon-file-text"></i>Miscellaneous</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="page-coming-soon.html" data-toggle="dropdown" data-i18n="Coming Soon"><i class="feather icon-circle"></i>Coming Soon</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-404.html" data-toggle="dropdown" data-i18n="404"><i class="feather icon-circle"></i>Error 404</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-500.html" data-toggle="dropdown" data-i18n="500"><i class="feather icon-circle"></i>Error 500</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-not-authorized.html" data-toggle="dropdown" data-i18n="Not Authorized"><i class="feather icon-circle"></i>Not Authorized</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-maintenance.html" data-toggle="dropdown" data-i18n="Maintenance"><i class="feather icon-circle"></i>Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i class="feather icon-pie-chart"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="chart-apex.html" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>Apex</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-chartjs.html" data-toggle="dropdown" data-i18n="Chartjs"><i class="feather icon-circle"></i>Chartjs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-echarts.html" data-toggle="dropdown" data-i18n="Echarts"><i class="feather icon-circle"></i>Echarts</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="maps-google.html" data-toggle="dropdown" data-i18n="Google Maps"><i class="feather icon-map"></i>Google Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span data-i18n="Others">Others</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Levels"><i class="feather icon-menu"></i>Menu Levels</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Third Level"><i class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Third Level"><i class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown" data-i18n="Disabled Menu"><i class="feather icon-eye-off"></i>Disabled Menu</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" data-toggle="dropdown" data-i18n="Documentation"><i class="feather icon-folder"></i>Documentation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.ticksy.com/" data-toggle="dropdown" data-i18n="Raise Support"><i class="feather icon-life-buoy"></i>Raise Support</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->