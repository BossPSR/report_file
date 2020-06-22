<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin Information</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Admin Information
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
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
								<div class="col-7">
									<h4 class="card-title">Admin Information</h4>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php if (!empty($admin)) : ?>
											<?php echo count($admin); ?>
										<?php else : ?>
											0
										<?php endif; ?>
									</h3>
									<h3 class="check_list_not">แอดมินทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">

									<h3 class="card-title" id="statusAdmin_count">
										<?php $statusAdmin_count = $this->db->get('tbl_status_admin')->result_array();
										$admin_count = $this->db->get('tbl_admin')->result_array();
										echo count($statusAdmin_count);
										?>

									</h3>
									<h3 class="check_list_not">แอดมินออนไลน์</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title " id="admin_count_num">
										<?php
										$admin_count = count($admin_count);
										$admin_count_num = $admin_count - count($statusAdmin_count);
										echo $admin_count_num;
										?>
									</h3>
									<h3 class="check_list_not">แอดมินออฟไลน์</h3>
								</div>
                                <a href="back_admin_add"><button type="button" class="btn btn-primary mr-1 mb-1">+ Add Admin</button></a>
								
								
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
													<th>Online</th>
                                                    <th>email</th>
                                                    <th>UserName</th>
                                                    <th>phone</th>
                                                    <th>created_at</th>
                                                    <th>status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($admin as $admin) { ?>
                                                    <tr>
														<td id="statusAdmin<?php echo $admin['adminId']; ?>">
															<?php $statusAdmin = $this->db->get_where('tbl_status_admin', ['IdAdmin' => $admin['adminId']])->row_array(); ?>
															<?php
																if (isset($statusAdmin)) {
                                                                    echo "<div class='badge badge-pill badge-glow badge-success mr-1 mb-1'>Online</div>";
                                                                } else {
                                                                    echo "<div class='badge badge-pill badge-glow badge-danger mr-1 mb-1'>offline</div>";
                                                                }
															?>
														</td>
														<script>
															setInterval(function() {
																checkStatus();
																checkStatus<?php echo $admin['adminId']; ?>();
															}, 10000);

															function checkStatus<?php echo $admin['adminId']; ?>() {
																$.ajax({
																	url: 'checkStatus_admin_admin',
																	data: {
																		IdTeam: '<?php echo $admin['adminId']; ?>'
																	},
																	success: function(getData) {

																		console.log(getData);
																		$('#statusAdmin<?php echo $admin['adminId']; ?>').load(' #statusAdmin<?php echo $admin['adminId']; ?>');
																	}
																});
															}

															function checkStatus() {

																$('#statusAdmin_count').load(' #statusAdmin_count');
																$('#admin_count_num').load(' #admin_count_num');
															}
														</script>
                                                        <td><?php echo $admin['email']; ?></td>
                                                        <td><?php echo $admin['username']; ?></td>
                                                        <td><?php echo $admin['phone']; ?></td>
                                                        <td><?php echo $admin['created_at']; ?></td>
                                                        <?php if ($admin['is_admin'] == 1) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Admin
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=2">Superadmin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=3">Administrator</a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        <?php elseif ($admin['is_admin'] == 2) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Superadmin
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=1">Admin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=3">Administrator</a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        <?php else : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Administrator
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=1">Admin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=2">Superadmin</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        <?php endif; ?>

                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target="#exampleModala<?php echo $admin['id']; ?>"><i class="feather icon-eye" style="font-size: 25px;"></i></a>
                                                            <a href="back_admin_edit?id=<?php echo $admin['id']; ?>"><i class="feather icon-edit" style="font-size: 25px;"></i></a>
                                                            <a onclick="confirmalertunlock_del_admin('<?php echo $admin['id']; ?>')"><i class="feather icon-trash" style="font-size: 25px;"></i></a>

                                                            <div class="modal fade" id="exampleModala<?php echo $admin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <?php
                                                                            $this->db->order_by('create_at', 'desc');
                                                                            $admin = $this->db->get_where('tbl_session_admin', ['adminId' => $admin['adminId']])->result_array();
                                                                        ?>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Admin id</th>
                                                                                        <th>Detail</th>
                                                                                        <th>Create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($admin as $keys => $admin) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $admin['adminId'] ?></td>
                                                                                            <td><?php echo $admin['detail'] ?></td>
                                                                                            <td><?php echo $admin['create_at'] ?></td>
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
                                                    </tr>
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
