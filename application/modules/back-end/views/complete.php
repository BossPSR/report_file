<!-- BEGIN: Content-->
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
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
                                                        <td><?php echo $complete['order_id_t']; ?></td>
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
                                                      
                                                        <td><?php echo $complete['date_required_t']; ?></td>
                                                        <td><button data-toggle="modal" data-target="#exampleModalu<?php echo $complete['order_id_t']; ?>" type="button" class="btn btn-outline-info">
                                                            delivery
                                                            </button>
                                                            <div class="modal fade" id="exampleModalu<?php echo $complete['order_id_t']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document_File </h5>
                                                                                
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            <h3><p>Document File </p></h3>
                                                                            <form action="sendEmail_delivery_complete" method="POST">
                                                                         <input type="hidden"  name="id" value="<?php echo $complete['order_id_t']; ?>">
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_store', ['store_id' => $complete['store_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>
                                                                                            <th>Relive</th>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>
                                                                                                <td>
                                                                                                <label class="container">
                                                                                                    <input type="checkbox" class="checkmark" name="order_id[]" value="<?php echo $orderss['id'] ?>">
                                                                                                    <span class="checkmark"></span>
                                                                                                </label>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                        -
                                                                                                    <?php else : ?>
                                                                                                        <div class="badge badge-primary">Relive</div>
                                                                                                    <?php endif ?>
                                                                                                </td>
                                                                                                <td><?php echo $orderss['store_id'] ?></td>
                                                                                                <td><?php echo $orderss['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss['create_at'] ?></td>


                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                                <h3><p>Team file</p></h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $complete['order_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>
                                                                                            <th>Store_id</th>
                                                                                            <th>File_name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>
                                                                                                <td><label class="container">
                                                                                                    <input type="checkbox" class="checkmark" name="order_team[]" value="<?php echo $orderss['id'] ?>">
                                                                                                    <span class="checkmark"></span>
                                                                                                </label>
                                                                                            </td>
                                                                                                
                                                                                                <td><?php echo $orderss['order_id'] ?></td>
                                                                                                <td><?php echo $orderss['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss['create_at'] ?></td>


                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1" >delivery</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php $bookmark = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $complete['order_id']])->row_array(); ?>
                                                            <?php if($bookmark== true): ?>
                                                            <a  class="btn btn-outline-secondary">
                                                              Bookmark

                                                            </a>
                                                            <?php else:?>
                                                            <a href="book_complete_add_com?id=<?php echo $complete['order_id']; ?>&userid=<?php echo $complete['user_m']; ?>" class="btn btn-outline-success">
                                                              Bookmark

                                                            </a>
                                                            <?php endif;?>

                                                              <a href="Add_feedback?id=<?php echo $complete['order_id']; ?>&cmid=<?php echo $complete['user_m']; ?>" class="btn btn-outline-danger">
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