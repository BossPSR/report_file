<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Delivery</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Delivery
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
                            <div class="card-header">
                                <h4 class="card-title">Delivery</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>OrderId</th>
                                                    <th>Main_file</th>
                                                    <th>GT_File</th>
                                                    <th>Document_File</th>
                                                    <th>Team_File</th>
                                                    <th>create_at</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <?php $i = 1; ?>
                                            <tbody>
                                                <?php foreach ($delivery as  $delivery) { ?>
                                                    <tr>
                                                        <td><?php echo $delivery['order_name'] ?></td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $delivery['order_name']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $delivery['order_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $delivery['order_name']])->result_array(); ?>
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
                                                        <td><span data-toggle="modal" data-target="#exampleModaly<?php echo $delivery['order_name']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModaly<?php echo $delivery['order_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $delivery['order_name']])->result_array(); ?>
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
                                                            <?php if ($delivery['status_book'] == '1') : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $delivery['store_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $delivery['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document_File <?php echo $delivery['store_id'] ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_store', ['store_id' => $delivery['store_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Relive</th>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
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
                                                        <td>


                                                            <span data-toggle="modal" data-target="#exampleModalc<?php echo $delivery['order_name']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalc<?php echo $delivery['order_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Team File <?php echo $delivery['order_name'] ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $delivery['order_name']])->result_array(); ?>
                                                                                    <tr>

                                                                                        <th>Order Id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                        <tr>


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

                                                        </td>
                                                        <td><?php echo $delivery['order_name']; ?></td>
                                                        <td>
                                                            <?php if($delivery['status_delivery_upload']=='0'):?>
                                                            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalUpload<?php echo $delivery['order_name']; ?>">
                                                                Upload
                                                                <span class="sr-only">unread messages</span>
                                                            </button>
                                                            <?php else: ?>
                                                                <button type="button" class="btn btn-outline-secondary" >
                                                                Upload
                                                                <span class="sr-only">unread messages</span>
                                                            </button>
                                                            <?php endif;?>
                                                            <form action="upload_delivery" method="POST" class="form-horizontal">
                                                            <div class="modal fade" id="modalUpload<?php echo $delivery['order_name']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Team File <?php echo $delivery['order_name'] ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $delivery['order_name']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>select</th>

                                                                                        <th>Order ID</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <input type="checkbox" name="select_file[]" value="<?php echo $orderss['id'] ?>">
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
                                                                       <hr><div class="text-center"><h3>Upload</h3></div>
                                                                    
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" name="userId" value="<?php echo $delivery['user'] ?>">
                                                                                    <input type="hidden" name="order_id" value="<?php echo $delivery['order_name'] ?>">
                                                                                    <input type="hidden" name="team_id" value="<?php echo $delivery['teamId'] ?>">
                                                                                    <div class="data-items pb-3">
                                                                                        <div class="data-fields px-2 mt-3">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-12 data-field-col">

                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Select Item</label>
                                                                                                            <?php $select_itemList = $this->db->get('tbl_select_item')->result_array(); ?>
                                                                                                            <select name="select_item_id" class="form-control" id="data-category">
                                                                                                                <?php foreach ($select_itemList as $key => $selectItem) { ?>
                                                                                                                    <option value="<?php echo $selectItem['id']; ?>"><?php echo $selectItem['name_item']; ?></option>
                                                                                                                <?php } ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Search Item</label>
                                                                                                            <input type="text" class="form-control" name="search_item" value="" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Code</label>
                                                                                                            <input type="text" class="form-control" name="code" value="" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Topic</label>
                                                                                                            <textarea class="form-control" name="topic" id="" cols="30" rows="10" required></textarea>

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