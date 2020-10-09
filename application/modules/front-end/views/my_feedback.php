<?php $teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $status_c = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam']])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;"> แก้ไขงานของฉัน </h2>
<hr class="line_package">
<?php if (!empty($feedback)) { ?>
    <br>
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <!-- <span style="font-size:16px;">Search for date : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">

                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">รหัสออร์เดอร์</th>
                                <th scope="col">วันส่งออร์เดอร์</th>
                                <th scope="col">ไฟล์ที่ส่งแล้ว</th>
                                <th scope="col">ไฟล์แก้ไขงาน</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col">สาขา</th>
                                <th scope="col">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $io = 0;
                            $ii = 0;
                            $ip = 0;
                            $orderarray = null;
                            ?>
                            <?php foreach ($feedback as $feedback) { ?>
                                <?php $upder = $this->db->get_where('tbl_upload_order', ['order_id' => $feedback['order_id']])->row_array(); ?>
                                <?php if ($upder['status_approved'] == 1 || date('Y-m-d') > $upder['end_time_feedback']) { ?>

                                <?php } else { ?>

                                    <tr style="text-align:center;">
                                        <td><?= $feedback['orIdd']; ?></td>
                                        <td><?= date('d F Y', strtotime($feedback['dated'])); ?></td>
                                        <td>
                                            <?php $doc_old = $this->db->get_where('tbl_upload_order_team', ['order_id' => $feedback['orIdd']])->result_array(); ?>
                                            <?php if (!empty($doc_old)) : ?>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalold<?= $feedback['orIdd']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalold<?= $feedback['orIdd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">ไฟล์ที่ส่งแล้ว</h5>
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
                                                                            <th scope="col">ดาวน์โหลด</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($doc_old as $doc_old) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?= $doc_old['order_id']; ?></td>
                                                                                <td>
                                                                                    <?= $doc_old['file_name']; ?>
                                                                                </td>
                                                                                <td><a href="<?= $doc_old['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                                <td>
                                                                                    <a href="<?= $doc_old['path']; ?>" class="btn btn-info" download><i class="fa fa-download"></i> ดาวน์โหลด</a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                                <!-- <h1 style="color:blue;">Data Not Found</h1> -->

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php $feedback_doc = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback['id_feed']])->result_array(); ?>
                                            <?php if (!empty($feedback_doc)) : ?>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalFeed<?= $feedback['id_feed']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalFeed<?= $feedback['id_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">ไฟล์แก้ไขงาน</h5>
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
                                                                            <th scope="col">ดาวน์โหลด</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php foreach ($feedback_doc as $feedback_doc) { ?>
                                                                            <tr style="text-align:center;">

                                                                                <td><?= $feedback['order_id']; ?></td>
                                                                                <td><?= $feedback_doc['file_name']; ?></td>
                                                                                <td><a href="<?= $feedback_doc['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                                <td>
                                                                                    <a href="<?php echo $feedback_doc['file_name'] ?>" class="btn btn-info" download><i class="fa fa-download"></i> Download</a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                                <!-- <h1 style="color:blue;">Data Not Found</h1> -->

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (!empty($feedback['feedback_detail'])) { ?>
                                                <a href="#" data-toggle="modal" data-target="#NOTE<?= $feedback['id_feed']; ?>" style="color:#19baea;font-size:18px;"><i class="fa fa-search"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="NOTE<?= $feedback['id_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">หมายเหตุ</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <p style="font-size:16px;font-weight:bold;"><?= $feedback['feedback_detail']; ?></p>

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
                                    <td><?= $feedback['name_item']; ?></td>

                                        <td>
                                         
                                            <?php if ($feedback['re_feedback'] == 1) : ?>
                                                <?php
                                                if ($orderarray === null || $orderarray == $feedback['orIdd']) {
                                                    $io += 1;
                                                }
                                                if ($orderarray != $feedback['orIdd']) {
                                                    $io = 1;
                                                }
                                                ?>
                                                
                                                <span class=" badge badge-danger" style="font-size:16px;"> Re-feedback <?php echo $io; ?> </span>

                                                                <?php elseif ($feedback['check_status'] == 0) : ?>
                                                                    <?php
                                                                    if ($orderarray === null || $orderarray == $feedback['orIdd']) {
                                                                        $ii += 1;
                                                                    }
                                                                    if ($orderarray != $feedback['orIdd']) {
                                                                        $ii = 1;
                                                                    }
                                                                    ?>
                                                                    <span class=" badge badge-danger" style="font-size:16px;"> Admin feedback
                                                                        <?php echo $ii; ?>
                                                                    </span>

                                                                <?php else : ?>
                                                                    <?php
                                                                    if ($orderarray === null || $orderarray == $feedback['orIdd']) {
                                                                        $ip += 1;
                                                                    }
                                                                    if ($orderarray != $feedback['orIdd']) {
                                                                        $ip = 1;
                                                                    }


                                                                    ?>
                                                                    <span class="badge badge-info" style="font-size:16px;"> Learner feedback <?php echo $ip; ?></span>

                                                                <?php endif; ?>

                                                                <?php if ($feedback['status_feedback_read'] == 0) : ?>
                                                                    <span class=" badge badge-danger" style="font-size:16px;">Not Read</span>
                                                                <?php else :  ?>
                                                                    <?php if ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 0) : ?>
                                                                        <!-- read = prosseing -->
                                                                        <span class="badge badge-info" style="font-size:16px;">กำลังแก้ไข</span>
                                                                    <?php elseif ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 1 || $feedback['check_feedback_dalivery'] == 2) : ?>
                                                                        <span class="badge badge-primary" style="color:#fff;font-size:16px;">แก้ไขเรียบร้อย</span>
                                                                    <!-- elseif ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 2) : ?>
                                                                        <span class="badge badge-success" style="font-size:16px;">แก้ไขเรียบร้อย</span> -->
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php $orderarray = $feedback['orIdd']; ?>
                                <?php } ?>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="feedback" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="feedback" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                    <h5 class="modal-title" id="staticBackdropLabel">MY Feedback</h5>
                </div>
                <?php $fb = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam'], 'status_feedback_read' => '0'])->row_array(); ?>
                <div class="modal-body">
                    <p>คุณได้รับ Feedback : <?php echo $fb['check_status'] == '0' ? 'Admin Feedback' : 'Client Feedback'; ?> </p>

                    <br>
                    <center>
                        <button class="btn btn-primary" id="status_feed">ACCEPT</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <?php if ($check_read) { ?>
        <!--wishlist area end -->
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#feedback').modal({
                    'show': true,
                    keyboard: false
                });

            });
        </script>
        <script type="text/javascript">
            $('#status_feed').click(function() {
                swal("Good job!", "Got it.", "success", {
                    button: false,
                });

                $.ajax({
                    type: 'POST',
                    url: 'check_c_feed',
                    data: {
                        teamId: '<?= $teamId['IdTeam']; ?>',
                        status_feedback_read: 1,
                    },
                    success: function(success) {

                        setTimeout(function() {
                            location.href = "my-feedback"
                        }, 1000);
                    }
                });
            });
        </script>
    <?php } ?>

<?php } else { ?>
    <!--wishlist area end -->
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Feedback</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php } ?>