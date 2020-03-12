<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Complete</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Complete">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Complete 
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
        $this->db->from('tbl_upload_order_team');
        $this->db->group_by('order_id');    
        $count_all = $this->db->count_all_results(); // Produces an integer, like 17
        ?>

        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                          
                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Complete</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <h3 class="card-title "><?php echo $count_all; ?></h3>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>TeamId</th>
                                                    <th>Main_file</th>
                                                    <th>GT_File</th>
                                                    <th>Team File</th>
                                                    <th>date_required</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $i = 1;
                                                $e = 1;
                                               
                                                foreach ($complete as $key => $complete) { 
                                                ?>



                                                    <tr>
                                                        <td><?php echo $i++ ; ?></td>
                                                        <td><?php echo $complete['order_id']; ?></td>
                                                        <td><?php echo $complete['teamId']; ?></td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $complete['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $complete['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $complete['order_id']])->result_array(); ?>
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
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
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
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $complete['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $complete['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $complete['order_id']])->result_array(); ?>
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
                                                        <td> 
                                                            <span data-toggle="modal" data-target="#exampleModalz<?php echo $complete['order_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalz<?php echo $complete['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Team File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        <table class="table zero-configuration">
                                                                        <thead>
                                                                            <?php $order = $this->db->get_where('tbl_upload_order_team', ['order_id' => $complete['order_id'],'teamId'=>$complete['teamId']])->result_array(); ?>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Order_id</th>
                                                                                <th>File_name</th>
                                                                                <th>File</th>
                                                                                <th>create</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($order as $keys => $order) { ?>
                                                                                <tr>
                                                                                    <td><?php echo $e++ ; ?></td>
                                                                                    <td><?php echo $order['order_id'] ?></td>
                                                                                    <td><?php echo $order['file_name'] ?></td>
                                                                                    <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
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
                                                      
                                                        <td><?php echo $complete['date_required']; ?></td>
                                                        <td><button onclick="confirmalertunlock_upload_de('<?php echo $complete['order_id']; ?>','<?php echo $complete['userId']; ?>')" type="button" class="btn btn-outline-info">
                                                            delivery

                                                            </button>
                                                            <?php $bookmark = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $complete['order_id']])->row_array(); ?>
                                                            <?php if($bookmark== true): ?>
                                                            <a  class="btn btn-outline-secondary">
                                                              Bookmark

                                                            </a>
                                                            <?php else:?>
                                                            <a href="book_complete_add_com?id=<?php echo $complete['order_id']; ?>&userid=<?php echo $complete['userId']; ?>" class="btn btn-outline-success">
                                                              Bookmark

                                                            </a>
                                                            <?php endif;?>

                                                              <a href="Add_feedback?id=<?php echo $complete['order_id']; ?>&cmid=<?php echo $complete['userId']; ?>" class="btn btn-outline-danger">
                                                              Feedback
                                                              </a>                           
                                                            </button>

                                                            
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