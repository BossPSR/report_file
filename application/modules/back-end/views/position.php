<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Position Information</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Position Information
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">

            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Position Information</h4>
                                <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#exampleModala">+ Add Position</button>

                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Position</th>
                                                    <th>created_at</th>
                                                    <th>Tool</th>

                                                </tr>
                                            </thead>
                                            <?php $i = 1 ?>
                                            <tbody>
                                                <?php foreach ($data as $key => $data) { ?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $data['name_item'] ?></td>
                                                        <td><?php echo $data['created_at'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning mr-1 mb-1" data-toggle="modal" data-target="#exampleModalu<?php echo $data['id'] ?>"><i class="feather icon-edit"></i> Edit</button>
                                                            <div class="modal fade" id="exampleModalu<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Position Edit</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="position_edit" method="post">
                                                                                <input type="text" name="id" value="<?php echo $data['id']; ?>" hidden>
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">Name Position</label>
                                                                                        <input type="text" class="form-control" name="name_item" value="<?php echo $data['name_item']; ?>" placeholder="Enter Position">
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                                <button type="submit" class="btn btn-warning mr-1 mb-1">Edit Position</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" onclick="confirmalertunlock_delete_position('<?php echo $data['id']; ?>')" class="btn btn-danger mr-1 mb-1"><i class="feather icon-trash"></i> delete</button>


                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="modal fade" id="exampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Position</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="position_Add" method="post">
                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                <div class="form-group">
                                                                    <label for="helpInputTop">Name Position</label>
                                                                    <input type="text" class="form-control" name="name_item" value="" placeholder="Enter Position">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Upload to Position</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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