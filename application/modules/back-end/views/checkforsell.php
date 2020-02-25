<!-- 
$arrayForTable = [];
foreach ($store as $upload_main_searchDetail) {
    $temp = [];
    $temp['id'] = $upload_main_searchDetail['id'];
    $temp['store_id'] = $upload_main_searchDetail['store_id'];
    $temp['file_name'] = $upload_main_searchDetail['file_name'];
    $temp['is_check'] = $upload_main_searchDetail['is_check'];
    $temp['create_at'] = $upload_main_searchDetail['create_at'];
    $temp['path'] = $upload_main_searchDetail['path'];
    $temp['price_file'] = $upload_main_searchDetail['price_file'];
    $temp['status_cp'] = $upload_main_searchDetail['status_cp'];
    $temp['userId'] = $upload_main_searchDetail['userId'];
    $temp['status_chack'] = $upload_main_searchDetail['status_chack'];
    $temp['section'] = $upload_main_searchDetail['section'];
    if (!isset($arrayForTable[$upload_main_searchDetail['userId']])) {
        $arrayForTable[$upload_main_searchDetail['userId']] = [];
    }
    $arrayForTable[$upload_main_searchDetail['userId']][] = $temp;
} -->





<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Check For sell</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Check For sell
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
                                <h4 class="card-title">Check For sell</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>File</th>
                                                    <th>section</th>
                                                    <th>PriceFile</th>
                                                    <th>create_at</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($store as $keys => $orders) { ?>
                                                    <?php if ($orders['status_chack']) : ?>

                                                    <?php else : ?>

                                                        <tr style="background: #ededed;">
                                                            <th><?php echo $i++ ; ?></th>
                                                            <td><?php echo $orders['store_id']; ?></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <a href="check_com?id=<?php echo $orders['store_id']; ?>" class="btn btn-success " aria-haspopup="true" aria-expanded="false">
                                                                    Done <?php echo $orders['store_id']; ?>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <?php $check_for = $this->db->order_by('store_id','asc')->get_where('tbl_upload_store', ['store_id' => $orders['store_id']])->result_array(); ?>
                                                        <?php foreach ($check_for as $keys => $check_for) { ?>
                                                            <tr>
                                                                <td><?php echo $i++ ; ?></td>
                                                                <td><?php echo $orders['store_id']; ?></td>
                                                                <td>
                                                                    <?php echo $check_for['userId']; ?>
                                                                </td>
                                                                <td><?php echo $check_for['file_name']; ?></td>
                                                                <td> <span data-toggle="modal" data-target="#exampleModal<?php echo $check_for['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></span></td>
                                                                <td>
                                                                    <select class="form-control" name="id_status" onchange="location = this.value;">
                                                                        <option value="" selected disabled>Select Section</option>
                                                                        <option value="store_section?id_order=<?php echo $check_for['id']; ?>&id_section=1" <?php if ($check_for['section'] == 1) echo 'selected'; ?>>section1</option>
                                                                        <option value="store_section?id_order=<?php echo $check_for['id']; ?>&id_section=2" <?php if ($check_for['section'] == 2) echo 'selected'; ?>>section2</option>
                                                                        <option value="store_section?id_order=<?php echo $check_for['id']; ?>&id_section=3" <?php if ($check_for['section'] == 3) echo 'selected'; ?>>section3</option>
                                                                        <option value="store_section?id_order=<?php echo $check_for['id']; ?>&id_section=4" <?php if ($check_for['section'] == 4) echo 'selected'; ?>>section4</option>
                                                                        <option value="store_section?id_order=<?php echo $check_for['id']; ?>&id_section=5" <?php if ($check_for['section'] == 5) echo 'selected'; ?>>section5</option>
                                                                    </select>
                                                                </td>
                                                                <?php if ($check_for['price_file'] == '') :   ?>
                                                                    <td>-</td>
                                                                <?php else : ?>
                                                                    <td>$<?php echo $check_for['price_file']; ?></td>
                                                                <?php endif; ?>

                                                                <td><?php echo $check_for['create_at']; ?></td>
                                                                <td>


                                                                    <button onclick="confirmalertunlock('<?php echo $check_for['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                        Reject
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="exampleModal<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">StoreFile</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="back_store_check_store_add_com" method="POST" class="form-horizontal">
                                                                            <div class="modal-body">
                                                                                <div class="btn-group" role="group" aria-label="Basic example" style="margin: 13px 21px;">
                                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModallCenter<?php echo $orders['id']; ?>">
                                                                                        grade A <span class="badge badge-light">50</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModallCenterb<?php echo $orders['id']; ?>">
                                                                                        grade B <span class="badge badge-light">20</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $orders['id']; ?>">
                                                                                        grade C <span class="badge badge-light">10</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <!-- <span >A = 50</span> -->
                                                                                    <!-- <span >B = 20</span> -->
                                                                                </div>

                                                                                <iframe src="<?php echo $orders['path']; ?>" width="100%" height="600px"></iframe>
                                                                                <input type="hidden" class="form-control" name="id" value="<?php echo $orders['id']; ?>">
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

                                                                <div class="modal fade" id="exampleModallCenter<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade A</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=A&price=50" class="btn btn-success">Complete</a>
                                                                                <!-- <button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete</button> -->
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterb<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade B</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=B&price=20" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=notcomplete&grad=B&price=20" class="btn btn-danger">Not Complete</a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterc<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade C</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=C&price=10" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=notcomplete&grad=C&price=10" class="btn btn-danger">Not Complete </a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php  } ?>
                                                        <?php endif; ?>

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