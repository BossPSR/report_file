<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">My Stock</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">My Stock
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <?php
        $this->db->where('status', 0);
        $this->db->from('tbl_upload_team');
        $count_all = $this->db->count_all_results(); // Produces an integer, like 17
        ?>
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
                                    <h4 class="card-title">My Stock</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <h3 class="card-title "><?php echo $count_all; ?></h3>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>order id</th>
                                                    <th>Flie Name</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>Date_Required</th>
                                                    <th>position</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($stock as $stock) { ?>
                                                <tr>
                                                    <td><?php echo $stock['order_id'] ?></td>
                                                    <td><?php echo $stock['file_name'] ?></td>
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
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['order_id']])->result_array(); ?>
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
                                                            </div></td>
                                                    <td><span data-toggle="modal" data-target="#exampleModalb<?php echo $stock['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalb<?php echo $stock['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['order_id']])->result_array(); ?>
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
                                                            </div></td>

                                                            <td>
                                                            <?php if ($stock['status_book'] == '1') : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $stock['store_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $stock['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document_File <?php echo $stock['store_id'] ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_store', ['store_id' => $stock['store_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Relive</th>
                                                                                            <th>Store id</th>
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
                                                                                                <td><?php echo $orderss['store_id'] ?></td>
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
                                                    <td><?php echo $stock['date_required'] ?></td>

                                                    <td>
                                                    <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stock['position']])->result_array(); ?>
                                                    <?php foreach ($position_name as $keys => $position_name) { ?>
                                                        <?php echo $position_name['name_item'] ?>
                                                    <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php if($stock['status']==0): ?>
                                                        <div class="badge badge-warning">รอการรับของทีมงาน</div>
                                                    <?php else:?>
                                                        <div class="badge badge-success">รับออเดอร์แล้ว</div>
                                                        <?php endif?> 
                                                    </td>
                                                </tr>
                                            <?php }?>
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