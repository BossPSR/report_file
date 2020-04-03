<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Video List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Video List
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
                                <h4 class="card-title">Video</h4>
                                <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-primary">+ Add Video</button>

                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Video</th>
                                                    <th>tool</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($vdo as $key => $vdo) { ?>
                                                <tbody>

                                                    <tr>
                                                        <td><iframe width="500" height="240" src="<?php echo $vdo['link'].''.$vdo['vdo']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>

                                                        <td>

                                                        <button data-toggle="modal" data-target="#exampleModala<?php echo $vdo['id']; ?>" type="button" class="btn btn-warning"><i class="feather icon-edit" style="font-size: 25px;"></i> edit Video</button>
                                                            <div class="modal fade" id="exampleModala<?php echo $vdo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">link Video</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="vdo_edit_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Video</label>
                                                                                <div>  
                                                                                <input type="hidden"  name="id"   value="<?php echo $vdo['id'] ?>">
                                                                                <input type="hidden"  name="link"   value="https://www.youtube.com/embed/">
                                                                                <input type="text" class="form-control" name="link" value="https://www.youtube.com/embed/" placeholder="Enter Vdo" style="width: 60%;display: inline-block;" disabled>
                                                                                <input type="text" class="form-control" name="vdo" value="<?php echo $vdo['vdo'] ?>" placeholder="Enter Vdo" style="width: 35%;display: inline-block;" required>
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

                                                    <button onclick="confirmalertunlock_del_vdo('<?php echo $vdo['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false"><i class="feather icon-trash" style="font-size: 25px;"></i>
                                                    delete Video
                                                    </button>       
                                                    
                                                            
                                                        </td>

                                                    </tr>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">link Video</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="vdo_add_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Video</label>
                                                                                <div>
                                                                                <input type="text" class="form-control" value="https://www.youtube.com/embed/"  style="width: 60%;display: inline-block;" disabled>
                                                                                    <input type="hidden"  name="link"   value="https://www.youtube.com/embed/">
                                                                                <input type="text" class="form-control" name="vdo"  placeholder="Enter Vdo" style="width: 35%;display: inline-block;" required>
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
                                                <?php } ?>
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