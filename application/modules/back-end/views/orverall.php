<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Over All</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Over All
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
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                    <h4 class="card-title">Over All</h4>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-6 text-center">
                                    <?php if ($order_all == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $p = 0; ?>
                                        <?php foreach ($order_all as $key => $dataza) {
                                            if (date("Y-m-d") > $dataza['end_time']) {
                                                $p++;
                                            }
                                        } ?>
                                        <h3 class="card-title "><?php echo $p += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> Not Expired </h3>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-6 text-center">
                                    <?php if ($order_all == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $k = 0; ?>
                                        <?php foreach ($order_all as $key => $dataga) {
                                             if (date("Y-m-d") < $dataga['end_time']) {
                                                $k++;
                                            }
                                        } ?>
                                        <h3 class="card-title "><?php echo $k += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> Expired </h3>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-6 text-center">
                                    <?php if ($order_all == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_all as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 text-right">
                                    <a href="orvernotwork" class="btn btn-success mr-1 mb-1">
                                        No Work <span class="badge badge-pill badge-warning" id="refresh_nw"><?php echo count($no_work); ?></span>
                                    </a>
                                    <a href="orvernotsubmit" class="btn btn-warning mr-1 mb-1">
                                        Not Submit <span class="badge badge-pill badge-success" id="refresh_ns"><?php echo count($not_submit); ?></span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Step</th>
                                                    <th>Order Id</th>
                                                    <th>DM File</th>
                                                    <th>DM</th>
                                                    <th>User</th>
                                                    <th>Country</th>
                                                    <th>T3</th>
                                                    <th>Organization</th>
                                                    <!-- <th>Main File</th>
                                                    <th>GT File</th> -->
                                                    <th>Order Date</th>
                                                    <th>Date required</th>
                                                    <th>PriceFile</th>
                                                    <th>Wage</th>
                                                    <th>Delivery</th>
                                                    <th>Procress</th>
                                                    <th>Status</th>
                                                    <th>Client Feedback</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_all as $id => $stores) {

                                                ?>
                                                    <tr>
                                                        <td><button class="btn btn-primary" type="button" id="click_step<?php echo $stores['order']; ?>" onclick="click_step('<?php echo $stores['order']; ?>');"><?php echo $stores['click_step']; ?></button></td>
                                                        <td><?php echo $stores['order'] ?></td>
                                                        <td>
                                                            <?php if (empty($stores['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $stores['order']])->result_array(); ?>
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
                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['order']])->result_array(); ?>
                                                            <?php if (!empty($dm_cc)) : ?>
                                                                <span data-toggle="modal" data-target="#overall<?php echo $stores['order']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="overall<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <td><?php echo $stores['userId']; ?></td>
                                                        <td>
                                                            <?php echo $stores['countryName'] == '' ? '-' : $stores['countryName']; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (!empty($stores['teamId'])) : ?>
                                                                <?php echo $stores['teamId']; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['organization'] == "") : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php echo $stores['organization']; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <!-- <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $stores['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $stores['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stores['order_id']])->result_array(); ?>
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
                                                            <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stores['order_id']])->result_array(); ?>
                                                            <?php if (!empty($order)) : ?>
                                                            <span data-toggle="modal" data-target="#exampleModalb<?php echo $stores['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalb<?php echo $stores['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                        </td> -->
                                                        <td><?php echo $stores['createOr']; ?></td>
                                                        <td>
                                                            <?php if (date("Y-m-d H:i:s") >= $stores['requiredOr']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d H:i:s', strtotime($stores['requiredOr'])); ?>
                                                                <div id="clock-b<?php echo $stores['order']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $stores['order']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
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
                                                        <?php if ($stores['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $stores['price_file']; ?></td>
                                                        <?php endif; ?>
                                                        <?php if ($stores['wage'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $stores['wage']; ?></td>
                                                        <?php endif; ?>
                                                        <td>
                                                            <?php if ($stores['status_team'] == 0) : ?>
                                                                <span class="badge badge-pill badge-danger">Procressing</span>
                                                            <?php elseif ($stores['status_team'] == 1) : ?>
                                                                <span class="badge badge-pill badge-info">Complete</span>
                                                            <?php elseif ($stores['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <?php $cancel_sa = $this->db->get_where('tbl_cancel', ['order_id' => $stores['order']])->row_array(); ?>
                                                            <?php if ($cancel_sa == true) : ?>
                                                                <span class="badge badge-pill badge-danger"><?= $cancel_sa['status_who']; ?></span>
                                                            <?php else : ?>
                                                                -
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

                                                        <!-- Client Feedback -->
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 1, 're_feedback' => 1])->result_array();
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
                                                        <!-- <td><span  class="badge badge-pill badge-success">Successful payment</button></td> -->
                                                    </tr>

                                                    <div class="modal fade" id="exampleModal<?php echo $stores['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script>
    function click_step(order_id) {
        $.ajax({
            url: 'click_step',
            method: "POST",
            data: {
                order_id: order_id
            },
            success: function(getData) {

                $('#click_step' + order_id).text(getData);
            }
        });
    }
</script>

<!-- END: Content-->
<script>
    setInterval(function() {
        refresh_nw();
        refresh_ns();
    }, 5000);

    function refresh_nw() {

        $.ajax({
            url: 'refresh_nw',
            success: function(getData) {
                $('#refresh_nw').text(getData);
            }
        });

    }

    function refresh_ns() {

        $.ajax({
            url: 'refresh_ns',
            success: function(getData) {
                $('#refresh_ns').text(getData);
            }
        });

    }
</script>