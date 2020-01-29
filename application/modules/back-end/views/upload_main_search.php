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
                                                    <th>Code</th>
                                                    <th>Topic</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                <?php 
                                                
                                                foreach ($arrayForTable as $id => $upload_main_search) { 
                                                    $numName= count($upload_main_search);
                                                    $store_name   = $this->db->get_where('tbl_user', ['id' => $id])->row_array(); 
                                                        foreach ($upload_main_search as $key => $value){
                                                ?>
                                               
                                                
                                                    <tr>
                                                        <td><?php echo $value['id']; ?></td>
                                                
                                                        <td>
                                                          
                                                            <?php echo $store_name['username'];?>
                                                        </td>
     
                                                       
                                                        
                                                        <td><?php echo $value['search_item']; ?></td>
                                                        <td><?php echo $value['select_item']; ?></td>
                                                        <td><?php echo $value['code']; ?></td>
                                                        <td><?php echo $value['topic']; ?></td>
                                                        <td><?php echo $value['create_at']; ?></td>    
                                                    </tr>

                                                    
                                                    
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