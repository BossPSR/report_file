<br>
<h2 class="text-center" style="margin-top: 15px;">ค่าตอบแทน</h2>
<hr class="line_package">
<br>
<?php foreach ($income as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    <span style="font-size:16px;">ค้นหาวันที่ : </span>
                    <form action="my_income" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
                <div class="col-2">
                    <div class="form-group text-center" style="margin-top: 1rem;">
                    <?php  $z = 0  ?>
                    <?php foreach ($income as $key => $counts) { ?>
                        <?php $z+=1; ?>
                    <?php } ?>
                       <div style="font-size: 21px;font-weight: 500;"><?php echo $z; ?></div>
                       <div>ทั้งหมด</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">รหัสออร์เดอร์</th>
                                <th scope="col">วัน/เวลา</th>
                                <th scope="col">คะแนนของฉัน</th>
                                <th scope="col">จำนวน</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            <?php foreach ($income as $key => $income) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $income['order_id']; ?></td>
                                    <td><?php echo date("d F Y", strtotime($income['create_at'])); ?></td>
                                    <td><?php echo number_format($income['income']); ?></td>
                                    <td><?php echo $income['note'] == '' ? '-' : $income['note']; ?></td>
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
                        <h1>ไม่มีประวัติค่าตอบแทนe</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>