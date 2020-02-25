<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Junko - shop fullwidth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/frontend/assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/plugins.css">
    <link href="assets/reponsive/plugins/selectator/fm.selectator.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="public/frontend/assets/css/hover.css">

    <!-- Main New Style CSS -->
    <link rel="stylesheet" href="public/frontend/assets/css/newstyle.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="public/frontend/assets/dist/dropzone.css">

    <script src="public/frontend/assets/dist/dropzone.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                size: 'responsive',
                height: 40
            }

        }).render('#paypal-button-container');
    </script>



</head>

<body>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=Ac07KebLbktQxg880Patw7ecxIfrV9267ir0H_n4uPFYww0abgRMKsRZW7VY6hMSgOh4Ho7v8fpRgUFF">
        // Required. Replace SB_CLIENT_ID with your sandbox client ID.
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
                                    <input type="email" name="email">
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                </p>
                                <div class="login_submit">
                                    <a href="#">Lost your password?</a>
                                    <!-- <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label> -->

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
                                <?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
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
                                        <a href="order"> My order</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                        <a href="my-selling"> My Selling</a>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="#">My Selling</a>
                                        <ul class="sub-menu">
                                            <li><a href="my-selling">Sale</a></li>
                                            <li><a href="my-reject">Reject</a></li>
                                        </ul>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="package">Package </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <i class="fa fa-bell icon-bell" style="color:#fff;" aria-hidden="true"></i>
                                    </li>
                                <?php elseif ($team) : ?>
                                    <li class="menu-item-has-children">
                                        <a href="#"> My stock</a>
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
                                        <a href="#">My Selling</a>
                                        <ul class="sub-menu">
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Sale</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Reject</a></li>
                                        </ul>
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
                            <!-- <div class="support_info ">
                                <p><i class="fa fa-circle" aria-hidden="true" style="color:green"></i> ONLINE</p>
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
                                        <li>
                                            <div class="dropdown">
                                                <a style="color:#73c803;font-weight:bold;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-circle" aria-hidden="true"></i> Online
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#73c803;"></i> Online</a></li>
                                                    <!-- <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#f82424;"></i> Away</a></li>
                                                    <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#ffbb3f;"></i> Busy</a></li> -->
                                                    <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#b6b6b6;"></i> Offline</a></li>
                                                </ul>
                                        </li>
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
                                <?php if ($user == false) :  ?>
                                    <div class="search_container" style="margin-right:200px;">
                                    <?php else : ?>
                                        <!-- <div class="search_container"> -->
                                    <?php endif ?>
                                    <?php if ($user == true) :
                                        // $score = $this->db->get_where('tbl_upload_store', ['userId' => $user['id']])->result_array();
                                        // $scoreAll = [];
                                        // foreach ($score as $scoreNum) {
                                        //     $scoreAll[] = $scoreNum['price_file'];
                                        // }
                                        // $scoreAll = array_sum($scoreAll);
                                    ?>
                                        <div class="middel_right_info">
                                            <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                <div class="menu-list"><?php echo number_format($user['score']); ?></div>
                                                <div>Score</div>
                                            </div>
                                            <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                <div class="menu-list"><?php echo number_format($user['cash']); ?></div>
                                                <div>My wallet</div>
                                            </div>
                                            <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                <div class="menu-list"><?php echo number_format($user['cash']); ?></div>
                                                <div>My Order</div>
                                            </div>


                                        </div>
                                    <?php else : ?>

                                    <?php endif ?>
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
                        <div class="categories_menu">
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
                                        <li><a href="store"> ต้องการขาย </a></li>
                                        <li><a href="order"> My order </a></li>
                                        <li><a href="#">My Selling<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="my-selling">Sale</a></li>
                                                <li><a href="my-reject">Reject</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="package"> Package</a></li>
                                        <!-- <li class="menu-item-has-children" style="margin-right: 15px;">
                                                    <i class="fa fa-commenting-o icon-bell" aria-hidden="true"></i>
                                                </li>
                                                <li class="menu-item-has-children" style="margin-right: 40px;">
                                                    <i class="fa fa-bell icon-bell" aria-hidden="true"></i>
                                                </li> -->
                                        <li>
                                            <!-- <div id="user_notify"> -->

                                            <!-- <div class="dropdown"> -->
                                            <!-- <div class="material-icons text-black-secondary badge-notification " data-badge="13">account_box</div> -->
                                            <!-- <i class="fa fa-bell text-black-white badge-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="0" style="font-size:22px;color:#fff;"></i> -->

                                            <!-- <ul class="dropdown-menu" role="menu">
                                                        <li><a>Action</a></li>
                                                    </ul> -->
                                            <!-- </div> -->


                                            <!-- </div> -->
                                            <?php
                                            $userUpload_store = $this->db->get_where('tbl_upload_store', ['userId' => $user['id'], 'price_file_read' => 0])->result_array();
                                            $userUpload_store = count($userUpload_store);
                                            ?>
                                            <div class="dropdown" id="user_notify">
                                                <i class="fa fa-bell text-black-white badge-notification" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="<?php echo $userUpload_store; ?>" style="font-size:22px;color:#fff; cursor: pointer;"></i>
                                                <ul class="dropdown-menu" style="display:none;" role="menu">
                                                    <li>Action</li>
                                                </ul>


                                            </div>
                                        </li>
                                        <li>
                                            <a>Discount :
                                                <?php if ($user['score'] < '100') : ?>
                                                    0%
                                                <?php elseif ($user['score'] <= '199') : ?>
                                                    10%
                                                <?php elseif ($user['score'] <= '299') : ?>
                                                    20%
                                                <?php elseif ($user['score'] <= '399') : ?>
                                                    30%
                                                <?php elseif ($user['score'] <= '499') : ?>
                                                    40%
                                                <?php else : ?>
                                                    50%
                                                <?php endif; ?>
                                            </a>
                                        </li>

                                    <?php elseif ($team) : ?>
                                        <li>
                                            <a href="My-stock"> My Stock</a>
                                        </li>
                                        <li>
                                            <a href="My-task"> My task</a>
                                        </li>
                                        <li>
                                            <a href="My-delivery"> Delivery</a>
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
                                        <li><a href="#">My Selling<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="#exampleModalCenter" data-toggle="modal">Sale</a></li>
                                                <li><a href="#exampleModalCenter" data-toggle="modal">Reject</a></li>
                                            </ul>
                                        </li>
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
                        <a href="<?php echo ($user) ? 'my-wallet' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                    <br>
                                    My wallet
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-deposit' : '#exampleModalCenter'; ?>">
                            <li>
                                <span>
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <br>
                                    Deposit
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-withdraw' : '#exampleModalCenter'; ?>">
                            <li>
                                <span>
                                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                                    <br>
                                    Withdraw
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo ($user) ? 'my-slip' : '#exampleModalCenter'; ?>">
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

    <script type="text/javascript">
        // $(function(){
        //     setInterval(function(){
        //         $.ajax({
        //             url:"userNotify",
        //             success:function(getData){
        //                 var elementNotify = '<div class="dropdown"><i class="fa fa-bell text-black-white badge-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="'+getData+'" style="font-size:22px;color:#fff;" onClick="read_userNotify();"></i>';
        //                     elementNotify += '<ul class="dropdown-menu" role="menu"><li>Action</li></ul></div>';
        //                 document.getElementById("user_notify").innerHTML = elementNotify;
        //             }
        //         });    
        //     },5000);    
        // });
        function read_userNotify() {
            $.ajax({
                url: "read_userNotify",
                data: {
                    user_id: <?php echo $user['id']; ?>,
                },
                success: function(getData) {
                    var numData = JSON.parse(getData);
                    var dataNotify = "";

                    if (numData.successfully === true) {
                        dataNotify = '<i class="fa fa-bell text-black-white badge-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="0" style="font-size:22px;color:#fff; cursor: pointer;"></i>';
                        dataNotify += '<ul class="dropdown-menu show" role="menu">';
                        // for (let index = 0; index < numData.dataList.list.length; index++) {
                        //    dataNotify += '<li>'+ 1 +'</li>';

                        // }
                        dataNotify += '<li>' + 1 + '</li>';
                        dataNotify += '</ul>';
                    }


                    document.getElementById("user_notify").innerHTML = dataNotify;
                    console.log(getData);
                }
            });
        }
    </script>