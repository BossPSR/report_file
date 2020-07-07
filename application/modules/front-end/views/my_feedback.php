<?php $teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $status_c = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam']])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">My Feedback</h2>
<hr class="line_package">
<?php if (!empty($feedback)) { ?>
    <br>
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <!-- <span style="font-size:16px;">Search for date : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">

                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">ID Order</th>
                                <th scope="col">Date required</th>
                                <th scope="col">Team File</th>
                                <th scope="col">Feedback File</th>
                                <th scope="col">Note</th>
                                <th scope="col">Status</th>
                                <th scope="col">Select item</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($feedback as $feedback) { ?>
                                <?php $upder = $this->db->get_where('tbl_upload_order', ['order_id' => $feedback['order_id']])->row_array(); ?>
                                <?php if ($upder['status_approved'] == 1) { ?>

                                <?php } else { ?>

                                    <tr style="text-align:center;">
                                        <td><?= $feedback['orIdd']; ?></td>
                                        <td><?= date('d F Y', strtotime($feedback['dated'])); ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalold<?= $feedback['orIdd']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalold<?= $feedback['orIdd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <?php $doc_old = $this->db->get_where('tbl_upload_order_team', ['order_id' => $feedback['orIdd']])->result_array(); ?>
                                                        <div class="modal-body">

                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <th scope="col">ID Order</th>
                                                                        <th scope="col">File</th>
                                                                        <th scope="col">Document</th>
                                                                        <th scope="col">Downloads</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($doc_old as $doc_old) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?= $doc_old['order_id']; ?></td>
                                                                            <td>
                                                                                <?= $doc_old['file_name']; ?>
                                                                            </td>
                                                                            <td><a href="<?= $doc_old['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            <td>
                                                                                <a href="<?= $doc_old['path']; ?>" class="btn btn-info" download><i class="fa fa-download"></i> Download</a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>

                                                            <!-- <h1 style="color:blue;">Data Not Found</h1> -->

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalFeed<?= $feedback['id_feed']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalFeed<?= $feedback['id_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Feedback Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <th scope="col">ID Order</th>
                                                                        <th scope="col">File</th>
                                                                        <th scope="col">Document</th>
                                                                        <th scope="col">Downloads</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $feedback_doc = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback['id_feed']])->result_array(); ?>
                                                                    <?php foreach ($feedback_doc as $feedback_doc) { ?>
                                                                        <tr style="text-align:center;">

                                                                            <td><?= $feedback['order_id']; ?></td>
                                                                            <td><?= $feedback_doc['file_name']; ?></td>
                                                                            <td><a href="<?= $feedback_doc['path']; ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            <td>
                                                                                <a href="<?php echo $feedback_doc['file_name'] ?>" class="btn btn-info" download><i class="fa fa-download"></i> Download</a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>

                                                            <!-- <h1 style="color:blue;">Data Not Found</h1> -->

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php if (!empty($feedback['feedback_detail'])) { ?>
                                                <a href="#" data-toggle="modal" data-target="#NOTE<?= $feedback['id_feed']; ?>" style="color:#19baea;font-size:18px;"><i class="fa fa-search"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="NOTE<?= $feedback['id_feed']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <p style="font-size:16px;font-weight:bold;"><?= $feedback['feedback_detail']; ?></p>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                        <td>
                                            <?php if ($feedback['check_status'] == 0) { ?>
                                                <span class=" badge badge-danger" style="font-size:16px;"> Admin </span>
                                            <?php } else { ?>
                                                    <span class="badge badge-info" style="font-size:16px;"> Client </span>
                                            <?php } ?>
                                            
                                            <?php if ($feedback['status_feedback_read'] == 0) { ?>
                                                <span class=" badge badge-danger" style="font-size:16px;">Not Read</span>
                                            <?php } else { ?>
                                                <?php if ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 0) { ?>
                                                    <span class="badge badge-info" style="font-size:16px;">Read</span>
                                                <?php } elseif ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 1) { ?>
                                                    <span class="badge badge-primary" style="color:#fff;font-size:16px;">Complete</span>
                                                <?php } elseif ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 2) { ?>
                                                    <span class="badge badge-success" style="font-size:16px;">Success</span>
                                                <?php } ?>
                                            <?php } ?>
                                        </td>
                                        <td><?= $feedback['name_item']; ?></td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="feedback" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="feedback" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                    <h5 class="modal-title" id="staticBackdropLabel">MY Feedback</h5>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <br>
                    <center>
                        <button class="btn btn-primary" id="status_feed">ACCEPT</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <?php if ($check_read) { ?>
        <!--wishlist area end -->
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#feedback').modal({
                    'show': true,
                    keyboard: false
                });

            });
        </script>
        <?php $sb = substr($teamId['IdTeam'], 2); ?>
        <script type="text/javascript">
            $('#status_feed').click(function() {
                swal("Good job!", "Got it.", "success", {
                    button: false,
                });

                $.ajax({
                    type: 'POST',
                    url: 'check_c_feed',
                    data: {
                        teamId: <?= $sb; ?>,
                        status_feedback_read: 1,
                    },
                    success: function(success) {

                        setTimeout(function() {
                            location.href = "my-feedback"
                        }, 1000);
                    }
                });
            });
        </script>
    <?php } ?>

<?php } else { ?>
    <!--wishlist area end -->
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Feedback</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php } ?>