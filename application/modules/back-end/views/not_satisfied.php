<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Not Satisfied</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Not Satisfied
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
                                    <h4 class="card-title">Not Satisfied</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($order_not == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($order_not as $key => $datata) {
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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Country</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>T3 File</th>
                                                    <th>Create Date</th>
                                                    <th>Date required</th>
                                                    <th>Price</th>
                                                    <th>Info</th>
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th>Status T3</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;

                                                foreach ($order_not as $key => $store) {

                                                ?>

                                                    <tr>
                                                        <td><?php echo $store['orderNOT'] ?></td>
                                                        <td><?php echo $store['userId']; ?></td>
                                                        <td>
                                                            <?php echo $store['countryName'] == '' ? '-' : $store['countryName'] ; ?>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $store['orderNOT']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order_id</th>
                                                                                        <th>File_name</th>
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
                                                        </td>
                                                        <td>
                                                            <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $store['orderNOT']])->result_array(); ?>

                                                            <?php if ($order == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalb<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalb<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                            <th>Order_id</th>
                                                                                            <th>File_name</th>
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

                                                        <td>
                                                            <?php $orderT = $this->db->get_where('tbl_upload_order_team', ['order_id' => $store['orderT3']])->result_array(); ?>

                                                            <?php if ($orderT == true) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalT3<?php echo $store['orderNOT']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalT3<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>Create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderT as $keys => $orderT) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $orderT['order_id'] ?></td>
                                                                                                <td><?php echo $orderT['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderT['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderT['create_at'] ?></td>


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

                                                        <td><?php echo $store['createNOT']; ?></td>
                                                        <td>
                                                            <?php if ($store['status_delivery'] == '1') : ?>
                                                                <?php echo $store['dateNOT']; ?>
                                                            <?php else : ?>
                                                                <input type="date" class="form-control" name="date_required" id="datenow" data-datenow="<?php echo $store['orderNOT']; ?>" value="<?php echo $store['dateNOT']; ?>" min="<?php echo date('Y-m-d'); ?>">
                                                            <?php endif; ?>
                                                        </td>

                                                        <?php if ($store['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $store['price_file']; ?></td>
                                                        <?php endif; ?>
                                                        <td>
                                                            <?php if ($store['teamId'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                <?php echo $store['teamId']; ?> |
                                                            <?php endif; ?>

                                                            <?php if ($store['wage'] == '') : ?>
                                                                - |
                                                            <?php else : ?>
                                                                $<?php echo $store['wage']; ?> |
                                                            <?php endif; ?>

                                                            <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $store['position']])->result_array(); ?>
                                                            <?php foreach ($position_name as $position_name) { ?>
                                                                <?php echo $position_name['name_item'] ?>
                                                            <?php } ?>

                                                            <?php if ($store['teamId'] == '' && $store['wage'] == '' && $store['position'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="" data-toggle="modal" data-target="#exampleModalwage<?php echo $store['orderNOT']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <?php endif; ?>


                                                            <div class="modal fade" id="exampleModalwage<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="edit_info_Not_Satisfied" method="POST">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                        <input type="hidden" name="order_id" value="<?php echo $store['orderNOT']; ?>">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Info (<?php echo $store['orderNOT']; ?>)</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row" style="text-align: center;margin: 45px 0;">
                                                
                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="Team">Team ID</label>
                                                                                        <select class="select2 form-control" name="teamid" required>
                                                                                            <option disabled selected> -- Select Team -- </option>
                                                                                            <option value="" > All Team </option>
                                                                                            <?php foreach ($ts as $tsM) { ?>
                                                                                                <option value="<?php echo $tsM['IdTeam']; ?>" <?php echo $tsM['IdTeam'] == $store['teamId'] ? 'selected' : '' ; ?>><?php echo $tsM['IdTeam']; ?></option>
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
                                                                                                <option value="<?php echo $positionX['id'] ?>" <?php echo $positionX['id'] == $store['position'] ? 'selected' : ''; ?>><?php echo $positionX['name_item'] ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                    <div class="form-group" style="text-align: left;">
                                                                                        <label for="helpInputTop">wage</label>
                                                                                        <input type="text" class="form-control" name="wage" value="<?php echo $store['wage']; ?>" placeholder="Enter wage" required>
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
                                                            <?php if ($store['status_delivery'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Not Delivered</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-success">Delivered</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($store['status_book'] == '1' && $store['status_cp'] == 'complete' && $store['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($store['status_book'] == '1' && $store['status_cp'] == 'notcomplete'  && $store['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($store['status_book'] == '2'  && $store['status_admin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($store['status_admin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>
                                                        
                                                        <?php $team = $this->db->get_where('tbl_upload_team', ['order_id' => $store['orderNOT']])->row_array(); ?>
                                                        <td>
                                                        <?php if ($team == false) : ?>
                                                                <button data-toggle="modal" data-target="#exampleModalUpload<?php echo $store['orderNOT']; ?>" type="button" class="btn btn-icon btn-success" style="font-size: 14px;">Upload T3</button>
                                                            <?php else : ?>
                                                                <?php if ($team['teamId'] == '') : ?>
                                                                    <span class="badge badge-pill badge-Info">Waiting for team</span>
                                                                <?php elseif ($team['status'] == 0 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-warning">processing</span>
                                                                <?php elseif ($team['status'] == 1 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-success">complete</span>
                                                                <?php elseif ($team['status'] == 2 && $team['teamId'] != '') : ?>
                                                                    <span class="badge badge-pill badge-danger">feedback</span>
                                                                <?php endif ?>
                                                            <?php endif ?>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $store['orderNOT']; ?>"><i class="feather icon-delete"></i></button>
                                                            <div class="modal fade" id="exampleModallCenterc<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <form action="delete_order_notst" method="POST">
                                                                    <input type="hidden" name="order_id" value="<?php echo $store['orderNOT']; ?>">
                                                                    <div class="modal-dialog " role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Cancel (<?php echo $store['orderNOT']; ?>)</h5>
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
                                                        </td>


                                                    </tr>

                                                    <div class="modal fade" id="exampleModalUpload<?php echo $store['orderNOT']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload To Team (<?php echo $store['orderNOT']; ?>)</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="upload_team" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="order_id" value="<?php echo $store['orderNOT']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" value="<?php echo $store['dateNOT']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">position</label>
                                                                                <?php $select_postion = $this->db->get('tbl_item_position')->result_array(); ?>
                                                                                <select name="position" class="form-control" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <?php foreach ($select_postion as $keys => $select_postion) { ?>
                                                                                        <option value="<?php echo $select_postion['id']; ?>"><?php echo $select_postion['name_item']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">wage(10%)</label>

                                                                                <input type="text" class="form-control" name="wage" value="<?php echo $store['price_file'] * 10 / 100; ?>" placeholder="Enter wage">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" class="ckeck<?php echo $store['order_id']; ?>" data-order="<?php echo $store['order_id']; ?>">
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
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1" id="teambox<?php echo $store['order_id']; ?>" style="display: none">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <select class="select2 form-control" name="team" id="team<?php echo $store['order_id']; ?>">
                                                                                    <option disabled selected> -- Select Team -- </option>
                                                                                    <?php foreach ($ts as $tsM) { ?>
                                                                                        <option value="<?php echo $tsM['IdTeam']; ?>"><?php echo $tsM['IdTeam']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
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

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');

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
                url: 'edit_date_required_All',
                success: function(data) {
                    toastr.info('Success', 'Save to Date Required.');
                }
            });
            return false;
        });
    });
</script>