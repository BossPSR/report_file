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
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Country</th>
                                                    <th>Organi <br>
                                                        zation</th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>T3 File</th>
                                                    <th>Create Date</th>
                                                    <th>Date required</th>
                                                    <th>note</th>
                                                    <th>Price</th>
                                                    <th style="width: 240px;">info</th>
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th style="width: 85px;">Status T3</th>
                                                    <th style="width: 11%;">Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_main as $id => $stores) {
                                                ?>

                                                    <tr style="background: <?php echo $stores['status_informal'] == 1 ? '#ececec' : ''; ?>">
                                                        <td><?php echo $stores['orderST']; ?></td>
                                                        <td><?php echo $stores['userOR']; ?></td>
                                                        <td>
                                                            <?php echo $stores['countryName'] == '' ? '-' : $stores['countryName']; ?>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-pill badge-primary mr-1 mb-1" style="font-weight: 900;">
                                                                <?php echo $stores['organization'] == '' ? '-' : $stores['organization']; ?>
                                                            </div>

                                                        </td>

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
                                                                            <div style="text-align:right;">
                                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#up_main_file<?php echo $stores['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade text-left" id="up_main_file<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header bg-primary">
                                                                                            <h4 class="modal-title" id="myModalLabel1">Main File</h4>
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
                                                                                            <td><?php echo $order['create_at'] ?></td>
                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                </tbody>
                                                                            </table>
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
                                                            <?php if (!empty($orderGT||  $more_file_gt)) : ?>
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
                                                                                <div style="text-align:right;">
                                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#up_gt_file<?php echo $stores['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
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

                                                                                                <td><?php echo $orderGT['order_id'] ?></td>
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

                                                                                                <td><?php echo $more_file_gt['order_id'] ?> (MF)</td>
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
                                                                                                                    <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_nameGT<?php echo $orderGT['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_nameGT<?php echo $orderGT['id']; ?>" class="form-control">
                                                                                                                    <input type="hidden" id="path<?php echo $more_file_gt['id']; ?>" data-pathgt="<?php echo $orderGT['path_GT']; ?>" class="form-control">
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-primary ex" id="re_file_name_buttonGT<?php echo $orderGT['id']; ?> " data-fgt="<?php echo $orderGT['id']; ?>">Submit</button>
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
                                                        <td>
                                                            <?php $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['orderST']])->result_array(); ?>

                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalT3<?php echo $stores['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalT3<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
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
                                                                                        <?php foreach ($orderT as $keys => $orderT) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $orderT['order_id'] ?></td>
                                                                                                <td><?php echo $orderT['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderT['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderT['create_at'] ?></td>


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

                                                        <td><?php echo $stores['createST']; ?></td>
                                                        <td>
                                                            <?php echo $stores['dateREST']; ?>

                                                            <!-- <?php if ($stores['status_delivery'] == '1') : ?> -->
                                                            <!-- <?php else : ?>
                                                                <input type="date" class="form-control  dateread<?php echo $stores['orderST']; ?>" name="date_required" id="datenow" data-datenow="<?php echo $stores['orderST']; ?>" value="<?php echo $stores['dateREST']; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                            <?php endif; ?> -->

                                                        </td>

                                                        <?php if ($stores['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $stores['price_file']; ?></td>
                                                        <?php endif; ?>

                                                        <td>
                                                            <?php if ($stores['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stores['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $stores['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stores['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>
                                                            <br>
                                                            <?php if ($stores['teamId'] == '' && $stores['wage'] == '' && $stores['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stores['orderST']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="exampleModalwage<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_Satisfied" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

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
                                                                                        <label for="Team">Team ID</label>
                                                                                        <select class="select2 form-control" name="teamid" required>
                                                                                            <option disabled selected> -- Select Team -- </option>
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

                                                                                <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Date</label>
                                                                                        <input type="date" class="form-control  <?php echo $stores['orderST']; ?>" name="date_required" value="<?php echo $stores['dateREST']; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">note</label>
                                                                                        <textarea name="note_new" id="" rows="4" class="form-control"></textarea>
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

                                                                                <div class="col-12 mb-2">
                                                                                    <hr>
                                                                                    <label for="" style="font-size: 14px;font-weight: 500;">Select Team file (Choose files for other teams)</label>
                                                                                </div>

                                                                                <div class="col-xl-3 col-md-3 col-sm-6 mb-1">
                                                                                    <div class="form-group">
                                                                                        <fieldset>
                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                <input type="checkbox" class="" data-order="<?php echo $stores['orderST']; ?>">
                                                                                                <span class="vs-checkbox">
                                                                                                    <span class="vs-checkbox--check">
                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="">File TM1</span>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 col-md-3 col-sm-6 col-6  mb-1">
                                                                                    <div class="form-group">
                                                                                        <fieldset>
                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                <input type="checkbox" class="" data-order="<?php echo $stores['orderST']; ?>">
                                                                                                <span class="vs-checkbox">
                                                                                                    <span class="vs-checkbox--check">
                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="">File TM2</span>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td style="width: 1%;">
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
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['status_book'] == '1' && $stores['status_cp'] == 'complete' && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($stores['status_book'] == '1' && $stores['status_cp'] == 'notcomplete' && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Not complete</span>
                                                            <?php elseif ($stores['status_book'] == '1' && $stores['status_cp'] == 'rewrite') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($stores['status_book'] == '2'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($stores['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $stores['orderST']])->row_array(); ?>
                                                        <td>
                                                            <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stores['orderST']; ?>" type="button" class="btn btn-icon btn-success" style="    font-size: 14px;">Upload T3</button>
                                                            <?php else : ?>
                                                                <?php if ($team['teamId'] == '') : ?>
                                                                    <span class="badge badge-pill badge-Info">Waiting for team</span>
                                                                <?php elseif ($team['status'] == 0 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-warning">processing</span>
                                                                <?php elseif ($team['status'] == 1 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-success">complete</span>
                                                                <?php elseif ($team['status'] == 2 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-danger">feedback</span>
                                                                <?php endif ?>
                                                            <?php endif ?>

                                                        </td>
                                                        <td>
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

                                                                                <!-- <?php $dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['orderST']])->result_array(); ?>
                                                                                <?php foreach ($dm_c as $key => $dm_c) { ?>
                                                                                    <?php $dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $dm_c['id_document']])->row_array(); ?>



                                                                                    <?php if (!empty($dm_c['id_document'])) : ?>
                                                                                        <p>
                                                                                            <b>
                                                                                                <h3><?php echo $dm_c['id_document']; ?></h3>
                                                                                            </b>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store Id</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <label class="container">
                                                                                                            <input type="checkbox" class="checkmark" id="delivery<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>" name="order_id[]" value="<?php echo $orderss['id'] ?>" onclick="numCheck<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>();">
                                                                                                            <span class="checkmark"></span>
                                                                                                        </label>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                            -
                                                                                                        <?php else : ?>
                                                                                                            <div class="badge badge-primary">Relive</div>
                                                                                                        <?php endif ?>
                                                                                                    </td>
                                                                                                    <td><?php echo $orderss['store_id'] ?></td>
                                                                                                    <td><?php echo $orderss['file_name'] ?></td>
                                                                                                    <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $orderss['create_at'] ?></td>
                                                                                                </tr>
                                                                                                <script>
                                                                                                    function numCheck<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>() {
                                                                                                        var checkBox = document.getElementById("delivery<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>");
                                                                                                        console.log(checkBox.checked)
                                                                                                    }
                                                                                                </script>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?> -->

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
                                                                <form action="delete_order_st" method="POST">
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
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">Note Cancel</label>
                                                                                        <textarea type="text" class="form-control" name="note" value="" rows="10" placeholder="Enter note" required>เอการของคุณโดน Cancel ขออภัยในความไม่สะดวก</textarea>

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
                                                                    myDropzone<?php echo $stores['orderST']; ?>.processQueue();
                                                                    myDropzone<?php echo $stores['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: false,
                                                                        });
                                                                        setTimeout(function() {
                                                                            location.href = "Satisfied"
                                                                        }, 1000);
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

                                                    <div class="modal fade" id="exampleModalUpload<?php echo $stores['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload to team (<?php echo $stores['orderST']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="upload_team_ST" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="order_id" value="<?php echo $stores['orderST']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" min="<?php echo date('Y-m-d'); ?>" class="form-control dr<?php echo $stores['orderST']; ?>" name="Daterequired" value="<?php echo $stores['dateREST']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">position</label>
                                                                                <?php $select_postion = $this->db->get('tbl_item_position')->result_array(); ?>
                                                                                <select name="position" class="form-control" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <?php foreach ($select_postion as $keys => $select_postion) { ?>
                                                                                        <option value="<?php echo $select_postion['id']; ?>"><?php echo $select_postion['name_item']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">wage(10%)</label>

                                                                                <input type="text" class="form-control" name="wage" value="<?php echo $stores['price_file'] * 10 / 100; ?>" placeholder="Enter wage">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeck<?php echo $stores['orderST']; ?>" data-order="<?php echo $stores['orderST']; ?>">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">Add Team</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teambox<?php echo $stores['orderST']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="team<?php echo $stores['orderST']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsM) { ?>
                                                                                        <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note</label>
                                                                                <textarea class="form-control" name="note" rows="5" placeholder="Enter Note"></textarea>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                            <div class="add-data-btn mr-1">
                                                                                <button type="submit" class="btn btn-primary">submit</button>
                                                                            </div>
                                                                        </div>
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