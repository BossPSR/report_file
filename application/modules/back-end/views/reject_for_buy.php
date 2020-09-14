<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Reject For buy</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Reject For buy
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
                                <h4 class="card-title">Reject For buy</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>File</th>
                                                    <th>PriceFile</th>
                                                    <th>Note</th>
                                                    <th>create_at</th>
                                                    <th>Status</th>
                                                    <th>Tool</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($store as $store) { ?>
                                                <?php if ($store['is_check'] == "1") : ?>
                                                    <?php $prosum = date('Y-m-d', strtotime('+30 day' . '+' . $store['update_at'])); ?>
                                                    <?php if ($prosum <= date('Y-m-d')) : ?>
                                                        <script>
                                                            function getDataend() {
                                                                $.ajax({
                                                                        url: "reject_for_buy_del",
                                                                        type: "POST",
                                                                        data: {
                                                                            order: '<?php echo $store['order_id']; ?>',
                                                                        }
                                                                    })
                                                                    .success(function(success) {
                                                                        console.log(success);
                                                                    });
                                                            }

                                                            setInterval(getDataend, 10000); // 1000 = 1 second
                                                        </script>
                                                    <?php else : ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $store['order_id']; ?></td>
                                                                <td><?php echo $store['userId']; ?></td>
                                                                <td><?php echo $store['file_name']; ?></td>
                                                                <td><a href="<?php echo $store['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                <?php if ($store['price_file'] == '') :   ?>
                                                                    <td>-</td>
                                                                <?php else : ?>
                                                                    <td>$<?php echo $store['price_file']; ?></td>
                                                                <?php endif; ?>
                                                                <td><?php echo $store['note_reject']; ?></td>
                                                                <td><?php echo $store['create_at']; ?></td>
                                                                <td>
                                                                    <?php if ($store['status_approved'] == 3) : ?>
                                                                        <span class="badge badge-pill badge-danger">feedback</span>
                                                                    <?php else : ?>
                                                                        -
                                                                    <?php endif ?>
                                                                </td>
                                                                <td><button type="button" class="btn btn-outline-info" onclick="confirmalertunlock_reject('<?php echo $store['id']; ?>')">Clover</button></td>


                                                            </tr>

                                                            </tfoot>
                                                        <?php endif; ?>
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