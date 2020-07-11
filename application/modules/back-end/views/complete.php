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
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Complete</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Complete">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Complete
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
                                    <h4 class="card-title">Complete</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($complete == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($complete as $key => $datata) {
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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>TeamId</th>
                                                    <th>Main file</th>
                                                    <th>GT File</th>
                                                    <th>Team File</th>
                                                    <th>Date Required</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $e = 1;
                                                foreach ($complete as $key => $complete) { ?>
                                                    <tr>
                                                        <td><?php echo $complete['order_id_t']; ?></td>
                                                        <td><?php echo $complete['teamId']; ?></td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $complete['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $complete['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $complete['order_id']])->result_array(); ?>
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
                                                        <td>
                                                            <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $complete['order_id']])->result_array(); ?>
                                                            <?php if (!empty($order)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModala<?php echo $complete['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModala<?php echo $complete['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
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
                                                                                        <?php foreach ($order as $keys => $order) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $order['order_id'] ?></td>
                                                                                                <td><?php echo $order['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $order['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
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
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $complete['order_id'], 'teamId' => $complete['teamId']])->result_array(); ?>
                                                            <?php if (!empty($orderT)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalz<?php echo $complete['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalz<?php echo $complete['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                            <th>#</th>
                                                                                            <th>Order_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
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

                                                        <td><?php echo $complete['date_required_t']; ?></td>

                                                        <td>
                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $complete['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $keys => $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                        </td>

                                                        <td>
                                                            <?php if ($complete['status_book'] == '1' && $complete['statusB'] == 'complete' && $complete['stadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($complete['status_book'] == '1' && $complete['statusB'] == 'notcomplete' && $complete['stadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Not complete</span>
                                                            <?php elseif ($complete['status_book'] == '1' && $complete['statusB'] == 'rewrite') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($complete['status_book'] == '2'  && $complete['stadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($complete['stadmin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>

                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#exampleModalu<?php echo $complete['order_id_t']; ?>">
                                                                <i class="feather icon-navigation"></i>
                                                            </button>
                                                            <?php if ($complete['status_admin'] == '0') : ?>

                                                                <a href="book_complete_add_com?id=<?php echo $complete['order_id_t']; ?>&userid=<?php echo $complete['user_m']; ?>" class="btn btn-icon btn-warning">
                                                                    <i class="feather icon-bookmark"></i>
                                                                </a>

                                                            <?php else : ?>

                                                            <?php endif; ?>
                                                            <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#exampleModalNotApprove<?php echo $complete['order_id_t']; ?>">
                                                                <i class="feather icon-alert-triangle"></i>
                                                            </button>

                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $complete['order_id_t']])->result_array(); ?>
                                                            <div class="modal fade" id="exampleModalu<?php echo $complete['order_id_t']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">DM File </h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="sendEmail_delivery_complete" method="POST">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id" value="<?php echo $complete['order_id_t']; ?>">
                                                                            <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                    <h3>
                                                                                        <p>DM File </p>
                                                                                    </h3>
                                                                                    
                                                                                        
                                                                                        <table class="table zero-configuration">
                                                                                            <thead>

                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store_id</th>
                                                                                                    <th>File_name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $key => $dm_c11) : ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <label class="container">
                                                                                                                <input type="checkbox" class="checkmark" name="order_id[]" value="<?php echo $dm_c11['id'] ?>">
                                                                                                                <span class="checkmark"></span>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['relive_status'] == '0') : ?>
                                                                                                                -
                                                                                                            <?php else : ?>
                                                                                                                <div class="badge badge-primary">Relive</div>
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $dm_c11['store_id'] ?></td>
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

                                                                                <h3>
                                                                                    <p>Team file</p>
                                                                                </h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $complete['order_id_t']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
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
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1">delivery</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- Modal Feedback -->
                                                            <div class="modal fade" id="exampleModalNotApprove<?php echo $complete['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback (<?php echo $complete['order_id']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body" style="text-align:left;">
                                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                            <form action="fileUpload_feedback" class="dropzone" id="fileuploadnotApprove<?php echo $complete['order_id']; ?>">
                                                                                <div class="dz-message needsclick">
                                                                                    Drop files here or click to upload.<br>
                                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                                </div>
                                                                            </form>
                                                                            <br>
                                                                            <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                            <label for="" class="font-size-upload">Detail :</label>
                                                                            <textarea id="detail1<?php echo $complete['order_id']; ?>" name="descriptions" class="form-control" rows="5" required></textarea>
                                                                            <br>

                                                                            <label for="" class="font-size-upload">Date </label>
                                                                            <input type="date" name="dated" id="dated<?php echo $complete['order_id']; ?>" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="" style="width:30%" required>
                                                                            <input type="text" name="order_id" id="order_id<?php echo $complete['order_id']; ?>" value="<?php echo $complete['order_id']; ?>" hidden>
                                                                            <input type="text" name="userId" id="userId<?php echo $complete['order_id']; ?>" value="<?php echo $complete['user_m']; ?>" hidden>
                                                                            <input type="text" name="teamId" id="teamId<?php echo $complete['order_id']; ?>" value="<?php echo $complete['teamId']; ?>" hidden>
                                                                            <!-- </form> -->
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" id="SubmitNotApp<?php echo $complete['order_id']; ?>" class="btn btn-success">Success</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script type='text/javascript'>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone2<?php echo $complete['order_id']; ?> = new Dropzone("#fileuploadnotApprove<?php echo $complete['order_id']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                $('#SubmitNotApp<?php echo $complete['order_id']; ?>').click(function() {
                                                                    var x = document.getElementById("detail1<?php echo $complete['order_id']; ?>").value;
                                                                    var y = document.getElementById("dated<?php echo $complete['order_id']; ?>").value;
                                                                    var z = document.getElementById("order_id<?php echo $complete['order_id']; ?>").value;
                                                                    var c = document.getElementById("userId<?php echo $complete['order_id']; ?>").value;
                                                                    var team = document.getElementById("teamId<?php echo $complete['order_id']; ?>").value;

                                                                    if (x == '') {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: 'feedback_ajax',
                                                                            data: {
                                                                                DM: x,
                                                                                dated: y,
                                                                                order_id: z,
                                                                                cmid: c,
                                                                                teamId: team,
                                                                                confirm: 1,
                                                                            },
                                                                            success: function(success) {
                                                                                if (myDropzone2<?php echo $complete['order_id']; ?>.files != 0) {
                                                                                    myDropzone2<?php echo $complete['order_id']; ?>.processQueue();
                                                                                    myDropzone2<?php echo $complete['order_id']; ?>.on("queuecomplete", function(file, res) {
                                                                                        swal("Good job!", "Upload for data success Feedback", "success", {
                                                                                            button: false,
                                                                                        });
                                                                                    });
                                                                                    setTimeout("location.reload(true);", 1000);
                                                                                } else {
                                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                                        button: true,
                                                                                    }).then(function(isConfirm) {
                                                                                        if (isConfirm == true) {
                                                                                            setTimeout("location.reload(true);", 1000);
                                                                                        } else {
                                                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                        }
                                                                                    });
                                                                                }

                                                                            }
                                                                        });
                                                                    }

                                                                });
                                                            </script>

                                                        </td>
                                                    </tr>

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