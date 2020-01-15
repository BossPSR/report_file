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
            <div class="col-lg-3 col-md-3">

            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-8 col-md-8">
                <div class="account_form register">
                    <h2>Sign Up for team</h2>
                    <form action="#" method="POST">
                        <div class="row">
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
                                    <input type="text" name="name" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Phone Number <span class="red">*</span></label>
                                    <input type="number" name="phone" required>
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
                                    <input type="password" id="password" name="password" required>
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Comfirm password <span class="red">*</span></label>
                                    <input type="password" id="c_password" name="c_password" required>
                                    <span id="message"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <p>
                                    <label>Job <span class="red">*</span></label>
                                    <select id="multiple" name="job" style="width: 100%" multiple>
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">Bootstrap</option>
                                        <option value="4">JavaScript</option>
                                        <option value="5">jQuery</option>
                                        <option value="6">jQuery</option>
                                        <option value="7">jQuery</option>
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
                        </div>
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