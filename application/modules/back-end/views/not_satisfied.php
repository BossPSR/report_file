<!-- BEGIN: Content-->
<?php

$arrayForTable = [];
foreach ($order_not as $upload_main_searchDetail) {


        $temp = [];
        $temp['id'] = $upload_main_searchDetail['id'];
        $temp['order_id'] = $upload_main_searchDetail['order_id'];
        $temp['file_name'] = $upload_main_searchDetail['file_name'];
        $temp['create_at'] = $upload_main_searchDetail['create_at'];
        $temp['path'] = $upload_main_searchDetail['path'];

        $temp['price_file'] = $upload_main_searchDetail['price_file'];
        $temp['userId'] = $upload_main_searchDetail['userId'];
        $temp['cm'] = $upload_main_searchDetail['cm'];
        $temp['date_required'] = $upload_main_searchDetail['date_required'];
        $temp['status_book'] = $upload_main_searchDetail['status_book'];
        $temp['is_check'] = $upload_main_searchDetail['is_check'];

        if (!isset($arrayForTable[$upload_main_searchDetail['order_id']])) {
            $arrayForTable[$upload_main_searchDetail['order_id']] = [];
        }
        $arrayForTable[$upload_main_searchDetail['order_id']][] = $temp;

    
}


?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Satisfied</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Satisfied
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
                                <h4 class="card-title">Satisfied</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                   <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>Date required</th>
                                                    <th>PriceFile</th>
                                                    <th>Confirmed order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                          
                                                $i=1;
                                            foreach ($arrayForTable as $id => $stores) {
                                                foreach ($stores as $key => $store) {
                                                
                                            ?>
                                                    
                                                       
                                                            <tr>
                                                                <td><?php echo $i++ ?></td>
                                                                <td><?php echo $store['order_id']?></td>
                                                                <td><?php echo $store['cm']; ?></td>
                                                                <td><?php echo $store['file_name']; ?></td>
                                                                <td><?php echo $store['date_required']; ?></td>
                                                                <?php if ($store['price_file'] == '') :   ?>
                                                                    <td>-</td>
                                                                <?php else : ?>
                                                                    <td>$<?php echo $store['price_file']; ?></td>
                                                                <?php endif; ?>
                                                                <?php if($key == 0){ ?>
                                                                    <td ><button data-toggle="modal" data-target="#exampleModal<?php echo $store['id']; ?>" type="button" class="btn btn-success">Confirmed</button></td>
                                                                <?php }else{?>
                                                                    <td> </td>
                                                                <?php } ?>

                                                            </tr>

                                                           
                                                         
                                                            <div class="modal fade" id="exampleModal<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">check Order</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                            <div class="modal-body">

                                                                                <iframe src="<?php echo $store['path']; ?>" width="100%" height="500px"></iframe>
                                                                                <input type="hidden" class="form-control" name="id" value="<?php echo $store['id']; ?>">
                                                                                <div class="data-items pb-3">
                                                                                    <div class="data-fields px-2 mt-3">
                                                                                        <div class="row">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">


                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                         
                                                           
                                                            
                                                        <?php  } ?>
                                                            <thead class="thead-light">
                                                            <tr >
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                            </thead>
                                                            
                                                    
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