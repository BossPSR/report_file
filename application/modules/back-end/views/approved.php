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
                        <h2 class="content-header-title float-left mb-0">Approved</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active"> Approved
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
                                <div class="col-lg-9 col-sm-12">
                                    <h4 class="card-title"> Approved</h4>
                                </div>
                                <div class="col-lg-1 col-sm-12 text-center">
                                    <?php if ($Approved == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($Approved as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                                <!-- <div class="col-lg-2 col-sm-12 text-right" style="max-width: 11.66667%;">
                                    <button type="button" data-toggle="modal" data-target="#modalUpload" class="btn btn-primary mr-1 mb-1">+ Upload</button>
                                </div> -->
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>CM</th>
                                                    <th>Order id</th>
                                                    <th>Order date</th>
                                                    <th>Main file</th>
                                                    <th>GT file</th>
                                                    <th>DM file</th>
                                                    <th>Team file</th>
                                                    <th>TM</th>
                                                    <th>Feedback file</th>
                                                    <th>Feedback detail</th>
                                                    <th>Commit</th>
                                                    <th>Rateing</th>
                                                    <th>Status</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <?php $i = 1; ?>
                                            <tbody>
                                                <?php foreach ($Approved as $key => $Approved) { ?>
                                                    <tr>
                                                        <!-- userId -->
                                                        <td><?php echo $Approved['userId'] ?></td>

                                                        <!-- order_id -->
                                                        <td><?php echo $Approved['order_id'] ?></td>

                                                        <!-- date_required -->
                                                        <td><?php echo $Approved['date_required'];  ?></td>

                                                        <!-- Main File -->
                                                        <td>
                                                            <span data-toggle="modal" data-target="#main<?php echo $Approved['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="main<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $Approved['order_id']])->result_array(); ?>
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
                                                            <?php $ordergt = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $Approved['order_id']])->result_array(); ?>
                                                            <?php if (!empty($ordergt)) : ?>
                                                                <span data-toggle="modal" data-target="#gt<?php echo $Approved['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="gt<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        <?php foreach ($ordergt as $keys => $ordergt) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $ordergt['order_id'] ?></td>
                                                                                                <td><?php echo $ordergt['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $ordergt['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $ordergt['create_at'] ?></td>

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
                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $Approved['order_id']])->result_array(); ?>
                                                            <?php if (!empty($dm_cc)) : ?>
                                                                <span data-toggle="modal" data-target="#dm_cc<?php echo $Approved['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="dm_cc<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $Approved['order_id']])->result_array();
                                                            ?>

                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#orderT<?php echo $Approved['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="orderT<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                    <span data-toggle="modal" data-target="#tfoder<?php echo $orderT['group']; ?>"><i class="feather icon-folder" style="font-size: 25px;"></i></span>
                                                                                                    <div class="modal fade" id="tfoder<?php echo $orderT['group']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <?php $orderT_sub = $this->db->get_where('tbl_upload_order_team', ['order_id' => $Approved['order_id'], 'group' => $orderT['group']])->result_array(); ?>
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

                                                        <!-- teamId -->
                                                        <td>
                                                            <?php if ($Approved['teamId'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php echo $Approved['teamId']; ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Feedback file -->
                                                        <td>
                                                            <?php $feedback = $this->db->get_where('tbl_feedback', ['order_id' => $Approved['order_id']])->row_array(); ?>

                                                            <?php if ($feedback == true) : ?>
                                                                <span data-toggle="modal" data-target="#feedback<?php echo $Approved['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="feedback<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Feedback file</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <?php $filef = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback['id']])->result_array(); ?>

                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th>File name</th>
                                                                                            <th>File</th>
                                                                                            <th>Create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($filef as $keys => $filef) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $feedback['order_id'] ?></td>
                                                                                                <td><?php echo $filef['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $filef['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $filef['create_at'] ?></td>
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

                                                        <!-- Feedback detail -->
                                                        <td>
                                                            <?php $fdetail = $this->db->get_where('tbl_feedback', ['order_id' => $Approved['order_id']])->result_array(); ?>

                                                            <?php if ($fdetail == true) : ?>
                                                                <span data-toggle="modal" data-target="#fdetail<?php echo $Approved['order_id']; ?>"><i class="feather icon-clipboard" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="fdetail<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Feedback detail</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th style="width: 400px;">Note</th>
                                                                                            <th>Create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($fdetail as $keys => $fdetail) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $fdetail['order_id'] ?></td>
                                                                                                <td><?php echo $fdetail['feedback_detail'] ?></td>
                                                                                                <td><?php echo $fdetail['create_at'] ?></td>
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
                                                        <!-- Feedback detail -->
                                                        <td>
                                                            <?php if ($Approved['note_approved'] != '') : ?>
                                                                <span data-toggle="modal" data-target="#ratedetail<?php echo $Approved['order_id']; ?>"><i class="feather icon-clipboard" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="ratedetail<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Commit detail</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <?= $Approved['note_approved']; ?>
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
                                                            <div class="rate" style="text-align: center;">
                                                                <input type="radio" class="star" id="star5" name="rate" value="5" <?php echo $Approved['stars_score_user'] == '5' ? 'checked' : '' ?> />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" class="star" id="star4" name="rate" value="4" <?php echo $Approved['stars_score_user'] == '4' ? 'checked' : '' ?>   />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" class="star" id="star3" name="rate" value="3" <?php echo $Approved['stars_score_user'] == '3' ? 'checked' : '' ?>  />
                                                                <label for="star3" class="star" title="text">3 stars</label>
                                                                <input type="radio" class="star" name="rate" id="star2" value="2" <?php echo $Approved['stars_score_user'] == '2' ? 'checked' : '' ?>  />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" class="star" id="star1" name="rate" value="1" <?php echo $Approved['stars_score_user'] == '1' ? 'checked' : '' ?>  />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($Approved['status_cp'] == "") : ?>
                                                                -
                                                            <?php else : ?>

                                                                <?php if ($Approved['status_cp'] == 'complete' && $Approved['status_admin'] == '0') : ?>
                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                <?php elseif ($Approved['status_cp'] == 'notcomplete' && $Approved['status_admin'] == '0') : ?>
                                                                    <span class="badge badge-pill badge-primary">Not complete</span>
                                                                <?php elseif ($Approved['status_cp'] == 'rewrite') : ?>
                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                <?php elseif ($Approved['status_admin'] == '0') : ?>
                                                                    <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                                <?php elseif ($Approved['status_admin'] == '1') : ?>
                                                                    <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($Approved['status_cp'] == "complete" || $Approved['check_upload_to_main_search'] == "1") : ?>
                                                                <button type="button" class="btn btn-secondary" data-toggle="modal"><i class="feather icon-upload"></i> </button>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload<?php echo $Approved['order_id']; ?>"><i class="feather icon-upload"></i> </button>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="upload<?php echo $Approved['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="add_to_upload_main_search_approved" method="POST" class="form-horizontal">
                                                                            <div class="modal-body">
                                                                                <input type="hidden" name="userId" value="<?php echo $Approved['userId'] ?>">
                                                                                <input type="hidden" name="teamId" value="<?php echo $Approved['teamId'] ?>">
                                                                                <input type="hidden" name="order_id" value="<?php echo $Approved['order_id'] ?>">
                                                                                <div class="data-items pb-3">
                                                                                    <div class="data-fields px-2 mt-3">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 data-field-col">

                                                                                                <div class="form-group hiddens<?php echo $Approved['order_id']; ?>">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Select Item</label>
                                                                                                        <?php $select_itemList = $this->db->get('tbl_select_item')->result_array(); ?>
                                                                                                        <select name="select_item_id" class="form-control select2" id="">
                                                                                                            <?php foreach ($select_itemList as $key => $selectItem) { ?>
                                                                                                                <option value="<?php echo $selectItem['id']; ?>"><?php echo $selectItem['name_item']; ?></option>
                                                                                                            <?php } ?>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group hiddens">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Organization</label>
                                                                                                        <select name="organization" class="form-control " id="">
                                                                                                            <option value="" selected disabled>select Organization</option>
                                                                                                            <option value="A">A</option>
                                                                                                            <option value="B">B</option>
                                                                                                            <option value="C">C</option>
                                                                                                            <option value="D">D</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group hiddens">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Cp/Ncp</label>
                                                                                                        <select name="cp" class="form-control " id="">
                                                                                                            <option value="" selected disabled>select Cp/Ncp</option>
                                                                                                            <option value="complete">Complete</option>
                                                                                                            <option value="notcomplete">NotComplete</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group hiddens<?php echo $Approved['order_id']; ?>">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Code</label>
                                                                                                        <input type="text" class="form-control req<?php echo $Approved['order_id']; ?>" name="code" value="" required placeholder="Code">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group hiddens<?php echo $Approved['order_id']; ?>">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Topic</label>
                                                                                                        <textarea class="form-control req<?php echo $Approved['order_id']; ?>" name="topic" id="" cols="30" rows="10" required placeholder="Topic"></textarea>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <?php
                                                                                                $this->db->order_by('id', 'DESC');
                                                                                                $Dm = $this->db->get('tbl_upload_main_search')->row_array();
                                                                                                ?>
                                                                                                <div class="form-group hiddens<?php echo $Approved['order_id']; ?>">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Id Document</label>
                                                                                                        <input type="text" class="form-control" value="DM<?php echo $Dm == false ? '1' : $Dm['id'] + 1;  ?>" readonly>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="form-group">
                                                                                                    <fieldset>
                                                                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                            <input type="checkbox" class="ckeck<?php echo $Approved['order_id']; ?>" data-order="<?php echo $Approved['order_id']; ?>">
                                                                                                            <span class="vs-checkbox">
                                                                                                                <span class="vs-checkbox--check">
                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                            <span class="">Add DM</span>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>

                                                                                                <?php
                                                                                                $this->db->order_by('id', 'DESC');
                                                                                                $Dm = $this->db->get('tbl_upload_main_search')->result_array();
                                                                                                ?>
                                                                                                <div class="form-group teambox<?php echo $Approved['order_id']; ?>" style="display: none">
                                                                                                    <div class="controls">
                                                                                                        <label for="data-name">Id Document</label>
                                                                                                        <select name="dmsub" class="form-control select2" id="dmsub<?php echo $Approved['order_id']; ?>">
                                                                                                            <option value="" disabled selected> -- selete -- </option>
                                                                                                            <?php foreach ($Dm as $key => $Dm) { ?>
                                                                                                                <option value="<?php echo $Dm['id']; ?>"><?php echo $Dm['id_doc']; ?></option>
                                                                                                            <?php } ?>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
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
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tfoot>
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

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');
        if ($('.ckeck' + o).is(":checked")) {
            $(".teambox" + o).fadeIn("slow");
            $("#dmsub" + o).prop('required', true);
            $(".req" + o).prop('required', false);
            $(".hiddens" + o).hide();
        } else {
            $(".teambox" + o).hide();
            $("#dmsub" + o).prop('required', false);
            $(".req" + o).prop('required', true);
            $(".hiddens" + o).fadeIn("slow");
        }


    });
</script>