<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Upload Main Search</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Upload Main Search
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
                                <div class="col-9 col-sm-9">
                                    <h4 class="card-title">Upload Main Search</h4>
                                </div>
                                <div class="col-1 col-sm-1 text-center">
                                    <?php if ($upload_main_search == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($upload_main_search as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนเอกสาร </h3>
                                </div>
                                <div class="col-2 col-sm-2 text-right" style="max-width: 11.66667%;">
                                    <button type="button" data-toggle="modal" data-target="#modalUpload" class="btn btn-primary mr-1 mb-1">+ Upload</button>
                                </div>

                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Status Sell</th>
                                                    <th>Document</th>
                                                    <th>CM</th>
                                                    <th>Search Item</th>
                                                    <th>Select Item</th>
                                                    <th>file</th>
                                                    <th>Code</th>
                                                    <th>Topic</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php $e = 1; ?>
                                                <?php foreach ($upload_main_search as $key => $value) : ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>

                                                        <td>


                                                            <?php $show_dm_c = $this->db->get_where('tbl_bookmark', ['id_document' => $value['id_doc']])->row_array(); ?>
                                                            <?php $show_dm_c2 = $this->db->get_where('tbl_upload_order', ['order_id' => $show_dm_c['id_orderBuy'], 'status_delivery' => '1'])->row_array(); ?>
                                                            <?php $prosum = date('Y-m-d', strtotime('+30 day' . '+' . $value['update_at'])); ?>
                                                            <?php $data = date('Y-m-d') ?>

                                                            <?php if ($show_dm_c2 == true && $data <= $prosum) : ?>
                                                                <a href=""><button type="button" class="btn btn-danger mr-1 mb-1"><i class="feather icon-download-cloud"></i> ห้ามจำหน่าย</button></a>
                                                            <?php else : ?>
                                                                <a href=""><button type="button" class="btn btn-info mr-1 mb-1"><i class="feather icon-download-cloud"></i>ยังไม่ได้จำหน่าย</button></a>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><?php echo $value['id_doc'];; ?></td>
                                                        <td><?php echo $value['userId'];; ?></td>
                                                        <td><?php echo $value['search_item']; ?></td>
                                                        <td><?php echo $value['select_item']; ?></td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModal<?php echo $value['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModal<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $store = $this->db->get_where('tbl_upload_store', ['store_id' => $value['upload_store_id'], 'section' =>  $value['section']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($store as $keys => $store) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $e++; ?></td>
                                                                                            <td><?php echo $store['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $store['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $store['create_at'] ?></td>
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
                                                        <td><?php echo $value['code']; ?></td>
                                                        <td><?php echo $value['topic']; ?></td>
                                                        <td><?php echo $value['create_at']; ?></td>
                                                    </tr>

                                                <?php endforeach; ?>

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

<!-- upload -->
<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="add_to_upload_main_search" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="data-items pb-3">
                        <div class="data-fields px-2 mt-3">
                            <div class="row">
                                <div class="col-sm-12 data-field-col">

                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">CP/NCP</label>
                                            <select name="select_item_id" class="form-control selectpicker" id="select-testing" data-live-search="true">
                                                <option value="complete">Complete</option>
                                                <option value="notcomplete">Not Complete</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">Select Item</label>
                                            <?php $select_itemList = $this->db->get('tbl_select_item')->result_array(); ?>
                                            <select name="select_item_id" class="form-control selectpicker" id="select-testing" data-live-search="true">
                                                <?php foreach ($select_itemList as $key => $selectItem) { ?>
                                                    <option value="<?php echo $selectItem['id']; ?>"><?php echo $selectItem['name_item']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">Search Item</label>
                                            <input type="text" class="form-control" name="search_item" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">Code</label>
                                            <input type="text" class="form-control" name="code" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">Topic</label>
                                            <textarea class="form-control" name="topic" id="" cols="30" rows="10" required></textarea>

                                        </div>
                                    </div>

                                    <?php
                                    $this->db->order_by('id', 'DESC');
                                    $Dm = $this->db->get('tbl_upload_main_search')->row_array();
                                    ?>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="data-name">Id Document</label>
                                            <input type="text" class="form-control" value="DM<?php echo $Dm['id'] + 1 ?>" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
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