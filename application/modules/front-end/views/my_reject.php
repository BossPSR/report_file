<br>
<h2 class="text-center" style="margin-top: 15px;">My Reject</h2>
<hr class="line_package">
<br>
<?php foreach ($rejected as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <span style="font-size:16px;">Search for date : </span>
                    <form action="my-reject" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">Accept</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">เหตุผล</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php $e = 1; ?>
                        <?php $m = 1; ?>
                        <tbody>
                            <?php foreach ($rejected as $key => $rejected) { ?>
                                <tr style="text-align:center;">
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $rejected['file_name']; ?></td>
                                    <td><?php echo $rejected['store_id']; ?></td>
                                    <td>
                                        <?php if ($rejected['is_accept'] == 1) : ?>
                                            <span class="badge badge-success">Accept</span>
                                        <?php else : ?>
                                            <span class="badge badge-danger">Reject</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $rejected['create_at']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop3<?php echo $e++; ?>">
                                            <i class="fa fa-file-text"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop3<?php echo $m++; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                <h5 class="modal-title" id="staticBackdropLabel">Return confirm</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $rejected['note']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Reject</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>