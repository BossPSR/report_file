<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Junko - Electronics eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/frontend/assets/img/favicon.ico">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/plugins.css">
    <link href="assets/reponsive/plugins/selectator/fm.selectator.css" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="public/frontend/assets/css/hover.css">

    <!-- Main New Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/newstyle.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="public/frontend/assets/dist/dropzone.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=17e6cdb5-780a-4235-8324-782430ccd49e"> </script>
    <!-- End of  Zendesk Widget script -->

</head>

<body>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <script>
        $('#myModal1').on('shown.bs.modal', function() {
            $('#myInput1').trigger('focus')
        })
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row text-center">
                    <div class="col-md-12"><img style="width: 100px;" src="public/frontend/assets/img/logo/logo.png" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="account_form">
                            <form action="loginme" method="post">
                                <p>
                                    <label>Email <span>*</span></label>
                                    <input type="email" id="inputemail" name="email">
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" id="inputpassword" name="password">
                                </p>
                                <div class="login_submit">
                                    <a href="#">Forgot password?</a>


                                </div>
                                <div class="login_submit">
                                    <button type="submit">login</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--header area start-->

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <!-- <div class="support_info">
                            <p>Telephone Enquiry: <a href="tel:+6494461709">(012) 800 456 789 – 987</a></p>
                        </div> -->
                        <div class="top_right text-right">
                            <ul>
                                <?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array() ?>
                                <?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
                                <?php if ($user == true) :  ?>
                                    <li><a href="my-profile"> <?php echo $user['username'] ?> </a></li>
                                    <li><a href="Logout" onclick="return confirm('Are you sure to logout?');"> Logout </a></li>
                                <?php elseif ($team == true) : ?>
                                    <li><a href="#"> <?php echo $team['name'] ?> </a></li>
                                    <li><a href="Logout" onclick="return confirm('Are you sure to logout?');"> Logout </a></li>
                                <?php else : ?>
                                    <li><a href="#exampleModalCenter" data-toggle="modal"> Login member </a></li>
                                    <li><a href="register"> Sign up </a></li>
                                <?php endif  ?>
                                <li><a href="checkout.html"> TH </a></li>
                                <li><a href="checkout.html"> ENG </a></li>
                            </ul>
                        </div>
                        <!-- <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori">
                                        <option selected value="1">Search item</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search item /Code ...." type="text" name="search">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div> -->

                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <!-- <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <span class="wishlist_quantity">3</span> -->
                            </div>
                            <div class="mini_cart_wrapper">
                                <!-- <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity">2</span> -->
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <!-- <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="public/frontend/assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="public/frontend/assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>

                                    </div> -->

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <?php if ($user) :  ?>
                                    <li class="menu-item-has-children">
                                        <a href="buy"> ต้องการซื้อ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="store"> ต้องการขาย</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"> My order</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"> Feedback</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="package">Package </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                    </li>
                                <?php elseif ($team) : ?>
                                    <li class="menu-item-has-children">
                                        <a href="#"> คลังสินค้า</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"> My task</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="upload"> Delivery</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="upload"> Delivery</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#"> My Feedback</a>
                                    </li>
                                <?php else : ?>
                                    <li class="menu-item-has-children">
                                        <a href="#exampleModalCenter" data-toggle="modal"> ต้องการซื้อ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#exampleModalCenter" data-toggle="modal"> ต้องการขาย</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#exampleModalCenter" data-toggle="modal"> Feedback</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Package </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </div>


                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <!-- <div class="support_info">
                                <p>Telephone Enquiry: <a href="tel:+6494461709">(012) 800 456 789 – 987</a></p>
                            </div> -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array() ?>
                                    <?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
                                    <?php if ($user == true) :  ?>
                                        <li><a href="my-profile"> <?php echo $user['username'] ?> </a></li>
                                        <li><a href="Logout" onclick="return confirm('Are you sure to logout?');"> Logout </a></li>
                                    <?php elseif ($team == true) : ?>
                                        <li><a href="#"> <?php echo $team['name'] ?> </a></li>
                                        <li><a href="Logout" onclick="return confirm('Are you sure to logout?');"> Logout </a></li>
                                    <?php else :  ?>
                                        <li><a href="#exampleModalCenter" data-toggle="modal"> Login member </a></li>
                                        <li><a href="main"> Sign up </a></li>
                                    <?php endif  ?>
                                    <li><a href="#"> TH </a></li>
                                    <li><a href="#"> ENG </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6">
                            <div class="logo">
                                <a href="home"><img src="public/frontend/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-6">
                            <div class="middel_right">
                                <?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array() ?>
                                <!-- <?php if ($user == false) :  ?>
                                    <div class="search_container" style="margin-right:200px;">
                                    <?php else : ?>
                                        <div class="search_container">
                                        <?php endif ?>
                                        <form action="get_search" method="POST">
                                            <div class="search_box">
                                                <input placeholder="Search item /Code ...." type="text" name="search">
                                            </div>
                                            <div class="hover_category search_box" style="width: 521px;">
                                                <select class="select_option" name="select_item" id=" categori1">
                                                    <option selected  disabled>Select item</option>
                                                    <option value="Accessories">Accessories</option>
                                                    <option value="Accessories & More">Accessories & More</option>
                                                    <option value="Butters & Eggs">Butters & Eggs</option>
                                                    <option value="Camera & Video">Camera & Video </option>
                                                    <option value="Mornitors">Mornitors</option>
                                                    <option value="Tablets">Tablets</option>
                                                    <option value="Laptops">Laptops</option>
                                                    <option value="Handbags">Handbags</option>
                                                    <option value="Headphone & Speaker">Headphone & Speaker</option>
                                                    <option value="Herbs & botanicals">Herbs & botanicals</option>
                                                    <option value="Vegetables">Vegetables</option>
                                                    <option value="Shop">Shop</option>
                                                    <option value="Laptops & Desktops">Laptops & Desktops</option>
                                                    <option value="Watchs">Watchs</option>
                                                    <option value="Electronic">Electronic</option>
                                                </select>
                                                <button type="submit">Search</button>
                                            </div>
                                        </form>
                                        </div> -->

                                <!-- <?php if ($user == true) :  ?>
                                            <div class="middel_right_info">
                                                <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                    <div class="menu-list">421</div>
                                                    <div>Follower</div>
                                                </div>
                                                <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                    <div class="menu-list">1,527</div>
                                                    <div>Download</div>
                                                </div>
                                                <div class="mini_cart_wrapper text-center">
                                                    <div class="menu-list">47</div>
                                                    <div>Rejected</div>
                                                </div>
                                            </div>
                                        <?php else : ?>

                                        <?php endif ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="categories_menu categories_four menu_left_new">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">Category</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <?php if ($user) :  ?>
                                            <li><a href="home"> Home <i class="fa fa-angle-right"></i></a></li>
                                            <!-- <li><a href="Bookmarked"> Bookmarked <i class="fa fa-angle-right"></i></a></li> -->
                                            <!-- <li><a href="Recently-Accessed"> Recently Accessed <i class="fa fa-angle-right"></i></a></li> -->
                                            <!-- <li><a href="my-rejected"> Rejected <i class="fa fa-angle-right"></i></a></li> -->
                                            <li><a href="my-rewards"> My Rewards <i class="fa fa-angle-right"></i></a></li>
                                            <!-- <li><a href="#"> Bins <i class="fa fa-angle-right"></i></a></li> -->
                                            <li><a href="#"> User manual <i class="fa fa-angle-right"></i></a></li>
                                        <?php else : ?>
                                            <li><a href="home"> Home <i class="fa fa-angle-right"></i></a></li>
                                            <!-- <li><a href="#exampleModalCenter" data-toggle="modal"> Bookmarked <i class="fa fa-angle-right"></i></a></li> -->
                                            <!-- <li><a href="#exampleModalCenter" data-toggle="modal"> Recently Accessed <i class="fa fa-angle-right"></i></a></li> -->
                                            <!-- <li><a href="#exampleModalCenter" data-toggle="modal"> Rejected <i class="fa fa-angle-right"></i></a></li> -->
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> My Rewards <i class="fa fa-angle-right"></i></a></li>
                                            <!-- <li><a href="#"> Bins <i class="fa fa-angle-right"></i></a></li> -->
                                            <li><a href="#"> User manual <i class="fa fa-angle-right"></i></a></li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <?php if ($user) :  ?>
                                            <li><a href="buy"> ต้องการซื้อ <div class="arrow_box"></div></a></li>
                                            <li><a href="my-folder"> ต้องการขาย </a></li>
                                            <li><a href="#"> Feedback </a></li>
                                            <li style="margin-right: 150px;"><a href="package"> Package</a></li>
                                            <!-- <li class="menu-item-has-children" style="margin-right: 15px;">
                                                    <i class="fa fa-commenting-o icon-bell" aria-hidden="true"></i>
                                                </li>
                                                <li class="menu-item-has-children" style="margin-right: 40px;">
                                                    <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                                </li> -->
                                            <!-- <li>
                                                <a href="package">My Income : $<?php echo $user['cash']; ?></a></li>
                                            </li> -->
                                            <li></li>
                                            <li></li>
                                        <?php elseif ($team) : ?>
                                            <li>
                                                <a href="#"> My Stock</a>
                                            </li>
                                            <li>
                                                <a href="#"> My task</a>
                                            </li>
                                            <li>
                                                <a href="#"> Delivery</a>
                                            </li>
                                            <li>
                                                <a href="#"> My Feedback</a>
                                            </li>
                                            <!-- <li>
                                                <a href="package">My Income : $<?php echo $user['cash']; ?></a></li>
                                            </li> -->
                                            <li></li>
                                            <li></li>
                                        <?php else : ?>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> ต้องการซื้อ <div class="arrow_box"></div></a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> ต้องการขาย </a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> Feedback </a></li>
                                            <li><a href="#"> Package</a></li>
                                            <li></li>
                                            <li></li>
                                            <!-- <li class="menu-item-has-children">
                                                    <i class="fa fa-commenting-o icon-bell" aria-hidden="true"></i>
                                                </li> -->
                                            <!-- <li class="menu-item-has-children">
                                                    <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                                </li> -->
                                        <?php endif ?>
                                    </ul>


                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </header>
    <!--header area end-->

    <!--sidebar widget start-->

    <div class="target_menuright">
        <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
    </div>
    <aside class="sidebar_widget right_menu_new">
        <div class="widget_inner right_menu_fixed">
            <div class="widget_list widget_categories">
                <div class="show_sign">
                    <ul class="list_sign_login">
                        <a href="<?php echo ($user) ? 'my-wallet' : '#exampleModalCenter' ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                    <br>
                                    My wallet
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-deposit' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <br>
                                    Deposit
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-withdraw' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                                    <br>
                                    Withdraw
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-slip' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <br>
                                    My slip
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
    </aside>


    <!--sidebar widget end-->