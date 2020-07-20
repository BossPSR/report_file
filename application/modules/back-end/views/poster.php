<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Poster List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Poster List
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
                                <h4 class="card-title">Poster</h4>
                                <a href="Poster_add"><button type="button" class="btn btn-primary mr-1 mb-1">+ Add Poster</button></a>

                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%">#No</th>
                                                    <th style="width: 50%">File</th>
                                                    <th>NamePoster</th>
                                                    <th>Tool</th>


                                                </tr>
                                            </thead>
                                            <?php $i = 1 ?>
                                            <tbody>
                                                <?php foreach ($poster as $key => $poster) { ?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><img src="uploads/poster/<?php echo $poster['file_name']; ?>" style="width: 30%" alt=""></td>
                                                        <td><?php echo $poster['name_file']; ?></td>
                                                        <td>
                                                            <a href="poster_Edit?id=<?php echo $poster['id']; ?>"><i class="feather icon-edit" style="font-size: 25px;"></i></a>

                                                            <a onclick="confirmalertunlock_del_vdo('<?php echo $poster['id']; ?>')"><i class="feather icon-trash" style="font-size: 25px;"></i></a>
                                                        </td>
                                                    </tr>
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