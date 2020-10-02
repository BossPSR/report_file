<?php $userId = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if (!empty($this->session->userdata('email'))) { ?>
    <?php if ($userId == true) { ?>
        <?php $order = $this->db->get_where('tbl_upload_order', ['userId' => $userId['idUser'], 'status_delivery' => 1, 'status_approved' => 2])->row_array(); ?>
    <?php } else { ?>
        <?php $daliver = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam']])->row_array(); ?>
    <?php } ?>
<?php } else { ?>

<?php } ?>

<?php if ($teamId) : ?>

    <!--slider area start-->
    <div class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="myModal2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <!-- <img src="public/frontend/assets/img/bg/home-bg.png" alt=""> -->
            <div class="modal-content">
                <div class="modal-header">
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;"> คุณสมบัติติวเตอร์ระดับ Premium ของบริษัท </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 46px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-size: 18px;">

                    <p>• ส่งงานตรงต่อเวลา </p>
                    <p>• อัตราการกดยกเลิก Order ต่ำ </p>
                    <p>• ผลงานที่มีคุณภาพตามและรอบคอบต่อรายละเอียดคำสั่งงาน </p>
                    <p>• อัตราการถูกแก้ไขงาน Feedback ต่ำ </p>
                    <p>• มีระยะเวลาการทำงานที่ต่อเนื่อง </p>

                    <hr>
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;"> ติวเตอร์ระดับ Premium จะได้รับอะไรบ้าง </p>
                    <hr>
                    <p>• มีสิทธิ์เลือกชิ้นงานก่อน </p>
                    <p>• ได้รับเรทค่าตอบแทนที่สูงกว่า </p>
                    <p>• มีรายได้ที่มั่นคงกว่า</p>
                    <p>• ได้รับรางวัลโบนัสพิเศษจากทางบริษัท </p>
                    <p>• มีสิทธิ์ได้รับเลือกเข้าเป็นทีมงาน Admin บริษัท </p>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>

    <!--slider area start-->
    <!-- <div class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="myModal2">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;"> ขั้นตอนการทำงาน </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 46px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-size: 18px;">

                    <p>1. เลือก Order ที่ต้องการในหน้า Order list </p>
                    <p>2. กดปุ่ม Confirm Order ที่ต้องการและ Download เอกสารรายละเอียดงาน </p>
                    <p>3. เริ่มทำงาน </p>
                    <p>4. กดปุ่ม Delivery เลือกรหัส Order ที่ต้องการส่งงาน </p>
                    <p>5. รอผล Approved หรือ Feedback จาก Admin </p>


                    <hr>
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;">ข้อดีในการร่วมงานกับเรา </p>
                    <hr>
                    <p>• อยู่บ้านก็ทำงานได้ </p>
                    <p>• รู้สึกสบายใจไม่มีใครคอยสั่งการ </p>
                    <p>• หยืดหยุ่นเวลาการทำงานได้ </p>
                    <p>• สร้างรายได้อย่างมั่นคง </p>
                    <p>• ได้รับความรู้และทักษะจากสาขาวิชาเพิ่มขึ้น </p>
                    <p>• อัปเดทความรู้และเครื่องมือใหม่ตลอดเวลา </p>
                    <p>• เสริมทักษะความรู้ด้วยตัวอย่างข้อมูลบริษัทระดับสากล </p>

                    <hr>
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;">ผ่านเกณฑ์การคัดเลือกเป็นติวเตอร์ระดับ Premium ของบริษัทด้วยวิธีง่ายๆดังนี้ </p>
                    <hr>
                    <p>1. ส่งงานตรงต่อเวลา </p>
                    <p>2. อัตราการกดยกเลิก Order ต่ำ </p>
                    <p>3. ผลงานที่มีคุณภาพตามและรอบคอบต่อรายละเอียดคำสั่งงาน </p>
                    <p>4. อัตราการถูกแก้ไขงาน Feedback ต่ำ </p>
                    <p>5. มีระยะเวลาการทำงานที่ต่อเนื่อง </p>

                    <hr>
                    <p style="font-weight: bold;font-size: 24px;color: #006fbd;">ติวเตอร์ระดับ Premium จะได้รับอะไรบ้าง </p>
                    <hr>
                    <p>1. มีสิทธิ์เลือกชิ้นงานก่อน </p>
                    <p>2. ได้รับเรทค่าตอบแทนที่สูงกว่า </p>
                    <p>3. มีรายได้ที่มั่นคงกว่า </p>
                    <p>4. ได้รับรางวัลโบนัสพิเศษจากทางบริษัท </p>
                    <p>5. มีสิทธิ์ได้รับเลือกเข้าเป็นทีมงาน Admin บริษัท </p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->

<?php endif; ?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">MY ORDER</h5>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <br>
                <center>
                    <a href="order" class="btn btn-primary">ACCEPT</a>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedback" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="feedback" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">MY FEEDBACK</h5>
            </div>
            <?php $fb = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam'], 'status_feedback_read' => '0'])->row_array(); ?>
            <div class="modal-body">
                <p>คุณได้รับ Feedback : <?php echo $fb['check_status'] == '0' ? 'Admin Feedback' : 'Client Feedback'; ?> </p>

                <br>
                <center>
                    <button class="btn btn-primary" id="status_feed">ACCEPT</button>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="check_morefile" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="check_morefile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">

                <h5 class="modal-title" id="staticBackdropLabel">MORE FILE S</h5>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <br>
                <center>
                    <button class="btn btn-primary" type="button" id="status_morefile">ACCEPT</button>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- 
<?php if (!empty($checkorder)) : ?>
    <section class="slider_section slider_section_four mb-20 mt-30">
        <div class="container">
            <div class="alert alert-warning" role="alert">
                คุณมีคำสั่งซื้อที่ค้างชำระเงินสามารถชำระเงินได้

                <?php foreach ($checkorder as $key => $checkorder) {  ?>
                    <?php $dateXX = date('Y-m-d H:i:s', strtotime($checkorder['created_at_buy'] . "+1 days")); ?>
                    <?php if ($dateXX >= date('Y-m-d H:i:s')) : ?>
                        <u>
                            <a href="payment_email?order_id=<?php echo $checkorder['order_id']; ?>" target="_blank" style="color: #0088ff;">
                                <?php echo $checkorder['order_id']; ?>
                            </a>
                        </u> &nbsp;
                    <?php else : ?>

                    <?php endif; ?>
                <?php } ?>
                คลิกตามคำสั่งซื้อเพื่อทำการชำระเงิน


            </div>
        </div>
    </section>
<?php endif; ?> -->
<style>
    .iop {
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 18px;
        line-height: 30px;
    }

    .iop2 {
        margin-top: 15px;
        margin-bottom: 15px;
        font-size: 22px;
        line-height: 50px;

    }


    .funfact {
        transition: all 0.5s ease;
    }

    .hero-image {
        background-image: url("public/frontend/assets/img/bg/home-bgback.png");
        background-color: #cccccc;
        /* height: 500px; */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-attachment: fixed;
    }

    .hero-banner {
        background-image: url("public/frontend/assets/img/bg/banner03.png");
        background-color: #cccccc;
        /* height: 500px; */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
<section class="slider_section slider_section_four hero-banner" style="padding: 40px 0 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

            </div>

            <div class="col-lg-6 col-md-12 mt-5 text-center ">
                <div class="text-white mb-3" style="background-color: #292580;width: 70%;padding: 20px;font-size: 24px;margin: auto;">
                    www.totorlearner.com คืออะไร
                </div>
                <div class="text-white" style="background-color: #292580;width: 70%;padding: 35px 0 35px 0px;font-size: 22px;margin: auto;line-height: 31px;">
                    <div> เราคือเพลตฟอร์มเว็บไซต์ผู้ให้บริการ </div>
                    <div> ข่วยเหลือด้านการศึกษาที่มีติวเตอร์ </div>
                    <div> ผู้เชียวชาญในแต่ล่ะสาขาวิชาที่ผ่าน</div>
                    <div> การคัดกรองอย่างละเอียดโดยบริษัท</div>
                    <div> เพื่อให้ความช่วยเหลือปรึกษาในด้าน</div>
                    <div> การเรียนของนักเรียนในประเทศ </div>
                    <div> ดังต่อไปนี้ อาทิเช่น </div>
                    <div> ออสเตรเลีย นิวซีแลนด์ สหรัฐอเมริกา</div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">

                <img src="public/frontend/assets/img/logo/banner02.png" alt="">

                <div class="text-right" style="font-size: 18px;">Everytime we can learn</div>
                <div class="text-right" style="font-size: 18px;">Anytime we can earn money</div>
            </div>

        </div>
    </div>
</section>
<section class="slider_section slider_section_four hero-image" style="padding: 40px 0 50px 0;border-bottom-left-radius: 5%;border-bottom-right-radius: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="public/frontend/assets/img/logo/1277.png" width="250">
                <!-- <h3>Tutor Learner</h3> -->
            </div>

            <div class="col-lg-7 col-md-12 mt-5 row">
                <?php if ($teamId) : ?>
                    <!-- team -->
                    <div class="col-lg-6 col-md-12 mb-3">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15">ขั้นตอนการทำงาน</h3>
                            <h5 class="iop">1. เลือก Order ที่ต้องการในหน้า Order list</h5>
                            <h5 class="iop">2. กดปุ่ม Confirm Order ที่ต้องการและ Download เอกสารรายละเอียดงาน</h5>
                            <h5 class="iop">3. เริ่มทำงาน</h5>
                            <h5 class="iop">4. กดปุ่ม Delivery เลือกรหัส Order ที่ต้องการส่งงาน</h5>
                            <h5 class="iop">5. รอผล Approved หรือ Feedback จาก Admin</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-3">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15">ข้อดีในการร่วมงานกับเรา </h3>
                            <h5 class="iop">• อยู่บ้านก็ทำงานได้</h5>
                            <h5 class="iop">• รู้สึกสบายใจไม่มีใครคอยสั่งการ</h5>
                            <h5 class="iop">• หยืดหยุ่นเวลาการทำงานได้</h5>
                            <h5 class="iop">• สร้างรายได้อย่างมั่นคง</h5>
                            <h5 class="iop">• ได้รับความรู้และทักษะจากสาขาวิชาเพิ่มขึ้น</h5>
                            <h5 class="iop">• อัปเดทความรู้และเครื่องมือใหม่ตลอดเวลา</h5>
                            <h5 class="iop">• เสริมทักษะความรู้ด้วยตัวอย่างข้อมูลบริษัทระดับสากล</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15">ขั้นตอนการทำงาน</h3>
                            <h5 class="iop">1. เลือก Order ที่ต้องการในหน้า Order list</h5>
                            <h5 class="iop">2. กดปุ่ม Confirm Order ที่ต้องการและ Download เอกสารรายละเอียดงาน</h5>
                            <h5 class="iop">3. เริ่มทำงาน</h5>
                            <h5 class="iop">4. กดปุ่ม Delivery เลือกรหัส Order ที่ต้องการส่งงาน</h5>
                            <h5 class="iop">5. รอผล Approved หรือ Feedback จาก Admin</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15">ข้อดีในการร่วมงานกับเรา </h3>
                            <h5 class="iop">• อยู่บ้านก็ทำงานได้</h5>
                            <h5 class="iop">• รู้สึกสบายใจไม่มีใครคอยสั่งการ</h5>
                            <h5 class="iop">• หยืดหยุ่นเวลาการทำงานได้</h5>
                            <h5 class="iop">• สร้างรายได้อย่างมั่นคง</h5>
                            <h5 class="iop">• ได้รับความรู้และทักษะจากสาขาวิชาเพิ่มขึ้น</h5>
                            <h5 class="iop">• อัปเดทความรู้และเครื่องมือใหม่ตลอดเวลา</h5>
                            <h5 class="iop">• เสริมทักษะความรู้ด้วยตัวอย่างข้อมูลบริษัทระดับสากล</h5>
                        </div>
                    </div>
                <?php else : ?>
                    <!-- user -->
                    <div class="col-lg-6 col-md-12 mb-3">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15">ทำไมต้องเป็น <a href="" style="font-size: 22px;"> www.tutorlearner.com </a> </h3>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ฟรีวีดีโออธิบายจากติวเตอร์</h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ฟรีรายงานผลการตรวจเช็คการคัดลอดข้อมูลจากอินเตอร์เน็ต </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> รับค่าแนะนำสูงสุด $40 ต่อการแนะนำเพื่อน 1 คน </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ปลอดภัย 100% ด้วยระบบ Wallet ป้องกันการถูกโกง </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ระบบ Wallet คืนยอดเงิน 100% (อัตโนมัตหากไม่มีการส่งออรเดอร์ให้แก่ผู้เรียน) </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ระบบหักเงินหลังจากผู้เรียนได้รับออรเดอร์แล้วเท่านั้น </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ติวเตอร์ทุกท่านเป็นผู้เชี่ยวชาญที่ผ่านการคัดกรองอย่างละเอียดเพื่อรองรับออร์เดอร์ทุกรูปแบบ </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> รับประกันการแก้ไขงานนานถึง 60 วัน </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> สะสมคะแนนรับส่วนลดแบบไม่มีวันหมดอายุ </h5>
                            <h5 class="iop"><i class="fa fa-check" aria-hidden="true"></i> ราคามาตรฐาน </h5>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-3">
                        <div class="funfact text-white">
                            <h3 class=" font-weight-400 mt-0 mb-15"> 4 ขั้นตอนง่ายๆในการสั่ง Order </h3>
                            <h5 class="iop">1. อัปโหลดไฟล์รายละเอียดคำสั่งงานและข้อมูลประกอบ</h5>
                            <h5 class="iop">2. ระบุวันเวลาที่ต้องการรับงาน</h5>
                            <h5 class="iop">3. กดชำระเงินผ่านลิ้งค์อีเมลที่ได้รับ</h5>
                            <h5 class="iop">4. รอรับงานที่สั่งไว้</h5>

                        </div>
                    </div>

                <?php endif; ?>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="slider_area owl-carousel">
                    <div class="single_slider d-flex align-items-center justify-content-center">
                        <iframe width="800" height="350" src="https://www.youtube.com/embed/rdzdbNKs0fQ" frameborder="0" allow="autoplay" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <?php if ($teamId) : ?>

            <?php else : ?>
                <hr style="border-bottom: 1px solid white;">

                <div class="col-lg-12 col-md-12 mt-5">
                    <div class="funfact text-white">
                        <h3 class=" font-weight-400 mt-0 mb-15"> ปุ่มเครื่องมือที่จำเป็นหน้า “ออร์เดอร์ของฉัน” </h3>
                        <h5 class="iop2">• ปุ่ม <img src="public/frontend/assets/img/button/1.png" alt="" style="width: 160px;"> คือ ปุ่มสำหรับผู้เรียนที่ต้องการใช้ส่งข้อมูลเพิ่มเติมให้กับติวเตอร์ เช่น ตัวอย่างงาน Guideline, ตารางTemplate, PowerPoint
                            (ต้องไม่ใช่คำสั่งงานใหม่ที่เพิ่มเข้ามา)
                        </h5>
                        <h5 class="iop2">• ปุ่ม <img src="public/frontend/assets/img/button/2.png" alt="" style="width: 138px;"> คือ ปุ่มสำหรับผู้เรียนที่ต้องการแก้ไขงานหรือขอคำปรึกษาเพิ่มเติม โดยสามารถกดปุ่มดังกล่าวได้ 3 ครั้ง ภายใน 60 วัน</h5>
                        <h5 class="iop2">• ปุ่ม <img src="public/frontend/assets/img/button/3.png" alt="" style="width: 139px;"> คือ ปุ่มสำหรับผู้เรียนที่แก้ไขงานหรือขอคำปรึกษาครบ 3 ครั้งแล้ว หรือประกันหมดอายุ 60 วันแล้ว แต่ต้องการแก้ไขงานหรือขอคำปรึกษาเพิ่มเติมจากติวเตอร์ (คิดค่าบริการเพิ่ม 50% ของราคา Order เดิม)</h5>
                        <h5 class="iop2">• ปุ่ม <img src="public/frontend/assets/img/button/4.png" alt="" style="width: 100px;"> คือ ปุ่มสำหรับผู้เรียนที่พึงพอใจในบริการโดยไม่ต้องการแก้ไขหรือขอคำปรึกษาใด ๆ เพิ่มเติมแล้ว สามารถกดปุ่มให้ดาวและ Comment ให้กับติวเตอร์</h5>
                        <h5 class="iop2">• ปุ่ม Unsatisfactory คือ ปุ่มสำหรับผู้เรียนที่ไม่พึงพอใจในบริการ สามารถกดปุ่มให้ดาวและ Comment ให้กับติวเตอร์</h5>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </div>
</section>
<!--slider area end-->

<!--slider area end-->
<!-- <div class="banner_area mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 text-center">
                <div class="section_title">
                    <h2>คะแนนสูงสุด</h2>
                     $this->lang->line("Highestscore"); ?> 
                </div>
                <br>

                <a href="#"><img src="public/image/9786167897561l.jpg" alt="" style="width: 100%;"></a>

            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <div class="section_title">
                    <h2>โปรเตอร์ </h2>
                </div>
                <br>
                $poster = $this->db->get('tbl_poster')->row_array(); ?>

                <a href="#"><img style="width: 100%;" src="uploads/poster/ echo $poster['file_name'] ?>" alt=""></a>

            </div>
        </div>
    </div>
</div> -->

<?php if (!empty($teamId)) { ?>
    <?php $cancel = $this->db->get_where('tbl_cancel', ['teamid' => $teamId['IdTeam']])->result_array(); ?>
    <?php foreach ($cancel as $cn) { ?>
        <?php if ($cn['teamid'] == $teamId['IdTeam'] && $cn['status_cl'] == '0') { ?>
            <script type="text/javascript">
                var x = "<?= $teamId['IdTeam']; ?>";
                console.log(x);
                swal({
                    icon: "success",
                    title: "Congratulations",
                    text: "ยินดีด้วยท่านสามารถกด Confirm Order ได้แล้ว",
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: 'congratulations',
                            type: 'POST',
                            data: {
                                TM: x,
                            },
                            success: function(success) {}
                        });
                        // swal("Poof! Your imaginary file has been deleted!", {
                        //     icon: "success",
                        // });
                    } else {
                        // swal("Your imaginary file is safe!");
                    };
                });
            </script>
        <?php } ?>
    <?php } ?>
    <?php if ($check_morefile) { ?>
        <?php $moreT = substr($check_morefile['ti'], 2); ?>
        <?php echo $moreT; ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#check_morefile').modal('show');
            });
        </script>
        <script type="text/javascript">
            $('#status_morefile').click(function() {
                console.log(<?php echo $moreT; ?>);

                $.ajax({
                    type: 'POST',
                    url: 'update_see_more_file',
                    data: {
                        teamId: <?php echo $moreT; ?>,
                    },
                    success: function(success) {
                        swal("Good job!", "Got it.", "success", {
                            button: false,
                        });
                        setTimeout(function() {
                            location.href = "My-task"
                        }, 1000);
                    }
                });
            });
        </script>

    <?php } ?>

<?php } ?>


<?php if (!empty($this->session->userdata('email'))) { ?>
    <?php if ($userId == true) { ?>
        <?php if ($order) { ?>
            <!--wishlist area end -->
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#staticBackdrop').modal('show');
                });
            </script>
        <?php } ?>
    <?php } ?>
    <?php if ($teamId == true) { ?>
        <?php if ($check_read) { ?>
            <!--wishlist area end -->
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#feedback').modal({
                        'show': true,
                        keyboard: false
                    });

                });
            </script>
            <script type="text/javascript">
                $('#status_feed').click(function() {
                    swal("Good job!", "Got it.", "success", {
                        button: false,
                    });

                    $.ajax({
                        type: 'POST',
                        url: 'check_c_feed',
                        data: {
                            teamId: '<?= $teamId['IdTeam']; ?>',
                            status_feedback_read: 1,
                        },
                        success: function(success) {

                            setTimeout(function() {
                                location.href = "my-feedback"
                            }, 1000);
                        }
                    });
                });
            </script>
        <?php } ?>
    <?php } ?>
<?php } ?>