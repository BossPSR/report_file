<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">Withdraw</h2>
<hr class="line_package">
<br>
<!--services img area-->
<div class="services_gallery mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1"></div>

            <div class="col-lg-10 col-md-10">
                <div class="row">
                    <div class="col-lg-11 col-md-11 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            ยอดคงเหลือในบัญชี
                        </div>
                        <div class="p-15 text-center color-p">
                            ฿<?php echo number_format($user['cash']); ?>
                        </div>
                        <div class="pb-18 text-center">
                            <a href="my-deposit" class="btn btn-primary button-p">เติมเงิน</a>
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-11 wall-center shadow-b table-w mtp-20">
                        <div class="text-center mbc-20">
                            ถอนเงินออกจากระบบ
                        </div>
                        <hr>

                        <div class="row text-center wall-center mtb-17-30">
                            <div class="col-md-6 ">
                                <?php if ($user['block_user'] == 1 && $user['cash'] > 0) { ?>
                                    <div class="form-control detail" style="height: 51px;text-align: center;font-size: 20px;">
                                        <?php echo $user['cash'] ?>
                                    </div>
                                    <input type="hidden" name="number" id="numberBox" class="form-control detail" min="0" max="<?php echo $user['cash'] ?>" value="<?php echo $user['cash'] ?>" placeholder="กรอกจำนวนเงิน" style="height: 51px;text-align: center;font-size: 25px;">
                                <?php } else { ?>
                                    <input type="number" name="number" id="numberBox" class="form-control detail" min="0" max="<?php echo $user['cash'] ?>" placeholder="กรอกจำนวนเงิน" style="height: 51px;text-align: center;font-size: 20px;">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row text-center wall-center mtb-20">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info" style="font-size: 20px;" data-toggle="modal" data-target="#staticBackdrop2"><i class="fa fa-money" aria-hidden="true"></i> ถอนเงิน</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
    </div>
</div>
<?php $tp = $this->db->get_where('tbl_price_management', ['id' => '1'])->row_array(); ?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h4 class="modal-title" id="staticBackdropLabel">Fee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="font-size: 18px;font-weight: 600;">Website fee <?php echo $tp['price']; ?> %</div>
                <div>ค่าธรรมเนียมทั้งหมด : <span class="feere"></span> </div>
                <div>ยอดคงเหลือของท่านจากการโดนหักค่าธรรมเนียม : <span class="details"></span> </div>
                <hr>
                <div class="row">
                    <div class="col-6 col-sm-12">
                        <div class="form-group">
                            <label style="font-size: 16px;font-weight: 600;" for="">กรุณาใส่ Paypal ของท่าน</label>
                            <input type="text" class="form-control" name="paypal" id="paypal_next">
                        </div>
                    </div>
                    <div class="col-6 col-sm-12">
                        <div class="form-group">
                            <label style="font-size: 16px;font-weight: 600;" for="">กรุณาใส่เบอร์โทรศัพท์ของท่าน</label>
                            <input type="text" class="form-control" name="tel" id="tel_next">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#www">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="www" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="withdraw_cash" method="post">
                <input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">
                <input type="hidden" name="paypal_sub" id="paypal_id" value="">
                <input type="hidden" name="tel_sub" id="tel_id" value="">
                <input type="hidden" name="numberBox_sub" id="numberBox_id" value="">
                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirm Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3" id="show_hide_password">
                        <input type="password" class="form-control" name="password" aria-describedby="basic-addon1" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $("#numberBox").change(function() {
            var max = parseInt($(this).attr('max'));
            var min = parseInt($(this).attr('min'));
            if ($(this).val() > max) {
                $(this).val(max);
            } else if ($(this).val() < min) {
                $(this).val(min);
            }
        });
    });

  
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".detail").change(function() {
            var plus = <?php echo $tp['price']; ?>;
            var value = $(this).val();
            var h = (value * plus) / 100;
            var result = value - h;
            $(".details").html(result);
        }).keyup();

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".detail").change(function() {
            var plus = <?php echo $tp['price']; ?>;
            var value = $(this).val();
            var h = (value * plus) / 100;
            $(".feere").html(h);
        }).keyup();

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#paypal_next").change(function() {
            var value = $(this).val();
            $("#paypal_id").val(value);
        }).change();

    });

    $(document).ready(function() {
        $("#tel_next").change(function() {
            var value = $(this).val();
            $("#tel_id").val(value);
        }).change();

    });

    $(document).ready(function() {
        $("#numberBox").change(function() {
            var value = $(this).val();
            $("#numberBox_id").val(value);
        }).change();

    });

</script>


<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#dropzone2", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)

    });

    $('#checkpassword').click(function() {
        if (myDropzone.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            myDropzone.on("queuecomplete", function(file, res) {
                swal("Good job!", "Upload for data successfull", "success", {
                    button: false,
                });
                setTimeout("location.reload(true);", 800);
            });
            $.ajax({
                type: 'POST',
                url: 'order_auto_sell',
                data: {
                    status: 1
                },
                success: function(data) {
                    myDropzone.processQueue();
                    myDropzone.on("queuecomplete", function(file, res) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });

                        setTimeout("location.reload(true);", 1000);
                    });
                },

            });
        }
    });

    $('#uploadfiles').click(function() {
        if (myDropzone.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            myDropzone.on("queuecomplete", function(file, res) {
                swal("Good job!", "Upload for data successfull", "success", {
                    button: false,
                });
                setTimeout("location.reload(true);", 800);
            });
            $.ajax({
                type: 'POST',
                url: 'order_auto_sell',
                data: {
                    status: 1
                },
                success: function(data) {
                    myDropzone.processQueue();
                    myDropzone.on("queuecomplete", function(file, res) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });

                        setTimeout("location.reload(true);", 1000);
                    });
                },

            });
        }
    });
</script>