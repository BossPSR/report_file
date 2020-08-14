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
<div class="customer_login mt-60">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-1 col-md-1"></div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-10 col-md-10">
                <div class="account_form register">
                    <h2 class="text-center">Sign Up for team</h2>
                    <form action="register-team-success" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Countries <span class="red">*</span></label>
                                    <select class="form-control" name="countries" id="cs">
                                        <option selected disabled>-- SELECT COUNTRIES --</option>
                                        <?php foreach ($countries as $key => $countries) { ?>
                                            <option value="<?php echo $countries['id']; ?>"><?php echo $countries['countryName']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Name <span class="red">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Email <span class="red">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Phone Number <span class="red">*</span></label>
                                    <input type="number" name="phone" class="form-control" required>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Passwords <span class="red"> Please enter a password of at least 8 characters. *</span></label>
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
                                    <label>Comfirm password <span class="red">*</span><span id="message"></span></label>
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
                                    <label>Job <span class="red">*</span></label>
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
                                    <label>Resume <span class="red">* (PDF / Word)</span></label>
                                    <input type="file" class="form-control" name="file_name" accept=".doc, .docx , .pdf" required style="padding: 10px 20px;height: auto;">
                                    <!-- <input type="file" name="file_name" required> -->
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 nonep">
                                <div class="form-group">
                                    <label for="">Paypal <span style="color: #bbbbbb;">ต้องเป็นชื่อเดียวกันกับชื่อบัญชีธนาคารหรือ Pay pal</span></label>
                                    <input type="text" id="paypal" class="form-control" name="bank_account" value="" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 noneb" style="display: none;">
                                <div class="form-group">
                                    <label for="">บัญชีธนาคาร <span style="color: #bbbbbb;">ต้องเป็นชื่อเดียวกันกับชื่อบัญชีธนาคารหรือ บัญชีธนาคาร</span></label>
                                    <input type="text" id="bank" class="form-control" name="bank_account" value="" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <?php $select_ed = $this->db->get('tbl_item_educational')->result_array(); ?>
                                    <label for="">Educational </label>
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
                            <button type="submit">Save</button>
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

<script>
    function check() {
        var elem = document.getElementById('password').value;
        if (!elem.match(/^([a-z0-9])+$/i)) {
            alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
            document.getElementById('password').value = "";
        }
    }
</script>
<script>
    $('#cs').change(function() {
        // $('.te4').css('display', 'none');
        if (this.value == "218") {
            $('.noneb').fadeIn("slow");
            $('.nonep').css('display', 'none');
            $("#paypal").prop('required', true);
            $("#bank").prop('required', false);
        } else {
            $('.noneb').css('display', 'none');
            $('.nonep').fadeIn("slow");
            $("#paypal").prop('required', false);
            $("#bank").prop('required', true);
        } 
    });
</script>
<!-- customer login end -->