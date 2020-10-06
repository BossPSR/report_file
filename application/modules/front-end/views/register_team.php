<script>
    $(function() {
        $('#single').selectator();

        $('#btnSingle').click(function() {
            var s = $('#single').html();
            alert(s);
        });

        $('#multiple').selectator({
            showAllOptionsOnFocus: true
        });

        $('#btnMultiple').click(function() {
            var s = $('#multiple').val();
            alert(s);
        });
    });
</script>
<style>
    #selectator_multiple {
        min-height: 55px !important;
    }
</style>
<!-- customer login start -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">ข้อตกลงและเงื่อนไข</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1.การลงทะเบียนหรือสมัครบริการของเราผู้เรียนยอมรับที่จะรับอีเมลสมัครสมาชิกเกี่ยวกับการอัปเดตการให้บริการ www.tutorlearner.com หรือข้อเสนอส่งเสริมการขายอื่น ๆ </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="customer_login mt-60">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-1 col-md-1"></div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-10 col-md-10">
                <div class="account_form register">
                    <h2 class="text-center">สมัครเป็นติวเตอร์</h2>
                    <form action="register-team-success" method="POST" id="myLogin" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>เลือกประเทศ <span class="red">*</span></label>
                                    <select class="form-control" name="countries" id="cs">
                                        <option selected disabled>-- SELECT COUNTRIES --</option>
                                        <?php foreach ($countries as $key => $countries) { ?>
                                            <option value="<?php echo $countries['id']; ?>"><?php echo $countries['countryName']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label>ชื่อ <span class="red">* <span id="55" class="noneb" style="display: none;">(ชื่อต้องตรงกับเลขบัญชีธนาคาร)</span></span></label>
                                        <input type="text" name="name" id="name" onkeyup="nameFunction();" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label>นามสกุล <span class="red">* <span id="56" class="noneb" style="display: none;">(นามสกุลต้องตรงกับเลขบัญชีธนาคาร)</span></span></label>
                                        <input type="text" name="lastname" id="lastname" onkeyup="nameFunction();" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>อีเมล <span class="red">*</span></label>
                                    <input type="email" class="form-control" onkeyup="emailFunction();" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>หมายเลขโทรศัพท์ <span class="red">* (ไม่ควรสวมสัญลักษณ์พิเศษ /*-+\)</span></label>
                                    <input type="number" name="phone" class="form-control" required>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>รหัสผ่าน <span class="red"> โปรดป้อนรหัสผ่านอย่างน้อย 8 ตัวอักษร *</span></label>
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
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <?php $select_it = $this->db->get('tbl_item_position')->result_array(); ?>
                                    <label>อาชีพ <span class="red">* (สามารถเลือกได้มากกว่า 1 ตำแหน่ง)</span></label>
                                    <select id="multiple" class="form-control" name="job[]" multiple>
                                        <?php foreach ($select_it as $key => $si) { ?>
                                            <option value="<?php echo $si['id']; ?>"><?php echo $si['name_item']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <button id="btnMultiple" class="btn btn-info">show multiple selection</button> -->

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>ผลงานของฉัน <span class="red">* (PDF / Word)</span></label>
                                    <input type="file" class="form-control" name="file_name_resume" accept=".doc, .docx , .pdf" required style="padding: 10px 20px;height: auto;">
                                    <!-- <input type="file" name="file_name" required> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>อัปโหลดรูปประจำตัวปัจุบัน <span class="red">* (หากในวันสัมภาษณ์พบว่าใช้รูปไม่ตรงปกจะถูกตัดสิทธิ์ทันที)</span></label>
                                    <input type="file" class="form-control" name="file_name_profile" accept="image/jpeg, image/png" required style="padding: 10px 20px;height: auto;">
                                    <!-- <input type="file" name="file_name" required> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 nonep">
                                <div class="form-group">
                                    <label for="">เพย์พาล <span style="color: #bbbbbb;">ต้องเป็นชื่อเดียวกันกับชื่อบัญชีธนาคารหรือ Pay pal</span></label>
                                    <input type="text" id="paypal" class="form-control" name="bank_account" value="" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="form-group">
                                    <label for="">กรอกเลขบัตรประชาชน <span style="color: red;">*</span></label>
                                    <input type="text" id="ID_card_number" class="form-control" name="id_card_number" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="form-group">
                                    <label for="">ที่อยู่ตามบัตรประชาชน <span style="color: red;">*</span></label>
                                    <input type="text" id="address" class="form-control" name="address" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">ตำบล <span style="color: red;">*</span></label>
                                        <input type="text" id="district" class="form-control district" name="district" value="">
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">อำเภอ <span style="color: red;">*</span></label>
                                        <input type="text" id="amphoe" class="form-control amphoe" name="amphoe" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">จังหวัด <span style="color: red;">*</span></label>
                                        <input type="text" id="province" class="form-control province" name="province" value="">
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">รหัสไปรษณีย์ <span style="color: red;">*</span></label>
                                        <input type="text" id="zipcode" class="form-control zipcode" name="zipcode" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">รูปถ่ายบัตรประชาชน <span style="color: red;">*</span></label>
                                        <input type="file" id="file_name_card_number" class="form-control" name="file_name_card_number" accept="image/jpeg, image/png" required style="padding: 10px 20px;height: auto;">
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">รูปถ่ายคู่กับบัตรประชาชน <span style="color: red;">*</span></label>
                                        <input type="file" id="file_name_card_number2" class="form-control" name="file_name_card_number_user" accept="image/jpeg, image/png" required style="padding: 10px 20px;height: auto;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-4">
                                        <label for="">ธนาคาร <span style="color: red;">*</span></label>
                                        <select class="form-control" id="bank2" name="bank_name">
                                            <option value="" disabled selected>กรุณาเลือกธนาคาร</option>
                                            <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                                            <option value="กรุงไทย">กรุงไทย</option>
                                            <option value="กสิกรไทย">กสิกรไทย</option>
                                            <option value="กรุงเทพ">กรุงเทพ</option>
                                            <option value="กรุงศรี">กรุงศรี</option>
                                            <option value="ทหารไทย">ทหารไทย</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-8">
                                        <label for="">เลขบัญชีธนาคาร <span style="color: #bbbbbb;">ต้องเป็นชื่อเดียวกันกับชื่อบัญชีธนาคารหรือ บัญชีธนาคาร</span></label>
                                        <input type="text" id="bank" class="form-control" name="bank_number" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">รูปถ่ายหน้าบัญชีธนาคาร <span style="color: red;">*</span></label>
                                        <input type="file" id="file_name_book_bank" class="form-control" name="file_name_book_bank" accept="image/jpeg, image/png" required style="padding: 10px 20px;height: auto;">
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12 col-md-6">
                                        <label for="">Line id <span style="color: red;">*</span></label>
                                        <input type="text" id="line_id" class="form-control" name="line_id" value="" style="padding: 13px 20px;height: auto;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <?php $select_ed = $this->db->get('tbl_item_educational')->result_array(); ?>
                                    <label for="">การศึกษา </label>
                                    <select class="form-control" name="educational" required>
                                        <option value="" selected disabled> -- Select -- </option>
                                        <?php foreach ($select_ed as $key => $ed) { ?>
                                            <option value="<?php echo $ed['name_educational']; ?>"><?php echo $ed['name_educational']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="login_submit">
                            <button type="submit" id="save_chk">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>

            <!--register area end-->
            <!--login area start-->
            <div class="col-lg-1 col-md-1"></div>
            <!--login area start-->
        </div>
    </div>
</div>
<!-- customer login end -->
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
<script>
    function nameFunction() {
        var checkName = document.getElementById('name').value;
        $.ajax({
            type: 'POST',
            url: 'check_name',
            data: {
                name: checkName
            },
            success: function(data) {
                if (data == "data found") {
                    swal("Warning", "ชื่อนี้ได้ถูกใช้งานแล้ว!!", "warning");
                }
            },

        });
    }

    function emailFunction() {
        var checkEmail = document.getElementById('email').value;
        $.ajax({
            type: 'POST',
            url: 'check_email',
            data: {
                email: checkEmail
            },
            success: function(data) {
                if (data == "data found") {
                    swal("Warning", "Email นี้ได้ถูกใช้งานแล้ว!!", "warning");
                }
            },

        });
    }

    function check() {
        var elem = document.getElementById('password').value;
        if (!elem.match(/^([a-z0-9])+$/i)) {
            alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
            document.getElementById('password').value = "";
        }
    }
</script>
<script type="text/javascript">
    $.Thailand({
        $district: $('.district'), // input ของตำบล
        $amphoe: $('.amphoe'), // input ของอำเภอ
        $province: $('.province'), // input ของจังหวัด
        $zipcode: $('.zipcode'), // input ของรหัสไปรษณีย์
    });
</script>
<script>
    $('#cs').change(function() {
        // $('.te4').css('display', 'none');
        if (this.value == "218") {
            $('.noneb').fadeIn("slow");
            $('.nonep').css('display', 'none');
            $("#paypal").prop('required', false);
            $("#bank").prop('required', true);
            $("#55").prop('required', false);
            $("#56").prop('required', false);
            $("#ID_card_number").prop('required', true);
            $("#address").prop('required', false);
            $("#district").prop('required', true);
            $("#amphoe").prop('required', true);
            $("#province").prop('required', true);
            $("#file_name_card_number").prop('required', true);
            $("#zipcode").prop('required', true);
            $("#file_name_card_number2").prop('required', true);
            $("#bank2").prop('required', true);
            $("#file_name_book_bank").prop('required', true);
            $("#line_id").prop('required', true);
        } else {
            $('.noneb').css('display', 'none');
            $('.nonep').fadeIn("slow");
            $("#paypal").prop('required', true);
            $("#bank").prop('required', false);
            $("#55").prop('required', false);
            $("#56").prop('required', false);
            $("#ID_card_number").prop('required', false);
            $("#address").prop('required', false);
            $("#district").prop('required', false);
            $("#amphoe").prop('required', false);
            $("#province").prop('required', false);
            $("#file_name_card_number").prop('required', false);
            $("#zipcode").prop('required', false);
            $("#file_name_card_number2").prop('required', false);
            $("#bank2").prop('required', false);
            $("#file_name_book_bank").prop('required', false);
            $("#line_id").prop('required', false);
        }
    });
</script>

<script>
    $('#save_chk').on('click', function() {
        var x = $('#name').val();
        var e = $('#email').val();
        var p = $('#password').val();
        var chk_p = $('#c_password').val();

        if (x == '') {
            swal("Warning", "กรุณากรอกชื่อผู้ใช้งาน!!", "warning");
        }
        if (e == '') {
            swal("Warning", "กรุณากรอก Email ของคุณ!!", "warning");
        }
        if (p == '' || chk_p == '') {
            swal("Warning", "กรุณากรอกรหัสผ่านของคุณให้ตรงกัน!!", "warning");
        }
        if (p != chk_p) {
            swal("Warning", "กรุณากรอกรหัสผ่านของคุณให้ตรงกัน!!", "warning");
        }

        if (x != '' && e != '' && p != '' && chk_p != '' && p == chk_p) {
            $('#myLogin').submit();
        }


    });
</script>