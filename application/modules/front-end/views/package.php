<h2 class="text-center" style="margin-top: 30px;">Package</h2>
<hr class="line_package">
<br>
<div class="priceing_table">
  <div class="container">
    <div class="row">
      <?php $i = 1; ?>
      <?php $e = 1; ?>
      <?php foreach ($package as $key => $package) : ?>
        <!--price table area -->

        <div class="col-lg-3 col-md-6">
          <div class="single_priceing">
            <div class="priceing_title">
              <h1>Returns</h1>
            </div>
            <div class="priceing_list">
              <h1><span>$<?php echo $package['price_pk']; ?></span>/<?php echo $package['time_pk']; ?></h1>
              <ul>
                <li><?php echo $package['description_pk']; ?></li>
                <li>1 Domain</li>
                <li>PHP 5 Enbled</li>
								<li>24H – Support</li>
								<li>
									<div>Commission</div>
									<div>
										<input type="checkbox" id="check<?php echo $package['id'];?>">
										<label id="text_commission<?php echo $package['id'];?>">หากมีผู้แนะนำ สามารถใส่เลขผู้แนะนำได้ค่ะ</label>
										<label id="input_commission<?php echo $package['id'];?>" style="display: none;">
											<input type="text" name="commission" id="check_commission<?php echo $package['id'];?>" class="form-control" disabled>
										</label>
									</div>
								</li>
              </ul>
              <a class="list_button paypal-button-container<?php echo $i++; ?>" href="#">purchase now </a>
            </div>
          </div>
				</div>
				
				<script>

					$("#check<?php echo $package['id'];?>").change(function() {
							$('#check_commission<?php echo $package['id'];?>').val(null);
							$('#text_commission<?php echo $package['id'];?>').css('display','none');
							$('#input_commission<?php echo $package['id'];?>').css('display','none');
							if(this.checked) {
								$('#check_commission<?php echo $package['id'];?>').prop("disabled",false);
								$('#input_commission<?php echo $package['id'];?>').css('display','inline-block');
							}else{
								$('#check_commission<?php echo $package['id'];?>').prop("disabled",true);
								$('#text_commission<?php echo $package['id'];?>').css('display','inline-block');
							}
					});

				</script>



        <!--price table  end-->


        <script>
          paypal.Buttons({
            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{
                  amount: {

                    value: '<?php echo $package['price_pk']; ?>'

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
                    user_id: '<?php echo $userId['idUser']; ?>',
                    package: '<?php echo $package['id']; ?>',
                    first_name: details.payer.name.given_name,
                    last_name: details.payer.name.surname,
                    create_time: details.create_time,
                    amount: details.purchase_units['0'].amount.value,
                    currency_code: details.purchase_units['0'].amount.currency_code,
										commission: $('#check_commission<?php echo $package['id'];?>').val(),
                  },
                  success: function(response) {
                    let dataSucces = JSON.parse(response);
                    console.log(dataSucces);
                    window.location.href = '/mainbuysell';

                  }
                });

              });
            }
          }).render('.paypal-button-container<?php echo $e++; ?>');
        </script>
      <?php  endforeach; ?>

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

        <a href="store"><button type="button" class="btn btn-success">ตกลง</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>

      </div>
    </div>
  </div>
</div>
