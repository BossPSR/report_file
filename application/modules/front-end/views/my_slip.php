<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if ($team) { ?>
    <?php
    $this->db->select('*,sum(tbl_upload_order.status_delivery) as sum_delivery');
    $this->db->from('tbl_upload_team');
    $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
    $this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
    $this->db->where('tbl_upload_order.status_delivery', 1);

    $sm_del = $this->db->get()->row_array();
    ?>
<?php } else { ?>
    <?php
    $this->db->select('*,count(status_delivery) as sum_delivery');
    $this->db->from('tbl_upload_order');
    $this->db->where('userId', $user['idUser']);
    $this->db->where('status_delivery', 1);

    $sm_del2 = $this->db->get()->row_array();
    ?>
<?php } ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">My Slip</h2>
<hr class="line_package">
<br>
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
                            <?php if ($team) { ?>
                                <b><?= $team['name']; ?></b>
                            <?php } else { ?>
                                <?= $user['username']; ?>
                            <?php } ?>
                        </div>
                        <div class="ptw-5 text-center font17">
                            <?php if ($team) { ?>
                                My Job : <?= $sm_del['sum_delivery']; ?>
                            <?php } else { ?>
                                My order : <?= $sm_del2['sum_delivery']; ?>
                            <?php } ?>
                        </div>
                        <div class="pw-5 text-center font17">
                            <?php if ($team) { ?>
                                My Income : $ <?php echo number_format($team['income']); ?>
                            <?php } else { ?>
                                My waller : $ <?= number_format($user['cash']); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-11 col-md-11 wall-center shadow-b ml-20">
                        <div class="p-15" style="color: blue;">
                            <div>ย้อนดูประวัติกล่องพัสดุ</div>
                            <div>เนื่องจากระบบอัพเดท คลิกดูรายละเอียด บิลก่อนวันที่ 21 มกราคม 2019</div>
                            <div>การแจ้งเคลมหลังจากได้รับสินค้า</div>
                            <div>1. หากลูกค้าได้รับสินค้าแล้วพบว่ากล่องพัสดุเสียหาย สามารถปฏิเสธการรับสินค้านั้น ๆ ได้ และต้องทำการถ่ายภาพกล่องพัสดุที่เสียหายไว้ด้วย พร้อมทั้งส่งหลักฐานภาพถ่ายและรายละเอียดกล่องพัสดุที่เสียหายมายังอีเมล์ cs@vcanbuy.com ทันที ทางบริษัทฯ จะดำเนินการตรวจสอบกับบริษัทขนส่งนั้น ๆ ต่อไป</div>
                            <div>2. หากลูกค้าได้รับสินค้า แล้วพบว่าไม่ตรงตามที่ระบบแจ้งไว้ สามารถส่งรายละเอียดมายังอีเมล์ cs@vcanbuy.com</div>
                            <div>ทางเจ้าหน้าที่จะดำเนินการตรวจสอบโดยเร็วที่สุด</div>
                            <div>ข้อแนะนำ : หากลูกค้าได้รับสินค้าแล้วมีปัญหา ต้องทำการถ่ายรูปสินค้าและส่งคำร้องเรียนแจ้งเคลมผ่านอีเมล์ cs@vcanbuy.com ภายใน 3-5 วัน หลังจากได้รับสินค้า หากเกินระยะเวลานี้ ทางบริษัทฯ ขอสงวนสิทธิ์ไม่รับคำร้องเรียน</div>
                            <div>ดังกล่าว และขั้นตอนตรวจสอบจะใช้เวลาประมาณ 7-15 วันทำการ</div>
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-11 wall-center shadow-b table-w mtp-20">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php if ($user) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ชำระเงินแล้ว</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ยังไม่ชำระเงิน</a>
                                </li>
                            <?php } ?>

                            <?php if ($team) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ประวัติการถอนเงิน</a>
                                </li>
                            <?php } ?>

                        </ul>
                        <?php if ($user) { ?>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table mt-15">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ราคา</th>
                                                <th scope="col">รหัสออเดอร์สินค้า</th>
                                                <th scope="col" class="text-center">สถานะ</th>
                                                <th scope="col">รายละเอียดเวลา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_success as $slip_success) { ?>
                                                <tr>
                                                    <th scope="row">฿ <?php echo $slip_success['price_file']; ?></th>
                                                    <td><?php echo $slip_success['order_id']; ?></td>
                                                    <td class="text-center">
                                                        <?php if ($slip_success['status_pay'] == 1) { ?>
                                                            <span class="badge badge-pill badge-success">ชำระเงินแล้ว</span>
                                                        <?php } elseif ($slip_success['status_pay'] == 0) { ?>
                                                            <span class="badge badge-pill badge-warning" style="color:#fff;">ยังไม่ชำระเงิน</span>
                                                        <?php } elseif ($slip_success['is_check'] == 1) { ?>
                                                            <span class="badge badge-pill badge-danger">ยกเลิกออเดอร์</span>
                                                        <?php } ?>
                                                    </td>
                                                    <?php $ggh = explode(" ", $slip_success['create_at']); ?>
                                                    <td><?php echo $ggh[0]; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="table mt-15">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ราคา</th>
                                                <th scope="col">รหัสออเดอร์สินค้า</th>
                                                <th scope="col" class="text-center">สถานะ</th>
                                                <th scope="col">รายละเอียดเวลา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_not_success as $slip_not_success) { ?>
                                                <tr>
                                                    <th scope="row">฿ <?php echo $slip_not_success['price_file']; ?></th>
                                                    <td><?php echo $slip_not_success['order_id']; ?></td>
                                                    <td class="text-center">
                                                        <?php if ($slip_not_success['status_pay'] == 1) { ?>
                                                            <span class="badge badge-pill badge-success">ชำระเงินแล้ว</span>
                                                        <?php } elseif ($slip_not_success['status_pay'] == 0) { ?>
                                                            <span class="badge badge-pill badge-warning" style="color:#fff;">ยังไม่ชำระเงิน</span>
                                                        <?php } elseif ($slip_not_success['is_check'] == 1) { ?>
                                                            <span class="badge badge-pill badge-danger">ยกเลิกออเดอร์</span>
                                                        <?php } ?>
                                                    </td>
                                                    <?php $gghh = explode(" ", $slip_not_success['create_at']); ?>
                                                    <td><?php echo $gghh[0]; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($team) { ?>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table mt-15">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="text-center">ราคา</th>
                                                <th scope="col" class="text-center">รหัสออเดอร์สินค้า</th>
                                                <th scope="col" class="text-center">สถานะ</th>
                                                <th scope="col" class="text-center">รายละเอียดเวลา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_team as $slip_team) { ?>
                                                <tr class="text-center">

                                                    <td scope="row"><span class="badge badge-primary" style="font-size:16px;">$ <?php echo $slip_team['price']; ?></span></td>
                                                    <td><?php echo $slip_team['order_id']; ?></td>

                                                    <?php if ($slip_team['st2'] == 1) { ?>
                                                        <td><span class="badge badge-warning" style="color:#fff;font-size:16px;">Wait for admin</span></td>
                                                    <?php } elseif ($slip_team['st2'] == 2) { ?>
                                                        <td><span class="badge badge-success" style="font-size:16px;">Success</span></td>
                                                    <?php } else { ?>
                                                        <td><span class="badge badge-danger" style="font-size:16px;"><i class="fa fa-exclamation-triangle"></i> Have a problem</span></td>
                                                    <?php } ?>
                                                    <?php $ggh = explode(" ", $slip_team['create_at']); ?>
                                                    <td><?php echo $ggh[0]; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>