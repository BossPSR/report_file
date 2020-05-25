<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Not Work</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="back_dashboard">Over All</a>
                                </li>
                                <li class="breadcrumb-item active">Not Work
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-header">
                                <div class="col-7">
                                    <h4 class="card-title">No Work</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($order_notwork == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_notwork as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>

                                <div class="col-3 text-right">
                                    <a href="orvernotwork" class="btn btn-success mr-1 mb-1">No Work <span class="badge badge-pill badge-warning">0</span></a>
                                    <a href="orvernotsubmit" class="btn btn-warning mr-1 mb-1">Not Submit <span class="badge badge-pill badge-success">0</span></a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Step</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Email</th>
                                                    <th>T3</th>
                                                    <th>Order Date</th>
                                                    <th>Date required</th>
                                                    <th>PriceFile</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_notwork as $id => $stores) {
                                                ?>
                                                    <tr>
                                                        <td><button class="btn btn-primary">0</button></td>
                                                        <td><?php echo $stores['order'] ?></td>
                                                        <td><?php echo $stores['userId']; ?></td>
                                                        <td><?php echo $stores['email']; ?></td>
                                                        <td>
                                                            <?php if (!empty($stores['teamId'])) : ?>
                                                                <?php echo $stores['teamId']; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><?php echo $stores['createOr']; ?></td>
                                                        <td><?php echo $stores['requiredOr']; ?></td>
                                                        <?php if ($stores['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $stores['price_file']; ?></td>
                                                        <?php endif; ?>
                                                
                                                        <td>
                                                            <?php if ($stores['status_book'] == '1' && $stores['status_cp'] == 'complete' && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($stores['status_book'] == '1' && $stores['status_cp'] == 'notcomplete'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($stores['status_book'] == '2'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($stores['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stores['order_id']; ?>" type="button" class="btn btn-icon btn-info"><i class="feather icon-upload"></i></button>
                                                            <a href="" class="btn btn-icon btn-success"><i class="feather icon-mail"></i></a>
                                                            <a href="" class="btn btn-icon btn-warning"><i class="feather icon-inbox"></i></a>
                                                        </td>


														<!-- <td><span  class="badge badge-pill badge-success">Successful payment</button></td> -->
													</tr>

													<div class="modal fade" id="exampleModalUpload<?php echo $stores['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Upload To Team</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="upload_team" method="POST" class="form-horizontal">
																	<div class="modal-body">
																		<div class="col-xl-12 col-md-6 col-12 mb-1">
																			<div class="form-group">
																				<label for="helpInputTop">Order</label>
																				<input type="text" class="form-control" name="order_id" value="<?php echo $stores['order_id']; ?>" placeholder="Enter Order" readonly>
																			</div>
																		</div>
																		<div class="col-xl-12 col-md-6 col-12 mb-1">
																			<div class="form-group">
																				<label for="helpInputTop">date required</label>
																				<input type="date" class="form-control" name="Daterequired" value="<?php echo $stores['order_id']; ?>" placeholder="Enter price" required>
																			</div>

																		</div>
																		<div class="col-xl-12 col-md-6 col-12 mb-1">
																			<div class="form-group">
																				<label for="helpInputTop">position</label>
																				<?php $select_postion = $this->db->get('tbl_item_position')->result_array(); ?>
																				<select name="position" class="form-control" required>
																					<option value="" selected disabled>select</option>
																					<?php foreach ($select_postion as $keys => $select_postion) { ?>
																						<option value="<?php echo $select_postion['id']; ?>"><?php echo $select_postion['name_item']; ?></option>
																					<?php } ?>
																				</select>
																			</div>

																		</div>
																		<div class="col-xl-12 col-md-6 col-12 mb-1">
																			<div class="form-group">
																				<label for="helpInputTop">wage(10%)</label>

																				<input type="text" class="form-control" name="wage" value="" placeholder="Enter wage">
																			</div>
																		</div>
																		<div class="col-xl-12 col-md-6 col-12 mb-1">
																			<div class="form-group">
																				<label for="helpInputTop">Note</label>
																				<textarea class="form-control" name="note" rows="5" placeholder="Enter Note"></textarea>
																			</div>

																		</div>
																	</div>
																	<div class="modal-footer">
																		<div class="add-data-footer d-flex justify-content-around px-3 mt-2">
																			<div class="add-data-btn mr-1">
																				<button type="submit" class="btn btn-primary">submit</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>


												<?php  } ?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ Zero configuration table -->



		</div>
	</div>
</div>

<!-- END: Content-->
<script>
	setInterval(function() {
		refresh_nw();
		refresh_ns();
	}, 5000);

	function refresh_nw() {

		$.ajax({
			url: 'refresh_nw',
			success: function(getData) {
				$('#refresh_nw').text(getData);
			}
		});

	}

	function refresh_ns() {

		$.ajax({
			url: 'refresh_ns',
			success: function(getData) {
				$('#refresh_ns').text(getData);
			}
		});

	}
</script>
