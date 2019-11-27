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

    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/style.css">

    <!-- Main New Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/newstyle.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
</head>

<body>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
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
                            <form action="my-profile">
                                <p>   
                                    <label>Email Address <span>*</span></label>
                                    <input type="email">
                                </p>
                                <p>   
                                    <label>Username<span>*</span></label>
                                    <input type="text">
                                </p>
                                <p>   
                                    <label>Passwords <span>*</span></label>
                                    <input type="password">
                                </p>   
                                <div class="login_submit">
                                <a href="#">Forgot password?</a>
                                   
                                    
                                </div>
                                <div class="login_submit">
                                <button type="submit">login</button> 
                                </div>

                            </form>
                        </div>    
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
                                <li><a href="#exampleModalCenter" data-toggle="modal"> Login member </a></li>
                                <li><a href="register"> Sign </a></li>
                                <li><a href="checkout.html"> TH </a></li>
                                <li><a href="checkout.html"> ENG </a></li>
                            </ul>
                        </div>
                        <div class="search_container">
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
                                    <input placeholder="Search item /Code ...." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>

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
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">Upload +</a>
                                </li> 
                                <li class="menu-item-has-children">
                                    <a href="about.html">My Upload</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> My Unlocks</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="Package">Package </a>
                                </li>
                                <li class="menu-item-has-children">
                                     <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                </li>
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
                                    <li><a href="#exampleModalCenter" data-toggle="modal"> Login member </a></li>
                                    <li><a href="register"> Sign </a></li>
                                    <li><a href="checkout.html"> TH </a></li>
                                    <li><a href="checkout.html"> ENG </a></li>
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
                                <div class="search_container">
                                    <form action="#">
                                        <div class="search_box">
                                            <input placeholder="Search item /Code ...." type="text">
                                        </div>
                                        <div class="hover_category search_box" style="width: 521px;">
                                            <select class="select_option" name="select" id="categori1">
                                                <option selected value="1">Select item</option>
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
                                            <button type="submit">Search</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                   
                                        <!-- <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        <span class="wishlist_quantity">3</span> -->
                                    </div>
                                    <div class="mini_cart_wrapper">

                                        <!-- <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
                                        <span class="cart_quantity">2</span> -->
                                        <!--mini cart-->
                                        <!-- <div class="mini_cart">
                                            <div class="cart_item">
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

                                            </div>

                                        </div> -->
                                        <!--mini cart end-->
                                    </div>
                                </div>
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
                                        <li><a href="home"> Home <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> Bookmarked <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> Recently Accessed <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> Rejected <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> My Rewards <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> Bins <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#"> User manual <i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a href="#"> Upload + <div class="arrow_box"></div></a></li>
                                        <li><a href="#"> My Upload</a></li>
                                        <li><a href="#"> My Unlocks</a></li>
                                        <li><a href="Package"> Package</a></li>
                                        <li class="menu-item-has-children">
                                            <i class="fa fa-commenting-o icon-bell" aria-hidden="true"></i>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                        </li>
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
                                            <li>
                                                <span>
                                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                                    <br> 
                                                    My wallet
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                    <br> 
                                                    Deposit
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                                                    <br>
                                                    Withdraw
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    <br> 
                                                    My slip
                                                </span>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                        
                                </div>
                            </div>
                    </aside> 
    <!--sidebar widget end-->