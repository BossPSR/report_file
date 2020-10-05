<br>
<h2 class="text-center" style="margin-top: 15px;">รายการถูกหักคะแนน</h2>
<hr class="line_package">
<br>
<?php foreach ($deduct as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <span style="font-size:16px;">ค้นหาวันที่ : </span>
                    <form action="my-deduct" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-2"></div>
                <div class="col-2">
                    <div class="form-group text-center" style="margin-top: 1rem;">
                    <?php  $z = 0  ?>
                    <?php foreach ($deduct as $key => $counts) { ?>
                        <?php $z+=1; ?>
                    <?php } ?>
                       <div style="font-size: 21px;font-weight: 500;"><?php echo $z; ?></div>
                       <div>ออเดอร์ของฉัน</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">คะแนน</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php $e = 1; ?>
                        <?php $m = 1; ?>
                        <tbody>
                            <?php foreach ($deduct as $key => $selling) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $selling['order_id']; ?></td>
                                    <td><?php echo date("d F Y", strtotime($selling['create_at'])); ?></td>
                                    <td><?php echo number_format($selling['deduct']); ?></td>
                                </tr>
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
                        <h1 style="font-size: 120px;">ไม่มีรายการถูกหักคะแนน</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>