<!--services img area-->
<div class="services_gallery mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wall-center shadow-b hight-100 " style=" padding-right: 0px; padding-left: 0px;">
                        <div class="p-15 text-center header-profile">
                            โปรไฟล์ของฉัน
                        </div>
                        <div class="p-15 text-center">
                            <img class="profile-small" src="public/image/man.png" alt="">
                        </div>
                        <div class="p-15 text-center font18">
                            User001
                        </div>
                        <!-- <div class="ptw-5 text-center font17">
                            เอกสารของฉัน : 11 ฉบับ
                        </div> -->
                        <div class="pw-5 text-center font17">
                            ยอดคงเหลือ : ฿<?php echo number_format($user['cash']); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
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
                        <div class="text-center">
                            ถอนเงินออกจากระบบ
                        </div>
                        <form action="withdraw_cash" method="post">
                            <div class="row text-center wall-center mtb-17-30">
                                <div class="col-md-6 ">
                                    <input type="number" name="number" class="form-control" placeholder="กรอกจำนวนเงิน"  style="height: 51px;text-align: center;font-size: 20px;">
                                </div>
                            </div>
                            <div class="row text-center wall-center mtb-20">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info" style="font-size: 20px;"><i class="fa fa-money" aria-hidden="true"></i> ถอนเงิน</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>