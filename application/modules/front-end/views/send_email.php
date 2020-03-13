<?php $id = $this->input->get('id'); ?>
<?php $token = $this->input->get('forgot_password'); ?>
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
                    <h2>Forget Password</h2>
                    <form action="forget_step3" method="post">
                        <p>
                            <label>New Password <span class="red">*</span></label>
                            <input type="password" name="new_password" required>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="token" value="<?php echo $token; ?>">
                        </p>
                        <p>
                            <label>Confirm New Password <span class="red">*</span></label>
                            <input type="password" name="confirm_new_password" required>
                        </p>
                        <div class="login_submit">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->