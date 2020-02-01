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
                <div class="col-3"></div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">Accept</th>
                                <th scope="col">วันที่</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            <?php foreach ($rejected as $key => $rejected) { ?>
                                <tr style="text-align:center;">
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $rejected['file_name'] ;?></td>
                                    <td><?php echo $rejected['store_id'] ;?></td>
                                    <td>
                                        <?php if ($rejected['is_accept'] == 1) : ?>
                                            <span class="badge badge-success">Accept</span>
                                        <?php else : ?>
                                            <span class="badge badge-danger">Reject</span>
                                        <?php endif ;?>
                                    </td>
                                    <td><?php echo $rejected['create_at'] ;?></td>
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