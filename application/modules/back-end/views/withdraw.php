<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Withdraw</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Withdraw
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
                                <h4 class="card-title">Withdraw</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Passport</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Withdraw</th>
                                                    <th>Telephone</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($withdraw as $withdraw) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $withdraw['passport']; ?></td>
                                                        <td><?php echo $withdraw['email']; ?></td>
                                                        <td><?php echo $withdraw['username']; ?></td>
                                                        <td><?php echo $withdraw['price']; ?></td>
                                                        <td>
                                                            <?php if ($withdraw['status'] == 1) : ?>
                                                                <span class="badge badge-warning">กำลังดำเนินการ</span> 
                                                            <?php elseif ($withdraw['status'] == 2): ?>
                                                                <span class="badge badge-success">ชำระเงินแล้ว</span>
                                                            <?php else: ?>
                                                                <span class="badge badge-danger">ยกเลิก</span> 
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
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