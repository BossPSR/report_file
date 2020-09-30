<h2 class="text-center" style="margin-top: 30px;"> แพ็คเกจ</h2>
<hr class="line_package">
<br>
<div class="priceing_table">
	<div class="container">
		<div class="row">
			<?php $i = 1; ?>
			<?php $e = 1; ?>
			<?php foreach ($package as $key => $package) : ?>
				<!--price table area -->

				<div class="col-lg-4 col-md-6">
					<div class="single_priceing">
						<div class="priceing_title">
							<h1>Returns</h1>
						</div>
						<div class="priceing_list">
							<h1><span><?php echo $package['title_pk']; ?></h1>
							<h1><span>$<?php echo $package['price_pk']; ?></span>/<?php echo $package['time_pk']; ?> (ราคาปกติ)</h1>
							<h1 style="    padding: 25px 0px;border-top: 1px solid #e2e2e2;background: #cae3ff;"><span>$<?php echo $package['new_price']; ?></span>/<?php echo $package['time_pk']; ?> (ราคาพิเศษ)</h1>
							<div class="row" style="padding: 18px 0px 18px 0;">
								<div class="col-12">
									<label id="text_commission<?php echo $package['id']; ?>" style="font-size: 19px;">หากมีผู้แนะนำ สามารถใส่เลขผู้แนะนำได้ที่นี้</label>
									<input type="text" name="commission" id="check_commission<?php echo $package['id']; ?>" class="form-control form-group" placeholder="ใส่ Code ส่วนลดของคุณที่นี้" style="text-transform: uppercase;">
									<label id="checkText_commission<?php echo $package['id']; ?>" style="font-size: 15px;"></label>
								</div>
							</div>
							<ul style="font-size: 20px;">
								<li><?php echo $package['description_pk']; ?></li>
								<li>1 Domain</li>
								<li>PHP 5 Enbled</li>
								<li>24H – Support</li>
							</ul>

							<?php if ($userId['package_user'] >= $package['id']) : ?>
								<button type="button" class="btn btn-secondary">Buy package</button>
							<?php else : ?>
								<a class="list_button paypal-button-container<?php echo $i; ?>" href="#" onclick="testCheck();">purchase now <?php echo $package['id']; ?> </a>

							<?php endif; ?>
						</div>
					</div>
				</div>
				<script>
					var pricePK<?php echo $package['id'];?> = '<?php echo $package['price_pk']; ?>';

					$(document).ready(function() {
						$("#check_commission<?php echo $package['id']; ?>").keyup(function() {
							$("#checkText_commission<?php echo $package['id']; ?>").html('');
							pricePK<?php echo $package['id'];?> = '<?php echo $package['price_pk']; ?>';
							var check_commission<?php echo $package['id']; ?> = $("#check_commission<?php echo $package['id']; ?>").val().toUpperCase();

							$.ajax({
									url: 'paypal_check_commission',
									method: 'post',
									data: {
										commission:check_commission<?php echo $package['id']; ?>,
										idUser:'<?php echo $userId['idUser']; ?>',
									},
									success: function(response) {
										let dataSucces = JSON.parse(response);
										console.log(dataSucces);
										if (dataSucces.successful === true) {
												pricePK<?php echo $package['id'];?> = "<?php echo $package['new_price'] ?>";
											$("#checkText_commission<?php echo $package['id']; ?>").html('<span style="color:green;">*สามารถใช้ Commiession นี้ได้*</span>');
										}

										if (dataSucces.successful === false) {
												if (dataSucces.message == 'user not found.') {
														$("#checkText_commission<?php echo $package['id']; ?>").html('<span style="color:red;">*ไม่มี Commission นี้อยู่ในระบบ*</span>');
												}
												if (dataSucces.message == 'commission found.') {
														$("#checkText_commission<?php echo $package['id']; ?>").html('<span style="color:red;">*ท่านเคยใช้ Commission นี้แล้ว*</span>');
												}
										}
									}
								});
						});
					});
				</script>
				<!-- <script>
          $("#check<?php echo $package['id']; ?>").change(function() {
            $('#check_commission<?php echo $package['id']; ?>').val(null);
            $('#text_commission<?php echo $package['id']; ?>').css('display', 'none');
            $('#input_commission<?php echo $package['id']; ?>').css('display', 'none');
            if (this.checked) {
              $('#check_commission<?php echo $package['id']; ?>').prop("disabled", false);
              $('#input_commission<?php echo $package['id']; ?>').css('display', 'inline-block');
            } else {
              $('#check_commission<?php echo $package['id']; ?>').prop("disabled", true);
              $('#text_commission<?php echo $package['id']; ?>').css('display', 'inline-block');
            }
          });
        </script> -->



				<!--price table  end-->

				
				<script>
					
					paypal.Buttons({
						createOrder: function(data, actions) {
							return actions.order.create({
								purchase_units: [{
									amount: {

										value: pricePK<?php echo $package['id'];?>

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
										commission: $('#check_commission<?php echo $package['id']; ?>').val().toUpperCase(),
									},
									success: function(response) {
										let dataSucces = JSON.parse(response);
										console.log(dataSucces);
										window.location.href = 'home';

									}
								});

							});
						}
					}).render('.paypal-button-container<?php echo $e++; ?>');
				</script>
			<?php
				$i++;
			endforeach;
			?>

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
