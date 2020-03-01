

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
                            <div class="card-header">
                                <h4 class="card-title">Upload Main Search</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Document</th>
                                                    <th>Search Item</th>
                                                    <th>Select Item</th>
                                                    <th>file</th>
                                                    <th>Code</th>
                                                    <th>Topic</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                <?php $i = 1 ; ?>
                                                <?php $e = 1 ; ?>
                                                <?php foreach ($upload_main_search as $key => $value) : ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $i++ ; ?></td>
                                                        <td><?php echo $value['id_doc'];;?></td>
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
                                                                            <?php $store = $this->db->get_where('tbl_upload_store', ['store_id' => $value['upload_store_id'],'section' =>  $value['section']])->result_array(); ?>
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
                                                                                    <td><?php echo $e++ ; ?></td>
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