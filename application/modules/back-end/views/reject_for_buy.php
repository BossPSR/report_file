<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Reject For buy</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Reject For buy
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
                                <h4 class="card-title">Reject For buy</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Country</th>
                                                    <th>Main file</th>
                                                    <th>GT file</th>
                                                    <th>Date required</th>
                                                    <th>Note Clien</th>
                                                    <th>Wage</th>
                                                    <th>Note Reject</th>
                                                    <th>create_at</th>

                                                    <th>Tool</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($store as $store) { ?>

                                                <?php $prosum = date('Y-m-d', strtotime('+30 day' . '+' . $store['update_buy'])); ?>
                                                <?php if ($prosum <= date('Y-m-d')) : ?>
                                                    <script>
                                                        function getDataend() {
                                                            $.ajax({
                                                                    url: "reject_for_buy_del",
                                                                    type: "POST",
                                                                    data: {
                                                                        order: '<?php echo $store['order_re']; ?>',
                                                                    }
                                                                })
                                                                .success(function(success) {
                                                                    console.log(success);
                                                                });
                                                        }

                                                        setInterval(getDataend, 10000); // 1000 = 1 second
                                                    </script>
                                                <?php else : ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $store['order_re']; ?></td>
                                                            <td><?php echo $store['userId']; ?></td>
                                                            <td> <?php echo $store['countryName'] == '' ? '-' : $store['countryName']; ?></td>
                                                            <!-- Main File -->
                                                            <td>
                                                                <span data-toggle="modal" data-target="#exampleModala<?php echo $store['order_re']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModala<?php echo $store['order_re']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration" id="here<?php echo $store['order_re']; ?>">
                                                                                    <thead>
                                                                                        <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $store['order_re']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>order_re</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($order as $keys => $order) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $order['order_id'] ?></td>
                                                                                                <td>
                                                                                                    <?php echo $order['file_name'] ?> </a>

                                                                                                </td>
                                                                                                <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $order['created_at_buy'] ?></td>
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
                                                            <!-- GT File -->
                                                            <td>
                                                                <?php
                                                                $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                                                $this->db->where('tbl_morefile_GT.order_id', $store['order_re']);
                                                                $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                                                $orderGT = $this->db->get('tbl_morefile_GT')->result_array(); ?>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_morefile_GT');
                                                                $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                                                $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                                                $this->db->where('tbl_morefile_GT.order_id', $store['order_re']);

                                                                $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                                                $more_file_gt = $this->db->get()->result_array();
                                                                ?>
                                                                <?php if (!empty($orderGT ||  $more_file_gt)) : ?>
                                                                    <span data-toggle="modal" data-target="#exampleModalb<?php echo $store['order_re']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                    <div class="modal fade" id="exampleModalb<?php echo $store['order_re']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <table class="table zero-configuration" id="here_gt<?php echo $store['order_re']; ?>">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>order_re</th>
                                                                                                <th>File_name</th>
                                                                                                <th>File</th>
                                                                                                <th>create</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                                                <tr>

                                                                                                    <td><?php echo $orderGT['order_re'] ?> </td>
                                                                                                    <td>
                                                                                                        <?php echo $orderGT['file_name_GT'] ?>
                                                                                                    </td>
                                                                                                    <td><a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $orderGT['create_at'] ?></td>
                                                                                                </tr>

                                                                                            <?php } ?>

                                                                                            <?php foreach ($more_file_gt as $key => $more_file_gt) { ?>
                                                                                                <tr>

                                                                                                    <td><?php echo $more_file_gt['order_re'] ?> (MF) </td>
                                                                                                    <td>
                                                                                                        <?php echo $more_file_gt['file_name_GT'] ?>
                                                                                                    </td>
                                                                                                    <td><a href="<?php echo $more_file_gt['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $more_file_gt['create_at'] ?></td>
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
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>

                                                            </td>
															<td><p id="demo<?php echo $stores['order_re']; ?>" style="font-size: 18px;font-weight: bold;"></p>
																<script>
																	var datep<?php echo $store['order_re']; ?> = "<?= $store['date_required']; ?>";
																	
																	// Set the date we're counting down to
																	var countDownDate<?php echo $store['order_re']; ?> = new Date(datep<?php echo $store['order_re']; ?>);

																	// Update the count down every 1 second
																	var x<?php echo $store['order_re']; ?> = setInterval(function() {

																		// Get today's date and time
																		var now<?php echo $store['order_re']; ?> = new Date();

																		// Find the distance between now and the count down date
																		var distance<?php echo $store['order_re']; ?> = countDownDate<?php echo $store['order_re']; ?> - now<?php echo $store['order_re']; ?>;

																		// Time calculations for days, hours, minutes and seconds
																		var days<?php echo $store['order_re']; ?> = Math.floor(distance<?php echo $store['order_re']; ?> / (1000 * 60 * 60 * 24));
																		var hours<?php echo $store['order_re']; ?> = Math.floor((distance<?php echo $store['order_re']; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
																		var minutes<?php echo $store['order_re']; ?> = Math.floor((distance<?php echo $store['order_re']; ?> % (1000 * 60 * 60)) / (1000 * 60));
																		var seconds<?php echo $store['order_re']; ?> = Math.floor((distance<?php echo $store['order_re']; ?> % (1000 * 60)) / 1000);

																		// Output the result in an element with id="demo"
																		document.getElementById("demo<?php echo $store['order_re']; ?>").innerHTML = days<?php echo $store['order_re']; ?> + "Day " + hours<?php echo $store['order_re']; ?> + "h " +
																			minutes<?php echo $store['order_re']; ?> + "m " + seconds<?php echo $store['order_re']; ?> + "s ";

																		// If the count down is over, write some text 
																		if (distance<?php echo $store['order_re']; ?> < 0) {
																			clearInterval(x<?php echo $store['order_re']; ?>);
																			document.getElementById("demo<?php echo $store['order_re']; ?>").innerHTML = "หมดเวลา";
																		}
																	}, 1000);
																</script>
															</td>
                                                            <td>
                                                                <?php if ($store['note_user'] == '') : ?>
                                                                    -
                                                                <?php else : ?>
                                                                    <?php echo $store['note_user']; ?>
                                                                <?php endif; ?>
                                                            </td>
                                                            <?php if ($store['price_file'] == '') :   ?>
                                                                <td>-</td>
                                                            <?php else : ?>
                                                                <td>$<?php echo $store['price_file']; ?></td>
                                                            <?php endif; ?>
                                                            <td><?php echo $store['note_reject']; ?></td>
                                                            <td><?php echo $store['created_at_buy']; ?></td>
                                                            
                                                            <td><button type="button" class="btn btn-outline-info" onclick="confirmalertunlock_reject('<?php echo $store['id']; ?>')">Clover</button></td>


                                                        </tr>

                                                        </tfoot>

                                                    <?php endif; ?>
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
