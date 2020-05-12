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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order id</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th style="width:100px;">DM</th>
                                                    <th>Main file</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>T3 File</th>
                                                    <th>Date Required</th>
                                                    <th>Update Confirm</th>
                                                    <!-- <th>Position</th> -->
                                                    <th>Wage</th>
                                                    <th>T3</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($stock as $stock) { ?>
                                                    <tr>
                                                        <td data-order="<?php echo $stock['orderST'] ?>"><?php echo $stock['orderST'] ?></td>
                                                        <td>
                                                            <?php if (!empty($stock['email'])) : ?>
                                                                <?php echo $stock['email'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (!empty($stock['Username'])) : ?>
                                                                <?php echo $stock['Username'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
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
                                                        <td>
                                                            <?php $orderGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['orderST']])->result_array(); ?>
                                                            <?php if (!empty($orderGT)) : ?>

                                                                <span data-toggle="modal" data-target="#exampleModalGT<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalGT<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $orderGT['order_id'] ?></td>
                                                                                                <td><?php echo $orderGT['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderGT['create_at'] ?></td>
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
                                                            <?php $orderStore = $this->db->get_where('tbl_upload_store', ['store_id' => $stock['upload_store_id']])->result_array(); ?>
                                                            <?php if (!empty($orderStore)) : ?>
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
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th>File name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderStore as $keys => $orderStore) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $orderStore['store_id'] ?></td>
                                                                                                <td><?php echo $orderStore['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderStore['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderStore['create_at'] ?></td>

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
                                                            <?php $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stock['orderST']])->result_array(); ?>

                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalT3<?php echo $stock['orderST']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalT3<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                            <th>Order id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>Create</th>
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
                                                        <td><?php echo $stock['date_required'] ?></td>
                                                        <td>
                                                            <?php if ($stock['update_confirm'] != '') : ?>
                                                                <?php echo $stock['update_confirm'] ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- <td>
                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stock['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $keys => $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>
                                                        </td> -->
                                                        <td>
                                                            <?php if ($stock['wage'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stock['orderST']; ?>"><?php echo $stock['wage']; ?> <i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                                <div class="modal fade" id="exampleModalwage<?php echo $stock['orderST']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <form action="edit_wage_stockadmin" method="POST">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                            <input type="hidden" name="order_id" value="<?php echo $stock['orderST']; ?>">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Wage</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body row" style="text-align: center;margin: 45px 0;">

                                                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">wage</label>
                                                                                            <input type="text" class="form-control" name="wage" value="<?php echo $stock['wage']; ?>" placeholder="Enter wage">
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
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $stock['teamId']; ?>
                                                        </td>
                                                        <td>
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
                                                        </td>
                                                        <td>
                                                            <?php if ($stock['status_approved'] == 1) : ?>
                                                                <span class="badge badge-pill badge-success">Approved</span>
                                                            <?php elseif ($stock['status_approved'] == 2) : ?>
                                                                <span class="badge badge-pill badge-danger">Not Approved</span>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-primary" style="padding: 0.9rem 1rem;"><i class="fa fa-plus-circle"></i></button>
                                                                <button type="button" class="btn btn-warning" style="padding: 0.9rem 1rem;"><i class="fa fa-exclamation-triangle"></i></button>
                                                                <button type="button" class="btn btn-success" id="approved<?php echo $stock['orderST']; ?>" style="padding: 0.9rem 1rem;"><i class="fa fa-check"></i></button>
                                                                <button type="button" class="btn btn-danger" id="order_not_approved<?php echo $stock['orderST']; ?>" style="padding: 0.9rem 1rem;"><i class="fa fa-times"></i></button>
                                                            <?php endif; ?>


                                                            <script type='text/javascript'>
                                                                $('#approved<?php echo $stock['orderST']; ?>').click(function() {
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
                                                                            var order = $("td").attr("data-order");
                                                                            $.ajax({
                                                                                type: 'POST',
                                                                                url: 'order_approverd',
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
                                                                            var order = $("td").attr("data-order");
                                                                            $.ajax({
                                                                                type: 'POST',
                                                                                url: 'order_not_approved',
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