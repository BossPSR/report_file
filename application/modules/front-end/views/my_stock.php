<?php
$item = base64_decode($this->input->get('item'));
$tip  = $this->db->get_where('tbl_item_position', ['id' => $item])->row_array();
?>

<style>
    .cssd {
        background-image: url("public/frontend/assets/img/bg/home-bgback.png");
        width: 100%;
        margin: 0 auto;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: repeat-y;

    }

    .cssd::before {
        content: " ";
        background-color: rgba(33, 35, 49, 0.76);
    }
</style>
<?php if (!empty($stock)) { ?>

    <div class="wishlist_area mt-10 cssd" style="padding-bottom: 150px;">

        <div class="container">
            <br>
            <h2 class="text-center text-white">เลือกงานที่นี่ <br> <span style="font-size: 24px;color: white;">(<?= $tip['name_item'] ?>)</span></h2>
            <hr class="line_package">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12">

                    <!-- <span style="font-size:16px;">Search for date : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">รหัสออร์เดอร์</th>
                                <!-- <th scope="col">Document</th> -->
                                <th scope="col">เวลาคงเหลือ</th>
                                <th scope="col">รายละเอียดคำสั่งงานc</th>
                                <th scope="col">ข้อมูลประกอบ</th>
                                <th scope="col">ตัวอย่างงาน</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col">สาขา</th>
                                <th scope="col">เรทค่าตอบแทน</th>
                                <th scope="col">ยืนยัน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = 1;
                            $w = 1;
                            $e = 1;
                            $r = 1;
                            $h = 1;
                            $k = 1;
                            $cvv = 1;
                            $cvc = 1;
                            ?>
                            <?php foreach ($stock as $stock) { ?>
                                <tr style="text-align:center;background-color: white;">
                                    <td><?php echo $stock['or_1']; ?> </td>
                                    <?php
                                    $checkDate_num = DateDiff(date("Y-m-d"), $stock['or_date']);
                                    $checkDate = $checkDate_num / 2;
                                    $checkDate = floor($checkDate);
                                    $dateRequired = date("Y-m-d", strtotime("-" . $checkDate . " day", strtotime($stock['or_date'])));
                                    ?>
                                    <td><?php echo date('d F Y', strtotime($dateRequired)); ?></td>
                                    <td>
                                        <?php $stockmain = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                        <?php $backmain  = $this->db->get_where('tbl_upload_backup_main', ['sub_id_m' => $stock['idteam']])->result_array(); ?>
                                        <?php if ($backmain == true) : ?>
                                            <?php if (!empty($backmain)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#backmain<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backmain<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">รายละเอียดคำสั่งงาน (ใหม่)</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backmain as $backmain) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backmain['order_id_m']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $backmain['file_name_m']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($backmain['path_m']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php else : ?>
                                            <?php if (!empty($stockmain)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalMain<?php echo $q++; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalMain<?php echo $w++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">รายละเอียดคำสั่งงาน</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">รหัสออร์เดอร์</th>
                                                                            <th scope="col">ชื่อไฟล์</th>
                                                                            <th scope="col">ไฟล์ของฉัน</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($stockmain as $stockmain) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $stockmain['order_id']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $stockmain['file_name']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($stockmain['path']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php endif; ?>

                                    </td>

                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                        $this->db->where('tbl_morefile_GT.order_id', $stock['mms']);
                                        $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                        $orderGT = $this->db->get('tbl_morefile_GT')->result_array();
                                        ?>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_morefile_GT');
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                        $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                        $this->db->where('tbl_morefile_GT.order_id', $stock['mms']);
                                        $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                        $more_file_gt_more = $this->db->get()->result_array();
                                        ?>
                                        <?php $stockGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                        <?php $backgt  = $this->db->get_where('tbl_upload_backup_gt', ['sub_id_g' => $stock['idteam']])->result_array(); ?>
                                        <?php if ($backgt == true) : ?>
                                            <?php if (!empty($backgt)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#backgt<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backgt<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลประกอบ (ใหม่)</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col"> รหัสออร์เดอร์</th>
                                                                            <th scope="col">ชื่อไฟล์</th>
                                                                            <th scope="col">ไฟล์ของฉัน</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backgt as $backgt) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backgt['order_id_g']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $backgt['file_name_g']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($backgt['path_g']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php else : ?>
                                            <?php if (!empty($orderGT || $more_file_gt_more)) { ?>

                                                <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $e++; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalGT<?php echo $r++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลประกอบ</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">รหัสออร์เดอร์</th>
                                                                            <th scope="col">ชื่อไฟล์</th>
                                                                            <th scope="col">ไฟล์ของฉัน</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $orderGT['order_id']; ?></td>

                                                                                <td style="text-align:left;"><?php echo $orderGT['file_name_GT']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($orderGT['path_GT']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        <?php foreach ($more_file_gt_more as $keys => $more_file_gt_more) { ?>
                                                                            <tr>
                                                                                <td><?php echo $more_file_gt_more['order_id'] ?> (MF)</td>
                                                                                <td style="text-align:left;"><?php echo $more_file_gt_more['file_name_GT'] ?></td>

                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($orderGT['path_GT']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>

                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php endif; ?>
                                    </td>

                                    <!-- DM -->
                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub');
                                        $this->db->where('tbl_bookmark.id_orderBuy', $stock['or_1']);
                                        $dm_cc = $this->db->get('tbl_bookmark')->result_array();
                                        ?>
                                        <?php if (!empty($dm_cc)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#TEAMFILE<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="TEAMFILE<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">ตัวอย่างงาน</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <!-- <th scope="col">รหัสออร์เดอร์</th> -->
                                                                        <th scope="col">ชื่อไฟล์</th>
                                                                        <th scope="col">ไฟล์ของฉัน</th>
                                                                        <!-- <th scope="col">Downloads</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($dm_cc as $key => $dm_cc) : ?>
                                                                        <tr>

                                                                            <td class="text-left"><?php echo $dm_cc['file_name'] ?></td>
                                                                            <td><a href="<?php echo $dm_cc['path'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                            <!-- <td> echo $dm_cc['create_at'] ?></td> -->
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>

                                    <td>
                                        <?php if (!empty($stock['uptnote'])) { ?>
                                            <a href="#" data-toggle="modal" data-target="#NOTE<?php echo $cvv++; ?>" style="color:#19baea;font-size:18px;"><i class="fa fa-search"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="NOTE<?php echo $cvc++; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">หมายเหตุ</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p style="font-size:16px;font-weight:bold;"><?= $stock['uptnote']; ?></p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"">ปิดหน้าต่าง</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $stock['name_item']; ?> <?= $stock['idteam'] ?></td>
                                    <td><span class=" badge badge-danger" style="font-size:16px;"><?= $teamTM['country_id'] == '218' ? $stock['wage_thai'] . ' บาท' : '$ ' . $stock['wage']; ?></span>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_upload_order');
                                        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
                                        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id', 'left');
                                        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id', 'left');
                                        $this->db->where('tbl_upload_order.status_pay', 1);
                                        $this->db->where('tbl_upload_team.teamId', $teamTM['IdTeam']);
                                        $this->db->where_in('tbl_upload_team.status', [2, 3]);
                                        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
                                        $stock_row = $this->db->get()->row_array();
                                        ?>

                                        <?php if ($stock_row == true) { ?>
                                            <button type="button" class="btn btn-secondery"> ยืนยัน</button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cfmodal<?php echo $stock['mms']; ?>" id=""> ยืนยัน</button>
                                        <?php } ?>


                                        <!-- Modal -->
                                        <div class="modal fade" id="cfmodal<?php echo $stock['mms']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 18px;"> การหักรายได้ในกรณีต่าง</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="font-size: 20px;color: #0095ff;"> ตารางสรุปการหักรายได้กรณีต่างๆที่ต้องรู้ก่อนทำงาน </p>
                                                        <li class="text-left" style="font-size: 18px;">ส่งงานช้า</li>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr style="text-align:center;">
                                                                    <th>หัวข้อการหัก</th>
                                                                    <th>จำนวนที่ถูกหัก</th>
                                                                    <th>แนวทางแก้ไข</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p> ส่งงานช้าไม่เกิน12 ชม.สุดท้าย
                                                                            (ระบบนับเวลาถอยหลังยังคงทำงานอยู่) </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ได้ค่าตอบแทน
                                                                            แต่ถูกหัก 100 บาท
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>วางแผนเวลาในการทำงานและส่งงานตรงตามวันเวลาที่กำหนดหรือส่งก่อนล่วงหน้า 1 วัน</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>ส่งงานช้าเกิน12 ชม.สุดท้าย
                                                                            (ไม่มีกำหนดวันที่เกินขึ้นอยู่กับความยินยอมของทางผู้เรียน)
                                                                            (ระบบนับเวลาถอยหลังหยุดทำงาน)
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ได้ค่าตอบแทน
                                                                            แต่ถูกหัก 200 บาท
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ติดต่อเจ้าหน้าที่ภายใน12 ชม.สุดท้าย (เท่านั้น) กรณีนี้อาจไม่สามารถส่งงานได้ขึ้นอยู่กับความยินยอมของผู้เรียน</p>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                        <br>

                                                        <li class="text-left" style="font-size: 18px;"> การยกเลิกงาน </li>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr style="text-align:center;">
                                                                    <th>หัวข้อการหัก</th>
                                                                    <th>จำนวนที่ถูกหัก</th>
                                                                    <th>แนวทางแก้ไข</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p> กดยกเลิกงานขณะที่เหลือเวลาส่งมากกว่า 48 ชม. </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>เลือกงานที่ตรงตามทักษะความสามารถตนเองวางแผนเวลาในการทำงานและตรวจเช็ครายละเอียดงานอย่างรอบคอบก่อนกด Confirm Order </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>กดยกเลิกงานขณะที่เหลือเวลาส่งน้อยกว่า 48 ชม.
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ไม่ได้ค่าตอบแทนและถูกหัก 200 บาท </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>หากประเมินเวลาและทักษะความสามารถตนเองแล้วว่าไม่สามารถทำงานให้สำเร็จได้ให้ทำการกดปุ่มยกเลิก Order ทันที</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>ไม่กดยกเลิกงาน </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ไม่ได้ค่าตอบแทนและถูกหัก 300 บาท </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>กรณีไม่กดยกเลิกงานและไม่มีการส่งงานอาจถูกระบบระงับบัญชีการใช้งานแบบชั่วคราวและถาวร</p>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                        <br>

                                                        <li class="text-left" style="font-size: 18px;"> คุณภาพผลงาน </li>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr style="text-align:center;">
                                                                    <th>หัวข้อการหัก</th>
                                                                    <th>จำนวนที่ถูกหัก</th>
                                                                    <th>แนวทางแก้ไข</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p> คุณภาพผลงานไม่ถึงเกณฑ์ 50% </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>เลือกงานที่ตรงตามทักษะความสามารถตนเองวางแผนเวลาในการทำงานและตรวจเช็ครายละเอียดงานอย่างรอบคอบก่อนกด
                                                                            Confirm Order กรณีผลงานไม่ถึงเกณฑ์บ่อยครั้งอาจถูกระบบยกเลิกตำแหน่งงานดังกล่าว </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p>คัดลอกผลงานหรือข้อมูลอินเตอร์เน็ต โดยไม่มีการแก้ไขใดๆเกิน 1 Paragraph หรือ 4 บรรทัดขึ้นไป </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                                    </td>
                                                                    <td>
                                                                        <p>หากข้อมูลใน Order ไม่เพียงพอติวเตอร์สามารถหาข้อมูลจากแหล่งเว็บไซต์อินเตอร์เน็ตเพิ่มเติมได้โดยต้อง
                                                                            Rewrite ใหม่ก่อนนำมาใช้ประกอบผลงานทุกครั้ง</p>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                        <button type="button" class="btn btn-primary" id="cf<?php echo $stock['mms']; ?>">ยอมรับ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">เอกสาร</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>รายละเอียดคำสั่งงาน</h3>
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr style="text-align:center;">
                                                                    <th scope="col">รหัสออร์เดอร์</th>
                                                                    <th scope="col">ชื่อไฟล์</th>
                                                                    <th scope="col">ดาวน์โหลด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $stockmain2 = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                                                <?php $backmain2  = $this->db->get_where('tbl_upload_backup_main', ['sub_id_m' => $stock['idteam']])->result_array(); ?>
                                                                <?php if ($backmain2 == true) : ?>
                                                                    <?php foreach ($backmain2 as $backmain2) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $backmain2['order_id_m']; ?></td>
                                                                            <td><?php echo $backmain2['file_name_m']; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo $backmain2['path_m']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> ดาวน์โหลด
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php else : ?>
                                                                    <?php foreach ($stockmain2 as $stockmain_Download) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $stockmain_Download['order_id']; ?></td>
                                                                            <td><?php echo $stockmain_Download['file_name']; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo $stockmain_Download['path']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> ดาวน์โหลด
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php endif; ?>

                                                            </tbody>
                                                        </table>


                                                        <?php $stockGT2 = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                                        <?php $backgt2  = $this->db->get_where('tbl_upload_backup_gt', ['sub_id_g' => $stock['idteam']])->result_array(); ?>
                                                        <?php if ($backgt2 == true) : ?>
                                                            <?php if (!empty($backgt2)) : ?>
                                                                <br>
                                                                <h3> ข้อมูลประกอบ </h3>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">รหัสออร์เดอร์</th>
                                                                            <th scope="col">ชื่อไฟล์</th>
                                                                            <th scope="col">ดาวน์โหลด</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backgt2 as $backgt2) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backgt2['order_id_g']; ?></td>
                                                                                <td><?php echo $backgt2['file_name_g']; ?></td>
                                                                                <td>
                                                                                    <a href="<?php echo $backgt2['path_g']; ?>" class="btn btn-primary" download>
                                                                                        <i class="fa fa-download"></i> ดาวน์โหลด
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        <?php else : ?>
                                                            <?php if (!empty($stockGT2)) : ?>
                                                                <br>
                                                                <h3> ข้อมูลประกอบ </h3>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">รหัสออร์เดอร์</th>
                                                                            <th scope="col">ชื่อไฟล์</th>
                                                                            <th scope="col">ดาวน์โหลด</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($stockGT2 as $stockGT_Download) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $stockGT_Download['order_id']; ?></td>
                                                                                <td><?php echo $stockGT_Download['file_name_GT']; ?></td>
                                                                                <td>
                                                                                    <a href="<?php echo $stockGT_Download['path_GT']; ?>" class="btn btn-primary" download>
                                                                                        <i class="fa fa-download"></i> ดาวน์โหลด
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" id="close_doc">เรียบร้อย</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $('#cf<?php echo $stock['mms']; ?>').click(function() {
                                                swal({
                                                    icon: "warning",
                                                    title: "Are you sure?",
                                                    text: "Do you want confirmed document",
                                                    closeOnEsc: true,
                                                    closeOnClickOutside: false,
                                                    buttons: {
                                                        cancel: true,
                                                        confirm: true,
                                                    },
                                                }).then(function(isConfirm) {
                                                    if (isConfirm == true) {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: 'order_isconfirm',
                                                            data: {
                                                                order_id: '<?php echo $stock['mms']; ?>',
                                                                idteam: '<?php echo $stock['idteam']; ?>',
                                                                is_confirm: 1,
                                                            },
                                                            success: function(success) {

                                                                $('#exampleModalCF').modal('show')
                                                                $("#close_doc").click(function() {
                                                                    $('#myModal').modal('hide');
                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                        button: false,
                                                                    });
                                                                    setTimeout("location.reload(true);", 1000);
                                                                });
                                                            }
                                                        });
                                                    } else {
                                                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                    }
                                                });
                                            });
                                        </script>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
            <style>
                .font-20 {
                    font-size: 20px;
                    line-height: 30px;
                }
            </style>
            <div class="row" style="padding-top: 30px;border-top: 1px solid white;margin-top: 100px; font-size: 17.5px;">
                <div class="col-md-2 "></div>
                <div class="col-md-8 col-sm-12 text-white">
                    <h3 style="text-align: center;"> วิธีการทำงานให้ผ่านโดยไม่ต้องแก้ไขงาน</h3>
                    <br>
                    <p class="font-20"> 1. อ่านและทำความเข้าใจรายละเอียดคำสั่งงานทั้งหมด </p>
                    <p class="font-20"> 2. เช็คข้อมูล Resources หรือ Template ที่ใช้ประกอบในการทำงานให้ครบตามที่คำสั่งงานต้องการ </p>
                    <p class="font-20"> 3. ติดต่อเจ้าหน้าที่เมื่อข้อมูลไม่เพียงพอ ตัวอย่างเช่น ขาด Template/Resources (ติดต่อทางระบบแชทเท่านั้น) </p>
                    <p class="font-20"> 4. ใช้ข้อมูลใน Resources ที่ให้มาประกอบในการทำงาน หากข้อมูลไม่เพียงพอสามารถ<br>
                        Search internet เพื่อเป็นข้อมูลประกอบได้แต่ต้องนำข้อมูลมาเรียบเรียงใหม่เป็น Own words (ห้ามก๊อปวางโดยเด็ดขาด) </p>

                    <p class="font-20"> 5. เน้นการเขียนงานโดยใช้ Own words และอ้างอิงด้วยแหล่งที่มาของข้อมูลที่ใช้ประกอบ </p>
                    <p class="font-20"> 6. กรณีเป็นงานกลุ่มโปรเจ็คหรือรายงาน ทีมงานสามารถทำการสมมติชื่อสมาชิกกลุ่มขึ้นมาและระบุหน้าที่รับผิดชอบตามชื่อแต่ล่ะคน<br>
                        โดยจำลองสถานการณ์ขึ้นมาใช้ให้เหมาะสมกับคำสั่งงาน </p>
                    <p class="font-20"> 7. ก่อนส่งงานควรตรวจเช็คความเรียบร้อยให้แน่ใจว่าได้ดำเนินการครบทุกคำสั่งของงานทั้งหมดและตรวจสอบข้อกำหนดการตั้งค่าหน้ากระดาษต่างๆ
                        (ถ้ามี) <br>เช่น ใช้ตัวหนังสือสีดำ, ขนาด 18, ฟอนต์ Calibri </p>
                    <p class="font-20"> 8. แยกไฟล์ Folder ของงานแต่ล่ะ Task ให้ชัดเจนพร้อมระบุตัวเลขกำกับใน Template ที่ใช้ตอบในแต่ล่ะข้อ (ถ้ามี) </p>
                    <p class="font-20"> 9. กรณีที่เป็นงานที่ต้องแก้ไข ไม่ว่าจะเป็น Feedback หรือ Re-feedback ให้ทำการ Highlight ส่วนที่แก้ไขด้วยสีเหลือง </p>
                    <p class="font-20"> 10. อธิบายงานแต่ละส่วนผ่านคลิปวิดีโอด้วยภาพและเสียงที่ชัดเจน </p>
                </div>
                <div class="col-md-2 "></div>
            </div>
        </div>

    </div>
<?php } else { ?>
    <!--wishlist area end -->
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>ไม่มีข้อมูลงาน</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php } ?>