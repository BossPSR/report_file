<?php





$arrayForTable = [];
foreach ($upload_main_search as $upload_main_searchDetail) {
    $temp = [];
    $temp['id'] = $upload_main_searchDetail['id'];
    $temp['search_item'] = $upload_main_searchDetail['search_item'];
    $temp['select_item'] = $upload_main_searchDetail['select_item'];
    $temp['code'] = $upload_main_searchDetail['code'];
    $temp['topic'] = $upload_main_searchDetail['topic'];
    $temp['create_at'] = $upload_main_searchDetail['create_at'];
    $temp['userId'] = $upload_main_searchDetail['userId'];
    $temp['upload_store_id'] = $upload_main_searchDetail['upload_store_id'];
    if(!isset($arrayForTable[$upload_main_searchDetail['userId']])){
        $arrayForTable[$upload_main_searchDetail['userId']] = [];
    }
    $arrayForTable[$upload_main_searchDetail['userId']][] = $temp;
}



?>

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
                                                    <th>Main Search Id</th>
                                                    <th>User</th>
                                                    <th>Search Item</th>
                                                    <th>Select Item</th>
                                                    <th>file</th>
                                                    <th>Code</th>
                                                    <th>Topic</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                <?php 
                                                
                                                foreach ($arrayForTable as $id => $upload_main_search) { 
                                                    $numName= count($upload_main_search);
                                                 
                                                        foreach ($upload_main_search as $key => $value){
                                                            
                                                ?>
                                               
                                                
                                                    <tr>
                                                        <td><?php echo $value['id']; ?></td>
                                                
                                                        <td>
                                                          
                                                            <?php echo $id;?>
                                                        </td>
     
                                                       
                                                        
                                                        <td><?php echo $value['search_item']; ?></td>
                                                        <td><?php echo $value['select_item']; ?></td>
                                                        <td> <span data-toggle="modal" data-target="#exampleModal<?php echo $value['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span></td>
                                                        <td><?php echo $value['code']; ?></td>
                                                        <td><?php echo $value['topic']; ?></td>
                                                        <td><?php echo $value['create_at']; ?></td>    
                                                    </tr>
                                                    <div class="modal fade" id="exampleModal<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Main Search</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                    <?php $path  = $this->db->get_where('tbl_upload_store', ['id' => $value['upload_store_id']])->row_array(); ?>
                                                                        <iframe src="<?php echo $path['path']; ?>" width="100%" height="400px"></iframe>
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $value['id']; ?>">
                                                                        <div class="data-items pb-3">
                                                                            <div class="data-fields px-2 mt-3">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 data-field-col">
                                                                                        <div class="form-group">
                                                                                           
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                            <div class="add-data-btn mr-1">
                                                                       
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>

                                                    
                                                    
                                                    <?php  
                                                            }
                                                        
                                                    ?>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <?php  
                                                            }
                                                        
                                                    ?>
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