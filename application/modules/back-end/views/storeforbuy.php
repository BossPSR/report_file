<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Store For buy </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Store For buy
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
                                <div class="col-10">
                                    <h4 class="card-title">Store For buy</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($stored == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($stored as $key => $datata) {
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
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>country</th>
                                                    <th>Note</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>create Order</th>
                                                    <th>Date Required</th>
                                                    <th>Confirmed order</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $i = 1;
                                                $e = 1;
                                                $y = 1;
                                                foreach ($stored as $key => $stored) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $y++; ?></td>
                                                        <td><?php echo $stored['order_id']; ?></td>
                                                        <td><?php echo $stored['userId']; ?></td>
                                                        <td><?php echo $stored['countryName']; ?></td>
                                                        <td>

                                                            <?php if (!empty($stored['note_user'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note<?php echo $stored['order_id']; ?>"><i class="feather icon-search"></i></a>
                                                                <div class="modal fade" id="note<?php echo $stored['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form action="" method="POST">
                                                                                <div class="modal-body">
                                                                                    <?= $stored['note_user']; ?>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stored['order_id']])->result_array(); ?>
                                                            <?php if (empty($order)) { ?>
                                                                -
                                                            <?php } else { ?>
                                                                <span data-toggle="modal" data-target="#exampleModala<?php echo $stored['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModala<?php echo $stored['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                <?php
                                                                                                $file_name = $order['file_name'];
                                                                                                $info = pathinfo($file_name, PATHINFO_EXTENSION);

                                                                                                ?>
                                                                                                <td><?php echo $order['order_id'] ?></td>
                                                                                                <td><?php echo $order['file_name'] ?></td>

                                                                                                <td>
                                                                                                    <?php if ($info == 'pdf' || $info == 'jpg' || $info == 'png') : ?>
                                                                                                        <a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php else : ?>
                                                                                                        <a href="" id="officeviewer1<?php echo $order['id']; ?>" data-file="<?php echo $order['file_name']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php endif; ?>
                                                                                                </td>
                                                                                                <td><?php echo $order['create_at'] ?></td>
                                                                                            </tr>

                                                                                            <script type="text/javascript">
                                                                                                $(function() {
                                                                                                    $("#officeviewer1<?php echo $order['id']; ?>").on("click", function() {
                                                                                                        var f = $(this).data('file');
                                                                                                        var viewerAgent = 'https://view.officeapps.live.com/op/view.aspx?src=';
                                                                                                        var fileUrl = '<?php echo base_url() ?>uploads/Buy/';
                                                                                                        var fileData = $(this).data('file'); // ได้ชื่อไฟล์ที่เรากำหนดใน data-file
                                                                                                        var fullPathFile = viewerAgent + fileUrl + fileData;
                                                                                                        console.log(fullPathFile);
                                                                                                        $("#officeviewer1<?php echo $order['id']; ?>").attr("href", fullPathFile);
                                                                                                    });
                                                                                                });
                                                                                            </script>

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
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php $orderGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stored['order_id']])->result_array(); ?>
                                                            <?php if (empty($orderGT)) { ?>
                                                                -
                                                            <?php } else { ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $stored['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                                                        <tr>
                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                                            <?php
                                                                                            $file_nameGT = $orderGT['file_name_GT'];
                                                                                            $infoGT = pathinfo($file_nameGT, PATHINFO_EXTENSION);

                                                                                            ?>
                                                                                            <tr>
                                                                                                <td><?php echo $orderGT['order_id'] ?></td>
                                                                                                <td><?php echo $orderGT['file_name_GT'] ?></td>
                                                                                                <td>
                                                                                                    <?php if ($infoGT == 'pdf' || $infoGT == 'jpg' || $infoGT == 'png') : ?>
                                                                                                        <a href="<?php echo $orderGT['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php else : ?>
                                                                                                        <a href="" id="officeviewer2<?php echo $orderGT['id']; ?>" data-file="<?php echo $orderGT['file_name_GT']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php endif; ?>

                                                                                                </td>
                                                                                                <td><?php echo $orderGT['create_at'] ?></td>
                                                                                            </tr>
                                                                                            <script type="text/javascript">
                                                                                                $(function() {
                                                                                                    $("#officeviewer2<?php echo $orderGT['id']; ?>").on("click", function() {
                                                                                                        var f = $(this).data('file');
                                                                                                        var viewerAgent = 'https://view.officeapps.live.com/op/view.aspx?src=';
                                                                                                        var fileUrl = '<?php echo base_url() ?>uploads/Buy/GT/';
                                                                                                        var fileData = $(this).data('file'); // ได้ชื่อไฟล์ที่เรากำหนดใน data-file
                                                                                                        var fullPathFile = viewerAgent + fileUrl + fileData;
                                                                                                        console.log(fullPathFile);
                                                                                                        $("#officeviewer2<?php echo $orderGT['id']; ?>").attr("href", fullPathFile);
                                                                                                    });
                                                                                                });
                                                                                            </script>
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
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php echo $stored['create_at']; ?></td>
                                                        <td>
                                                            <input type="date" class="form-control dateread<?php echo $stored['order_id']; ?>" name="date_required" id="datenow" data-datenow="<?php echo $stored['order_id']; ?>" value="<?php echo $stored['date_required']; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                            <br>
                                                            <?php if (date("Y-m-d") >= $stored['date_required']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <?php $dateReq = date('Y/m/d', strtotime($stored['date_required'])); ?>
                                                                <div id="clock-b<?php echo $stored['order_id']; ?>" style="display: flex;"></div>
                                                                <script>
                                                                    $(function() {
                                                                        $('#clock-b<?php echo $stored['order_id']; ?>').countdown('<?php echo $dateReq; ?>').on('update.countdown', function(event) {
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
                                                        <td> <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModallCenter<?php echo $stored['order_id']; ?>">
                                                                Satisfired

                                                            </button>
                                                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModallCenterb<?php echo $stored['order_id']; ?>">
                                                                Not Satisfired

                                                            </button>
                                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $stored['order_id']; ?>">
                                                                Reject

                                                            </button>
                                                        </td>
                                                    </tr>


                                                    <div class="modal fade" id="exampleModallCenter<?php echo $stored['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="check_order_add_com" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['id']; ?>">
                                                            <input type="hidden" name="orderid" value="<?php echo $stored['order_id']; ?>">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Satisfired (<?php echo $stored['order_id']; ?>)</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Status Upload</label>
                                                                                <select class="form-control statusst" id="status_cp<?php echo $stored['order_id']; ?>" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <option value="1">Complete</option>
                                                                                    <option value="2">Not Complete</option>
                                                                                    <option value="3">Original</option>
                                                                                    <option value="4">Rewrite</option>
                                                                                </select>
                                                                            </div>
                                                                        </div> -->
                                                                        <?php
                                                                        $this->db->group_by('dm_sub');
                                                                        $this->db->order_by('dm_sub', 'asc');
                                                                        $query = $this->db->get('tbl_upload_main_search_sub')->result_array();
                                                                        ?>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="book">Document ID</label>
                                                                                <select name="DM[]" id="" class="select2 form-control dmsub" multiple="multiple" required>
                                                                                    <option value="" disabled>--- Select DM ---</option>
                                                                                    <?php foreach ($query as $key => $query) { ?>
                                                                                        <option value="<?php echo $query['dm_sub']; ?>"><?php echo $query['dm_sub']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Status</label>
                                                                                <select name="status_cp" class="form-control" id="status_cp<?php echo $stored['order_id']; ?>" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <option value="complete">Original</option>
                                                                                    <option value="notcomplete">Not Complete</option>
                                                                                    <option value="rewrite">Rewrite</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Organization</label>
                                                                                <select name="organization" class="form-control" id="organization">
                                                                                    <option value="A">A</option>
                                                                                    <option value="B">B</option>
                                                                                    <option value="C">C</option>
                                                                                    <option value="D">D</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="basicInput"></label>
                                                                                <?php $chek_name  = $this->db->get_where('tbl_user', ['idUser' => $stored['userId']])->row_array(); ?>
                                                                                <label for="basicInput">Customer code</label>
                                                                                <input type="text" name="Customer" class="form-control" id="Customer<?php echo $stored['order_id']; ?>" value="<?php echo $chek_name['idUser']; ?>" placeholder="Enter Document ID" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="Order" id="Order<?php echo $stored['order_id']; ?>" value="<?php echo $stored['order_id']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">price</label>
                                                                                <input type="text" class="form-control" name="price_file" id="price_fileSatisfired<?php echo $stored['order_id']; ?>" value="<?php echo $stored['price_file']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control dr<?php echo $stored['order_id']; ?>" name="Daterequired" id="Daterequired" value="<?php echo $stored['date_required']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>



                                                                        <!-- <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeck<?php echo $stored['order_id']; ?>" data-order="<?php echo $stored['order_id']; ?>">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">Add Team</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teambox<?php echo $stored['order_id']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="team<?php echo $stored['order_id']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsM) { ?>
                                                                                        <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="Wage">Wage</label>
                                                                                <input type="number" id="wage<?php echo $stored['order_id']; ?>" name="wage" class="form-control" value="">
                                                                            </div>

                                                                            <?php $item = $this->db->get('tbl_item_position')->result(); ?>
                                                                            <div class="form-group">
                                                                                <label for="Position">Position</label>
                                                                                <select name="Position" class="form-control" id="position<?php echo $stored['order_id']; ?>">
                                                                                    <option value="" selected disabled> --- Position ---</option>
                                                                                    <?php foreach ($item as $key => $item) : ?>
                                                                                        <option value="<?php echo $item->id; ?>"> <?php echo $item->name_item; ?> </option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div> -->

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button id="Dm_c" type="submit" class="btn btn-primary">submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>



                                                    <div class="modal fade" id="exampleModallCenterb<?php echo $stored['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                        <form action="check_NotSatisfired_order_add_com" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['id']; ?>">
                                                            <input type="hidden" name="orderid" value="<?php echo $stored['order_id']; ?>">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Not Satisfired (<?php echo $stored['order_id']; ?>)</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <?php $chek_order_user  = $this->db->get_where('tbl_user', ['idUser' => $stored['userId']])->row_array(); ?>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="Customer">Customer code</label>
                                                                                <input type="text" class="form-control" name="Customer" value="<?php echo $chek_order_user['idUser']; ?>" placeholder="Enter Customer code" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="Order">Order</label>
                                                                                <input type="text" class="form-control" name="Order" value="<?php echo $stored['order_id']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="price">price</label>
                                                                                <input type="text" class="form-control" name="price_file" value="<?php echo $stored['price_file']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="Date">Date required</label>
                                                                                <input type="date" class="form-control dr<?php echo $stored['order_id']; ?>" name="Daterequired" value="<?php echo $stored['date_required']; ?>" placeholder="Enter Date required">
                                                                            </div>
                                                                        </div>

                                                                        <!-- <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeckNot<?php echo $stored['order_id']; ?>" data-notst="<?php echo $stored['order_id']; ?>">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">Add Team</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teamboxNot<?php echo $stored['order_id']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="teamNot<?php echo $stored['order_id']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsNot) { ?>
                                                                                        <option value="<?php echo $tsNot['IdTeam']; ?>"><?php echo $tsNot['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="Wage">Wage</label>
                                                                                <input type="number" id="wageNot<?php echo $stored['order_id']; ?>" name="wage" class="form-control" value="">
                                                                            </div>

                                                                            <?php $item = $this->db->get('tbl_item_position')->result(); ?>
                                                                            <div class="form-group">
                                                                                <label for="Position">Position</label>
                                                                                <select name="Position" class="form-control" id="positionNot<?php echo $stored['order_id']; ?>">
                                                                                    <option value="" selected disabled> --- Position ---</option>
                                                                                    <?php foreach ($item as $key => $item) : ?>
                                                                                        <option value="<?php echo $item->id; ?>"> <?php echo $item->name_item; ?> </option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div> -->

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="Note">Note</label>
                                                                                <textarea class="form-control" name="note_s" rows="5" placeholder="Enter Note"></textarea>
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

                                                    <script>
                                                        $(".dateread<?php echo $stored['order_id']; ?>").change(function() {
                                                            var value = $(this).val();
                                                            $(".dr<?php echo $stored['order_id']; ?>").val(value);
                                                        }).change();
                                                    </script>

                                                    <div class="modal fade" id="exampleModallCenterc<?php echo $stored['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                        <form action="reject_order_add_com" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['order_id']; ?>">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Reject (<?php echo $stored['order_id']; ?>)</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note Reject</label>
                                                                                <textarea type="text" class="form-control" name="note" value="" rows="10" placeholder="Enter note" required>เอการของคุณโดน reject</textarea>

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

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');
        var st = $(this).data('notst');
        if ($('.ckeck' + o).is(":checked")) {
            $("#teambox" + o).fadeIn("slow");
            $("#team" + o).prop('required', true);
            $("#wage" + o).prop('required', true);
            $("#position" + o).prop('required', true);
        } else {
            $("#teambox" + o).fadeOut("slow");
            $("#team" + o).prop('required', false);
            $("#wage" + o).prop('required', false);
            $("#position" + o).prop('required', false);
        }

        if ($('.ckeckNot' + st).is(":checked")) {
            $("#teamboxNot" + st).fadeIn("slow");
            $("#teamNot" + st).prop('required', true);
            $("#wageNot" + st).prop('required', true);
            $("#positionNot" + st).prop('required', true);
        } else {
            $("#teamboxNot" + st).fadeOut("slow");
            $("#teamNot" + st).prop('required', false);
            $("#wageNot" + st).prop('required', false);
            $("#positionNot" + st).prop('required', false);
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('change', '#datenow', function() {
            var date = $(this).data('datenow');
            $.ajax({
                type: 'POST',
                data: {
                    date: $(this).val(),
                    order: date
                },
                url: 'edit_date_required',
                success: function(data) {
                    toastr.info('Success', 'Save to Date Required.');
                }
            });
            return false;
        });
    });
</script>


<!-- <script>
    $(document).ready(function() {
        $('.statusst').change(function() {
            var statusst = $('.statusst').val();
            if (statusst != '') {
                $.ajax({
                    url: 'fetch_state',
                    method: "POST",
                    data: {
                        st: statusst
                    },
                    success: function(data) {
                        $('.dmsub').html(data);
                    }
                })
            }
        });
    });
</script> -->





<!-- END: Content-->