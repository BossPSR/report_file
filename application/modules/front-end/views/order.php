<?php if (!empty($buy_email)) : ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My order</h2>
    <hr class="line_package">
    <br>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">Status</th>
                                <th scope="col">#</th>
                                <th scope="col">Order</th>
                                <th scope="col">Document</th>
                                <th scope="col">Main Document</th>
                                <th scope="col">GT Document</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Date Required</th>
                                <th scope="col">Tool</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $OP = 1; ?>
                            <?php $bbb = 1; ?>
                            <?php $vvv = 1; ?>
                            <?php $OPE = 1; ?>
                            <?php $BNAP = 1; ?>
                            <?php $NAP = 1; ?>
                            <?php $zz = 1; ?>
                            <?php $xx = 1; ?>
                            <?php $cc = 1; ?>
                            <?php $bb = 1; ?>
                            <?php $xxl = 1; ?>
                            <?php foreach ($buy_email as $value) : ?>
                                <?php $sub_order = substr($value['order_id'], 3); ?>
                                <tr style="text-align:center;">
                                    <th style="text-align: center;">
                                        <?php if ($value['status_pay'] == 1 && $value['status_delivery'] == 0) : ?>
                                            <span class="badge badge-warning" style="color:#fff;">Processing</span>
                                            <!-- <i class="fa fa-check-square-o" style="color: #28a745;" aria-hidden="true"></i> -->
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 0) : ?>
                                            <span class="badge badge-success" style="color:#fff;">Complete</span>
                                            <!-- <i class="fa fa-minus-square-o" style="color: #cbcbcb;" aria-hidden="true"></i> -->
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 1) : ?>
                                            <span class="badge badge-info" style="color:#fff;">Approved</span>
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 2) : ?>
                                            <span class="badge badge-danger" style="color:#fff;">Not Approved</span>
                                        <?php elseif ($value['status_approved'] == 3) : ?>
                                            <span class="badge" style="color:#fff;background-color:#cc7a00;">Feedback</span>
                                        <?php endif; ?>
                                    </th>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $value['ORD']; ?></td>
                                    <td style="text-align:left;"><?php echo $value['file_name']; ?></td>
                                    <td>
                                        <?php $zz = 1; ?>
                                        <?php $order_main = $this->db->order_by('create_at')->get_where('tbl_upload_order', ['order_id' => $value['ORD']])->result_array(); ?>
                                        <?php if (!empty($order_main)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalMain<?= $value['ORD']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMain<?= $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <th scope="col">ID Order</th>
                                                                        <th scope="col">File</th>
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($order_main as $order_main) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $order_main['order_id']; ?></td>
                                                                            <td><?php echo $order_main['file_name']; ?></td>
                                                                            <td><a href="<?php echo $order_main['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
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
                                        <?php $kk = 1; ?>
                                        <?php $order_GT = $this->db->order_by('create_at')->get_where('tbl_upload_orderGT', ['order_id' => $value['ORD']])->result_array(); ?>
                                        <?php if (!empty($order_GT)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalMainGT<?= $value['ORD']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMainGT<?= $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <th scope="col">ID Order</th>
                                                                        <th scope="col">File</th>
                                                                        <th scope="col" class="text-left">Detail</th>
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($order_GT as $order_GT) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $order_GT['order_id']; ?></td>
                                                                            <td class="text-left">
                                                                                <?php if ($order_GT['status_more_file'] == 1) { ?>
                                                                                    <span class="badge badge-danger">New</span>
                                                                                <?php } ?>
                                                                                <?php echo $order_GT['file_name_GT']; ?>
                                                                            </td>
                                                                            <?php if (!empty($order_GT['detail'])) { ?>
                                                                                <td class="text-left"><?= $order_GT['detail']; ?></td>
                                                                            <?php } else { ?>
                                                                                <td class="text-center"> - </td>
                                                                            <?php } ?>

                                                                            <td><a href="<?php echo $order_GT['path_GT']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
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
                                    <td><?php echo date("d F Y", strtotime($value['created_at'])); ?></td>
                                    <td><?php echo date("d F Y", strtotime($value['date_required'])); ?></td>
                                    <td>
                                        <?php $DateT    = date('Y-m-d');  ?>
                                        <?php $produm   = date('Y-m-d', strtotime('+5 day' . '+' . $value['update_at_buy'])); ?>

                                        <?php if ($value['status_approved'] == 1 || $value['status_approved'] == 2) { ?>
                                            -
                                        <?php } elseif ($value['status_approved'] == 3 || $value['status_delivery'] == 1) { ?>
                                            <button type="button" class="btn btn-success" id="approved<?php echo $sub_order ?>"><i class="fa fa-check" aria-hidden="true"></i></button>
                                            <?php
                                            $this->db->select('count(order_id) as N_order');
                                            ?>
                                            <?php $N_feed = $this->db->get_where('tbl_feedback', ['order_id' => $value['ORD'], 'check_status' => 1])->row_array(); ?>
                                            <?php if ($N_feed['N_order'] >= 3) { ?>
                                                <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true"></i></button>
                                            <?php } else { ?>

                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalNotApprove<?php echo $BNAP++; ?>"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalNotApprove<?php echo $xxl++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">Not Approvend Document</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body" style="text-align:left;">
                                                                <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                <form action="my-order-feedback" class="dropzone" id="fileuploadnotApprove<?php echo $value['ORD']; ?>">
                                                                    <div class="dz-message needsclick">
                                                                        Drop files here or click to upload.<br>
                                                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                    </div>
                                                                </form>
                                                                <br>
                                                                <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                <label for="" class="font-size-upload">Detail :</label>
                                                                <textarea id="detail1<?php echo $value['ORD']; ?>" name="detail" class="form-control" rows="5" required></textarea>
                                                                <br>

                                                                <label for="" class="font-size-upload">Date :</label>
                                                                <input type="date" name="dated" id="dated<?php echo $value['ORD']; ?>" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" style="width:30%" required>
                                                                <input type="text" name="order_id" id="order_id<?php echo $value['ORD']; ?>" value="<?php echo $value['ORD']; ?>" hidden>
                                                                <input type="text" name="userId" id="userId<?php echo $value['ORD']; ?>" value="<?php echo $userId['idUser']; ?>" hidden>
                                                                <!-- </form> -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" id="SubmitNotApp<?php echo $value['ORD']; ?>" class="btn btn-success">Success</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type='text/javascript'>
                                                    Dropzone.autoDiscover = false;
                                                    var myDropzone2 = new Dropzone("#fileuploadnotApprove<?php echo $value['ORD']; ?>", {
                                                        autoProcessQueue: false,
                                                        maxFiles: 5,
                                                        addRemoveLinks: true,
                                                        parallelUploads: 5, // Number of files process at a time (default 2)
                                                    });

                                                    $('#SubmitNotApp<?php echo $value['ORD']; ?>').click(function() {
                                                        var x = document.getElementById("detail1<?php echo $value['ORD']; ?>").value;
                                                        var y = document.getElementById("dated<?php echo $value['ORD']; ?>").value;
                                                        var z = document.getElementById("order_id<?php echo $value['ORD']; ?>").value;
                                                        var c = document.getElementById("userId<?php echo $value['ORD']; ?>").value;

                                                        if (myDropzone2.files == 0 && x == '') {
                                                            swal("Warning!", "Can not be document Empty", "warning", {
                                                                button: true,
                                                            });
                                                        } else {
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: 'Not_approved',
                                                                data: {
                                                                    detail: x,
                                                                    dated: y,
                                                                    order_id: z,
                                                                    userId: c,
                                                                },
                                                                success: function(success) {
                                                                    if (myDropzone2.files != 0) {
                                                                        myDropzone2.processQueue();
                                                                        myDropzone2.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: true,
                                                                            }).then(function(isConfirm) {
                                                                                if (isConfirm == true) {
                                                                                    setTimeout("location.reload(true);", 1000);
                                                                                } else {
                                                                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                }
                                                                            });
                                                                        });
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
                                            <?php } ?>
                                            <?php $ord_s = substr($value['ORD'], 3); ?>
                                            <a class="btn btn-danger" id="order_not_approved<?php echo $value['ORD']; ?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                            <script type='text/javascript'>
                                                $('#order_not_approved<?php echo $value['ORD']; ?>').click(function() {

                                                    swal({
                                                        icon: "warning",
                                                        title: "Are you sure?",
                                                        text: "Do you want Not Approvend document",
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
                                                                url: 'order_not_approved',
                                                                data: {
                                                                    order_id: <?= $ord_s ?>,
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

                                        <?php } else { ?>
                                            <?php $this->db->select('count(order_id) as c_order'); ?>
                                            <?php $c_feed = $this->db->get_where('tbl_feedback', ['order_id' => $value['ORD']])->row_array(); ?>
                                            <?php if ($c_feed['c_order'] >= 3) { ?>
                                                <button type="button" class="btn btn-secondary" style="color:#FFF;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button>
                                            <?php } else { ?>
                                                <!-- <button type="button" data-toggle="modal" data-target="#exampleModalMainFeed<?php echo $OP++; ?>" class="btn btn-warning" style="color:#FFF;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button> -->
                                                <button type="button" data-toggle="modal" data-target="#gtdoc<?php echo $value['ORD']; ?>" class="btn btn-info"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                                            <?php } ?>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMainFeed<?php echo $OPE++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body" style="text-align:left;">
                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                            <form action="my-order-feedback" class="dropzone" id="fileuploadFeed<?php echo $value['ORD']; ?>">
                                                                <div class="dz-message needsclick">
                                                                    Drop files here or click to upload.<br>
                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                </div>
                                                            </form>
                                                            <br>
                                                            <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                            <label for="" class="font-size-upload">Detail :</label>
                                                            <textarea id="detail1<?php echo $value['ORD']; ?>" name="detail" class="form-control" rows="5" required></textarea>
                                                            <br>

                                                            <label for="" class="font-size-upload">Date :</label>
                                                            <input type="date" name="dated" id="dated<?php echo $value['ORD']; ?>" class="form-control" value="<?php echo $value['date_required']; ?>" min="<?php echo date('Y-m-d'); ?>" style="width:30%" required>
                                                            <input type="text" name="order_id" id="order_id<?php echo $value['ORD']; ?>" value="<?php echo $value['ORD']; ?>" hidden>
                                                            <input type="text" name="userId" id="userId<?php echo $value['ORD']; ?>" value="<?php echo $userId['idUser']; ?>" hidden>
                                                            <!-- </form> -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="SubmitFeed<?php echo $value['ORD']; ?>" class="btn btn-success">Success</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type='text/javascript'>
                                                Dropzone.autoDiscover = false;
                                                var myDropzone = new Dropzone("#fileuploadFeed<?php echo $value['ORD']; ?>", {
                                                    autoProcessQueue: false,
                                                    maxFiles: 5,
                                                    addRemoveLinks: true,
                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                });

                                                $('#SubmitFeed<?php echo $value['ORD']; ?>').click(function() {
                                                    var x = document.getElementById("detail1<?php echo $value['ORD']; ?>").value;
                                                    var y = document.getElementById("dated<?php echo $value['ORD']; ?>").value;
                                                    var z = document.getElementById("order_id<?php echo $value['ORD']; ?>").value;
                                                    var c = document.getElementById("userId<?php echo $value['ORD']; ?>").value;

                                                    if (myDropzone.files == 0 && x == '') {
                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                            button: true,
                                                        });
                                                    } else {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: 'my-order-feedAuto',
                                                            data: {
                                                                detail: x,
                                                                dated: y,
                                                                order_id: z,
                                                                userId: c,
                                                            },
                                                            success: function(success) {
                                                                if (myDropzone.files != 0) {
                                                                    myDropzone.processQueue();
                                                                    myDropzone.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: true,
                                                                        }).then(function(isConfirm) {
                                                                            if (isConfirm == true) {
                                                                                setTimeout("location.reload(true);", 1000);
                                                                            } else {
                                                                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                            }
                                                                        });
                                                                    });
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

                                            <!-- Modal -->
                                            <div class="modal fade" id="gtdoc<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body" style="text-align:left;">
                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                            <form action="oder-morefile-upload" class="dropzone" id="fileuploadmorefile<?php echo $value['ORD']; ?>">
                                                                <div class="dz-message needsclick">
                                                                    Drop files here or click to upload.<br>
                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                </div>
                                                                <input type="text" name="order_id" id="order_id" value="<?php echo $value['ORD']; ?>" hidden>
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
                                                            <button type="button" id="Submitgtdoc<?php echo $value['ORD']; ?>" class="btn btn-success">Success</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type='text/javascript'>
                                                $("#detailkey")
                                                    .keyup(function() {
                                                        var value = $(this).val();
                                                        $(".detailshow").val(value);
                                                    })
                                                    .keyup();
                                                Dropzone.autoDiscover = false;
                                                var myDropzone<?php echo $value['ORD']; ?> = new Dropzone("#fileuploadmorefile<?php echo $value['ORD']; ?>", {
                                                    autoProcessQueue: false,
                                                    maxFiles: 5,
                                                    addRemoveLinks: true,
                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                });

                                                $('#Submitgtdoc<?php echo $value['ORD']; ?>').click(function() {
                                                    if (myDropzone<?php echo $value['ORD']; ?>.files < 1) {
                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                            button: true,
                                                        });
                                                    } else {
                                                        myDropzone<?php echo $value['ORD']; ?>.processQueue();
                                                        myDropzone<?php echo $value['ORD']; ?>.on("queuecomplete", function(file, res) {
                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                button: false,
                                                            });
                                                        });
                                                        setTimeout("location.reload(true);", 1000);
                                                    }
                                                });
                                            </script>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <script type='text/javascript'>
                                    $('#approved<?php echo $sub_order ?>').click(function() {
                                        swal({
                                            icon: "success",
                                            title: "Are you sure?",
                                            text: "Do you want Approvend document",
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
                                                    url: 'order_approverd',
                                                    data: {
                                                        order_id: <?php echo $sub_order; ?>,
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

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Order</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>