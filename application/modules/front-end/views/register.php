    
   
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
                <div class="col-lg-3 col-md-3">
                    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-8 col-md-8">
                    <div class="account_form register">
                        <h2>Sign Up</h2>
                        <form action="register_success" method="POST" >
                            <p>   
                                <label>Passport No.  <span class="red">*</span></label>
                                <input type="number" name="passport" required>
                            </p>
                            <p>   
                                <label>Email <span class="red">*</span></label>
                                <input type="email" name="email" required>
                            </p>
                            <p>   
                                <label>Phone Number  <span class="red">*</span></label>
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
                                <span id="message" ></span>
                            </p>
                            <div class="login_submit">
                                <button type="submit">Save</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->
