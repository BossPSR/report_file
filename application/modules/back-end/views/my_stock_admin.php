<!-- BEGIN: Content-->
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">My StockAdmin</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">My StockAdmin
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">
            <div class="row">

            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-header">
                                <div class="col-9">
                                    <h4 class="card-title">My StockAdmin</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($stock == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($stock as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                                <div class="col-2 text-right">
                                    <a href="Add_my_stock_admin"><button type="button" class="btn btn-primary mr-1 mb-1">+ Add Stock Admin</button></a>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration" style="white-space: nowrap;">
                                            <thead>
                                                <tr>
                                                    <th>Order id</th>
                                                    <th>Organization</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th>DM</th>
                                                    <th>DM File</th>
                                                    <th>Main file</th>
                                                    <th>GT File</th>
                                                    <th>T3 File</th>
                                                    <th>Price</th>
                                                    <th>Note Client</th>
                                                    <th>Note Team</th>
                                                    <th>Date Confirm</th>
                                                    <th>Date Required</th>
                                                    <th>info</th>
                                                    <th>feedback</th>
                                                    <th>Process</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($stock as $stock) { ?>
                                                    <tr>
                                                        <!-- Order id -->
                                                        <td><?php echo $stock['orderST'] ?></td>

                                                        <!-- Organization -->
                                                        <td>
                                                            <?php if ($stock['organization'] == "") : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php echo $stock['organization'] ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Email -->
                                                        <td>
                                                            <?php if (!empty($stock['email'])) : ?>
                                                                <?php echo $stock['email'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Name -->
                                                        <td>
                                                            <?php if (!empty($stock['Username'])) : ?>
                                                                <?php echo $stock['Username'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- DM -->
                                                        <td>
                                                            <?php $book_dm = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stock['orderST']])->result_array(); ?>
                                                            <?php foreach ($book_dm as $key => $book_dm) { ?>
                                                                <?php if ($book_dm['id_document'] != '') : ?>
                                                                    <span class="badge badge-primary"><?php echo $book_dm['id_document']; ?></span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php } ?>
                                                        </td>

                                                        <!-- DM file -->
                                                        <td>
                                                            <?php if (!empty($book_dm['id_document'])) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalbDM<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalbDM<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">DM File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stock['orderST']])->result_array(); ?>
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
                                                                                                    <th>Relive</th>
                                                                                                    <!-- <th>Store Id</th> -->
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

                                                        <!-- Main File -->
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $stock['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $stock['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#up_main_file<?php echo $stock['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade text-left" id="up_main_file<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                                            <form action="my_stock_up_mainfile" class="dropzone dropzone-area" id="dropzone_upmainfile<?php echo $stock['orderST']; ?>" method="POST">
                                                                                                <input type="hidden" name="orderST" value="<?php echo $stock['orderST']; ?>">
                                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-primary" id="up_main_file_save<?php echo $stock['orderST']; ?>">Upload File</button>
                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                        <script>
                                                                                            Dropzone.autoDiscover = false;
                                                                                            var myDropzone115<?php echo $stock['orderST']; ?> = new Dropzone("#dropzone_upmainfile<?php echo $stock['orderST']; ?>", {
                                                                                                autoProcessQueue: false,
                                                                                                maxFiles: 5,
                                                                                                addRemoveLinks: true,
                                                                                                parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                            });
                                                                                            document.getElementById("up_main_file_save<?php echo $stock['orderST']; ?>").addEventListener("click", function() {
                                                                                                // myDropzone.processQueue();
                                                                                                if (myDropzone115<?php echo $stock['orderST']; ?>.files == 0) {
                                                                                                    swal("Warning!", "Can not be document Empty", "warning", {
                                                                                                        button: true,
                                                                                                    });
                                                                                                } else {

                                                                                                    myDropzone115<?php echo $stock['orderST']; ?>.processQueue();
                                                                                                    myDropzone115<?php echo $stock['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                            button: true,
                                                                                                        });
                                                                                                        $("#here<?php echo $stock['orderST']; ?>").load(window.location.href + " #here<?php echo $stock['orderST']; ?>");
                                                                                                        $('#up_main_file<?php echo $stock['orderST']; ?>').modal('hide');
                                                                                                    });
                                                                                                }
                                                                                            });
                                                                                        </script>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <table class="table zero-configuration" id="here<?php echo $stock['orderST']; ?>">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['orderST']])->result_array(); ?>
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
                                                                                            <td><?php echo $order['create_at'] ?></td>


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
                                                            $this->db->where('tbl_morefile_GT.order_id', $stock['orderST']);
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                                            $orderGT = $this->db->get('tbl_morefile_GT')->result_array(); ?>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_morefile_GT');
                                                            $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                                            $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                                            $this->db->where('tbl_morefile_GT.order_id', $stock['orderST']);

                                                            $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                                            $more_file_gt = $this->db->get()->result_array();
                                                            ?>
                                                            <?php if (!empty($orderGT ||  $more_file_gt)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#up_gt_file<?php echo $stock['orderST']; ?>"><i class="fa fa-cloud-upload"></i> Drop file</button>
                                                                                </div>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade text-left" id="up_gt_file<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                                                <form action="my_stock_up_gtfile" class="dropzone dropzone-area" id="dropzone_upgtfile<?php echo $stock['orderST']; ?>" method="POST">
                                                                                                    <input type="hidden" name="orderST" id="orderST" value="<?php echo $stock['orderST']; ?>">
                                                                                                    <input type="hidden" name="userOR" id="userOR" value="<?php echo $stock['userOR']; ?>">
                                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-primary" id="up_gt_file_save<?php echo $stock['orderST']; ?>">Upload File</button>
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                            </div>
                                                                                            <script>
                                                                                                Dropzone.autoDiscover = false;
                                                                                                var myDropzone113<?php echo $stock['orderST']; ?> = new Dropzone("#dropzone_upgtfile<?php echo $stock['orderST']; ?>", {
                                                                                                    autoProcessQueue: false,
                                                                                                    maxFiles: 5,
                                                                                                    addRemoveLinks: true,
                                                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                                });
                                                                                                document.getElementById("up_gt_file_save<?php echo $stock['orderST']; ?>").addEventListener("click", function() {
                                                                                                    // myDropzone.processQueue();
                                                                                                    if (myDropzone113<?php echo $stock['orderST']; ?>.files == 0) {
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
                                                                                                                    myDropzone113<?php echo $stock['orderST']; ?>.processQueue();
                                                                                                                    myDropzone113<?php echo $stock['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                            button: true,
                                                                                                                        });
                                                                                                                        $("#here_gt<?php echo $stock['orderST']; ?>").load(window.location.href + " #here_gt<?php echo $stock['orderST']; ?>");
                                                                                                                        $('#up_gt_file<?php echo $stock['orderST']; ?>').modal('hide');
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
                                                                                <table class="table zero-configuration" id="here_gt<?php echo $stock['orderST']; ?>">
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
                                                                                $("#here_gt<?php echo $stock['orderST']; ?>").load(window.location.href + " #here_gt<?php echo $stock['orderST']; ?>");
                                                                                $('#dmsGT' + a).modal('hide');
                                                                            }
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                        </td>
                                                        <!-- Team File -->
                                                        <td>
                                                            <?php
                                                            $this->db->join('tbl_folder', 'tbl_folder.id = tbl_upload_order_team.group', 'left');
                                                            $this->db->group_by('group');
                                                            $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stock['orderST']])->result_array();
                                                            ?>
                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalT3<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalT3<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Team File (<?php echo $orderT['name_folder'] ?>)</h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <?php $orderT_sub = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stock['orderST'], 'group' => $orderT['group']])->result_array(); ?>

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

                                                        <!-- price -->
                                                        <td>
                                                            <?php if ($stock['price_file'] != '') : ?>
                                                                <?php echo $stock['price_file'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Note Client -->
                                                        <td>
                                                            <?php if (!empty($stock['note_user'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note<?php echo $stock['orderST']; ?>"><i class="feather icon-search"></i></a>
                                                                <div class="modal fade" id="note<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note Client (<?php echo $stock['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="my_stock_admin_note" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $stock['orderST']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail" id="" rows="6" class="form-control"><?= $stock['note_user']; ?> </textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>

                                                        <!-- Note Team -->
                                                        <td>
                                                            <?php if (!empty($stock['note'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note_t<?php echo $stock['orderST']; ?>"><i class="feather icon-search"></i></a>
                                                                <div class="modal fade" id="note_t<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note Team (<?php echo $stock['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="my_stock_admin_note_team" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $stock['orderST']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail_team" id="" rows="6" class="form-control"><?= $stock['note']; ?> </textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($stock['update_confirm'] != '') : ?>
                                                                <?php echo $stock['update_confirm'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php if (date("Y-m-d H:i:s") >= $stock['dateREST']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d H:i:s', strtotime($stock['dateREST'])); ?>
                                                                <!-- <?= $stock['dateREST']; ?> -->
                                                                <div id="clock-b<?php echo $stock['orderST']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $stock['orderST']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
                                                                            var $this = $(this).html(event.strftime('' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%D</span> Day%!d</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%H</span> Hours</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%M</span> Min</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%S</span> Sec</div>'));
                                                                        });

                                                                    });
                                                                </script>
                                                            <?php endif; ?>

                                                        </td>

                                                        <!-- info -->
                                                        <td>
                                                            <?php if ($stock['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stock['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stock['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $stock['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stock['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($stock['teamId'] == '' && $stock['wage'] == '' && $stock['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stock['orderST']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>

                                                            <div class="modal fade" id="exampleModalwage<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_stockadmin" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $stock['orderST']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $stock['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 45px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label> <br>
                                                                                        <select class="select2 form-control" name="teamid" required>
                                                                                            <option disabled selected> -- Select Team -- </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>" <?php echo $tsM['IdTeam'] == $stock['teamId'] ? 'selected' : ''; ?>><?php echo $tsM['IdTeam']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Position</label>
                                                                                        <select name="position" class="form-control" required>
                                                                                            <option selected disabled> ---- Select ---- </option>

                                                                                            <?php foreach ($positionX as $positionX) { ?>
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stock['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $stock['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                $str =  $stock['date_required'];
                                                                                $datr_re = explode(" ", $str);
                                                                                ?>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Date require</label>
                                                                                        <input type="date" class="form-control" name="date_required" value="<?php echo $datr_re[0] ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Note</label>
                                                                                        <textarea rows="5" name="note_team" class="form-control"><?php echo $stock['note']; ?></textarea>
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

                                                        <!-- Feedback -->
                                                        <td>
                                                            <?php
                                                            $tff     = $this->db->get_where('tbl_feedback', ['order_id' => $stock['orderST']])->row_array();
                                                            ?>
                                                            <?php if ($tff == true) : ?>
                                                                <?php if ($tff['re_feedback'] == '0') : ?>

                                                                    <?php
                                                                    $this->db->where('order_id', $stock['orderST']);
                                                                    $this->db->where('re_feedback', 0);
                                                                    $this->db->from('tbl_feedback', 0);
                                                                    $countff = $this->db->count_all_results();
                                                                    ?>

                                                                    <span class="badge badge-pill badge-danger">Feedback (<?php echo $countff; ?>) </span>
                                                                <?php else : ?>
                                                                    <span class="badge badge-pill badge-danger">Re-Feedback </span>
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>


                                                        </td>

                                                        <!-- Processing -->
                                                        <?php $cancel_sa = $this->db->get_where('tbl_cancel', ['order_id' => $stock['orderST']])->row_array(); ?>
                                                        <td>
                                                            <?php if ($cancel_sa == true) : ?>
                                                                <span class="badge badge-pill badge-danger"><?= $cancel_sa['status_who']; ?></span>
                                                            <?php else : ?>
                                                                <?php if ($stock['Tstatus'] == 0 && $stock['teamId'] == '') : ?>
                                                                    <span class="badge badge-pill badge-primary">waiting for team </span>
                                                                <?php elseif ($stock['Tstatus'] == 0 && $stock['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-warning">Processing </span>
                                                                <?php elseif ($stock['Tstatus'] == 1 && $stock['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-success">Complete </span>
                                                                <?php elseif ($stock['Tstatus'] == 2 && $stock['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-danger">Feedback </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Status -->
                                                        <td>
                                                            <?php $admin_stu = $this->db->get('tbl_admin', ['adminId' => $stock['userId']])->row_array(); ?>
                                                            <?php if ($admin_stu == true) : ?>
                                                                <?php if ($stock['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Admin Original </span>
                                                                <?php elseif ($stock['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-warning"> Admin Not complete </span>
                                                                <?php elseif ($stock['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Admin Rewrite </span>
                                                                <?php elseif ($stock['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> Admin No DM </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php else : ?>
                                                                <?php if ($stock['status_cp'] == 'complete') : ?>
                                                                    <span class="badge badge-pill badge-success">Original </span>
                                                                <?php elseif ($stock['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-warning">Not complete </span>
                                                                <?php elseif ($stock['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Rewrite </span>
                                                                <?php elseif ($stock['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger">No DM </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php endif; ?>


                                                        </td>

                                                        <!-- Tool -->
                                                        <td style="width:10%;">
                                                            <?php if ($stock['is_check'] == 1) : ?>
                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="feather icon-navigation"></i></button>

                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-plus-circle"></i></button>
                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-exclamation-triangle"></i></button>
                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-check"></i></button>
                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-times"></i></button>
                                                                <button type="button" class="btn btn-secondary btn-icon"><i class="feather icon-delete"></i></button>
                                                            <?php else : ?>
                                                                <?php if ($stock['status_approved'] == 1) : ?>
                                                                    <span class="badge badge-pill badge-success">Approved</span>
                                                                <?php elseif ($stock['status_approved'] == 2) : ?>
                                                                    <span class="badge badge-pill badge-danger">Not Approved</span>
                                                                <?php else : ?>
                                                                    <button type="button" class="btn btn-info btn-icon" data-toggle="modal" data-target="#sendadmin<?php echo $stock['orderST']; ?>"><i class="feather icon-navigation"></i></button>
                                                                    <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#gtdoc<?php echo $stock['orderST']; ?>"><i class="fa fa-plus-circle"></i></button>
                                                                    <?php if ($stock['Tstatus'] != 0 && $stock['teamId'] != '') : ?>
                                                                        <button type="button" class="btn btn-warning btn-icon" data-toggle="modal" data-target="#exampleModalNotApprove<?php echo $stock['orderST']; ?>"><i class="fa fa-exclamation-triangle"></i></button>
                                                                        <button type="button" class="btn btn-success btn-icon" data-order="<?php echo $stock['orderST'] ?>" id="approved<?php echo $stock['orderST']; ?>"><i class="fa fa-check"></i></button>
                                                                        <button type="button" class="btn btn-danger btn-icon" data-order="<?php echo $stock['orderST'] ?>" id="order_not_approved<?php echo $stock['orderST']; ?>"><i class="fa fa-times"></i></button>
                                                                    <?php else : ?>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-exclamation-triangle"></i></button>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-check"></i></button>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-times"></i></button>
                                                                    <?php endif; ?>
                                                                    <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#Cancel<?php echo $stock['orderST']; ?>"><i class="feather icon-delete"></i></button>

                                                                <?php endif; ?>
                                                            <?php endif; ?>



                                                            <!-- Modal Feedback -->
                                                            <div class="modal fade" id="exampleModalNotApprove<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback (<?php echo $stock['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body" style="text-align:left;">
                                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                            <form action="fileUpload_feedback" class="dropzone" id="fileuploadnotApprove<?php echo $stock['orderST']; ?>">
                                                                                <div class="dz-message needsclick">
                                                                                    Drop files here or click to upload.<br>
                                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                                </div>
                                                                            </form>
                                                                            <br>
                                                                            <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                            <label for="" class="font-size-upload">Detail :</label>
                                                                            <textarea id="detail1<?php echo $stock['orderST']; ?>" name="detail" class="form-control" rows="5" required></textarea>
                                                                            <br>

                                                                            <label for="" class="font-size-upload">Date :</label>
                                                                            <input type="date" name="dated" id="dated<?php echo $stock['orderST']; ?>" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" style="width:30%" required>
                                                                            <input type="text" name="order_id" id="order_id<?php echo $stock['orderST']; ?>" value="<?php echo $stock['orderST']; ?>" hidden>
                                                                            <input type="text" name="userId" id="userId<?php echo $stock['orderST']; ?>" value="<?php echo null; ?>" hidden>
                                                                            <input type="text" name="teamId" id="teamId<?php echo $stock['orderST']; ?>" value="<?php echo $stock['teamId']; ?>" hidden>
                                                                            <!-- </form> -->
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" id="SubmitNotApp<?php echo $stock['orderST']; ?>" class="btn btn-success">Success</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script type='text/javascript'>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone2<?php echo $stock['orderST']; ?> = new Dropzone("#fileuploadnotApprove<?php echo $stock['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                $('#SubmitNotApp<?php echo $stock['orderST']; ?>').click(function() {
                                                                    var x = document.getElementById("detail1<?php echo $stock['orderST']; ?>").value;
                                                                    var y = document.getElementById("dated<?php echo $stock['orderST']; ?>").value;
                                                                    var z = document.getElementById("order_id<?php echo $stock['orderST']; ?>").value;
                                                                    var c = document.getElementById("userId<?php echo $stock['orderST']; ?>").value;
                                                                    var team = document.getElementById("teamId<?php echo $stock['orderST']; ?>").value;

                                                                    if (myDropzone2<?php echo $stock['orderST']; ?>.files == 0) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: 'order_auto_feedback_Stockadmin',
                                                                            data: {
                                                                                detail: x,
                                                                                dated: y,
                                                                                order_id: z,
                                                                                userId: c,
                                                                                teamId: team,
                                                                            },
                                                                            success: function(success) {
                                                                                myDropzone2<?php echo $stock['orderST']; ?>.processQueue();
                                                                                myDropzone2<?php echo $stock['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                                    swal("Good job!", "Upload for data success Feedback", "success", {
                                                                                        button: false,
                                                                                    });
                                                                                });
                                                                                setTimeout("location.reload(true);", 1000);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            </script>

                                                            <!-- Modal GT Document-->
                                                            <div class="modal fade" id="sendadmin<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Sent Email (<?php echo $stock['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="sendemail_delivery_stockadmin" method="POST">
                                                                            <input type="hidden" name="order_id" value="<?php echo $stock['orderST']; ?>">
                                                                            <input type="hidden" name="email" value="<?php echo $stock['email']; ?>">
                                                                            <div class="modal-body" style="text-align:left;">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stock['orderST']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>
                                                                                            <th>Order id</th>
                                                                                            <th>File name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>
                                                                                                <td><label class="container">
                                                                                                        <input type="checkbox" class="checkmark" name="order_team[]" value="<?php echo $orderss['id'] ?>">
                                                                                                        <span class="checkmark"></span>
                                                                                                    </label>
                                                                                                </td>

                                                                                                <td><?php echo $orderss['order_id'] ?></td>
                                                                                                <td><?php echo $orderss['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss['create_at'] ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        
                                                                        <div class="modal-footer">
                                                                            <button type="submit" id="Submitsent<?php echo $stock['orderST']; ?>" class="btn btn-success">Success</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal GT Document-->
                                                            <div class="modal fade" id="gtdoc<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document (<?php echo $stock['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body" style="text-align:left;">
                                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                            <form action="oder-morefile-upload" class="dropzone" id="fileuploadmorefile<?php echo $stock['orderST']; ?>">
                                                                                <div class="dz-message needsclick">
                                                                                    Drop files here or click to upload.<br>
                                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                                </div>
                                                                                <input type="text" name="order_id" id="order_id" value="<?php echo $stock['orderST']; ?>" hidden>
                                                                                <textarea id="detailshow" name="detail" class="form-control detailshow" rows="5" hidden></textarea>
                                                                            </form>
                                                                            <br>
                                                                            <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                            <label for="" class="font-size-upload">Detail :</label>
                                                                            <textarea id="detailkey" class="form-control" rows="5"></textarea>
                                                                            <br>

                                                                            <!-- </form> -->
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" id="Submitgtdoc<?php echo $stock['orderST']; ?>" class="btn btn-success">Success</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade" id="Cancel<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="delete_order_stock_admin" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $stock['orderST']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $stock['orderST']; ?>)</h5>
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

                                                            <script type='text/javascript'>
                                                                $("#detailsent")
                                                                    .keyup(function() {
                                                                        var value = $(this).val();
                                                                        $(".detailshow_sent").val(value);
                                                                    })
                                                                    .keyup();
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzonesent<?php echo $stock['orderST']; ?> = new Dropzone("#filesent<?php echo $stock['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                $('#Submitsent<?php echo $stock['orderST']; ?>').click(function() {
                                                                    if (myDropzonesent<?php echo $stock['orderST']; ?>.files < 1) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        myDropzonesent<?php echo $stock['orderST']; ?>.processQueue();
                                                                        myDropzonesent<?php echo $stock['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: false,
                                                                            });
                                                                        });
                                                                        setTimeout("location.reload(true);", 1000);
                                                                    }
                                                                });
                                                            </script>



                                                            <script type='text/javascript'>
                                                                $("#detailkey")
                                                                    .keyup(function() {
                                                                        var value = $(this).val();
                                                                        $(".detailshow").val(value);
                                                                    })
                                                                    .keyup();
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $stock['orderST']; ?> = new Dropzone("#fileuploadmorefile<?php echo $stock['orderST']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                $('#Submitgtdoc<?php echo $stock['orderST']; ?>').click(function() {
                                                                    if (myDropzone<?php echo $stock['orderST']; ?>.files < 1) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        myDropzone<?php echo $stock['orderST']; ?>.processQueue();
                                                                        myDropzone<?php echo $stock['orderST']; ?>.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: false,
                                                                            });
                                                                        });
                                                                        setTimeout("location.reload(true);", 1000);
                                                                    }
                                                                });
                                                            </script>


                                                            <script type='text/javascript'>
                                                                $('#approved<?php echo $stock['orderST']; ?>').click(function() {
                                                                    swal({
                                                                        icon: "success",
                                                                        title: "Are you sure?",
                                                                        text: "Do you want Approvend document (<?php echo $stock['orderST']; ?>)",
                                                                        closeOnEsc: true,
                                                                        closeOnClickOutside: false,
                                                                        buttons: {
                                                                            cancel: true,
                                                                            confirm: true,
                                                                        },
                                                                    }).then(function(isConfirm) {
                                                                        if (isConfirm == true) {
                                                                            var order = $(this).data('order');
                                                                            $.ajax({
                                                                                type: 'POST',
                                                                                url: 'order_approved_admin',
                                                                                data: {
                                                                                    order_id: order,
                                                                                    status_approved: 1,
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

                                                            <script type='text/javascript'>
                                                                $('#order_not_approved<?php echo $stock['orderST']; ?>').click(function() {
                                                                    var order = $(this).data('order');
                                                                    swal({
                                                                        icon: "warning",
                                                                        title: "Are you sure?",
                                                                        text: "Do you want Not Approvend document (<?php echo $stock['orderST']; ?>)",
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
                                                                                url: 'order_not_approved_admin',
                                                                                data: {
                                                                                    order_id: order,
                                                                                    status_approved: 2,
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

                                                        </td>
                                                    </tr>
                                                <?php } ?>
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