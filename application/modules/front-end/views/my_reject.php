<br>
<h2 class="text-center" style="margin-top: 15px;">รายการไม่ผ่านเกณฑ์</h2>
<hr class="line_package">
<br>

<?php if (!empty($rejected)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <span style="font-size:16px;">ค้นหาวันที่ : </span>
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
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <!-- <th scope="col">No.</th> -->
                                <th scope="col">ชื่อเอกสาร</th>
                                <th scope="col">รหัสออเดอร์</th>
                                <th scope="col">ยอมรับ</th>
                                <th scope="col">วันที่</th>
                                <!-- <th scope="col">เหตุผล</th> -->
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php $e = 1; ?>
                        <?php $m = 1; ?>
                        <tbody>
                            <?php foreach ($rejected as $key => $rejected) { ?>
                                <tr style="text-align:center;">
                                    <!-- <th scope="row"><?php echo $i++; ?></th> -->
                                    <td><?php echo $rejected['file_name']; ?></td>
                                    <td><?php echo $rejected['store_id']; ?></td>
                                    <td>
                                        <?php if ($rejected['is_accept'] == 1) : ?>
                                            <span class="badge badge-success">ยอมรับ</span>
                                        <?php else : ?>
                                            <span class="badge badge-danger">ไม่ผ่านเกณฑ์</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo date('d F Y', strtotime($rejected['create_at'])); ?></td>
                                
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
                        <h1 style="font-size: 90px;">ไม่ประวัติรายการไม่ผ่านเกณฑ์</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>