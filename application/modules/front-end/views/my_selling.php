<br>
<h2 class="text-center" style="margin-top: 15px;">Reject</h2>
<hr class="line_package">
<br>
<?php foreach ($rejected as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">วันที่</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            <?php foreach ($rejected as $key => $rejected) { ?>
                                <tr>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-3"></div>
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