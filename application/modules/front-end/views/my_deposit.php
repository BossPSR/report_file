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
                    <div class="col-lg-5 col-md-5 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            ยอดคงเหลือในบัญชี
                        </div>
                        <div class="p-15 text-center color-p">
                            ฿0
                        </div>
                        <div class="pb-18 text-center">
                            <a href="my-deposit" class="btn btn-outline-dark button-100">ถอนเงิน</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            เอกสารของฉันทั้งหมด
                        </div>
                        <div class="p-15 text-center color-p">
                            11 +
                        </div>
                        <div class="pb-18 text-center">
                            <button type="button" class="btn btn-primary">จัดการเอกสาร</button>
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-11 wall-center shadow-b table-w mtp-20">
                        <div class="text-center mbc-20">
                            เติมเงินเข้าสู่ระบบ
                        </div>
                        <hr>
                        <div class="text-center">
                            <img src="public/image/Gadgeteer_-477-Feb.-19-21.03.16.png" alt="" style="width: 300px;">
                        </div>
                        <div class="row text-center wall-center mtb-17-30">
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" placeholder="กรอกจำนวนเงิน" id="paypal_price" style="height: 51px;text-align: center;font-size: 20px;">
                            </div>
                        </div>
                        <div class="row text-center wall-center mtb-20">
                            <div class="col-md-4">
                                <div id="paypal-button-containers"  style="width: 300px"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>


$('#paypal_price').keyup(function() {   
    let paypal_price = this.value;
    console.log(paypal_price);
});

        paypal.Buttons({
          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: paypal_price
                }
              }]
            });
          },
          onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name);
              // Call your server to save the transaction
              // return fetch('/ss', {
              //   method: 'post',
              //   headers: {
              //     'content-type': 'application/json'
              //   },
              //   body: JSON.stringify({
              //     orderID: data.orderID
              //   })
              // });
              console.log(details);
              $.ajax({
                url: 'paypal_success',
                method: 'post',
                data: {
                  orderID: data.orderID,
                  payerID: data.payerID,
                  user_id: <?php echo $userId['id']; ?>,
                  first_name: details.payer.name.given_name,
                  last_name: details.payer.name.surname,
                  create_time: details.create_time,
                  amount: details.purchase_units['0'].amount.value,
                  currency_code: details.purchase_units['0'].amount.currency_code,
                },
                success: function(response) {
                  let dataSucces = JSON.parse(response);
                  console.log(dataSucces);
                  window.location.href = 'my-profile';
                }
              });

            });
          }
        }).render('#paypal-button-containers');
      </script>