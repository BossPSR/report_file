<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 40px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>

<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if (!empty($task)) { ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">งานของฉัน </h2>
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
                                        <?php elseif ($task['c_status'] == 4) : ?>
                                            <span class="badge badge-danger" style="font-size:16px;background-color: #ff6b75;">Not complete</span>
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
                                            <?php if ($task['dated'] == true) : ?>

                                                <div data-countdown="<?php echo $task['dated']; ?>"></div>

                                            <?php else : ?>

                                                <!-- $checkDate_num = DateDiff(date("Y-m-d H:i:s"), $task['date_required']);
                                                $checkDate = $checkDate_num / 2;
                                                $checkDate = floor($checkDate);
                                                if ($checkDate_num <= 0) {
                                                    $checkDate = 0;
                                                }
                                                $dateRequired = date("Y-m-d H:i:s", strtotime("-" . $checkDate . " day", strtotime($task['date_required'])));
                                                 -->

                                                <?php if ($task['status_out'] == '0') : ?>

                                                    <div data-countdown="<?php echo $task['date_required']; ?>"></div>

                                                <?php else : ?>

                                                    <?php $aa = date("Y-m-d H:i:s", strtotime($task['date_required'] . ' + 12 hour')); ?>
                                                    <div data-countdown="<?php echo $aa; ?>"></div>

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </td>

                                    <!-- ID Order -->
                                    <td><?php echo $task['or_id']; ?></td>

                                    <!-- Main Doc -->
                                    <td>
                                        <?php $taskmain = $this->db->get_where('tbl_upload_order', ['order_id' => $task['or_id']])->result_array(); ?>
                                        <?php $backmain = $this->db->get_where('tbl_upload_backup_main', ['sub_id_m' => $task['idteam']])->result_array(); ?>
                                        <?php if ($backmain == true) : ?>
                                            <a href="#" data-toggle="modal" data-target="#backmain<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="backmain<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Main Document new</h5>
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
                                                                    <?php foreach ($backmain as $backmain) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $backmain['order_id_m']; ?></td>
                                                                            <td style="text-align:left;"><?php echo $backmain['file_name_m']; ?></td>
                                                                            <td><a href="<?php echo $backmain['path_m']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            <td>
                                                                                <a href="<?php echo $backmain['path_m']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> Download
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <?php if (!empty($taskmain)) { ?>

                                                <a href="#" data-toggle="modal" data-target="#exampleModalMain<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalMain<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <?php endif; ?>


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
                                        <?php $backgt  = $this->db->get_where('tbl_upload_backup_gt', ['sub_id_g' => $task['idteam']])->result_array(); ?>
                                        <?php if ($backgt == true) : ?>
                                            <?php if (!empty($backgt)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#backgt<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backgt<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">GT Document new</h5>
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
                                                                        <?php foreach ($backgt as $backgt) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backgt['order_id_g']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $backgt['file_name_g']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($backgt['path_g']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                                <td>
                                                                                    <a href="<?php echo $backgt['path_g']; ?>" class="btn btn-primary" download>
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
                                        <?php else : ?>
                                            <?php if (!empty($orderGT || $more_file_gt_more)) : ?>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $y++; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalGT<?php echo $r++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">GT Document</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group" style="text-align: left;">
                                                                    <table class="table zero-configuration">
                                                                        <thead>
                                                                            <tr style="background: aliceblue;">
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
                                                                                    <td><a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                    <td><?php echo $orderGT['create_at'] ?></td>
                                                                                </tr>
                                                                            <?php } ?>

                                                                            <?php foreach ($more_file_gt_more as $keys => $more_file_gt_more) { ?>
                                                                                <tr>
                                                                                    <td><?php echo $more_file_gt_more['order_id'] ?> (MF)</td>
                                                                                    <td><?php echo $more_file_gt_more['file_name_GT'] ?></td>
                                                                                    <td><a href="<?php echo $more_file_gt_more['path_GT'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                    <td><?php echo $more_file_gt_more['create_at'] ?></td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <?php $bt = $this->db->get_where('tbl_upload_backup_team', ['status_back' => 0, 'order_id_back' => $task['or_id']])->result_array(); ?>
                                                                <?php if (!empty($bt)) :  ?>
                                                                    <div class="form-group mt-5 " style="text-align: left;">
                                                                        <label for="" style="font-size: 18px;color: #0072ff;"> <u> GT Extension admin</u> </label>

                                                                        <table class="table zero-configuration">
                                                                            <thead>
                                                                                <tr style="background: aliceblue;">
                                                                                    <th>Order id</th>
                                                                                    <th>File name</th>
                                                                                    <th>File</th>
                                                                                    <th>create</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($bt as $keys => $bt) { ?>
                                                                                    <tr>
                                                                                        <td><?php echo $bt['order_id_back'] ?></td>
                                                                                        <td><?php echo $bt['file_name_back'] ?></td>
                                                                                        <td><a href="<?php echo $bt['path_back'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                        <td><?php echo $bt['create_at_back'] ?></td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                <?php endif; ?>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                -
                                            <?php endif; ?>
                                        <?php endif; ?>


                                    </td>

                                    <!-- DM Document -->
                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub');
                                        $this->db->where('tbl_bookmark.id_orderBuy', $task['or_id']);
                                        $dm_cc = $this->db->get('tbl_bookmark')->result_array();
                                        ?>
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
                                                                    <?php foreach ($dm_cc as $key => $dm_cc) : ?>
                                                                        <tr>

                                                                            <td><?php echo $dm_cc['file_name'] ?></td>
                                                                            <td><a href="<?php echo $dm_cc['path'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                            <td><?php echo $dm_cc['create_at'] ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                                            <td style="text-align:left;"><?php echo $teamfile['name_folder'] == '' ? 'folder' : $teamfile['name_folder']; ?></td>
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

                                    <!-- wage -->
                                    <td>
                                        <span class="badge badge-primary" style="font-size:16px;">$ <?php echo $task['wage']; ?></span>
                                    </td>

                                    <?php $data = date('Y-m-d') ?>
                                    <?php $prosum = date('Y-m-d', strtotime('+65 day' . '+' . $task['up_order'])); ?>
                                    <?php $or_sub = substr($task['or_id'], 3); ?>
                                    <?php $te_sub = substr($team['IdTeam'], 2); ?>

                                    <!-- name_item -->
                                    <td><?php echo $task['name_item']; ?></td>

                                    <!-- update_confirm -->
                                    <td><?php echo date('d F Y', strtotime($task['update_confirm'])); ?></td>
                                    <?php if ($task['status_approved'] == 1 || $task['status_approved'] == 2 || date('Y-m-d') >= $task['end_time_withdraw'] && $task['end_time_withdraw'] != '') { ?>
                                        <?php $withh = $this->db->get_where('tbl_withdraw_team', ['order_id' => $task['or_id']])->row_array(); ?>


                                        <?php if ($task['c_status'] == 3) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;">Re Feedback</span></td>
                                        <?php } elseif (empty($withh)) { ?>

                                            <td>
                                                <?php if ($task['end_time_withdraw'] > date('Y-m-d')) : ?>
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#cf_draw<?php echo $task['or_id']; ?>"><i class="fa fa-money"></i> Withdraw </button>
                                                    <div class="modal fade" id="cf_draw<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Withdraw (<?php echo $task['or_id']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="text-align: left;">
                                                                    <label style="font-size:18px; " for="">แสดงความคิดเห็น (คุณอยากบอกอะไรเรา)</label>
                                                                    <textarea name="textarea" id="textarea" class="form-control" rows="5"></textarea><br>
                                                                    <label style="font-size:18px;" for="">คะแนนความพึงพอใจในบริการของเรา</label><br>
                                                                    <div class="rate" style="text-align: center;">
                                                                        <input type="radio" class="star" id="star5" name="rate" value="5" />
                                                                        <label for="star5" title="text">5 stars</label>
                                                                        <input type="radio" class="star" id="star4" name="rate" value="4" />
                                                                        <label for="star4" title="text">4 stars</label>
                                                                        <input type="radio" class="star" id="star3" name="rate" value="3" />
                                                                        <label for="star3" title="text">3 stars</label>
                                                                        <input type="radio" class="star" id="star2" name="rate" value="2" />
                                                                        <label for="star2" title="text">2 stars</label>
                                                                        <input type="radio" class="star" id="star1" name="rate" value="1" />
                                                                        <label for="star1" title="text">1 star</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" data-orderq="<?php echo $task['or_id'] ?>" id="star" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php else : ?>
                                                    <span class="badge badge-info" style="color:#fff;font-size:16px;">Withdraw Expired </span>
                                                <?php endif; ?>
                                            </td>
                                            <script>
                                                $('body').on('click', '#star', function() {
                                                    var star = $('input[name="rate"]:checked').val();
                                                    var textarea = $('#textarea').val();

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
                                                                    order_id: '<?php echo $task['or_id'] ?>',
                                                                    teamId: '<?php echo $team['IdTeam']; ?>',
                                                                    price: '<?= $task['wage']; ?>',
                                                                    star: star,
                                                                    textarea: textarea,
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
                                            <td><span class="badge badge-success" style="font-size:16px;">Payment successfully</span></td>
                                        <?php } else { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;"><i class="fa fa-exclamation-triangle"></i> Have a problem</span></td>
                                        <?php } ?>



                                    <?php } else { ?>
                                    
                                        <?php
                                        $z  = 0;
                                        $cf = $this->db->get_where('tbl_feedback', ['order_id' => $task['or_id'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                        foreach ($cf as $key => $cf) {
                                            $z += 1;
                                        }
                                        $c  = 0;
                                        $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $task['or_id'], 'check_status' => 1, 're_feedback' => 1])->result_array();
                                        foreach ($cf2 as $key => $cf2) {
                                            $c += 1;
                                        }
                                        ?>

                                        <?php if ($task['c_status'] == 0 && $task['status_approved'] == 0) { ?>
                                            <td><span class="badge badge-warning" style="font-size:16px;">Processing</span></td>
                                        <?php } elseif ($task['c_status'] == 1) { ?>
                                            <td><span class="badge badge-info" style="font-size:16px;">Waiting for Approved</span></td>
                                        <?php } elseif ($task['c_status'] == 2) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;">Feedback <?= $z; ?></span></td>
                                        <?php } elseif ($task['c_status'] == 3) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;">Re Feedback <?= $c; ?></span></td>
                                        <?php } elseif ($task['c_status'] == 4) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;background-color: #ff6b75;">Not complete </span></td>
                                        <?php } elseif ($task['c_status'] == 5) { ?>
                                            <td><span class="badge badge-success" style="font-size:16px;">Complete </span></td>
                                        <?php } else { ?>
                                            <td>-</td>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php if ($task['status_check_team'] == '1' && $task['t_ch'] == $team['IdTeam']) : ?>
                                        <td>
                                            <button type="button" class="btn btn-success" id="cancel_team<?php echo $task['or_id']; ?>" data-toggled="tooltip" data-placement="top" title="Confirm (ยืนยัน)"><i class="fa fa-check-square-o"></i></button>
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
                                                                    tm: '<?php echo $team['IdTeam']; ?>',
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
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Can<?php echo $task['or_id']; ?>" data-toggled="tooltip" data-placement="top" title="Cancel (ยกเลิก)"><i class="fa fa-times-circle"></i></button>
                                            <div class="modal fade" id="Can<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form action="my_task_can" method="post">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <input type="text" value="<?php echo $task['or_id']; ?>" name="orb" hidden>
                                                                <input type="text" value="<?php echo $team['IdTeam']; ?>" name="team_idd" hidden>
                                                                <h5 class="modal-title" id="exampleModalLabel">Cancel Order Team</h5>

                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="text-align: left;">
                                                                <span style="color : red">
                                                                    * เมื่อคุณทำการยกเลิกออเดอร์ทุกครั้ง จะโดนปรับจากระบบ $10 ทันที และสามารถยิกเลิกออเดอร์ได้ 2 ครั้ง หลังจากนั้นท่านจะโดนแบน 60 วัน
                                                                </span>
                                                                <textarea name="note_can" id="" cols="30" rows="10" class="form-control" required></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>

                                    <?php elseif ($task['c_status'] == 0 || $task['c_status'] == 1 || $task['c_status'] == 2 || $task['c_status'] == 3 || $task['c_status'] == 5 && $task['status_check_team'] == 0) : ?>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancel_task<?php echo $task['or_id']; ?>" data-toggled="tooltip" data-placement="top" title="Cancel (ยกเลิก)"><i class="fa fa-times-circle"></i></button>
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
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>


                                    <?php else : ?>
                                        <td><button type="button" class="btn btn-secondary" data-toggled="tooltip" data-placement="top" title="Cancel (ยกเลิก)"><i class="fa fa-times-circle"></i></button></td>
                                    <?php endif; ?>
                                </tr>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        if (<?= $task['status']; ?> == 4 && <?= $task['check_popup_nocom']; ?> == 0) {
                                            $('#check_popup<?= $task['idteam']; ?>').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        }
                                    });
                                </script>

                                <div class="modal fade" tabindex="-1" role="dialog" id="check_popup<?= $task['idteam']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="popup<?= $task['idteam']; ?>" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $('#popup<?= $task['idteam']; ?>').click(function() {
                                        $.ajax({
                                            type: 'POST',
                                            url: 'order_popup',
                                            data: {
                                                id: '<?= $task['idteam']; ?>',
                                            },
                                            success: function(success) {
                                                $('#check_popup<?= $task['idteam']; ?>').modal('hide');
                                            }
                                        });
                                    });
                                </script>

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