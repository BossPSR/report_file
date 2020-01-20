<br>
<h2 class="text-center" style="margin-top: 30px;">Package</h2>
<hr class="line_package">
<br>
<div class="container">
  <div class="row" style="margin-top: 20px;">
    <?php $i = 1; ?>
    <?php $e = 1; ?>
    <?php foreach ($package as $key => $package) : ?>
      <div class="col-lg-4 col-md-4 col-12">
      </div>

      <div class="col-lg-4 col-md-4 col-12 line_package_m hover-fx">
        <article class="single_product" style="border-radius:5%; box-shadow: 0 5px 50px 0 rgba(0, 0, 0, 0.2); position:relative;">
          <div class="label_product">
            <span class="label_sale">Sale</span>
          </div>
          <figure>
            <div class="product_thumb">

            </div>
            <div class="product_content grid_content">
              <h4 style="MARGIN-BOTTOM: 2rem;"><?php echo $package['title_pk']; ?></h4>
              <div class="price_box">
                <span class="current_price" style="font-size:30px">$<?php echo $package['price_pk']; ?>/<?php echo $package['time_pk']; ?></span>
              </div>
              <h3 class="product_name grid_name"><a href="product-details.html"><?php echo $package['description_pk']; ?></a></h3><br>
              <!-- <button type="button" class="btn btn-primary" style="width: 80%">Choose Annual</button> -->

              <div class="paypal-button-container<?php echo $i++; ?>"></div>
            </div>
          </figure>
        </article>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      </div>
      <script>
        paypal.Buttons({
          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '10.00'
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
        }).render('.paypal-button-container<?php echo $e++; ?>');
      </script>
    <?php endforeach; ?>




    <!-- <div class="col-lg-4 col-md-4 col-12 line_package_m hover-fx">
            <article class="single_product" style="border-radius:5%; box-shadow: 0 5px 50px 0 rgba(0, 0, 0, 0.2);">
                <figure>
                    <div class="product_thumb"></div>
                    <div class="product_content grid_content">
                        <h4 style="MARGIN-BOTTOM: 2rem;">Monthly</h4>
                        <div class="price_box">

                            <span class="current_price" style="font-size:30px">$39.95/mo</span>
                        </div>

                        <h3 class="product_name grid_name"><a href="product-details.html">เหมาะสำหรับเว็บไซต์ขนาดใหญ่</a></h3>
                        <h3 class="product_name">จำนวนข้อมูลหรือมีผู้เข้าชมจำนวนมาก</a></h3><br>
                        <button type="button" class="btn btn-primary" style="width: 80%">Choose Quarterly</button>
                    </div>
                  
                </figure>
            </article>
        </div> -->

  </div>
</div>
<br>


