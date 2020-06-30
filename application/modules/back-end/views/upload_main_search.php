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
                                <div class="col-lg-9 col-sm-12">
                                    <h4 class="card-title">Upload Main Search</h4>
                                </div>
                                <div class="col-lg-1 col-sm-12 text-center">
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
                                <div class="col-lg-2 col-sm-12 text-right" style="max-width: 11.66667%;">
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
                                                    <th style="width: 10%;">Status Sell</th>
                                                    <th>Document</th>
                                                    <th>Item</th>
                                                    <th>file</th>
                                                    <th>Code</th>
                                                    <th>Topic</th>
                                                    <th>Create Date</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($upload_main_search as $key => $value) : ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>

                                                        <td>
                                                            <?php $prosum = date('Y-m-d', strtotime('+60 day' . '+' . $value['update_atMain'])); ?>
                                                            <?php $data = date('Y-m-d') ?>

                                                            <?php if ($value['status_delivery'] == '1' && $data <= $prosum) : ?>
                                                                <button type="button" class="btn btn-danger mr-1 mb-1"><i class="feather icon-download-cloud"></i> Sold</button>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-info mr-1 mb-1"><i class="feather icon-download-cloud"></i> Not Sold</button>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><?php echo $value['id_doc']; ?></td>
                                                       
                                                        <td><?php echo $value['name_item']; ?></td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModal<?php echo $value['id_doc']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModal<?php echo $value['id_doc']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
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
                                                                                    <?php $store = $this->db->get_where('tbl_upload_main_search_sub', ['dm_main' => $value['idmain']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>DM</th>
                                                                                        <th>CM</th>
                                                                                        <th>Status upload</th>
                                                                                        <th>File name</th>
                                                                                        <th>Icon file</th>
                                                                                        <th>Drop</th>
                                                                                        <th>Approved</th>
                                                                                        <th>Not Approved</th>
                                                                                        <th>Removed</th>
                                                                                        <th>TM</th>
                                                                                        <th>create</th> 
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                 
                                                                                    <?php foreach ($store as $keys => $store) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $store['dm_sub']; ?></td>
                                                                                            <td><?php echo $value['userMain']; ?></td>
                                                                                            <td>
                                                                                                <?php if ($value['status_book'] == '1' && $value['status_cp'] == 'complete' && $value['status_admin'] == '0') : ?>
                                                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                                                <?php elseif ($value['status_book'] == '1' && $value['status_cp'] == 'notcomplete' && $value['status_admin'] == '0') : ?>
                                                                                                    <span class="badge badge-pill badge-primary">Not complete</span>
                                                                                                <?php elseif ($value['status_book'] == '1' && $value['status_cp'] == 'rewrite') : ?>
                                                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                                                <?php elseif ($value['status_book'] == '2'  && $value['status_admin'] == '0') : ?>
                                                                                                    <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                                                                <?php elseif ($value['status_admin'] == '1') : ?>
                                                                                                    <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                                                                <?php else : ?>
                                                                                                    -
                                                                                                <?php endif; ?>
                                                                                            </td>
                                                                                            <td><?php echo $store['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $store['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td>
                                                                                                <a href="" data-toggle="modal" data-target="#dropedit<?php echo $value['idmain']; ?>" class="btn btn-icon btn-success"><i class="feather icon-upload"></i></a>
                                                                                                <div class="modal fade" id="dropedit<?php echo $value['idmain']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                    <div class="modal-dialog" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="exampleModalLabel">Change Drop Document </h5>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>

                                                                                                            <div class="modal-body">
                                                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                                                    <label for="" style="font-size: 16px;">File Document </label>
                                                                                                                    <form action="fileUpload_main" class="dropzone dropzone-area" id="maindropzoneEx<?php echo $value['id_doc']; ?>">
                                                                                                                        <input type="hidden" id="DM2<?php echo $value['id_doc']; ?>" class="form-control " name="DM" value="<?php echo $value['id_doc'] ?>">
                                                                                                                        <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <br>
                                                                                                            </div>

                                                                                                            <div class="modal-footer">
                                                                                                                <div class="add-data-footer d-flex justify-content-around">
                                                                                                                    <button type="submit" id="uploadschange<?php echo $value['id_doc']; ?>" class="btn btn-primary">Submit</button>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <script>
                                                                                                    Dropzone.autoDiscover = false;
                                                                                                    var myDropzone<?php echo $value['id_doc']; ?> = new Dropzone("#maindropzoneEx<?php echo $value['id_doc']; ?>", {
                                                                                                        autoProcessQueue: false,
                                                                                                        maxFiles: 5,
                                                                                                        addRemoveLinks: true,
                                                                                                        parallelUploads: 5, // Number of files process at a time (default 2)
                                                                                                    });

                                                                                                    document.getElementById("uploadschange<?php echo $value['id_doc']; ?>").addEventListener("click", function() {
                                                                                                        // myDropzone.processQueue();
                                                                                                        if (myDropzone<?php echo $value['id_doc']; ?>.files == 0) {

                                                                                                            swal("Warning!", "Can not be document Empty", "warning", {
                                                                                                                button: true,
                                                                                                            });
                                                                                                        }
                                                                                                        myDropzone<?php echo $value['id_doc']; ?>.processQueue();
                                                                                                        myDropzone<?php echo $value['id_doc']; ?>.on("queuecomplete", function(file, res) {
                                                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                                                button: false,
                                                                                                            });
                                                                                                            setTimeout(function() {
                                                                                                                location.href = "back_upload_main_search"
                                                                                                            }, 1000);
                                                                                                        });
                                                                                                    });
                                                                                                </script>
                                                                                            </td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
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
                                                        <td><?php echo $value['create_atMain']; ?></td>
                                                        <td>
                                                            <a href="" data-toggle="modal" data-target="#dropW<?php echo $value['id_doc']; ?>" class="btn btn-icon btn-success"><i class="feather icon-upload"></i></a>
                                                            <div class="modal fade" id="dropW<?php echo $value['id_doc']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Drop Document (<?php echo $value['id_doc']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_main" class="dropzone dropzone-area" id="maindropzoneEx<?php echo $value['id_doc']; ?>">
                                                                                    <input type="hidden" id="DM2<?php echo $value['id_doc']; ?>" class="form-control " name="DM" value="<?php echo $value['id_doc'] ?>">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <br>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="uploadsfileEx<?php echo $value['id_doc']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $value['id_doc']; ?> = new Dropzone("#maindropzoneEx<?php echo $value['id_doc']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfileEx<?php echo $value['id_doc']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    if (myDropzone<?php echo $value['id_doc']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    myDropzone<?php echo $value['id_doc']; ?>.processQueue();
                                                                    myDropzone<?php echo $value['id_doc']; ?>.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data successfull", "success", {
                                                                            button: false,
                                                                        });
                                                                        setTimeout(function() {
                                                                            location.href = "back_upload_main_search"
                                                                        }, 1000);
                                                                    });
                                                                });
                                                            </script>

                                                        </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Upload To Main Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="data-items pb-3">
                    <div class="data-fields px-2 mt-3">
                        <div class="row">
                            <div class="col-sm-12 data-field-col">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="" style="font-size: 16px;">File Document </label>
                                        <form action="fileUpload_search_main" class="dropzone dropzone-area" id="maindropzone">
                                            <div class="dz-message" style="top: 24%;">Upload Document</div>
                                        </form>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label for="data-name">CP/NCP</label>
                                        <select name="complete" class="form-control" id="complete">
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

                                <!-- <div class="form-group">
                                    <div class="controls">
                                        <label for="data-name">Search Item</label>
                                        <input type="text" class="form-control" name="search_item" id="search_item" value="">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="data-name">Code</label>
                                        <input type="text" class="form-control" name="code" value="" id="code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="data-name">Topic</label>
                                        <textarea class="form-control" name="topic" cols="30" rows="10" id="topic"></textarea>

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
                        <button type="submit" id="uploadsfile" class="btn btn-primary">submit</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<script>
    Dropzone.autoDiscover = false;
    var myDropzoneS = new Dropzone("#maindropzone", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    document.getElementById("uploadsfile").addEventListener("click", function() {
        // myDropzone.processQueue();

        var v = document.getElementById("complete").value;
        var x = document.getElementById("select-testing").value;
        // var y = document.getElementById("search_item").value;
        var code = document.getElementById("code").value;
        var topic = document.getElementById("topic").value;

        if (myDropzoneS.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {

            if (v == '') {
                swal("Cancelled", "Please fill in information Complete :)", "error");
            }
            if (x == '') {
                swal("Cancelled", "Please fill in information Select Item :)", "error");
                return false;
            }
            if (y == '') {
                swal("Cancelled", "Please fill in information Search Item :)", "error");
                return false;
            }
            if (code == '') {
                swal("Cancelled", "Please fill in information Code :)", "error");
                return false;
            }
            if (topic == '') {
                swal("Cancelled", "Please fill in information Topic :)", "error");
                return false;
            }


            if (x != '' && y != '' && v != '' && code != '' && topic != '') {

                $.ajax({
                    type: 'POST',
                    url: 'order_auto_sell',
                    data: {
                        status: 1
                    },
                    success: function(success) {
                        myDropzoneS.processQueue();
                        myDropzoneS.on("queuecomplete", function(file, res) {
                            $.ajax({
                                type: 'POST',
                                url: 'upload_main_searc_ouject',
                                data: {
                                    com: v,
                                    select: x,
                                    code: code,
                                    topic: topic,
                                },
                                success: function(success) {
                                    swal("Good job!", "Upload for data successfull", "success", {
                                        button: true,
                                    }).then(function(isConfirm) {
                                        if (isConfirm == true) {
                                            setTimeout(function() {
                                                location.href = "back_upload_main_search"
                                            }, 1000);
                                        } else {
                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                        }
                                    });
                                }
                            });
                        });
                    },

                });

            } else {
                swal("Warning!", "Can not be  Not Empty", "warning", {
                    button: true,
                });
            }

        }

    });
</script>