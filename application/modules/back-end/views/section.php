<!-- 
$arrayForTable = [];
foreach ($store as $upload_main_searchDetail) {
    $temp = [];
    $temp['id'] = $upload_main_searchDetail['id'];
    $temp['store_id'] = $upload_main_searchDetail['store_id'];
    $temp['file_name'] = $upload_main_searchDetail['file_name'];
    $temp['is_check'] = $upload_main_searchDetail['is_check'];
    $temp['create_at'] = $upload_main_searchDetail['create_at'];
    $temp['path'] = $upload_main_searchDetail['path'];
    $temp['price_file'] = $upload_main_searchDetail['price_file'];
    $temp['status_cp'] = $upload_main_searchDetail['status_cp'];
    $temp['userId'] = $upload_main_searchDetail['userId'];
    $temp['status_chack'] = $upload_main_searchDetail['status_chack'];
    $temp['section'] = $upload_main_searchDetail['section'];
    if (!isset($arrayForTable[$upload_main_searchDetail['userId']])) {
        $arrayForTable[$upload_main_searchDetail['userId']] = [];
    }
    $arrayForTable[$upload_main_searchDetail['userId']][] = $temp;
} -->





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

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">section</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Store Id</th>
                                                    <th>UserId</th>
                                                    <th>Section</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($section as $keys => $section) { ?>


                                                    <tr style="background: #ededed;">
                                                        <td><?php echo $section['store_id']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <?php $check_for = $this->db->group_by('section')->get_where('tbl_upload_store', ['store_id' => $section['store_id']])->result_array(); ?>

                                                    <tr>
                                                        <td><?php echo $section['store_id']; ?></td>
                                                        <td> <?php echo $section['userId']; ?></td>

                                                        <td>
                                                            <?php foreach ($check_for as $keys => $check_for) { ?>
                                                                <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#large<?php echo $check_for['id']; ?>">section <?php echo $check_for['section']; ?></button>
                                                                <div class="modal fade text-left" id="large<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel17">section <?php echo $check_for['section']; ?> </h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                    <?php $section_file = $this->db->get_where('tbl_upload_store', ['store_id' => $section['store_id'],'status_chack'=> 1,'section'=> $check_for['section']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <?php foreach ($section_file as $keys => $section_file) { ?>
                                                                                        <tr> 
                                                                                            <td><?php echo $section_file['store_id']?></td>
                                                                                            <td><?php echo $section_file['file_name']?></td>
                                                                                            <td><a href="<?php echo $section_file['path']?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $section_file['create_at']?></td>
                                                                                            
                                                                                        </tr>
                                                                                    <?php }?>
                                                                                    </tbody>
                                                                                    </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </td>

                                                        <td> <span><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></span></td>
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