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
                    <h2>Sign Up for team</h2>
                    <form action="register-team-success" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
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
                                    <input type="text" name="passport" class="form-control" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Countries <span class="red">*</span></label>
                                    <!-- <input type="number" name="passport" required> -->
                                    <select class="form-control" name="countries">
                                        <option selected disabled>-- SELECT COUNTRIES --</option>
                                        <?php foreach ($countries as $key => $countries) { ?>
                                            <option value="<?php echo $countries['id']; ?>"><?php echo $countries['countryName']; ?></option>
                                        <?php } ?>
                                    </select>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Name <span class="red">*</span></label>
                                    <input type="text" name="name" class="form-control" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Phone Number <span class="red">*</span></label>
                                    <input type="number" name="phone" class="form-control" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Email <span class="red">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Passwords <span class="red">*</span></label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Comfirm password <span class="red">*</span></label>
                                    <input type="password" id="c_password" name="c_password" class="form-control" required>
                                    <span id="message"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <?php $select_it = $this->db->get('tbl_select_item')->result_array() ;?>
                                    <label>Job <span class="red">*</span></label>
                                    <select id="multiple" class="form-control" name="job[]" style="width: 100%" multiple>
                                    <?php foreach ($select_it as $key => $si) { ?>
                                        <option value="<?php echo $si['id'] ;?>"><?php echo $si['name_item'] ;?></option>
                                    <?php } ?>
                                    </select>
                                    <!-- <button id="btnMultiple" class="btn btn-info">show multiple selection</button> -->
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Resume <span class="red">*</span></label>
                                    <input type="file" class="form-control" name="file_name" required>
                                    <!-- <input type="file" name="file_name" required> -->
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>
                                    <label for="">Bank account number</label>
                                    <input type="text" class="form-control" name="bank_account" value="" required>
                                </p>
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