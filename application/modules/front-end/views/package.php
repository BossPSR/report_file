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
						<div class="priceing_title" style="<?php echo $package['id'] == '1' ? 'background: #ababab' : ''; ?> <?php echo $package['id'] == '2' ? 'background: #ffeb00' : ''; ?> <?php echo $package['id'] == '3' ? 'background: #00d3f5' : ''; ?> ;">
							<h1 style="<?php echo $package['id'] == '2' ? 'color: black' : ''; ?>;    font-size: 23px;">แพ๊คเกจระดับ <?php echo $package['title_pk']; ?></h1>
						</div>
						<div class="priceing_list">
							<h1><span style="<?php echo $package['id'] == '1' ? 'color: #ababab' : ''; ?> <?php echo $package['id'] == '2' ? 'color: #ffeb00' : ''; ?> <?php echo $package['id'] == '3' ? 'color: #00d3f5' : ''; ?> ;"><?php echo $package['title_pk']; ?></h1>
							<h1 style="padding: 0px 0 24px;"><span style="font-size: 28px;    color: #5f5f5f;">$<?php echo $package['price_pk']; ?></span>/ (ราคาปกติ)</h1>
							<h1 style="padding: 25px 0px;border-top: 1px solid #e2e2e2;background: #fff93554;"><span style="color:#ff6c6c">$<?php echo $package['new_price']; ?></span>/ (ราคาพิเศษเมื่อใส่ Code)</h1>
							<div class="row" style="padding: 18px 0px 18px 0;">
								<div class="col-12">

									<input type="text" name="commission" id="check_commission<?php echo $package['id']; ?>" class="form-control form-group" placeholder="ใส่ Code ส่วนลดของคุณที่นี้" style="text-transform: uppercase;">
									<span id="checkText_commission<?php echo $package['id']; ?>" style="font-size: 15px;"></span>
								</div>

							</div>
							<ul style="">
								<li><a style="margin: 0;font-size: 16px;" href="" data-toggle="modal" data-target="#exampleModal<?php echo $package['id']; ?>"> รายละเอียดเพิ่มเติม </a></li>
								<!-- <li> echo $package['description_pk']; ?></li>
								<li>1 Domain</li>
								<li>PHP 5 Enbled</li> -->

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
					var pricePK<?php echo $package['id']; ?> = '<?php echo $package['price_pk']; ?>';

					$(document).ready(function() {
						$("#check_commission<?php echo $package['id']; ?>").keyup(function() {
							$("#checkText_commission<?php echo $package['id']; ?>").html('');
							pricePK<?php echo $package['id']; ?> = '<?php echo $package['price_pk']; ?>';
							var check_commission<?php echo $package['id']; ?> = $("#check_commission<?php echo $package['id']; ?>").val().toUpperCase();

							$.ajax({
								url: 'paypal_check_commission',
								method: 'post',
								data: {
									commission: check_commission<?php echo $package['id']; ?>,
									idUser: '<?php echo $userId['idUser']; ?>',
								},
								success: function(response) {
									let dataSucces = JSON.parse(response);
									console.log(dataSucces);
									if (dataSucces.successful === true) {
										pricePK<?php echo $package['id']; ?> = "<?php echo $package['new_price'] ?>";
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

										value: pricePK<?php echo $package['id']; ?>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">แพ็คเกจ 6 เดือน ราคา $9.95</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4 style="font-size: 21px;color: #0088ff;">เงื่อนไขการรับและถอนค่าแนะนำ</h4>
				<p style="font-size: 18px;">1. หากผู้เรียนสมัคร Package นี้ผู้เรียนจะได้รับค่าแนะนำจากผู้ที่ซื้อ Packageนี้เท่านั้นเป็นจำนวนเงิน $10 ต่อการแนะนำ 1 ท่าน โดยค่าแนะนำนี้ผู้เรียนจะได้รับหลังจากที่ผู้ที่ท่านแนะนำได้สมัครแพ็คเก็จอันหนึ่งอันใดเป็นที่เรียบร้อยแล้วเท่านั้น</p>
				<p style="font-size: 18px;">2. ผู้เรียนสามารถถอนค่าคอมมิชชั่นและยอดเงินคงเหลือได้โดยผ่านรระบบถอนเงินโดยมีขั้นต่ำในการถอนต่อครั้งไม่ต่ำกว่า 100 ดอลล่าร์สหรัฐ (ระบบจะดำเนินการให้ภายใน 14 วัน ผู้เรียนสามารถเช็คได้จากหน้า My Receipt ใบเสร็จของฉัน)</p>
				<p style="font-size: 18px;">3. การถอนรายได้ค่าแนะนำในแต่ล่ะครั้งระบบจะมีการเรียกเก็บค่าธรรมเนียมโดยระบบจะมีการแจ้งให้ท่านทราบในขั้นตอนการถอนทุกครั้งและค่าธรรมเนียมนี้ระบบอาจมีการเปลี่ยนแปลงในภายหลังโดยไม่ต้องแจ้งให้ท่านทราบก่อนล่วงหน้า</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">แพ็คเกจ 12 เดือน. ราคา $19.95</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4 style="font-size: 21px;color: #0088ff;">เงื่อนไขการรับและถอนค่าแนะนำ</h4>
				<p style="font-size: 18px;">1.	หากผู้เรียนสมัคร Package นี้ผู้เรียนจะได้รับค่าแนะนำจากผู้ที่ซื้อ Package นี้ $20 และยังได้รับค่าแนะนำจาก Package  $59.95 เป็นจำนวนเงิน $10 ด้วยเช่นกัน โดยค่าแนะนำนี้ผู้เรียนจะได้รับหลังจากที่ผู้ที่ท่านแนะนำได้สมัครแพ็คเกจอันหนึ่งอันใดเป็นที่เรียบร้อยแล้วเท่านั้น</p>
				<p style="font-size: 18px;">2.	ผู้เรียนสามารถถอนค่าคอมมิชชั่นและยอดเงินคงเหลือได้โดยผ่านรระบบถอนเงินโดยมีขั้นต่ำในการถอนต่อครั้งไม่ต่ำกว่า  100 ดอลล่าร์สหรัฐ (ระบบจะดำเนินการให้ภายใน 14 วัน ผู้เรียนสามารถเช็คได้จากหน้า My Receipt  ใบเสร็จของฉัน)</p>
				<p style="font-size: 18px;">3.	การถอนรายได้ค่าแนะนำในแต่ล่ะครั้งระบบจะมีการเรียกเก็บค่าธรรมเนียมโดยระบบจะมีการแจ้งให้ท่านทราบในขั้นตอนการถอนทุกครั้งและค่าธรรมเนียมนี้ระบบอาจมีการเปลี่ยนแปลงในภายหลังโดยไม่ต้องแจ้งให้ท่านทราบก่อนล่วงหน้า</p>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">แพ็คเกจ 12 เดือน. ราคา $49.95</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5 style="font-size: 21px;color: #0088ff;">เงื่อนไขการรับและถอนค่าแนะนำ</h5>
				<p style="font-size: 18px;">1.	หากผู้เรียนสมัคร Package นี้ผู้เรียนจะได้รับค่าแนะนำจากผู้ที่ซื้อ Package นี้เป็นจำนวนเงิน $40และยังได้รับค่าแนะนำจาก Package $59.95 และ Package $109.95 ตามที่ระบุใน Packageโดยค่าแนะนำนี้ผู้เรียนจะได้รับหลังจากที่ผู้ที่ท่านแนะนำได้สมัครแพ็คเกจอันหนึ่งอันใดเป็นที่เรียบร้อยแล้วเท่านั้น</p>
				<p style="font-size: 18px;">2.	ผู้เรียนสามารถถอนค่าคอมมิชชั่นและยอดเงินคงเหลือได้โดยผ่านรระบบถอนเงินโดยมีขั้นต่ำในการถอนต่อครั้งไม่ต่ำกว่า  100 ดอลล่าร์สหรัฐ (ระบบจะดำเนินการให้ภายใน 14 วัน ผู้เรียนสามารถเช็คได้จากหน้า My Receipt  ใบเสร็จของฉัน)</p>
				<p style="font-size: 18px;">3.	การถอนรายได้ค่าแนะนำในแต่ล่ะครั้งระบบจะมีการเรียกเก็บค่าธรรมเนียมโดยระบบจะมีการแจ้งให้ท่านทราบในขั้นตอนการถอนทุกครั้งและค่าธรรมเนียมนี้ระบบอาจมีการเปลี่ยนแปลงในภายหลังโดยไม่ต้องแจ้งให้ท่านทราบก่อนล่วงหน้า</p>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
			</div>
		</div>
	</div>
</div>