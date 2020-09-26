<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Feedback All</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Feedback All
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
        $this->db->select('*,tbl_feedback.id AS id_f');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_feedback.order_id=tbl_upload_team.order_id');

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
                                    <h4 class="card-title">Feedback All</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($datata == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($datata as $key => $datata) {
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
                                                    <th>Feedback Required</th>
                                                    <th>Feedback in</th>
                                                    <th>Date require</th>
                                                    <th>info</th>
                                                    <th>Status</th>
                                                    <th>Process </th>
                                                    <th>Client Feedback</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 ?>
                                                <?php $x = 1 ?>
                                                <?php foreach ($feedback_team as $keyBook => $feedback_team) { ?>
                                                    <tr>
                                                        <td><?php echo $feedback_team['order_id'] ?> <?= $feedback_team['id_f']; ?> </td>
                                                        <td><?php echo $feedback_team['userId'] ?></td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?= $feedback_team['id_f']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?= $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback File (<?php echo $feedback_team['order_id'] ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <?php $feedback_file = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback_team['id_f']])->result_array(); ?>

                                                                            <table class="table zero-configuration" id="heresd<?php echo $feedback_team['id_f']; ?>">
                                                                                <thead>

                                                                                    <tr>
                                                                                        <th>File_name </th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($feedback_file as $keys => $feedback_file) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $feedback_file['file_name'] ?><a href="" data-toggle="modal" data-target="#rename<?php echo $feedback_file['id']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                                                                <!-- Modal -->
                                                                                                <div class="modal fade text-left" id="rename<?php echo $feedback_file['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h4 class="modal-title" id="myModalLabel1">Rename</h4>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <h5>Rename</h5>
                                                                                                                <?php $or_file_name = explode('.', $feedback_file['file_name']); ?>
                                                                                                                <input type="text" name="file_name" value="<?php echo $or_file_name[0]; ?>" id="Re_file_name<?php echo $feedback_file['id']; ?>" class="form-control">
                                                                                                                <input type="hidden" name="last_name" value="<?php echo $or_file_name[1]; ?>" id="Re_last_name<?php echo $feedback_file['id']; ?>" class="form-control">
                                                                                                                <input type="hidden" id="pathmain<?php echo $feedback_file['id']; ?>" data-pathgt="<?php echo $feedback_file['path']; ?>" class="form-control">
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="button" class="btn btn-primary eye" id="re_file_name_button<?php echo $feedback_file['id']; ?>" data-id="<?php echo $feedback_file['id']; ?>" data-idf="<?php echo $feedback_team['id_f']; ?>">Submit</button>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
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

                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target="#note<?php echo $feedback_team['id_f']; ?>"><i class="feather icon-search"></i></a>

                                                            <?php if (!empty($feedback_team['feedback_detail'])) { ?>

                                                                <div class="modal fade" id="note<?php echo $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="feedback_all_detail" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $feedback_team['id_f']; ?>">
                                                                                <div class="modal-body">
                                                                                    <textarea name="detail" id="" rows="6" class="form-control"><?= $feedback_team['feedback_detail']; ?></textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"">Close</button>
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


                                                        <td><?php echo $feedback_team['dated'] ?></td>
                                                        <td><?php echo $feedback_team['time'] ?></td>
                                                        <td>

                                                            <?php if (date("Y-m-d") >= $feedback_team['date_re']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d', strtotime($feedback_team['date_re'])); ?>
                                                                <div id="clock-b<?php echo $feedback_team['id_f']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $feedback_team['id_f']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
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


                                                        <td>
                                                            <?php if ($feedback_team['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php $teamloop = $this->db->get_where('tbl_upload_team', ['order_id' => $feedback_team['order_id']])->result_array(); ?>
                                                                <?php foreach ($teamloop as $key => $teamloop) : ?>
                                                                    <?php echo $teamloop['teamId']; ?> |
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>

                                                            <?php if ($feedback_team['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $feedback_team['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $feedback_team['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($feedback_team['teamId'] == '' && $feedback_team['wage'] == '' && $feedback_team['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $feedback_team['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_feedback_all" method="POST">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $feedback_team['order_id']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $feedback_team['order_id']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 45px 0;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label><br>
                                                                                        <select class="select2 form-control" name="teamid[]" multiple="multiple" required>
                                                                                            <option disabled> -- Select Team -- </option>
                                                                                            <option value=""> All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $feedback_team['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $feedback_team['wage']; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <?php
                                                                                $str =  $feedback_team['date_re'];
                                                                                $datr_re = explode(" ", $str);
                                                                                ?>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Date require</label>
                                                                                        <input type="date" class="form-control" name="date_require" min="<?= date("Y-m-d") ?>" value="<?php echo $datr_re[0]; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Note</label>
                                                                                        <textarea name="note" class="form-control" rows="5"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary w-100" style="font-size: 18px;">Submit</button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1 text-left">
                                                                                    <label style="font-size: 16px;" for="">Team file All <span style="color:red;">* ่ทานสามารถเลือกทีมไฟล์คนเก่าได้ที่นี้</span></label>
                                                                                    <hr>
                                                                                    <?php
                                                                                    $this->db->group_by('teamId');
                                                                                    $t3folder = $this->db->get_where('tbl_upload_order_team', ['order_id' => $feedback_team['order_id']])->result_array();
                                                                                    ?>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Order id</th>
                                                                                                    <th>TM</th>
                                                                                                    <th>Folder</th>
                                                                                                    <th>Create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($t3folder as $t3folder) { ?>
                                                                                                    <tr>
                                                                                                        <td><?php echo $t3folder['order_id'] ?></td>
                                                                                                        <td><?php echo $t3folder['teamId'] ?></td>
                                                                                                        <td>
                                                                                                            <span data-toggle="modal" data-target="#teamId_team<?php echo $t3folder['teamId']; ?>_<?php echo $t3folder['order_id']; ?>"><i class="feather icon-folder" style="font-size: 25px;cursor: pointer;"></i></span>
                                                                                                            <div class="modal fade text-left" id="teamId_team<?php echo $t3folder['teamId']; ?>_<?php echo $t3folder['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header bg-primary white">
                                                                                                                            <h4 class="modal-title" id="myModalLabel1"><?php echo $t3folder['teamId'] ?></h4>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">

                                                                                                                            <?php $orderTgroup = $this->db->get_where('tbl_upload_order_team', ['order_id' => $t3folder['order_id'], 'teamId' => $t3folder['teamId']])->result_array(); ?>

                                                                                                                            <table class="table zero-configuration">
                                                                                                                                <thead>
                                                                                                                                    <tr>
                                                                                                                                        <th>#</th>
                                                                                                                                        <th>File name</th>
                                                                                                                                        <th>File</th>
                                                                                                                                        <th>create</th>
                                                                                                                                    </tr>
                                                                                                                                </thead>
                                                                                                                                <tbody>
                                                                                                                                    <?php foreach ($orderTgroup as $keys => $orderTgroup) { ?>
                                                                                                                                        <tr>
                                                                                                                                            <td>
                                                                                                                                                <fieldset>
                                                                                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                                                        <input type="checkbox" name="checkbox[]" value="<?php echo $orderTgroup['id']; ?>">
                                                                                                                                                        <span class="vs-checkbox">
                                                                                                                                                            <span class="vs-checkbox--check">
                                                                                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                                                                                            </span>
                                                                                                                                                        </span>
                                                                                                                                                    </div>
                                                                                                                                                </fieldset>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                                <?php echo $orderTgroup['file_name'] ?>
                                                                                                                                                <a href="" data-toggle="modal" data-target="#gd01<?php echo $orderTgroup['id']; ?>">
                                                                                                                                                    <i class="feather icon-edit-2" style="font-size: 25px;"></i>
                                                                                                                                                </a>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                                <a href="<?php echo $orderTgroup['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                                                            </td>
                                                                                                                                            <td><?php echo $orderTgroup['create_at'] ?></td>
                                                                                                                                        </tr>
                                                                                                                                    <?php } ?>
                                                                                                                                </tbody>
                                                                                                                            </table>


                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td><?php echo $t3folder['create_at'] ?></td>
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <?php if ($feedback_team['status_book'] == '1' && $feedback_team['status_cp'] == 'complete' && $feedback_team['status_admin'] == '0') : ?>
                                                                <span class=" badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($feedback_team['status_book'] == '1' && $feedback_team['status_cp'] == 'notcomplete'  && $feedback_team['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($feedback_team['status_book'] == '2'  && $feedback_team['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($feedback_team['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($feedback_team['status_c_feedack_team'] == 0) : ?>
                                                                <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $feedback_team['id_f']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-alert-circle"></i></button>
                                                                <?php if ($feedback_team['status_cp'] == '') : ?>
                                                                    <button class="btn btn-icon btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="feather icon-log-out"></i>
                                                                    </button>
                                                                <?php else : ?>
                                                                    <button onclick="confileFeedback_team('<?php echo $feedback_team['id_f']; ?>')" class="btn btn-icon btn-success " type="button" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="feather icon-log-out"></i>
                                                                    </button>
                                                                <?php endif; ?>

                                                                <!-- elseif ($feedback_team['status_c_feedack_team'] == 2) : 
                                                                <span class="badge badge-pill badge-danger">Not delivered </span> -->
                                                            <?php elseif ($feedback_team['status_delivery'] == 1) : ?>
                                                                <span class="badge badge-pill badge-success">Delivered </span>

                                                            <?php elseif ($feedback_team['statusall'] == 1) : ?>
                                                                <span class="badge badge-pill badge-success">Complete </span>
                                                            <?php elseif ($feedback_team['status_feedback_read'] == 0) : ?>
                                                                <span class="badge badge-pill badge-info">waiting for team</span>
                                                            <?php elseif ($feedback_team['status_feedback_read'] == 1) : ?>
                                                                <span class="badge badge-pill badge-warning">Processing </span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $z  = 0;
                                                            $cf = $this->db->get_where('tbl_feedback', ['order_id' => $feedback_team['order_id'], 'check_status' => 1, 're_feedback' => 0])->result_array();
                                                            foreach ($cf as $key => $cf) {
                                                                $z += 1;
                                                            }
                                                            $c  = 0;
                                                            $cf2 = $this->db->get_where('tbl_feedback', ['order_id' => $feedback_team['order_id'], 'check_status' => 1, 're_feedback' => 1])->result_array();
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
                                                            <?php if ($feedback_team['status_informal'] == 1) : ?>
                                                                <button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#infor<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-log-out"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#send<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#informal<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-users"></i></button>
                                                            <?php endif; ?>
                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#sendnw<?php echo $feedback_team['id_f']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <div class="modal fade" id="sendnw<?php echo $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Send (<?php echo $feedback_team['order_id']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="send_feedbacktion_all" method="POST" class="form-horizontal">
                                                                            <input type="hidden" name="order_id" value="<?php echo $feedback_team['order_id']; ?>">
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
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="informal<?php echo $feedback_team['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="add_team_informal_feedbackall" method="POST">
                                                            <input type="hidden" name="order_id" value="<?php echo $feedback_team['order_id']; ?>">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exp">Informal team (<?php echo $feedback_team['order_id']; ?>)</h5>
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
                                                                                        <option value="<?php echo $positionX['id'] ?>"><?php echo $positionX['name_item'] ?></option>
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
                                                    <div class="modal fade" id="exampleModalb<?php echo $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Feedback (<?php echo $feedback_team['order_id'] ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label for="" style="font-size: 16px;">File Document </label>
                                                                    <form action="fileUpload_feedback_team" class="dropzone dropzone-area " id="maindropzoneFeedback<?php echo $feedback_team['id_f']; ?>">
                                                                        <!-- <div class="dz-message" style="top: 24%;">Upload Document </div>      -->
                                                                    </form>

                                                                    <input type="text" id="id<?php echo $feedback_team['id_f']; ?>" class="form-control " name="id" value="<?php echo $feedback_team['id_f']; ?>" hidden>
                                                                    <input type="text" id="order_id<?php echo $feedback_team['id_f']; ?>" class="form-control " name="order_id" value="<?php echo $feedback_team['order_id']; ?>" hidden>
                                                                    <input type="text" id="cmid<?php echo $feedback_team['id_f']; ?>" class="form-control " name="cmid" value="<?php echo $feedback_team['userId']; ?>" hidden>


                                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                        <label for="" style="font-size: 16px;"> Descriptions </label>
                                                                        <textarea name="descriptions" class="form-control" id="DM1<?php echo $feedback_team['id_f']; ?>" rows="5" style="width: 100%"><?= $feedback_team['feedback_detail']; ?></textarea>
                                                                    </div>

                                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                        <label for="" style="font-size: 16px;"> Date Required </label>
                                                                        <input type="date" class="form-control" id="dated<?php echo $feedback_team['id_f']; ?>" name="dated" min="<?php echo date('Y-m-d'); ?>" max="<?php echo $feedback_team['dated']; ?>" value="<?php echo $feedback_team['dated']; ?>">

                                                                    </div>



                                                                </div>
                                                                <button type="button" id="uploadsfile<?php echo $feedback_team['id_f']; ?>" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Feedback</button>
                                                            </div>

                                                            <div class="modal-footer">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        Dropzone.autoDiscover = false;
                                                        var myDropzone = new Dropzone("#maindropzoneFeedback<?php echo $feedback_team['id_f']; ?>", {
                                                            autoProcessQueue: false,
                                                            maxFiles: 5,
                                                            addRemoveLinks: true,
                                                            parallelUploads: 5, // Number of files process at a time (default 2)
                                                        });

                                                        document.getElementById("uploadsfile<?php echo $feedback_team['id_f']; ?>").addEventListener("click", function() {
                                                            // myDropzone.processQueue();

                                                            var v = document.getElementById("dated<?php echo $feedback_team['id_f']; ?>").value;
                                                            var fi = document.getElementById("id<?php echo $feedback_team['id_f']; ?>").value;
                                                            var x = document.getElementById("order_id<?php echo $feedback_team['id_f']; ?>").value;
                                                            var y = document.getElementById("cmid<?php echo $feedback_team['id_f']; ?>").value;
                                                            var z = document.getElementById("DM1<?php echo $feedback_team['id_f']; ?>").value;
                                                            if (myDropzone.files < 1) {
                                                                swal("Warning!", "Can not be document Empty", "warning", {
                                                                    button: true,
                                                                });
                                                            } else {
                                                                if (x != '' && y != '' && v != '') {
                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        url: 'order_auto_feedback_team',
                                                                        data: {
                                                                            id: fi,
                                                                            order_id: x,
                                                                            cmid: y,
                                                                            DM: z,
                                                                            dated: v,
                                                                        },
                                                                        success: function(success) {
                                                                            myDropzone.processQueue();
                                                                            myDropzone.on("queuecomplete", function(file, res) {

                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: true,
                                                                                }).then(function(isConfirm) {
                                                                                    if (isConfirm == true) {
                                                                                        setTimeout("location.reload(true);", 500);
                                                                                    } else {
                                                                                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                    }
                                                                                });
                                                                            });
                                                                        }
                                                                    });
                                                                } else {
                                                                    swal("Warning!", "Can not be  Not Empty", "warning", {
                                                                        button: true,
                                                                    });
                                                                }
                                                            }

                                                        });
                                                    </script>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
    $('button[type="button"].eye' ).click(function() {
        var id  = $(this).data('id');
        var idf = $(this).data('idf');
        var d = $('#pathmain' + id).data('pathgt');
        var name_file = $('#Re_file_name' + id).val();
        var last_file = $('#Re_last_name' + id).val();
        console.log(idf)

        $.ajax({
            url: "rename_filename_feedback_all",
            type: "POST",
            data: {
                id: id,
                name_file: name_file,
                last_file: last_file,
                path: d
            },
            success: function(success) {
                if (success) {
                    swal("Good job!", "Upload for data successfull", "success", {
                        button: true,
                    });
                    $("#heresd" + idf).load("feedback_all #heresd"+idf);
                    $("#rename" + id).modal('hide');
                }
            }
        });
    });
</script>