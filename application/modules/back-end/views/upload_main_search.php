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
                                                            <a href="" data-toggle="modal" data-target="#exampleModal<?php echo $value['id_doc']; ?>"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
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
                                                                            <table class="table table-hover zero-configuration" id="herere<?php echo $value['id_doc']; ?>">
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
                                                                                        <th>Tool</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php

                                                                                    foreach ($store as $keys => $store) {
                                                                                        $this->db->where('status', '0');
                                                                                        $this->db->where('dm_sub', $store['dm_sub']);
                                                                                        $iconCheck_text = 0;
                                                                                        $iconCheck = $this->db->get('tbl_upload_main_search_sub')->result_array();
                                                                                        foreach ($iconCheck as $iconCheck_num) {
                                                                                            $iconCheck_text += 1;
                                                                                        }
                                                                                    ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <?php $prosum = date('Y-m-d', strtotime('+60 day' . '+' . $value['upat'])); ?>
                                                                                                <?php $data = date('Y-m-d') ?>
                                                                                                <?php if ($value['status_delivery'] == '1' && $data <= $prosum) : ?>
                                                                                                    <button type="button" class="btn btn-danger"><i class="feather icon-download-cloud"></i> Sold</button>
                                                                                                <?php else : ?>
                                                                                                    <button type="button" class="btn btn-info"><i class="feather icon-download-cloud"></i> Not Sold</button>
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
                                                                                                <?php if ($store['cp'] == 'complete') : ?>
                                                                                                    Complete
                                                                                                <?php elseif ($store['cp'] == 'notcomplete') : ?>
                                                                                                    Not Complete
                                                                                                <?php else : ?>
                                                                                                    -
                                                                                                <?php endif; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php $cutpoin = explode('.', $store['dm_sub']); ?>

                                                                                                <?php if ($iconCheck_text > 0) : ?>
                                                                                                    <i class="feather icon-folder" style="font-size: 25px; cursor: pointer; color:red" data-toggle="modal" data-target="#exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>"></i>
                                                                                                <?php else : ?>
                                                                                                    <i class="feather icon-folder" style="font-size: 25px; cursor: pointer; color:green" data-toggle="modal" data-target="#exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>"></i>
                                                                                                <?php endif; ?>
                                                                                                <div class="modal fade" id="exampleModaleee<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="exampleModalLabel">Sub DM File <?php echo $store['dm_sub'] ?></h5>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <table class="table table-hover zero-configuration" id="here<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>">
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
                                                                                                                            <th>Create</th>
                                                                                                                            <th>Tool</th>
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
                                                                                                                                        <!-- <form action="rename_uploadmains" method="POST"> -->
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
                                                                                                                                                            <input type="text" class="form-control" value="<?php echo $exp[0] ?>" id="Re_file_name<?php echo $store23['id']; ?>" name="resume">
                                                                                                                                                            <input type="hidden" class="form-control" value="<?php echo $store23['path'] ?>" id="pathmain<?php echo $store23['id']; ?>" data-pathgt="<?php echo $store23['path']; ?>" name="path">
                                                                                                                                                            <input type="hidden" class="form-control" value="<?php echo $exp[1] ?>" id="Re_last_name<?php echo $store23['id']; ?>" name="doc">
                                                                                                                                                            <!-- <input type="hidden" class="form-control" value="<?php echo $store23['id']; ?>" name="id"> -->
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>
                                                                                                                                                <div class="modal-footer">
                                                                                                                                                    <button type="button" class="btn btn-primary ey" style="MARGIN: 15px;" data-fmain="<?php echo $store23['id']; ?>" data-load="<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>">Submit</button>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <!-- </form> -->
                                                                                                                                    </div>
                                                                                                                                </td>

                                                                                                                                <td><a href="<?php echo $store23['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                                                <td>
                                                                                                                                    <?php if ($store23['status'] == '0') : ?>
                                                                                                                                        <a href="" data-toggle="modal" data-iddoc="<?php echo $store23['id']; ?>" data-target="#dropedit<?php echo $store23['id']; ?>" class="btn btn-icon btn-danger click"><i class="feather icon-upload"></i></a>
                                                                                                                                    <?php else : ?>
                                                                                                                                        <a href="" data-toggle="modal" data-iddoc="<?php echo $store23['id']; ?>" data-target="#dropedit<?php echo $store23['id']; ?>" class="btn btn-icon btn-success click"><i class="feather icon-upload"></i></a>
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
                                                                                                                                                        <form action="fileUpload_main_sub" class="dropzone dropzone-area" id="maindropzoneEx<?php echo $store23['id']; ?>">
                                                                                                                                                            <input type="hidden" id="DM2<?php echo $value['id_doc']; ?>" class="form-control " name="DM" value="<?php echo $value['idmain'] ?>">
                                                                                                                                                            <input type="hidden" class="form-control " name="id_upload" value="<?php echo $store23['id'] ?>">

                                                                                                                                                            <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                                                                                                        </form>
                                                                                                                                                    </div>
                                                                                                                                                    <br>
                                                                                                                                                </div>

                                                                                                                                                <div class="modal-footer">
                                                                                                                                                    <div class="add-data-footer d-flex justify-content-around">
                                                                                                                                                        <button type="button" id="uploadschange<?php echo $store23['id']; ?>" data-idvalue="<?php echo $value['id_doc']; ?>" class="btn btn-primary exp" data-dzid="<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>" data-id="<?php echo $store23['id']; ?>">Submit</button>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                </td>
                                                                                                                                <td><?php echo $store23['create_at'] ?></td>
                                                                                                                                <td> <a onclick="confirmalertunlock_del_Dm_sub('<?php echo $store23['id']; ?>','<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>')"   class="btn btn-icon btn-danger"><i class="feather icon-x" style="color: #fff;"></i></a></td>
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
                                                                                                <?php
                                                                                                $k = 0;
                                                                                                $this->db->where('tbl_upload_order.status_approved', 1);
                                                                                                $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy', 'left');
                                                                                                $this->db->group_by('tbl_upload_order.order_id');
                                                                                                $bookmarklop = $this->db->get_where('tbl_bookmark', ['id_document' => $store['dm_sub']])->result_array();
                                                                                                ?>
                                                                                                <?php foreach ($bookmarklop as $key => $bookmarklop) : ?>
                                                                                                    <?php $k += 1; ?>
                                                                                                <?php endforeach; ?>
                                                                                                <?php echo $k; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php
                                                                                                $kp = 0;
                                                                                                $this->db->where('tbl_upload_order.status_approved', 2);
                                                                                                $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy', 'left');
                                                                                                $this->db->group_by('tbl_upload_order.order_id');
                                                                                                $bookmarkeep = $this->db->get_where('tbl_bookmark', ['id_document' => $store['dm_sub']])->result_array();
                                                                                                ?>
                                                                                                <?php foreach ($bookmarkeep as $key => $bookmarkeep) : ?>
                                                                                                    <?php $kp += 1; ?>
                                                                                                <?php endforeach; ?>
                                                                                                <?php echo $kp; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <?php
                                                                                                $ki = 0;
                                                                                                $this->db->where('tbl_upload_order.is_check', 1);
                                                                                                $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy', 'left');
                                                                                                $this->db->group_by('tbl_upload_order.order_id');
                                                                                                $bookmarkaop = $this->db->get_where('tbl_bookmark', ['id_document' => $store['dm_sub']])->result_array();
                                                                                                ?>
                                                                                                <?php foreach ($bookmarkaop as $key => $bookmarkaop) : ?>
                                                                                                    <?php $ki += 1; ?>
                                                                                                <?php endforeach; ?>
                                                                                                <?php echo $ki; ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="" data-toggle="modal" data-target="#teamdetail<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>">
                                                                                                    <i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i>
                                                                                                </a>
                                                                                                <div class="modal fade" id="teamdetail<?php echo $cutpoin[0] . $cutpoin[1] . $cutpoin[2]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="exampleModalLabel">Team detail</h5>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <table class="table table-hover zero-configuration">
                                                                                                                    <thead>
                                                                                                                        <?php
                                                                                                                        $this->db->select('*,tbl_upload_team.create_at cta , tbl_upload_team.teamid tmi');
                                                                                                                        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_bookmark.id_orderBuy');
                                                                                                                        $this->db->where('tbl_bookmark.id_document',  $store['dm_sub']);
                                                                                                                        $this->db->group_by('tbl_upload_team.order_id');
                                                                                                                        $teambooks = $this->db->get('tbl_bookmark')->result_array();
                                                                                                                        ?>
                                                                                                                        <tr>
                                                                                                                            <th>TM</th>
                                                                                                                            <th>Create</th>
                                                                                                                        </tr>
                                                                                                                    </thead>
                                                                                                                    <tbody>

                                                                                                                        <?php foreach ($teambooks as $keys => $teambooks) { ?>
                                                                                                                            <tr>
                                                                                                                                <td><?php echo $teambooks['tmi']; ?></td>
                                                                                                                                <td><?php echo $teambooks['cta'] ?></td>
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
                                                                                            <td><?php echo $store['create_at'] ?></td>
                                                                                            <td><a onclick="confirmalertunlock_del_Dm_folder('<?php echo $store['dm_sub']; ?>','<?php echo $value['id_doc']; ?>')"   class="btn btn-icon btn-danger"><i class="feather icon-x" style="color: #fff;"></i></a></td>
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
                                                            <a onclick="confirmalertunlock_del_Dm('<?php echo $value['idmain']; ?>')" class="btn btn-icon btn-danger"><i class="feather icon-x" style="color: #fff;"></i></a>

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
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload To Main Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

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
            <div class="modal-footer">
                <div class="add-data-btn mr-1">
                    <button type="submit" id="uploadsfile" class="btn btn-primary">submit</button>
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

<script>
    $('body').on('click', 'button[type="button"].ey', function() {
        var l = $(this).data('load');
        var c = $(this).data('fmain');
        var d = $('#pathmain' + c).data('pathgt');
        var name_file = $('#Re_file_name' + c).val();
        var last_file = $('#Re_last_name' + c).val();

        $.ajax({
            url: "rename_uploadmains",
            type: "POST",
            data: {
                id: c,
                name_file: name_file,
                last_file: last_file,
                path: d
            },
            success: function(success) {
                if (success) {
                    swal("Good job!", "Upload for data successfull", "success", {
                        button: true,
                    });
                    $("#here" + l).load(window.location.href + " #here" + l);
                    $('#dms' + c).modal('hide');
                }
            }
        });
    });
</script>

<script>
    $('body').on('click', 'a.click', function() {
        var c = $(this).data('iddoc');
        console.log(c);
        var myDropzonedoc = new Dropzone("#maindropzoneEx" + c, {
            autoProcessQueue: false,
            maxFiles: 5,
            addRemoveLinks: true,
            parallelUploads: 5, // Number of files process at a time (default 2)
        });

        $('body').on('click', 'button[type="button"].exp', function() {
            var a = $(this).data('dzid');
            var b = $(this).data('id');
            var idvalue = $(this).data('idvalue');
            console.log(a);

            Dropzone.autoDiscover = false;


            // myDropzone.processQueue();
            if (myDropzonedoc.files == 0) {

                swal("Warning!", "Can not be document Empty", "warning", {
                    button: true,
                });
            }
            myDropzonedoc.processQueue();
            myDropzonedoc.on("queuecomplete", function(file, res) {
                swal("Good job!", "Upload for data successfull", "success", {
                    button: false,
                });

                $("#here" + a).load(window.location.href + " #here" + a);
                $('#dropedit' + b).modal('hide');

                // $("#herere"+idvalue).load(window.location.href + " #herere"+idvalue);
                // $('#exampleModaleee' + a).modal('show');

                // setTimeout(function() {
                //     location.href = "back_upload_main_search"
                // }, 1000);
            });
        });
    });
</script>
<script>
    function confirmalertunlock_del_Dm_sub(data1555,delid) {
        var l = $(this).data('tagdle');

        swal({
            title: "Are you sure Sub DM?",
            text: "Are you sure you delete Sub DM ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
              
                $.ajax({
                    url: 'delete_dm_sub?id=' + data1555,
                    type: "GET",
                    success: function(success) {
                        if (success) {
                            swal("Good job!", "Upload for data successfull", "success", {
                                button: true,
                            });
                        }
                        $("#here" + delid).load(window.location.href + " #here" + delid);
                        $('#dropedit' + b).modal('hide');

                    }
                });
                //window.location = 'delete_dm_sub?id=' + data1555;
            }


        })
    }
</script>
<script>
    function confirmalertunlock_del_Dm_folder(data155,delidfolder) {
        
        swal({
            title: "Are you sure Sub DM Folder?",
            text: "Are you sure you delete Sub DM Folder ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
              
                $.ajax({
                    url: 'delete_dm_folder?id=' + data155,
                    type: "GET",
                    success: function(success) {
                        if (success) {
                            swal("Good job!", "Upload for data successfull", "success", {
                                button: true,
                            });
                        }
                        $("#herere" + delidfolder).load(window.location.href + " #herere" + delidfolder);
                        $('#dropedit' + b).modal('hide');

                    }
                });
                //window.location = 'delete_dm_sub?id=' + data1555;
            }


        })
    }
</script>