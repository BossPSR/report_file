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
                                <div class="col-8">
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
                                    <a href="orvernotwork" class="btn btn-success mr-1 mb-1">
                                        No Work <span class="badge badge-pill badge-warning" id="">

                                            <?php
                                            $op = 0;

                                            ?>
                                            <?php foreach ($order_notwork as $key => $datata) {
                                                $op++;
                                            } ?>
                                            <?php echo $op += 0; ?>

                                        </span>
                                    </a>
                                    <a href="orvernotsubmit" class="btn btn-warning mr-1 mb-1">
                                        Not Submit <span class="badge badge-pill badge-success" id="">
                                            <?php $ok = 0; ?>
                                            <?php foreach ($order_notsum as $key => $dd) {
                                                $ok++;
                                            } ?>
                                            <?php echo $ok += 0; ?>
                                            <!-- <?php $not_submit = $this->db->get_where('tbl_feedback', ['check_feedback_dalivery' => 0])->result_array();
                                                    echo count($not_submit); ?> -->
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration" style="white-space: nowrap;">
                                            <thead>
                                                <tr>
                                                    <th>Step</th>
                                                    <th>Order Id</th>
                                                    <th>Video</th>
                                                    <th>User</th>
                                                    <th>Order Date</th>
                                                    <th>Date required</th>
                                                    <th>Info</th>
                                                    <th>Status</th>
                                                    <th>Status T3</th>
                                                    <th>Date 24</th>
                                                    <th>Status Team</th>
                                                    <th>Client Feedback</th>
                                                    <th>Admin Feedback</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_notwork as $id => $stores) {
                                                    // if ($stores['status'] == 1) {
                                                    //     continue;
                                                    // }
                                                    $checkDate_num = DateDiff($stores['created_at_buy'], $stores['requiredOr']);
                                                    $checkDate = $checkDate_num / 2;
                                                    $checkDate = floor($checkDate);

                                                    $dateRequired = date("Y-m-d", strtotime("-" . $checkDate . " day", strtotime($stores['requiredOr'])));
                                                ?>
                                                    <!--if ($dateRequired <= date('Y-m-d')) :  -->
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-primary" type="button"><?php echo $stores['num_check']; ?></button>
                                                        </td>
                                                        <td><?php echo $stores['order']; ?></td>
                                                        <td><?php echo $stores['video_lang'] == 1 ? 'TH' : 'EN' ; ?></td>
                                                        <td><?php echo $stores['userId']; ?></td>

                                                        <td><?php echo $stores['created_at_buy']; ?></td>
                                                        <td>

                                                            <?php if (date("Y-m-d") >= $stores['requiredOr']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <p id="demo<?php echo $stores['order']; ?>" style="font-size: 18px;font-weight: bold;"></p>

                                                            <?php endif; ?>
                                                            <script>
                                                                var datep<?php echo $stores['order']; ?> = "<?= $stores['requiredOr']; ?>";

                                                                // Set the date we're counting down to
                                                                var countDownDate<?php echo $stores['order']; ?> = new Date(datep<?php echo $stores['order']; ?>);

                                                                // Update the count down every 1 second
                                                                var x<?php echo $stores['order']; ?> = setInterval(function() {

                                                                    // Get today's date and time
                                                                    var now<?php echo $stores['order']; ?> = new Date();

                                                                    // Find the distance between now and the count down date
                                                                    var distance<?php echo $stores['order']; ?> = countDownDate<?php echo $stores['order']; ?> - now<?php echo $stores['order']; ?>;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days<?php echo $stores['order']; ?> = Math.floor(distance<?php echo $stores['order']; ?> / (1000 * 60 * 60 * 24));
                                                                    var hours<?php echo $stores['order']; ?> = Math.floor((distance<?php echo $stores['order']; ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes<?php echo $stores['order']; ?> = Math.floor((distance<?php echo $stores['order']; ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds<?php echo $stores['order']; ?> = Math.floor((distance<?php echo $stores['order']; ?> % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo<?php echo $stores['order']; ?>").innerHTML = days<?php echo $stores['order']; ?> + "Day " + hours<?php echo $stores['order']; ?> + "h " +
                                                                        minutes<?php echo $stores['order']; ?> + "m " + seconds<?php echo $stores['order']; ?> + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance<?php echo $stores['order']; ?> < 0) {
                                                                        clearInterval(x<?php echo $stores['order']; ?>);
                                                                        document.getElementById("demo<?php echo $stores['order']; ?>").innerHTML = "หมดเวลา";
                                                                    }
                                                                }, 1000);
                                                            </script>

                                                        </td>
                                                        <td>
                                                            <?php if ($stores['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php
                                                                $team_id = explode('TM', $stores['teamId']);
                                                                echo $team_id[1]; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $stores['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage_thai'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stores['wage_thai']; ?> บาท |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stores['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($stores['teamId'] == '' && $stores['wage'] == '' && $stores['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stores['order']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_over" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $stores['order']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 45px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label>
                                                                                        <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                            <option disabled> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>" <?php echo $tsM['IdTeam'] == $stores['teamId'] ? 'selected' : ''; ?>><?php echo $tsM['IdTeam']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Position</label>
                                                                                        <select name="position" class="form-control" required>
                                                                                            <option selected disabled> ---- Select ---- </option>

                                                                                            <?php foreach ($positionX as $positionX) { ?>
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stores['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $stores['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                $str =  $stores['requiredOr'];
                                                                                $datr_re = explode(" ", $str);
                                                                                ?>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">date required</label>
                                                                                        <input type="date" class="form-control" name="date_required" value="<?php echo $datr_re[0]; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Note</label>
                                                                                        <textarea name="note" id="" cols="30" rows="10" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['status_book'] == '1' && $stores['status_cp'] == 'complete' && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($stores['status_book'] == '1' && $stores['status_cp'] == 'rewrite'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($stores['status_book'] == '2'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($stores['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $stores['order']])->row_array(); ?>

                                                        <td>
                                                            <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stores['order']; ?>" type="button" class="btn btn-icon btn-success" style="    font-size: 14px;">Upload T3</button>
                                                            <?php else : ?>
                                                                <?php if ($team['teamId'] == '') : ?>
                                                                    <span class="badge badge-pill badge-Info">Waiting for team</span>
                                                                <?php elseif ($team['status'] == '0') : ?>
                                                                    <span class="badge badge-pill badge-warning">processing</span>
                                                                <?php elseif ($team['status'] == '1') : ?>
                                                                    <span class="badge badge-pill badge-success">complete</span>
                                                                <?php elseif ($team['status'] == '2') : ?>
                                                                    <span class="badge badge-pill badge-danger">feedback</span>
                                                                <?php elseif ($team['status'] == '3') : ?>
                                                                    <span class="badge badge-pill badge-danger">Re feedback <?= $ui; ?></span>
                                                                <?php elseif ($team['status'] == '4') : ?>
                                                                    <span class="badge badge-pill badge-danger">Not complete</span>
                                                                <?php elseif ($team['status'] == '5') : ?>
                                                                    <span class="badge badge-pill badge-success">complete refeedback</span>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif ?>
                                                            <?php endif ?>

                                                        </td>
                                                        <!-- <td>
																<?php
                                                                $date_required = DateDiff($stores['created_at_buy'], $stores['requiredOr']);
                                                                $date_required = ceil($date_required) + 1;

                                                                if ($date_required == 6) {
                                                                    $check_requiredOr = date("Y-m-d", strtotime("+1 day", strtotime($stores['created_at_buy'])));
                                                                    if ($check_requiredOr >= date('Y-m-d')) {
                                                                        echo '<span class="badge badge-pill badge-danger">No Work</span>';
                                                                    }
                                                                } elseif ($date_required >= 7) {
                                                                    $check_requiredOr = date("Y-m-d", strtotime("+2 day", strtotime($stores['created_at_buy'])));
                                                                    if ($check_requiredOr >= date('Y-m-d')) {
                                                                        echo '<span class="badge badge-pill badge-danger">No Work</span>';
                                                                    }
                                                                }
                                                                ?>
															</td> -->
                                                        <td align="center">
                                                            <?php
                                                            if ($stores['status_check_team'] == 1) {
                                                                echo '<span class="badge badge-pill badge-Info">Waiting for team</span>';
                                                            } elseif ($stores['status_check_team'] == 2) {
                                                                echo '<span class="badge badge-pill badge-warning">processing</span>';
                                                            } elseif ($stores['status_check_team'] == 3) {
                                                                echo '<span class="badge badge-pill badge-success">complete</span>';
                                                            } elseif ($stores['status_check_team'] == 4) {
                                                                $cancel = $this->db->get_where('tbl_cancel', ['order_id' => $stores['order']])->row_array();
                                                                echo '<span class="badge badge-pill badge-danger">Waiting for team</span>';
                                                                echo '<br>';
                                                                echo '<span class="badge badge-pill badge-danger">' . $cancel['history'] . '</span>';
                                                            }

                                                            ?>
                                                        </td>

                                                        <td>
                                                            <?php
                                                            $date_required = DateDiff($stores['created_at_buy'], $stores['requiredOr']);
                                                            $date_required = ceil($date_required) + 1;

                                                            if ($date_required <= 6) {
                                                                $check_requiredOr = date("Y-m-d", strtotime("+1 day", strtotime($stores['created_at_buy'])));
                                                                if ($check_requiredOr >= date('Y-m-d')) {
                                                                    echo '<span class="badge badge-pill badge-warning">24 hour !</span>';
                                                                } else {
                                                                    echo '-';
                                                                }
                                                            } elseif ($date_required >= 7) {
                                                                $check_requiredOr = date("Y-m-d", strtotime("+2 day", strtotime($stores['created_at_buy'])));
                                                                if ($check_requiredOr <= date('Y-m-d')) {
                                                                    echo '<span class="badge badge-pill badge-danger">48 hour !</span>';
                                                                }
                                                            } else {
                                                                echo '-';
                                                            }
                                                            ?>
                                                        </td>
                                                        <!-- Client Feedback -->
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 1, 're_feedback' => 1])->result_array();
                                                            foreach ($cf2 as $key => $cf2) {
                                                                $c += 1;
                                                            }
                                                            ?>
                                                            <?php if ($cf == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Feedback (<?= $z; ?>)</span>
                                                            <?php elseif ($cf2 == true) : ?>
                                                                <span class="badge badge-pill badge-primary">Re-Feedback (<?= $c; ?>)</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $xs  = 0;
                                                            $af = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 0])->result_array();
                                                            foreach ($af as $key => $af) {
                                                                $xs += 1;
                                                            }
                                                            ?>
                                                            <?php if ($af == true) : ?>
                                                                <span class="badge badge-pill badge-danger">Admin Feedback (<?= $xs; ?>) </span>
                                                                <span data-toggle="modal" data-target="#filenotefeedback<?php echo $stores['order']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="filenotefeedback<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Admin Feedback note </h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <table class="table zero-configuration">
                                                                                    <thead>

                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th>name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php $ai = 1;
                                                                                        $feedbackde = $this->db->get_where('tbl_feedback', ['order_id' => $stores['order'], 'check_status' => 0])->result_array();
                                                                                        ?>

                                                                                        <?php foreach ($feedbackde as $areed) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $areed['order_id'] ?></td>
                                                                                                <td>Feedback admin (<?php echo $ai++; ?>)</td>
                                                                                                <td>

                                                                                                    <i data-toggle="modal" data-target="#detailfeedback<?php echo $areed['id']; ?>" class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i>
                                                                                                    <div class="modal fade" id="detailfeedback<?php echo $areed['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Admin Feedback Detail </h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <p><?php echo $areed['feedback_detail']; ?></p>
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </td>
                                                                                                <td><?php echo $areed['create_at'] ?></td>
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
                                                        <td>

                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#sendnw<?php echo $stores['order']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <button type="button" data-toggle="modal" data-target="#Cancel<?php echo $stores['order']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-delete"></i></button>
                                                        </td>

                                                        <!-- <td><span  class="badge badge-pill badge-success">Successful payment</button></td> -->
                                                    </tr>

                                                    <div class="modal fade" id="sendnw<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Send (<?php echo $stores['order']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="send_not_work" method="POST" class="form-horizontal">
                                                                    <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                                    <div class="modal-body">
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

                                                    <div class="modal fade" id="informal<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="add_team_informal" method="POST">
                                                            <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exp">Informal team (<?php echo $stores['order']; ?>)</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="name">Name</label>
                                                                                <input type="text" class="form-control" name="name" value="" required>
                                                                            </div>
                                                                        </div>

                                                                        <?php $positionX  = $this->db->get('tbl_item_position')->result_array();  ?>
                                                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                            <div class="form-group" style="text-align: left;">
                                                                                <label for="helpInputTop">Position</label>
                                                                                <select name="position" class="form-control" required>
                                                                                    <option selected disabled> ---- Select ---- </option>

                                                                                    <?php foreach ($positionX as $positionX) { ?>
                                                                                        <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $stores['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="Wage">Wage</label>
                                                                                <input type="text" class="form-control" name="Wage" value="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="add-data-btn mr-1">
                                                                            <button type="submit" class="btn btn-primary">submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal fade" id="Cancel<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="delete_order_nw" method="POST">
                                                            <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $stores['order']; ?>)</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note Cancel</label>
                                                                                <textarea type="text" class="form-control" name="note" value="" rows="10" placeholder="Enter note" required>เอการของคุณโดน Cancel ขออภัยในความไม่สะดวก</textarea>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button type="submit" class="btn btn-primary">submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal fade" id="exampleModalUpload<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload To Team</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="upload_team_not_work" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="order_id" value="<?php echo $stores['order']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" value="<?php echo $stores['order']; ?>" placeholder="Enter price" required>
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
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeck<?php echo $stores['order']; ?>" data-order="<?php echo $stores['order']; ?>">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">Add Team</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teambox<?php echo $stores['order']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="team<?php echo $stores['order']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsM) { ?>
                                                                                        <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
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
                                                    <!--  else : 

                                                    endif; -->

                                                <?php } ?>
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

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');

        if ($('.ckeck' + o).is(":checked")) {
            $("#teambox" + o).fadeIn("slow");
            $("#team" + o).prop('required', true);
            $("#wage" + o).prop('required', true);
            $("#position" + o).prop('required', true);
        } else {
            $("#teambox" + o).fadeOut("slow");
            $("#team" + o).prop('required', false);
            $("#wage" + o).prop('required', false);
            $("#position" + o).prop('required', false);
        }
    });
</script>

<script>
    function click_step(order_id) {
        $.ajax({
            url: 'click_step',
            method: "POST",
            data: {
                order_id: order_id
            },
            success: function(getData) {

                $('#click_step' + order_id).text(getData);
            }
        });
    }
</script>

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