<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fileback Help</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/frontend/assets/img/logo/1255.png">

    <!-- CSS 
    ========================= -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
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

    <link rel="stylesheet" href="public/frontend/assets/css/animation.min.css">

    <style>
        .modal-content {
            border-radius: 7px;
        }
    </style>

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
                    <div class="col-md-12"><img style="width: 250px;" src="public/frontend/assets/img/logo/1277.png" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="account_form">
                            <form action="loginme" method="post">
                                <p>
                                    <label>อีเมล <span>*</span></label>
                                    <input type="email" name="email" required>
                                </p>
                                <label>รหัสผ่าน</label>
                                <div class="input-group mb-3" id="show_hide_password">
                                    <input type="password" class="form-control" name="password" aria-describedby="basic-addon1" required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                                <div class="login_submit">
                                    <a href="forget_password">ลืมรหัสผ่าน?</a>
                                </div>
                                <div class="login_submit">
                                    <button type="submit">เข้าสู่ระบบ</button>
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
    <div class="off_canvars_overlay"></div>
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
                                    <li><a href="register"> สมัครสมาชิก </a></li>
                                <?php endif  ?>
                                <li><a href="change?type=thailand&uri=<?php echo $this->uri->segment(1); ?>"> TH </a></li>
                                <li><a href="change?type=english&uri=<?php echo $this->uri->segment(1); ?>"> ENG </a></li>
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
                                        <a href="home"> หน้าแรก</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="buy"> My Buy</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="order"> My order</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="store"> My Sell</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">My Selling</a>
                                        <ul class="sub-menu">
                                            <li><a href="my-selling">Sale</a></li>
                                            <li><a href="my-cashback">Cashback</a></li>
                                            <li><a href="my-rewards">Rewards</a></li>
                                            <li><a href="my-commission">Commission</a></li>
                                            <li><a href="my-deduct">Deduct</a></li>
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
                                        <a href="home"> หน้าแรก</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="My-stock-Item"> Order List</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="upload"> Delivery</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="my-feedback"> My Feedback</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">My History</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Score</a></li>
                                            <li><a href="">Income</a></li>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li class="menu-item-has-children">
                                        <a href="home"> หน้าแรก</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#exampleModalCenter" data-toggle="modal"> My Buy</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#exampleModalCenter" data-toggle="modal"> My Sell</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">My Selling</a>
                                        <ul class="sub-menu">
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Sale</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Cashback</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Rewards</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Commission</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal">Deduct</a></li>
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
            <div class="header_top" style="background-color: #2b2871;">
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
                                        <li><a style="color: white;" href="my-profile"> <?php echo $user['idUser'] ?> </a> <img class="profile" src="<?php echo (empty($user['file_name'])) ? "public/image/user.png" :  $user['file_name']; ?>" alt="" style="width: 35px;height: 35px;"></li>
                                        <li><a style="color: white;" href="Logout" onclick="return confirm('Are you sure to logout?');"> ออกจากระบบ </a></li>
                                    <?php elseif ($team == true) : ?>
                                        <li>
                                            <div class="dropdown">
                                                <?php
                                                $status_team = $this->db->get_where('tbl_status_team', ['IdTeam' => $team['IdTeam']])->row_array();
                                                ?>
                                                <?php
                                                if (isset($status_team)) {
                                                ?>
                                                    <a style="color:#73c803;font-weight:bold;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-circle" aria-hidden="true"></i> Online
                                                    </a>
                                                <?php } else { ?>
                                                    <a style="color:#b6b6b6;font-weight:bold;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-circle" aria-hidden="true"></i> Offline
                                                    </a>
                                                <?php } ?>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li style="margin: 5px 10px;"><a href="teamOnline"><i class="fa fa-circle" style="color:#73c803;"></i> Online</a></li>
                                                    <!-- <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#f82424;"></i> Away</a></li>
                                                    <li style="margin: 5px 10px;"><a href="#"><i class="fa fa-circle" style="color:#ffbb3f;"></i> Busy</a></li> -->
                                                    <li style="margin: 5px 10px;"><a href="teamOffline"><i class="fa fa-circle" style="color:#b6b6b6;"></i> Offline</a></li>
                                                </ul>
                                        </li>
                                        <li><a style="color: white;" href="My-profile_team"> <?php echo $team['name']; ?> </a> <img class="profile" src="<?php echo (empty($team['file_name'])) ? "public/image/user.png" :  $team['file_name']; ?>" alt="" style="width: 35px;height: 35px;"></li>
                                        <li><a style="color: white;" href="Logout?team=team" onclick="return confirm('Are you sure to logout?');"> ออกจากระบบ </a></li>
                                    <?php else :  ?>
                                        <li><a style="color: white;" href="#exampleModalCenter" data-toggle="modal"> เข้าสู่ระบบ </a></li>
                                        <li><a style="color: white;" href="main"> สมัครสมาชิก </a></li>
                                    <?php endif  ?>
                                    <li><a style="color: white;" href="change?type=thailand&uri=<?php echo $this->uri->segment(1); ?>"> TH </a></li>
                                    <li><a style="color: white;" href="change?type=english&uri=<?php echo $this->uri->segment(1); ?>"> ENG </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!-- <style>
                #try {
                    overflow: hidden;
                    /* Ensures the content is not revealed until the animation */
                    border-right: .15em solid orange;
                    /* The typwriter cursor */
                    white-space: nowrap;
                    /* Keeps the content on a single line */
                    margin: 0 auto;
                    /* Gives that scrolling effect as the typing happens */
                    letter-spacing: .15em;
                    /* Adjust as needed */
                    animation:
                        typing 3.5s steps(40, end),
                        blink-caret .75s step-end infinite;
                }

                /* The typing effect */
                @keyframes typing {
                    from {
                        width: 0
                    }

                    to {
                        width: 100%
                    }
                }

                /* The typewriter cursor effect */
                @keyframes blink-caret {

                    from,
                    to {
                        border-color: transparent
                    }

                    50% {
                        border-color: orange;
                    }
                }
            </style> -->
            <!--header middel start-->
            <div class="header_middle" style="background-image: linear-gradient(#2b286f, #282392);">
                <div class="container" style="max-width: 1470px;">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="logo">
                                <a href="home"><img src="public/frontend/assets/img/logo/1299.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 text-center">
                            <h1 style="color: #fff;">
                                <span class="txt-rotate" data-period="2000" data-rotate='[ "รับค่าคอมมิชชั่นง่ายๆสูงสุด $40.", "รับส่วนลดง่ายๆเพียงแค่กดปุ่ม Earn point",
                                 "ปลอดภัย 100% ด้วยระบบ Wallet ป้องกันการถูกโกง", "ทีมงานติวเตอร์ทุกท่านเป็นผู้เชี่ยวชาญ.",
                                  "รับประกันการแก้ไขงานนานถึง 60 วัน" , "สะสมคะแนนรับส่วนลดแบบไม่มีวันหมดอายุ" , "ราคามาตราฐาน" ]'></span>
                            </h1>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="middel_right">
                                <?php if ($user == false) :  ?>
                                    <div class="search_container" style="margin-right: 0px;">
                                    <?php elseif ($team == true) : ?>
                                        <div class="search_container" style="margin-right: 0px;">
                                        <?php else : ?>
                                        <?php endif ?>
                                        <?php if ($user == true) : ?>
                                            <div class="middel_right_info">

                                                <div class="header_wishlist text-center" style="margin-right: 25px;color: white;">
                                                    <div class="menu-list"><?php echo number_format($user['commission']); ?></div>
                                                    <div>ค่าแนะนำของฉัน </div>
                                                </div>
                                                <div class="header_wishlist text-center" style="margin-right: 25px;color: white;">
                                                    <div class="menu-list">
                                                        <?php
                                                        $numScore = 0;

                                                        $this->db->select('*');
                                                        $this->db->from('tbl_user');
                                                        $this->db->where('idUser', $user['idUser']);
                                                        $numScore = 0;
                                                        $scoreListNum = $this->db->get()->result_array();
                                                        foreach ($scoreListNum as $scoreListNum) {
                                                            $numScore += $scoreListNum['score'];
                                                        }

                                                        $discountUser = $user['score'] / 10;
                                                        ?>
                                                        <?php echo $discountUser; ?>%
                                                    </div>
                                                    <div>ส่วนลด</div>
                                                </div>
                                                <div class="header_wishlist text-center" style="margin-right: 25px;color: white;">
                                                    <div class="menu-list"><?php echo number_format($user['score']); ?></div>
                                                    <div>คะแนนสะสม</div>
                                                </div>

                                                <div class="header_wishlist text-center" style="margin-right: 25px;color: white;">
                                                    <div class="menu-list"><?php echo number_format($user['cash']); ?></div>
                                                    <div>กระเป๋าตังค์</div>
                                                </div>
                                            </div>
                                        <?php elseif ($team == true) : ?>
                                            <div class="middel_right_info">
                                                <!-- <div class="header_wishlist text-center" style="margin-right: 30px;">
                                                <div class="menu-list"></div>
                                                <div>Score</div>
                                            </div> -->


                                                <?php
                                                $this->db->select('*,sum(tbl_upload_order.status_delivery) as sum_delivery');
                                                $this->db->from('tbl_upload_team');
                                                $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
                                                $this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
                                                $this->db->where('tbl_upload_order.status_delivery', 1);
                                                $this->db->where('tbl_upload_order.status_approved', 1);

                                                $sm_del = $this->db->get()->row_array();
                                                ?>
                                                <div class="header_wishlist text-center" style="margin-right: 30px;color: white;">
                                                    <div class="menu-list">
                                                        <?php if (empty($sm_del['sum_delivery'])) { ?>
                                                            0
                                                        <?php } else { ?>
                                                            <?php echo $sm_del['sum_delivery']; ?>
                                                        <?php } ?>
                                                    </div>
                                                    <div>My Jobs</div>
                                                </div>

                                                <?php
                                                $this->db->select('*');
                                                $this->db->from('tbl_upload_team');
                                                $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
                                                $this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
                                                $this->db->where('tbl_upload_order.status_delivery', 1);
                                                $this->db->group_by('tbl_upload_team.order_id');


                                                $sm_de2 = $this->db->get()->result_array();
                                                $cc = 0;
                                                ?>
                                                <div class="header_wishlist text-center" style="margin-right: 30px;color: white;">
                                                    <div class="menu-list">
                                                        <?php foreach ($sm_de2 as $key => $sm_de2) : ?>
                                                            <?php $cc += $sm_de2['wage']; ?>
                                                        <?php endforeach; ?>
                                                        <?php echo $cc; ?>
                                                    </div>
                                                    <div>My Income</div>
                                                </div>
                                                <div class="header_wishlist text-center" style="margin-right: 30px;color: white;">
                                                    <div> 1 ดอลลาร์สหรัฐ </div>
                                                    <div>เท่ากับ 31.14 บาท </div>
                                                </div>

                                            </div>
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
            <div class="main_menu_area" style="background: #282390;border-top: 1px solid white;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="categories_menu" style="padding-bottom: 8px;">
                                <div class="categories_title" style="background: #282390;">
                                    <h2 class="categori_toggle">รายการอื่นๆ</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <?php if ($user) :  ?>
                                            <li><a href="my-rewards"> รางวัลของฉัน <i class="fa fa-angle-right"></i></a></li>
                                            <li>
                                                <a href="user-manual"> คู่มือการใช้งาน <i class="fa fa-angle-right"></i></a>
                                            </li>

                                        <?php elseif ($team) : ?>
                                            <li><a href="my-rewards-team"> รางวัลของฉัน <i class="fa fa-angle-right"></i></a></li>
                                            <li>
                                                <a href="user-manual"> คู่มือการใช้งาน <i class="fa fa-angle-right"></i></a>
                                            </li>
                                        <?php else : ?>
                                            <li><a href="my-rewards"> รางวัลของฉัน <i class="fa fa-angle-right"></i></a></li>
                                            <li>
                                                <a href="user-manual"> คู่มือการใช้งาน <i class="fa fa-angle-right"></i></a>
                                            </li>
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
                                            <li><a href="home"> หน้าแรก</a></li>
                                            <li><a href="buy"> สั่งออร์เดอร์ <div class="arrow_box"></div></a></li>
                                            <li><a href="order"> ออร์เดอร์ของฉัน </a></li>
                                            <li><a href="store"> แลกคะแนนส่วนลด </a></li>
                                            <li><a href="#">My Selling<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="my-selling">ได้รับคะแนน</a></li>
                                                    <li><a href="my-cashback">Cashback</a></li>
                                                    <li><a href="my-rewards-list">Rewards</a></li>
                                                    <li><a href="my-commission">Commission</a></li>
                                                    <li><a href="my-deduct">ถูกหักคะแนน</a></li>
                                                    <li><a href="my-reject">ไม่ผ่านเกณฑ์</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="package"> แพ็คเกจ</a></li>
                                            <li><?php $this->load->view('options/notify_user'); ?></li>
                                            <li> </li>

                                        <?php elseif ($team) : ?>
                                            <li><a href="home"> หน้าแรก</a></li>
                                            <li>
                                                <a href="My-stock-Item"> Order List</a>
                                            </li>
                                            <li>
                                                <a href="My-task"> My task</a>
                                            </li>
                                            <li>
                                                <a href="My-delivery"> Delivery</a>
                                            </li>
                                            <li>
                                                <a href="my-feedback"> My Feedback</a>
                                            </li>

                                            <li><a href="#">My History<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="my_store_team">Score</a></li>
                                                    <li><a href="my_score_team_deduct">Score deducted</a></li>
                                                    <li><a href="my_income">Income</a></li>
                                                    <li><a href="my_income_team_deduct">Income deducted</a></li>

                                                </ul>
                                            </li>
                                            <!-- <li>
                                            <a href="package">My Income : $<?php echo $user['cash']; ?></a></li>
                                        </li> -->
                                            <li></li>
                                            <li><?php $this->load->view('options/notify_team'); ?></li>
                                        <?php else : ?>
                                            <li><a href="home"> หน้าแรก</a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> สั่งออร์เดอร์ <div class="arrow_box"></div></a></li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> แลกคะแนนส่วนลด </a></li>
                                            <li><a href="#">ข้อมูลคะแนน<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">ได้รับคะแนน</a></li>
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">Cashback</a></li>
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">Rewards</a></li>
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">Commission</a></li>
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">ถูกหักคะแนน</a></li>
                                                    <li><a href="#exampleModalCenter" data-toggle="modal">ไม่ผ่านเกณฑ์</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#exampleModalCenter" data-toggle="modal"> แพ็คเกจ</a></li>
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
                        <?php if ($user) { ?>
                            <a href="<?php echo ($user) ? 'my-wallet' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                                <li>
                                    <span>
                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                        <br>
                                        กระเป๋าตังค์
                                    </span>
                                </li>
                            </a>
                            <a href="<?php echo ($user) ? 'my-deposit' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                                <li>
                                    <span>
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                        <br>
                                        เติมเงิน
                                    </span>
                                </li>
                            </a>

                            <a href="<?php echo ($user) ? 'my-withdraw' : '#exampleModalCenter'; ?>" <?php echo ($user) ? '' : 'data-toggle="modal"'; ?>>
                                <li>
                                    <span>
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        <br>
                                        ถอนเงิน
                                    </span>
                                </li>
                            </a>
                        <?php } ?>
                        <a href="<?php echo ($user || $team) ? 'my-slip' : '#exampleModalCenter'; ?>" <?php echo ($user || $team) ? '' : 'data-toggle="modal"'; ?>>
                            <li>
                                <span>
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <br>
                                    ใบเสร็จของฉัน
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
    </aside>
    <!--sidebar widget end-->
    <script>
        <?php if ($team == true) { ?>
            setInterval(function() {
                checkStatus();
            }, 3000);

            function checkStatus() {
                $.ajax({
                    url: 'checkStatus',
                    data: {
                        IdTeam: '<?php echo $team['IdTeam']; ?>'
                    },
                    success: function(getData) {

                        console.log(getData);

                    }
                });
            }
        <?php } ?>
    </script>
    <script>
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
        };
    </script>