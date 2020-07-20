<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">More File Team</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">More File Team
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
                                <div class="col-10">
                                    <h4 class="card-title">More File Team</h4>
                                </div>
                                <div class="col-1 text-center">
                                <?php if ($more_file_team == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($more_file_team as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>More File</th>
                                                    <th>create at</th>
                                                    <th>Tool</th>
                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;

                                                foreach ($more_file_team as $key => $more_file_team) {

                                                ?>

                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $more_file_team['orderGT'] ?></td>
                                                        <td><?php echo $more_file_team['userId']; ?></td>
                                                    
                                                        <td>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $more_file_team['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $more_file_team['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $more_file_team['orderGT']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order_id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name_GT'] ?></td>
                                                                                            <td><a href="<?php echo $order['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['create_at'] ?></td>


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
                                                        

                                                        <td><?php echo $more_file_team['create_at']; ?></td>
                                                        <td>
                                                            <?php if($more_file_team['teamId']==""):?>

                                                        <button onclick="" class="btn btn-secondary " type="button" aria-haspopup="true" aria-expanded="false">
                                                                        More File
                                                        </button>     
                                                        <?php else:?>
                                                        <button onclick="confirmalertunlock_upload_morefile('<?php echo $more_file_team['orderGT']; ?>')" class="btn btn-info " type="button" aria-haspopup="true" aria-expanded="false">
                                                                        More File
                                                        </button>       
                                                        <?php endif;?>
                                                                        
                                                                                        
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