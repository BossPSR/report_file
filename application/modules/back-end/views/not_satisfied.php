<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Not Satisfied</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Not Satisfied
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
                                    <h4 class="card-title">Not Satisfied</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($order_not == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_not as $key => $datata) {
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
                                                    <th>Info</th>
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th>Process</th>
                                                    <th>Client Feedback</th>
                                                    <th>Admin Feedback </th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;

                                                foreach ($order_not as $key => $store) {

                                                ?>

                                                    <tr>
                                                        <!-- order -->
                                                        <td><?php echo $store['orderNOT'] ?></td>

                                                        <td><?php echo $store['video_lang'] == 1 ? 'TH' : 'EN' ; ?></td>

                                                        <!-- userId -->
                                                        <td> <?php echo $store['Username'] == '' ? $store['userId'] : $store['Username']; ?></td>

                                                        <!-- countryName -->
                                                        <td>
                                                            <?php echo $store['countryName'] == '' ? '-' : $store['countryName']; ?>
                                                        </td>

                                                        <td>
                                                            <div class="badge badge-pill badge-primary mr-1 mb-1" style="font-weight: 900;">
                                                                <?php echo $store['organization'] == '' ? '-' : $store['organization']; ?>
                                                            </div>

                                                        </td>

                                                        <td>
                                                            <?php if (empty($stores['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $store['orderNOT']])->result_array(); ?>
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
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#up_main_file<?php echo $store['orderNOT']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade text-left" id="up_main_file<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                                            <form action="Satisfied_add_mainfile" class="dropzone dropzone-area" id="dropzone_upmainfile<?php echo $store['orderNOT']; ?>" method="POST">
                                                                                                <input type="hidden" name="orderST" value="<?php echo $store['orderNOT']; ?>">
                                                                                                <input type="hidden" name="userOR" value="<?php echo $store['userId']; ?>">
                                                                                                <input type="hidden" name="User_St" value="<?php echo $store['Username']; ?>">
                                                                                                <input type="hidden" name="St_email" value="<?php echo $store['email']; ?>">
                                                                                                <input type="hidden" name="price_file" value="<?php echo $store['price_file']; ?>">
                                                                                                <input type="hidden" name="price_dis_order" value="<?php echo $store['price_dis_order']; ?>">
                                                                                                <input type="hidden" name="score_user" value="<?php echo $store['score_user']; ?>">
                                                                                                <input type="hidden" name="dateREST" value="<?php echo $store['dateNOT']; ?>">
                                                                                                <input type="hidden" name="create_times" value="<?php echo date('Y-m-d H:i:s'); ?>">
                                                                                                <input type="hidden" name="status_book" value="<?php echo $store['status_book']; ?>">
                                                                                                <input type="hidden" name="status_admin" value="<?php echo $store['status_admin']; ?>">
                                                                                                <input type="hidden" name="is_check" value="<?php echo $store['is_check']; ?>">
                                                                                                <input type="hidden" name="note_reject" value="<?php echo $store['note_reject']; ?>">
                                                                                                <!-- <input type="hidden" name="is_confirm" value=""> -->
                                                                                                <input type="hidden" name="status_pay" value="<?php echo $store['status_pay']; ?>">
                                                                                                <!-- <input type="hidden" name="select_item" value=""> -->
                                                                                                <input type="hidden" name="status_approved" value="<?php echo $store['status_approved']; ?>">
                                                                                                <input type="hidden" name="status_confirmed_team" value="<?php echo $store['status_confirmed_team']; ?>">
                                                                                                <input type="hidden" name="notify_user" value="<?php echo $store['notify_user']; ?>">
                                                                                                <input type="hidden" name="status_cp" value="<?php echo $store['status_cp']; ?>">
                                                                                                <input type="hidden" name="status_delivery" value="<?php echo $store['status_delivery']; ?>">
                                                                                                <input type="hidden" name="notify_team" value="<?php echo $store['notify_team']; ?>">
                                                                                                <input type="hidden" name="notify_admin" value="<?php echo $store['notify_admin']; ?>">
                                                                                                <input type="hidden" name="click_step" value="<?php echo $store['click_step']; ?>">
                                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-primary" id="up_main_file_save<?php echo $store['orderNOT']; ?>">Upload File</button>
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                        <script>
                                                                                            Dropzone.autoDiscover = false;
                                                                                            var myDropzone115<?php echo $store['orderNOT']; ?> = new Dropzone("#dropzone_upmainfile<?php echo $store['orderNOT']; ?>", {
                                                                                                autoProcessQueue: false,
                                                                                                maxFiles: 5,
                                                                                                addRemoveLinks: true,
                                                                                                parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                            });
                                                                                            document.getElementById("up_main_file_save<?php echo $store['orderNOT']; ?>").addEventListener("click", function() {
                                                                                                // myDropzone.processQueue();
                                                                                                if (myDropzone115<?php echo $store['orderNOT']; ?>.files == 0) {
                                                                                                    swal("Warning!", "Can not be document Empty", "warning", {
                                                                                                        button: true,
                                                                                                    });
                                                                                                } else {

                                                                                                    myDropzone115<?php echo $store['orderNOT']; ?>.processQueue();
                                                                                                    myDropzone115<?php echo $store['orderNOT']; ?>.on("queuecomplete", function(file, res) {
                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                            button: true,
                                                                                                        });
                                                                                                        $("#here<?php echo $store['orderNOT']; ?>").load(window.location.href + " #here<?php echo $store['orderNOT']; ?>");
                                                                                                        $('#up_main_file<?php echo $store['orderNOT']; ?>').modal('hide');
                                                                                                    });
                                                                                                }
                                                                                            });
                                                                                        </script>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <table class="table zero-configuration" id="here<?php echo $store['orderNOT']; ?>">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $store['orderNOT']])->result_array(); ?>
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
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['created_at_buy'] ?></td>


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

                                                        <!-- GT File -->
                                                        <td>
                                                            <?php
                                                            $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                                            $this->db->where('tbl_morefile_GT.order_id', $store['orderNOT']);
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                                            $ordergt = $this->db->get('tbl_morefile_GT')->result_array(); ?>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_morefile_GT');
                                                            $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                                            $this->db->where('tbl_morefile_GT.order_id', $store['orderNOT']);
                                                            $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                                            $more_file_gt_st = $this->db->get()->result_array();
                                                            ?>

                                                            <?php if (!empty($order || $more_file_gt_st)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#up_gt_file<?php echo $store['orderNOT']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                                </div>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade text-left" id="up_gt_file<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                                                <form action="Satisfied_add_gt_file" class="dropzone dropzone-area" id="dropzone_upgtfile<?php echo $store['orderNOT']; ?>" method="POST">
                                                                                                    <input type="hidden" name="orderST" id="orderST" value="<?php echo $store['orderNOT']; ?>">
                                                                                                    <input type="hidden" name="userOR" id="userOR" value="<?php echo $store['userId']; ?>">
                                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-primary" id="up_gt_file_save<?php echo $store['orderNOT']; ?>">Upload File</button>
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            </div>
                                                                                            <script>
                                                                                                Dropzone.autoDiscover = false;
                                                                                                var myDropzone113<?php echo $store['orderNOT']; ?> = new Dropzone("#dropzone_upgtfile<?php echo $store['orderNOT']; ?>", {
                                                                                                    autoProcessQueue: false,
                                                                                                    maxFiles: 5,
                                                                                                    addRemoveLinks: true,
                                                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                                });
                                                                                                document.getElementById("up_gt_file_save<?php echo $store['orderNOT']; ?>").addEventListener("click", function() {
                                                                                                    // myDropzone.processQueue();
                                                                                                    if (myDropzone113<?php echo $store['orderNOT']; ?>.files == 0) {
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
                                                                                                                    myDropzone113<?php echo $store['orderNOT']; ?>.processQueue();
                                                                                                                    myDropzone113<?php echo $store['orderNOT']; ?>.on("queuecomplete", function(file, res) {
                                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                            button: true,
                                                                                                                        });
                                                                                                                        $("#here_gt<?php echo $store['orderNOT']; ?>").load(window.location.href + " #here_gt<?php echo $store['orderNOT']; ?>");
                                                                                                                        $('#up_gt_file<?php echo $store['orderNOT']; ?>').modal('hide');
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
                                                                                <table class="table zero-configuration" id="here_gt<?php echo $store['orderNOT']; ?>">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($ordergt as $keys => $ordergt) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $ordergt['order_id'] ?></td>
                                                                                                <td><?php echo $ordergt['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $ordergt['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $ordergt['create_at'] ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>

                                                                                        <?php foreach ($more_file_gt_st as  $more_file_gt_st) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $more_file_gt_st['order_id'] ?> (MF)</td>
                                                                                                <td><?php echo $more_file_gt_st['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $more_file_gt_st['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $more_file_gt_st['create_at'] ?></td>
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
                                                        <!-- DM File -->
                                                        <td>
                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $store['orderNOT']])->result_array(); ?>
                                                            <?php if (!empty($dm_cc)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalbDM<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalbDM<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $store['orderNOT']])->result_array();
                                                            ?>
                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#teamfile_sub<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="teamfile_sub<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                    <span data-toggle="modal" data-target="#tf3_file<?php echo $orderT['group']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                                                    <div class="modal fade" id="tf3_file<?php echo $orderT['group']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Team File (<?php echo $orderT['name_folder'] ?>)</h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <?php $orderT_sub = $this->db->get_where('tbl_upload_order_team', ['order_id' => $store['orderNOT'], 'group' => $orderT['group']])->result_array(); ?>

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
                                                                                                                            <?php foreach ($orderT_sub as $keys => $orderT_sub) { ?>
                                                                                                                                <tr>
                                                                                                                                    <td><?php echo $orderT_sub['order_id'] ?></td>
                                                                                                                                    <td><?php echo $orderT_sub['file_name'] ?></td>
                                                                                                                                    <td><a href="<?php echo $orderT_sub['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                                    <td><?php echo $orderT_sub['create_at'] ?></td>
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

                                                        <!-- createNOT -->
                                                        <td><?php echo $store['created_at_buy']; ?></td>

                                                        <!-- dateNOT -->
                                                        <td>

                                                            <?php if (date("Y-m-d") >= $store['dateNOT']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                                <button type="button" class="btn btn-icon btn-warning waves-effect waves-light" data-toggle="modal" data-target="#dateagin<?php echo $store['orderNOT']; ?>"><i class="feather icon-rotate-ccw"></i> ส่งเมล์ต่อเวลา </button>
                                                                <div class="modal fade" id="dateagin<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Send date required (<?php echo $store['orderNOT']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="sendEmail_no_new_daterq" method="POST">
                                                                                <input type="hidden" name="order" value="<?php echo $store['orderNOT']; ?>">
                                                                                <input type="hidden" name="userid" value="<?php echo $store['userId']; ?>">
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
                                                                <p id="demo<?php echo $store['orderNOT']; ?>" style="font-size: 18px;font-weight: bold;"></p>


                                                                <script>
                                                                    var datep<?php echo $store['orderNOT']; ?> = "<?= $store['dateNOT']; ?>";

                                                                    // Set the date we're counting down to
                                                                    var countDownDate<?php echo $store['orderNOT']; ?> = new Date(datep<?php echo $store['orderNOT']; ?>);

                                                                    // Update the count down every 1 second
                                                                    var x<?php echo $store['orderNOT']; ?> = setInterval(function() {

                                                                        // Get today's date and time
                                                                        var now<?php echo $store['orderNOT']; ?> = new Date();

                                                                        // Find the distance between now and the count down date
                                                                        var distance<?php echo $store['orderNOT']; ?> = countDownDate<?php echo $store['orderNOT']; ?> - now<?php echo $store['orderNOT']; ?>;

                                                                        // Time calculations for days, hours, minutes and seconds
                                                                        var days<?php echo $store['orderNOT']; ?> = Math.floor(distance<?php echo $store['orderNOT']; ?> / (1000 * 60 * 60 * 24));
                                                                        var hours<?php echo $store['orderNOT']; ?> = Math.floor((distance<?php echo $store['orderNOT']; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                        var minutes<?php echo $store['orderNOT']; ?> = Math.floor((distance<?php echo $store['orderNOT']; ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                        var seconds<?php echo $store['orderNOT']; ?> = Math.floor((distance<?php echo $store['orderNOT']; ?> % (1000 * 60)) / 1000);

                                                                        // Output the result in an element with id="demo"
                                                                        document.getElementById("demo<?php echo $store['orderNOT']; ?>").innerHTML = days<?php echo $store['orderNOT']; ?> + "Day " + hours<?php echo $store['orderNOT']; ?> + "h " +
                                                                            minutes<?php echo $store['orderNOT']; ?> + "m " + seconds<?php echo $store['orderNOT']; ?> + "s ";

                                                                        // If the count down is over, write some text 
                                                                        if (distance<?php echo $store['orderNOT']; ?> < 0) {
                                                                            clearInterval(x<?php echo $store['orderNOT']; ?>);
                                                                            document.getElementById("demo<?php echo $store['orderNOT']; ?>").innerHTML = "หมดเวลา";
                                                                        }
                                                                    }, 1000);
                                                                </script>
                                                            <?php endif; ?>
                                                        </td>


                                                        <!-- price -->
                                                        <?php if ($store['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $store['price_file']; ?></td>
                                                        <?php endif; ?>
                                                        <!-- Note Team -->
                                                        <td>
                                                            <?php if ($store['note_team'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="#" data-toggle="modal" data-target="#note_new<?php echo $store['orderNOT']; ?>"><i class="feather icon-search" style="font-size: 25px;"></i></a>
                                                                <div class="modal fade" id="note_new<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog  modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div> <?= $store['note_team']; ?></div>
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
                                                        <!-- Note Client -->
                                                        <td>
                                                            <?php if ($store['note_user'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="#" data-toggle="modal" data-target="#note_user<?php echo $store['orderNOT']; ?>"><i class="feather icon-search" style="font-size: 25px;"></i></a>
                                                                <div class="modal fade" id="note_user<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div> <?= $store['note_user']; ?> </div>
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


                                                        <!-- teamId / wage -->
                                                        <td>
                                                            <?php if ($store['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $store['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($store['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $store['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($store['wage_thai'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $store['wage_thai']; ?> บาท |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $store['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($store['teamId'] == '' && $store['wage'] == '' && $store['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $store['orderNOT']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_Not_Satisfied" method="POST">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $store['orderNOT']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $store['orderNOT']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 45px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label> <br>
                                                                                        <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                            <option disabled> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>" <?php echo $tsM['IdTeam'] == $store['teamId'] ? 'selected' : ''; ?>><?php echo $tsM['IdTeam']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Position</label>
                                                                                        <select name="position" class="form-control" required>
                                                                                            <option selected> ---- Select ---- </option>

                                                                                            <?php foreach ($positionX as $positionX) { ?>
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $store['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $store['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                $str =  $store['dateNOT'];
                                                                                $datr_re = explode(" ", $str);
                                                                                ?>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Date require</label>
                                                                                        <input type="date" class="form-control" name="date_require" value="<?php echo $datr_re[0]; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Note</label>
                                                                                        <textarea name="note" class="form-control" rows="10"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary w-100" style="font-size: 18px;">Submit</button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1 text-left">
                                                                                    <label style="font-size: 16px;" for="">Team file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php
                                                                                    $this->db->group_by('teamId');
                                                                                    $t3folder = $this->db->get_where('tbl_upload_order_team', ['order_id' => $store['orderNOT']])->result_array();
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

                                                                                                                            <table class="table zero-configuration" id="hereold<?php echo $store['orderNOT']; ?>">
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
                                                                                                                                                                    $("#hereold<?php echo $store['orderNOT']; ?>").load(window.location.href + " #hereold<?php echo $store['orderNOT']; ?>");
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

                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>

                                                        <!-- Delivered -->
                                                        <td>
                                                            <?php if ($store['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Status -->
                                                        <td>
                                                            <?php $admin_stu = $this->db->get_where('tbl_admin', ['adminId' => $store['userId']])->row_array(); ?>
                                                            <?php if ($admin_stu == true) : ?>
                                                                <?php if ($store['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Admin Original </span>
                                                                <?php elseif ($store['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-warning"> Admin Not complete </span>
                                                                <?php elseif ($store['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Admin Rewrite </span>
                                                                <?php elseif ($store['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> Admin No DM </span>
                                                                <?php elseif ($store['status_book'] == '2') : ?>
                                                                    <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                <?php if ($store['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                <?php elseif ($store['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-primary">Not complete</span>
                                                                <?php elseif ($store['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                <?php elseif ($store['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> No DM </span>
                                                                <?php elseif ($store['status_book'] == '2') : ?>
                                                                    <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Status T3-->
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $store['orderNOT']])->row_array(); ?>
                                                        <td>
                                                            <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $store['orderNOT']; ?>" type="button" class="btn btn-icon btn-success" style="font-size: 14px;">Upload T3</button>
                                                            <?php else : ?>
                                                                <?php if ($store['status_approved'] == '5') : ?>
                                                                    <span class="badge badge-pill badge-danger">Admin feedback</span>
                                                                <?php else : ?>
                                                                    <?php
                                                                    $this->db->where('tbl_feedback.status_c_feedack_team', '0');
                                                                    $this->db->where('tbl_upload_team.order_id', $store['orderNOT']);
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
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <!-- Client Feedback -->
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $store['orderNOT'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $store['orderNOT'], 'check_status' => 1, 're_feedback' => 1])->result_array();
                                                            foreach ($cf2 as $key => $cf2) {
                                                                $c += 1;
                                                            }
                                                            ?>
                                                            <?php if ($cf == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback (<?= $z; ?>)</span>
                                                            <?php elseif ($cf2 == true) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback (<?= $c; ?>)</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Admin Feedback  -->
                                                        <td>
                                                            <?php
                                                            $xs  = 0;
                                                            $af = $this->db->get_where('tbl_feedback', ['order_id' =>  $store['orderNOT'], 'check_status' => 0])->result_array();
                                                            foreach ($af as $key => $af) {
                                                                $xs += 1;
                                                            }
                                                            ?>
                                                            <?php if ($af == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Admin Feedback (<?= $xs; ?>) </span>
                                                                <span data-toggle="modal" data-target="#filenotefeedback<?php echo  $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="filenotefeedback<?php echo  $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        $feedbackde = $this->db->get_where('tbl_feedback', ['order_id' =>  $store['orderNOT'], 'check_status' => 0])->result_array();
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
                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#informal<?php echo $store['orderNOT']; ?>"><i class="feather icon-users"></i></button>
                                                            <div class="modal fade" id="informal<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="add_team_informal_not" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $store['orderNOT']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exp">Informal team (<?php echo $store['orderNOT']; ?>)</h5>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $store['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
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

                                                            <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $store['orderNOT']; ?>"><i class="feather icon-delete"></i></button>
                                                            <div class="modal fade" id="exampleModallCenterc<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <!-- <form action="delete_order_notst" method="POST"> -->
                                                                <input type="hidden" name="order_id" value="<?php echo $store['orderNOT']; ?>">
                                                                <div class="modal-dialog " role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $store['orderNOT']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body row">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="cancel_dropzone_not" class="dropzone dropzone-area" id="maindropzonecan<?php echo $store['orderNOT']; ?>">
                                                                                    <!-- <input type="hidden" id="DM2<?php echo $store['orderNOT']; ?>" class="form-control " name="DM" value="<?php echo $stores['id_document'] ?>"> -->

                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Note Cancel</label>
                                                                                    <textarea type="text" class="form-control" name="note" value="" rows="10" placeholder="Enter note" required>เอการของคุณโดน Cancel ขออภัยในความไม่สะดวก</textarea>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                            <div class="add-data-btn mr-1">
                                                                                <button type="submit" id="uploadsfilecan<?php echo $store['orderNOT']; ?>" class="btn btn-primary">submit</button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- </form> -->
                                                            </div>
                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone22<?php echo $store['orderNOT']; ?> = new Dropzone("#maindropzonecan<?php echo $store['orderNOT']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfilecan<?php echo $store['orderNOT']; ?>").addEventListener("click", function() {
                                                                    var note_cancel = $('#note_cancel').val();
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone22<?php echo $store['orderNOT']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    $.ajax({
                                                                        url: 'delete_order_notst',
                                                                        method: "POST",
                                                                        data: {
                                                                            note_cancel: note_cancel,
                                                                            order_id: '<?php echo $store['orderNOT']; ?>'
                                                                        },
                                                                        success: function(getData) {

                                                                            myDropzone22<?php echo $store['orderNOT']; ?>.processQueue();
                                                                            myDropzone22<?php echo $store['orderNOT']; ?>.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: false,
                                                                                });
                                                                                setTimeout(function() {
                                                                                    location.href = "Not_Satisfied"
                                                                                }, 1000);
                                                                            });
                                                                        }
                                                                    });

                                                                });
                                                            </script>
                                                        </td>


                                                    </tr>

                                                    <div class="modal fade" id="exampleModalUpload<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload To Team (<?php echo $store['orderNOT']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="upload_team" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="order_id" value="<?php echo $store['orderNOT']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                        $exp01 = explode(" ", $store['dateNOT']);
                                                                        ?>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" value="<?php echo $exp01[0]; ?>" placeholder="Enter price" required>
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
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">wage(10%)</label>

                                                                                <input type="text" class="form-control" name="wage" value="<?php echo $store['price_file'] * 10 / 100; ?>" placeholder="Enter wage">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">wage thai</label>

                                                                                <input type="text" class="form-control" name="wagethai" value="" placeholder="Enter wage" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeck<?php echo $store['order_id']; ?>" data-order="<?php echo $store['order_id']; ?>">
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
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teambox<?php echo $store['order_id']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="team<?php echo $store['order_id']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsM) { ?>
                                                                                        <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note Client</label>
                                                                                <textarea class="form-control" name="note" rows="5" placeholder="Enter Note"><?php echo $store['note_user']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note Team</label>
                                                                                <textarea class="form-control" name="note_t" rows="5" placeholder="Enter Note"><?php echo $store['note_team']; ?></textarea>
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