<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 40px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>

<?php if (!empty($buy_email)) : ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My order</h2>
    <hr class="line_package">
    <br>
    <!--wishlist area start -->
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <table class="table">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                                <th scope="col">Price</th>
                                <th scope="col">Main Document</th>
                                <th scope="col">GT Document</th>
                                <th scope="col">Team File</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Date Required</th>
                                <th scope="col">Warranty day</th>
                                <th scope="col">Tool</th>
                                <th scope="col">Re feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $OP = 1; ?>
                            <?php $bbb = 1; ?>
                            <?php $vvv = 1; ?>
                            <?php $OPE = 1; ?>
                            <?php $BNAP = 1; ?>
                            <?php $NAP = 1; ?>
                            <?php $zz = 1; ?>
                            <?php $xx = 1; ?>
                            <?php $cc = 1; ?>
                            <?php $bb = 1; ?>
                            <?php $xxl = 1; ?>
                            <?php foreach ($buy_email as $value) : ?>




                                <?php $sub_order = substr($value['order_id'], 3); ?>
                                <tr style="text-align:center;">

                                    <!-- Status -->
                                    <th style="text-align: center;">
                                        <?php if ($value['status_approved'] == 4) : ?>
                                            <span class="badge" style="color:#fff;background-color:#7000cc;">Re Feedback</span>
                                        <?php elseif ($value['status_approved'] == 3) : ?>
                                            <span class="badge" style="color:#fff;background-color:#cc7a00;">Feedback</span>
                                        <?php elseif ($value['status_pay'] == 1 && $value['status_delivery'] == 0) : ?>
                                            <span class="badge badge-warning" style="color:#fff;">Processing</span>
                                            <!-- <i class="fa fa-check-square-o" style="color: #28a745;" aria-hidden="true"></i> -->
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 0) : ?>
                                            <span class="badge badge-success" style="color:#fff;">Complete</span>
                                            <!-- <i class="fa fa-minus-square-o" style="color: #cbcbcb;" aria-hidden="true"></i> -->
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 1) : ?>
                                            <span class="badge badge-info" style="color:#fff;">Approved</span>
                                        <?php elseif ($value['status_delivery'] == 1 && $value['status_approved'] == 2) : ?>
                                            <span class="badge badge-danger" style="color:#fff;">Not Approved</span>
                                        <?php endif; ?>
                                    </th>

                                    <!-- order -->
                                    <td data-order="<?php echo $value['ORD'] ?>"><?php echo $value['ORD']; ?></td>

                                    <!-- price -->
                                    <td>$<?php echo $value['price_file']; ?></td>

                                    <!-- Main Document -->
                                    <td>
                                        <?php $zz = 1; ?>
                                        <?php $order_main = $this->db->order_by('create_at')->get_where('tbl_upload_order', ['order_id' => $value['ORD']])->result_array(); ?>
                                        <?php if (!empty($order_main)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalMain<?= $value['ORD']; ?>"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMain<?= $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
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
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($order_main as $order_main) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $order_main['order_id']; ?></td>
                                                                            <td><?php echo $order_main['file_name']; ?></td>
                                                                            <td><a href="<?php echo $order_main['path']; ?>" target="_bank"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>

                                    <!-- GT Document -->
                                    <td>
                                        <?php $kk = 1; ?>
                                        <?php $order_GT = $this->db->order_by('create_at')->get_where('tbl_upload_orderGT', ['order_id' => $value['ORD']])->result_array(); ?>
                                        <?php if (!empty($order_GT)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalMainGT<?= $value['ORD']; ?>"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMainGT<?= $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
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
                                                                        <th scope="col" class="text-left">Detail</th>
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($order_GT as $order_GT) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $order_GT['order_id']; ?></td>
                                                                            <td class="text-left">
                                                                                <!-- <?php if ($order_GT['status_more_file'] == 1) { ?>
                                                                                    <span class="badge badge-danger">New</span>
                                                                                <?php } ?> -->
                                                                                <?php echo $order_GT['file_name_GT']; ?>
                                                                            </td>
                                                                            <?php if (!empty($order_GT['detail'])) { ?>
                                                                                <td class="text-left"><?= $order_GT['detail']; ?></td>
                                                                            <?php } else { ?>
                                                                                <td class="text-center"> - </td>
                                                                            <?php } ?>

                                                                            <td><a href="<?php echo $order_GT['path_GT']; ?>" target="_bank"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a></td>
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
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>

                                    <!-- Team File -->
                                    <td>
                                        <?php $teamF = $this->db->get_where('tbl_upload_order_team', ['order_id' =>  $value['ORDT']])->result_array(); ?>
                                        <?php if (!empty($teamF)) { ?>
                                            <a href="#" data-toggle="modal" data-target="#Teamfile<?= $value['ORD']; ?>"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Teamfile<?= $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
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
                                                                        <th scope="col">Tool</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($teamF as $teamF) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?= $teamF['order_id']; ?></td>
                                                                            <td><?= $teamF['file_name']; ?></td>
                                                                            <td><a href="<?= $teamF['path']; ?>" target="_bank"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a></td>
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
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>

                                    <!-- created_at -->
                                    <td><?php echo date("d F Y", strtotime($value['created_at'])); ?></td>

                                    <!-- Drequired -->
                                    <td><?php echo date("d F Y", strtotime($value['Drequired'])); ?></td>

                                    <!-- end_time -->
                                    <td>
                                        <?php if (!empty($value['end_time']) && $value['status_delivery'] == '1') : ?>
                                            <div data-countdown="<?php echo $value['end_time']; ?>"></div>
                                        <?php else : ?>
                                            -
                                        <?php endif; ?>
                                    </td>

                                    <!-- Tool -->
                                    <td>
                                        <?php $DateT    = date('Y-m-d');  ?>
                                        <?php if ($value['status_approved'] == 1 || $value['status_approved'] == 2) { ?>
                                            <a href="#" data-toggle="modal" data-target="#note_appoved<?= $value['ORD']; ?>"><i style="font-size: 18px;" class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="note_appoved<?php echo $value['ORD'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">

                                                            <h5 class="modal-title" id="staticBackdropLabel">Comments Appovre / Not Appovre</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><?php echo $value['note_approved']; ?></p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } elseif ($value['status_approved'] == 3 || $value['status_approved'] == 4 || $value['status_delivery'] == 1) { ?>

                                            <?php
                                            $this->db->select('*');
                                            $this->db->where('order_id', $value['ORD']);
                                            $this->db->where('check_status', 1);
                                            $this->db->where('re_feedback', 0);
                                            $this->db->order_by('dated', 'DESC');
                                            $N_feed = $this->db->get('tbl_feedback')->row_array();

                                            $this->db->select('count(*) od');
                                            $this->db->where('order_id', $value['ORD']);
                                            $this->db->where('check_status', 1);
                                            $this->db->where('re_feedback', 0);
                                            $this->db->order_by('dated', 'ASC');
                                            $N_count = $this->db->get('tbl_feedback')->row_array();

                                            $this->db->select('*');
                                            $this->db->where('order_id', $value['ORD']);
                                            $this->db->where('check_status', 1);
                                            $this->db->where('re_feedback', 1);
                                            $this->db->order_by('dated', 'DESC');
                                            $ref_feed = $this->db->get('tbl_feedback')->row_array();

                                            $this->db->select('count(*) odref');
                                            $this->db->where('order_id', $value['ORD']);
                                            $this->db->where('check_status', 1);
                                            $this->db->where('re_feedback', 1);
                                            $this->db->order_by('dated', 'ASC');
                                            $ref_count = $this->db->get('tbl_feedback')->row_array();
                                            ?>

                                            <?php if ($N_count['od'] >= 3 || $DateT > $value['end_time']) { ?>

                                                <?php if ($value['status_approved'] == 0) { ?>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="apandnotap<?php echo $value['ORD'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">

                                                                    <h5 class="modal-title" id="staticBackdropLabel">กรุณาประเมิน Appovre / Not Appovre</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script type="text/javascript">
                                                        $(window).on('load', function() {
                                                            $('#apandnotap<?php echo $value['ORD'] ?>').modal('show');
                                                        });
                                                    </script>
                                                <?php } ?>
                                            <?php } ?>




                                            <!-- Modal -->
                                            <?php if ($value['status_refeedback'] == '0') : ?>

                                                <?php if ($N_count['od'] >= 3 || $DateT > $value['end_time']) { ?>

                                                <?php } else { ?>

                                                    <button type="button" class="btn btn-warning" id="onshownbtn<?php echo $value['ORD']; ?>" data-toggle="modal" data-target="#feedback_user<?php echo $value['ORD']; ?>"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                                        <?php if ($N_count['od'] == '0') : ?>

                                                        <?php else : ?>
                                                            <span class="badge badge-light"> <?php echo $N_count['od'];  ?></span>
                                                        <?php endif; ?>
                                                    </button>

                                                    <div class="modal fade" id="feedback_user<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Feedback (<?php echo $value['ORD']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body" style="text-align:left;">
                                                                    <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                    <form action="my-order-feedback" class="dropzone" id="fileuploadnotApprove<?php echo $value['ORD']; ?>">
                                                                        <div class="dz-message needsclick">
                                                                            Drop files here or click to upload.<br>
                                                                            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                        </div>
                                                                    </form>
                                                                    <br>
                                                                    <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                    <label for="" class="font-size-upload">Detail :</label>
                                                                    <textarea id="detail1<?php echo $value['ORD']; ?>" name="detail" class="form-control" rows="5" required></textarea>
                                                                    <br>

                                                                    <label for="" class="font-size-upload">Date :</label>
                                                                    <input type="date" name="dated" id="dated<?php echo $value['ORD']; ?>" class="form-control" value="<?php echo empty($N_feed['dated'])  ? date('Y-m-d') : $N_feed['dated']; ?>" min="<?php echo empty($N_feed['dated'])  ? date('Y-m-d') : $N_feed['dated']; ?>" max="" style="width:30%" required>

                                                                    <input type="text" name="order_id" id="order_id<?php echo $value['ORD']; ?>" value="<?php echo $value['ORD']; ?>" hidden>
                                                                    <input type="text" name="userId" id="userId<?php echo $value['ORD']; ?>" value="<?php echo $userId['idUser']; ?>" hidden>
                                                                    <input type="text" name="refeed" id="refeed<?php echo $value['ORD']; ?>" value="0" hidden>

                                                                    <!-- </form> -->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="SubmitNotApp<?php echo $value['ORD']; ?>" class="btn btn-success">Success</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if (!empty($N_feed['dated'])) { ?>
                                                        <script>
                                                            $('#onshownbtn<?php echo $value['ORD']; ?>').on('click', function() {
                                                                $('#exampleModalNotApprove<?php echo $value['ORD']; ?>').on('shown.bs.modal', function() {
                                                                    var a = $('#dated<?php echo $value['ORD']; ?>').val();
                                                                    swal("Warning!", " คุณสามารถระบุวันเวลาครั้งล่าสุดหรือมากกว่าครั้งล่าสุดเท่านั้น Date required ครั้งล่าสุดของคุณคือ… " + a, "warning", {
                                                                        button: true,
                                                                    });
                                                                });
                                                            });
                                                        </script>
                                                    <?php } ?>
                                                    <div class="modal fade" id="feedback_term" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-md" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Feedback (<?php echo $value['ORD']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="text-align:left;">
                                                                    <p>ท่านสามารถกด Feedback ได้ทั้งหมด3ครั้งและDue dateในแต่ล่ะครั้งต้องไม่น้อยกว่า 3 วัน</p>
                                                                    <p>ทางระบบขอแนะนำให้ท่านเตรียมข้อมูลรายละเอียดหรือตัวอย่างประกอบ ในการแก้ไขให้ครบถ้วนและตรวจสอบวันเวลาที่ต้องการ รับ Feedback ให้แน่ชัดก่อนการกดปุ่มFeedabck</p>
                                                                    <p>กรณีที่ท่านกด Feedback ครั้งที่ 2 และระบุวัน Due date ใหม่ ทางระบบจะยึด Feedback ที่มีวันเวลามากที่สุดเป็นหลัก</p>
                                                                    <p><b>ยกตัวอย่าง:</b> Feedback ครั้งที่ 1 ระบุ Due Date 10/01/2020</p>
                                                                    <p>Feedback ครั้งที่ 2 Due Date 05/01/2020</p>
                                                                    <p>ทางระบบจะส่ง Feedback ให้ 10/01/2020</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="submit_term<?php echo $value['ORD']; ?>" class="btn btn-success">Save</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script type='text/javascript'>
                                                        Dropzone.autoDiscover = false;
                                                        var myDropzone2 = new Dropzone("#fileuploadnotApprove<?php echo $value['ORD']; ?>", {
                                                            autoProcessQueue: false,
                                                            maxFiles: 5,
                                                            addRemoveLinks: true,
                                                            parallelUploads: 5, // Number of files process at a time (default 2)
                                                        });

                                                        $('#SubmitNotApp<?php echo $value['ORD']; ?>').click(function() {
                                                            var x = document.getElementById("detail1<?php echo $value['ORD']; ?>").value;
                                                            var y = document.getElementById("dated<?php echo $value['ORD']; ?>").value;
                                                            var z = document.getElementById("order_id<?php echo $value['ORD']; ?>").value;
                                                            var c = document.getElementById("userId<?php echo $value['ORD']; ?>").value;
                                                            var re = $('#refeed<?php echo $value['ORD']; ?>').val();

                                                            if (myDropzone2.files == 0 && x == '') {
                                                                swal("Warning!", "Can not be document Empty", "warning", {
                                                                    button: true,
                                                                });
                                                            } else {
                                                                $('#feedback_term').modal('show');
                                                                $('#submit_term<?php echo $value['ORD']; ?>').on('click', function() {
                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        url: 'Not_approved',
                                                                        data: {
                                                                            detail: x,
                                                                            dated: y,
                                                                            order_id: z,
                                                                            userId: c,
                                                                            refdata: re,
                                                                        },
                                                                        success: function(success) {
                                                                            if (myDropzone2.files != 0) {
                                                                                myDropzone2.processQueue();
                                                                                myDropzone2.on("queuecomplete", function(file, res) {
                                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                                        button: true,
                                                                                    }).then(function(isConfirm) {
                                                                                        if (isConfirm == true) {
                                                                                            setTimeout("location.reload(true);", 1000);
                                                                                        } else {
                                                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                        }
                                                                                    });
                                                                                });
                                                                            } else {
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

                                                                        }
                                                                    });
                                                                });

                                                            }

                                                        });
                                                    </script>
                                                <?php } ?>

                                            <?php else : ?>

                                                <?php if ($ref_count['odref'] >= 3 || $DateT > $value['end_time']) { ?>

                                                <?php } else { ?>

                                                    <button type="button" class="btn btn-danger" id="onshownbtn<?php echo $value['ORD']; ?>" data-toggle="modal" data-target="#feedback_user<?php echo $value['ORD']; ?>"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                                        <?php if ($ref_count['odref'] == '0') : ?>

                                                        <?php else : ?>
                                                            <span class="badge badge-light"> <?php echo $ref_count['odref'];  ?></span>
                                                        <?php endif; ?>
                                                    </button>

                                                    <div class="modal fade" id="feedback_user<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px;">Re Feedback (<?php echo $value['ORD']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body" style="text-align:left;">
                                                                    <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                    <form action="my-order-feedback" class="dropzone" id="fileuploadnotApprovere<?php echo $value['ORD']; ?>">
                                                                        <div class="dz-message needsclick">
                                                                            Drop files here or click to upload.<br>
                                                                            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                        </div>
                                                                    </form>
                                                                    <br>
                                                                    <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                                    <label for="" class="font-size-upload">Detail :</label>
                                                                    <textarea id="detail1<?php echo $value['ORD']; ?>" name="detail" class="form-control" rows="5" required></textarea>
                                                                    <br>

                                                                    <label for="" class="font-size-upload">Date : <span style="color: red;">* Date required ระบุได้ตั้งแต่ 4 วันขึ้นไป</span></label>
                                                                    <input type="date" name="dated" id="dated<?php echo $value['ORD']; ?>" class="form-control" value="<?php echo date("Y-m-d", strtotime("+ 4 days")); ?>" min="<?php echo date("Y-m-d", strtotime("+ 4 days")); ?>" max="" style="width:30%" required>

                                                                    <input type="text" name="order_id" id="order_id<?php echo $value['ORD']; ?>" value="<?php echo $value['ORD']; ?>" hidden>
                                                                    <input type="text" name="userId" id="userId<?php echo $value['ORD']; ?>" value="<?php echo $userId['idUser']; ?>" hidden>
                                                                    <input type="text" name="refeed" id="refeed<?php echo $value['ORD']; ?>" value="1" hidden>
                                                                    <!-- </form> -->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="SubmitNotAppre<?php echo $value['ORD']; ?>" class="btn btn-success">Save</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <?php if (!empty($ref_feed['dated'])) { ?>
                                                        <script>
                                                            $('#onshownbtn<?php echo $value['ORD']; ?>').on('click', function() {
                                                                $('#exampleModalNotApprove<?php echo $value['ORD']; ?>').on('shown.bs.modal', function() {
                                                                    var a = $('#dated<?php echo $value['ORD']; ?>').val();
                                                                    swal("Warning!", " คุณสามารถระบุวันเวลาครั้งล่าสุดหรือมากกว่าครั้งล่าสุดเท่านั้น Date required ครั้งล่าสุดของคุณคือ… " + a, "warning", {
                                                                        button: true,
                                                                    });
                                                                });
                                                            });
                                                        </script>
                                                    <?php } ?>

                                                    <script type='text/javascript'>
                                                        Dropzone.autoDiscover = false;
                                                        var myDropzoneRe = new Dropzone("#fileuploadnotApprovere<?php echo $value['ORD']; ?>", {
                                                            autoProcessQueue: false,
                                                            maxFiles: 5,
                                                            addRemoveLinks: true,
                                                            parallelUploads: 5, // Number of files process at a time (default 2)
                                                        });

                                                        $('#SubmitNotAppre<?php echo $value['ORD']; ?>').click(function() {
                                                            var x = document.getElementById("detail1<?php echo $value['ORD']; ?>").value;
                                                            var y = document.getElementById("dated<?php echo $value['ORD']; ?>").value;
                                                            var z = document.getElementById("order_id<?php echo $value['ORD']; ?>").value;
                                                            var c = document.getElementById("userId<?php echo $value['ORD']; ?>").value;
                                                            var re = $('#refeed<?php echo $value['ORD']; ?>').val();

                                                            if (myDropzoneRe.files == 0 && x == '') {
                                                                swal("Warning!", "Can not be document Empty", "warning", {
                                                                    button: true,
                                                                });
                                                            } else {

                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: 'Not_approved',
                                                                    data: {
                                                                        detail: x,
                                                                        dated: y,
                                                                        order_id: z,
                                                                        userId: c,
                                                                        refdata: re,
                                                                    },
                                                                    success: function(success) {
                                                                        if (myDropzoneRe.files != 0) {
                                                                            myDropzoneRe.processQueue();
                                                                            myDropzoneRe.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: true,
                                                                                }).then(function(isConfirm) {
                                                                                    if (isConfirm == true) {
                                                                                        setTimeout("location.reload(true);", 1000);
                                                                                    } else {
                                                                                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                                                    }
                                                                                });
                                                                            });
                                                                        } else {
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

                                                                    }
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                <?php } ?>
                                            <?php endif; ?>


                                            <?php if ($value['status_delivery'] == 1) { ?>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#approvedS<?php echo $value['ORD']; ?>" id=""><i class="fa fa-check" aria-hidden="true"></i></button>
                                            <?php } else { ?>
                                                <button type="button" class="btn btn-secondary"><i class="fa fa-check" aria-hidden="true"></i></button>
                                            <?php } ?>

                                            <!-- Modal -->
                                            <div class="modal fade" id="approvedS<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Approved (<?php echo $value['ORD']; ?>)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="text-align: left;">
                                                            <label style="font-size:18px; " for="">แสดงความคิดเห็น (คุณอยากบอกอะไรเรา)</label>
                                                            <textarea name="textarea" id="textarea" class="form-control" rows="5"></textarea><br>
                                                            <label style="font-size:18px;" for="">คะแนนความพึงพอใจในบริการของเรา</label><br>
                                                            <div class="rate" style="text-align: center;">
                                                                <input type="radio" class="star" id="star5" name="rate" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" class="star" id="star4" name="rate" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" class="star" id="star3" name="rate" value="3" />
                                                                <label for="star3" class="star" title="text">3 stars</label>
                                                                <input type="radio" class="star" name="rate" id="star2" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" class="star" id="star1" name="rate" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-orderq="<?php echo $value['ORD'] ?>" id="approvedS" class="btn btn-primary">Save changes</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php $ord_s = substr($value['ORD'], 3); ?>
                                            <?php if ($N_count['od'] >= 3 || $DateT > $value['end_time']) { ?>

                                                <?php if ($value['status_delivery'] == 1) { ?>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#order_not_approved<?php echo $value['ORD']; ?>"><i class="fa fa-times-circle"></i></button>
                                                <?php } else { ?>
                                                    <button type="button" class="btn btn-secondary"><i class="fa fa-times-circle"></i></button>
                                                <?php } ?>

                                                <!-- Modal -->
                                                <div class="modal fade" id="order_not_approved<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Not Approved (<?php echo $value['ORD']; ?>)</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="text-align: left;">
                                                                <label style="font-size:18px;" for="">แสดงความคิดเห็น (คุณอยากบอกอะไรเรา)</label>
                                                                <textarea name="textareanot" id="textareanot<?php echo $value['ORD']; ?>" class="form-control" rows="5"></textarea>
                                                                <label style="font-size:18px;" for="">คะแนนความพึงพอใจในบริการของเรา</label><br>
                                                                <div class="rate" style="text-align: center;">
                                                                    <input type="radio" class="star" id="star6" name="rate_not" value="5" />
                                                                    <label for="star6" title="text">5 stars</label>
                                                                    <input type="radio" class="star" id="star7" name="rate_not" value="4" />
                                                                    <label for="star7" title="text">4 stars</label>
                                                                    <input type="radio" class="star" id="star8" name="rate_not" value="3" />
                                                                    <label for="star8" class="star" title="text">3 stars</label>
                                                                    <input type="radio" class="star" id="star9" name="rate_not" value="2" />
                                                                    <label for="star9" title="text">2 stars</label>
                                                                    <input type="radio" class="star" id="star10" name="rate_not" value="1" />
                                                                    <label for="star10" title="text">1 star</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-ordernot="<?php echo $value['ORD'] ?>" id="not_app<?php echo $value['ORD']; ?>" class="btn btn-primary">Save changes</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script type='text/javascript'>
                                                    $('#not_app<?php echo $value['ORD']; ?>').click(function() {
                                                        var order = $(this).data("ordernot");
                                                        var t_not = $("#textareanot<?php echo $value['ORD']; ?>").val();
                                                        var star = $('input[name="rate_not"]:checked').val();

                                                        swal({
                                                            icon: "warning",
                                                            title: "Are you sure?",
                                                            text: "Do you want Not Approvend document",
                                                            closeOnEsc: true,
                                                            closeOnClickOutside: false,
                                                            buttons: {
                                                                cancel: true,
                                                                confirm: true,
                                                            },
                                                        }).then(function(isConfirm) {
                                                            if (isConfirm == true) {

                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: 'order_not_approved',
                                                                    data: {
                                                                        order_id: order,
                                                                        textnot: t_not,
                                                                        status_approved: 2,
                                                                        star: star,
                                                                    },
                                                                    success: function(success) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: false,
                                                                        });
                                                                        setTimeout("location.reload(true);", 1000);
                                                                    }
                                                                });
                                                            } else {
                                                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                            }
                                                        });
                                                    });
                                                </script>
                                            <?php } ?>


                                        <?php } else { ?>

                                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModalMainFeed<?php echo $OP++; ?>" class="btn btn-warning" style="color:#FFF;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></button> -->
                                            <button type="button" data-toggle="modal" data-target="#gtdoc<?php echo $value['ORD']; ?>" class="btn btn-info"><i class="fa fa-plus-square" aria-hidden="true"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="gtdoc<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body" style="text-align:left;">
                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                            <form action="oder-morefile-upload" class="dropzone" id="fileuploadmorefile<?php echo $value['ORD']; ?>">
                                                                <div class="dz-message needsclick">
                                                                    Drop files here or click to upload.<br>
                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                </div>
                                                                <input type="text" name="order_id" id="order_idS<?php echo $value['ORD']; ?>" value="<?php echo $value['ORD']; ?>" hidden>
                                                            </form>
                                                            <br>
                                                            <!-- <form action="my-order-feedAuto" method="POST"> -->
                                                            <label for="" class="font-size-upload">Detail :</label>
                                                            <textarea id="detailkey<?php echo $value['ORD']; ?>" class="form-control" rows="5"></textarea>
                                                            <br>

                                                            <!-- </form> -->
                                                            <input type="text" name="userId" id="userIdS<?php echo $value['ORD']; ?>" value="<?php echo $userId['idUser']; ?>" hidden>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="Submitgtdoc<?php echo $value['ORD']; ?>" class="btn btn-success">Success</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type='text/javascript'>
                                                $("#detailkey")
                                                    .keyup(function() {
                                                        var value = $(this).val();
                                                        $(".detailshow").val(value);
                                                    })
                                                    .keyup();
                                                Dropzone.autoDiscover = false;
                                                var myDropzone<?php echo $value['ORD']; ?> = new Dropzone("#fileuploadmorefile<?php echo $value['ORD']; ?>", {
                                                    autoProcessQueue: false,
                                                    maxFiles: 5,
                                                    addRemoveLinks: true,
                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                });

                                                $('#Submitgtdoc<?php echo $value['ORD']; ?>').click(function() {
                                                    var x = document.getElementById("detailkey<?php echo $value['ORD']; ?>").value;
                                                    var z = document.getElementById("order_idS<?php echo $value['ORD']; ?>").value;
                                                    var c = document.getElementById("userIdS<?php echo $value['ORD']; ?>").value;

                                                    if (myDropzone<?php echo $value['ORD']; ?>.files < 1) {
                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                            button: true,
                                                        });
                                                    } else {

                                                        $.ajax({
                                                            type: 'POST',
                                                            url: 'order_auto_morefile',
                                                            data: {
                                                                detail: x,
                                                                order_id: z,
                                                                userId: c,
                                                            },
                                                            success: function(success) {
                                                                myDropzone<?php echo $value['ORD']; ?>.processQueue();
                                                                myDropzone<?php echo $value['ORD']; ?>.on("queuecomplete", function(file, res) {
                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                        button: false,
                                                                    });
                                                                });
                                                                setTimeout("location.reload(true);", 1000);
                                                            }
                                                        });

                                                    }
                                                });
                                            </script>
                                        <?php } ?>

                                    </td>

                                    <!-- Re feedback -->
                                    <td>
                                        <?php if ($value['status_refeedback'] == 0) : ?>

                                            <button class="btn btn-success" data-toggle="modal" data-target="#refeedback<?php echo $value['ORD']; ?>">Re feedback</button>
                                            <div class="modal fade" id="refeedback<?php echo $value['ORD']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Re feedback</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body" style="text-align:left;">
                                                            <p style="font-size: 26px;color: #0066ff;">ค่าบริการในการทำรายการทั้งหมด $<?php echo $value['price_file'] / 2; ?> </p>
                                                            <p style="font-size: 16px;">คุณต้องการที่จะใช้บริการเสริมในการซื้อแพ๊กเกจเพื่อให้เราดูแลคุณให้มากขึ้นอีก 65 วัน</p>
                                                            <p style="color: red;font-size: 16px;">
                                                                หมายเหตุ : กรณีที่ออร์เดอร์ลูกค้าหมดอายุการรับประกัน 60 วัน ไม่ว่าสิทธิ์ในการแก้ไขงาน Feedback ยังคงเหลืออยู่หรือไม่ก็ตาม ลูกค้าจะสามารถต่ออายุประกันได้อีก โดยกดปุ่ม Re-feedback ใหม่ได้ โดยทางเราจะคิดค่าบริการ 50% จากราคาเดิมของ Order ดังกล่าวโดยลูกค้าจะได้รับประกันอีก 60 วันและสามารถแก้ไขงาน Feedback ได้ฟรี 3 ครั้ง
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="refeedback" data-ordercon="<?php echo $value['ORD'] ?>" data-price="<?php echo $value['price_file'] / 2; ?>" class="btn btn-success">Confirm</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php else : ?>
                                            <button class="btn btn-secondary">Re feedback</button>
                                        <?php endif; ?>
                                    </td>

                                </tr>


                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Order</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script type='text/javascript'>
    $('body').on('click', '#approvedS', function() {
        var order = $(this).data("orderq");
        var textarea = $('#textarea').val();
        var star = $('input[name="rate"]:checked').val();

        swal({
            icon: "success",
            title: "Are you sure?",
            text: "Do you want Approvend document",
            closeOnEsc: true,
            closeOnClickOutside: false,
            buttons: {
                cancel: true,
                confirm: true,
            },
        }).then(function(isConfirm) {
            if (isConfirm == true) {
                $.ajax({
                    type: 'POST',
                    url: 'order_approverd',
                    data: {
                        order_id: order,
                        textarea: textarea,
                        status_approved: 1,
                        star: star,
                        userId: '<?php echo $userId['idUser']; ?>'
                    },
                    success: function(success) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });
                        setTimeout("location.reload(true);", 1000);
                    }
                });
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

    });
</script>


<script type='text/javascript'>
    $('body').on('click', '#refeedback', function() {
        var order = $(this).data("ordercon");
        var price = $(this).data("price");
        var star = $('input[name="rate"]:checked').val();

        swal({
            icon: "success",
            title: "Are you sure?",
            text: "Do you want Approvend document",
            closeOnEsc: true,
            closeOnClickOutside: false,
            buttons: {
                cancel: true,
                confirm: true,
            },
        }).then(function(isConfirm) {
            if (isConfirm == true) {
                $.ajax({
                    type: 'POST',
                    url: 'order_refeedback',
                    data: {
                        ordercon: order,
                        price: price,
                    },
                    success: function(success) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });
                        setTimeout("location.reload(true);", 1000);
                    }
                });
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

    });
</script>