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
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Document</th>
                                                    <th>Organization</th>
                                                    <th>Item</th>
                                                    <th>file</th>
                                                    <th>Code</th>
                                                    <th style="width: 800px;">Topic</th>
                                                    <th>Create Date</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($upload_main_search as $key => $value) : ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>



                                                        <td><?php echo $value['id_doc']; ?></td>
                                                        <td><?php echo $value['organization_upload']; ?></td>
                                                        <td><?php echo $value['name_item']; ?></td>
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModal<?php echo $value['id_doc']; ?>"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></span>
                                                            <div class="modal fade" id="exampleModal<?php echo $value['id_doc']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Sub DM Folder</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table table-hover zero-configuration">
                                                                                <thead>
                                                                                    <?php
                                                                                    $this->db->group_by('dm_sub');
                                                                                    $store = $this->db->get_where('tbl_upload_main_search_sub', ['dm_main' => $value['idmain']])->result_array();

                                                                                    ?>

                                                                                    <tr>
                                                                                        <th>Status Sell</th>
                                                                                        <th>DM</th>
                                                                                        <th>CM</th>
                                                                                        <th>Status upload</th>
                                                                                        <th>File Quality</th> 
                                                                                        <th>Icon Folder</th>
                                                                                        <!-- <th>Drop</th> -->
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
                                                                                            <td>
                                                                                                <?php $prosum = date('Y-m-d', strtotime('+60 day' . '+' . $store['update_at'])); ?>
                                                                                                <?php $data = date('Y-m-d') ?>

                                                                                                <?php if ($value['status_delivery'] == '1' && $data <= $prosum) : ?>
                                                                                                    <button type="button" class="btn btn-danger mr-1 mb-1"><i class="feather icon-download-cloud"></i> Sold</button>
                                                                                                <?php else : ?>
                                                                                                    <button type="button" class="btn btn-info mr-1 mb-1"><i class="feather icon-download-cloud"></i> Not Sold</button>
                                                                                                <?php endif; ?>
                                                                                            </td>
                                                                                            <td><?php echo $store['dm_sub']; ?></td>
                                                                                            <td><?php echo $value['userMain']; ?></td>
                                                                                            <td>
                                                                                                <?php if ($store['comandnocom'] == '1') : ?>
                                                                                                    <span class="badge badge-pill badge-success">Complete</span>
                                                                                                <?php elseif ($store['comandnocom'] == '2') : ?>
                                                                                                    <span class="badge badge-pill badge-warning">Not complete</span>
                                                                                                <?php elseif ($store['comandnocom'] == '3') : ?>
                                                                                                    <span class="badge badge-pill badge-success">Original</span>
                                                                                                <?php elseif ($store['comandnocom'] == '4') : ?>
                                                                                                    <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                                                <?php else : ?>
                                                                                                    -
                                                                                                <?php endif; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php if ($store['cp']=='complete'):?>                                                                                               
                                                                                                    Complete
                                                                                                <?php elseif($store['cp']=='notcomplete'):?>
                                                                                                   Not Complete
                                                                                                <?php else:?>
                                                                                                    -
                                                                                                <?php endif;?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php $cutpoin = explode('.', $store['dm_sub']); ?>
                                                                                                <?php $dm_sub = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $store['dm_sub']])->row_array();?>
                                                                                                <?php if ($dm_sub['status']=='0'):?>
                                                                                                    <i class="feather icon-folder" style="font-size: 25px; cursor: pointer; color:red" data-toggle="modal" data-target="#exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>"></i>
                                                                                                <?php else:?>
                                                                                                    <i class="feather icon-folder" style="font-size: 25px; cursor: pointer; color:green" data-toggle="modal" data-target="#exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>"></i>
                                                                                                <?php endif;?>
                                                                                                <div class="modal fade" id="exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="exampleModalLabel">Sub DM File</h5>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <table class="table table-hover zero-configuration">
                                                                                                                    <thead>
                                                                                                                        <?php

                                                                                                                        $store23 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $store['dm_sub']])->result_array();

                                                                                                                        ?>

                                                                                                                        <tr>
                                                                                                                          
                                                                                                                            <th>DM</th>
                                                                                                                            <th>CM</th>
                                                                                                                            <th>Status upload</th>
                                                                                                                            <th>File name</th>
                                                                                                                            <th>Icon Folder</th>
                                                                                                                            <th>Drop</th>
                                                                                                                           
                                                                                                                            <th>Removed</th>
                                                                                                                            <th>TM</th>
                                                                                                                            <th>create</th>
                                                                                                                        </tr>
                                                                                                                    </thead>
                                                                                                                    <tbody>

                                                                                                                        <?php foreach ($store23 as $keys => $store23) { ?>
                                                                                                                            <tr>

                                                                                                                                <td><?php echo $store23['dm_sub']; ?></td>
                                                                                                                                <td><?php echo $value['userMain']; ?></td>
                                                                                                                                <td>
                                                                                                                                    <?php if ($store23['comandnocom'] == '1') : ?>
                                                                                                                                        <span class="badge badge-pill badge-success">Complete</span>
                                                                                                                                    <?php elseif ($store23['comandnocom'] == '2') : ?>
                                                                                                                                        <span class="badge badge-pill badge-warning">Not complete</span>
                                                                                                                                    <?php elseif ($store23['comandnocom'] == '3') : ?>
                                                                                                                                        <span class="badge badge-pill badge-success">Original</span>
                                                                                                                                    <?php elseif ($store23['comandnocom'] == '4') : ?>
                                                                                                                                        <span class="badge badge-pill badge-primary">Rewrite</span>
                                                                                                                                    <?php else : ?>
                                                                                                                                        -
                                                                                                                                    <?php endif; ?>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                    <?php echo $store23['file_name'] ?> <a href="" data-toggle="modal" data-target="#dms<?php echo $store23['id']; ?>"><i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                                                                                                    <div class="modal fade" id="dms<?php echo $store23['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                                                        <form action="rename_uploadmain" method="POST">
                                                                                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                                                                                                <div class="modal-content">
                                                                                                                                                    <div class="modal-header">
                                                                                                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Rename (<?php echo $store23['dm_sub']; ?>)</h5>
                                                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="modal-body row">
                                                                                                                                                        <?php $exp = explode(".", $store23['file_name']); ?>
                                                                                                                                                        <div class="col-xl-12 col-md-12 col-12 ">
                                                                                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                                                                                <label for="Team">Rename</label>
                                                                                                                                                                <input type="text" class="form-control" value="<?php echo $exp[0] ?>" name="resume">
                                                                                                                                                                <input type="hidden" class="form-control" value="<?php echo $store23['path'] ?>" name="path">
                                                                                                                                                                <input type="hidden" class="form-control" value="<?php echo $exp[1] ?>" name="doc">
                                                                                                                                                                <input type="hidden" class="form-control" value="<?php echo $store23['id']; ?>" name="id">
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
                                                                                                                                <td><a href="<?php echo $store23['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                                <td>
                                                                                                                                    <?php if ($store23['status'] == '0') : ?>
                                                                                                                                        <a href="" data-toggle="modal" data-target="#dropedit<?php echo $store23['id']; ?>" class="btn btn-icon btn-danger"><i class="feather icon-upload"></i></a>
                                                                                                                                    <?php else : ?>
                                                                                                                                        <a href="" data-toggle="modal" data-target="#dropedit<?php echo $store23['id']; ?>" class="btn btn-icon btn-success"><i class="feather icon-upload"></i></a>
                                                                                                                                    <?php endif; ?>
                                                                                                                                    <div class="modal fade" id="dropedit<?php echo $store23['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                                                                        <form action="fileUpload_main_sub" class="dropzone dropzone-area" id="maindropzoneEx<?php echo $value['id_doc']; ?>">
                                                                                                                                                            <input type="hidden" id="DM2<?php echo $value['id_doc']; ?>" class="form-control " name="DM" value="<?php echo $value['idmain'] ?>">
                                                                                                                                                            <input type="hidden" class="form-control " name="id_upload" value="<?php echo $store23['id'] ?>">

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
                                                                                                                                <td><?php echo $store23['create_at'] ?></td>
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
                                                            <a href="" data-toggle="modal" data-target="#dropW<?php echo $value['idmain']; ?>" class="btn btn-icon btn-success"><i class="feather icon-upload"></i></a>
                                                            <a onclick="confirmalertunlock_del_Dm('<?php echo $value['idmain']; ?>')"  class="btn btn-icon btn-danger"><i class="feather icon-x"></i></a>

                                                            <div class="modal fade" id="dropW<?php echo $value['idmain']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Drop Document (<?php echo $value['idmain']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <label for="" style="font-size: 16px;">File Document </label>
                                                                                <form action="fileUpload_main" class="dropzone dropzone-area" id="maindropzoneEx<?php echo $value['idmain']; ?>">
                                                                                    <input type="hidden" id="DM2<?php echo $value['idmain']; ?>" class="form-control " name="DM" value="<?php echo $value['idmain'] ?>">
                                                                                    <input type="hidden" class="form-control dr<?php echo $value['idmain']; ?>" name="status_cpS" value="">
                                                                                    <input type="hidden" class="form-control dr1<?php echo $value['idmain']; ?>" name="status_cpncp" value="">
                                                                                    <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                </form>
                                                                            </div>
                                                                            <br>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Status</label>
                                                                                    <select name="status_cp" id="stu<?php echo $value['idmain']; ?>" class="form-control status_cp<?php echo $value['idmain']; ?>" required>
                                                                                        <option value="" selected disabled>select</option>
                                                                                        <option value="3">Original</option>
                                                                                        <option value="4">Rewrite</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="form-group">
                                                                                    <label for="helpInputTop">Status Cp/Ncp</label>
                                                                                    <select name="status_cpncp" id="stucp<?php echo $value['idmain']; ?>" class="form-control status_cpncp<?php echo $value['idmain']; ?>" required>
                                                                                        <option value="" selected disabled>select</option>
                                                                                        <option value="complete">Complete</option>
                                                                                        <option value="notcomplete">NotComplete</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="uploadsfileEx<?php echo $value['idmain']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>
                                                                $(".status_cp<?php echo $value['idmain']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $(".dr<?php echo $value['idmain']; ?>").val(value);
                                                                }).change();
                                                            </script>
                                                            <script>
                                                                $(".status_cpncp<?php echo $value['idmain']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $(".dr1<?php echo $value['idmain']; ?>").val(value);
                                                                }).change();
                                                            </script>

                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $value['idmain']; ?> = new Dropzone("#maindropzoneEx<?php echo $value['idmain']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfileEx<?php echo $value['idmain']; ?>").addEventListener("click", function() {

                                                                    var stu = document.getElementById("stu<?php echo $value['idmain']; ?>").value;
                                                                    var stucp = document.getElementById("stucp<?php echo $value['idmain']; ?>").value;
                                                                    var DMS = document.getElementById("DM2<?php echo $value['idmain']; ?>").value;

                                                                    console.log(stu);
                                                                    console.log(DMS);

                                                                    if (myDropzone<?php echo $value['idmain']; ?>.files == 0) {

                                                                        swal("Warning!", "Can not be document Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }
                                                                    if (stu == '') {
                                                                        swal("Warning!", "Can not be Status Empty", "warning", {
                                                                            button: true,
                                                                        });
                                                                    } else {

                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: 'uploadmain_auto',
                                                                            data: {
                                                                                status: 1,
                                                                                DMS: DMS,
                                                                                stu: stu,
                                                                                stucp: stucp
                                                                            },
                                                                            success: function(success) {

                                                                                myDropzone<?php echo $value['idmain']; ?>.processQueue();
                                                                                myDropzone<?php echo $value['idmain']; ?>.on("queuecomplete", function(file, res) {
                                                                                    swal("Good job!", "Upload for data successfull", "success", {
                                                                                        button: false,
                                                                                    });
                                                                                    setTimeout(function() {
                                                                                        location.href = "back_upload_main_search"
                                                                                    }, 1000);
                                                                                });

                                                                            },
                                                                        });
                                                                    }


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
                                        <label for="Organization">Organization</label>
                                        <select name="organization" class="form-control" id="organization">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
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

        var oz = document.getElementById("organization").value;
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

            if (oz == '') {
                swal("Cancelled", "Please fill in information Complete :)", "error");
            }
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


            if (x != '' && y != '' && v != '' && code != '' && topic != '' && oz != '') {

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
                                    organization: oz,
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