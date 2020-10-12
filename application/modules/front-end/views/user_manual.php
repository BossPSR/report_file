<br>
<?php if ($user) { ?>
    <h2 class="text-center" style="margin-top: 15px;"> คู่มือการใช้งาน </h2>
<?php } elseif ($team) { ?>
    <h2 class="text-center" style="margin-top: 15px;"> คู่มือการใช้งาน </h2>
<?php } else { ?>
    <h2 class="text-center" style="margin-top: 15px;"> คู่มือการใช้งาน </h2>
<?php } ?>
<hr class="line_package">
<br>
<!--Checkout page section-->
<div class="Checkout_section">
    <div class="container">
        <div class="checkout_form">
            <?php if ($user) { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOW TO BUY ?

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                HOW TO SELL ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                HOW TO BY PACKAGE ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                HOW TO REGISTER ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } elseif ($team) { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-12 col-md-8 col-sm-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size: 19px;">
                                                <center>
                                                    ประเภท Order ของเรา?
                                                </center>

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="font-size: 17.5px;">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-9 col-sm-12 ">
                                                    <p style="line-height: 35px;">
                                                        <span style="font-size: 24px;font-weight: bold;"> 1. New Order </span> <br>
                                                        คือ ออร์เดอร์ใหม่ที่ติวเตอร์กด ยืนยัน จากหน้า "เลือกงานที่นี่"
                                                    </p>
                                                    <p style="line-height: 35px;">
                                                        <span style="font-size: 24px;font-weight: bold;"> 2. Direct Order </span>  <br>
                                                        คือ ออร์เดอร์ที่ส่งตรงจากเจ้าหน้าที่ทางระบบ (สามารถปฏิเสทได้)
                                                    </p>
                                                    <p style="line-height: 35px;"> <span style="font-size: 24px;font-weight: bold;"> 3. Feedback </span> <br>
                                                        คือ ออร์เดอร์ที่ติวเตอร์ส่งแล้วแต่ผู้เรียนต้องการแก้ไขหรือปรึกษาเพิ่มเติม (3 ครั้ง)</p>
                                                    <p style="line-height: 35px;"> <span style="font-size: 24px;font-weight: bold;"> 4. Re-Feedback </span><br>
                                                        คือ ออร์เดอร์ที่ผู้เรียนได้ทำการแก้ไขหรือปรึกษาเพิ่มเติมครบ 3 ครั้งแล้ว แต่ผู้เรียนต้องการแก้ไขหรือปรึกษาเพิ่มเติม
                                                        (กรณีนี้ติวเตอร์จะได้รับค่าตอบแทนพิเศษเพิ่มเติมอีก 50% จากค่าตอบแทนเดิมและผู้เรียนสามารถทำการแก้ไขหรือปรึกษาเพิ่มเติมได้อีก 3 ครั้ง)</p>
                                                </div>
                                                <div class="col-md-1 "></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 19px;">
                                                <center>ขั้นตอนในการทำงาน</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion01" style="font-size: 17.5px;">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <p> 1. กดปุ่ม "เลือกงานที่นี่" เลือก ออร์เดอร์ที่ต้องการ </p>
                                                    <p style="line-height: 35px;"> 2. กด ยืนยันออร์เดอร์ และ ดาวน์โหลด เอกสารรายละเอียดงานทั้ง Assessment Instructions/Questions และ
                                                        Resources ข้อมูลออร์เดอร์ที่กด ยืนยัน แล้วจะไปแสดงที่หน้า "งานของฉัน"
                                                        สามารถเช็คดูวันเวลาที่กด ยืนยัน วันส่งงานและระยะเวลาที่คงเหลือในการทำออร์เดอร์ </p>
                                                    <p style="line-height: 35px;"> 3. เริ่มทำงาน</p>
                                                    <p style="line-height: 35px;"> 4. ส่งออร์เดอร์ โดยการกดปุ่ม "ส่งงานที่นี่" เพื่อเลือกไฟล์ อัพโหลด เลือก ODN รหัสออร์เดอร์ ที่ต้องการส่งงาน หากเป็นออร์เดอร์ที่ถูก Feedback จะขึ้นคำว่า  Feedback
                                                        ต่อท้าย ODN นั้น ๆ (การเลือก ODN ในขั้นตอนการ "ส่งงานที่นี่"  เป็นจุดสำคัญโปรดตรวจเช็ครหัส ODN ให้แน่ใจว่าทีมงานได้เลือกรหัส ODN ถูกต้องแล้ว)</p>
                                                    <p style="line-height: 35px;"> 5. รอผล "อนุมิต" หรือ Feedback จาก Admin</p>
                                                </div>
                                                <div class="col-md-2 "></div>

                                            </div>

                                        </div>
                                    </div>
                                    <?php $check = $this->input->get('update'); ?>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link <?= $check == '' ? 'collapsed' : ''  ?>" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 19px;">
                                                <center>ขั้นตอนการอัพเดทงาน</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>

                                        <div id="collapseThree" class="collapse <?= $check == '' ? '' : 'show'  ?>" aria-labelledby="headingThree" data-parent="#accordion02" style="font-size: 17.5px;">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <p style="line-height: 35px;">ท่านสามารถส่งอัพเดท ความคืบหน้าของงานผ่านทางอีเมล <a href="mailto:updatebytutor@gmail.com">updatebytutor@gmail.com</a>  โดยระบุรายละเอียดดังนี้</p>
                                                    <p style="line-height: 35px;">1. รหัสประจำตัว TN…..</p>
                                                    <p style="line-height: 35px;">2. รหัสOrder ODN…..</p>
                                                    <p style="line-height: 35px;">3. ตั้งชื่อไฟล์ว่า Update1</p>
                                                    <p style="line-height: 35px;">( กรอกข้อมูลในช่อง Subject ด้วยตัวพิมพ์ใหญ่เท่านั้นพร้อมกับแนบไฟล์งาน อัพเดท ของคุณ )</p>
                                                    <p style="line-height: 35px;font-size: 21px; font-weight: bold;">ตัวอย่าง</p>
                                                    <img src="public/frontend/assets/img/manual/1.png" alt="" style="width: 500px;">
                                                    <p style="line-height: 35px;">หมายเหตุ: การไม่ส่ง อัพเดท บ่อยครั้งบัญชีของท่านอาจถูกระบบระงับการใช้งานแบบถาวร</p>
                                                </div>
                                                <div class="col-md-2 "></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight" style="font-size: 19px;">
                                                <center>ตัวอย่างการอัดวีดีโออธิบายงานให้ผู้เรียน</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion03">
                                            <div class="card-body">
                                                <p style="font-size: 16px;">Video</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfive">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven" style="font-size: 19px;">
                                                <center>ขั้นตอนการแก้ไข Feedback</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseseven" class="collapse" aria-labelledby="headingfive" data-parent="#accordion04">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <p style="font-size: 18px;line-height: 35px;letter-spacing: 0.5px;">1. Popup แจ้งเตือนว่า คุณได้รับ Feedback ให้ติวเตอร์กดยอมรับ </p>
                                                    <p style="font-size: 18px;line-height: 35px;">2.เข้าไปเช็ครายละเอียดการแก้ไข Feedback ได้ที่หน้า "แก้ไขงานของฉัน"  ของติวเตอร์โดยจะแบ่ง Feedback ออกเป็น 2 ประเภทคือ</p>
                                                    <li style="font-size: 18px;line-height: 35px;margin-bottom: 1rem;">
                                                        Admin Feedback (จาก Admin) สำหรับกรณีที่ติวเตอร์ส่งรายละเอียดของออร์เดอร์ ไม่ครบหรือไม่ผ่านเกณฑ์ การตรวจเช็คจาก Admin โดย Admin สามารถส่ง Feedback ให้ติวเตอร์ได้
                                                        ไม่จำกัดจำนวนครั้ง
                                                    </li>
                                                    <li style="font-size: 18px;line-height: 35px;letter-spacing: 0.3px;">
                                                        Learner Feedback (จากผู้เรียน) สำหรับกรณีที่ติวเตอร์มีความผิดพลาดจากการทำงานที่ไม่ถูกต้องตามรายละเอียดคำสั่งงานหรือผู้เรียนต้องการปรึกษาเพิ่มเติม โดยผู้เรียนสามารถ
                                                        แก้ไขได้ทั้งหมด 3 ครั้ง
                                                    </li>
                                                </div>
                                                <div class="col-md-2 "></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfix">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#Feedback" aria-expanded="false" aria-controls="collapseseven" style="font-size: 19px;">
                                                <center>วิธีการทำงานให้ผ่านโดยไม่ต้องแก้ไขงาน</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="Feedback" class="collapse" aria-labelledby="headingfix" data-parent="#accordion09">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <p style="font-size: 18px;letter-spacing: 1.5px;line-height: 35px;"> 1. อ่านและทำความเข้าใจรายละเอียดคำสั่งงานทั้งหมด </p>
                                                    <p style="font-size: 18px;letter-spacing: 1px;line-height: 35px;"> 2. เช็คข้อมูล Resources หรือ Template ที่ใช้ประกอบในการทำงานให้ครบตามที่คำสั่งงานต้องการ </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 3. ติดต่อเจ้าหน้าที่เมื่อข้อมูลไม่เพียงพอ ตัวอย่างเช่น ขาด Template/Resources (ติดต่อทางระบบแชทเท่านั้น) </p>
                                                    <p style="font-size: 18px;letter-spacing: 0.6px;line-height: 35px;"> 4. ใช้ข้อมูลใน Resources ที่ให้มาประกอบในการทำงาน หากข้อมูลไม่เพียงพอสามารถ
                                                        Search internet เพื่อเป็นข้อมูลประกอบได้แต่ต้องนำข้อมูลมาเรียบเรียงใหม่เป็น Own words (ห้ามก๊อปวางโดยเด็ดขาด) </p>

                                                    <p style="font-size: 18px;line-height: 35px;"> 5. เน้นการเขียนงานโดยใช้ Own words และอ้างอิงด้วยแหล่งที่มาของข้อมูลที่ใช้ประกอบ </p>
                                                    <p style="font-size: 18px;letter-spacing: 0.6px;line-height: 35px;"> 6. กรณีเป็นงานกลุ่มโปรเจ็คหรือรายงาน ทีมงานสามารถทำการสมมติชื่อสมาชิกกลุ่มขึ้นมาและระบุหน้าที่ รับผิดชอบตามชื่อแต่ล่ะคน
                                                        โดยจำลองสถานการณ์ขึ้นมาใช้ให้เหมาะสมกับคำสั่งงาน </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 7. ก่อนส่งงานควรตรวจเช็คความเรียบร้อยให้แน่ใจว่าได้ดำเนินการครบทุกคำสั่งของงานทั้งหมดและตรวจสอบข้อกำหนดการตั้งค่าหน้ากระดาษต่าง ๆ
                                                        (ถ้ามี) เช่น ใช้ตัวหนังสือสีดำ, ขนาด 18, ฟอนต์ Calibri </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 8. แยกไฟล์ โฟร์เดอร์ ของงานแต่ล่ะ Task ให้ชัดเจนพร้อมระบุตัวเลขกำกับใน Template ที่ใช้ตอบในแต่ล่ะข้อ (ถ้ามี) </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 9. กรณีที่เป็นงานที่ต้องแก้ไข ไม่ว่าจะเป็น Feedback หรือ Re-feedback ให้ทำการ Highlight ส่วนที่แก้ไขด้วยสีเหลือง </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 10. อธิบายงานแต่ละส่วนผ่านคลิปวิดีโอด้วยภาพและเสียงที่ชัดเจน </p>
                                                </div>
                                                <div class="col-md-2 "></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfix">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#exp10" aria-expanded="false" aria-controls="collapseseven" style="font-size: 19px;">
                                                <center>การหักรายได้ในกรณีต่าง</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="exp10" class="collapse" aria-labelledby="headingfix" data-parent="#accordion10" style="font-size: 16px;">
                                            <div class="card-body">
                                                <center>
                                                    <p style="font-size: 20px;"> ตารางสรุปการหักรายได้กรณีต่างๆที่ต้องรู้ก่อนทำงาน </p>
                                                </center>
                                                <li class="mt-2 mb-2"><b style="font-size: 20px;">ส่งงานช้า</b></li>
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr style="text-align:center;">
                                                            <th style="width: 400px;">หัวข้อการหัก</th>
                                                            <th style="width: 150px;">จำนวนที่ถูกหัก</th>
                                                            <th>แนวทางแก้ไข</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p> ส่งงานช้าไม่เกิน 12 ชม.สุดท้าย
                                                                    (ระบบนับเวลาถอยหลังยังคงทำงานอยู่) </p>
                                                            </td>
                                                            <td>
                                                                <p>ได้ค่าตอบแทน
                                                                    แต่ถูกหัก 100 บาท
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p>วางแผนเวลาในการทำงานและส่งงานตรงตามวันเวลาที่กำหนดหรือส่งก่อนล่วงหน้า 1 วัน</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>ส่งงานช้าเกิน 12 ชม.สุดท้าย
                                                                    
                                                                    (ไม่มีกำหนดวันที่เกินขึ้นอยู่กับความยินยอมของทางผู้เรียน)
                                                                    
                                                                    (ระบบนับเวลาถอยหลังหยุดทำงาน)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p>ได้ค่าตอบแทน
                                                                    แต่ถูกหัก 200 บาท
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p>ติดต่อเจ้าหน้าที่ภายใน 12 ชม.สุดท้าย (เท่านั้น) กรณีนี้อาจไม่สามารถส่งงานได้ขึ้นอยู่กับความยินยอมของผู้เรียน</p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <br>

                                                <li class="mt-2 mb-2"><b style="font-size: 20px;"> การยกเลิกงาน </b></li>
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr style="text-align:center;">
                                                            <th style="width: 400px;">หัวข้อการหัก</th>
                                                            <th style="width: 150px;">จำนวนที่ถูกหัก</th>
                                                            <th>แนวทางแก้ไข</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p> กดยกเลิกงานขณะที่เหลือเวลาส่งมากกว่า 48 ชม. </p>
                                                            </td>
                                                            <td>
                                                                <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                            </td>
                                                            <td>
                                                                <p>เลือกงานที่ตรงตามทักษะความสามารถตนเองวางแผนเวลาในการทำงานและตรวจเช็ครายละเอียดงานอย่างรอบคอบก่อนกด Confirm Order </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>กดยกเลิกงานขณะที่เหลือเวลาส่งน้อยกว่า 48 ชม.
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p>ไม่ได้ค่าตอบแทนและถูกหัก 200 บาท </p>
                                                            </td>
                                                            <td>
                                                                <p>หากประเมินเวลาและทักษะความสามารถตนเองแล้วว่าไม่สามารถทำงานให้สำเร็จได้ให้ทำการกดปุ่มยกเลิก Order ทันที</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>ไม่กดยกเลิกงาน </p>
                                                            </td>
                                                            <td>
                                                                <p>ไม่ได้ค่าตอบแทนและถูกหัก 300 บาท </p>
                                                            </td>
                                                            <td>
                                                                <p>กรณีไม่กดยกเลิกงานและไม่มีการส่งงานอาจถูกระบบระงับบัญชีการใช้งานแบบชั่วคราวและถาวร</p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <br>

                                                <li class="mt-2 mb-2"><b style="font-size: 20px;"> คุณภาพผลงาน </b></li>
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr style="text-align:center;">
                                                            <th style="width: 400px;">หัวข้อการหัก</th>
                                                            <th style="width: 150px;">จำนวนที่ถูกหัก</th>
                                                            <th>แนวทางแก้ไข</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p> คุณภาพผลงานไม่ถึงเกณฑ์ 50% </p>
                                                            </td>
                                                            <td>
                                                                <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                            </td>
                                                            <td>
                                                                <p>เลือกงานที่ตรงตามทักษะความสามารถตนเองวางแผนเวลาในการทำงานและ
                                                                    ตรวจเช็ครายละเอียดงานอย่างรอบคอบก่อนกด "ยืนยันออร์เดอร์" กรณีผลงานไม่
                                                                    ถึงเกณฑ์บ่อยครั้งอาจถูกระบบยกเลิกตำแหน่งงานดังกล่าว </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>คัดลอกผลงานหรือข้อมูลอินเตอร์เน็ต โดยไม่มีการแก้ไขใดๆเกิน  1 Paragraph หรือ 4 บรรทัดขึ้นไป </p>
                                                            </td>
                                                            <td>
                                                                <p>ไม่ได้ค่าตอบแทนและถูกหัก 100 บาท </p>
                                                            </td>
                                                            <td>
                                                                <p>หากข้อมูลในออร์เดอร์ ไม่เพียงพอติวเตอร์สามารถหาข้อมูลจากแหล่งเว็บไซต์
                                                                    อินเตอร์เน็ตเพิ่มเติมได้โดยต้อง Rewrite ใหม่ก่อนนำมาใช้ประกอบผลงานทุกครั้ง</p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfix">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#exp11" aria-expanded="false" aria-controls="collapseseven" style="font-size: 19px;">
                                                <center>การถอนรายได้</center>
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="exp11" class="collapse" aria-labelledby="headingfix" data-parent="#accordion11" style="font-size: 16px;">
                                            <div class="card-body row">
                                                <div class="col-md-2 "></div>
                                                <div class="col-md-9 col-sm-12 ">
                                                    <p style="font-size: 18px;line-height: 35px;"> 1. ปุ่มถอนรายได้จะแสดงขึ้นหลังจากติวเตอร์ส่งงานแล้วภายในระยะเวลา 15 วันแต่ไม่เกิน 65 วัน
                                                        โดยออร์เดอร์ นั้นจะต้องไม่อยู่ในสถานะถูก Feedback หรือ Re-Feedback </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 2. ปุ่มถอนเงินนั้นจะแสดงขึ้นในหน้า "งานของฉัน" ว่า "กดถอนรายได้" </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 3. หลังจากปุ่มถอนเงิน "กดถอนรายได้" แสดงขึ้นติวเตอร์จะต้องทำการกดถอนรายได้ออร์เดอร์ ดังกล่าวภายในระยะเวลา 30
                                                        วันเท่านั้น หากครบกำหนด 30 วันแล้วไม่มีการกดปุ่ม "กดถอนรายได้" จะถือว่าติวเตอร์ได้สละสิทธิ์รายได้ของออร์เดอร์ดังกล่าวทันทีและระบบจะขึ้นสถานะว่า
                                                        "การถอนหมดอายุ" คือหมดอายุการถอนเงิน </p>
                                                    <p style="font-size: 18px;line-height: 35px;"> 4. ทางบริษัทไม่คิดค่าใช้จ่ายใด ๆ ในการถอนรายได้ของติวเตอร์ </p>
                                                </div>
                                                <div class="col-md-1 "></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>

                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } else { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOW TO BUY ?

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                HOW TO SELL ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                HOW TO BY PACKAGE ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                HOW TO REGISTER ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } ?>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<br>
<!-- <div class="modal fade" tabindex="-1" role="dialog" id="order_c">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title">Modal title</h5>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="agree_user_manual">Agree</button>
            </div>
        </div>
    </div>
</div> -->