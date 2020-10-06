<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">Team list</h2>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
								</li>
								<li class="breadcrumb-item active">Team list
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
				<div class="form-group breadcrum-right">
					<div class="dropdown">
						<button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
						<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="row">

			</div>
			<!-- Zero configuration table -->
			<?php
			$this->db->select('* ,sum(tbl_upload_team.wage )  AS total');
			$this->db->from('tbl_withdraw_team');
			$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_withdraw_team.order_id', 'left');
			$this->db->where('tbl_withdraw_team.status', 2);
			$query = $this->db->get(); // Produces an integer, like 17
			$count_setion = $query->row_array();
			?>
			<?php
			$this->db->select('* ,sum(deduct )  AS total_de');
			$this->db->from('tbl_deduct');

			$query = $this->db->get(); // Produces an integer, like 17
			$deduct_total = $query->row_array();
			?>
			<?php
			$this->db->select('* ,sum(deduct_score )  AS total_deduct_score');
			$this->db->from('tbl_deduct_score');

			$query = $this->db->get(); // Produces an integer, like 17
			$deduct_total_score = $query->row_array();
			?>
			<?php
			$this->db->select('* ,sum(price)  AS total');
			$this->db->from('tbl_withdraw_team');
			$this->db->where('status', 1);
			$query = $this->db->get(); // Produces an integer, like 17
			$count_note = $query->row_array();
			?>
			<?php
			$this->db->select('*');
			$this->db->from('tbl_upload_team');
			$this->db->where('status', '1');

			$Outod11 = $this->db->get()->result_array();
			$d = 0;
			?>

			<?php foreach ($Outod11 as $key => $Outod11) { ?>
				<?php $d += 1; ?>
			<?php } ?>

			<?php
			$this->db->select('*');
			$this->db->from('tbl_upload_team');
			$this->db->where('status', '2');

			$Outod22 = $this->db->get()->result_array();
			$f = 0;
			?>

			<?php foreach ($Outod22 as $key => $Outod22) { ?>
				<?php $f += 1; ?>
			<?php } ?>

			<section id="basic-datatable">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="row card-header">

								<div class="col-3">
									<h4 class="card-title">Team list</h4>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php if (!empty($team)) : ?>
											<?php echo count($team); ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">ทีมงานทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">

									<h3 class="card-title" id="statusTeam_count">
										<?php
										$statusTeam_count = $this->db->get('tbl_status_team')->result_array();
										$team_count = $this->db->get('tbl_team')->result_array();
										echo count($statusTeam_count);
										?>

									</h3>
									<h3 class="check_list_not">ทีมงานออนไลน์</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title " id="team_count_num">
										<?php
										$team_count = count($team_count);
										$team_count_num = $team_count - count($statusTeam_count);
										echo $team_count_num;
										?>
									</h3>
									<h3 class="check_list_not">ทีมงานออฟไลน์</h3>
								</div>

								<div class="col-1 text-center">
									<h3 class="card-title " id="co">
										<?php
										echo $d;
										?>
									</h3>
									<h3 class="check_list_not">ค้างส่ง Order</h3>
								</div>

								<div class="col-1 text-center">
									<h3 class="card-title " id="tu">
										<?php
										echo $f;
										?>
									</h3>
									<h3 class="check_list_not">ค้างส่ง Feedback</h3>
								</div>

								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php if (!empty($count_setion['total'])) : ?>
											<?php echo $count_setion['total']; ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">ชำระเงิน</h3>
								</div>
								<div class="col-1 text-center">

									<h3 class="card-title ">
										<?php if (!empty($count_note['total'])) : ?>
											<?php echo $count_note['total']; ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">ค้างชำระเงิน</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php if (!empty($deduct_total['total_de'])) : ?>
											<?php echo $deduct_total['total_de']; ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">Deduct income</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php if (!empty($deduct_total_score['total_deduct_score'])) : ?>
											<?php echo $deduct_total_score['total_deduct_score']; ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">Deduct score</h3>
								</div>

							</div>
							<div class="card-content">
								<div class="card-body card-dashboard">

									<div class="table-responsive">
										<table class="table table-hover zero-configuration" style="white-space: nowrap;">
											<thead>
												<tr>
													<th>Online</th>
													<th>Details</th>
													<th>Deduct income</th>
													<th>Deduct score</th>
													<th>TeamId</th>
													<th>Name</th>
													<th>Order</th>
													<th>Out Order</th>
													<th>Out Feedback</th>
													<th>Approved</th>
													<th>Not Approved</th>
													<th>Income</th>
													<th>Score</th>
													<th>Withdraw</th>
													<th>Outstanding</th>
													<th>Cancel Order</th>
													<th>No Submit</th>
													<th>status</th>
													<th>Notification Ban</th>
													<th>Tool</th>

												</tr>
											</thead>
											<?php foreach ($team as $team) { ?>
												<tbody>
													<tr>

														<td id="statusTeam<?php echo $team['IdTeam']; ?>">
															<?php $statusTeam = $this->db->get_where('tbl_status_team', ['IdTeam' => $team['IdTeam']])->row_array(); ?>
															<?php
															if (isset($statusTeam)) {
																echo "<div class='badge badge-pill badge-glow badge-success mr-1 mb-1'>Online</div>";
															} else {
																echo "<div class='badge badge-pill badge-glow badge-danger mr-1 mb-1'>offline</div>";
															}
															?>
														</td>
														<td>
															<a href="#" data-toggle="modal" data-target="#exampleModala<?php echo $team['IdTeam']; ?>"><i class="feather icon-eye" style="font-size: 25px;"></i></a>
															<div class="modal fade" id="exampleModala<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog  modal-dialog-scrollable modal-xl" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">Note</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>

																		<div class="modal-body">
																			<table class="table zero-configuration">
																				<thead>
																					<tr>
																						<th>resume</th>
																						<th>country</th>
																						<th>phone</th>
																						<th>email</th>
																						<th>postion</th>
																						<th>Sign up date</th>
																						<th>Tool</th>
																					</tr>
																				</thead>
																				<tbody>
																					<?php $this->db->select('*,tbl_job_position.id as id_job , tbl_job_position.status_approve jp_sa');
																					$this->db->from('tbl_team');
																					$this->db->join('tbl_job_position', 'tbl_team.id = tbl_job_position.id_team', 'left');
																					$this->db->where('tbl_team.IdTeam', $team['IdTeam']);
																					$team_job = $this->db->get()->result_array(); ?>
																					<?php foreach ($team_job as $key => $team_job) { ?>
																						<tr>
																							<td>
																								<?php if (!empty($team_job['file_name'])) : ?>
																									<?php
																									$img =  explode(".", $team_job['file_name']);
																									?>
																									<?php if ($img[1] == 'pdf') : ?>
																										<a href="<?php echo $team_job['file_name'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
																									<?php else : ?>
																										<a href="<?php echo $team_job['file_name']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
																									<?php endif; ?>
																								<?php else : ?>
																									-
																								<?php endif; ?>

																							</td>
																							<td>
																								<?php $country = $this->db->get_where('countries', ['id' => $team_job['country_id']])->result_array(); ?>
																								<?php foreach ($country as $country) { ?>
																									<?php echo $country['countryName']; ?>
																								<?php  } ?>
																							</td>
																							<td><?php echo $team_job['phone']; ?></td>
																							<td><?php echo $team_job['email']; ?></td>
																							<td>

																								<?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $team_job['job_position']])->result_array(); ?>
																								<?php foreach ($name_position as $name_position) { ?>
																									<br> <?php echo $name_position['name_item']; ?>

																								<?php } ?>
																							</td>

																							<td><?php echo $team_job['created_at']; ?></td>
																							<td>
																								<div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
																									<?php if ($team_job['jp_sa'] == '1') : ?>
																										<input type="checkbox" class="custom-control-input ckeck<?php echo $team_job['id_job']; ?>" id="customSwitch4<?php echo $team_job['id_job']; ?>" data-status="<?php echo $team_job['id_job']; ?>" checked>
																										<label class="custom-control-label" for="customSwitch4<?php echo $team_job['id_job']; ?>"></label>
																									<?php else : ?>
																										<input type="checkbox" class="custom-control-input ckeck<?php echo $team_job['id_job']; ?>" id="customSwitch4<?php echo $team_job['id_job']; ?>" data-status="<?php echo $team_job['id_job']; ?>">
																										<label class="custom-control-label" for="customSwitch4<?php echo $team_job['id_job']; ?>"></label>
																									<?php endif; ?>
																								</div>
																							</td>
																						</tr>
																					<?php } ?>
																				</tbody>
																			</table>

																		</div>
																		<div class="modal-footer">
																			<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<a href="#" data-toggle="modal" data-target="#exampleModaldedact<?php echo $team['IdTeam']; ?>"><i class="feather icon-folder" style="font-size: 25px;"></i></a>
															<div class="modal fade" id="exampleModaldedact<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">Deduct income</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>

																		<div class="modal-body">
																			<table class="table zero-configuration">
																				<thead>
																					<tr>
																						<th>File_name</th>
																						<th>Teamid</th>
																						<th>Deduct</th>
																						<th>Order id</th>
																						<th>Detail</th>
																						<th>Create_at</th>
																						<th>Admin_by</th>
																					</tr>
																				</thead>
																				<tbody>
																					<?php $deduct = $this->db->get_where('tbl_deduct', ['teamid_deduct' => $team['IdTeam']])->result_array(); ?>
																					<?php foreach ($deduct as $key => $deduct) { ?>
																						<tr>

																							<td>
																								<?php if ($deduct['path'] == "") : ?>
																									-
																								<?php else : ?>
																									<a href="<?php echo $deduct['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
																								<?php endif; ?>
																							</td>
																							<td><?php echo $deduct['teamid_deduct'] ?></td>
																							<td><?php echo $deduct['deduct'] ?></td>

																							<td>
																								<?php if ($deduct['order_id'] == "") : ?>
																									-
																								<?php else : ?>
																									<?php echo $deduct['order_id'] ?>
																								<?php endif; ?>
																							</td>
																							<td><?php echo $deduct['detail'] ?></td>
																							<td><?php echo $deduct['create_at'] ?></td>
																							<td>
																								<?php if ($deduct['admin_by'] == "") : ?>
																									-
																								<?php else : ?>
																									<?php $admin = $this->db->get_where('tbl_admin', ['id' => $deduct['admin_by']])->row_array(); ?>
																									<?php echo $admin['email'] ?>
																								<?php endif; ?>
																							</td>
																						</tr>
																					<?php } ?>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<a href="#" data-toggle="modal" data-target="#exampleModaldedact_score<?php echo $team['IdTeam']; ?>"><i class="feather icon-folder" style="font-size: 25px;"></i></a>
															<div class="modal fade" id="exampleModaldedact_score<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">Deduct score</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>

																		<div class="modal-body">
																			<table class="table zero-configuration">
																				<thead>
																					<tr>
																						<th>File_name</th>
																						<th>Teamid</th>
																						<th>Deduct</th>
																						<th>Order id</th>
																						<th>Detail</th>
																						<th>Create_at</th>
																						<th>Admin_by</th>
																					</tr>
																				</thead>
																				<tbody>
																					<?php $deduct = $this->db->get_where('tbl_deduct_score', ['teamid_deduct' => $team['IdTeam']])->result_array(); ?>
																					<?php foreach ($deduct as $key => $deduct) { ?>
																						<tr>

																							<td>
																								<?php if ($deduct['path'] == "") : ?>
																									-
																								<?php else : ?>
																									<a href="<?php echo $deduct['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
																								<?php endif; ?>
																							</td>
																							<td><?php echo $deduct['teamid_deduct'] ?></td>
																							<td><?php echo $deduct['deduct_score'] ?></td>

																							<td>
																								<?php if ($deduct['order_id'] == "") : ?>
																									-
																								<?php else : ?>
																									<?php echo $deduct['order_id'] ?>
																								<?php endif; ?>
																							</td>
																							<td><?php echo $deduct['detail_score'] ?></td>
																							<td><?php echo $deduct['create_at'] ?></td>
																							<td>
																								<?php if ($deduct['admin_by'] == "") : ?>
																									-
																								<?php else : ?>
																									<?php $admin = $this->db->get_where('tbl_admin', ['id' => $deduct['admin_by']])->row_array(); ?>
																									<?php echo $admin['email'] ?>
																								<?php endif; ?>
																							</td>
																						</tr>
																					<?php } ?>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<div class="add-data-footer d-flex justify-content-around px-3 mt-2">

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
														<td><?php echo $team['IdTeam']; ?></td>
														<td><?php echo $team['name']; ?></td>
														<td>
															<?php
															$this->db->select('count(*) cod');
															$this->db->from('tbl_upload_team');
															$this->db->where('teamId', $team['IdTeam']);

															$order = $this->db->get()->row_array();
															?>
															<?php echo $order['cod']; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_upload_team');
															$this->db->where('teamId', $team['IdTeam']);
															$this->db->where('status', '1');

															$Outod = $this->db->get()->result_array();
															$e = 0;
															?>

															<?php foreach ($Outod as $key => $Outod) { ?>
																<?php $e += 1; ?>
															<?php } ?>

															<?php echo $e; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_upload_team');
															$this->db->where('teamId', $team['IdTeam']);
															$this->db->where('status', '2');

															$Outfe = $this->db->get()->result_array();
															$r = 0;
															?>

															<?php foreach ($Outfe as $key => $Outfe) { ?>
																<?php $r += 1; ?>
															<?php } ?>

															<?php echo $r; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_upload_team');
															$this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
															$this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
															$this->db->where('tbl_upload_order.status_approved', '1');
															$this->db->group_by('tbl_upload_order.order_id');

															$ap = $this->db->get()->result_array();
															$t = 0;
															?>

															<?php foreach ($ap as $key => $ap) { ?>
																<?php $t += 1; ?>
															<?php } ?>

															<?php echo $t; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_upload_team');
															$this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
															$this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
															$this->db->where('tbl_upload_order.status_approved', '2');
															$this->db->group_by('tbl_upload_order.order_id');

															$nap = $this->db->get()->result_array();
															$y = 0;
															?>

															<?php foreach ($nap as $key => $nap) { ?>
																<?php $y += 1; ?>
															<?php } ?>

															<?php echo $y; ?>
														</td>
														<td>
															<?php echo $team['income']; ?>
														</td>
														<td>
															<?php echo $team['team_score']; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_withdraw_team');
															$this->db->where('teamId', $team['IdTeam']);

															$wit = $this->db->get()->result_array();
															$u = 0;
															?>

															<?php foreach ($wit as $key => $wit) { ?>
																<?php $u += $wit['price']; ?>
															<?php } ?>

															<?php echo $u; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_withdraw_team');
															$this->db->where('teamId', $team['IdTeam']);
															$this->db->where('status', '1');

															$Outwit = $this->db->get()->result_array();
															$o = 0;
															?>

															<?php foreach ($Outwit as $key => $Outwit) { ?>
																<?php $o += $Outwit['price']; ?>
															<?php } ?>

															<?php echo $o; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_cancel');
															$this->db->where('teamid', $team['IdTeam']);
															$this->db->where('status', '1');

															$can = $this->db->get()->result_array();
															$p = 0;
															?>

															<?php foreach ($can as $key => $can) { ?>
																<?php $p += 1; ?>
															<?php } ?>

															<?php echo $p; ?>
														</td>
														<td>
															<?php
															$this->db->select('*');
															$this->db->from('tbl_upload_team');
															$this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
															$this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
															$this->db->where('tbl_upload_order.status_delivery', '1');
															$this->db->where('tbl_upload_team.status', '2');
															$this->db->group_by('tbl_upload_order.order_id');

															$nosum = $this->db->get()->result_array();
															$s = 0;
															?>

															<?php foreach ($nosum as $key => $nosum) { ?>
																<?php $s += 1; ?>
															<?php } ?>

															<?php echo $s; ?>
														</td>




														<?php if ($team['Tstatus'] == 0) : ?>
															<td>
																<div class="dropdown ">
																	<button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		Pending approval
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<a class="dropdown-item" data-toggle="modal" data-target="#statusid<?php echo $team['IdTeam']; ?>">approve</a>
																		<!-- href="status_team?id=<?php echo $team['idT']; ?>&status=1" -->
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=2">Not approved</a>
																	</div>
																</div>
																<div class="modal fade" id="statusid<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Approve Postion (<?php echo $team['IdTeam']; ?>)</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>

																			<div class="modal-body">
																				<table class="table zero-configuration">
																					<thead>
																						<tr>
																							<th>postion</th>
																							<th>Sign up date</th>
																							<th>Check postion</th>
																						</tr>
																					</thead>
																					<tbody>
																						<?php $position = $this->db->get_where('tbl_job_position', ['id_team' => $team['idT']])->result_array(); ?>
																						<?php foreach ($position as $position) { ?>
																							<?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $position['job_position']])->row_array(); ?>
																							<tr>
																								<td>
																									<?php echo $name_position['name_item']; ?>
																								</td>
																								<td><?php echo $team['created_at']; ?></td>
																								<td>
																									<div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
																										<?php if ($position['status_approve'] == '1') : ?>
																											<input type="checkbox" class="custom-control-input ckeck<?php echo $position['id']; ?>" id="customSwitch5<?php echo $position['id']; ?>" data-status="<?php echo $position['id']; ?>" checked>
																											<label class="custom-control-label" for="customSwitch5<?php echo $position['id']; ?>"></label>
																										<?php else : ?>
																											<input type="checkbox" class="custom-control-input ckeck<?php echo $position['id']; ?>" id="customSwitch5<?php echo $position['id']; ?>" data-status="<?php echo $position['id']; ?>">
																											<label class="custom-control-label" for="customSwitch5<?php echo $position['id']; ?>"></label>
																										<?php endif; ?>
																									</div>
																								</td>
																							</tr>
																						<?php } ?>
																					</tbody>
																				</table>
																			</div>
																			<div class="modal-footer">
																				<div class="add-data-footer d-flex justify-content-around" style="width: 100%;">
																					<a class="btn btn-success" href="status_team?id=<?php echo $team['idT']; ?>&status=1" style="width: 100%;">Approved</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</td>

														<?php elseif ($team['Tstatus'] == 1) : ?>
															<td>
																<div class="dropdown ">
																	<button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		approve
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=3">Ban User</a>

																	</div>
																</div>
															</td>
														<?php elseif ($team['Tstatus'] == 2) : ?>
															<td>
																<div class="dropdown ">
																	<button class="btn btn-info dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		Not approve
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=1">approve</a>
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=3">Ban User</a>
																	</div>
																</div>
															</td>
														<?php elseif ($team['Tstatus'] == 3) : ?>
															<td>
																<div class="dropdown ">
																	<button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		Ban User
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=1">approve</a>
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=2">Not approved</a>

																	</div>
																</div>
															</td>

														<?php else : ?>
															<td> - </td>
														<?php endif; ?>
														<td>
															<?php
															$notification = $this->db->get_where('tbl_notification', ['IdTeam' => $team['IdTeam']])->result_array();
															?>
															<button type="button" data-toggle="modal" data-target="#exampleModalk<?php echo $team['IdTeam']; ?>" class="btn btn-icon btn-warning">
																Admonish
																<span class="badge badge badge-danger badge-pill"><?php echo count($notification); ?></span>
															</button>

															<form action="NotificationBan" method="POST">
																<div class="modal fade" id="exampleModalk<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Admonish</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<input type="text" value="<?php echo $team['idT']; ?>" name="id" hidden>
																				<div class="col-xl-12 col-md-6 col-12 mb-1">
																					<div class="form-group">
																						<label for="helpInputTop">Note</label>
																						<textarea name="note_ban" cols="20" rows="5" class="form-control"></textarea>
																					</div>
																				</div>
																			</div>
																			<div class="modal-footer">
																				<div class="add-data-footer d-flex justify-content-around">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</form>

															<div class="modal fade" id="score<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog " role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">Rating team tool</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<div class="card-content">
																				<div class="card-body">
																					<ul class="nav nav-tabs nav-fill ">
																						<li class="nav-item">
																							<a class="nav-link active" id="base-pill31" data-toggle="pill" href="#pill31" aria-expanded="true">
																								Deduct Income
																							</a>
																						</li>
																						<li class="nav-item">
																							<a class="nav-link" id="base-pill32" data-toggle="pill" href="#pill32" aria-expanded="false">Add Score</a>
																						</li>
																						<li class="nav-item">
																							<a class="nav-link" id="base-pill33" data-toggle="pill" href="#pill33" aria-expanded="false">Deduct Score</a>
																						</li>
																					</ul>
																					<div class="tab-content">
																						<div role="tabpanel" class="tab-pane active" id="pill31" aria-expanded="true" aria-labelledby="base-pill31">
																							<form action="deduct_income" method="POST" enctype="multipart/form-data">
																								<div class="row">
																									<input type="hidden" name="idteam" value="<?php echo $team['IdTeam']; ?>">
																									<?php $admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array(); ?>

																									<input type="text" name="admin_by" value="<?php echo $admin['id']; ?>" hidden>
																									<div class="col-md-8">
																										<label for="">Deduct Income</label>
																										<input type="number" name="income" class="form-control">
																									</div>
																									<div class="col-md-4">
																										<label for="">Income team</label>
																										<div><?php echo $team['income']; ?></div>
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<label for="">File_name</label>
																										<input type="file" name="file_name" class="form-control">
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<label for="">Detail</label>
																										<textarea name="detail" id="" rows="5" class="form-control"></textarea>
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
																									</div>

																								</div>
																							</form>
																						</div>
																						<div class="tab-pane" id="pill32" aria-labelledby="base-pill32">
																							<form action="add_score_team" method="POST">
																								<input type="hidden" name="idteam" value="<?php echo $team['IdTeam']; ?>">

																								<div class="row">
																									<div class="col-md-8">
																										<label for="">Add Score</label>
																										<input type="number" name="score" class="form-control">
																									</div>
																									<div class="col-md-4">
																										<label for="">score team</label>
																										<div><?php echo $team['team_score']; ?></div>
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
																									</div>
																								</div>
																							</form>
																						</div>
																						<div class="tab-pane" id="pill33" aria-labelledby="base-pill33">
																							<form action="deduct_score_team" method="POST" enctype="multipart/form-data">
																								<input type="hidden" name="idteam" value="<?php echo $team['IdTeam']; ?>">
																								<?php $admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array(); ?>
																								<input type="text" name="admin_by" value="<?php echo $admin['id']; ?>" hidden>
																								<div class="row">
																									<div class="col-md-8">
																										<label for="">Deduct Score</label>
																										<input type="number" name="deduct" class="form-control">
																									</div>
																									<div class="col-md-4">
																										<label for="">score team</label>
																										<div><?php echo $team['team_score']; ?></div>
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<label for="">File_name</label>
																										<input type="file" name="file_name" class="form-control">
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<label for="">Detail</label>
																										<textarea name="detail_score" id="" rows="5" class="form-control"></textarea>
																									</div>
																									<div class="col-md-12" style="margin-top: 15px;">
																										<button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
																									</div>
																								</div>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">

																		</div>
																	</div>
																</div>
															</div>

														</td>
														<td>
															<button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#score<?php echo $team['IdTeam']; ?>">
																<i class="feather icon-more-horizontal"></i>
															</button>
															<?php $unblock = $this->db->get_where('tbl_cancel', ['teamid' => $team['IdTeam']])->row_array(); ?>
															<?php if ($unblock) : ?>
																<button type="button" class="btn btn-icon btn-success" onclick="confirmalertunlock_del_unblock('<?php echo $team['IdTeam']; ?>')">
																	<i class="feather icon-unlock"></i>
																</button>
																<button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#slide_ban<?php echo $team['IdTeam']; ?>">
																	<i class="feather icon-sliders"></i>
																</button>
																<div class="modal fade" id="slide_ban<?php echo $team['IdTeam']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog " role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Blocked</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<form action="slide_blocked" method="POST">
																				<div class="modal-body">
																					<div class="form-group">
																						<label for="">Date blocked</label>
																						<input type="date" class="form-control" name="slide_date" min="<?= date('Y-m-d'); ?>" required>
																						<input type="hidden" class="form-control" name="team_id" value="<?= $team['IdTeam']; ?>">
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="submit" class="btn btn-primary">submit</button>
																				</div>
																			</form>
																		</div>
																	</div>
																</div>
															<?php else : ?>
																<button type="button" class="btn btn-icon btn-secondary">
																	<i class="feather icon-unlock"></i>
																</button>
															<?php endif; ?>
														</td>
													</tr>
												<?php  } ?>
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
<script>
	$('body').on('change', 'input[type="checkbox"]', function() {
		var o = $(this).data('status');


		if ($('.ckeck' + o).is(":checked")) {
			$.ajax({
				type: 'POST',
				data: {

					status: "1",
					id: o
				},
				url: 'team_job_status',
				success: function(resultsedit) {
					toastr.success('สถานะเปิดใช้งานเรียบร้อยแล้ว.', 'Success');
				}
			});
		} else {

			$.ajax({
				type: 'POST',
				data: {

					status: "0",
					id: o
				},
				url: 'team_job_status',
				success: function(resultsedit) {
					toastr.error('สถานะถูกปิดใช้งาน.', 'Success');
				}
			});
		}
	});
</script>
<!-- END: Content-->
<!-- 
<div class="modal fade" id="deduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h5 class="modal-title" id="exampleModalLabel">Deduct</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="NotificationBan" method="POST">
					<input type="text" value="<?php echo $team['idT']; ?>" name="id" hidden>
					<div class="col-xl-12 col-md-6 col-12 mb-1">
						<div class="form-group">
							<label for=""></label>
							<input type="text" name="">
						</div>
					</div>
					<div class="col-xl-12 col-md-6 col-12 mb-1">
						<div class="form-group">
							<label for="">Note</label>
							<textarea name="note_ban" cols="20" rows="5" class="form-control"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Notification Ban</button>
				</form>
			</div>
		</div>
	</div>
</div> -->