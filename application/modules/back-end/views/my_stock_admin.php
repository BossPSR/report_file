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
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th>Process</th>
                                                    <th>Client Feedback</th>
                                                    <th>Admin Feedback </th>
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
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
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
                                                                <p id="demo<?php echo $stock['orderST']; ?>" style="font-size: 18px;font-weight: bold;"></p>

                                                            <?php endif; ?>
                                                            <script>
                                                                var datep<?php echo $stock['orderST']; ?> = "<?= $stock['dateREST']; ?>";

                                                                // Set the date we're counting down to
                                                                var countDownDate<?php echo $stock['orderST']; ?> = new Date(datep<?php echo $stock['orderST']; ?>);

                                                                // Update the count down every 1 second
                                                                var x<?php echo $stock['orderST']; ?> = setInterval(function() {

                                                                    // Get today's date and time
                                                                    var now<?php echo $stock['orderST']; ?> = new Date();

                                                                    // Find the distance between now and the count down date
                                                                    var distance<?php echo $stock['orderST']; ?> = countDownDate<?php echo $stock['orderST']; ?> - now<?php echo $stock['orderST']; ?>;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days<?php echo $stock['orderST']; ?> = Math.floor(distance<?php echo $stock['orderST']; ?> / (1000 * 60 * 60 * 24));
                                                                    var hours<?php echo $stock['orderST']; ?> = Math.floor((distance<?php echo $stock['orderST']; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes<?php echo $stock['orderST']; ?> = Math.floor((distance<?php echo $stock['orderST']; ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds<?php echo $stock['orderST']; ?> = Math.floor((distance<?php echo $stock['orderST']; ?> % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo<?php echo $stock['orderST']; ?>").innerHTML = days<?php echo $stock['orderST']; ?> + "Day " + hours<?php echo $stock['orderST']; ?> + "h " +
                                                                        minutes<?php echo $stock['orderST']; ?> + "m " + seconds<?php echo $stock['orderST']; ?> + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance<?php echo $stock['orderST']; ?> < 0) {
                                                                        clearInterval(x<?php echo $stock['orderST']; ?>);
                                                                        document.getElementById("demo<?php echo $stock['orderST']; ?>").innerHTML = "หมดเวลา";
                                                                    }
                                                                }, 1000);
                                                            </script>

                                                        </td>

                                                        <!-- info -->
                                                        <td>
                                                            <?php
                                                            $this->db->order_by('id', 'desc');
                                                            $wagenow = $this->db->get_where('tbl_upload_team', ['order_id' => $stock['orderST']])->row_array();
                                                            ?>

                                                            <?php if ($stock['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stock['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stock['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $wagenow['wage']; ?> |
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
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">

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
                                                                                        <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                            <option disabled> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
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
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $wagenow['wage']; ?>" placeholder="Enter wage" required>
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
                                                                                        <textarea rows="5" name="note_new" class="form-control"><?php echo $stock['note']; ?></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary w-100" style="font-size: 18px;">Submit</button>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Main file All -->

                                                                                <div class="col-xl-6 col-md-12 col-12 mb-1 text-left" style="box-shadow: -2px 2px 4px 0px #dedede;">
                                                                                    <label style="font-size: 16px;margin: 23px 0 5px 0px;" for="">Main file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php $ordermain = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['orderST']])->result_array(); ?>

                                                                                    <table class="table zero-configuration" id="heremain<?php echo $stock['orderST']; ?>">
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
                                                                                                                            $("#heremain<?php echo $stock['orderST']; ?>").load(window.location.href + " #heremain<?php echo $stock['orderST']; ?>");
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
                                                                                    <?php $ordergt_sub = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['orderST']])->result_array(); ?>

                                                                                    <table class="table zero-configuration" id="heregt<?php echo $stock['orderST']; ?>">
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
                                                                                                                            $("#heregt<?php echo $stock['orderST']; ?>").load(window.location.href + " #heregt<?php echo $stock['orderST']; ?>");
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
                                                                                    $t3folder = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stock['orderST']])->result_array();
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

                                                                                                                            <table class="table zero-configuration" id="hereold<?php echo $stock['orderST']; ?>">
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
                                                                                                                                                                    $("#hereold<?php echo $stock['orderST']; ?>").load(window.location.href + " #hereold<?php echo $stock['orderST']; ?>");
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
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>

                                                        <!-- Delivered -->
                                                        <td>
                                                            <?php if ($stock['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Status -->
                                                        <td>
                                                            <?php $admin_stu = $this->db->get_where('tbl_admin', ['adminId' => $stock['userOR']])->row_array(); ?>
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
                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                <?php elseif ($stock['status_cp'] == 'notcomplete') : ?>
                                                                    <span class="badge badge-pill badge-primary">Not complete</span>
                                                                <?php elseif ($stock['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                <?php elseif ($stock['status_cp'] == 'nodm') : ?>
                                                                    <span class="badge badge-pill badge-danger"> No DM </span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Process -->
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $stock['orderST']])->row_array(); ?>
                                                        <td>
                                                            <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stock['orderST']; ?>" type="button" class="btn btn-icon btn-success" style="    font-size: 14px;">Upload T3</button>

                                                                <div class="modal fade" id="exampleModalUpload<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Upload to team (<?php echo $stock['orderST']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="upload_team_ST_admin" method="POST" class="form-horizontal">
                                                                                <div class="modal-body row" style="text-align: center;margin: 5px 0;">

                                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Order</label>
                                                                                            <input type="text" class="form-control" name="order_id" value="<?php echo $stock['orderST']; ?>" placeholder="Enter Order" readonly>
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
                                                                                                    <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stock['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">wage</label>
                                                                                            <input type="text" class="form-control" name="wage" value="<?php echo $stock['wage']; ?>" placeholder="Enter wage" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php
                                                                                    $str =  $stock['dateREST'];
                                                                                    $datr_re = explode(" ", $str);
                                                                                    ?>
                                                                                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Date</label>
                                                                                            <input type="date" class="form-control  <?php echo $stock['orderST']; ?>" name="date_required" value="<?php echo $datr_re[0]; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">note</label>
                                                                                            <textarea name="note_new" id="" rows="4" class="form-control"><?php echo $stock['note']; ?></textarea>
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
                                                                                        <?php $ordermain = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['orderST']])->result_array(); ?>

                                                                                        <table class="table zero-configuration" id="heremain<?php echo $stock['orderST']; ?>">
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
                                                                                                                                $("#heremain<?php echo $stock['orderST']; ?>").load(window.location.href + " #heremain<?php echo $stock['orderST']; ?>");
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
                                                                                        <?php $ordergt_sub = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['orderST']])->result_array(); ?>

                                                                                        <table class="table zero-configuration" id="heregt<?php echo $stock['orderST']; ?>">
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
                                                                                                                                $("#heregt<?php echo $stock['orderST']; ?>").load(window.location.href + " #heregt<?php echo $stock['orderST']; ?>");
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
                                                                <?php $cancel_sa = $this->db->get_where('tbl_cancel', ['order_id' => $stock['orderST']])->row_array(); ?>
                                                                <?php if ($cancel_sa == true) : ?>
                                                                    <span class="badge badge-pill badge-danger"><?= $cancel_sa['status_who']; ?></span>
                                                                <?php else : ?>
                                                                    <?php if ($stock['status_approved'] == '5') : ?>
                                                                        <span class="badge badge-pill badge-danger">Admin feedback</span>
                                                                    <?php else : ?>
                                                                        <?php
                                                                        $this->db->where('tbl_feedback.status_c_feedack_team', '0');
                                                                        $this->db->where('tbl_upload_team.order_id', $stock['orderST']);
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
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $stock['orderST'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $stock['orderST'], 'check_status' => 1, 're_feedback' => 1])->result_array();
                                                            foreach ($cf2 as $key => $cf2) {
                                                                $c += 1;
                                                            }
                                                            ?>
                                                            <?php if ($cf2 == true) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback (<?= $c; ?>)</span>
                                                            <?php elseif ($cf == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback (<?= $z; ?>)</span>
                                                            <?php elseif ($stock['status_approved'] == 3) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback</span>
                                                            <?php elseif ($stock['status_approved'] == 4) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Admin Feedback  -->
                                                        <td>
                                                            <?php
                                                            $xs  = 0;
                                                            $af = $this->db->get_where('tbl_feedback', ['order_id' => $stock['orderST'], 'check_status' => 0])->result_array();
                                                            foreach ($af as $key => $af) {
                                                                $xs += 1;
                                                            }
                                                            ?>
                                                            <?php if ($af == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Admin Feedback (<?= $xs; ?>) </span>
                                                                <span data-toggle="modal" data-target="#filenotefeedback<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="filenotefeedback<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        $feedbackde = $this->db->get_where('tbl_feedback', ['order_id' => $stock['orderST'], 'check_status' => 0])->result_array();
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
                                                                        <!-- approved echo $stock['orderST']; ?> -->
                                                                        <button type="button" class="btn btn-success btn-icon" data-order="<?php echo $stock['orderST'] ?>" id="" data-toggle="modal" data-target="#approvedstar<?php echo $stock['orderST']; ?>" id="" data-toggled="tooltip"><i class="fa fa-check"></i></button>
                                                                        <!-- order_not_approved echo $stock['orderST']; ?> -->
                                                                        <button type="button" class="btn btn-danger btn-icon" data-order="<?php echo $stock['orderST'] ?>" id=""  data-toggle="modal" data-target="#order_not_approvedstar<?php echo $stock['orderST']; ?>"><i class="fa fa-times"></i></button>
                                                                    <?php else : ?>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-exclamation-triangle"></i></button>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-check"></i></button>
                                                                        <button type="button" class="btn btn-secondary btn-icon"><i class="fa fa-times"></i></button>
                                                                    <?php endif; ?>
                                                                    <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#Cancel<?php echo $stock['orderST']; ?>"><i class="feather icon-delete"></i></button>

                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="approvedstar<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">อนุมัติผ่าน (<?php echo $stock['orderST']; ?>)</h5>
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
                                                                                <label for="star5" title="text">5 ดาว</label>
                                                                                <input type="radio" class="star" id="star4" name="rate" value="4" />
                                                                                <label for="star4" title="text">4 ดาว</label>
                                                                                <input type="radio" class="star" id="star3" name="rate" value="3" />
                                                                                <label for="star3" class="star" title="text">3 ดาว</label>
                                                                                <input type="radio" class="star" id="star2" name="rate" value="2" />
                                                                                <label for="star2" title="text">2 ดาว</label>
                                                                                <input type="radio" class="star" id="star1" name="rate" value="1" />
                                                                                <label for="star1" title="text">1 ดาว</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" data-orderq="<?php echo $stock['orderST'] ?>" id="approvedS" class="btn btn-primary">บันทึก</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="order_not_approvedstar<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">ไม่ผ่านคุณภาพ(<?php echo $stock['orderST']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: left;">
                                                                            <label style="font-size:18px;" for="">แสดงความคิดเห็น (คุณอยากบอกอะไรเรา)</label>
                                                                            <textarea name="textareanot" id="textareanot<?php echo $stock['orderST']; ?>" class="form-control" rows="5"></textarea>
                                                                            <label style="font-size:18px;" for="">คะแนนความพึงพอใจในบริการของเรา</label><br>
                                                                            <div class="rate" style="text-align: center;">
                                                                                <input type="radio" class="star" id="star6" name="rate_not" value="5" />
                                                                                <label for="star6" title="text">5 ดาว</label>
                                                                                <input type="radio" class="star" id="star7" name="rate_not" value="4" />
                                                                                <label for="star7" title="text">4 ดาว</label>
                                                                                <input type="radio" class="star" id="star8" name="rate_not" value="3" />
                                                                                <label for="star8" class="star" title="text">3 ดาว</label>
                                                                                <input type="radio" class="star" id="star9" name="rate_not" value="2" />
                                                                                <label for="star9" title="text">2 ดาว</label>
                                                                                <input type="radio" class="star" id="star10" name="rate_not" value="1" />
                                                                                <label for="star10" title="text">1 ดาว</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" data-ordernot="<?php echo $stock['orderST']; ?>" id="not_app<?php echo $stock['orderST']; ?>" class="btn btn-primary">บันทึก</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

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