<?php $Team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<style>
    .cssd {
        background-image: url("public/frontend/assets/img/bg/home-bgback.png");
        width: 100%;
        margin: 0 auto;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: repeat-y;

    }

    .cssd::before {
        content: " ";
        background-color: rgba(33, 35, 49, 0.76);
    }

    .hero-banner {
        background-image: url("public/frontend/assets/img/bg/banner03.png");
        background-color: #cccccc;
        /* height: 500px; */
        height: 70vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
<section class="slider_section slider_section_four hero-banner" style="padding: 40px 0 50px 0;">
    <br>
    <h2 class="text-center" style="margin-top: 15px;">เลือกงานที่นี่</h2>
    <hr class="line_package">
    <br>
    <?php $dd; ?>
    <?php $cc = $countcancel['ccancel']; ?>
    <?php $ti = $countcancel['teamid']; ?>
    <?php if ($countcancel['create_at'] > date("Y-m-d") && $cc >= '2') : ?>
        <div class="text-center wishlist_area"> <span style="color:red;font-size: 24px;"> ท่านยกเลิกออร์เดอร์เกิน 2 ครั้ง คุณไม่สามารถรับ Order ได้จนถึงวันที่ <?= $dd; ?> </span> </div>
    <?php else : ?>
        <h2 class="text-center" style="margin-bottom:15px;"><a class="btn btn-success" data-toggle="modal" data-target="#exampleModalPosition"><i class="fa fa-plus-circle"></i> เพิ่มตำแหน่ง</a></h2>

        <div class="wishlist_area mt-60" style="padding-bottom: 50px;">
            <div class="container" style="max-width: 1000px;">
                <div class="row text-center mt-60">
                    <?php foreach ($item as $item) { ?>
                        <?php if ($item >= 2) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12" style="margin-bottom:50px;margin-top:50px;">
                                <a href="My-stock?item=<?php echo base64_encode($item['id']); ?>" style="background: #0063d1;" class="bn_e"><span style="color: white;"><?php echo $item['name_item']; ?></span></a>
                            </div>

                        <?php else : ?>
                            <div class="col-xl-12 col-lg-2 col-md-12 col-sm-12">
                                <a href="My-stock?item=<?php echo base64_encode($item['id']); ?>" class="bn_e"><span><?php echo $item['name_item']; ?></span></a>
                            </div>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>
<?php endif; ?>
<style>
    .font-20 {
        font-size: 20px;
        line-height: 30px;
    }
</style>
<section class="cssd pt-3 pb-3">
    <div class="container">
        <div class="row" style="padding-top: 30px ; font-size: 17.5px;">
            <div class="col-md-2 "></div>
            <div class="col-md-8 col-sm-12 text-white">
                <h3 style="text-align: center;"> วิธีการทำงานให้ผ่านโดยไม่ต้องแก้ไขงาน</h3>
                <br>
                <p class="font-20"> 1. อ่านและทำความเข้าใจรายละเอียดคำสั่งงานทั้งหมด </p>
                <p class="font-20"> 2. เช็คข้อมูล Resources หรือ Template ที่ใช้ประกอบในการทำงานให้ครบตามที่คำสั่งงานต้องการ </p>
                <p class="font-20"> 3. ติดต่อเจ้าหน้าที่เมื่อข้อมูลไม่เพียงพอ ตัวอย่างเช่น ขาด Template/Resources (ติดต่อทางระบบแชทเท่านั้น) </p>
                <p class="font-20"> 4. ใช้ข้อมูลใน Resources ที่ให้มาประกอบในการทำงาน หากข้อมูลไม่เพียงพอสามารถ
                    Search internet เพื่อเป็นข้อมูลประกอบได้แต่ต้องนำข้อมูลมาเรียบเรียงใหม่เป็น Own words (ห้ามก๊อปวางโดยเด็ดขาด) </p>

                <p class="font-20"> 5. เน้นการเขียนงานโดยใช้ Own words และอ้างอิงด้วยแหล่งที่มาของข้อมูลที่ใช้ประกอบ </p>
                <p class="font-20"> 6. กรณีเป็นงานกลุ่มโปรเจ็คหรือรายงาน ทีมงานสามารถทำการสมมติชื่อสมาชิกกลุ่มขึ้นมาและระบุหน้าที่รับผิดชอบตามชื่อแต่ล่ะคน
                    โดยจำลองสถานการณ์ขึ้นมาใช้ให้เหมาะสมกับคำสั่งงาน </p>
                <p class="font-20"> 7. ก่อนส่งงานควรตรวจเช็คความเรียบร้อยให้แน่ใจว่าได้ดำเนินการครบทุกคำสั่งของงานทั้งหมดและตรวจสอบข้อกำหนดการตั้งค่าหน้ากระดาษต่างๆ
                    (ถ้ามี) เช่น ใช้ตัวหนังสือสีดำ, ขนาด 18, ฟอนต์ Calibri </p>
                <p class="font-20"> 8. แยกไฟล์ Folder ของงานแต่ล่ะ Task ให้ชัดเจนพร้อมระบุตัวเลขกำกับใน Template ที่ใช้ตอบในแต่ล่ะข้อ (ถ้ามี) </p>
                <p class="font-20"> 9. กรณีที่เป็นงานที่ต้องแก้ไข ไม่ว่าจะเป็น Feedback หรือ Re-feedback ให้ทำการ Highlight ส่วนที่แก้ไขด้วยสีเหลือง </p>
                <p class="font-20"> 10. อธิบายงานแต่ละส่วนผ่านคลิปวิดีโอด้วยภาพและเสียงที่ชัดเจน </p>
            </div>
            <div class="col-md-2 "></div>
        </div>
    </div>
    <br>
    <br>

</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalPosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-center" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="exampleModalLabel"> เพิ่มตำแหน่ง </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="My-stock-item-add" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" name="idTeam" value="<?php echo $Team['id']; ?>" hidden>
                        <label>ตำแหน่ง</label>
                        <select class="form-control" name="position">
                            <option selected disabled>--- กรุณาเลือกตำแหน่ง ---</option>
                            <?php foreach ($item_loop as $item_loop) { ?>
                                <option value="<?php echo $item_loop['id']; ?>"><?php echo $item_loop['name_item']; ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <!-- <h1 style="color:blue;">Data Not Found</h1> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> บันทึก</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if ($cc >= '2') : ?>
    <script>
        function getDatacancel() {
            $.ajax({
                    url: "cancel_auto",
                    type: "POST",
                    data: {
                        team: '<?php echo $countcancel['teamid']; ?>',
                        date: '<?php echo $dd; ?>',
                    }
                })
                .success(function(result) {
                    console.log(result);
                    location.href = "My-stock-Item"
                });

        }

        setInterval(getDatacancel, 50000); // 1000 = 1 second
    </script>

<?php else : ?>

<?php endif; ?>