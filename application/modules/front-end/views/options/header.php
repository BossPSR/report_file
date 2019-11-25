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
                            <form action="#">
                                <p>   
                                    <label>Username or email <span>*</span></label>
                                    <input type="text">
                                </p>
                                <p>   
                                    <label>Passwords <span>*</span></label>
                                    <input type="password">
                                </p>   
                                <div class="login_submit">
                                <a href="#">Lost your password?</a>
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
                                    
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
                                <li><a href="checkout.html"> Sign </a></li>
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
                                    <a href="my-account.html">วิธีการสั่งซื้อ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">เกี่ยวกับเรา</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> ค่าขนส่ง</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">ข่าวสารและกิจกรรม </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">ติดต่อเรา</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> แจ้งปัญหา</a>
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
                                    <li><a href="checkout.html"> Sign </a></li>
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
                                <a href="index.html"><img src="public/frontend/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="#">
                                        <div class="hover_category">
                                            <select class="select_option" name="select" id="categori1">
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
                                        <img src="public/image/frame.png" alt="" style="width: 100px;height: auto;">
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
                            <div class="categories_menu categories_four">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">หมวดหมู่เมนู</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <li><a href="#"> Home</a></li>
                                        <li><a href="#"> News Update</a></li>
                                        <li><a href="#"> Highest Score</a></li>
                                        <li><a href="#"> Upload +</a></li>
                                        <li><a href="#"> My Upload</a></li>
                                        <li><a href="#"> MemberShip Package</a></li>
                                        <li><a href="#"> My Rewards</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="index.html">วิธีการสั่งซื้อ<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="index.html">Home shop 1</a></li>
                                                <li><a href="index-2.html">Home shop 2</a></li>
                                                <li><a href="index-3.html">Home shop 3</a></li>
                                                <li><a href="index-4.html">Home shop 4</a></li>
                                                <li><a href="index-5.html">Home shop 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega_items"><a href="shop.html">เกี่ยวกับเรา<i class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="#">Shop Layouts</a>
                                                        <ul>
                                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                            <li><a href="shop-list.html">List View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">other Pages</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">my account</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product Types</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                                            <li><a href="product-grouped.html">product grouped</a></li>
                                                            <li><a href="variable-product.html">product variable</a></li>
                                                            <li><a href="product-countdown.html">product countdown</a></li>

                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Concrete Tools</a>
                                                        <ul>
                                                            <li><a href="shop.html">Cables & Connectors</a></li>
                                                            <li><a href="shop-list.html">Graphics Tablets</a></li>
                                                            <li><a href="shop-fullwidth.html">Printers, Ink & Toner</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Refurbished Tablets</a></li>
                                                            <li><a href="shop-right-sidebar.html">Optical Drives</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">ค่าขนส่ง<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ข่าวสารและกิจกรรม <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="about.html">ติดต่อเรา</a></li>
                                        <li><a href="contact.html"> แจ้งปัญหา</a></li>
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