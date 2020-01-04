<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array() ?>
<br>
<h2 class="text-center" style="margin-top: 15px;" data-aos="zoom-in">Rejected</h2>
<hr class="line_package">
<br>
<!--Checkout page section-->
<div class="Checkout_section">
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-4 col-md-4" style="margin-bottom: 40px;">
                    <span style="color:darkgray;margin-left: 13px;">Name</span>
                    <input class="form-control" name="" id="" value="<?php echo $user['username'] ?>" style="height: calc(2.25rem + 20px);border-top: 0px;border-left: 0px;border-right: 0px;font-size: 33px;    background-color: #ffffff;" readonly>
                </div>
                <div class="col-lg-4 col-md-4" style="margin-bottom: 40px;">
                    <span style="color:darkgray;margin-left: 13px;">Total number</span>
                    <input class="form-control" name="" id="" value="3" style="height: calc(2.25rem + 20px);border-top: 0px;border-left: 0px;border-right: 0px;font-size: 33px;    background-color: #ffffff;" readonly>
                </div>
                <div class="col-lg-12 col-md-12 text-center " >
                    <table id="table_id" class="table" style="margin-bottom: 5rem;">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th class="text-left" scope="col">ฺBook</th>
                                <th class="text-left" scope="col">Rejected</th>
                                <th class="text-left" scope="col">Date</th>
                                <th class="text-right" scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody style="line-height: 50px;font-size: 16px;">
                            <tr style="background-color: #ff000045;">
                                <th scope="row">1</th>
                                <td class="text-left">อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร</td>
                                <td class="text-left">50</td>
                                <td class="text-left">2020-01-01</td>
                                <td class="text-right"><div><span class="badge badge-danger" style="font-size: 15px;">report</span></div></td>
                                <td></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-left">ผลการค้นหา ผลการค้นเว็บ อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร</td>
                                <td class="text-left">47</td>
                                <td class="text-left">2020-01-01</td>
                                <td class="text-right"><div><span class="badge badge-warning" style="font-size: 15px;">warning</span></div></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="text-left">สำนักงานสลากกินแบ่งรัฐบาล ช่วยราษฎร์ เสริมรัฐ ยืนหยัดยุติธรรม</td>
                                <td class="text-left">45</td>
                                <td class="text-left">2020-01-01</td>
                                <td class="text-right"><div><span class="badge badge-warning" style="font-size: 15px;">warning</span></div></td>
                                <td></td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
