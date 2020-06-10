<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Order Result for Not Approved</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Order Result for Not Approved
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
                                    <h4 class="card-title">Order Result for Not Approved</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($not_Approved == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($not_Approved as $key => $datata) {
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
                                                    <th>No.</th>
                                                    <th>Order id</th>
                                                    <th>Document name</th>
                                                    <th>File Name</th>
                                                    <th>Date_required</th>
                                                    <th>Tool</th>

                                                </tr>
                                            </thead>
                                            <?php $i = 1; ?>
                                            <tbody>
                                            <?php foreach ($not_Approved as $key => $not_Approved) { ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $not_Approved['or'] ?></td>
                                                    <td><?php echo $not_Approved['fa'] ?></td>
                                                    <td><span data-toggle="modal" data-target="#exampleModala<?php echo $not_Approved['or']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $not_Approved['or']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order_team', ['order_id' => $not_Approved['or']])->result_array(); ?>
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
                                                    <td><?php echo $not_Approved['date_required'] ?></td>

                                                    <td>
                                                    <?php if($not_Approved['status_approved_upload']==0):?>
                                                        <button type="button" class="btn btn-primary mr-1 mb-1"  data-toggle="modal" data-target="#modalUpload<?php echo $not_Approved['or']; ?>" >Upload</button>
                                                    <?php else:?>
                                                        <div class="badge badge-success">Success</div>
                                                    <?php endif;?>
                                                    </td>
                                                    <div class="modal fade" id="modalUpload<?php echo $not_Approved['or']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="add_to_upload_main_search_not_approved" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="userId" value="<?php echo $not_Approved['userId'] ?>">
                                                                        <input type="hidden" name="teamId" value="<?php echo $not_Approved['teamId'] ?>">
                                                                        <input type="hidden" name="order_id" value="<?php echo $not_Approved['or'] ?>">
                                                                        <div class="data-items pb-3">
                                                                            <div class="data-fields px-2 mt-3">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 data-field-col">

                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">Select Item</label>
                                                                                                <?php $select_itemList = $this->db->get('tbl_select_item')->result_array();?>
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

                                                </tr>
                                            <?php }?>
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