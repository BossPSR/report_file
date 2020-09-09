<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Feedback Notification</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Feedback Notification
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">

                </div>
            </div>
        </div>

        <?php
        $this->db->select('*,tbl_feedback.order_id AS order_feed,tbl_feedback.create_at AS time,tbl_feedback.id AS id_f');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_feedback.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_feedback_file', 'tbl_feedback.id=tbl_feedback_file.id', 'left');
        $this->db->group_by('tbl_feedback_file.id_feedback');


        $datata = $this->db->get()->result_array();

        ?>

        <div class="content-body">
            <div class="row">

            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Feedback Notification</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($feedback == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($feedback as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration" id="loading_img_spin" style="white-space: nowrap;">
                                            <thead>
                                                <tr>
                                                    <th>order id</th>
                                                    <th>User id</th>
                                                    <th>Feedback File</th>
                                                    <th>Feedback Detail</th>
                                                    <th>Feedback In</th>
                                                    <th>TM-Date Confirm</th>
                                                    <th>Feedback Cancel</th>
                                                    <th>Feedback Required</th>
                                                    <th>T3</th>
                                                    <th>Position</th>
                                                    <th>info</th>
                                                    <th>Status</th>
                                                    <th>Client Feedback</th>
                                                    <th>Status T3</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($feedback as $keyBook => $feedback) { ?>

                                                    <?php $cancels = $this->db->get_where('tbl_cancel', ['order_id' => $feedback['order_feed']])->row_array(); ?>

                                                    <tr>
                                                        <!-- order id -->
                                                        <td><?php echo $feedback['order_feed'] ?></td>

                                                        <!-- userId -->
                                                        <td><?php echo $feedback['userId'] ?></td>

                                                        <!-- Feedback File -->
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $feedback['id_f']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $feedback['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $feedback_file = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback['id_f']])->result_array(); ?>
                                                                                    <tr>

                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($feedback_file as $feedback_file) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $feedback_file['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $feedback_file['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $feedback_file['create_at'] ?></td>
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

                                                        <!-- feedback_detail -->
                                                        <td>
                                                            <?php if (!empty($feedback['feedback_detail'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note<?php echo $feedback['id_f']; ?>"><i class="feather icon-search"></i></a>

                                                                <div class="modal fade" id="note<?php echo $feedback['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="feedback_file_update_detail" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $feedback['id_f']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail" id="" rows="6" class="form-control"><?= $feedback['feedback_detail']; ?></textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                    <button type=" submit" class="btn btn-success">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>

                                                        <!-- time -->
                                                        <td><?php echo $feedback['time']; ?></td>

                                                        <!-- update_confirm -->
                                                        <td><?php echo $feedback['update_confirm']; ?></td>

                                                        <!-- Feedback Cancel -->
                                                        <td><?php echo $cancels['create_at']; ?> </td>

                                                        <!-- dateReq -->
                                                        <td>
                                                            <?php if (date("Y-m-d") >= $feedback['dated']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d', strtotime($feedback['dated'])); ?>
                                                                <div id="clock-b<?php echo $feedback['dated']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $feedback['dated']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
                                                                            var $this = $(this).html(event.strftime('' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%D</span> Day%!d</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%H</span> Hours</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%M</span> Min</div>' +
                                                                                '<div class="text-center" style="padding: 0 10px;"><span class="h4 font-weight-bold">%S</span> Sec</div>'));
                                                                        });

                                                                    });
                                                                </script>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- teamId -->
                                                        <td>
                                                            <?php if (!empty($feedback['teamId'])) : ?>
                                                                <?php echo $feedback['teamId']; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif;  ?>
                                                        </td>

                                                        <!-- position -->
                                                        <td>
                                                            <?php if (!empty($feedback['position'])) : ?>
                                                                <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $feedback['position']])->result_array(); ?>
                                                                <?php foreach ($position_name as $keys => $position_name) { ?>
                                                                    <?php echo $position_name['name_item'] ?>
                                                                <?php } ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif;  ?>
                                                        </td>

                                                        <!-- teamId / wage -->
                                                        <td>
                                                            <?php if ($feedback['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $feedback['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($feedback['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $feedback['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $feedback['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($feedback['teamId'] == '' && $feedback['wage'] == '' && $feedback['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $feedback['order_feed']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $feedback['order_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_feedback" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $feedback['order_feed']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $feedback['order_feed']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label> <br>
                                                                                        <select class="select2 form-control" name="teamid" required>
                                                                                            <option disabled selected> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>" <?php echo $tsM['IdTeam'] == $feedback['teamId'] ? 'selected' : ''; ?>><?php echo $tsM['IdTeam']; ?></option>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $feedback['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $feedback['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1 text-left">
                                                                                    <label for="">Team file All</label>
                                                                                    <hr>
                                                                                    <table class="table zero-configuration">
                                                                                        <thead>
                                                                                            <?php $t3file = $this->db->get_where('tbl_upload_order_team', ['order_id' => $feedback['order_feed']])->result_array(); ?>
                                                                                            <tr>
                                                                                                <th>File_name</th>
                                                                                                <th>File</th>
                                                                                                <th>create</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($t3file as $t3file) { ?>
                                                                                                <tr>
                                                                                                    <td><?php echo $t3file['file_name'] ?></td>
                                                                                                    <td><a href="<?php echo $t3file['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $t3file['create_at'] ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
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

                                                        <!-- Status -->
                                                        <td>
                                                            <?php if ($feedback['status_book'] == '1' && $feedback['status_cp'] == 'complete' && $feedback['status_admin'] == '0') : ?>
                                                                <span class=" badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($feedback['status_book'] == '1' && $feedback['status_cp'] == 'notcomplete'  && $feedback['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($feedback['status_book'] == '2'  && $feedback['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($feedback['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Client Feedback -->
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $feedback['order_feed'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $feedback['order_feed'], 'check_status' => 1, 're_feedback' => 1])->result_array();
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

                                                        <!-- Status T3 -->
                                                        <td>
                                                            <?php if ($feedback['status_check_team'] == '1') : ?>
                                                                <span class=" badge badge-pill badge-success">waiting</span>
                                                            <?php elseif ($feedback['status_check_team'] == '2') : ?>
                                                                <span class="badge badge-pill badge-primary">procrssing</span>
                                                            <?php elseif ($feedback['status_check_team'] == '3') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">complete</span>
                                                            <?php elseif ($feedback['status_check_team'] == '4') : ?>
                                                                <?php
                                                                $x  = 0;
                                                                $af = $this->db->get_where('tbl_feedback', ['order_id' => $feedback['order_feed'], 'check_status' => 0])->result_array();
                                                                foreach ($af as $key => $af) {
                                                                    $x += 1;
                                                                }
                                                                ?>

                                                                <span class="badge badge-pill badge-danger">Team Cancel (<?= $x; ?>)</span>
                                                                <a href="#" data-toggle="modal" data-target="#ts3cancal<?php echo $feedback['id_f']; ?>"><i class="feather icon-book" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                <div class="modal fade" id="ts3cancal<?php echo $feedback['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Detail Cancel</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="feedback_file_update_detail" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $feedback['id_f']; ?>">
                                                                                <div class="modal-body">
                                                                                    <p><?php echo $cancels['history']; ?></p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                    <button type=" submit" class="btn btn-success">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Tool -->
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#sendnw<?php echo $feedback['id_f']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <button type="button" data-toggle="modal" data-target="#Cancel<?php echo $feedback['id_f']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-delete"></i></button>
                                                            <?php if ($feedback['status_informal'] == 1) : ?>
                                                                <button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#infor<?php echo $feedback['order_feed']; ?>"><i class="feather icon-log-out"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#send<?php echo $feedback['order_feed']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#informal<?php echo $feedback['order_feed']; ?>"><i class="feather icon-users"></i></button>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="informal<?php echo $feedback['order_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="add_team_informal" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $feedback['order_feed']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exp">Informal team (<?php echo $feedback['order_feed']; ?>)</h5>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $feedback['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
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

                                                            <div class="modal fade" id="infor<?php echo $feedback['order_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Dropfile (<?php echo $feedback['order_feed']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_t3_other" class="dropzone dropzone-area" id="dropzoneother<?php echo $feedback['order_feed']; ?>">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                    <input type="hidden" name="order" value="<?php echo $feedback['order_feed']; ?>">
                                                                                    <input type="hidden" name="teamId" value="<?php echo $feedback['teamId']; ?>">
                                                                                </form>
                                                                            </div>


                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="other<?php echo $feedback['order_feed']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone5<?php echo $feedback['order_feed']; ?> = new Dropzone("#dropzoneother<?php echo $feedback['order_feed']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("other<?php echo $feedback['order_feed']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone5<?php echo $feedback['order_feed']; ?>.files == 0) {
                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {
                                                                        myDropzone5<?php echo $feedback['order_feed']; ?>.processQueue();
                                                                        myDropzone5<?php echo $feedback['order_feed']; ?>.on("queuecomplete", function(file, res) {
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: false,
                                                                            });
                                                                            setTimeout(function() {
                                                                                location.href = "Satisfied"
                                                                            }, 1000);
                                                                        });
                                                                    }
                                                                });
                                                            </script>


                                                            <div class="modal fade" id="informal<?php echo $feedback['order_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="add_team_informal" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $feedback['order_feed']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exp">Informal team (<?php echo $feedback['order_feed']; ?>)</h5>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $feedback['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
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

                                                            <div class="modal fade" id="sendnw<?php echo $feedback['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Send (<?php echo $feedback['order_feed']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="send_feedbacktion" method="POST" class="form-horizontal">
                                                                            <input type="hidden" name="order_id" value="<?php echo $feedback['order_feed']; ?>">
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

                                                            <div class="modal fade" id="Cancel<?php echo $feedback['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="delete_feedbacktion" method="POST">
                                                                    <input type="hidden" name="idf" value="<?php echo $feedback['id_f']; ?>">
                                                                    <input type="hidden" name="order" value="<?php echo $feedback['order_feed']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $feedback['order_feed']; ?>)</h5>
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

                                                        </td>
                                                    </tr>

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