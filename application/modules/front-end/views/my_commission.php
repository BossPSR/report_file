<br>
<h2 class="text-center" style="margin-top: 15px;">My Commission</h2>
<hr class="line_package">
<br>
<?php foreach ($commission as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    <span style="font-size:16px;">Search for date : </span>
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
                        <?php foreach ($commission as $key => $counts) { ?>
                            <?php $z += 1; ?>
                        <?php } ?>
                        <div style="font-size: 21px;font-weight: 500;"><?php echo $z; ?></div>
                        <div>Order</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <!-- <th scope="col">ผู้ที่เติมแนะนำ</th> -->
                                <!-- <th scope="col">ผู้แนะนำ</th> -->
                                <th>Item (รายการ)</th>
                                <!-- <th scope="col">Detail (รายละเอียด)</th> -->
                                <th scope="col">Date (วันที่)</th>
                                <th scope="col">Amount (จำนวนค่าแนะนำที่ได้)</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php $e = 1; ?>
                        <?php $m = 1; ?>
                        <tbody>
                            <?php foreach ($commission as $key => $commission) { ?>
                                <tr style="text-align:center;">
                                    <!-- <td><?php echo $commission['commission_recipient']; ?></td> -->
                                    <!-- <td><?php echo $commission['commission_inviter']; ?></td> -->
                                    <td>Commission</td>
                                   
                                    <td><?php echo date("d F Y", strtotime($commission['create_at'])); ?></td>
                                    <td><?php echo number_format($commission['commission_price']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
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
                        <h1>No Commission</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>