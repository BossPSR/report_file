<br>
<h2 class="text-center" style="margin-top: 15px;">My Cashback</h2>
<hr class="line_package">
<br>
<!--Checkout page section-->
<div class="Checkout_section">
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center" data-aos="zoom-in">
                    <img src="public/image/501890-PIIDRV-434.png" style="width: 300px;" alt="">
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="vi">Victory!</div>
                </div>
                <div class="col-lg-12 col-md-12 text-center type-vi">
                    ประเภทของรางวัล
                </div>
                <div class="col-lg-12 col-md-12 text-center" style="color: #b6b6b6;">
                    Rating / Upload
                    <hr style="width: 59%;">
                </div>
                <div class="col-lg-2 col-md-2 text-center"></div>
                <div class="col-lg-4 col-md-4 text-center ">
                    <div class="detail-vi"> รางวัล : เมื่อสั่งซื้อเอกสารครบ 30 ออร์เดอร์ รับเลย 100 Wallet </div>
                    <div style="color: #b6b6b6;"> รายละเอียดรางวัล </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center" style="border-left: 1px solid #e5e5e5;margin-top: 20px;">
                    <!-- <button class="btn btn-success">รับเลย</button> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#before">ประวัติย้อนหลัง</button>
                </div>
                <div class="col-lg-2 col-md-2 text-center"></div>
            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<br>


<!-- Modal -->
<div class="modal fade" id="before" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ประวัติย้อนหลัง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (!empty($cashback)) : ?>
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col" style="width: 100px;">type</th>
                                <th scope="col">cashback</th>
                                <th scope="col">cashback_detail</th>
                                <th scope="col">create_at</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $this->db->get('tbl_cashback', ['']); ?>
                            <?php foreach ($cashback as $key => $cashback) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $cashback['type_cashback']; ?></td>
                                    <td><?php echo number_format($cashback['cashback']); ?></td>
                                    <td><?php echo $cashback['cashback_detail']; ?></td>
                                    <td><?php echo date("d F Y", strtotime($cashback['create_at'])); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h4 style="color: #0073ff;">ท่านยังไม่มีข้อมูลในระบบ</h4>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.counter').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({
            countNum: $this.text()
        }).animate({
                countNum: countTo
            },

            {

                duration: 8000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }

            });

    });
</script>