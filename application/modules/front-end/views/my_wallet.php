<!--services img area-->
<div class="services_gallery mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wall-center shadow-b hight-100 " style=" padding-right: 0px; padding-left: 0px;">
                        <div class="p-15 text-center header-profile">
                            โปรไฟล์ของฉัน
                        </div>
                        <div class="p-15 text-center">
                            <img class="profile-small" src="public/image/man.png" alt="">
                        </div>
                        <div class="p-15 text-center font18">
                            User001
                        </div>
                        <div class="ptw-5 text-center font17">
                            เอกสารของฉัน : 11 ฉบับ
                        </div>
                        <div class="pw-5 text-center font17">
                            ยอดคงเหลือ : ฿<?php echo number_format("487515"); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-11 col-md-11 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            ยอดคงเหลือในบัญชี
                        </div>
                        <div class="p-15 text-center color-p">
                            ฿0
                        </div>
                        <div class="pb-18 text-center">
                            <button type="button" class="btn btn-primary button-p">เติมเงิน</button>
                            <button type="button" class="btn btn-outline-dark button-100">ถอนเงิน</button>
                        </div>
                    </div>


                    <div class="col-lg-11 col-md-11 wall-center shadow-b mtp-20">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ประวัติการเติมเงิน</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ประวัติการถอนเงิน</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ประวัติการใช้จ่าย</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ยอดการโอนเงิน</th>
                                            <th scope="col">เลขที่บิล</th>
                                            <th scope="col" class="text-center">สถานะ</th>
                                            <th scope="col">เวลาอัปเดต</th>
                                            <th scope="col">หมายเหตุ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($deposit as $key => $deposit) : ?>
                                        <tr>
                                            <th scope="row">฿<?php echo $deposit['price']; ?></th>
                                            <td><?php echo $deposit['bill_id']; ?></td>
                                            <td class="text-center">
                                                <?php if ($deposit['status'] == 1) : ?>
                                                <span class="badge badge-pill badge-warning" >กำลังดำเนินงาน</span>
                                                <?php elseif($deposit['status'] == 2) : ?>
                                                <span class="badge badge-pill badge-success" >เสร็จสิ้น</span>
                                                <?php else : ?>
                                                <span class="badge badge-pill badge-danger" >ล้มเหลว</span>
                                                <?php endif ; ?>
                                            </td>
                                            <td><?php echo $deposit['create_at']; ?></td>
                                            <td><?php echo $deposit['note']; ?></td>
                                        </tr>
                                    <?php endforeach ; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ยอดเงินที่ต้องการจะถอน</th>
                                            <th scope="col">เลขที่บิล</th>
                                            <th scope="col" class="text-center">สถานะ</th>
                                            <th scope="col">เวลาอัปเดต</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($withdraw as $key => $withdraw) : ?>
                                        <tr>
                                            <th scope="row">฿<?php echo $withdraw['price']; ?></th>
                                            <td><?php echo $withdraw['bill_id']; ?></td>
                                            <td class="text-center">
                                                <?php if ($withdraw['status'] == 1) : ?>
                                                <span class="badge badge-pill badge-warning" >กำลังดำเนินงาน</span>
                                                <?php elseif($withdraw['status'] == 2) : ?>
                                                <span class="badge badge-pill badge-success" >เสร็จสิ้น</span>
                                                <?php else : ?>
                                                <span class="badge badge-pill badge-danger" >ล้มเหลว</span>
                                                <?php endif ; ?>
                                            </td>
                                            <td><?php echo $withdraw['create_at']; ?></td>
                                        </tr>
                                        <?php endforeach ; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ประเภทบัญชี</th>
                                            <th scope="col">รายรับรายจ่าย</th>
                                            <th scope="col">จำนวนเงินที่เกิดขึ้น</th>
                                            <th scope="col">ยอดคงเหลือทั้งหมดในปัจจุบัน</th>
                                            <th scope="col">ยอดเงินที่สามารถใช้ได้ในปัจจุบัน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">บัญชีไทยพาณิชย์</th>
                                            <td>฿230</td>
                                            <td>฿500</td>
                                            <td>฿500</td>
                                            <td>฿500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>