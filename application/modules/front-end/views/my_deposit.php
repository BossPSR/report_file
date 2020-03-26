<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php
$this->db->select('*,count(status_delivery) as sum_delivery');
$this->db->from('tbl_upload_order');
$this->db->where('userId', $user['idUser']);
$this->db->where('status_delivery', 1);

$sm_del = $this->db->get()->row_array();
?>
<br>
<h2 class="text-center" style="margin-top: 15px;">Deposit</h2>
<hr class="line_package">
<br>
<!--services img area-->
<div class="services_gallery mt-30">
  <div class="container">
    <div class="row">
      <!-- <div class="col-lg-3 col-md-3">
        <div class="row">
          <div class="col-lg-12 col-md-12 wall-center shadow-b hight-100 " style=" padding-right: 0px; padding-left: 0px;">
            <div class="p-15 text-center header-profile">
              โปรไฟล์ของฉัน
            </div>
            <div class="p-15 text-center">
              <img class="profile-small" src="public/image/man.png" alt="">
            </div>
            <div class="p-15 text-center font18">
              <?php if ($team) { ?>
                <b><?= $team['name']; ?></b>
              <?php } else { ?>
                <?= $user['username']; ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="col-lg-5 col-md-5 wall-center shadow-b ml-20">
            <div class="p-30 text-center color-w">
              My wallet
            </div>
            <div class="p-15 text-center color-p">
              $ <?php echo number_format($user['cash']); ?>
            </div>
            <div class="pb-18 text-center">
              <?php if ($user) { ?>
                <a href="my-deposit" class="btn btn-outline-dark button-100">ถอนเงิน</a>
              <?php } else { ?>

              <?php } ?>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 wall-center shadow-b ml-20">
            <div class="p-30 text-center color-w">
              My Jobs
            </div>
            <div class="p-15 text-center color-p">
              <?php echo number_format($sm_del['sum_delivery']); ?>
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
                <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน" id="paypal_price" style="height: 51px;text-align: center;font-size: 20px;">
              </div>
            </div>
            <div class="row text-center wall-center mtb-20">
              <div class="col-md-4">
                <div id="paypal-button-containers" style="width: 300px"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function setInputFilter(textbox, inputFilter) {
    ["input"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }

  setInputFilter(document.getElementById("paypal_price"), function(value) {
    return /^-?\d*$/.test(value);

  });


  paypal_price();

  var paypal_price = '';

  function paypal_price() {
    $("#paypal_price").keyup(function() {
      let paypal_priceVal = $('#paypal_price').val();
      paypal_price = paypal_priceVal;
    });
  }

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
          url: 'my_deposit_paypal',
          method: 'post',
          data: {
            paypal_price: paypal_price,
            userId: <?php echo $userId['id']; ?>,
          },
          success: function(response) {
            let dataSucces = JSON.parse(response);
            console.log(dataSucces);
            window.location.href = 'my-deposit';
          }
        });

      });
    }
  }).render('#paypal-button-containers');
</script>