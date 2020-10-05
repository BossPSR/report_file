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
                        <h2 style="text-align: center;">สมัครเป็นผู้เรียน</h2>
                        <form action="register_success" method="POST" name="thisForm">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>เลือกประเทศ <span class="red">*</span></label>
                                    <!-- <input type="number" name="passport" required> -->
                                    <select class="form-control" name="countries" required>
                                        <option selected disabled>-- เลือกประเทศ --</option>
                                        <?php foreach ($countries as $key => $countries) { ?>
                                            <option value="<?php echo $countries['id']; ?>"><?php echo $countries['countryName']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>ชื่อ <span class="red">*</span></label>
                                    <input type="text" name="username" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>นามสกุล <span class="red">*</span></label>
                                    <input type="text" name="last_name" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>อีเมล์ <span class="red">*</span></label>
                                    <input type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>หมายเลขโทรศัพท์ <span class="red">* (Should not wear a special symbol /*-+\)</span> </label>
                                    <input type="number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>รหัสผ่าน <span class="red"> Please enter a password of at least 8 characters. *</span></label>
                                    <div class="input-group mb-3" id="show_hide_password">
                                        <input type="password" id="password" name="password" onblur="check();" minlength="8" class="form-control" aria-describedby="basic-addon1" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>ยืนยันรหัสผ่าน <span class="red">*</span><span id="message"></span></label>
                                    <div class="input-group mb-3" id="show_hide_password">
                                        <input type="password" id="c_password" name="c_password" class="form-control" minlength="8" aria-describedby="basic-addon1" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="login_submit">
                                        <button type="submit">บันทึก</button>
                                    </div>
                                </div>
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