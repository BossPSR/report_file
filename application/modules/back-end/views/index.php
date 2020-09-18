<!-- BEGIN: Content-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">


			<!-- Dashboard Analytics Start -->
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">Dashboard</h2>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">

								<li class="breadcrumb-item active">Dashboard
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<section id="dashboard-analytics">
				
				<div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Item</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover-animation mb-0" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myBody">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Order</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover-animation mb-0" id="myTable1">
                                        <thead>
                                            <tr>
                                               
                                                <th>Order</th>
                                               

                                            </tr>
                                        </thead>
                                        <tbody id="myBody1">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Confirmed</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover-animation mb-0" id="myTable2">
                                        <thead>
                                            <tr>
                                              
                                                <th>Confirmed</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="myBody2">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Availble</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover-animation mb-0" id="myTable3">
                                        <thead>
                                            <tr>
                                               
                                                <th>Availble</th>

                                            </tr>
                                        </thead>
                                        <tbody id="myBody3">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="mb-0">Dashboard</h4>
							</div>
							<div class="card-content">
								<div class="table-responsive mt-1">
									<table class="table table-hover-animation mb-0">
										<thead>
											<tr>
												<th>Item</th>
												<th>Original</th>
												<th>Not Complete </th>
												<th>Rewrite</th>
												<th>Not Satified</th>
												<th>รวมทั้งหมด</th>
												<th>อ่านคำอธิบาย</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Delivery</th>
												<?php foreach ($deliveryList as $key => $delivery) { ?>
													<td data-toggle="modal" data-target="#showData_delivery<?php echo $delivery . '-' . $key; ?>" style="cursor:pointer;"><?php echo $delivery; ?></td>
													<div class="modal fade" id="showData_delivery<?php echo $delivery . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php
																	$uploadOrder_com = $this->db->get_where('tbl_upload_order', ["status_cp" => "complete", "status_delivery" => 1])->result_array();
																	$uploadOrder_notcom = $this->db->get_where('tbl_upload_order', ["status_cp" => "notcomplete", "status_delivery" => 1])->result_array();
																	$uploadOrder_rew = $this->db->get_where('tbl_upload_order', ["status_cp" => "rewrite", "status_delivery" => 1])->result_array();
																	$uploadOrder_notsati = $this->db->get_where('tbl_upload_order', ["status_book" => 2, "status_delivery" => 1])->result_array();
																	$uploadOrder_result = array_merge($uploadOrder_com, $uploadOrder_notcom, $uploadOrder_rew, $uploadOrder_notsati);



																	if ($key == 0) {
																		foreach ($uploadOrder_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($uploadOrder_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($uploadOrder_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($uploadOrder_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($uploadOrder_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>รวมจำนวน Order ตั้งแต่เปิดระบบ</td>
											</tr>
											<tr>
												<th>Feedback All</th>
												<?php foreach ($feedback_allList as $key => $feedback_all) { ?>
													<td data-toggle="modal" data-target="#showData_feedbook_all<?php echo $feedback_all . '-' . $key; ?>; ?>" style="cursor:pointer;"><?php echo $feedback_all; ?></td>
													<div class="modal fade" id="showData_feedbook_all<?php echo $feedback_all . '-' . $key; ?>; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php
																	$this->db->join('tbl_upload_order', 'tbl_feedback.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'complete');
																	$this->db->where('status_delivery', 1);
																	$feedbackAll_com = $this->db->get('tbl_feedback')->result_array();

																	$this->db->join('tbl_upload_order', 'tbl_feedback.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'notcomplete');
																	$this->db->where('status_delivery', 1);
																	$feedbackAll_notcom = $this->db->get('tbl_feedback')->result_array();

																	$this->db->join('tbl_upload_order', 'tbl_feedback.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'rewrite');
																	$this->db->where('status_delivery', 1);
																	$feedbackAll_rew = $this->db->get('tbl_feedback')->result_array();

																	$this->db->join('tbl_upload_order', 'tbl_feedback.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_book', 2);
																	$this->db->where('status_delivery', 1);
																	$feedbackAll_notsati = $this->db->get('tbl_feedback')->result_array();

																	$feedbackAll_result = array_merge($feedbackAll_com, $feedbackAll_notcom, $feedbackAll_rew, $feedbackAll_notsati);



																	if ($key == 0) {
																		foreach ($feedbackAll_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($feedbackAll_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($feedbackAll_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($feedbackAll_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($feedbackAll_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>รวม Feedbackตั้งแต่เปิดระบบ</td>
											</tr>
											<tr>
												<th>Processing New Order</th>
												<?php foreach ($processingList as $key => $processing) { ?>
													<td data-toggle="modal" data-target="#showData_processing<?php echo $processing . '-' . $key; ?>" style="cursor:pointer;"><?php echo $processing; ?></td>
													<div class="modal fade" id="showData_processing<?php echo $processing . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php

																	$processing_com = $this->db->get_where('tbl_upload_order', ["status_cp" => "complete", "is_check" => 0, "status_approved" => 0])->result_array();
																	$processing_notcom = $this->db->get_where('tbl_upload_order', ["status_cp" => "notcomplete", "is_check" => 0, "status_approved" => 0])->result_array();
																	$processing_rew = $this->db->get_where('tbl_upload_order', ["status_cp" => "rewrite", "is_check" => 0, "status_approved" => 0])->result_array();
																	$processing_notsati = $this->db->get_where('tbl_upload_order', ["status_book" => 2, "is_check" => 0, "status_approved" => 0])->result_array();
																	$processing_result = array_merge($processing_com, $processing_notcom, $processing_rew, $processing_notsati);



																	if ($key == 0) {
																		foreach ($processing_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($processing_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($processing_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($processing_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($processing_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>Orderปรกติที่กำลังดำเนินการแต่ไม่รวม Feedback</td>
											</tr>
											<tr>
												<th>Processing Feedback</th>
												<?php foreach ($processing_feedbackList as $key => $processing_feedback) { ?>
													<td data-toggle="modal" data-target="#showData_processing_feedback<?php echo $processing_feedback . '-' . $key; ?>" style="cursor:pointer;"><?php echo $processing_feedback; ?></td>
													<div class="modal fade" id="showData_processing_feedback<?php echo $processing_feedback . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php
																	$this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'complete');
																	$this->db->where('status_delivery', 1);
																	$processing_feedback_com = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'notcomplete');
																	$this->db->where('status_delivery', 1);
																	$processing_feedback_notcom = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'rewrite');
																	$this->db->where('status_delivery', 1);
																	$processing_feedback_rew = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_book', 2);
																	$this->db->where('status_delivery', 1);
																	$processing_feedback_notsati = $this->db->get('tbl_upload_order')->result_array();

																	$processing_feedback_result = array_merge($processing_feedback_com, $processing_feedback_notcom, $processing_feedback_rew, $processing_feedback_notsati);



																	if ($key == 0) {
																		foreach ($processing_feedback_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($processing_feedback_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($processing_feedback_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($processing_feedback_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($processing_feedback_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>Orderที่ถูก Feedback แต่ไม่รวม Order ปรกติ</td>
											</tr>
											<tr>
												<th>Cancel</th>
												<?php foreach ($cancelList as $key => $cancel) { ?>
													<td data-toggle="modal" data-target="#showData_cancel<?php echo $cancel . '-' . $key; ?>" style="cursor:pointer;"><?php echo $cancel; ?></td>
													<div class="modal fade" id="showData_cancel<?php echo $cancel . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php
																	$this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'complete');
																	$this->db->where('status_delivery', 1);
																	$cancel_com = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'notcomplete');
																	$this->db->where('status_delivery', 1);
																	$cancel_notcom = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_cp', 'rewrite');
																	$this->db->where('status_delivery', 1);
																	$cancel_rew = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id');
																	$this->db->where('status_book', 2);
																	$this->db->where('status_delivery', 1);
																	$cancel_notsati = $this->db->get('tbl_upload_order')->result_array();

																	$cancel_result = array_merge($cancel_com, $cancel_notcom, $cancel_rew, $cancel_notsati);



																	if ($key == 0) {
																		foreach ($cancel_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($cancel_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($cancel_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($cancel_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($cancel_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>Orderที่ทีมกดยกเลิกทั้งOrderปรกติและFeedback</td>
											</tr>
											<tr>
												<th>Cancel Not Working</th>

												<?php foreach ($cancel_notWorkingList as $key => $cancel_notWorking) { ?>
													<td data-toggle="modal" data-target="#showData_cancel_not_working<?php echo $cancel_notWorking . '-' . $key; ?>" style="cursor:pointer;"><?php echo $cancel_notWorking; ?></td>
													<div class="modal fade" id="showData_cancel_not_working<?php echo $cancel_notWorking . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php
																	$this->db->where('tbl_upload_team.teamId !=', '');
																	$this->db->where('tbl_upload_team.status', '0');
																	$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'complete');
																	$this->db->where('status_delivery', 1);
																	$cancel_notWorking_com = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->where('tbl_upload_team.teamId !=', '');
																	$this->db->where('tbl_upload_team.status', '0');
																	$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'notcomplete');
																	$this->db->where('status_delivery', 1);
																	$cancel_notWorking_notcom = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->where('tbl_upload_team.teamId !=', '');
																	$this->db->where('tbl_upload_team.status', '0');
																	$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_cp', 'rewrite');
																	$this->db->where('status_delivery', 1);
																	$cancel_notWorking_rew = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->where('tbl_upload_team.teamId !=', '');
																	$this->db->where('tbl_upload_team.status', '0');
																	$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
																	$this->db->where('status_book', 2);
																	$this->db->where('status_delivery', 1);
																	$cancel_notWorking_notsati = $this->db->get('tbl_upload_order')->result_array();

																	$cancel_notWorking_result = array_merge($cancel_notWorking_com, $cancel_notWorking_notcom, $cancel_notWorking_rew, $cancel_notWorking_notsati);



																	if ($key == 0) {
																		foreach ($cancel_notWorking_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($cancel_notWorking_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($cancel_notWorking_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($cancel_notWorking_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($cancel_notWorking_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>Orderที่ทีมไม่กดยกเลิกทั้งOrderปรกติและFeedback</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="mb-0">Summary Quality DM</h4>
							</div>
							<div class="card-content">
								<div class="table-responsive mt-1">
									<table class="table table-hover-animation mb-0">
										<thead>
											<tr>
												<th>Item</th>
												<th>Sell Complete</th>
												<th>Sell Not Complete </th>
												<th>Original</th>
												<th>Rewrite</th>
												<th>รวมทั้งหมด</th>
												<th>อ่านคำอธิบาย</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Total DM</th>
												<?php foreach ($total_dmList as $key => $total_dm) { ?>
													<td data-toggle="modal" data-target="#showData_total_dm<?php echo $total_dm . '-' . $key; ?>" style="cursor:pointer;"><?php echo $total_dm; ?> DM</td>
													<div class="modal fade" id="showData_total_dm<?php echo $total_dm . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>DM Sub</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php

																	$total_dm_com = $this->db->get_where('tbl_upload_main_search_sub', ['comandnocom' => 1])->result_array();
																	$total_dm_notcom = $this->db->get_where('tbl_upload_main_search_sub', ['comandnocom' => 2])->result_array();
																	$total_dm_rew = $this->db->get_where('tbl_upload_main_search_sub', ['comandnocom' => 3])->result_array();
																	$total_dm_notsati = $this->db->get_where('tbl_upload_main_search_sub', ['comandnocom' => 4])->result_array();
																	$total_dm_result = array_merge($total_dm_com, $total_dm_notcom, $total_dm_rew, $total_dm_notsati);



																	if ($key == 0) {
																		foreach ($total_dm_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($total_dm_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($total_dm_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($total_dm_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($total_dm_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>รวมจำนวน DM ทั้งหมดโดยนับจาก DM ย่อยทั้งหมดของแต่ล่ะชุด</td>
											</tr>
											<tr>
												<th>Approved</th>
												<?php foreach ($approvedList as $key => $approved) { ?>
													<td data-toggle="modal" data-target="#showData_approved<?php echo $approved . '-' . $key; ?>" style="cursor:pointer;"><?php echo $approved; ?> DM</td>
													<div class="modal fade" id="showData_approved<?php echo $approved . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '1');
																	$this->db->where('comandnocom', 1);
																	$approved_com =  $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '1');
																	$this->db->where('comandnocom', 2);
																	$approved_notcom = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '1');
																	$this->db->where('comandnocom', 3);
																	$approved_rew = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '1');
																	$this->db->where('comandnocom', 4);
																	$approved_notsati = $this->db->get('tbl_upload_order')->result_array();
																	$approved_result = array_merge($approved_com, $approved_notcom, $approved_rew, $approved_notsati);



																	if ($key == 0) {
																		foreach ($approved_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($approved_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($approved_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($approved_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($approved_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>รวมจำนวน DM ที่ลูกค้ากด Approved โดยนับจาก DM ย่อยทั้งหมดของแต่ล่ะชุด</td>
											</tr>
											<tr>
												<th>Not Approved</th>
												<?php foreach ($not_approvedList as $key => $not_approved) { ?>
													<td data-toggle="modal" data-target="#showData_not_approved<?php echo $not_approved . '-' . $key; ?>" style="cursor:pointer;"><?php echo $not_approved; ?> DM</td>
													<div class="modal fade" id="showData_not_approved<?php echo $not_approved . '-' . $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Team Folder</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="d-flex" style="justify-content:space-around">
																		<div>Order Id</div>
																		<div>File</div>
																		<div>Create Date</div>
																	</div>
																	<?php

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '2');
																	$this->db->where('comandnocom', 1);
																	$not_approved_com =  $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '2');
																	$this->db->where('comandnocom', 2);
																	$not_approved_notcom = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '2');
																	$this->db->where('comandnocom', 3);
																	$not_approved_rew = $this->db->get('tbl_upload_order')->result_array();

																	$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
																	$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
																	$this->db->where('tbl_upload_order.status_approved', '2');
																	$this->db->where('comandnocom', 4);
																	$not_approved_notsati = $this->db->get('tbl_upload_order')->result_array();
																	$not_approved_result = array_merge($not_approved_com, $not_approved_notcom, $not_approved_rew, $not_approved_notsati);



																	if ($key == 0) {
																		foreach ($not_approved_com as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 1) {
																		foreach ($not_approved_notcom as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 2) {
																		foreach ($not_approved_rew as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 3) {
																		foreach ($not_approved_notsati as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['dm_sub']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>
																	<?php
																	if ($key == 4) {
																		foreach ($not_approved_result as $order) {

																	?>
																			<div class="d-flex" style="justify-content: space-around;">
																				<div><?php echo $order['order_id']; ?></div>
																				<div><a href="<?php echo $order['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></div>
																				<div><?php echo $order['create_at']; ?></div>
																			</div>
																	<?php
																		}
																	}
																	?>



																</div>
																<div class="modal-footer">
																	<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																	</div>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
												<td>รวมจำนวน DM ที่ลูกค้ากด Not Approved โดยนับจาก DM ย่อยทั้งหมดของแต่ล่ะชุด</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>


			</section>
			<!-- Dashboard Analytics end -->

		</div>
	</div>
</div>
<!-- END: Content-->
<script>
	function getDataFromDb() {
		$.ajax({
				url: "realtime_data",
				type: "POST",
				data: ''
			})
			.success(function(result) {
				var obj = jQuery.parseJSON(result);
				if (obj != '') {
					//$("#myTable tbody tr:not(:first-child)").remove();
					$("#myBody").empty();
					$.each(obj, function(key, val) {

						var tr = "<tr>";
						tr = tr + "<td>" + val["name_item"] + "</td>";


						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
					});
				}

			});

	}

	setInterval(getDataFromDb, 1000); // 1000 = 1 second
</script>

<script>
	function getDataFromDb1() {
		$.ajax({
				url: "realtime_data1",
				type: "POST",
				data: ''
			})
			.success(function(result) {
				var obj = jQuery.parseJSON(result);
				if (obj != '') {
					//$("#myTable tbody tr:not(:first-child)").remove();
					$("#myBody1").empty();
					$.each(obj, function(key, val) {
						var data = val["position_number"];

						var tr = "<tr>";
						if (data == null) {
							tr = tr + "<td>" + 0 + "</td>";
						} else {
							tr = tr + "<td>" + data + "</td>";
						}

						tr = tr + "</tr>";
						$('#myTable1 > tbody:last').append(tr);
					});
				}

			});

	}

	setInterval(getDataFromDb1, 1000); // 1000 = 1 second
</script>


<script>
	function getDataFromDb2() {
		$.ajax({
				url: "realtime_data2",
				type: "POST",
				data: ''
			})
			.success(function(result) {
				var obj = jQuery.parseJSON(result);
				if (obj != '') {
					//$("#myTable tbody tr:not(:first-child)").remove();
					$("#myBody2").empty();
					$.each(obj, function(key, val) {
						var data = val["status_dashboard"];
						var tr = "<tr>";
						if (data == 1) {
							tr = tr + "<td>" + val["team_number"]; + "</td>";

						} else {
							tr = tr + "<td>" + 0 + "</td>";
						}

						tr = tr + "</tr>";
						$('#myTable2 > tbody:last').append(tr);
					});
				}
				console.log(obj);

			});

	}

	setInterval(getDataFromDb2, 1000); // 1000 = 1 second
</script>

<script>
	function getDataFromDb3() {
		$.ajax({
				url: "realtime_data3",
				type: "POST",
				data: ''
			})
			.success(function(result) {
				var obj = jQuery.parseJSON(result);
				if (obj != '') {
					//$("#myTable tbody tr:not(:first-child)").remove();
					$("#myBody3").empty();
					$.each(obj, function(key, val) {
						var data = val["status_dashboard"];
						var tr = "<tr>";
						if (data == 0) {
							tr = tr + "<td>" + val["team_number"]; + "</td>";
						} else {

							tr = tr + "<td>" + 0 + "</td>";
						}


						tr = tr + "</tr>";
						$('#myTable3 > tbody:last').append(tr);
					});
				}
				console.log(obj);

			});

	}

	setInterval(getDataFromDb3, 1000); // 1000 = 1 second
</script>
