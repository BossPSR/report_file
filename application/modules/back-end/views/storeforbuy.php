<!-- BEGIN: Content-->
<?php





$arrayForTable = [];
foreach ($store as $upload_main_searchDetail) {
    $temp = [];
    $temp['id'] = $upload_main_searchDetail['id'];
    $temp['order_id'] = $upload_main_searchDetail['order_id'];
    $temp['file_name'] = $upload_main_searchDetail['file_name'];
    $temp['create_at'] = $upload_main_searchDetail['create_at'];
    $temp['path'] = $upload_main_searchDetail['path'];
    $temp['price'] = $upload_main_searchDetail['price'];
    $temp['price_file'] = $upload_main_searchDetail['price_file'];

    if (!isset($arrayForTable[$upload_main_searchDetail['userId']])) {
        $arrayForTable[$upload_main_searchDetail['userId']] = [];
    }
    $arrayForTable[$upload_main_searchDetail['userId']][] = $temp;
}



?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Checking Order</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Checking Order
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
                                <h4 class="card-title">Checking Order</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>File</th>
                                                    <th>PriceFile</th>
                                                    <th>create_at</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $i = 1;
                                            foreach ($arrayForTable as $id => $stores) {
                                                foreach ($stores as $key => $store) {
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <?php $store_name   = $this->db->get_where('tbl_user', ['id' => $id])->row_array(); ?>

                                                            <td><?php echo $store_name['username']; ?></td>

                                                            <td><?php echo $store['file_name']; ?></td>
                                                            <td> <span data-toggle="modal" data-target="#exampleModal<?php echo $store['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span></td>
                                                            <?php if ($store['price'] == '') :   ?>
                                                                <td>-</td>
                                                            <?php else : ?>
                                                                <td>$<?php echo $store['price']; ?></td>
                                                            <?php endif; ?>
                                                            <td><?php echo $store['create_at']; ?></td>
                                                            <td>
                                                                <button onclick="confirmalertunlock('<?php echo $store['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    Reject
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        </tfoot>
                                                        <div class="modal fade" id="exampleModal<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">StoreFile</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                        <div class="modal-body">
                                                                            <div class="btn-group" role="group" aria-label="Basic example" style="margin: 13px 21px;">
                                                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModallCenter<?php echo $store['id']; ?>">
                                                                                    Satisfired

                                                                                </button>
                                                                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModallCenterb<?php echo $store['id']; ?>">
                                                                                    Not Satisfired

                                                                                </button>
                                                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $store['id']; ?>">
                                                                                    Reject

                                                                                </button>
                                                                                <!-- <span >A = 50</span> -->
                                                                                <!-- <span >B = 20</span> -->
                                                                            </div>
                                                                            <iframe src="<?php echo $store['path']; ?>" width="100%" height="500px"></iframe>
                                                                            <input type="hidden" class="form-control" name="id" value="<?php echo $store['id']; ?>">
                                                                            <div class="data-items pb-3">
                                                                                <div class="data-fields px-2 mt-3">
                                                                                    <div class="row">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">


                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                            <div class="modal fade" id="exampleModallCenter<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Satisfired</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body row" >
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="basicInput">Document ID</label>
                                                                                    <input type="text" name="Document" class="form-control" placeholder="Enter Document ID">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Customer code</label>
                                                                                    <input type="text" class="form-control" name="Customer" value="" placeholder="Enter Customer code" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Order</label>
                                                                                    <input type="text" class="form-control" name="Document" value="" placeholder="Enter Order" readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">price</label>
                                                                                    <input type="text" class="form-control" name="username" placeholder="Enter price">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Date required</label>
                                                                                    <input type="text" class="form-control" name="Daterequired"  value=""placeholder="Enter Date required" readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade" id="exampleModallCenterb<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade B</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                            <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=complete&grad=B&price=20" class="btn btn-success">Complete</a>
                                                                            <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=notcomplete&grad=B&price=20" class="btn btn-danger">Not Complete</a>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade" id="exampleModallCenterc<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade C</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                            <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=complete&grad=C&price=10" class="btn btn-success">Complete</a>
                                                                            <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=notcomplete&grad=C&price=10" class="btn btn-danger">Not Complete </a>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php  } ?>
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                    <?php  } ?>

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