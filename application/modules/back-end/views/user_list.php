<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">User List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">User List
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
                            <div class="card-header">
								<div class="col-7">
									<h4 class="card-title">User List</h4>
								</div>
								
								<?php
									$allWallet = 0;
									$allCashback = 0;
									foreach ($user_list as $user_detail) {
										$allWallet += $user_detail['cash'];
										$allCashback += $user_detail['cashback'];
									}

									$this->db->select('*');
									$this->db->from('tbl_deduct');
									$this->db->group_by('tbl_deduct.order_id');
									$allDeduct = 0;
									$deductAll = $this->db->get()->result_array();
									foreach ($deductAll as $deductAll) {
									   $allDeduct += $deductAll['deduct'];
									}

									$this->db->select('*');
									$this->db->from('tbl_score');
									$this->db->group_by('tbl_score.order_id');
									$allScore = 0;
									$scoreAll = $this->db->get()->result_array();
									foreach ($scoreAll as $scoreAll) {
									   $allScore += $scoreAll['deduct'];
									}

									
								?>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php echo $allWallet; ?>
									</h3>
									<h3 class="check_list_not">Wallet รวมทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php echo $allCashback; ?>
									</h3>
									<h3 class="check_list_not">Cashback รวมทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php echo $allDeduct; ?>
									</h3>
									<h3 class="check_list_not">Deduct รวมทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php echo $allScore; ?>
									</h3>
									<h3 class="check_list_not">Score รวมทั้งหมด</h3>
								</div>
								<div class="col-1 text-center">
									<h3 class="card-title ">
										<?php echo $allWallet/10; ?>%
									</h3>
									<h3 class="check_list_not">Discount รวมทั้งหมด</h3>
								</div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>UserName</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Sign update</th>
                                                    <th>Country</th>
													<th>Wallet</th>
													<th>Cashback</th>
                                                    <th>Score</th>
													<th>Num Order</th>
													<th>Num Price</th>
													<th>Num Approved</th>
													<th>Num Not Approved</th>
													<th>Deduct Income</th>
													<th>Score Income</th>
													<th>Discount</th>
													<th>Package</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($user_list as $user_list) { ?>
                                                    <tr>
                                                        <td><?php echo $user_list['Us']; ?></td>
                                                        <td><?php echo $user_list['email']; ?></td>
                                                        <td><?php echo $user_list['phone']; ?></td>
                                                        <td><?php echo $user_list['created_at']; ?></td>
                                                        <td>
                                                            <?php  $country_name= $this->db->get_where('countries',['id' => $user_list['country_id']])->row_array();?>
                                                            <?php echo $country_name['countryName']; ?>
                                                        </td>
														<td>$<?php echo $user_list['cash']  == '' ? '0' : $user_list['cash'] ; ?></td>
														<td>$<?php echo $user_list['cashback'] == '' ? '0' : $user_list['cashback'] ; ?></td>
                                                        <td><?php echo $user_list['score']; ?></td>
                                                        
														<?php 
															 $this->db->select('*');
															 $this->db->from('tbl_upload_order');
															 $this->db->where('userId', $user_list['idUser']);
															 $this->db->group_by('tbl_upload_order.order_id');
															 $numOrder = 0;
															 $numPrice = 0;
															 $numApproved = 0;
															 $numNotApproved = 0;
															 $orderListNum = $this->db->get()->result_array();
															 foreach ($orderListNum as $orderListNum) {
																 $numOrder += 1;
																 $numPrice += $orderListNum['price_file'];
																 if ($orderListNum['status_approved'] == 1) {
																	 $numApproved += 1;
																 }

																 if ($orderListNum['status_approved'] == 2) {
																	 $numNotApproved += 1;
																 }
															 }

															 $this->db->select('*');
															 $this->db->from('tbl_deduct');
															 $this->db->where('userId', $user_list['idUser']);
															 $this->db->group_by('tbl_deduct.order_id');
															 $numDeduct = 0;
															 $deductListNum = $this->db->get()->result_array();
															 foreach ($deductListNum as $deductListNum) {
																$numDeduct += $deductListNum['deduct'];
															 }

															$this->db->select('*');
															$this->db->from('tbl_score');
															$this->db->where('userId', $user_list['idUser']);
															$this->db->group_by('tbl_score.order_id');
															$numScore = 0;
															$scoreListNum = $this->db->get()->result_array();
															
															foreach ($scoreListNum as $scoreListNum) {
																$numScore += $scoreListNum['deduct'];
															}

															$discountUser = $user_list['score'] / 10;
														?>
														<td><?php echo $numOrder; ?></td>
														<td><?php echo $numPrice; ?></td>
														<td><?php echo $numApproved; ?></td>
														<td><?php echo $numNotApproved; ?></td>
														<td><?php echo $numDeduct; ?></td>
														<td><?php echo $numScore; ?></td>
														<td><?php echo $discountUser; ?>%</td>
														<?php if ($user_list['Us'] == '') :  ?>
                                                            <td><div class='badge badge-pill badge-glow badge-danger mr-1 mb-1'>Not package</div</td>
                                                        <?php else :  ?>
                                                            <td><div class='badge badge-pill badge-glow badge-success mr-1 mb-1'>have package</div></td>
														<?php endif  ?>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#infor<?php echo $user_list['Us']; ?>">
                                                                <i class="feather icon-more-horizontal"></i>
                                                            </button>
                                                            <div class="modal fade" id="infor<?php echo $user_list['Us']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Rating user tool (<?php echo $user_list['Us']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body ">
                                                                            <div class="card-content">
                                                                                <div class="card-body">
                                                                                    <ul class="nav nav-tabs nav-fill ">
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link active" id="base-pill31" data-toggle="pill" href="#pill31" aria-expanded="true">
                                                                                                score
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill32" data-toggle="pill" href="#pill32" aria-expanded="false">Deduct score</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill33" data-toggle="pill" href="#pill33" aria-expanded="false">Cashback</a>
                                                                                        </li>
                                                                                        <!-- <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill34" data-toggle="pill" href="#pill34" aria-expanded="false">Deduct Cashback</a>
                                                                                        </li> -->
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div role="tabpanel" class="tab-pane active" id="pill31" aria-expanded="true" aria-labelledby="base-pill31">
                                                                                            <form action="add_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Add score</label>
                                                                                                        <input type="number" name="add" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">score user</label>
                                                                                                        <div><?php echo $user_list['score']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 mt-1">
                                                                                                        <label for="">Note</label>
                                                                                                        <textarea name="note" class="form-control" rows="3"></textarea>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="pill32" aria-labelledby="base-pill32">
                                                                                            <form action="deduct_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Deduct score</label>
                                                                                                        <input type="number" name="deduct" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">score user</label>
                                                                                                        <div><?php echo $user_list['score']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 mt-1">
                                                                                                        <label for="">Note</label>
                                                                                                        <textarea name="note" class="form-control" rows="3"></textarea>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="pill33" aria-labelledby="base-pill33">
                                                                                            <form action="cash_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Add cashback</label>
                                                                                                        <input type="number" name="cashback" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">Cashback user</label>
                                                                                                        <div><?php echo $user_list['cashback']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 mt-1" >
                                                                                                        <label for="">Note</label>
                                                                                                        <textarea name="note" class="form-control" rows="3"></textarea>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <!-- <div class="tab-pane" id="pill34" aria-labelledby="base-pill34">
                                                                                            <form action="deduct_cash_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Deduct cashback</label>
                                                                                                        <input type="number" name="cashback" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">Cashback user</label>
                                                                                                        <div><?php echo $user_list['cashback']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 mt-1">
                                                                                                        <label for="">Note</label>
                                                                                                        <textarea name="note" class="form-control" rows="3"></textarea>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if($user_list['block_user'] == '1'):?>
															<button type="button" class="btn btn-icon btn-danger" onclick="confirmBandUser('<?php echo $user_list['idUser']; ?>')">
                                                                <i class="fa fa-user-times"></i>
                                                            </button>
                                                            <?php else:?>
                                                                <button type="button" class="btn btn-icon btn-success" onclick="confirmBandUser('<?php echo $user_list['idUser']; ?>')">
                                                                <i class="fa fa-user-times"></i>
                                                            </button>
															<?php endif;?>
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
