<style>
    Edit in JSFiddle Result HTML CSS JavaScript Resources

    /*
*
* ==================================================
* UNNECESSARY STYLE - JUST TO MAKE IT LOOKS NICE
* ==================================================
*
*/
    .countdown {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 3rem;
        margin-left: 0.8rem;
    }

    .countdown span:first-of-type {
        margin-left: 0;
    }

    .countdown-circles {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown-circles span {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .countdown-circles span:first-of-type {
        margin-left: 0;
    }


    /*
*
* ==================================================
* FOR DEMO PURPOSES
* ==================================================
*
*/
    body {
        min-height: 100vh;
    }

    .bg-gradient-1 {
        background: #7f7fd5;
        background: -webkit-linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
        background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
    }

    .bg-gradient-2 {
        background: #654ea3;
        background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);
        background: linear-gradient(to right, #654ea3, #eaafc8);
    }

    .bg-gradient-3 {
        background: #ff416c;
        background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
        background: linear-gradient(to right, #ff416c, #ff4b2b);
    }

    .bg-gradient-4 {
        background: #007991;
        background: -webkit-linear-gradient(to right, #007991, #78ffd6);
        background: linear-gradient(to right, #007991, #78ffd6);
    }

    .rounded {
        border-radius: 1rem !important;
    }

    .btn-demo {
        padding: 0.5rem 2rem !important;
        border-radius: 30rem !important;
        background: rgba(255, 255, 255, 0.3);
        color: #fff;
        text-transform: uppercase;
        font-weight: bold !important;
    }

    .btn-demo:hover,
    .btn-demo:focus {
        color: #fff;
        background: rgba(255, 255, 255, 0.5);
    }
</style>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Not Submit</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="back_dashboard">Over All</a>
                                </li>
                                <li class="breadcrumb-item active">Not Submit
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
                                    <h4 class="card-title">Not Submit</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($order_notsum == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_notsum as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>

                                <div class="col-3 text-right">
                                    <a href="orvernotwork" class="btn btn-success mr-1 mb-1">
                                        No Work <span class="badge badge-pill badge-warning" id="">
                                            <?php $no_work = $this->db->get_where('tbl_upload_team', ['teamId' => null])->result_array();
                                            echo count($no_work); ?></span>
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
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Step</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Order Date</th>
                                                    <th>Date required</th>
                                                    <th>TM-Date Comfirm</th>
                                                    <th>Info</th>
                                                    <th>cancel</th>
                                                    <th>Delivery</th>
                                                    <th>Status Team</th>
                                                    <th>Status</th>
                                                    <th>Client Feedback</th>
                                                    <th>Date Cancel</th>
                                                    <th style="width: 12%;">Tool</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($order_notsum as $id => $stores) {
                                                ?>
                                                    <?php if ($stores['statusC'] == '1') : ?>
                                                        <tr style="background-color: #ffebebd4;">
                                                        <?php else : ?>
                                                        <tr>
                                                        <?php endif; ?>
                                                        <td><button class="btn btn-primary" type="button" id="click_step<?php echo $stores['order']; ?>" onclick="click_step('<?php echo $stores['order']; ?>');"><?php echo $stores['click_step']; ?></button></td>
                                                        <td><?php echo $stores['order'] ?></td>
                                                        <td><?php echo $stores['userId']; ?></td>
                                                        <td><?php echo $stores['createOr']; ?></td>
                                                        <td>

                                                            <?php if (date("Y-m-d") >= $stores['requiredOr']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d', strtotime($stores['requiredOr'])); ?>
                                                                <div id="clock-b<?php echo $stores['order']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $stores['order']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
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
                                                        <td><?php echo $stores['uadateTOr']; ?></td>
                                                        <td>
                                                            <?php if ($stores['t_id'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $stores['t_id']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($stores['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $stores['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $stores['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($stores['t_id'] == '' && $stores['wage'] == '' && $stores['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $stores['order']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_over_ns" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $stores['order']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;">

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label>
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
                                                                                        <label for="helpInputTop">Date required</label>
                                                                                        <input type="date" class="form-control" name="date_required_info" value="<?php echo $datr_re[0]; ?>" placeholder="Enter wage" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">Note</label>
                                                                                        <textarea name="note" id="" cols="30" rows="10" class="form-control"><?php echo $stores['note']; ?></textarea>
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
                                                            <?php if ($stores['statusC'] == '1') : ?>

                                                                <span class="badge badge-pill badge-danger"><?php echo $stores['status_who']; ?> <a href="" data-toggle="modal" data-target="#note<?php echo $stores['order']; ?>"> &nbsp; <i class="feather icon-file-text" style="font-size: 25px;"></i></a></span>
                                                                <div class="modal fade" id="note<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <form action="edit_info_over_ns" method="POST">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            <input type="hidden" name="order_id" value="<?php echo $stores['order']; ?>">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $stores['order']; ?>)</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div><?php echo $stores['history']; ?></div>
                                                                                </div>
                                                                                <div class="modal-footer">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php $cancel = $this->db->get_where('tbl_cancel', ['order_id' => $stores['order']])->row_array(); ?>
                                                            <?php
                                                            if ($stores['status_check_team'] == 1) {
                                                                echo '<span class="badge badge-pill badge-Info">Waiting for team</span>';
                                                            } elseif ($stores['status_check_team'] == 2) {
                                                                echo '<span class="badge badge-pill badge-warning">processing</span>';
                                                            } elseif ($stores['status_check_team'] == 3) {
                                                                echo '<span class="badge badge-pill badge-success">complete</span>';
                                                            } elseif ($stores['status_check_team'] == 4) {

                                                                echo '<span class="badge badge-pill badge-danger">Waiting for team</span>';
                                                                echo '<br>';
                                                                echo '<span class="badge badge-pill badge-danger">' . $cancel['history'] . '</span>';
                                                            } else {
                                                                echo '-';
                                                            }

                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($stores['status_book'] == '1' && $stores['status_cp'] == 'complete' && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($stores['status_book'] == '1' && $stores['status_cp'] == 'notcomplete'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($stores['status_book'] == '2'  && $stores['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($stores['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
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
                                                            <?php if ($cancel == true) : ?>
                                                                <?php echo $cancel['create_at']; ?>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <!-- <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $stores['order_id']; ?>" type="button" class="btn btn-icon btn-info"><i class="feather icon-upload"></i></button>
                                                            <a href="" class="btn btn-icon btn-success"><i class="feather icon-mail"></i></a>
                                                            <a href="" class="btn btn-icon btn-warning"><i class="feather icon-inbox"></i></a> -->
                                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#sendnw<?php echo $stores['order']; ?>"><i class="feather icon-navigation"></i> </button>
                                                            <?php if ($stores['t_id'] == '') : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#informal<?php echo $stores['order']; ?>"><i class="feather icon-users"></i></button>
                                                            <?php elseif ($stores['status_informal'] == 1) : ?>
                                                                <button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#infor<?php echo $stores['order']; ?>"><i class="feather icon-log-out"></i></button>
                                                                <div class="modal fade" id="infor<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Dropfile (<?php echo $stores['order']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                    <label for="" style="font-size: 16px;">File Document </label>
                                                                                    <form action="fileUpload_t3_not_summit" class="dropzone dropzone-area" id="dropzoneother<?php echo $stores['order']; ?>">
                                                                                        <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                        <input type="hidden" name="order" value="<?php echo $stores['order']; ?>">
                                                                                        <input type="hidden" name="teamId" value="<?php echo $stores['t_id']; ?>">
                                                                                    </form>
                                                                                </div>


                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around">
                                                                                    <button type="submit" id="other<?php echo $stores['order']; ?>" class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script>
                                                                    Dropzone.autoDiscover = false;
                                                                    var myDropzone5<?php echo $stores['order']; ?> = new Dropzone("#dropzoneother<?php echo $stores['order']; ?>", {
                                                                        autoProcessQueue: false,
                                                                        maxFiles: 5,
                                                                        addRemoveLinks: true,
                                                                        parallelUploads: 5, // Number of files process at a time (default 2)
                                                                    });

                                                                    document.getElementById("other<?php echo $stores['order']; ?>").addEventListener("click", function() {
                                                                        // myDropzone.processQueue();
                                                                        if (myDropzone5<?php echo $stores['order']; ?>.files == 0) {
                                                                            swal("Warning!", "Can not be document Empty", "warning", {
                                                                                button: true,
                                                                            });
                                                                        } else {
                                                                            myDropzone5<?php echo $stores['order']; ?>.processQueue();
                                                                            myDropzone5<?php echo $stores['order']; ?>.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: false,
                                                                                });
                                                                                setTimeout(function() {
                                                                                    location.href = "orvernotsubmit"
                                                                                }, 1000);
                                                                            });
                                                                        }
                                                                    });
                                                                </script>
                                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#send<?php echo $stores['order']; ?>"><i class="feather icon-upload"></i> </button>
                                                                <div class="modal fade" id="send<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Delivery File</h5>

                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="sendEmail_delivery_not_summit" method="POST">
                                                                                    <input type="hidden" name="id" value="<?php echo $stores['order']; ?>">
                                                                                    <input type="hidden" name="dm_id[]" value="<?php echo $stores['id_document']; ?>">

                                                                                    <!-- <?php $dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $stores['order']])->result_array(); ?>
                                                                                <?php foreach ($dm_c as $key => $dm_c) { ?>
                                                                                    <?php $dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $dm_c['id_document']])->row_array(); ?>



                                                                                    <?php if (!empty($dm_c['id_document'])) : ?>
                                                                                        <p>
                                                                                            <b>
                                                                                                <h3><?php echo $dm_c['id_document']; ?></h3>
                                                                                            </b>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store Id</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <label class="container">
                                                                                                            <input type="checkbox" class="checkmark" id="delivery<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>" name="order_id[]" value="<?php echo $orderss['id'] ?>" onclick="numCheck<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>();">
                                                                                                            <span class="checkmark"></span>
                                                                                                        </label>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                            -
                                                                                                        <?php else : ?>
                                                                                                            <div class="badge badge-primary">Relive</div>
                                                                                                        <?php endif ?>
                                                                                                    </td>
                                                                                                    <td><?php echo $orderss['store_id'] ?></td>
                                                                                                    <td><?php echo $orderss['file_name'] ?></td>
                                                                                                    <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $orderss['create_at'] ?></td>
                                                                                                </tr>
                                                                                                <script>
                                                                                                    function numCheck<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>() {
                                                                                                        var checkBox = document.getElementById("delivery<?php echo $orderss['id'] . '-' . $orderss['store_id']; ?>");
                                                                                                        console.log(checkBox.checked)
                                                                                                    }
                                                                                                </script>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?> -->

                                                                                    <hr>

                                                                                    <h3>
                                                                                        <p>Team file</p>
                                                                                    </h3>
                                                                                    <table class="table zero-configuration">
                                                                                        <thead>
                                                                                            <?php $orderss_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $stores['order']])->result_array(); ?>
                                                                                            <tr>
                                                                                                <th>Select</th>

                                                                                                <th>Order Id</th>
                                                                                                <th>File Name</th>
                                                                                                <th>File</th>
                                                                                                <th>create</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($orderss_team as $keys => $orderss_team) { ?>
                                                                                                <tr>
                                                                                                    <td><label class="container">
                                                                                                            <input type="checkbox" class="checkmark" id="Team_ff" name="order_team[]" value="<?php echo $orderss_team['id'] ?>">
                                                                                                            <span class="checkmark"></span>
                                                                                                        </label>
                                                                                                    </td>

                                                                                                    <td><?php echo $orderss_team['order_id'] ?></td>
                                                                                                    <td><?php echo $orderss_team['file_name'] ?></td>
                                                                                                    <td><a href="<?php echo $orderss_team['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                    <td><?php echo $orderss_team['create_at'] ?></td>

                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around">
                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-secondary"><i class="feather icon-users"></i></button>
                                                            <?php endif ?>
                                                            <div class="modal fade" id="informal<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="update_team_informal" method="POST">
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
                                                                    <form action="send_not_submit" method="POST" class="form-horizontal">
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

                                                        <div class="modal fade" id="Cancel<?php echo $stores['order']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <form action="delete_order_ns" method="POST">
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


                                                    <?php  } ?>
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