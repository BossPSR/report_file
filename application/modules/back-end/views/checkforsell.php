<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Check For sell</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Check For sell
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
                                <h4 class="card-title">Check For sell</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>File</th>
                                                    <th>PriceFile</th>
                                                    <th>create_at</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($store as $order) { ?>
                                                <?php if ($order['price_file'] || $order['is_check'] == '1') : ?>
                                                <?php else : ?>
                                                    <?php $store_name   = $this->db->get_where('tbl_user', ['id' => $order['userId']])->row_array(); ?>
                                                        <tr style="background-color: #d7d7d7;">
                                                            <td><?php echo $i++ ; ?></td>
                                                            <td><?php echo $store_name['username']; ?></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    <?php $tests = $this->db->get_where('tbl_upload_store', ['userId' => $order['userId']])->result_array(); ?>
                                                    <?php foreach ($tests as $key => $store) : ?>
                                             
                                                        <tr>
                                                            <td><?php echo $i++ ; ?></td>
                                                           
                                                            <td></td>
                                                   
                                                            <td><?php echo $store['file_name']; ?></td>
                                                            <td> <span data-toggle="modal" data-target="#exampleModal<?php echo $store['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span></td>
                                                            <?php if ($store['price_file'] == '') :   ?>
                                                                <td>-</td>
                                                            <?php else : ?>
                                                                <td>$<?php echo $store['price_file']; ?></td>
                                                            <?php endif; ?>
                                                            <td><?php echo $store['create_at']; ?></td>
                                                            <td>
                                                                <button onclick="confirmalertunlock('<?php echo $store['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    Reject
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <div class="modal fade" id="exampleModal<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">StoreFile</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="back_store_check_store_add_com" method="POST" class="form-horizontal">
                                                                        <div class="modal-body">
                                                                            <span data-toggle="modal" data-target="#exampleModallCenter<?php echo $store['id']; ?>">A == 50</span>
                                                                            <span data-toggle="modal" data-target="#exampleModallCenterb<?php echo $store['id']; ?>">B == 20</span>
                                                                            <span data-toggle="modal" data-target="#exampleModallCenterc<?php echo $store['id']; ?>">c == 10</span>
                                                                            <iframe src="<?php echo $store['path']; ?>" width="100%" height="600px"></iframe>
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

                                                            <div class="modal fade" id="exampleModallCenter<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade A</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center"> 
                                                                           <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=complete&grad=A&price=50" class="btn btn-success">Complete</a>
                                                                            <!-- <button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete</button> -->
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterb<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                
                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade B</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: center"> 
                                                                       <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=complete&grad=b&price=20"><button type="button"  class="btn btn-success" data-dismiss="modal">Complete</button></a>
                                                                       <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=notcomplete&grad=b&price=20"><button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete</button></a>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade" id="exampleModallCenterc<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                
                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade C</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="text-align: center"> 
                                                                       <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&test?com=complete&grad=c&price=10"><button type="button"  class="btn btn-success" data-dismiss="modal">Complete</button></a>
                                                                         <a href="back_store_check_store_add_com?id=<?php echo $store['id']; ?>&com=notcomplete&grad=c&price=10"></a><button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete 1</button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endforeach; ?>
                                                            <?php endif; ?>
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