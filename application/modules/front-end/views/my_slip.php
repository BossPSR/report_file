<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if ($team) { ?>
    <?php
    $this->db->select('*,tbl_upload_team.wage wg');
    $this->db->from('tbl_upload_team');
    $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
    $this->db->join('tbl_withdraw_team', 'tbl_withdraw_team.order_id = tbl_upload_team.order_id', 'left');
    $this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
    $this->db->where('tbl_upload_order.status_delivery', 1);
    $this->db->where('tbl_withdraw_team.status', '2');
    $this->db->group_by('tbl_upload_order.order_id');

    $sm_del = $this->db->get()->result_array();
    // $sumto = 0;
    // foreach ($sm_del as $key => $sm_del) {
    //     $sumto = $sumto['wg'];
    // }

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
<h2 class="text-center" style="margin-top: 15px;">ใบเสร็จของฉัน</h2>
<hr class="line_package">
<br>
<!--services img area-->
<div class="services_gallery" style="padding-bottom: 158px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-10 col-md-10">
                <?php $ist = 0; ?>



                <div class="row">


                    <div class="col-lg-12 col-md-12 wall-center shadow-b table-w mtp-20">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php if ($user) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Paid (ชำระแล้ว)r</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="commission-tab" data-toggle="tab" href="#commission" role="tab" aria-controls="commission" aria-selected="false">Not pay (ยังไม่ชำระ)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="cashback-tab" data-toggle="tab" href="#cashback" role="tab" aria-controls="cashback" aria-selected="false">Withdraw History (ประวัติการถอน) </a>
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
                                <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab" style="margin: 25px 0px;">
                                    <table class="table mt-15 tabledata">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">รหัสออร์เดอร์</th>
                                                <th scope="col">Amoumt (จำนวนเงิน)</th>
                                                <!-- <td>Request date (วันที่ส่งคำขอ)</td> -->
                                                <th scope="col" class="text-center">สถานะ</th>
                                                <th scope="col">รายละเอียดเวลา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_success as $slip_success) { ?>
                                                <tr>
                                                    <td><?php echo $slip_success['order_id']; ?></td>
                                                    <td scope="row">$ <?php echo $slip_success['price_file']; ?></td>
                                                    <!-- <td></td> -->
                                                    <td class="text-center">
                                                        <?php if ($slip_success['status_pay'] == 1) { ?>
                                                            <span class="badge badge-pill badge-success">ชำระเงินแล้ว</span>
                                                        <?php } elseif ($slip_success['status_pay'] == 0) { ?>
                                                            <span class="badge badge-pill badge-warning" style="color:#fff;">ยังไม่ชำระเงิน</span>
                                                        <?php } elseif ($slip_success['is_check'] == 1) { ?>
                                                            <span class="badge badge-pill badge-danger">ยกเลิกออร์เดอร์</span>
                                                        <?php } ?>
                                                    </td>
                                                    <?php $ggh = explode(" ", $slip_success['created_at_buy']); ?>
                                                    <td><?php echo $ggh[0]; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="commission" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="table mt-15 tabledata">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Amoumt (จำนวนเงิน)</th>
                                                <th scope="col">รหัสออร์เดอร์สินค้า</th>
                                                <th scope="col" class="text-center">สถานะ</th>
                                                <th scope="col">รายละเอียดเวลา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_not_success as $slip_not_success) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo $slip_not_success['price_file'] == '' ? 'รอดำเนินการจากแอดมิน' :  '$' . $slip_not_success['price_file']; ?></th>
                                                    <td><?php echo $slip_not_success['order_id']; ?></td>
                                                    <!-- <td></td> -->
                                                    <td class="text-center">
                                                        <?php if ($slip_not_success['status_pay'] == 1) { ?>
                                                            <span class="badge badge-pill badge-success">ชำระเงินแล้ว</span>
                                                        <?php } elseif ($slip_not_success['status_pay'] == 0) { ?>
                                                            <span class="badge badge-pill badge-warning" style="color:#fff;">ยังไม่ชำระเงิน</span>
                                                        <?php } elseif ($slip_not_success['is_check'] == 1) { ?>
                                                            <span class="badge badge-pill badge-danger">ยกเลิกออร์เดอร์</span>
                                                        <?php } ?>
                                                    </td>
                                                    <?php $ggh = explode(" ", $slip_not_success['created_at_buy']); ?>
                                                    <td><?php echo $ggh[0]; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="cashback" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="table mt-15 tabledata">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Amount (จำนวนเงิน)</th>
                                                <th scope="col">Request date (วันที่ส่งคำขอ)</th>
                                                <th scope="col">Success Date (วันที่สำเร็จ)</th>
                                                <th scope="col">Slips (สลิป)</th>
                                                <th scope="col">Status (สถานะ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip as $key => $slip) { ?>
                                                <tr>
                                                    <td><?php echo $slip['price'] == '' ? 'รอดำเนินการจากแอดมิน' :  '$' . $slip['price']; ?></td>
                                                    <td><?php echo $slip['create_at']; ?></td>
                                                    <td><?php echo $slip['transaction_date']; ?></td>
                                                    <td>
                                                        <?php if ($slip['file_name'] == '-') : ?>
                                                            -
                                                        <?php else : ?>
                                                            <a href="uploads/Withdraw/<?php echo $slip['file_name']; ?>" target="_bank"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($slip['status'] == 2) { ?>
                                                            <span class="badge badge-pill badge-success">Success (สำเร็จแล้ว)</span>
                                                        <?php } elseif ($slip['status'] == 1) { ?>
                                                            <span class="badge badge-pill badge-warning" style="color:#fff;">Processing (กำลังดำเนินการ)</span>
                                                        <?php } elseif ($$slip['status'] == 3) { ?>
                                                            <span class="badge badge-pill badge-danger">Cencal (ยกเลิก)</span>
                                                        <?php } ?>

                                                    </td>
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
                                    <div class="row">
                                        <div class="col-10"></div>
                                        <div class="col-2">
                                            <?php foreach ($slip_team as $slip_teamcount) { ?>
                                                <?php $ist += 1; ?>

                                            <?php } ?>
                                            <div class="text-center" style="font-size: 18px;padding: 5px 0;"> <?= $ist; ?></div>
                                            <div class="text-center" style="font-size: 17px;">ทั้งหมด</div>
                                        </div>
                                    </div>
                                    <table class="table mt-15">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="text-center">รหัสออร์เดอร์</th>
                                                <th scope="col" class="text-center">วันที่ส่งคำขอ</th>
                                                <th scope="col" class="text-center">วันที่โอนสำเร็จ</th>
                                                <th scope="col" class="text-center">ใบสลิป</th>
                                                <th scope="col" class="text-center">รายได้</th>
                                                <th scope="col" class="text-center">สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slip_team as $slip_team) { ?>
                                                <tr class="text-center">
                                                    <td><?php echo $slip_team['order_id']; ?></td>
                                                    <?php $ggh = explode(" ", $slip_team['create_at']); ?>
                                                    <td><?php echo $ggh[0]; ?></td>
                                                    <td><?= $slip_team['transaction_date'] == '' ? '-' : $slip_team['transaction_date'] ?></td>
                                                    <td>
                                                        <?php if ($slip_team['path'] != '') : ?>
                                                            <a href="<?= $slip_team['path']; ?>"><i style="font-size: 18px;" class="fa fa-file-image-o" aria-hidden="true"></i></a>
                                                        <?php else : ?>
                                                            -
                                                        <?php endif; ?>
                                                    </td>
                                                    <td scope="row"><span class="badge badge-primary" style="font-size:16px;">$ <?php echo $slip_team['price']; ?></span></td>

                                                    <?php if ($slip_team['st2'] == 1) { ?>
                                                        <td><span class="badge badge-warning" style="color:#fff;font-size:16px;">รอแอดมินตรวจสอบ</span></td>
                                                    <?php } elseif ($slip_team['st2'] == 2) { ?>
                                                        <td><span class="badge badge-success" style="font-size:16px;">ได้รับเงินแล้ว</span></td>
                                                    <?php } else { ?>
                                                        <td><span class="badge badge-danger" style="font-size:16px;"><i class="fa fa-exclamation-triangle"></i> ออร์เดอร์มีปัญหา</span></td>
                                                    <?php } ?>

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
            <div class="col-lg-1 col-md-1"></div>
        </div>
    </div>
</div>
</div>