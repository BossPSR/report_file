<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if (!empty($task)) { ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My task</h2>
    <hr class="line_package">
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
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Date Requred</th>
                                <th scope="col">Main Doc</th>
                                <th scope="col">GT Doc</th>
                                <th scope="col">DM Doc</th>
                                <th scope="col">Team File</th>
                                <th scope="col">Wage</th>
                                <th scope="col">Select item</th>
                                <th scope="col">Status</th>
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
                                    <td><?php echo $p++; ?></td>
                                    <td><?php echo $task['or_id']; ?></td>
                                    <td><?php echo date('d F Y',strtotime($task['date_required'])); ?></td>
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
                                    <td>
                                        <?php $taskGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $task['or_id']])->result_array(); ?>
                                        <?php if (!empty($taskGT)) { ?>

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
                                                                    <?php foreach ($taskGT as $taskGT) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $taskGT['order_id']; ?></td>
                                                                            <td style="text-align:left;"><?php echo $taskGT['file_name_GT']; ?></td>
                                                                            <td><a href="<?php echo $taskGT['path_GT']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            <td>
                                                                                <a href="<?php echo $taskGT['path_GT']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> Download
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                            <?php $taskGTMORE = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $task['or_id'], 'status_more_file' => 1, 'status_see_more_file_team' => 1])->result_array(); ?>
                                                            <?php if (!empty($taskGTMORE)) { ?>
                                                                <h5 style="text-align:left;">More Document</h5>
                                                                <hr>

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Info</th>
                                                                            <th scope="col">Downloads</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($taskGTMORE as $taskGTMORE) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $taskGTMORE['order_id']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $taskGTMORE['file_name_GT']; ?></td>
                                                                                <td><a href="<?php echo $taskGTMORE['path_GT']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                                <td>
                                                                                    <a href="<?php echo $taskGTMORE['path_GT']; ?>" class="btn btn-primary" download>
                                                                                        <i class="fa fa-download"></i> Download
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php } else { ?>

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
                                    <td>


                                        <?php $DMfile = $this->db->get_where('tbl_upload_store', ['store_id' => $task['upload_store_id']])->result_array(); ?>
                                        <?php if (!empty($DMfile)) { ?>

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
                                                            <?php $mn = 1; ?>
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
                                                                    <?php foreach ($DMfile as $DMfile) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $task['or_id']; ?></td>
                                                                            <td style="text-align:left;"><?php echo $DMfile['file_name']; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo $DMfile['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="<?php echo $DMfile['path']; ?>" class="btn btn-primary" download>
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
                                    <td>

                                        <?php $teamfile = $this->db->get_where('tbl_upload_order_team', ['order_id' => $task['or_id']])->result_array(); ?>
                                        <?php if (!empty($teamfile)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#DMDOC<?php echo $task['or_id']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="DMDOC<?php echo $task['or_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php $mn = 1; ?>
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
                                                                    <?php foreach ($teamfile as $teamfile) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $task['or_id']; ?></td>
                                                                            <td style="text-align:left;"><?php echo $teamfile['file_name']; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo $teamfile['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="<?php echo $teamfile['path']; ?>" class="btn btn-primary" download>
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
                                    <td>
                                        <span class="badge badge-primary" style="font-size:16px;">$ <?php echo $task['wage']; ?></span>
                                    </td>

                                    <?php $data = date('Y-m-d') ?>
                                    <?php $prosum = date('Y-m-d', strtotime('+60 day' . '+' . $task['up_order'])); ?>

                                    <td><?php echo $task['name_item']; ?></td>
                                    <?php if ($task['status_approved'] == 1 || date('Y-m-d') >= $prosum && $task['up_order'] != '') { ?>
                                        <?php $withh = $this->db->get_where('tbl_withdraw_team', ['order_id' => $task['or_id']])->row_array(); ?>

                                        <?php if (empty($withh)) { ?>
                                            <?php $or_sub = substr($task['or_id'], 3); ?>
                                            <?php $te_sub = substr($team['IdTeam'], 2); ?>
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
                                        
                                     <?php } elseif ($task['status_approved'] == 3) { ?>
                                   
                                   <td><span class="badge badge-warning" style="font-size:16px;">Feedback</span></td>

                                    <?php } else { ?>
                                        <?php if ($task['c_status'] == 0) { ?>
                                            <td><span class="badge badge-warning" style="font-size:16px;">Processing</span></td>
                                        <?php } elseif ($task['c_status'] == 1) { ?>
                                            <td><span class="badge badge-success" style="font-size:16px;">Complete</span></td>
                                        <?php } elseif ($task['c_status'] == 2) { ?>
                                            <td><span class="badge badge-danger" style="font-size:16px;">Feedback</span></td>
                                        <?php } ?>
                                    <?php } ?>
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
                <div class="col-1"></div>
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