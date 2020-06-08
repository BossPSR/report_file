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
                                        <table class="table zero-configuration" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>order id</th>
                                                    <th>User id</th>
                                                    <th>Feedback File</th>
                                                    <th>Feedback Detail</th>
                                                    <th>Order Date</th>
                                                    <th>Date feedback</th>
                                                    <th>T3</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($feedback as $keyBook => $feedback) { ?>
                                                        <tr>
                                                            <td><?php echo $feedback['order_feed'] ?></td>
                                                            <td><?php echo $feedback['userId'] ?></td>
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
                                                            <td><?php echo $feedback['time'] ?></td>
                                                            <td><?php echo $feedback['dated'] ?></td>
                                                            <td>
                                                                <?php if (!empty($feedback['teamId'])) : ?>
                                                                    <?php echo $feedback['teamId']; ?>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif;  ?>

                                                            </td>
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
                                                            <td>
                                                                <button class="btn btn-icon btn-info " type="button">
                                                                    <i class="feather icon-mail"></i>
                                                                </button>
                                                                <button class="btn btn-icon btn-danger " type="button">
                                                                    <i class="feather icon-alert-circle"></i>
                                                                </button>
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