<br>
<h2 class="text-center" style="margin-top: 15px;">รายการเงินคืน</h2>
<hr class="line_package">
<br>
<?php foreach ($cashback as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    <span style="font-size:16px;">ค้นหาวันที่ : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
                <div class="col-2">
                    <div class="form-group text-center" style="margin-top: 1rem;">
                        <?php $z = 0  ?>
                        <?php foreach ($cashback as $key => $counts) { ?>
                            <?php $z += 1; ?>
                        <?php } ?>
                        <div style="font-size: 21px;font-weight: 500;"><?php echo $z; ?></div>
                        <div>ออร์เดอร์ของฉัน</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">รายการ</th>
                                <th scope="col">รหัสออร์เดอร์</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">จำนวนเงิน</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($cashback as $key => $cashback) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $cashback['type_cashback']; ?></td>
                                    <td><?php echo $cashback['order_id']; ?></td>
                                    <td>
                                        <?php if (!empty($cashback['cashback_detail'])) { ?>
                                            <a href="#" data-toggle="modal" data-target="#NOTE<?= $cashback['order_id']; ?>" style="color:#19baea;font-size:18px;"><i class="fa fa-search"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="NOTE<?= $cashback['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">หมายเหตุ</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p style="font-size:16px;font-weight:bold;"><?= $cashback['cashback_detail']; ?></p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                    <td><?php echo date("d F Y", strtotime($cashback['create_at'])); ?></td>
                                    <td>$<?php echo number_format($cashback['cashback']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class=" col-1"></div>
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
                        <h1 style="font-size: 116px;">ไม่มีประวัติรายการเงินคืน</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>