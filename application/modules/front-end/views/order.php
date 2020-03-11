<?php if (!empty($buy_email)) : ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My order</h2>
    <hr class="line_package">
    <br>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">Status</th>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">Main Document</th>
                                <th scope="col">GT Document</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">Tool</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($buy_email as $value) : ?>
                                <tr style="text-align:center;">
                                    <th style="text-align: center;font-size: 39px;">
                                        <?php if ($value['status'] == 0) : ?>
                                            <i class="fa fa-minus-square-o" style="color: #cbcbcb;" aria-hidden="true"></i>
                                        <?php else : ?>
                                            <i class="fa fa-check-square-o" style="color: #28a745;" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </th>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td style="text-align:left;"><?php echo $value['file_name']; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalMain"><i class="fa fa-file-text-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?php $zz = 1; ?>
                                                    <?php $order_main = $this->db->get_where('tbl_upload_order', ['order_id' => $value['order_id']])->result_array(); ?>
                                                    <div class="modal-body">
                                                        <?php if (!empty($order_main)) { ?>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr style="text-align:center;">
                                                                        <th scope="col">No.</th>
                                                                        <th scope="col">ID Order</th>
                                                                        <th scope="col">File</th>
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($order_main as $order_main) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $zz++; ?></td>
                                                                            <td><?php echo $order_main['order_id']; ?></td>
                                                                            <td><?php echo $order_main['file_name']; ?></td>
                                                                            <td><a href="<?php echo $order_main['path']; ?>"><i class="fa fa-file-text-o"></i></a></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        <?php } else { ?>
                                                            <h1 style="color:blue;">Data Not Found</h1>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalMainGT"><i class="fa fa-file-text-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalMainGT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?php $kk = 1; ?>
                                                    <?php $order_GT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $value['order_id']])->result_array(); ?>
                                                    <div class="modal-body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr style="text-align:center;">
                                                                    <th scope="col">No.</th>
                                                                    <th scope="col">ID Order</th>
                                                                    <th scope="col">File</th>
                                                                    <th scope="col">Tool</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($order_GT as $order_GT) { ?>
                                                                    <tr style="text-align:center;">
                                                                        <td><?php echo $kk++; ?></td>
                                                                        <td><?php echo $order_GT['order_id']; ?></td>
                                                                        <td><?php echo $order_GT['file_name_GT']; ?></td>
                                                                        <td><a href="<?php echo $order_GT['path_GT']; ?>"><i class="fa fa-file-text-o"></i></a></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $value['order_id']; ?></td>
                                    <td><?php echo $value['date_required']; ?></td>
                                    <td>
                                        <?php $DateT    = date('Y-m-d');  ?>
                                        <?php $produm   = date('Y-m-d', strtotime('+5 day' . '+' . $value['update_at_buy'])); ?>
                                        <?php if ($DateT >= $produm) : ?>
                                            <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        <?php else : ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Order</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>