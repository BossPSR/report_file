<br>
<h2 class="text-center" style="margin-top: 15px;">My Reject</h2>
<hr class="line_package">
<br>
<?php foreach ($selling as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Score</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php $e = 1; ?>
                        <?php $m = 1; ?>
                        <tbody>
                            <?php foreach ($selling as $key => $selling) { ?>
                                <tr style="text-align:center;">
                                    <td scope="row"><?php echo $i++; ?></td>
                                    <td><?php echo $selling['file_name']; ?></td>
                                    <td><?php echo $selling['store_id']; ?></td>
                                    <td><?php echo date("d-m-y",strtotime($selling['create_at'])); ?></td>
                                    <td>
                                        <?php if ($selling['grade'] == "A") { ?>
                                            <span class="badge badge-danger">Grade <?php echo $selling['grade']; ?></span>
                                        <?php } elseif ($selling['grade'] == "B") { ?>
                                            <span class="badge badge-warning">Grade <?php echo $selling['grade']; ?></span>
                                        <?php } else { ?>
                                            <span class="badge badge-secondary">Grade <?php echo $selling['grade']; ?></span>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo number_format($selling['price_file']); ?></td>
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
                        <h1>No Selling</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>