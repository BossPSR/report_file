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
			$this->db->select('* ,sum(tbl_upload_team.wage )  AS total');
			$this->db->from('tbl_withdraw_team');
			$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_withdraw_team.order_id', 'left');
			$this->db->where('tbl_withdraw_team.status', 1);
			$query = $this->db->get(); // Produces an integer, like 17
			$count_note = $query->row_array();
			?>
			<section id="basic-datatable">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="row card-header">

								<div class="col-7">
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
										<?php $statusTeam_count = $this->db->get('tbl_status_team')->result_array();
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
										<?php if (!empty($count_setion['total'])) : ?>
											<?php echo $count_note['total']; ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">ค้างชำระเงิน</h3>
								</div>

							</div>
							<div class="card-content">
								<div class="card-body card-dashboard">

									<div class="table-responsive">
										<table class="table zero-configuration">
											<thead>
												<tr>
													<th>Online</th>
													<th>TeamId</th>
													<th>Resume</th>
													<th>Order</th>
													<th>Name</th>
													<th>country</th>
													<th>email</th>
													<th>phone</th>
													<th>postion</th>
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
														<script>
															setInterval(function() {
																checkStatus();
																checkStatus<?php echo $team['IdTeam']; ?>();
															}, 10000);

															function checkStatus<?php echo $team['IdTeam']; ?>() {
																$.ajax({
																	url: 'checkStatus_admin',
																	data: {
																		IdTeam: '<?php echo $team['IdTeam']; ?>'
																	},
																	success: function(getData) {

																		console.log(getData);
																		$('#statusTeam<?php echo $team['IdTeam']; ?>').load(' #statusTeam<?php echo $team['IdTeam']; ?>');
																	}
																});
															}

															function checkStatus() {

																$('#statusTeam_count').load(' #statusTeam_count');
																$('#team_count_num').load(' #team_count_num');
															}
														</script>
														<td><?php echo $team['IdTeam']; ?></td>
														<?php
														$img =  explode(".", $team['file_name']);
														?>
														<td>
															<?php if ($img[1] == 'pdf') : ?>
																<a href="<?php echo $team['file_name'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
															<?php else : ?>
																<a href="<?php echo $team['file_name']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
															<?php endif; ?>
														</td>
														<td><?php echo $team['countT']; ?></td>

														<td><?php echo $team['name']; ?></td>

														<?php $country = $this->db->get_where('countries', ['id' => $team['country_id']])->result_array(); ?>
														<?php foreach ($country as $country) { ?>
															<td><?php echo $country['countryName']; ?></td>
														<?php  } ?>
														<td><?php echo $team['email']; ?></td>
														<td><?php echo $team['phone']; ?></td>

														<td>
															<?php $position = $this->db->get_where('tbl_job_position', ['id_team' => $team['idT']])->result_array(); ?>
															<?php foreach ($position as $position) { ?>
																<?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $position['job_position']])->result_array(); ?>
																<?php foreach ($name_position as $name_position) { ?>
																	<br> <?php echo $name_position['name_item']; ?>
																<?php } ?>
															<?php } ?>
														</td>

														<?php if ($team['Tstatus'] == 0) : ?>
															<td>
																<div class="dropdown ">
																	<button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		Pending approval
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=1">approve</a>
																		<a class="dropdown-item" href="status_team?id=<?php echo $team['idT']; ?>&status=2">Not approved</a>

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
																							<form action="deduct_income" method="POST">
																								<div class="row">
																									<input type="hidden" name="idteam" value="<?php echo $team['IdTeam']; ?>">
																									<div class="col-md-8">
																										<label for="">Deduct Income</label>
																										<input type="number" name="income" class="form-control">
																									</div>
																									<div class="col-md-4">
																										<label for="">Income team</label>
																										<div><?php echo $team['income']; ?></div>
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
																							<form action="deduct_score_team" method="POST">
																								<input type="hidden" name="idteam" value="<?php echo $team['IdTeam']; ?>">
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