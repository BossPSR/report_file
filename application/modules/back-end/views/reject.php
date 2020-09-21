<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Reject For sell</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Reject For sell
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
                                <div class="col-lg-10 col-sm-12">
                                    <h4 class="card-title">Reject For sell</h4>
                                </div>

                                <div class="col-lg-2 col-sm-12 text-right">
                                    <button type="button" onclick="confirmalert_del_all('1')" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Delete all</button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>File</th>

                                                    <th>create_at</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($store as $store) { ?>
                                                <?php if ($store['is_check'] == "0") : ?>
                                                <?php else : ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $store['store_id']; ?></td>
                                                            <?php $store_name   = $this->db->get_where('tbl_user', ['idUser' => $store['userId']])->result_array(); ?>
                                                            <?php foreach ($store_name as $store_name) { ?>
                                                                <td><?php echo $store_name['idUser']; ?></td>
                                                            <?php  } ?>
                                                            <td><?php echo $store['file_name']; ?></td>
                                                            <td><a href="<?php echo $store['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>

                                                            <td><?php echo $store['create_at']; ?></td>
                                                            <td>
                                                                <button onclick="confirmalertunlock_del_reject_for_sell('<?php echo $store['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                    Reject
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        </tfoot>

                                                    <?php endif; ?>
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