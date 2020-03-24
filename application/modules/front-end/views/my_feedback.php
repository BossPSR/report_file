<br>
<h2 class="text-center" style="margin-top: 15px;">My Feedback</h2>
<hr class="line_package">
<?php if (!empty($feedback) ) { ?>
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
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Document</th>
                                <th scope="col">Feedback Document</th>
                                <th scope="col">Date required</th>
                                <th scope="col">Status</th>
                                <th scope="col">Select item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $p = 1;
                            $o = 1;
                            $i = 1;
                            $y = 1;
                            $r = 1;
                            $z = 1;
                            $aa = 1;
                            $bb = 1;
                            ?>

                            <?php foreach ($feedback as $feedback) { ?>
                                <?php $upder = $this->db->get_where('tbl_upload_order', ['order_id' => $feedback['order_id']])->row_array(); ?>
                                <?php if ($upder['status_approved'] == 1) { ?>
                                    
                                <?php } else { ?>
                              
                                        <tr style="text-align:center;">
                                            <td><?= $i++; ?></td>
                                            <td><?= $feedback['orIdd']; ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalold<?php echo $aa++; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalold<?php echo $bb++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">Old Document</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <?php $doc_old = $this->db->get_where('tbl_upload_order_team', ['order_id' => $feedback['orIdd']])->result_array(); ?>
                                                            <div class="modal-body">

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Document</th>
                                                                            <th scope="col">Downloads</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($doc_old as $doc_old) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td>
                                                                                    <?= $doc_old['file_name']; ?>
                                                                                </td>
                                                                                <td><?= $doc_old['order_id']; ?></td>
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
                                                <a href="#" data-toggle="modal" data-target="#exampleModalFeed<?php echo $r++; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalFeed<?php echo $y++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Date Requred</th>
                                                                            <th scope="col">Downloads</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $feedback_doc = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $feedback['id_feed']])->result_array(); ?>
                                                                        <?php foreach ($feedback_doc as $feedback_doc) { ?>
                                                                            <tr style="text-align:center;">

                                                                                <td><?= $feedback_doc['file_name']; ?></td>
                                                                                <td><?= $feedback['order_id']; ?></td>
                                                                                <td><?= $feedback['date_required']; ?></td>
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
                                            <td><?= $feedback['date_required']; ?></td>
                                            <td>
                                                <?php if ($feedback['status_feedback_read'] == 0) { ?>
                                                    <span class="badge badge-danger">Not Read</span>
                                                <?php } else { ?>
                                                    <?php if ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 0) { ?>
                                                        <span class="badge badge-info">Red</span>
                                                    <?php } elseif ($feedback['status_feedback_read'] == 1 && $feedback['check_feedback_dalivery'] == 1) { ?>
                                                        <span class="badge badge-warning" style="color:#fff;">Wait for admin</span>
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