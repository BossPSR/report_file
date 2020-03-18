    <!--sticky header area end-->

    <!--breadcrumbs area start-->
    <!-- <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div> -->
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-1 col-md-3"></div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-10 col-md-8">
                    <div class="account_form register">
                        <h2>Sign Up</h2>
                        <form action="register_success" method="POST">
                            <?php $get_team = $this->db->get('tbl_team')->result_array(); ?>
                            <?php $get_user = $this->db->get('tbl_user')->result_array(); ?>

                            <?php foreach ($get_team as $key => $get_team) { ?>
                                <input type="text" name="get_team" value="<?php echo $get_team['email']; ?>" class="form-control" required hidden>
                                <input type="text" name="get_team_pass" value="<?php echo $get_team['passport']; ?>" class="form-control" required hidden>
                            <?php } ?>
                            <?php foreach ($get_user as $key => $get_user) { ?>
                                <input type="text" name="get_user" value="<?php echo $get_user['email']; ?>" class="form-control" required hidden>
                                <input type="text" name="get_user_pass" value="<?php echo $get_user['passport']; ?>" class="form-control" required hidden>
                            <?php } ?>
                            <p>
                                <label>Passport No. <span class="red">*</span></label>
                                <input type="number" name="passport" required>
                            </p>
                            <p>
                                <label>Email <span class="red">*</span></label>
                                <input type="email" name="email" required>
                            </p>
                            <p>
                                <label>Phone Number <span class="red">*</span></label>
                                <input type="number" name="phone" required>
                            </p>
                            <p>
                                <label>Name <span class="red">*</span></label>
                                <input type="text" name="username" required>
                            </p>
                            <p>
                                <label>Passwords <span class="red">*</span></label>
                                <input type="password" id="password" name="password" required>
                            </p>
                            <p>
                                <label>Comfirm password <span class="red">*</span></label>
                                <input type="password" id="c_password" name="c_password" required>
                                <span id="message"></span>
                            </p>
                            <div class="login_submit">
                                <button type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1 col-md-3"></div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->