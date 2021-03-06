<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Satisfied</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Satisfied
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Satisfied</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($order_main == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_main as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configurationdate" style="white-space: nowrap;">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>Video</th>
                                                    <th>User</th>
                                                    <th>Country</th>
                                                    <th>
                                                        Organi <br>
                                                        zation
                                                    </th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>T3 File</th>
                                                    <th>Create Date</th>
                                                    <th>Date required</th>
                                                    <th>Price</th>
                                                    <th>Note Team</th>
                                                    <th>Note Client</th>
                                                    <th style="width: 240px;">info</th>
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th style="width: 85px;">Process</th>
                                                    <th>Client Feedback</th>
                                                    <th>Admin Feedback </th>
                                                    <th style="width: 11%;">Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_main as $id => $stores) {
                                                ?>

                                                    <tr style="background: <?php echo $stores['status_informal'] == 1 ? '#ececec' : ''; ?>">
                                                        <!-- orderST -->
                                                        <td><?php echo $stores['orderST']; ?></td>

                                                        <td><?php echo $stores['video_lang'] == 1 ? 'TH' : 'EN' ; ?></td>

                                                        <!-- userOR -->
                                                        <td><?php echo $stores['Username'] == '' ? $stores['userOR'] : $stores['Username']; ?></td>

                                                        <!-- countryName -->
                                                        <td>
                                                            <?php echo $stores['countryName'] == '' ? '-' : $stores['countryName']; ?>
                                                        </td>

                                                        <!-- Organization -->
                                                        <td>
                                                            <div class="badge badge-pill badge-primary mr-1 mb-1" style="font-weight: 900;">
                                                                <?php echo $stores['organization'] == '' ? '-' : $stores['organization']; ?>
                                                            </div>

                                                        </td>

                                                        <!-- DM -->
                                                        <td>
                                                            <?php if (empty($stores['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $stores['orderST']])->result_array(); ?>
                                                                <?php foreach ($show_dm as $keyBook => $show_dm) { ?>

                                                                    <?php if ($show_dm['id_document'] == '') : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <span class="badge badge-primary"><?php echo $show_dm['id_document'] ?></span>
                                                                    <?php endif; ?>

                                                                <?php } ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Main File -->
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-6" style="text-align:left;">
                                                                                    <button class="btn btn-primary" onclick='downloadAll(window.links,"<?php echo $stores["orderST"]; ?>")'>Download All File</button>
                                                                                </div>
                                                                                <div class="col-6" style="text-align:right;">
                                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#up_main_file<?php echo $stores['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade text-left" id="up_main_file<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header bg-primary">
                                                                                            <h4 class="modal-title" id="myModalLabel1">Drop main file</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <label for="" style="font-size: 16px;">File Document </label>
                                                                                            <form action="Satisfied_add_mainfile" class="dropzone dropzone-area" id="dropzone_upmainfile<?php echo $stores['orderST']; ?>" method="POST">
                                                                                                <input type="hidden" name="orderST" value="<?php echo $stores['orderST']; ?>">
                                                                                                <input type="hidden" name="userOR" value="<?php echo $stores['userOR']; ?>">
                                                                                                <input type="hidden" name="User_St" value="<?php echo $stores['User_St']; ?>">
                                                                                                <input type="hidden" name="St_email" value="<?php echo $stores['St_email']; ?>">
                                                                                                <input type="hidden" name="price_file" value="<?php echo $stores['price_file']; ?>">
                                                                                                <input type="hidden" name="price_dis_order" value="<?php echo $stores['price_dis_order']; ?>">
                                                                                                <input type="hidden" name="score_user" value="<?php echo $stores['score_user']; ?>">
                                                                                                <input type="hidden" name="dateREST" value="<?php echo $stores['dateREST']; ?>">
                                                                                                <input type="hidden" name="create_times" value="<?php echo date('Y-m-d H:i:s'); ?>">
                                                                                                <input type="hidden" name="status_book" value="<?php echo $stores['status_book']; ?>">
                                                                                                <input type="hidden" name="status_admin" value="<?php echo $stores['status_admin']; ?>">
                                                                                                <input type="hidden" name="is_check" value="<?php echo $stores['is_check']; ?>">
                                                                                                <input type="hidden" name="note_reject" value="<?php echo $stores['note_reject']; ?>">
                                                                                                <!-- <input type="hidden" name="is_confirm" value=""> -->
                                                                                                <input type="hidden" name="status_pay" value="<?php echo $stores['status_pay']; ?>">
                                                                                                <!-- <input type="hidden" name="select_item" value=""> -->
                                                                                                <input type="hidden" name="status_approved" value="<?php echo $stores['status_approved']; ?>">
                                                                                                <input type="hidden" name="status_confirmed_team" value="<?php echo $stores['status_confirmed_team']; ?>">
                                                                                                <input type="hidden" name="notify_user" value="<?php echo $stores['notify_user']; ?>">
                                                                                                <input type="hidden" name="status_cp" value="<?php echo $stores['status_cp']; ?>">
                                                                                                <input type="hidden" name="status_delivery" value="<?php echo $stores['status_delivery']; ?>">
                                                                                                <input type="hidden" name="notify_team" value="<?php echo $stores['notify_team']; ?>">
                                                                                                <input type="hidden" name="notify_admin" value="<?php echo $stores['notify_admin']; ?>">
                                                                                                <input type="hidden" name="click_step" value="<?php echo $stores['click_step']; ?>">
                                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-primary" id="up_main_file_save<?php echo $stores['orderST']; ?>">Upload File</button>
                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                        <script>
                                                                                            Dropzone.autoDiscover = false;
                                                                                            var myDropzone115<?php echo $stores['orderST']; ?> = new Dropzone("#dropzone_upmainfile<?php echo $stores['orderST']; ?>", {
                                                                                                autoProcessQueue: false,
                                                                                                maxFiles: 5,
                                                                                                addRemoveLinks: true,
                                                                                                parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                            });
                                                                                            document.getElementById("up_main_file_save<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                                                // myDropzone.processQueue();
                                                                                                if (myDropzone115<?php echo $stores['orderST']; ?>.files == 0) {
                                                                                                    swal("Warning!", "Can not be document Empty", "warning", {
                                                                                                        button: true,
                                                                                                    });
                                                                                                } else {

                                                                                                    myDropzone115<?php echo $stores['orderST']; ?>.processQueue();
                                                                                                    myDropzone115<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                            button: true,
                                                                                                        });
                                                                                                        $("#here<?php echo $stores['orderST']; ?>").load(window.location.href + " #here<?php echo $stores['orderST']; ?>");
                                                                                                        $('#up_main_file<?php echo $stores['orderST']; ?>').modal('hide');
                                                                                                    });
                                                                                                }
                                                                                            });
                                                                                        </script>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <table class="table zero-configuration" id="here<?php echo $stores['orderST']; ?>">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stores['orderST']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order_id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>


                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td>
                                                                                                <?php echo $order['file_name'] ?> <a href="" data-toggle="modal" data-target="#dms<?php echo $order['id']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade text-left" id="dms<?php echo $order['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h4 class="modal-title" id="myModalLabel1">Rename</h4>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <h5>Rename</h5>
                                                                                                                <?php $or_file_name = explode('.', $order['file_name']); ?>
                                                                                                                <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_name<?php echo $order['id']; ?>" class="form-control">
                                                                                                                <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_name<?php echo $order['id']; ?>" class="form-control">
                                                                                                                <input type="hidden" id="pathmain<?php echo $order['id']; ?>" data-pathgt="<?php echo $order['path']; ?>" class="form-control">
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="button" class="btn btn-primary ey" id="re_file_name_button<?php echo $order['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['created_at_buy'] ?></td>
                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <?php
                                                                            $po = 0;
                                                                            $this->db->group_by('sub_id_m');
                                                                            $orderbp_for = $this->db->get_where('tbl_upload_backup_main', ['order_id_m' => $stores['orderST']])->result_array();
                                                                            ?>
                                                                            <?php if (!empty($orderbp_for)) : ?>
                                                                                <br>
                                                                                <hr>
                                                                                <div>
                                                                                    <h3>Sub file details</h3>
                                                                                </div>
                                                                                <div class="accordion" id="accordionExample" data-toggle-hover="true">

                                                                                    <?php foreach ($orderbp_for as $key => $orderbp_for) : ?>
                                                                                        <div class="collapse-margin">
                                                                                            <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapse<?= $orderbp_for['sub_id_m'] ?>" aria-expanded="false" aria-controls="collapseOne">
                                                                                                <span class="lead collapse-title collapsed">
                                                                                                    Main file ชุดที่ <?= $po += 1; ?>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div id="collapse<?= $orderbp_for['sub_id_m'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                                                <div class="card-body">
                                                                                                    <table class="table zero-configuration">
                                                                                                        <thead>
                                                                                                            <?php $orderbp_main = $this->db->get_where('tbl_upload_backup_main', ['order_id_m' => $stores['orderST'], 'sub_id_m' => $orderbp_for['sub_id_m']])->result_array(); ?>
                                                                                                            <tr>
                                                                                                                <th>Order_id</th>
                                                                                                                <th>File_name</th>
                                                                                                                <th>File</th>
                                                                                                                <th>create</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <?php foreach ($orderbp_main as $keys => $orderbp_main) { ?>
                                                                                                                <tr>
                                                                                                                    <td><?php echo $orderbp_main['order_id_m'] ?></td>
                                                                                                                    <td>
                                                                                                                        <?php echo $orderbp_main['file_name_m'] ?>
                                                                                                                    </td>
                                                                                                                    <td><a href="<?php echo $orderbp_main['path_m'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                    <td><?php echo $orderbp_main['create_at_m'] ?></td>
                                                                                                                </tr>
                                                                                                            <?php } ?>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endforeach; ?>
                                                                                </div>
                                                                            <?php endif; ?>


                                                                            <script>
                                                                                $('body').on('click', 'button[type="button"].ey', function() {
                                                                                    var c = $(this).data('fmain');
                                                                                    var d = $('#pathmain' + c).data('pathgt');
                                                                                    var name_file = $('#Re_file_name' + c).val();
                                                                                    var last_file = $('#Re_last_name' + c).val();

                                                                                    $.ajax({
                                                                                        url: "rename_filename",
                                                                                        type: "POST",
                                                                                        data: {
                                                                                            id: c,
                                                                                            name_file: name_file,
                                                                                            last_file: last_file,
                                                                                            path: d
                                                                                        },
                                                                                        success: function(success) {
                                                                                            if (success) {
                                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                                    button: true,
                                                                                                });
                                                                                                $("#here<?php echo $stores['orderST']; ?>").load(window.location.href + " #here<?php echo $stores['orderST']; ?>");
                                                                                                $('#dms' + c).modal('hide');
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <!-- GT File -->
                                                        <td>
                                                            <?php
                                                            $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                                            $this->db->where('tbl_morefile_GT.order_id', $stores['orderST']);
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                                            $orderGT = $this->db->get('tbl_morefile_GT')->result_array(); ?>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_morefile_GT');
                                                            $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                                            $this->db->where('tbl_morefile_GT.order_id', $stores['orderST']);

                                                            $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                                            $more_file_gt = $this->db->get()->result_array();
                                                            ?>
                                                            <?php if (!empty($orderGT ||  $more_file_gt)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-6" style="text-align:left;">
                                                                                        <button class="btn btn-primary" onclick='downloadAll_gt(window.links,"<?php echo $stores["orderST"]; ?>")'>Download All File</button>
                                                                                    </div>
                                                                                    <div class="col-6" style="text-align:right;">
                                                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#up_gt_file<?php echo $stores['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade text-left" id="up_gt_file<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header bg-primary">
                                                                                                <h4 class="modal-title" id="myModalLabel1">File Document </h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <label for="" style="font-size: 16px;">GT File </label>
                                                                                                <form action="Satisfied_add_gt_file" class="dropzone dropzone-area" id="dropzone_upgtfile<?php echo $stores['orderST']; ?>" method="POST">
                                                                                                    <input type="hidden" name="orderST" id="orderST" value="<?php echo $stores['orderST']; ?>">
                                                                                                    <input type="hidden" name="userOR" id="userOR" value="<?php echo $stores['userOR']; ?>">
                                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-primary" id="up_gt_file_save<?php echo $stores['orderST']; ?>">Upload File</button>
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            </div>
                                                                                            <script>
                                                                                                Dropzone.autoDiscover = false;
                                                                                                var myDropzone113<?php echo $stores['orderST']; ?> = new Dropzone("#dropzone_upgtfile<?php echo $stores['orderST']; ?>", {
                                                                                                    autoProcessQueue: false,
                                                                                                    maxFiles: 5,
                                                                                                    addRemoveLinks: true,
                                                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                                });
                                                                                                document.getElementById("up_gt_file_save<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                                                    // myDropzone.processQueue();
                                                                                                    if (myDropzone113<?php echo $stores['orderST']; ?>.files == 0) {
                                                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                                                            button: true,
                                                                                                        });
                                                                                                    } else {
                                                                                                        var orderST = $('#orderST').val();
                                                                                                        var userOR = $('#userOR').val();

                                                                                                        console.log(orderST, userOR);
                                                                                                        $.ajax({
                                                                                                            url: "Satisfied_per_add_gt_file",
                                                                                                            type: "POST",
                                                                                                            data: {
                                                                                                                orderST: orderST,
                                                                                                                userOR: userOR,
                                                                                                            },
                                                                                                            success: function(success) {
                                                                                                                if (success) {
                                                                                                                    myDropzone113<?php echo $stores['orderST']; ?>.processQueue();
                                                                                                                    myDropzone113<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                            button: true,
                                                                                                                        });
                                                                                                                        $("#here_gt<?php echo $stores['orderST']; ?>").load(window.location.href + " #here_gt<?php echo $stores['orderST']; ?>");
                                                                                                                        $('#up_gt_file<?php echo $stores['orderST']; ?>').modal('hide');
                                                                                                                    });
                                                                                                                }
                                                                                                            },
                                                                                                        });

                                                                                                    }
                                                                                                });
                                                                                            </script>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <table class="table zero-configuration" id="here_gt<?php echo $stores['orderST']; ?>">
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

                                                                                                <td><?php echo $orderGT['order_id'] ?> </td>
                                                                                                <td>
                                                                                                    <?php echo $orderGT['file_name_GT'] ?>
                                                                                                    <a href="" data-toggle="modal" data-target="#dmsGT<?php echo $orderGT['id']; ?>">
                                                                                                        <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                    </a>
                                                                                                    <!-- Modal -->
                                                                                                    <div class="modal fade text-left" id="dmsGT<?php echo $orderGT['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h4 class="modal-title" id="myModalLabel1">Rename</h4>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <h5>Rename</h5>
                                                                                                                    <?php $or_file_name = explode('.', $orderGT['file_name_GT']); ?>
                                                                                                                    <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameGT<?php echo $orderGT['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameGT<?php echo $orderGT['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" id="path<?php echo $orderGT['id']; ?>" data-pathgt="<?php echo $orderGT['path_GT']; ?>" class="form-control">
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-primary ex" id="re_file_name_buttonGT<?php echo $orderGT['id']; ?> " data-fgt="<?php echo $orderGT['id']; ?>">Submit</button>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td><a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderGT['create_at'] ?></td>
                                                                                            </tr>

                                                                                        <?php } ?>

                                                                                        <?php foreach ($more_file_gt as $key => $more_file_gt) { ?>
                                                                                            <tr>

                                                                                                <td><?php echo $more_file_gt['order_id'] ?> (MF) </td>
                                                                                                <td>
                                                                                                    <?php echo $more_file_gt['file_name_GT'] ?>
                                                                                                    <a href="" data-toggle="modal" data-target="#dmsGT<?php echo $more_file_gt['id']; ?>">
                                                                                                        <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                    </a>
                                                                                                    <!-- Modal -->
                                                                                                    <div class="modal fade text-left" id="dmsGT<?php echo $more_file_gt['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h4 class="modal-title" id="myModalLabel1">Rename</h4>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <h5>Rename</h5>
                                                                                                                    <?php $or_file_name = explode('.', $more_file_gt['file_name_GT']); ?>
                                                                                                                    <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameGT<?php echo $more_file_gt['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameGT<?php echo $more_file_gt['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" id="path<?php echo $more_file_gt['id']; ?>" data-pathgt="<?php echo $more_file_gt['path_GT']; ?>" class="form-control">
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-primary ex" id="re_file_name_buttonGT<?php echo $more_file_gt['id']; ?> " data-fgt="<?php echo $more_file_gt['id']; ?>">Submit</button>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td><a href="<?php echo $more_file_gt['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $more_file_gt['create_at'] ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>

                                                                                    </tbody>
                                                                                </table>
                                                                                <?php
                                                                                $po = 0;
                                                                                $this->db->group_by('sub_id_g');
                                                                                $orderbg_for = $this->db->get_where('tbl_upload_backup_gt', ['order_id_g' => $stores['orderST']])->result_array();
                                                                                ?>
                                                                                <?php if (!empty($orderbg_for)) : ?>
                                                                                    <br>
                                                                                    <hr>
                                                                                    <div>
                                                                                        <h3>Sub file details</h3>
                                                                                    </div>
                                                                                    <div class="accordion" id="accordionExample" data-toggle-hover="true">

                                                                                        <?php foreach ($orderbg_for as $key => $orderbg_for) : ?>
                                                                                            <div class="collapse-margin">
                                                                                                <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseGT<?= $orderbg_for['sub_id_g'] ?>" aria-expanded="false" aria-controls="collapseOne">
                                                                                                    <span class="lead collapse-title collapsed">
                                                                                                        GT file ชุดที่ <?= $po += 1; ?>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div id="collapseGT<?= $orderbg_for['sub_id_g'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                                                    <div class="card-body">
                                                                                                        <table class="table zero-configuration">
                                                                                                            <thead>
                                                                                                                <?php $orderbp_gt = $this->db->get_where('tbl_upload_backup_gt', ['order_id_g' => $stores['orderST'], 'sub_id_g' => $orderbg_for['sub_id_g']])->result_array(); ?>
                                                                                                                <tr>
                                                                                                                    <th>Order id</th>
                                                                                                                    <th>File name</th>
                                                                                                                    <th>File</th>
                                                                                                                    <th>create</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <?php foreach ($orderbp_gt as $keys => $orderbp_gt) { ?>
                                                                                                                    <tr>
                                                                                                                        <td><?php echo $orderbp_gt['order_id_g'] ?></td>
                                                                                                                        <td>
                                                                                                                            <?php echo $orderbp_gt['file_name_g'] ?>
                                                                                                                        </td>
                                                                                                                        <td><a href="<?php echo $orderbp_gt['path_g'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                        <td><?php echo $orderbp_gt['create_at_g'] ?></td>
                                                                                                                    </tr>
                                                                                                                <?php } ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endforeach; ?>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                            <script>
                                                                $('body').on('click', 'button[type="button"].ex', function() {
                                                                    var a = $(this).data('fgt');
                                                                    var b = $('#path' + a).data('pathgt');
                                                                    var name_fileGT = $('#Re_file_nameGT' + a).val();
                                                                    var last_fileGT = $('#Re_last_nameGT' + a).val();

                                                                    $.ajax({
                                                                        url: "rename_filenameGT",
                                                                        type: "POST",
                                                                        data: {
                                                                            id: a,
                                                                            name_file: name_fileGT,
                                                                            last_file: last_fileGT,
                                                                            path: b
                                                                        },
                                                                        success: function(success) {
                                                                            if (success) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: true,
                                                                                });
                                                                                $("#here_gt<?php echo $stores['orderST']; ?>").load(window.location.href + " #here_gt<?php echo $stores['orderST']; ?>");
                                                                                $('#dmsGT' + a).modal('hide');
                                                                            }
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                        </td>

                                                        <!-- DM File -->
                                                        <td>
                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['orderST']])->result_array(); ?>
                                                            <?php if (!empty($dm_cc)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalbDM<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalbDM<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">DM File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p>
                                                                                            <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                        </p>
                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Rewrite</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $key => $dm_c11) : ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['comandnocom'] == '4') : ?>
                                                                                                                <div class="badge badge-primary">Rewrite</div>
                                                                                                            <?php else : ?>
                                                                                                                -
                                                                                                            <?php endif ?>
                                                                                                        </td>
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
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>


                                                        </td>

                                                        <!-- Team File -->
                                                        <td>
                                                            <?php
                                                            $this->db->join('tbl_folder', 'tbl_folder.id = tbl_upload_order_team.group', 'left');
                                                            $this->db->group_by('group');
                                                            $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['orderST']])->result_array();
                                                            ?>
                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#TeamFile<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="TeamFile<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Status Admin</th>
                                                                                            <th>Folder name</th>
                                                                                            <th>Folder</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderT as $keys => $orderT) { ?>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <?php if ($orderT['status_upload_admin_cp'] == '1') : ?>
                                                                                                        <span class="badge badge-pill badge-danger">Admin</span>
                                                                                                    <?php else : ?>
                                                                                                        -
                                                                                                    <?php endif; ?>
                                                                                                </td>
                                                                                                <td><?php echo $orderT['name_folder'] == '' ? 'Admin folder' : $orderT['name_folder'] ?></td>
                                                                                                <td>
                                                                                                    <span data-toggle="modal" data-target="#group_sup<?php echo $orderT['group']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                                                    <div class="modal fade" id="group_sup<?php echo $orderT['group']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Team File (<?php echo $orderT['name_folder'] ?>)</h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <table class="table zero-configuration">
                                                                                                                        <thead>
                                                                                                                            <tr>
                                                                                                                                <th>Order id</th>
                                                                                                                                <th>File_name</th>
                                                                                                                                <th>File</th>
                                                                                                                                <th>Create</th>
                                                                                                                            </tr>
                                                                                                                        </thead>
                                                                                                                        <tbody>
                                                                                                                            <?php $orderT_sup = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['orderST'], 'group' => $orderT['group']])->result_array(); ?>

                                                                                                                            <?php foreach ($orderT_sup as $keys => $orderT_sup) { ?>
                                                                                                                                <tr>
                                                                                                                                    <td><?php echo $orderT_sup['order_id'] ?></td>
                                                                                                                                    <td><?php echo $orderT_sup['file_name'] ?></td>
                                                                                                                                    <td><a href="<?php echo $orderT_sup['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                                    <td><?php echo $orderT_sup['create_at'] ?></td>
                                                                                                                                </tr>
                                                                                                                            <?php } ?>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td><?php echo $orderT['create_at'] == '' ? '-' : $orderT['create_at']; ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- createST -->
                                                        <td><?php echo $stores['created_at_buy']; ?></td>

                                                        <!-- dateREST -->
                                                        <td>
                                                            <?php if (date("Y-m-d H:i:s") >= $stores['dateREST']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                                <button type="button" class="btn btn-icon btn-warning waves-effect waves-light" data-toggle="modal" data-target="#dateagin<?php echo $stores['orderST']; ?>"><i class="feather icon-rotate-ccw"></i> ส่งเมล์ต่อเวลา </button>
                                                                <div class="modal fade" id="dateagin<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Send date required (<?php echo $stores['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="sendEmail_new_daterq" method="POST">
                                                                                <input type="hidden" name="order" value="<?php echo $stores['orderST']; ?>">
                                                                                <input type="hidden" name="userid" value="<?php echo $stores['userOR']; ?>">
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="" style="font-size: 16px;">Date required </label>
                                                                                        <input type="date" name="daterq" id="" class="form-control" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <div class="add-data-footer d-flex justify-content-around">
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>

                                                                <p id="demo<?php echo $stores['orderST']; ?>" style="font-size: 18px;font-weight: bold;"></p>

                                                            <?php endif; ?>
                                                            <script>
                                                                var datep<?php echo $stores['orderST']; ?> = "<?= $stores['dateREST']; ?>";

                                                                // Set the date we're counting down to
                                                                var countDownDate<?php echo $stores['orderST']; ?> = new Date(datep<?php echo $stores['orderST']; ?>);

                                                                // Update the count down every 1 second
                                                                var x<?php echo $stores['orderST']; ?> = setInterval(function() {

                                                                    // Get today's date and time
                                                                    var now<?php echo $stores['orderST']; ?> = new Date();

                                                                    // Find the distance between now and the count down date
                                                                    var distance<?php echo $stores['orderST']; ?> = countDownDate<?php echo $stores['orderST']; ?> - now<?php echo $stores['orderST']; ?>;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days<?php echo $stores['orderST']; ?> = Math.floor(distance<?php echo $stores['orderST']; ?> / (1000 * 60 * 60 * 24));
                                                                    var hours<?php echo $stores['orderST']; ?> = Math.floor((distance<?php echo $stores['orderST']; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes<?php echo $stores['orderST']; ?> = Math.floor((distance<?php echo $stores['orderST']; ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds<?php echo $stores['orderST']; ?> = Math.floor((distance<?php echo $stores['orderST']; ?> % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo<?php echo $stores['orderST']; ?>").innerHTML = days<?php echo $stores['orderST']; ?> + "Day " + hours<?php echo $stores['orderST']; ?> + "h " +
                                                                        minutes<?php echo $stores['orderST']; ?> + "m " + seconds<?php echo $stores['orderST']; ?> + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance<?php echo $stores['orderST']; ?> < 0) {
                                                                        clearInterval(x<?php echo $stores['orderST']; ?>);
                                                                        document.getElementById("demo<?php echo $stores['orderST']; ?>").innerHTML = "หมดเวลา";
                                                                    }
                                                                }, 1000);
                                                            </script>
                                                        </td>

                                                        <!-- Price file -->
                                                        <?php if ($stores['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $stores['price_file']; ?></td>
                                                        <?php endif; ?>

                                                        <!-- Note Team -->
                                                        <td style="width: 1%;">
                                                            <?php if ($stores['note_team'] == '') : ?>
                                                                -

                                                            <?php else : ?>
                                                                <a href="#" data-toggle="modal" data-target="#note_new<?php echo $stores['orderST']; ?>"><i class="feather icon-search" style="font-size: 25px;"></i></a>
                                                                <div class="modal fade" id="note_new<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?= $stores['note_team']; ?>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif ?>
                                                        </td>
                                                        <!-- Note c -->
                                                        <td style="width: 1%;">
                                                            <?php if ($stores['note_user'] == '') : ?>
                                                                -

                                                            <?php else : ?>
                                                                <a href="#" data-toggle="modal" data-target="#note_user<?php echo $stores['orderST']; ?>"><i class="feather icon-search" style="font-size: 25px;"></i></a>
                                                                <div class="modal fade" id="note_user<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?= $stores['note_user']; ?>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif ?>
                                                        </td>

                                                        <!-- TeamId / wage -->
                                                        <td>
                                                            <?php
                                                            $this->db->order_by('id', 'desc');
                                                            $wagenow = $this->db->get_where('tbl_upload_team', ['order_id' => $stores['orderST']])->row_array();
                                                            ?>

                                                            <?php if ($stores['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stores['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $wagenow['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage_thai'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $wagenow['wage_thai']; ?> บาท |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stores['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>
                                                            <?php if ($stores['teamId'] == '' && $stores['wage'] == '' && $stores['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stores['orderST']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="exampleModalwage<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_Satisfied" method="POST">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $stores['orderST']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $stores['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 5px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label> <br>
                                                                                        <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                            <option disabled> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>

                                                                                <div class="col-xl-12 col-md-12 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Position</label>
                                                                                        <select name="position" class="form-control" required>
                                                                                            <option selected disabled> ---- Select ---- </option>

                                                                                            <?php foreach ($positionX as $positionX) { ?>
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stores['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $wagenow['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                $str =  $stores['dateREST'];
                                                                                $datr_re = explode(" ", $str);
                                                                                ?>
                                                                                <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Date</label>
                                                                                        <input type="date" class="form-control  <?php echo $stores['orderST']; ?>" name="date_required" value="<?php echo $datr_re[0]; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">note</label>
                                                                                        <textarea name="note_new" id="" rows="4" class="form-control"><?php echo $stores['note']; ?></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary w-100" style="font-size: 18px;">Submit</button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-6 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                    <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">Main file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php $ordermain = $this->db->get_where('tbl_upload_order', ['order_id' => $stores['orderST']])->result_array(); ?>

                                                                                    <table class="table zero-configuration" id="heremain<?php echo $stores['orderST']; ?>">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>#</th>
                                                                                                <th>File name</th>
                                                                                                <th>File</th>
                                                                                                <th>create</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($ordermain as $keys => $ordermain) { ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <fieldset>
                                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                <input type="checkbox" name="checkboxmain[]" value="<?php echo $ordermain['id']; ?>">
                                                                                                                <span class="vs-checkbox">
                                                                                                                    <span class="vs-checkbox--check">
                                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </fieldset>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $ordermain['file_name'] ?>
                                                                                                        <a href="" data-toggle="modal" data-target="#filemain<?php echo $ordermain['id']; ?>">
                                                                                                            <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                        </a>

                                                                                                        <!-- Modal -->
                                                                                                        <div class="modal fade text-left" id="filemain<?php echo $ordermain['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                                <div class="modal-content">
                                                                                                                    <div class="modal-header">
                                                                                                                        <h4 class="modal-title" id="myModalLabel1">Rename main</h4>
                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                        <?php $or_file_name = explode('.', $ordermain['file_name']); ?>
                                                                                                                        <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameold<?php echo $ordermain['id']; ?>" class="form-control">
                                                                                                                        <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameold<?php echo $ordermain['id']; ?>" class="form-control">
                                                                                                                        <input type="hidden" id="path<?php echo $ordermain['id']; ?>" data-pathgt="<?php echo $ordermain['path']; ?>" class="form-control">
                                                                                                                    </div>
                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="button" class="btn btn-primary epx" id="re_file_name_buttonGT<?php echo $ordermain['id']; ?> " data-fgt="<?php echo $orderTgroupold['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <script>
                                                                                                            $('body').on('click', 'button[type="button"].epx', function() {
                                                                                                                var c = $(this).data('fmain');
                                                                                                                var d = $('#pathmain' + c).data('pathgt');
                                                                                                                var name_file = $('#Re_file_nameold' + c).val();
                                                                                                                var last_file = $('#Re_last_nameold' + c).val();

                                                                                                                $.ajax({
                                                                                                                    url: "rename_filename",
                                                                                                                    type: "POST",
                                                                                                                    data: {
                                                                                                                        id: c,
                                                                                                                        name_file: name_file,
                                                                                                                        last_file: last_file,
                                                                                                                        path: d
                                                                                                                    },
                                                                                                                    success: function(success) {
                                                                                                                        if (success) {
                                                                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                                button: true,
                                                                                                                            });
                                                                                                                            $("#heremain<?php echo $stores['orderST']; ?>").load(window.location.href + " #heremain<?php echo $stores['orderST']; ?>");
                                                                                                                            $('#filemain' + c).modal('hide');
                                                                                                                        }
                                                                                                                    }
                                                                                                                });
                                                                                                            });
                                                                                                        </script>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="<?php echo $ordermain['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    </td>
                                                                                                    <td><?php echo $ordermain['created_at_buy'] ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <div class="col-xl-6 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                    <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">GT file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php $ordergt_sub = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stores['orderST']])->result_array(); ?>

                                                                                    <table class="table zero-configuration" id="heregt<?php echo $stores['orderST']; ?>">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>#</th>
                                                                                                <th>File name</th>
                                                                                                <th>File</th>
                                                                                                <th>create</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($ordergt_sub as $keys => $ordergt_sub) { ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <fieldset>
                                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                <input type="checkbox" name="checkboxgt[]" value="<?php echo $ordergt_sub['id']; ?>">
                                                                                                                <span class="vs-checkbox">
                                                                                                                    <span class="vs-checkbox--check">
                                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </fieldset>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $ordergt_sub['file_name_GT'] ?>
                                                                                                        <a href="" data-toggle="modal" data-target="#filegt_sub<?php echo $ordergt_sub['id']; ?>">
                                                                                                            <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                        </a>

                                                                                                        <!-- Modal -->
                                                                                                        <div class="modal fade text-left" id="filegt_sub<?php echo $ordergt_sub['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                                <div class="modal-content">
                                                                                                                    <div class="modal-header">
                                                                                                                        <h4 class="modal-title" id="myModalLabel1">Rename main</h4>
                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                        <?php $or_file_name = explode('.', $ordergt_sub['file_name_GT']); ?>
                                                                                                                        <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameold<?php echo $ordergt_sub['id']; ?>" class="form-control">
                                                                                                                        <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameold<?php echo $ordergt_sub['id']; ?>" class="form-control">
                                                                                                                        <input type="hidden" id="path<?php echo $ordergt_sub['id']; ?>" data-pathgt="<?php echo $ordergt_sub['path_GT']; ?>" class="form-control">
                                                                                                                    </div>
                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="button" class="btn btn-primary epq" id="re_file_name_buttonGT<?php echo $ordergt_sub['id']; ?> " data-fgt="<?php echo $orderTgroupold['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <script>
                                                                                                            $('body').on('click', 'button[type="button"].epq', function() {
                                                                                                                var c = $(this).data('fmain');
                                                                                                                var d = $('#pathmain' + c).data('pathgt');
                                                                                                                var name_file = $('#Re_file_nameold' + c).val();
                                                                                                                var last_file = $('#Re_last_nameold' + c).val();

                                                                                                                $.ajax({
                                                                                                                    url: "rename_filenameGT",
                                                                                                                    type: "POST",
                                                                                                                    data: {
                                                                                                                        id: c,
                                                                                                                        name_file: name_file,
                                                                                                                        last_file: last_file,
                                                                                                                        path: d
                                                                                                                    },
                                                                                                                    success: function(success) {
                                                                                                                        if (success) {
                                                                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                                button: true,
                                                                                                                            });
                                                                                                                            $("#heregt<?php echo $stores['orderST']; ?>").load(window.location.href + " #heregt<?php echo $stores['orderST']; ?>");
                                                                                                                            $('#filegt_sub' + c).modal('hide');
                                                                                                                        }
                                                                                                                    }
                                                                                                                });
                                                                                                            });
                                                                                                        </script>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="<?php echo $ordergt_sub['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    </td>
                                                                                                    <td><?php echo $ordergt_sub['create_at'] ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <br>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                    <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">Team file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php
                                                                                    $this->db->group_by('teamId');
                                                                                    $t3folder = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['orderST']])->result_array();
                                                                                    ?>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Order id</th>
                                                                                                    <th>TM</th>
                                                                                                    <th>Folder</th>
                                                                                                    <th>Create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($t3folder as $t3folder) { ?>
                                                                                                    <tr>
                                                                                                        <td><?php echo $t3folder['order_id'] ?></td>
                                                                                                        <td><?php echo $t3folder['teamId'] ?></td>
                                                                                                        <td>
                                                                                                            <span data-toggle="modal" data-target="#teamId_team<?php echo $t3folder['teamId']; ?>_<?php echo $t3folder['order_id']; ?>"><i class="feather icon-folder" style="font-size: 25px;cursor: pointer;"></i></span>
                                                                                                            <div class="modal fade text-left" id="teamId_team<?php echo $t3folder['teamId']; ?>_<?php echo $t3folder['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header bg-primary white">
                                                                                                                            <h4 class="modal-title" id="myModalLabel1"><?php echo $t3folder['teamId'] ?></h4>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">

                                                                                                                            <?php $orderTgroupold = $this->db->get_where('tbl_upload_order_team', ['order_id' => $t3folder['order_id'], 'teamId' => $t3folder['teamId']])->result_array(); ?>

                                                                                                                            <table class="table zero-configuration" id="hereold<?php echo $stores['orderST']; ?>">
                                                                                                                                <thead>
                                                                                                                                    <tr>
                                                                                                                                        <th>#</th>
                                                                                                                                        <th>File name</th>
                                                                                                                                        <th>File</th>
                                                                                                                                        <th>create</th>
                                                                                                                                    </tr>
                                                                                                                                </thead>
                                                                                                                                <tbody>
                                                                                                                                    <?php foreach ($orderTgroupold as $keys => $orderTgroupold) { ?>
                                                                                                                                        <tr>
                                                                                                                                            <td>
                                                                                                                                                <fieldset>
                                                                                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                                                        <input type="checkbox" name="checkbox[]" value="<?php echo $orderTgroupold['id']; ?>">
                                                                                                                                                        <span class="vs-checkbox">
                                                                                                                                                            <span class="vs-checkbox--check">
                                                                                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                                                                                            </span>
                                                                                                                                                        </span>
                                                                                                                                                    </div>
                                                                                                                                                </fieldset>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                                <?php echo $orderTgroupold['file_name'] ?>
                                                                                                                                                <a href="" data-toggle="modal" data-target="#fileold<?php echo $orderTgroupold['id']; ?>">
                                                                                                                                                    <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                                                                </a>

                                                                                                                                                <!-- Modal -->
                                                                                                                                                <div class="modal fade text-left" id="fileold<?php echo $orderTgroupold['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                                                                        <div class="modal-content">
                                                                                                                                                            <div class="modal-header">
                                                                                                                                                                <h4 class="modal-title" id="myModalLabel1">Rename team old</h4>
                                                                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                                                                </button>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="modal-body">
                                                                                                                                                                <?php $or_file_name = explode('.', $orderTgroupold['file_name']); ?>
                                                                                                                                                                <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameold<?php echo $orderTgroupold['id']; ?>" class="form-control">
                                                                                                                                                                <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameold<?php echo $orderTgroupold['id']; ?>" class="form-control">
                                                                                                                                                                <input type="hidden" id="path<?php echo $orderTgroupold['id']; ?>" data-pathgt="<?php echo $orderTgroupold['path']; ?>" class="form-control">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="modal-footer">
                                                                                                                                                                <button type="button" class="btn btn-primary ep" id="re_file_name_buttonGT<?php echo $orderTgroupold['id']; ?> " data-fgt="<?php echo $orderTgroupold['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                                                                            </div>

                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <script>
                                                                                                                                                    $('body').on('click', 'button[type="button"].ep', function() {
                                                                                                                                                        var c = $(this).data('fmain');
                                                                                                                                                        var d = $('#pathmain' + c).data('pathgt');
                                                                                                                                                        var name_file = $('#Re_file_nameold' + c).val();
                                                                                                                                                        var last_file = $('#Re_last_nameold' + c).val();

                                                                                                                                                        $.ajax({
                                                                                                                                                            url: "rename_filename_TM",
                                                                                                                                                            type: "POST",
                                                                                                                                                            data: {
                                                                                                                                                                id: c,
                                                                                                                                                                name_file: name_file,
                                                                                                                                                                last_file: last_file,
                                                                                                                                                                path: d
                                                                                                                                                            },
                                                                                                                                                            success: function(success) {
                                                                                                                                                                if (success) {
                                                                                                                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                                                                        button: true,
                                                                                                                                                                    });
                                                                                                                                                                    $("#hereold<?php echo $stores['orderST']; ?>").load(window.location.href + " #hereold<?php echo $stores['orderST']; ?>");
                                                                                                                                                                    $('#fileold' + c).modal('hide');
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        });
                                                                                                                                                    });
                                                                                                                                                </script>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                                <a href="<?php echo $orderTgroupold['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                                                            </td>
                                                                                                                                            <td><?php echo $orderTgroupold['create_at'] ?></td>
                                                                                                                                        </tr>
                                                                                                                                    <?php } ?>
                                                                                                                                </tbody>
                                                                                                                            </table>


                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td><?php echo $t3folder['create_at'] ?></td>
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 ">
                                                                                    <div class="form-group">
                                                                                        <fieldset>
                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                <input type="checkbox" class="ckeckdeduug<?php echo $stores['orderST']; ?>" data-order="<?php echo $stores['orderST']; ?>">
                                                                                                <span class="vs-checkbox">
                                                                                                    <span class="vs-checkbox--check">
                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="">Deduct</span>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-12 deductTM<?php echo $stores['orderST']; ?>" style="display: none">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label>
                                                                                        <input type="text" class="form-control" value="<?= $stores['teamId']; ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-6 col-md-6 col-12  deductTM<?php echo $stores['orderST']; ?>" id="" style="display: none">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="">Deduct </label>
                                                                                        <input type="number" name="income" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <?php $teamCost = $this->db->get_where('tbl_team', ['IdTeam' => $stores['teamId']])->row_array(); ?>
                                                                                <div class="col-xl-6 col-md-6 col-12  deductTM<?php echo $stores['orderST']; ?>" id="" style="display: none">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="">Balance </label>
                                                                                        <div> $<?= $teamCost['income']; ?> </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12  deductTM<?php echo $stores['orderST']; ?>" id="" style="display: none">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="">file</label>
                                                                                        <input type="file" name="file_name" class="form-control" style="    height: auto;">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12  deductTM<?php echo $stores['orderST']; ?>" id="" style="display: none">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">note</label>
                                                                                        <textarea name="note_check" id="" rows="4" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>




                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>


                                                        <!-- Delivered -->
                                                        <td>
                                                            <?php if ($stores['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Status -->
                                                        <td>
                                                            <?php $admin_stu = $this->db->get_where('tbl_admin', ['adminId' => $stores['userOR']])->row_array(); ?>
                                                            <?php if ($admin_stu == true) : ?>
                                                                <?php if ($stores['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Admin Original </span>
                                                                <?php elseif ($stores['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-warning"> Admin Not complete </span>
                                                                <?php elseif ($stores['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Admin Rewrite </span>
                                                                <?php elseif ($stores['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> Admin No DM </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                <?php if ($stores['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                <?php elseif ($stores['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-primary">Not complete</span>
                                                                <?php elseif ($stores['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                <?php elseif ($stores['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> No DM </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Process -->
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $stores['orderST']])->row_array(); ?>
                                                        <td>
                                                            <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stores['orderST']; ?>" type="button" class="btn btn-icon btn-success" style="    font-size: 14px;">Upload T3</button>

                                                                <div class="modal fade" id="exampleModalUpload<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Upload to team (<?php echo $stores['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="upload_team_ST" method="POST" class="form-horizontal">
                                                                                <div class="modal-body row" style="text-align: center;margin: 5px 0;">

                                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Order</label>
                                                                                            <input type="text" class="form-control" name="order_id" value="<?php echo $stores['orderST']; ?>" placeholder="Enter Order" readonly>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xl-12 col-md-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="Team">Team ID</label> <br>
                                                                                            <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                                <option disabled> -- Select Team -- </option>
                                                                                                <option value=""> All Team </option>
                                                                                                <?php foreach ($ts as $tsM) { ?>
                                                                                                    <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>

                                                                                    <div class="col-xl-12 col-md-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Position</label>
                                                                                            <select name="position" class="form-control" required>
                                                                                                <option selected disabled> ---- Select ---- </option>

                                                                                                <?php foreach ($positionX as $positionX) { ?>
                                                                                                    <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stores['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">wage</label>
                                                                                            <input type="text" class="form-control" name="wage" value="<?php echo $stores['wage']; ?>" placeholder="Enter wage" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php
                                                                                    $str =  $stores['dateREST'];
                                                                                    $datr_re = explode(" ", $str);
                                                                                    ?>
                                                                                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Date</label>
                                                                                            <input type="date" class="form-control  <?php echo $stores['orderST']; ?>" name="date_required" value="<?php echo $datr_re[0]; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">note</label>
                                                                                            <textarea name="note_new" id="" rows="4" class="form-control"><?php echo $stores['note']; ?></textarea>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                        <div class="form-group">
                                                                                            <button type="submit" class="btn btn-primary w-100" style="font-size: 18px;">Submit</button>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xl-6 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                        <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">Main file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                        <hr>
                                                                                        <?php $ordermain = $this->db->get_where('tbl_upload_order', ['order_id' => $stores['orderST']])->result_array(); ?>

                                                                                        <table class="table zero-configuration" id="heremain<?php echo $stores['orderST']; ?>">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>#</th>
                                                                                                    <th>File name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($ordermain as $keys => $ordermain) { ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <fieldset>
                                                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                    <input type="checkbox" name="checkboxmain[]" value="<?php echo $ordermain['id']; ?>">
                                                                                                                    <span class="vs-checkbox">
                                                                                                                        <span class="vs-checkbox--check">
                                                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </fieldset>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <?php echo $ordermain['file_name'] ?>
                                                                                                            <a href="" data-toggle="modal" data-target="#filemain<?php echo $ordermain['id']; ?>">
                                                                                                                <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                            </a>

                                                                                                            <!-- Modal -->
                                                                                                            <div class="modal fade text-left" id="filemain<?php echo $ordermain['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h4 class="modal-title" id="myModalLabel1">Rename main</h4>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">
                                                                                                                            <?php $or_file_name = explode('.', $ordermain['file_name']); ?>
                                                                                                                            <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameold<?php echo $ordermain['id']; ?>" class="form-control">
                                                                                                                            <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameold<?php echo $ordermain['id']; ?>" class="form-control">
                                                                                                                            <input type="hidden" id="path<?php echo $ordermain['id']; ?>" data-pathgt="<?php echo $ordermain['path']; ?>" class="form-control">
                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-primary epx" id="re_file_name_buttonGT<?php echo $ordermain['id']; ?> " data-fgt="<?php echo $orderTgroupold['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <script>
                                                                                                                $('body').on('click', 'button[type="button"].epx', function() {
                                                                                                                    var c = $(this).data('fmain');
                                                                                                                    var d = $('#pathmain' + c).data('pathgt');
                                                                                                                    var name_file = $('#Re_file_nameold' + c).val();
                                                                                                                    var last_file = $('#Re_last_nameold' + c).val();

                                                                                                                    $.ajax({
                                                                                                                        url: "rename_filename",
                                                                                                                        type: "POST",
                                                                                                                        data: {
                                                                                                                            id: c,
                                                                                                                            name_file: name_file,
                                                                                                                            last_file: last_file,
                                                                                                                            path: d
                                                                                                                        },
                                                                                                                        success: function(success) {
                                                                                                                            if (success) {
                                                                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                                    button: true,
                                                                                                                                });
                                                                                                                                $("#heremain<?php echo $stores['orderST']; ?>").load(window.location.href + " #heremain<?php echo $stores['orderST']; ?>");
                                                                                                                                $('#filemain' + c).modal('hide');
                                                                                                                            }
                                                                                                                        }
                                                                                                                    });
                                                                                                                });
                                                                                                            </script>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <a href="<?php echo $ordermain['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                        </td>
                                                                                                        <td><?php echo $ordermain['created_at_buy'] ?></td>
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>

                                                                                    <div class="col-xl-6 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                        <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">GT file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                        <hr>
                                                                                        <?php $ordergt_sub = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stores['orderST']])->result_array(); ?>

                                                                                        <table class="table zero-configuration" id="heregt<?php echo $stores['orderST']; ?>">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>#</th>
                                                                                                    <th>File name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($ordergt_sub as $keys => $ordergt_sub) { ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <fieldset>
                                                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                    <input type="checkbox" name="checkboxgt[]" value="<?php echo $ordergt_sub['id']; ?>">
                                                                                                                    <span class="vs-checkbox">
                                                                                                                        <span class="vs-checkbox--check">
                                                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                                                        </span>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </fieldset>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <?php echo $ordergt_sub['file_name_GT'] ?>
                                                                                                            <a href="" data-toggle="modal" data-target="#filegt_sub<?php echo $ordergt_sub['id']; ?>">
                                                                                                                <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                            </a>

                                                                                                            <!-- Modal -->
                                                                                                            <div class="modal fade text-left" id="filegt_sub<?php echo $ordergt_sub['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h4 class="modal-title" id="myModalLabel1">Rename main</h4>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">
                                                                                                                            <?php $or_file_name = explode('.', $ordergt_sub['file_name_GT']); ?>
                                                                                                                            <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameold<?php echo $ordergt_sub['id']; ?>" class="form-control">
                                                                                                                            <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameold<?php echo $ordergt_sub['id']; ?>" class="form-control">
                                                                                                                            <input type="hidden" id="path<?php echo $ordergt_sub['id']; ?>" data-pathgt="<?php echo $ordergt_sub['path_GT']; ?>" class="form-control">
                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-primary epq" id="re_file_name_buttonGT<?php echo $ordergt_sub['id']; ?> " data-fgt="<?php echo $orderTgroupold['id']; ?>" data-fmain="<?php echo $order['id']; ?>">Submit</button>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <script>
                                                                                                                $('body').on('click', 'button[type="button"].epq', function() {
                                                                                                                    var c = $(this).data('fmain');
                                                                                                                    var d = $('#pathmain' + c).data('pathgt');
                                                                                                                    var name_file = $('#Re_file_nameold' + c).val();
                                                                                                                    var last_file = $('#Re_last_nameold' + c).val();

                                                                                                                    $.ajax({
                                                                                                                        url: "rename_filenameGT",
                                                                                                                        type: "POST",
                                                                                                                        data: {
                                                                                                                            id: c,
                                                                                                                            name_file: name_file,
                                                                                                                            last_file: last_file,
                                                                                                                            path: d
                                                                                                                        },
                                                                                                                        success: function(success) {
                                                                                                                            if (success) {
                                                                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                                    button: true,
                                                                                                                                });
                                                                                                                                $("#heregt<?php echo $stores['orderST']; ?>").load(window.location.href + " #heregt<?php echo $stores['orderST']; ?>");
                                                                                                                                $('#filegt_sub' + c).modal('hide');
                                                                                                                            }
                                                                                                                        }
                                                                                                                    });
                                                                                                                });
                                                                                                            </script>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <a href="<?php echo $ordergt_sub['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                        </td>
                                                                                                        <td><?php echo $ordergt_sub['create_at'] ?></td>
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                <?php $cancel_sa = $this->db->get_where('tbl_cancel', ['order_id' => $stores['orderST']])->row_array(); ?>
                                                                <?php if ($cancel_sa == true) : ?>
                                                                    <span class="badge badge-pill badge-danger"><?= $cancel_sa['status_who']; ?></span>
                                                                <?php else : ?>
                                                                    <?php if ($stores['status_approved'] == '5') : ?>
                                                                        <span class="badge badge-pill badge-danger">Admin feedback</span>
                                                                    <?php else : ?>
                                                                        <?php
                                                                        $this->db->where('tbl_feedback.status_c_feedack_team', '0');
                                                                        $this->db->where('tbl_upload_team.order_id', $stores['orderST']);
                                                                        $this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_team.order_id');
                                                                        $teamss = $this->db->get('tbl_upload_team')->row_array();
                                                                        ?>
                                                                        <?php if ($teamss == true) : ?>
                                                                            <span class="badge badge-pill badge-danger">Wating for Admin </span>
                                                                        <?php else : ?>
                                                                            <?php if ($team['teamId'] == '') : ?>
                                                                                <span class="badge badge-pill badge-Info">Waiting for team</span>
                                                                            <?php elseif ($team['status'] == '0') : ?>
                                                                                <span class="badge badge-pill badge-warning">processing</span>
                                                                            <?php elseif ($team['status'] == '1') : ?>
                                                                                <span class="badge badge-pill badge-success">complete</span>
                                                                            <?php elseif ($team['status'] == '2') : ?>
                                                                                <span class="badge badge-pill badge-danger">feedback</span>
                                                                            <?php elseif ($team['status'] == '3') : ?>
                                                                                <span class="badge badge-pill badge-danger">Re feedback</span>
                                                                            <?php elseif ($team['status'] == '4') : ?>
                                                                                <span class="badge badge-pill badge-danger">Not complete</span>
                                                                            <?php elseif ($team['status'] == '5') : ?>
                                                                                <span class="badge badge-pill badge-success">complete refeedback</span>
                                                                            <?php else : ?>
                                                                                -
                                                                            <?php endif; ?>
                                                                        <?php endif ?>
                                                                    <?php endif; ?>

                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <!-- Client Feedback -->
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $stores['orderST'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $stores['orderST'], 'check_status' => 1, 're_feedback' => 1])->result_array();
                                                            foreach ($cf2 as $key => $cf2) {
                                                                $c += 1;
                                                            }
                                                            ?>
                                                            <?php if ($cf2 == true) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback (<?= $c; ?>)</span>
                                                            <?php elseif ($cf == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback (<?= $z; ?>)</span>
                                                            <?php elseif ($stores['status_approved'] == 3) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback</span>
                                                            <?php elseif ($stores['status_approved'] == 4) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Admin Feedback  -->
                                                        <td>
                                                            <?php
                                                            $xs  = 0;
                                                            $af = $this->db->get_where('tbl_feedback', ['order_id' => $stores['orderST'], 'check_status' => 0])->result_array();
                                                            foreach ($af as $key => $af) {
                                                                $xs += 1;
                                                            }
                                                            ?>
                                                            <?php if ($af == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Admin Feedback (<?= $xs; ?>) </span>
                                                                <span data-toggle="modal" data-target="#filenotefeedback<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="filenotefeedback<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Admin Feedback note </h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <table class="table zero-configuration">
                                                                                    <thead>

                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th>name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php $ai = 1;
                                                                                        $feedbackde = $this->db->get_where('tbl_feedback', ['order_id' => $stores['orderST'], 'check_status' => 0])->result_array();
                                                                                        ?>

                                                                                        <?php foreach ($feedbackde as $areed) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $areed['order_id'] ?></td>
                                                                                                <td>Feedback admin (<?php echo $ai++; ?>)</td>
                                                                                                <td>

                                                                                                    <i data-toggle="modal" data-target="#detailfeedback<?php echo $areed['id']; ?>" class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i>
                                                                                                    <div class="modal fade" id="detailfeedback<?php echo $areed['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Admin Feedback Detail </h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <p><?php echo $areed['feedback_detail']; ?></p>
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </td>
                                                                                                <td><?php echo $areed['create_at'] ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Tool -->
                                                        <td>


                                                            <?php if ($stores['status_delivery'] == '1') : ?>

                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#exampleModalu<?php echo $stores['orderST']; ?>"><i class="feather icon-navigation"></i></button>
                                                            <?php endif; ?>

                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['orderST']])->result_array(); ?>

                                                            <div class="modal fade" id="exampleModalu<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delivery File</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="sendEmail_delivery_pay_st" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $stores['orderST']; ?>">
                                                                                <input type="hidden" name="dm_id[]" value="<?php echo $stores['id_document']; ?>">

                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p>
                                                                                            <b>
                                                                                                <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                            </b>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Rewrite</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>Create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $keys => $dm_c11) { ?>

                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <label class="container">
                                                                                                                <input type="checkbox" class="checkmark" id="delivery<?php echo $dm_c11['id']; ?>" name="order_id[]" value="<?php echo $dm_c11['id'] ?>" onclick="numCheck<?php echo $dm_c11['id']; ?>();">
                                                                                                                <span class="checkmark"></span>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['comandnocom'] == '4') : ?>
                                                                                                                <div class="badge badge-primary">Rewrite</div>
                                                                                                            <?php else : ?>
                                                                                                                -
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $dm_c11['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $dm_c11['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $dm_c11['create_at'] ?></td>


                                                                                                    </tr>
                                                                                                    <script>
                                                                                                        function numCheck<?php echo $dm_c11['id'] . '-' . $dm_c11['store_id']; ?>() {
                                                                                                            var checkBox = document.getElementById("delivery<?php echo $dm_c11['id'] . '-' . $dm_c11['store_id']; ?>");
                                                                                                            console.log(checkBox.checked)
                                                                                                        }
                                                                                                    </script>
                                                                                                <?php }
                                                                                                ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?>

                                                                                <hr>

                                                                                <h3>
                                                                                    <p>Team file</p>
                                                                                </h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['order_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>

                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>Create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss_team as $keys => $orderss_team) { ?>
                                                                                            <tr>
                                                                                                <td><label class="container">
                                                                                                        <input type="checkbox" class="checkmark" id="Team_ff" name="order_team[]" value="<?php echo $orderss_team['id'] ?>">
                                                                                                        <span class="checkmark"></span>
                                                                                                    </label>
                                                                                                </td>

                                                                                                <td><?php echo $orderss_team['order_id'] ?></td>
                                                                                                <td><?php echo $orderss_team['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss_team['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss_team['create_at'] ?></td>

                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php if ($stores['status_delivery'] == 1) : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#agin<?php echo $stores['orderST']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <?php else : ?>
                                                                <?php if (empty($stores['id_document'])) : ?>

                                                                <?php else : ?>
                                                                    <button type="button" data-toggle="modal" data-target="#dropW<?php echo $stores['orderST']; ?>" class="btn btn-icon btn-primary "><i class="feather icon-download-cloud"></i></button>
                                                                <?php endif; ?>

                                                                <?php if ($stores['status_informal'] == 1) : ?>
                                                                    <button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#infor<?php echo $stores['orderST']; ?>"><i class="feather icon-log-out"></i></button>
                                                                    <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#send<?php echo $stores['orderST']; ?>"><i class="feather icon-navigation"></i> </button>
                                                                <?php else : ?>
                                                                    <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#informal<?php echo $stores['orderST']; ?>"><i class="feather icon-users"></i></button>
                                                                <?php endif; ?>
                                                                <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $stores['orderST']; ?>"><i class="feather icon-delete"></i></button>
                                                            <?php endif; ?>

                                                            <div class="modal fade" id="agin<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Send (<?php echo $stores['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_t3_other" class="dropzone dropzone-area" id="dropzoneother<?php echo $stores['orderST']; ?>">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                    <input type="hidden" name="order" value="<?php echo $stores['orderST']; ?>">
                                                                                    <input type="hidden" name="teamId" value="<?php echo $stores['teamId']; ?>">
                                                                                </form>
                                                                            </div>
                                                                            <br>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">Details </label>
                                                                                <textarea name="textarea" id="" class="form-control" rows="3"></textarea>
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="other<?php echo $stores['orderST']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone5<?php echo $stores['orderST']; ?> = new Dropzone("#dropzoneother<?php echo $stores['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("other<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone5<?php echo $stores['orderST']; ?>.files == 0) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        myDropzone5<?php echo $stores['orderST']; ?>.processQueue();
                                                                        myDropzone5<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: false,
                                                                            });
                                                                            setTimeout(function() {
                                                                                location.href = "Satisfied"
                                                                            }, 1000);
                                                                        });
                                                                    }
                                                                });
                                                            </script>


                                                            <div class="modal fade" id="send<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delivery File</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="sendEmail_delivery_teamother" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $stores['orderST']; ?>">
                                                                                <input type="hidden" name="dm_id[]" value="<?php echo $stores['id_document']; ?>">

                                                                                <hr>

                                                                                <h3>
                                                                                    <p>Team file</p>
                                                                                </h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['orderST']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>

                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss_team as $keys => $orderss_team) { ?>
                                                                                            <tr>
                                                                                                <td><label class="container">
                                                                                                        <input type="checkbox" class="checkmark" id="Team_ff" name="order_team[]" value="<?php echo $orderss_team['id'] ?>">
                                                                                                        <span class="checkmark"></span>
                                                                                                    </label>
                                                                                                </td>

                                                                                                <td><?php echo $orderss_team['order_id'] ?></td>
                                                                                                <td><?php echo $orderss_team['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss_team['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss_team['create_at'] ?></td>

                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade" id="exampleModallCenterc<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <!-- <form action="delete_order_st" method="POST"> -->
                                                                <input type="hidden" name="order_id" value="<?php echo $stores['orderST']; ?>">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $stores['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body row">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="cancel_dropzone" class="dropzone dropzone-area" id="maindropzonecan<?php echo $stores['orderST']; ?>">
                                                                                    <input type="hidden" id="DM2<?php echo $stores['orderST']; ?>" class="form-control " name="DM" value="<?php echo $stores['id_document'] ?>">

                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Note Cancel</label>
                                                                                    <textarea type="text" class="form-control" name="note" value="" id="note_cancel" rows="10" placeholder="Enter note" required>เอการของคุณโดน Cancel ขออภัยในความไม่สะดวก</textarea>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">

                                                                            <div class="add-data-btn mr-1">
                                                                                <button type="submit" id="uploadsfilecan<?php echo $stores['orderST']; ?>" class="btn btn-primary">submit</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- </form> -->
                                                            </div>
                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone22<?php echo $stores['orderST']; ?> = new Dropzone("#maindropzonecan<?php echo $stores['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfilecan<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                    var note_cancel = $('#note_cancel').val();
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone22<?php echo $stores['orderST']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    $.ajax({
                                                                        url: 'delete_order_st',
                                                                        method: "POST",
                                                                        data: {
                                                                            note_cancel: note_cancel,
                                                                            order_id: '<?php echo $stores['orderST']; ?>'
                                                                        },
                                                                        success: function(getData) {

                                                                            myDropzone22<?php echo $stores['orderST']; ?>.processQueue();
                                                                            myDropzone22<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: false,
                                                                                });
                                                                                setTimeout(function() {
                                                                                    location.href = "Satisfied"
                                                                                }, 1000);
                                                                            });
                                                                        }
                                                                    });

                                                                });
                                                            </script>

                                                            <div class="modal fade" id="informal<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="add_team_informal" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $stores['orderST']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exp">Informal team (<?php echo $stores['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row">
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="name">Name</label>
                                                                                        <input type="text" class="form-control" name="name" value="" required>
                                                                                    </div>
                                                                                </div>

                                                                                <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Position</label>
                                                                                        <select name="position" class="form-control" required>
                                                                                            <option selected disabled> ---- Select ---- </option>

                                                                                            <?php foreach ($positionX as $positionX) { ?>
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stores['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="Wage">Wage</label>
                                                                                        <input type="text" class="form-control" name="Wage" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-btn mr-1">
                                                                                    <button type="submit" class="btn btn-primary">submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <div class="modal fade" id="infor<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Dropfile (<?php echo $stores['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_t3_other" class="dropzone dropzone-area" id="dropzoneother<?php echo $stores['orderST']; ?>">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                    <input type="hidden" name="order" value="<?php echo $stores['orderST']; ?>">
                                                                                    <input type="hidden" name="teamId" value="<?php echo $stores['teamId']; ?>">
                                                                                </form>
                                                                            </div>


                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="other<?php echo $stores['orderST']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone5<?php echo $stores['orderST']; ?> = new Dropzone("#dropzoneother<?php echo $stores['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("other<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone5<?php echo $stores['orderST']; ?>.files == 0) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        myDropzone5<?php echo $stores['orderST']; ?>.processQueue();
                                                                        myDropzone5<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: false,
                                                                            });
                                                                            setTimeout(function() {
                                                                                location.href = "Satisfied"
                                                                            }, 1000);
                                                                        });
                                                                    }
                                                                });
                                                            </script>

                                                            <div class="modal fade" id="dropW<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Drop Document (<?php echo $stores['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_store_book" class="dropzone dropzone-area" id="maindropzone<?php echo $stores['orderST']; ?>">
                                                                                    <input type="hidden" id="DM2<?php echo $stores['orderST']; ?>" class="form-control " name="DM" value="<?php echo $stores['id_document'] ?>">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <br>

                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for=""> DM </label>
                                                                                <?php $book1 = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['orderST']])->result_array(); ?>
                                                                                <select class="form-control" name="DM" id="DM1<?php echo $stores['orderST']; ?>">
                                                                                    <?php foreach ($book1 as $key => $book1) { ?>
                                                                                        <option value="<?php echo $book1['id_document'] ?>"><?php echo $book1['id_document'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="uploadsfile<?php echo $stores['orderST']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                $("#DM1<?php echo $stores['orderST']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $("#DM2<?php echo $stores['orderST']; ?>").val(value);
                                                                }).change();
                                                            </script>
                                                            <script>
                                                                var x = document.getElementById("DM1<?php echo $stores['orderST']; ?>").value;
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $stores['orderST']; ?> = new Dropzone("#maindropzone<?php echo $stores['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfile<?php echo $stores['orderST']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone<?php echo $stores['orderST']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }

                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        data: {
                                                                            order: '<?php echo $stores['orderST']; ?>'
                                                                        },
                                                                        url: 'bookmark_drop',
                                                                        success: function(data) {
                                                                            myDropzone<?php echo $stores['orderST']; ?>.processQueue();
                                                                            myDropzone<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: false,
                                                                                });
                                                                                setTimeout(function() {
                                                                                    location.href = "Satisfied"
                                                                                }, 1000);
                                                                            });
                                                                        }
                                                                    });


                                                                });
                                                            </script>

                                                        </td>
                                                    </tr>


                                                    <div class="modal fade" id="exampleModal<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">check Order</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <iframe src="<?php echo $stores['path_store']; ?>" width="100%" height="500px"></iframe>
                                                                        <div class="data-items pb-3">
                                                                            <div class="data-fields px-2 mt-3">
                                                                                <div class="row">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2"></div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <script>
                                                        $(".dateread<?php echo  $stores['orderST']; ?>").change(function() {
                                                            var value = $(this).val();
                                                            $(".dr<?php echo  $stores['orderST']; ?>").val(value);
                                                        }).change();
                                                    </script>



                                                <?php  } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->



        </div>
    </div>
</div>
<!-- END: Content-->

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');

        if ($('.ckeck' + o).is(":checked")) {
            $("#teambox" + o).fadeIn("slow");
            $("#team" + o).prop('required', true);
            $("#wage" + o).prop('required', true);
            $("#position" + o).prop('required', true);
        } else {
            $("#teambox" + o).fadeOut("slow");
            $("#team" + o).prop('required', false);
            $("#wage" + o).prop('required', false);
            $("#position" + o).prop('required', false);
        }

        if ($('.ckeckdeduug' + o).is(":checked")) {
            $(".deductTM" + o).fadeIn("slow");
            $("#team" + o).prop('required', true);
            $("#wage" + o).prop('required', true);
            $("#position" + o).prop('required', true);
        } else {
            $(".deductTM" + o).fadeOut("slow");
            $("#team" + o).prop('required', false);
            $("#wage" + o).prop('required', false);
            $("#position" + o).prop('required', false);
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('change', '#datenow', function() {
            var date = $(this).data('datenow');
            $.ajax({
                type: 'POST',
                data: {
                    date: $(this).val(),
                    order: date
                },
                url: 'edit_date_required_All',
                success: function(data) {
                    toastr.info('Success', 'Save to Date Required.');
                }
            });
            return false;
        });
    });
</script>
<script>
    var links = [];

    function linkAll(data) {
        data.forEach(element => {
            links.push(element.path);
        });
    }

    function downloadAll(urls, orderST) {
        $.ajax({
            type: 'POST',
            data: {
                orderST: orderST,

            },
            url: 'download_all_file_satisfied',
            success: function(data) {
                var result = JSON.parse(data);
                linkAll(result);
                console.log(result);

                links.forEach(value_arr => {
                    var a = document.createElement('A');
                    a.href = value_arr;
                    a.download = value_arr.substr(value_arr.lastIndexOf('/') + 1);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                });

                links = [];
            }
        });

    }

    var links_gt = [];

    function linkAll_gt(data) {
        data.forEach(element => {
            links_gt.push(element.path_GT);
        });

    }

    function downloadAll_gt(urls, orderST) {
        $.ajax({
            type: 'POST',
            data: {
                orderST: orderST,

            },
            url: 'download_all_file_satisfied_gt',
            success: function(data) {
                var result = JSON.parse(data);
                linkAll_gt(result);
                console.log(links_gt);

                links_gt.forEach(value_arr => {
                    var a = document.createElement('A');
                    a.href = value_arr;
                    a.download = value_arr.substr(value_arr.lastIndexOf('/') + 1);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                });

                links_gt = [];
            }
        });

    }
</script>