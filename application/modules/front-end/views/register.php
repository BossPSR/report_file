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
                        <h2 style="text-align: center;">Sign Up</h2>
                        <form action="register_success" method="POST" name="thisForm">
                          
                            <p>
                                <label>Name <span class="red">*</span></label>
                                <input type="text" name="username" required>
                            </p>
                            <p>
                                <label>Email <span class="red">*</span></label>
                                <input type="email" name="email" required>
                            </p>
                            <p>
                                <label>Phone Number <span class="red">* (Should not wear a special symbol /*-+\)</span> </label>
                                <input type="number" name="phone" required>
                            </p>

                            <label>Passwords <span class="red"> Please enter a password of at least 8 characters. *</span></label>
                            <div class="input-group mb-3" id="show_hide_password">
                                <input type="password" id="password" name="password" onblur="check();" minlength="8" class="form-control" aria-describedby="basic-addon1" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                            <label>Comfirm password <span class="red">*</span><span id="message"></span></label>
                            <div class="input-group mb-3" id="show_hide_password">
                                <input type="password" id="c_password" name="c_password" class="form-control" minlength="8" aria-describedby="basic-addon1" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                </div>
                            </div>


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

    <script>
        function check() {
            var elem = document.getElementById('password').value;
            if (!elem.match(/^([a-z0-9])+$/i)) {
                alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
                document.getElementById('password').value = "";
            }
        }
    </script>
    <!-- customer login end -->