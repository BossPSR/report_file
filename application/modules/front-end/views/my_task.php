<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if (!empty($task)) { ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My task</h2>
    <hr class="line_package">
    <br>

    <!-- Modal -->
    <div class="modal fade" id="TimeOut" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="TimeOut" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                    <h5 class="modal-title" id="staticBackdropLabel">TimeOut</h5>
                </div>
                <div class="modal-body">
                    <p>“คุณมีเวลา12ชม.สุดท้ายในการส่งOrder ระบบจะหักรายได้ $10 จากMy income แบบ Auto แต่หากส่งก่อนเวลา12ชม.จะเริ่มระบบจะไม่หัก หากทีมงานไม่มียอดให้หักระบบจะติดลบไว้ กรณีนี้ต่อให้ไม่มีการ Delivery ก็หัก $10"</p>
                    <br>
                    <center>
                        <a href="#" class="btn btn-primary">ACCEPT</a>
                    </center>
                </div>
            </div>
        </div>
    </div>

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
                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">Date Requred</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Main Doc</th>
                                <th scope="col">GT Doc</th>
                                <th scope="col">DM Doc</th>
                                <th scope="col">Team File</th>
                                <th scope="col">Wage</th>
                                <th scope="col">Select item</th>
                                <th scope="col">Date confirm</th>
                                <th scope="col">Status</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $p = 1;
                            $o = 1;
                            $i = 1;
                            $y = 1;
                            $r = 1;
                            $z = 1;
                            $j = 1;
                            $ooo = 1;
                            $ooo2 = 1;
                            ?>
                            <?php foreach ($task as $task) { ?>
                                <tr style="text-align:center;">

                                    <!-- Date Requred -->
                                    <td>
                                        <?php if ($task['status_approved'] == 1) : ?>
                                            <span class="badge badge-success">Success</span>
                                        <?php elseif ($task['c_status'] == 1) : ?>
                                            <span class="badge badge-info">Complete</span>
                                        <?php elseif ($task['date_required'] <= date("Y-m-d H:i:s ") && $task['status_out'] == '0') : ?>
                                            <span class="badge badge-danger">หมดเวลา</span>
                                            <?php if ($task['status_out'] == '0') : ?>
                                                <script>
                                                    function getDataend() {
                                                        $.ajax({
                                                                url: "my_task_timeout",
                                                                type: "POST",
                                                                data: {
                                                                    order: '<?php echo $task['or_id']; ?>',
                                                                    user: '<?php echo $task['userId']; ?>',
                                                                    status: '1',
                                                                }
                                                            })
                                                            .success(function(result) {
                                                                console.log(result);
                                                                $('#TimeOut').modal('show');
                                                            });
                                                    }

                                                    setInterval(getDataend, 10000); // 1000 = 1 second
                                                </script>
                                            <?php else : ?>

                                            <?php endif; ?>
                                        <?php else : ?>
                                            <?php
                                            $checkDate_num = DateDiff(date("Y-m-d H:i:s"), $task['date_required']);
                                            $checkDate = $checkDate_num / 2;
                                            $checkDate = floor($checkDate);
                                            if ($checkDate_num <= 0) {
                                                $checkDate = 0;
                                            }
                                            $dateRequired = date("Y-m-d H:i:s", strtotime("-" . $checkDate . " day", strtotime($task['date_required'])));
                                            ?>

                                            <?php if ($task['status_out'] == '0') : ?>

                                                <div data-countdown="<?php echo $dateRequired; ?>"></div>

                                            <?php else : ?>

                                                <?php $aa = date("Y-m-d H:i:s", strtotime($dateRequired . ' + 12 hour')); ?>
                                                <div data-countdown="<?php echo $aa; ?>"></div>

                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </td>

                                    <!-- ID Order -->
                                    <td><?php echo $task['or_id']; ?></td>

                                    <!-- Main Doc -->
                                    <td>
                                        <?php $taskmain = $this->db->get_where('tbl_upload_order', ['order_id' => $task['or_id']])->result_array(); ?>

                                        <?php if (!empty($taskmain)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalMain<?php echo $o++; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMain<?php echo $i++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
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
                                                                        <th scope="col">Downloads</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($taskmain as $taskmain) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $taskmain['order_id']; ?></td>
                                                                            <td style="text-align:left;"><?php echo $taskmain['file_name']; ?></td>
                                                                            <td><a href="<?php echo $taskmain['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            <td>
                                                                                <a href="<?php echo $taskmain['path']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> Download
                                                                                </a>
                                                                            </td>
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
                                    </td>

                                    <!-- GT Document -->
                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                        $this->db->where('tbl_morefile_GT.order_id', $task['or_id']);
                                        $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                        $orderGT = $this->db->get('tbl_morefile_GT')->result_array(); ?>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_morefile_GT');
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                        $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                        $this->db->where('tbl_morefile_GT.order_id', $task['or_id']);
                                        $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                        $more_file_gt_more = $this->db->get()->result_array();
                                        ?>

                                        <?php if (!empty($orderGT || $more_file_gt_more)) : ?>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $y++; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalGT<?php echo $r++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Order_id</th>
                                                                        <th>File_name</th>
                                                                        <th>File</th>
                                                                        <th>create</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                        <tr>
                                                                            <td><?php echo $orderGT['order_id'] ?></td>
                                                                            <td><?php echo $orderGT['file_name_GT'] ?></td>
                                                                            <td><a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                            <td><?php echo $orderGT['create_at'] ?></td>
                                                                        </tr>
                                                                    <?php } ?>

                                                                    <?php foreach ($more_file_gt_more as $keys => $more_file_gt_more) { ?>
                                                                        <tr>
                                                                            <td><?php echo $more_file_gt_more['order_id'] ?> (MF)</td>
                                                                            <td><?php echo $more_file_gt_more['file_name_GT'] ?></td>
                                                                            <td><a href="<?php echo $more_file_gt_more['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                            <td><?php echo $more_file_gt_more['create_at'] ?></td>
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
                                        <?php else : ?>
                                            -
                                        <?php endif; ?>
                                    </td>

                                    <!-- DM Document -->
                                    <td>
                                        <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $task['or_id']])->result_array(); ?>
                                        <?php if (!empty($dm_cc)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#TEAMFILE<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="TEAMFILE<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">DM Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>

                                                                <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                    <table class="table">
                                                                        <thead class="thead-light">
                                                                            <tr style="text-align:center;">
                                                                                <!-- <th scope="col">ID Order</th> -->
                                                                                <th scope="col">File</th>
                                                                                <th scope="col">Info</th>
                                                                                <th scope="col">Downloads</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($dm_c11 as $key => $dm_c11) : ?>
                                                                                <tr>

                                                                                    <td><?php echo $dm_c11['file_name'] ?></td>
                                                                                    <td><a href="<?php echo $dm_c11['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                    <td><?php echo $dm_c11['create_at'] ?></td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                <?php else : ?>

                                                                <?php endif; ?>
                                                            <?php } ?>

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
                                    </td>

                                    <!-- Team File -->
                                    <td>
                                        <?php
                                        $this->db->join('tbl_folder', 'tbl_folder.id = tbl_upload_order_team.group', 'left');
                                        $this->db->group_by('group');
                                        $teamfile = $this->db->get_where('tbl_upload_order_team', ['order_id' => $task['or_id']])->result_array();
                                        ?>
                                        <?php if (!empty($teamfile)) { ?>
                                            <a href="#" data-toggle="modal" data-target="#DMDOC<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="DMDOC<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th>Folder name</th>
                                                                        <th>Folder</th>
                                                                        <th>create</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($teamfile as $teamfile) { ?>
                                                                        <tr style="text-align:center;font-size: 18px;">
                                                                            <td style="text-align:left;"><?php echo $teamfile['name_folder']; ?></td>
                                                                            <td>
                                                                                <a href="#" data-toggle="modal" data-target="#groud<?php echo $teamfile['group']; ?>"><i class="fa fa-folder"></i></a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="groud<?php echo $teamfile['group']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                                <h5 class="modal-title" id="exampleModalLabel">Team File (<?php echo $teamfile['name_folder']; ?>)</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">

                                                                                                <table class="table">
                                                                                                    <thead class="thead-light">
                                                                                                        <tr style="text-align:center;">
                                                                                                            <th scope="col">ID Order</th>
                                                                                                            <th scope="col">File name</th>
                                                                                                            <th scope="col">File</th>
                                                                                                            <th scope="col">Downloads</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <?php $orderTgroup = $this->db->get_where('tbl_upload_order_team', ['order_id' => $task['or_id'], 'group' => $teamfile['group']])->result_array(); ?>

                                                                                                        <?php foreach ($orderTgroup as $orderTgroup) { ?>
                                                                                                            <tr style="text-align:center;">
                                                                                                                <td><?php echo $task['or_id']; ?></td>
                                                                                                                <td style="text-align:left;"><?php echo $orderTgroup['file_name']; ?></td>
                                                                                                                <td>
                                                                                                                    <a href="<?php echo $orderTgroup['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <a href="<?php echo $orderTgroup['path']; ?>" class="btn btn-primary" download>
                                                                                                                        <i class="fa fa-download"></i> Download
                                                                                                                    </a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php } ?>
                                                                                                    </tbody>
                                                                                                </table>


                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $teamfile['create_at'] ?>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary" style="font-size:16px;">$ <?php echo $task['wage']; ?></span>
                                    </td>

                                    <?php $data = date('Y-m-d') ?>
                                    <?php $prosum = date('Y-m-d', strtotime('+60 day' . '+' . $task['up_order'])); ?>
                                    <?php $or_sub = substr($task['or_id'], 3); ?>
                                    <?php $te_sub = substr($team['IdTeam'], 2); ?>
                                    <td><?php echo $task['name_item']; ?></td>
                                    <td><?php echo date('d F Y', strtotime($task['update_confirm'])); ?></td>
                                    <?php if ($task['status_approved'] == 1 || date('Y-m-d') >= $prosum && $task['up_order'] != '') { ?>
                                        <?php $withh = $this->db->get_where('tbl_withdraw_team', ['order_id' => $task['or_id']])->row_array(); ?>

                                        <?php if (empty($withh)) { ?>

                                            <td><button class="btn btn-info" id="cf_draw<?php echo $or_sub; ?>"><i class="fa fa-money"></i> Withdraw</button></td>
                                            <script>
                                                $('#cf_draw<?php echo $or_sub; ?>').click(function() {
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
                                                                url: 'My-task-withdraw',
                                                                data: {
                                                                    order_id: <?= $or_sub; ?>,
                                                                    teamId: <?= $te_sub; ?>,
                                                                    price: <?= $task['wage']; ?>,
                                                                },
                                                                success: function(success) {
                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                        button: false,
                                                                    });
                                                                    setTimeout("location.reload(true);", 1000);
                                                                    console.log(success);
                                                                }
                                                            });
                                                        } else {
                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                        }
                                                    });
                                                });
                                            </script>
                                        <?php } elseif ($withh['status'] == 1) { ?>
                                            <td><span class="badge badge-warning" style="color:#fff;font-size:16px;">Wait for withdraw</span></td>
                                        <?php } elseif ($withh['status'] == 2) { ?>
                                            <td><span class="badge badge-success" style="font-size:16px;">Success</span></td>
                                        <?php } else { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;"><i class="fa fa-exclamation-triangle"></i> Have a problem</span></td>
                                        <?php } ?>

                                    <?php } elseif ($task['status_approved'] == 2) { ?>

                                        <td><span class="badge badge-danger" style="font-size:16px;">Not Appovre</span></td>

                                    <?php } elseif ($task['status_approved'] == 3 && $task['check_feedback_dalivery'] == 0) { ?>

                                        <td><span class="badge badge-warning" style="font-size:16px;">Feedback</span></td>

                                    <?php } else { ?>
                                        <?php if ($task['c_status'] == 0 && $task['status_approved'] == 0) { ?>
                                            <td><span class="badge badge-warning" style="font-size:16px;">Processing</span></td>
                                        <?php } elseif ($task['c_status'] == 1) { ?>
                                            <td><span class="badge badge-info" style="font-size:16px;">Complete</span></td>
                                        <?php } elseif ($task['c_status'] == 2) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;">Feedback</span></td>
                                        <?php } ?>

                                    <?php } ?>
                                    <?php if ($task['status_check_team'] == '1' && $task['t_ch'] == true) : ?>
                                        <td>
                                            <button type="button" class="btn btn-success" id="cancel_team<?php echo $task['or_id']; ?>"><i class="fa fa-check-square-o"></i></button>
                                            <script type="text/javascript">
                                                $('#cancel_team<?php echo $task['or_id']; ?>').click(function() {
                                                    swal({
                                                        icon: "warning",
                                                        title: "Are you sure?",
                                                        text: "To accept this job",
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
                                                                url: 'my_task_app',
                                                                data: {
                                                                    order_id: '<?php echo $task['or_id']; ?>',
                                                                    status_check_team: '2',


                                                                },
                                                                success: function(success) {
                                                                    swal("Good job!", "Cancel for data successfull", "success", {
                                                                        button: false,
                                                                    });
                                                                    setTimeout("location.reload(true);", 1000);
                                                                }
                                                            });
                                                        } else {
                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                        }
                                                    });
                                                });
                                            </script>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Can<?php echo $task['or_id']; ?>"><i class="fa fa-times-circle"></i></button>
                                            <div class="modal fade" id="Can<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form action="my_task_can" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <input type="text" value="<?php echo $task['or_id']; ?>" name="orb" hidden>
                                                                <input type="text" value="<?php echo $team['IdTeam']; ?>" name="team_idd" hidden>
                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <textarea name="note_can" id="" cols="30" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>

                                    <?php elseif ($task['c_status'] == 0 && $task['status_approved'] == 0 && $task['status_check_team'] == 0) : ?>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancel_task<?php echo $task['or_id']; ?>"><i class="fa fa-times-circle"></i></button>
                                            <div class="modal fade" id="cancel_task<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form action="My-task-cancel" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <input type="text" value="<?php echo $task['or_id']; ?>" name="order_id" hidden>
                                                                <h5 class="modal-title text-left" id="exampleModalLabel" style="font-size: 17px;">Cancel Order (<?php echo $task['or_id']; ?>) <br>
                                                                    <span style="color : red">
                                                                        * เมื่อคุณทำการยกเลิกออเดอร์ทุกครั้ง จะโดนปรับจากระบบ $10 ทันที และสามารถยิกเลิกออเดอร์ได้ 2 ครั้ง หลังจากนั้นท่านจะโดนแบน 60 วัน
                                                                    </span>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <textarea name="note_can" id="" rows="5" class="form-control" required></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- <script type="text/javascript">
                                            $('#cancel_task<?php echo $or_sub; ?>').click(function() {
                                                swal({
                                                    icon: "warning",
                                                    title: "Are you sure?",
                                                    text: "Do you want cancel document",
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
                                                            url: 'My-task-cancel',
                                                            data: {
                                                                order_id: <?php echo $or_sub; ?>,
                                                                status_cf_team: 0,
                                                                teamId: null,
                                                                status: 0,
                                                            },
                                                            success: function(success) {
                                                                swal("Good job!", "Cancel for data successfull", "success", {
                                                                    button: false,
                                                                });
                                                                setTimeout("location.reload(true);", 1000);
                                                            }
                                                        });
                                                    } else {
                                                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                    }
                                                });
                                            });
                                        </script> -->
                                    <?php else : ?>
                                        <td><button type="button" class="btn btn-secondary"><i class="fa fa-times-circle"></i></button></td>
                                    <?php endif; ?>
                                </tr>
                            <?php } ?>

                            <script>
                                $('#download<?php echo $key; ?>').click(function() {
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
                                                    id: <?php echo $qq['id']; ?>,
                                                    is_confirm: 1,
                                                },
                                                success: function(success) {
                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                        button: false,
                                                    });
                                                    setTimeout("location.reload(true);", 1000);
                                                }
                                            });
                                        } else {
                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                        }
                                    });
                                });
                            </script>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php } else { ?>
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Task</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php } ?>