<!-- BEGIN: Content-->
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
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
                        <h2 class="content-header-title float-left mb-0">Bookmark</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Bookmark
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
                                    <h4 class="card-title">Bookmark</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($bookmark == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($bookmark as $key => $datata) {
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
                                        <table class="table table-hover zero-configuration" >
                                            <thead>
                                                <tr>
                                                    <th>order Id</th>
                                                    <th>User Id</th>
                                                    <th>Country</th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>Team File</th>
                                                    <th>Date Required</th>
                                                    <th>Price</th>
                                                    <th>Wage</th>
                                                    <th>Status</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bookmark as $keyBook => $bookmark) { ?>

                                                    <tr>
                                                        <!-- orderd -->
                                                        <td><?php echo $bookmark['orderd'] ?></td>

                                                        <!-- user_name -->
                                                        <td><?php echo $bookmark['usermain'] ?></td>

                                                        <!-- countryName -->
                                                        <td>
                                                            <?php echo $bookmark['countryName'] == '' ? '-' : $bookmark['countryName']; ?>
                                                        </td>

                                                        <!-- DM -->
                                                        <td>
                                                            <?php if (empty($bookmark['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderd']])->result_array(); ?>
                                                                <?php foreach ($show_dm as $keyBook => $show_dm) { ?>

                                                                    <?php if ($show_dm['id_document'] == '') : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <span class="badge badge-primary"><?php echo $show_dm['id_document'] ?></span>
                                                                    <?php endif; ?>

                                                                <?php } ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Main File -->
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark['orderd']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark['orderd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark['orderd']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['created_at_buy'] ?></td>
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

                                                        <!-- GT File -->
                                                        <td>
                                                            <?php $status = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark['orderd']])->row_array();  ?>
                                                            <?php if ($status == true) : ?>

                                                                <span data-toggle="modal" data-target="#exampleModaly<?php echo $bookmark['orderd']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModaly<?php echo $bookmark['orderd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark['orderd']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($order as $keys => $order) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $order['order_id'] ?></td>
                                                                                                <td><?php echo $order['file_name_GT'] ?></td>
                                                                                                <td><a href="<?php echo $order['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $order['create_at'] ?></td>


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

                                                        <!-- Document File -->
                                                        <td>
                                                            <?php if (!empty($bookmark['id_document'])) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['orderd']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $bookmark['orderd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderd']])->result_array(); ?>
                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p>
                                                                                            <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>

                                                                                                    <th>Rewrite</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $key => $dm_c11) : ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['comandnocom'] == '4') : ?>
                                                                                                                <div class="badge badge-primary">Rewrite</div>
                                                                                                            <?php else : ?>
                                                                                                                -
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $dm_c11['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $dm_c11['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $dm_c11['create_at'] ?></td>
                                                                                                    </tr>
                                                                                                <?php endforeach; ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?>

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

                                                        <!-- Team File -->
                                                        <td>
                                                            <?php
                                                            $this->db->join('tbl_folder', 'tbl_folder.id = tbl_upload_order_team.group', 'left');
                                                            $this->db->group_by('group');
                                                            $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['id_orderBuy']])->result_array();
                                                            ?>
                                                            <?php if ($orderss == true) : ?>

                                                                <span data-toggle="modal" data-target="#teamfile<?php echo $bookmark['id_orderBuy']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="teamfile<?php echo $bookmark['id_orderBuy']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Team Folder </h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Status Admin</th>
                                                                                            <th>Folder name</th>
                                                                                            <th>Folder</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <?php if ($orderss['status_upload_admin_cp'] == '1') : ?>
                                                                                                        <span class="badge badge-pill badge-danger">Admin</span>
                                                                                                    <?php else : ?>
                                                                                                        -
                                                                                                    <?php endif; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $orderss['name_folder'] ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span data-toggle="modal" data-target="#groupse<?php echo $orderss['group']; ?>_<?php echo $bookmark['id_orderBuy']; ?>"><i class="feather icon-folder" style="font-size: 25px;cursor: pointer;"></i></span>
                                                                                                    <div class="modal fade" id="groupse<?php echo $orderss['group']; ?>_<?php echo $bookmark['id_orderBuy']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                        <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Team File </h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <?php $orderTgroup = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['id_orderBuy'], 'teamId' => $bookmark['teamId'], 'group' => $orderss['group']])->result_array(); ?>
                                                                                                                    <table class="table zero-configuration">
                                                                                                                        <thead>
                                                                                                                            <tr>
                                                                                                                                <th>Rewrite</th>
                                                                                                                                <th>Order Id</th>
                                                                                                                                <th>File Name</th>
                                                                                                                                <th>File</th>
                                                                                                                                <th>create</th>
                                                                                                                            </tr>
                                                                                                                        </thead>
                                                                                                                        <tbody>
                                                                                                                            <?php foreach ($orderTgroup as $keys => $orderTgroup) { ?>
                                                                                                                                <tr>

                                                                                                                                    <td>
                                                                                                                                        <?php if ($orderTgroup['relive_status'] == '0') : ?>
                                                                                                                                            -
                                                                                                                                        <?php else : ?>
                                                                                                                                            <div class="badge badge-primary">Rewrite</div>
                                                                                                                                        <?php endif ?>
                                                                                                                                    </td>
                                                                                                                                    <td><?php echo $orderTgroup['order_id'] ?></td>
                                                                                                                                    <td><?php echo $orderTgroup['file_name'] ?> <a href="" data-toggle="modal" data-target="#dms<?php echo $orderTgroup['id']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                                                                                                        <div class="modal fade" id="dms<?php echo $orderTgroup['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                                                            <form action="rename_uploadPay" method="POST">
                                                                                                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                                                                                                    <div class="modal-content">
                                                                                                                                                        <div class="modal-header">
                                                                                                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Rename (<?php echo $orderTgroup['order_id']; ?>)</h5>
                                                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                                                            </button>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="modal-body row">
                                                                                                                                                            <?php $exp = explode(".", $orderTgroup['file_name']); ?>
                                                                                                                                                            <div class="col-xl-12 col-md-12 col-12 ">
                                                                                                                                                                <div class="form-group" style="text-align: left;">
                                                                                                                                                                    <label for="Team">Rename</label>
                                                                                                                                                                    <input type="text" class="form-control" value="<?php echo $exp[0] ?>" name="resume">
                                                                                                                                                                    <input type="hidden" class="form-control" value="<?php echo $orderTgroup['path'] ?>" name="path">
                                                                                                                                                                    <input type="hidden" class="form-control" value="<?php echo $exp[1] ?>" name="doc">
                                                                                                                                                                    <input type="hidden" class="form-control" value="<?php echo $orderTgroup['id']; ?>" name="id">
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
                                                                                                                                    <td><a href="<?php echo $orderTgroup['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                                    <td><?php echo $orderTgroup['create_at'] ?></td>
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
                                                                                                <td><?php echo $orderss['create_at'] ?></td>



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

                                                        <!-- Date Required -->
                                                        <td>
                                                            <?php if (date("Y-m-d") >= $bookmark['date_re']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                   
                                                                <p id="demo<?php echo $bookmark['orderd'] ?>" style="font-size: 18px;font-weight: bold;"></p>

                                                            <?php endif; ?>
                                                            <script>
                                                                var datep<?php echo $bookmark['orderd'] ?> = "<?= $bookmark['date_re']; ?>";
                                                                
                                                                // Set the date we're counting down to
                                                                var countDownDate<?php echo $bookmark['orderd'] ?> = new Date(datep<?php echo $bookmark['orderd'] ?>);

                                                                // Update the count down every 1 second
                                                                var x<?php echo $bookmark['orderd'] ?> = setInterval(function() {

                                                                    // Get today's date and time
                                                                    var now<?php echo $bookmark['orderd'] ?> = new Date();

                                                                    // Find the distance between now and the count down date
                                                                    var distance<?php echo $bookmark['orderd'] ?> = countDownDate<?php echo $bookmark['orderd'] ?> - now<?php echo $bookmark['orderd'] ?>;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days<?php echo $bookmark['orderd'] ?> = Math.floor(distance<?php echo $bookmark['orderd'] ?> / (1000 * 60 * 60 * 24));
                                                                    var hours<?php echo $bookmark['orderd'] ?> = Math.floor((distance<?php echo $bookmark['orderd'] ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes<?php echo $bookmark['orderd'] ?> = Math.floor((distance<?php echo $bookmark['orderd'] ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds<?php echo $bookmark['orderd'] ?> = Math.floor((distance<?php echo $bookmark['orderd'] ?> % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo<?php echo $bookmark['orderd'] ?>").innerHTML = days<?php echo $bookmark['orderd'] ?> + "Day " + hours<?php echo $bookmark['orderd'] ?> + "h " +
                                                                        minutes<?php echo $bookmark['orderd'] ?> + "m " + seconds<?php echo $bookmark['orderd'] ?> + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance<?php echo $bookmark['orderd'] ?> < 0) {
                                                                        clearInterval(x<?php echo $bookmark['orderd'] ?>);
                                                                        document.getElementById("demo<?php echo $bookmark['orderd'] ?>").innerHTML = '<span class="badge badge-danger">หมดเวลา</span>';
                                                                    }
                                                                }, 1000);
                                                            </script>
                                                           
                                                        </td>

                                                        <!-- price -->
                                                        <td><?php echo $bookmark['price_save'] ?></td>

                                                        <!-- wage -->
                                                        <td>
                                                            <?php if ($bookmark['wageT']) { ?>
                                                                <?php echo $bookmark['wageT'] ?>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>

                                                        <!-- status_book -->
                                                        <td>

                                                            <?php if ($bookmark['status_book'] == '1' && $bookmark['statusB'] == 'complete' && $bookmark['statusAdmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($bookmark['status_book'] == '1' && $bookmark['statusB'] == 'notcomplete' && $bookmark['statusAdmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Not complete</span>
                                                            <?php elseif ($bookmark['status_book'] == '1' && $bookmark['statusB'] == 'rewrite') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($bookmark['status_book'] == '2'  && $bookmark['statusAdmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($bookmark['statusAdmin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <!-- Tool -->
                                                        <td>

                                                            <!-- <?php $show_dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderd']])->row_array(); ?>

                                                            <?php $show_dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $show_dm_c['id_document']])->row_array(); ?>

                                                            <?php $show_dm_c2 = $this->db->get_where('tbl_upload_store', ['store_id' => $show_dm_c1['upload_store_id'], 'status_check_drop' => '11'])->row_array(); ?>
                                                            <?php if ($show_dm_c2 == true) : ?>
                                                                <a href="" data-toggle="modal" data-target="#dropW<?php echo $bookmark['orderd']; ?>" class="btn btn-icon btn-success "><i class="feather icon-download-cloud"></i></a>
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#dropW<?php echo $bookmark['orderd']; ?>" class="btn btn-icon btn-primary "><i class="feather icon-download-cloud"></i></a>
                                                            <?php endif; ?> -->

                                                            <?php if ($bookmark['status_delivery'] == '1') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#exampleModalu<?php echo $bookmark['orderd']; ?>"><i class="feather icon-navigation"></i></button>
                                                            <?php endif; ?>

                                                            <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderd']])->result_array(); ?>

                                                            <div class="modal fade" id="exampleModalu<?php echo $bookmark['orderd']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Delivery File</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="sendEmail_delivery_pay" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $bookmark['orderd']; ?>">
                                                                                <input type="hidden" name="dm_id[]" value="<?php echo $bookmark['id_document']; ?>">
                                                                                <input type="hidden" name="price_save" value="<?php echo $bookmark['price_save'] ?>">

                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p>
                                                                                            <b>
                                                                                                <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                            </b>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Rewrite</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>Create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $keys => $dm_c11) { ?>

                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <label class="container">
                                                                                                                <input type="checkbox" class="checkmark" id="delivery<?php echo $dm_c11['id']; ?>" name="order_id[]" value="<?php echo $dm_c11['id'] ?>" onclick="numCheck<?php echo $dm_c11['id']; ?>();">
                                                                                                                <span class="checkmark"></span>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['comandnocom'] == '4') : ?>
                                                                                                                <div class="badge badge-primary">Rewrite</div>
                                                                                                            <?php else : ?>
                                                                                                                -
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $dm_c11['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $dm_c11['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $dm_c11['create_at'] ?></td>


                                                                                                    </tr>
                                                                                                    <script>
                                                                                                        function numCheck<?php echo $dm_c11['id'] . '-' . $dm_c11['store_id']; ?>() {
                                                                                                            var checkBox = document.getElementById("delivery<?php echo $dm_c11['id'] . '-' . $dm_c11['store_id']; ?>");
                                                                                                            console.log(checkBox.checked)
                                                                                                        }
                                                                                                    </script>
                                                                                                <?php }
                                                                                                ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?>

                                                                                <hr>

                                                                                <h3>
                                                                                    <p>Team file</p>
                                                                                </h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['order_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>

                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>Create</th>
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


                                                            <script>
                                                                $("#DM1<?php echo $bookmark['orderd']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $("#DM2<?php echo $bookmark['orderd']; ?>").val(value);
                                                                }).change();
                                                            </script>

                                                            <script>
                                                                var x = document.getElementById("DM1<?php echo $bookmark['orderd']; ?>").value;
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $bookmark['orderd']; ?> = new Dropzone("#maindropzone<?php echo $bookmark['orderd']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfile<?php echo $bookmark['orderd']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone<?php echo $bookmark['orderd']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    myDropzone<?php echo $bookmark['orderd']; ?>.processQueue();
                                                                    myDropzone<?php echo $bookmark['orderd']; ?>.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: false,
                                                                        });
                                                                        setTimeout(function() {
                                                                            location.href = "Bookmark"
                                                                        }, 1000);
                                                                    });
                                                                });
                                                            </script>

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


<script>
    document.getElementById("upload_de").addEventListener("click", function() {
        var x = document.getElementById("delivery").length;


        if (x == '') {
            swal("Warning!", "Can not be  Not Empty", "warning", {
                button: true,
            });
        } else {
            function doTestClick() {
                frm_test.submit(); // submit form ด้วย Javascript
            };
        }

    });
</script>