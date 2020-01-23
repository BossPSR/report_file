<style>
  .free-button-container{
    display:flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    height:100%;
    width:100%;
  }
  .freeButton{
    width:100%;
    
  }
  .freeButton > button{
    width:100%;
    padding:15px;
    font-size: 18px;
  }
</style>
<br>
<h2 class="text-center" style="margin-top: 30px;">Package</h2>
<hr class="line_package">
<br>
<div class="container">
  <div class="row" style="margin-top: 20px;">
    <?php $i = 1; ?>
    <?php $e = 1; ?>
    <?php foreach ($package as $key => $package) : ?>
      

      <div class="col-lg-6 col-md-6 col-6 line_package_m hover-fx">
        <article class="single_product" style="border-radius:5%; box-shadow: 0 5px 50px 0 rgba(0, 0, 0, 0.2); position:relative; height: 100%;">
          <div class="label_product">
            <span class="label_sale">Sale</span>
          </div>
          <figure>
            <div class="product_thumb">

            </div>
            <div class="product_content grid_content" style="position: relative;">
              <h4 style="MARGIN-BOTTOM: 2rem;"><?php echo $package['title_pk']; ?></h4>
              <div class="price_box">
                <span class="current_price" style="font-size:30px">$<?php echo $package['price_pk']; ?>/<?php echo $package['time_pk']; ?></span>
              </div>
              <h3 class="product_name grid_name"><?php echo $package['description_pk']; ?></h3><br>
              <!-- <button type="button" class="btn btn-primary" style="width: 80%">Choose Annual</button> -->
              <?php if ($i == 2) { ?>
                <div class="paypal-button-container<?php echo $i; ?>"></div>
              <?php }else{ ?>
                <div class="free-button-container">
                  <div class="freeButton">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Free</button>
                  </div>
                      
                </div>
              <?php } 
                $i++;
              ?>
            </div>
          </figure>
        </article>
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
        }).render('.paypal-button-container<?php echo $e; ?>');
      </script>
    <?php $e++; endforeach; ?>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-top: none;">
        <h5 class="modal-title" id="exampleModalLabel">Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ท่านต้องการใช้ Free Package ใช่มั้ย?
      </div>
      <div class="modal-footer">
        <form action="free_package" method="post">
          <input type="hidden" name="user_id" value="<?php echo $userId['id']; ?>">
            <button type="submit" class="btn btn-success">ตกลง</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        </form>
      
      </div>
    </div>
  </div>
</div>
