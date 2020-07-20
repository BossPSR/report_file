<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Approved</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active"> Approved
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
                                <div class="col-lg-9 col-sm-12">
                                    <h4 class="card-title"> Approved</h4>
                                </div>
                                <div class="col-lg-1 col-sm-12 text-center">
                                    <?php if ($Approved == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($Approved as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                                <div class="col-lg-2 col-sm-12 text-right" style="max-width: 11.66667%;">
                                    <button type="button" data-toggle="modal" data-target="#modalUpload" class="btn btn-primary mr-1 mb-1">+ Upload</button>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>CM</th>
                                                    <th>Order id</th>
                                                    <th>Order date</th>
                                                    <th>Main file</th>
                                                    <th>GT file</th>
                                                    <th>DM file</th>
                                                    <th>Team file</th>
                                                    <th>TM</th>
                                                    <th>Feedback file</th>
                                                    <th>Feedback detail</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <?php $i = 1; ?>
                                            <tbody>
                                                <?php foreach ($Approved as $key => $Approved) { ?>
                                                    <tr>
                                                        <td><?php echo $Approved['userId'] ?></td>
                                                        <td><?php echo $Approved['order_id'] ?></td>
                                                        <td><?php echo $Approved['date_required'];  ?></td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agin"><i class="feather icon-upload"></i> </button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tfoot>
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