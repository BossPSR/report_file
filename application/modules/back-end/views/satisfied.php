<!-- BEGIN: Content-->

<!-- $arrayForTable = [];
foreach ($order as $upload_main_searchDetail) {


        $temp = [];
        $temp['id'] = $upload_main_searchDetail['id'];
        $temp['order_id'] = $upload_main_searchDetail['order_id'];
        $temp['file_name'] = $upload_main_searchDetail['file_name'];
        $temp['create_at'] = $upload_main_searchDetail['create_at'];
        $temp['path'] = $upload_main_searchDetail['path'];

        $temp['price_file'] = $upload_main_searchDetail['price_file'];
        $temp['userId'] = $upload_main_searchDetail['userId'];
        $temp['cm'] = $upload_main_searchDetail['cm'];
        $temp['date_required'] = $upload_main_searchDetail['date_required'];
        $temp['status_book'] = $upload_main_searchDetail['status_book'];
        $temp['is_check'] = $upload_main_searchDetail['is_check'];

        if (!isset($arrayForTable[$upload_main_searchDetail['order_id']])) {
            $arrayForTable[$upload_main_searchDetail['order_id']] = [];
        }
        $arrayForTable[$upload_main_searchDetail['order_id']][] = $temp;

    
} -->



<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Satisfied</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Satisfied
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
                                <h4 class="card-title">Satisfied</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>Date required</th>
                                                    <th>PriceFile</th>
                                                    <th>Confirmed order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($order_main as $id => $stores) { ?>
                                                    <tr style="background: #ededed;">
                                                        <td><?php echo $stores['order_id'] ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><button data-toggle="modal" data-target="#exampleModal<?php echo $stores['order_id']; ?>" type="button" class="btn btn-success">Confirmed</button></td>
                                                    </tr>

                                                    <?php
                                                    $this->db->select('*,tbl_upload_order.userId AS cm,tbl_upload_store.path AS path_store');
                                                    $this->db->from('tbl_upload_order');
                                                    $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy');
                                                    $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document = tbl_upload_main_search.id_doc');
                                                    $this->db->join('tbl_upload_store', 'tbl_upload_store.id = tbl_upload_main_search.upload_store_id');
                                                    $this->db->where('tbl_upload_order.status_book', 1);
                                                    $this->db->where('tbl_upload_order.order_id', $stores['order_id']);
                                                    $this->db->order_by('tbl_upload_order.date_required', 'desc');
                                                    $order = $this->db->get()->result_array();
                                                    ?>

                                                    <?php foreach ($order as $key => $order) { ?>
                                                        <tr>
                                                            <td><?php echo $order['order_id'] ?></td>
                                                            <td><?php echo $order['cm']; ?></td>
                                                            <td><?php echo $order['file_name']; ?></td>
                                                            <td><?php echo $order['date_required']; ?></td>
                                                            <?php if ($order['price_file'] == '') :   ?>
                                                                <td>-</td>
                                                            <?php else : ?>
                                                                <td>$<?php echo $order['price_file']; ?></td>
                                                            <?php endif; ?>

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
                                                                            <iframe src="<?php echo $order['path_store']; ?>" width="100%" height="500px"></iframe>
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