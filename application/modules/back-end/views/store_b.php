<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Store For sell grade B</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Store For sell grade B
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
                                <h4 class="card-title">Store For sell grade B</h4>
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
                                            <?php foreach ($store as $store) { ?>
                                               <?php if($store['price_file']=="" ): ?>
                                                <?php elseif ($store['price_file'] &&  $store['grade']=='B') :?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $store['store_id']; ?></td>
                                                        <td><?php echo $store['userId']; ?></td>
                                                        
                                                        
                                                        <td><?php echo $store['file_name']; ?></td>
                                                        <td> <span data-toggle="modal" data-target="#exampleModal<?php echo $store['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span></td>
                                                        <?php if ($store['price_file'] == '') :   ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td>$<?php echo $store['price_file']; ?></td>
                                                            <?php endif; ?>
                                                        <td><?php echo $store['create_at']; ?></td>
                                                        <td>
                                                            <button  onclick="confirmalertunlock('<?php echo $store['id']; ?>')"  class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                             Reject
                                                            </button>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpload<?php echo $store['id']; ?>">Upload</button>
                                                        </td>

                                                    </tr>

                                                    </tfoot>
                                                    <div class="modal fade" id="exampleModal<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">StoreFile grade B</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                         
                                                                    <button type="button" class="btn btn-warning mr-1 mb-1"></i> <?php echo $store['grade'].' / '.$store['status_cp'] ?></button>
                                                                        <iframe src="<?php echo $store['path']; ?>" width="100%" height="400px"></iframe>
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $store['id']; ?>">
                                                                        <div class="data-items pb-3">
                                                                            <div class="data-fields px-2 mt-3">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 data-field-col">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">PriceFile</label>
                                                                                                <input type="text" class="form-control" name="price_file" value="<?php echo $store['price_file']; ?>" readonly required>
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
                                                                       
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <!-- upload -->
                                                        <div class="modal fade" id="modalUpload<?php echo $store['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                                        <input type="hidden" class="form-control" name="store_check" value="b">
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $store['id']; ?>">
                                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $store['userId']; ?>">
                                                                        <div class="data-items pb-3">
                                                                            <div class="data-fields px-2 mt-3">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 data-field-col">

                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">Select Item</label>
                                                                                                <?php $select_itemList = $this->db->get('tbl_select_item')->result_array();?>
                                                                                                <select name="select_item_id" class="form-control" id="data-category">
                                                                                                    <?php foreach ($select_itemList as $key => $selectItem) { ?>
                                                                                                    <option value="<?php echo $selectItem['id']; ?>"><?php echo $selectItem['name_item']; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">Search Item</label>
                                                                                                <input type="text" class="form-control" name="search_item" value="" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">Code</label>
                                                                                                <input type="text" class="form-control" name="code" value="" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="data-name">Topic</label>
                                                                                                <textarea class="form-control" name="topic" id="" cols="30" rows="10" required></textarea>
                                                                                               
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
                                                        <?php else:?>
                                                        <?php endif;?>
                                                    <?php  } ?>
                                                      
                                                

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