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
                        <h2 class="content-header-title float-left mb-0">Bookmark</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Bookmark
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">

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
                                <div class="col-10">
                                    <h4 class="card-title">Bookmark</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($bookmark == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($bookmark as $key => $datata) {
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
                                        <table class="table zero-configuration2" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>order Id</th>
                                                    <th>User Id</th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>Team File</th>
                                                    <th>Date Required</th>
                                                    <th>Price</th>
                                                    <th>Wage</th>
                                                    <th>Status</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bookmark as $keyBook => $bookmark) { ?>



                                                    <tr>
                                                        <td><?php echo $bookmark['orderby'] ?></td>
                                                        <td><?php echo $bookmark['user_name'] ?></td>
                                                        <td>
                                                            <?php if (empty($bookmark['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->result_array(); ?>
                                                                <?php foreach ($show_dm as $keyBook => $show_dm) { ?>

                                                                    <?php if ($show_dm['id_document'] == '') : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <span class="badge badge-primary"><?php echo $show_dm['id_document'] ?></span>
                                                                    <?php endif; ?>

                                                                <?php } ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark['orderby']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark['orderby']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
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
                                                            <?php $status = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark['orderby']])->row_array();  ?>
                                                            <?php if ($status == true) : ?>

                                                                <span data-toggle="modal" data-target="#exampleModaly<?php echo $bookmark['orderby']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModaly<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark['orderby']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
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

                                                            <?php if ($bookmark['status_book'] == '1') : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['orderby']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->result_array(); ?>
                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $dm_cc['id_document']])->row_array(); ?>

                                                                                    <?php
                                                                                    $this->db->where('store_id', $dm_c11['upload_store_id']);

                                                                                    $orderssc = $this->db->get('tbl_upload_store')->result_array();
                                                                                    ?>
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
                                                                                                <?php foreach ($orderssc as $keys => $orderssc) { ?>
                                                                                                    <?php if ($orderssc['section'] == $dm_c11['section'] || $orderssc['section'] == 0) {
                                                                                                    ?>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <?php if ($orderssc['relive_status'] == '0') : ?>
                                                                                                                    -
                                                                                                                <?php else : ?>
                                                                                                                    <div class="badge badge-primary">Relive</div>
                                                                                                                <?php endif ?>
                                                                                                            </td>
                                                                                                            <td><?php echo $orderssc['store_id'] ?></td>
                                                                                                            <td><?php echo $orderssc['file_name'] ?></td>
                                                                                                            <td><a href="<?php echo $orderssc['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                            <td><?php echo $orderssc['create_at'] ?></td>
                                                                                                        </tr>
                                                                                                <?php }
                                                                                                }
                                                                                                ?>
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

                                                            <?php $status = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['orderby']])->row_array();  ?>
                                                            <?php if ($status == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['id_orderBuy']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $bookmark['id_orderBuy']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Team File </h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['id_orderBuy']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Relive</th>
                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>

                                                                                                <td>
                                                                                                    <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                        -
                                                                                                    <?php else : ?>
                                                                                                        <div class="badge badge-primary">Relive</div>
                                                                                                    <?php endif ?>
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

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>

                                                        </td>
                                                        <td><?php echo $bookmark['date_re'] ?></td>
                                                        <td><?php echo $bookmark['price_save'] ?></td>
                                                        <td>
                                                            <?php if ($bookmark['wageT']) { ?>
                                                                <?php echo $bookmark['wageT'] ?>
                                                            <?php }else{ ?>
                                                                -
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($bookmark['statusB'] == "notcomplete") : ?>
                                                                <div class="badge badge-primary">Rewrite</div>
                                                            <?php else : ?>
                                                                <div class="badge badge-success">Original</div>
                                                            <?php endif ?>
                                                        </td>


                                                        <td>

                                                            <!-- <?php $show_dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->row_array(); ?>

                                                            <?php $show_dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $show_dm_c['id_document']])->row_array(); ?>

                                                            <?php $show_dm_c2 = $this->db->get_where('tbl_upload_store', ['store_id' => $show_dm_c1['upload_store_id'], 'status_check_drop' => '11'])->row_array(); ?>
                                                            <?php if ($show_dm_c2 == true) : ?>
                                                                <a href="" data-toggle="modal" data-target="#dropW<?php echo $bookmark['orderby']; ?>" class="btn btn-icon btn-success "><i class="feather icon-download-cloud"></i></a>
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#dropW<?php echo $bookmark['orderby']; ?>" class="btn btn-icon btn-primary "><i class="feather icon-download-cloud"></i></a>
                                                            <?php endif; ?> -->

                                                            <?php if ($bookmark['status_delivery'] == '1') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#exampleModalu<?php echo $bookmark['orderby']; ?>"><i class="feather icon-navigation"></i></button>
                                                            <?php endif; ?>

                                                            <div class="modal fade" id="exampleModalu<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delivery File</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h3>
                                                                                <p>delivery file </p>
                                                                            </h3>
                                                                            <form action="sendEmail_delivery_pay" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $bookmark['orderby']; ?>">
                                                                                <input type="hidden" name="dm_id[]" value="<?php echo $bookmark['id_document']; ?>">

                                                                                <?php $dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->result_array(); ?>
                                                                                <?php foreach ($dm_c as $key => $dm_c) { ?>
                                                                                    <?php $dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $dm_c['id_document']])->row_array(); ?>

                                                                                    <?php

                                                                                    $this->db->where('store_id', $dm_c1['upload_store_id']);

                                                                                    $orderss = $this->db->get('tbl_upload_store')->result_array();

                                                                                    ?>

                                                                                    <?php if (!empty($dm_c['id_document'])) : ?>
                                                                                        <p><b>
                                                                                                <h3><?php echo $dm_c['id_document']; ?></h3>
                                                                                            </b></p>

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
                                                                                                <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                                    <?php if ($orderss['section'] == $dm_c1['section'] || $orderss['section'] == 0) {


                                                                                                    ?>
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
                                                                                                <?php }
                                                                                                }
                                                                                                ?>
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
                                                                                        <?php $orderss_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['order_id']])->result_array(); ?>
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

                                                            <!-- <div class="modal fade" id="dropW<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Drop Document (<?php echo $bookmark['orderby']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_store_book" class="dropzone dropzone-area" id="maindropzone<?php echo $bookmark['orderby']; ?>">
                                                                                    <input type="text" id="DM2<?php echo $bookmark['orderby']; ?>" class="form-control " name="DM" value="<?php echo $bookmark['id_document'] ?>" hidden>

                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <br>


                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for=""> DM </label>
                                                                                <?php $book1 = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->result_array(); ?>
                                                                                <select class="form-control" name="DM" id="DM1<?php echo $bookmark['orderby']; ?>">
                                                                                    <?php foreach ($book1 as $key => $book1) { ?>
                                                                                        <option value="<?php echo $book1['id_document'] ?>"><?php echo $book1['id_document'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="uploadsfile<?php echo $bookmark['orderby']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                            <script>
                                                                $("#DM1<?php echo $bookmark['orderby']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $("#DM2<?php echo $bookmark['orderby']; ?>").val(value);
                                                                }).change();
                                                            </script>

                                                            <script>
                                                                var x = document.getElementById("DM1<?php echo $bookmark['orderby']; ?>").value;
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $bookmark['orderby']; ?> = new Dropzone("#maindropzone<?php echo $bookmark['orderby']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfile<?php echo $bookmark['orderby']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone<?php echo $bookmark['orderby']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    myDropzone<?php echo $bookmark['orderby']; ?>.processQueue();
                                                                    myDropzone<?php echo $bookmark['orderby']; ?>.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: false,
                                                                        });
                                                                        setTimeout(function() {
                                                                            location.href = "Bookmark"
                                                                        }, 1000);
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


<script>
    document.getElementById("upload_de").addEventListener("click", function() {
        var x = document.getElementById("delivery").length;


        if (x == '') {
            swal("Warning!", "Can not be  Not Empty", "warning", {
                button: true,
            });
        } else {
            function doTestClick() {
                frm_test.submit(); // submit form ด้วย Javascript
            };
        }

    });
</script>
<!-- <script type="text/javascript">
    function getDataFromDb() {
        $.ajax({
            url: "ready_refresh",
            success: function(getData) {
                var numData = JSON.parse(getData);
                var dataTable = "";
                if (numData.successfully === true) {

                    for (let index = 0; index < numData.list.length; index++) {

                        if (numData.list[index].status_pay == 0) {
                            dataTable = "<div class='badge badge-warning'>ยังไม่ได้ชำระเงิน</div>";
                        } else {
                            dataTable = "<div class='badge badge-success'>ชำระเงินเรียบร้อยแล้ว</div>";
                        }
                        document.getElementById("test" + index).innerHTML = dataTable;

                    }


                }



            }
        });
    };

    setInterval(getDataFromDb, 2000);
</script> -->