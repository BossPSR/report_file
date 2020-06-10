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
        $this->db->select('*,tbl_feedback.id AS id_num');
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
                                        <table class="table zero-configuration" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>order id</th>
                                                    <th>User id</th>
                                                    <th>Feedback File</th>
                                                    <th>Feedback Detail</th>
                                                    <th>Date feedback</th>
                                                    <th>Order Date</th>
                                                    <th>T3</th>
                                                    <th>Position</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 ?>
                                                <?php $x = 1 ?>
                                                <?php foreach ($feedback_team as $keyBook => $feedback_team) { ?>
                                                    <tr>
                                                        <td><?php echo $feedback_team['order_id'] ?></td>
                                                        <td><?php echo $feedback_team['userId'] ?></td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $feedback_team['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback File (<?php echo $feedback_team['order_id'] ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $feedback_file = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback_team['id_f']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($feedback_file as $keys => $feedback_file) { ?>
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
                                                        <td><?php echo $feedback_team['teamId'] ?></td>
                                                        <td>
                                                            <?php if (!empty($feedback_team['position'])) : ?>
                                                                <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $feedback_team['position']])->result_array(); ?>
                                                                <?php foreach ($position_name as $keys => $position_name) { ?>
                                                                    <?php echo $position_name['name_item'] ?>
                                                                <?php } ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif;  ?>
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
                                                            <?php if ($feedback_team['status_c_feedack_team'] == '1') : ?>
                                                                <span class="badge badge-pill badge-success">complete</span>
                                                            <?php elseif ($feedback_team['team'] != '') : ?>
                                                                <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $feedback_team['id_f']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-alert-circle"></i></button>
                                                                <button onclick="confileFeedback_team('<?php echo $feedback_team['id_f']; ?>')" class="btn btn-icon btn-success " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="feather icon-log-out"></i>
                                                                </button>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
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

                                                            var v  = document.getElementById("dated<?php echo $feedback_team['id_f']; ?>").value;
                                                            var fi = document.getElementById("id<?php echo $feedback_team['id_f']; ?>").value;
                                                            var x  = document.getElementById("order_id<?php echo $feedback_team['id_f']; ?>").value;
                                                            var y  = document.getElementById("cmid<?php echo $feedback_team['id_f']; ?>").value;
                                                            var z  = document.getElementById("DM1<?php echo $feedback_team['id_f']; ?>").value;
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