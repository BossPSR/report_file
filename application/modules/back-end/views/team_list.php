<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">Employee Information</h2>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="back_dashboard">Home</a>
								</li>
								<li class="breadcrumb-item active">Employee Information
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

								<div class="col-9">
									<h4 class="card-title">Employee Information</h4>
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

												</tr>
											</thead>
											<?php foreach ($team as $team) { ?>
												<tbody>
													<tr>
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
															<td>
																-
															</td>

														<?php endif; ?>
														<td>

															<?php
															$notification = $this->db->get_where('tbl_notification', ['IdTeam' => $team['IdTeam']])->result_array();
															?>
															<button type="button" data-toggle="modal" data-target="#exampleModalk<?php echo $team['idT']; ?>" class="btn btn-warning mr-1 mb-1">Notification Ban <span class="badge badge badge-danger badge-pill"><?php echo count($notification); ?></span></button>

															<div class="modal fade" id="exampleModalk<?php echo $team['idT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
																	<div class="modal-content">
																		<div class="modal-header">

																			<h5 class="modal-title" id="exampleModalLabel">Notification Ban</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<form action="NotificationBan" method="POST">
																				<input type="text" value="<?php echo $team['idT']; ?>" name="id" hidden>
																				<div class="col-xl-12 col-md-6 col-12 mb-1">
																					<div class="form-group">
																						<label for="helpInputTop">Note</label>
																						<textarea name="note_ban" cols="20" rows="5" class="form-control"></textarea>
																					</div>
																				</div>


																				<button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Notification Ban</button>

																		</div>

																	</div>
																	</form>
																</div>
															</div>
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
<SCRIPT language="JavaScript">
	// function timerefresh(t)
	// {

	// if(t==0)
	// {
	// window.location.reload();
	// }
	// else
	// {
	// t--;
	// }
	// window.setTimeout("timerefresh('"+t+"')",2000)
	// }

	// timerefresh(5);
</script>