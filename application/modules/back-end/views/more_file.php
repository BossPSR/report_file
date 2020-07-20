<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">More File</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">More File
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
                                    <h4 class="card-title">More File</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($more_file == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($more_file as $key => $datata) {
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
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>More File</th>
                                                    <th>Detail</th>
                                                    <th>create at</th>
                                                    <th>T3</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Prossing</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;

                                                foreach ($more_file as $key => $more_file) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $more_file['orderGT'] ?></td>
                                                        <td><?php echo $more_file['userId']; ?></td>
                                                        <td>
                                                            <?php if (empty($more_file['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php
                                                                $this->db->group_by('id_document');
                                                                $show_dm = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $more_file['orderGT']])->result_array();
                                                                ?>
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
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $more_file['orderGT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $more_file['orderGT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $more_file['orderGT']])->result_array(); ?>
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
                                                            <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $more_file['orderGT']])->result_array(); ?>
                                                            <?php if (!empty($order)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $more_file['orderGT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $more_file['orderGT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                            <?php if (!empty($more_file['id_document'])) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalbDM<?php echo $more_file['orderGT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalbDM<?php echo $more_file['orderGT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">DM File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $more_file['orderGT']])->result_array(); ?>
                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>

                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p><b>
                                                                                                <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                            </b></p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store Id</th>
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
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $more_file['idM']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $more_file['idM']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">More file</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['more_id' => $more_file['idM']])->result_array(); ?>
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
                                                        </td>


                                                        <td>
                                                            <?php if (!empty($more_file['more_detail'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note<?php echo $more_file['idM']; ?>"><i class="feather icon-search"></i></a>
                                                                <div class="modal fade" id="note<?php echo $more_file['idM']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="more_file_update_detail" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $more_file['idM']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail" id="" rows="6" class="form-control"><?= $more_file['more_detail']; ?></textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                    <button type=" submit" class="btn btn-success">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>

                                                        <td><?php echo $more_file['create_at']; ?></td>
                                                        <td>
                                                            <?php if (!empty($more_file['TM'])) : ?>
                                                                <?php echo $more_file['TM']; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif;  ?>

                                                        </td>
                                                        <td>
                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $more_file['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $keys => $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($more_file['status_book'] == '1' && $more_file['status_cp'] == 'complete' && $more_file['status_admin'] == '0') : ?>
                                                                <span class=" badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($more_file['status_book'] == '1' && $more_file['status_cp'] == 'notcomplete'  && $more_file['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($more_file['status_book'] == '2'  && $more_file['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($more_file['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($more_file['Tstatus'] == 0 && $more_file['teamId'] == '') : ?>
                                                                <span class="badge badge-pill badge-primary">waiting for team </span>
                                                            <?php elseif ($more_file['Tstatus'] == 0 && $more_file['teamId'] != '') : ?>
                                                                <span class="badge badge-pill badge-warning">Processing </span>
                                                            <?php elseif ($more_file['Tstatus'] == 1 && $more_file['teamId'] != '') : ?>
                                                                <span class="badge badge-pill badge-success">Complete </span>
                                                            <?php elseif ($more_file['Tstatus'] == 2 && $more_file['teamId'] != '') : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback </span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($more_file['status_see_more_file_team'] == 1) : ?>
                                                                <span class="badge badge-pill badge-success">complete</span>

                                                            <?php else : ?>
                                                                <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $more_file['idM']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-alert-circle"></i></button>
                                                                <button onclick="confirmalertunlock_upload_morefile('<?php echo $more_file['idM']; ?>' , '<?php echo $more_file['orderGT']; ?>')" class="btn btn-icon btn-info " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="feather icon-corner-up-right"></i>
                                                                </button>
                                                            <?php endif; ?>

                                                            <div class="modal fade" id="exampleModalb<?php echo $more_file['idM']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">More file (<?php echo $more_file['order_id'] ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label for="" style="font-size: 16px;">File Document </label>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                                <form action="more_file_file" class="dropzone" id="maindropzonemore<?php echo $more_file['idM']; ?>">
                                                                                    <div class="dz-message needsclick">
                                                                                        Drop files here or click to upload.<br>
                                                                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                                    </div>
                                                                                    <input type="hidden" name="id" value="<?php echo $more_file['idM']; ?>">
                                                                                    <input type="hidden" name="order" value="<?php echo $more_file['order_id']; ?>">
                                                                                </form>
                                                                            </div>
                                                                            <input type="text" id="id<?php echo $more_file['idM']; ?>" class="form-control " name="id" value="<?php echo $more_file['idM']; ?>" hidden>
                                                                            <input type="text" id="order_id<?php echo $more_file['idM']; ?>" class="form-control " name="order_id" value="<?php echo $more_file['order_id']; ?>" hidden>

                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                                <label for="" style="font-size: 16px;"> Descriptions </label>
                                                                                <textarea name="descriptions" class="form-control" id="text<?php echo $more_file['idM']; ?>" rows="5" style="width: 100%"><?= $more_file['more_detail']; ?></textarea>
                                                                            </div>

                                                                        </div>
                                                                        <button type="button" id="uploadsfile<?php echo $more_file['idM']; ?>" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Morefile</button>
                                                                    </div>

                                                                    <div class="modal-footer">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $more_file['idM']; ?> = new Dropzone("#maindropzonemore<?php echo $more_file['idM']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfile<?php echo $more_file['idM']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    var fi = document.getElementById("id<?php echo $more_file['idM']; ?>").value;
                                                                    var x = document.getElementById("order_id<?php echo $more_file['idM']; ?>").value;
                                                                    var text = document.getElementById("text<?php echo $more_file['idM']; ?>").value;
                                                                    if (myDropzone<?php echo $more_file['idM']; ?>.files < 1) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: 'more_file_other',
                                                                            data: {
                                                                                id: fi,
                                                                                order_id: x,
                                                                                textarea: text,
                                                                            },
                                                                            success: function(success) {
                                                                                myDropzone<?php echo $more_file['idM']; ?>.processQueue();
                                                                                myDropzone<?php echo $more_file['idM']; ?>.on("queuecomplete", function(file, res) {
                                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                                        button: true,
                                                                                    }).then(function(isConfirm) {
                                                                                        if (isConfirm == true) {
                                                                                            setTimeout("location.reload(true);", 500);
                                                                                        } else {
                                                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                        }
                                                                                    });
                                                                                });
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