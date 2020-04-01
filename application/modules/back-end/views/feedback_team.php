<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Feedback Team</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Feedback Team
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
                                    <h4 class="card-title">Feedback Team</h4>
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
                                                    <th>order_id</th>
                                                    <th>User_id</th>
                                                    <th>Feedback File</th>
                                                    <th>Feedback Detail</th>
                                                    <th>Team id</th>
                                                    <th>date</th>
                                                    <th>Create_at</th>
                                                    <th>Tool</th>
                                                    <!-- <th>tool</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 ?>
                                                <?php $x = 1 ?>
                                                <?php foreach ($feedback_team as $keyBook => $feedback_team) { ?>
                                                    <tr>
                                                        <td><?php echo $feedback_team['order_id'] ?></td>
                                                        <td><?php echo $feedback_team['userId'] ?></td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $feedback_team['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $feedback_team['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                        <td><?php echo $feedback_team['feedback_detail'] ?></td>
                                                        <td><?php echo $feedback_team['teamId'] ?></td>
                                                        <td><?php echo $feedback_team['dated'] ?></td>
                                                        <td><?php echo $feedback_team['time'] ?></td>
                                                        <td>

                                                            <?php if ($feedback_team['team'] != '') : ?>

                                                                <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $feedback_team['id_f']; ?>" class="btn btn-danger mr-1 mb-1">Feedback</button>
                                                            <?php else : ?>
                                                                <button type="button" data-toggle="modal" data-target="" class="btn btn-secondary mr-1 mb-1">Feedback</button>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="exampleModalb<?php echo $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label for="" style="font-size: 16px;">File Document </label>
                                                                            <form action="fileUpload_feedback_team" class="dropzone dropzone-area " id="maindropzoneFeedback<?php echo $feedback_team['id_f']; ?>">



                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                            </form>
                                                                            <input type="text" id="order_id" class="form-control " name="order_id" value="<?php echo $feedback_team['order_id']; ?>" hidden>
                                                                            <input type="text" id="cmid" class="form-control " name="cmid" value="<?php echo $feedback_team['userId']; ?>" hidden>

                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                                <label for="" style="font-size: 16px;"> Descriptions </label>
                                                                                <textarea name="descriptions" class="form-control" id="DM1<?php echo $feedback_team['id_f']; ?>" rows="5" style="width: 100%"></textarea>

                                                                            </div>

                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                                                                <label for="" style="font-size: 16px;"> Date Required </label>
                                                                                <input type="date" class="form-control" id="dated<?php echo $feedback_team['id_f']; ?>" name="dated" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $feedback_team['dated']; ?>">
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
                                                                    var x = document.getElementById("order_id").value;
                                                                    var y = document.getElementById("cmid").value;
                                                                    var z = document.getElementById("DM1<?php echo $feedback_team['id_f']; ?>").value;

                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        url: 'order_auto_feedback_team',
                                                                        data: {
                                                                            order_id: x,
                                                                            cmid: y,
                                                                            DM: z,
                                                                            dated: v,
                                                                        },
                                                                        success: function(success) {
                                                                            myDropzone.processQueue();
                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                button: true,
                                                                            }).then(function(isConfirm) {
                                                                                if (isConfirm == true) {
                                                                                    setTimeout("location.reload(true);", 1000);
                                                                                } else {
                                                                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                }
                                                                            });
                                                                        }
                                                                    });

                                                                    // myDropzone.processQueue();
                                                                    // myDropzone.on("success", function(file, res) {
                                                                    //     swal("Good job!", "Upload for data successfull", "success", {
                                                                    //         button: false,
                                                                    //     });
                                                                    //     setTimeout(function() {
                                                                    //         location.href = "Complete"
                                                                    //     }, 1000);
                                                                    // });


                                                                });
                                                            </script>
                                    </div>
                                    <?php if($feedback_team['team']!=''):?>
                                    <button type="button" data-toggle="modal" data-target="#exampleModalbu<?php echo $feedback_team['id_f']; ?>" class="btn btn-info mr-1 mb-1">Deduct money</button>
                                    <?php else:?>
                                    <button type="button" data-toggle="modal" data-target="" class="btn btn-secondary mr-1 mb-1">Deduct money</button>
                                    <?php endif;?>
                                    <div class="modal fade" id="exampleModalbu<?php echo $feedback_team['id_f']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deduct Money</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="Deduct_Money" method="post">
                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                            <div class="form-group">
                                                                <label for="helpInputTop">Income</label>
                                                                <?php $team_money = $this->db->get_where('tbl_team', ['IdTeam' => $feedback_team['teamId']])->result_array(); ?>
                                                                <?php foreach ($team_money as $keys => $team_money) { ?>
                                                                    <input type="text" class="form-control" name="income" value="<?php echo $team_money['income'] ?>" placeholder="Enter wage" readonly>
                                                                <?php } ?>
                                                                <input type="text" name="team_id" value="<?php echo $feedback_team['teamId'] ?>" hidden>
                                                                <input type="text" name="order_id" value="<?php echo $feedback_team['order_id'] ?>" hidden>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                            <div class="form-group">
                                                                <label for="helpInputTop">Deduct money</label>
                                                                <input type="number" id="quantity" name="price_deductmoney" min="1" max="100" class="form-control">


                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                            <div class="form-group">
                                                                <label for="helpInputTop">Note</label>
                                                                <textarea name="node_deductmoney" cols="30" rows="10" class="form-control"></textarea>


                                                            </div>
                                                        </div>


                                                </div>
                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Feedback</button>
                                            </div>

                                            <div class="modal-footer">


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