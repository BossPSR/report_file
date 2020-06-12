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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>More File</th>
                                                    <th>Detail</th>
                                                    <th>create at</th>
                                                    <th>T3</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
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
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $more_file['idM']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $more_file['idM']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <a href="#" data-toggle="modal" data-target="#note<?php echo $more_file['orderGT']; ?>"><i class="feather icon-search"></i></a>

                                                            <?php if (!empty($more_file['detail'])) { ?>

                                                                <div class="modal fade" id="note<?php echo $more_file['orderGT']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="more_file_update_detail" method="POST">
                                                                                <input type="hidden" name="orderid" value="<?php echo $more_file['orderGT']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail" id="" rows="6" class="form-control"><?= $more_file['detail']; ?></textarea>
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
                                                            <?php if ($more_file['TM'] == "") : ?>

                                                                <button onclick="" class="btn btn-icon btn-secondary " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="feather icon-alert-circle"></i>
                                                                </button>
                                                                <button onclick="" class="btn btn-icon btn-secondary " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="feather icon-corner-up-right"></i>
                                                                </button>
                                                            <?php else : ?>
                                                                <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $more_file['idM']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-alert-circle"></i></button>
                                                                <button onclick="confirmalertunlock_upload_morefile('<?php echo $more_file['orderGT']; ?>')" class="btn btn-icon btn-info " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="feather icon-corner-up-right"></i>
                                                                </button>

                                                                <div class="modal fade" id="exampleModalb<?php echo $more_file['idM']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Morefile (<?php echo $more_file['order_id'] ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_feedback_team" class="dropzone dropzone-area " id="maindropzoneFeedback<?php echo $more_file['id']; ?>">
                                                                                    <!-- <div class="dz-message" style="top: 24%;">Upload Document </div>      -->
                                                                                </form>

                                                                                <input type="text" id="id<?php echo $more_file['idM']; ?>" class="form-control " name="id" value="<?php echo $more_file['id']; ?>" hidden>
                                                                                <input type="text" id="order_id<?php echo $more_file['idM']; ?>" class="form-control " name="order_id" value="<?php echo $more_file['order_id']; ?>" hidden>
                                                                                <input type="text" id="cmid<?php echo $more_file['idM']; ?>" class="form-control " name="cmid" value="<?php echo $more_file['userId']; ?>" hidden>


                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                                    <label for="" style="font-size: 16px;"> Descriptions </label>
                                                                                    <textarea name="descriptions" class="form-control" id="DM1<?php echo $more_file['id']; ?>" rows="5" style="width: 100%"><?= $more_file['more_detail']; ?></textarea>
                                                                                </div>

                                                                            </div>
                                                                            <button type="button" id="uploadsfile<?php echo $more_file['idM']; ?>" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Morefile</button>
                                                                        </div>

                                                                        <div class="modal-footer">


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
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