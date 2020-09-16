<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">section</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">section
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <?php
            $this->db->where('status_chack', 1);
            $this->db->where('status_main_search', 0);
            $this->db->from('tbl_upload_store');
            $this->db->group_by('store_id');
            $count_setion = $this->db->count_all_results(); // Produces an integer, like 17
            ?>

            <?php
            $this->db->where('status_chack', 1);
            $this->db->where('status_main_search', 0);
            $this->db->from('tbl_upload_store');
            $count_note = $this->db->count_all_results(); // Produces an integer, like 17
            ?>

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">section</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <h3 class="card-title "><?php echo $count_setion; ?></h3>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                                <div class="col-1 text-center">
                                    <h3 class="card-title "><?php echo $count_note; ?></h3>
                                    <h3 class="check_list_not"> จำนวนเอกสาร </h3>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configurationF">
                                            <thead>
                                                <tr>
                                                    <th style="display: none;">#</th>
                                                    <th>Store Id</th>
                                                    <th>UserId</th>
                                                    <th>Note</th>
                                                    <th>Section</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($section as $keys => $section) { ?>
                                                    <?php $check_for = $this->db->group_by('section')->get_where('tbl_upload_store', ['store_id' => $section['store_id'], 'is_check' => 0, 'status_main_search' => 0])->result_array(); ?>
                                                    <tr>
                                                        <td style="display: none;"><?php echo $section['create_at']; ?> </td>
                                                        <td><?php echo $section['store_id']; ?></td>
                                                        <td> <?php echo $section['userId']; ?></td>
                                                        <td>
                                                            <?php if (!empty($section['note'])) { ?>
                                                                <a href="#" data-toggle="modal" data-target="#note<?php echo $section['store_id']; ?>"><i class="feather icon-search"></i></a>
                                                                <div class="modal fade" id="note<?php echo $section['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?= $section['note']; ?>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                -
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <?php foreach ($check_for as $keys => $check_for) { ?>

                                                                <?php if (!empty($check_for['grade'])) { ?>

                                                                    <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#large<?php echo $check_for['id']; ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i> section <?php echo $check_for['section']; ?></button>

                                                                <?php } else { ?>

                                                                    <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#large<?php echo $check_for['id']; ?>">section <?php echo $check_for['section']; ?></button>

                                                                <?php } ?>
                                                                <div class="modal fade text-left" id="large<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel17">section <?php echo $check_for['section']; ?> </h4>
                                                                                <h4 class="badge badge-primary modal-title" id="myModalLabel17" style="font-size: 15px; margin-left: 15px;">
                                                                                    Score : <span class="badge badge-light"><?php echo $check_for['price_file']; ?></span>
                                                                                </h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">


                                                                                <?php if ($check_for['grade'] == '') : ?>
                                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModallCenter<?php echo $check_for['id']; ?>">
                                                                                        grade A <span class="badge badge-light">50</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModallCenterb<?php echo $check_for['id']; ?>">
                                                                                        grade B <span class="badge badge-light">20</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $check_for['id']; ?>">
                                                                                        grade C <span class="badge badge-light">10</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModallCenterno<?php echo $check_for['id']; ?>">
                                                                                        No grade <span class="badge badge-light">0</span>
                                                                                        <span class="sr-only">unread messages</span>
                                                                                    </button>
                                                                                <?php else : ?>
                                                                                    <?php if ($check_for['status_main_search'] != 1) { ?>
                                                                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalUpload<?php echo $check_for['id']; ?>">
                                                                                            Upload
                                                                                            <span class="sr-only">unread messages</span>
                                                                                        </button>
                                                                                    <?php }  ?>
                                                                                <?php endif; ?>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $section_file = $this->db->get_where('tbl_upload_store', ['store_id' => $section['store_id'], 'status_chack' => 1, 'section' => $check_for['section']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>grade</th>
                                                                                            <th>CP/NCP</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($section_file as $keys => $section_file) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $section_file['store_id'] ?></td>
                                                                                                <td><?php echo $section_file['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $section_file['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <?php if ($section_file['grade'] != '') : ?>
                                                                                                    <td><?php echo $section_file['grade'] ?></td>
                                                                                                    <td><?php echo $section_file['status_cp'] ?></td>
                                                                                                <?php else : ?>
                                                                                                    <td>-</td>
                                                                                                    <td>-</td>
                                                                                                <?php endif; ?>
                                                                                                <td><?php echo $section_file['create_at'] ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" id="exampleModallCenter<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade A</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=complete&grad=A&price=50" class="btn btn-success">Complete</a>
                                                                                <!-- <button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete</button> -->
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterb<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade B</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=complete&grad=B&price=20" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=notcomplete&grad=B&price=20" class="btn btn-danger">Not Complete</a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterc<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade C</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=complete&grad=C&price=10" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=notcomplete&grad=C&price=10" class="btn btn-danger">Not Complete </a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterno<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete no grade</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=complete&grad=no&price=0" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $section_file['store_id']; ?>&id_section=<?php echo $section_file['section']; ?>&com=notcomplete&grad=no&price=0" class="btn btn-danger">Not Complete </a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- upload -->
                                                                <div class="modal fade" id="modalUpload<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <input type="hidden" name="userId" value="<?php echo $check_for['userId'] ?>">
                                                                                    <input type="hidden" name="store_id" value="<?php echo $check_for['store_id'] ?>">
                                                                                    <input type="hidden" name="section" value="<?php echo $check_for['section'] ?>">
                                                                                    <div class="data-items pb-3">
                                                                                        <div class="data-fields px-2 mt-3">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-12 data-field-col">

                                                                                                    <div class="form-group hiddens<?php echo $check_for['store_id']; ?>">
                                                                                                        <label for="Organization">Organization</label>
                                                                                                        <select name="organization" class="form-control" id="organization">
                                                                                                            <option value="A">A</option>
                                                                                                            <option value="B">B</option>
                                                                                                            <option value="C">C</option>
                                                                                                            <option value="D">D</option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <div class="form-group hiddens<?php echo $check_for['store_id']; ?>">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Select Item</label>
                                                                                                            <?php $select_itemList = $this->db->get('tbl_select_item')->result_array(); ?>
                                                                                                            <select name="select_item_id" class="form-control select2" id="">
                                                                                                                <?php foreach ($select_itemList as $key => $selectItem) { ?>
                                                                                                                    <option value="<?php echo $selectItem['id']; ?>"><?php echo $selectItem['name_item']; ?></option>
                                                                                                                <?php } ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <!-- <div class="form-group">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Search Item</label>
                                                                                                            <input type="text" class="form-control" name="search_item" value="" required>
                                                                                                        </div>
                                                                                                    </div> -->
                                                                                                    <div class="form-group hiddens<?php echo $check_for['store_id']; ?>">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Code</label>
                                                                                                            <input type="text" class="form-control req<?php echo $check_for['store_id']; ?>" name="code" value="" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group hiddens<?php echo $check_for['store_id']; ?>">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Topic</label>
                                                                                                            <textarea class="form-control req<?php echo $check_for['store_id']; ?>" name="topic" id="" cols="30" rows="10" required></textarea>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <?php
                                                                                                    $this->db->order_by('id', 'DESC');
                                                                                                    $Dm = $this->db->get('tbl_upload_main_search')->row_array();
                                                                                                    ?>
                                                                                                    <div class="form-group hiddens<?php echo $check_for['store_id']; ?>">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Id Document</label>
                                                                                                            <input type="text" class="form-control" value="DM<?php echo $Dm == false ? '1' : $Dm['id'] + 1;  ?>" readonly>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="form-group">
                                                                                                        <fieldset>
                                                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                                                <input type="checkbox" class="ckeck<?php echo $check_for['store_id']; ?>" data-order="<?php echo $check_for['store_id']; ?>">
                                                                                                                <span class="vs-checkbox">
                                                                                                                    <span class="vs-checkbox--check">
                                                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                                <span class="">Add DM</span>
                                                                                                            </div>
                                                                                                        </fieldset>
                                                                                                    </div>

                                                                                                    <?php
                                                                                                    $this->db->order_by('id', 'DESC');
                                                                                                    $Dm = $this->db->get('tbl_upload_main_search')->result_array();
                                                                                                    ?>
                                                                                                    <div class="form-group teambox<?php echo $check_for['store_id']; ?>" style="display: none">
                                                                                                        <div class="controls">
                                                                                                            <label for="data-name">Id Document</label>
                                                                                                            <select name="dmsub" class="form-control select2" id="dmsub<?php echo $check_for['store_id']; ?>">
                                                                                                                <option value="" disabled selected> -- selete -- </option>
                                                                                                                <?php foreach ($Dm as $key => $Dm) { ?>
                                                                                                                    <option value="<?php echo $Dm['id']; ?>"><?php echo $Dm['id_doc']; ?></option>
                                                                                                                <?php } ?>
                                                                                                            </select>
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

                                                            <?php } ?>
                                                        </td>

                                                    </tr>

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

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<script type="text/javascript">
    $('body').on('change', 'input[type="checkbox"]', function() {
        var o = $(this).data('order');
        if ($('.ckeck' + o).is(":checked")) {
            $(".teambox" + o).fadeIn("slow");
            $("#dmsub" + o).prop('required', true);
            $(".req" + o).prop('required', false);
            $(".hiddens" + o).fadeOut("slow");
        } else {
            $(".teambox" + o).fadeOut("slow");
            $("#dmsub" + o).prop('required', false);
            $(".req" + o).prop('required', true);
            $(".hiddens" + o).fadeIn("slow");
        }


    });
</script>