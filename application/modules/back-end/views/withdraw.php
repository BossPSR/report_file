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
                                                        <td><?php echo $withdraw['phone']; ?></td>
                                                        <td>
                                                            <?php if ($withdraw['status'] == 1) : ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                กำลังดำเนินการ
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=3">ยกเลิก</a>
                                                                </div>
                                                            </div>
                                                            <?php elseif ($withdraw['status'] == 2): ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                ชำระเงินแล้ว
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=3">ยกเลิก</a>
                                                                </div>
                                                            </div>
                                                            <?php else: ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                ยกเลิก
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="back_withdraw_update?id=<?php echo $withdraw['idW']; ?>&status=3">ยกเลิก</a>
                                                                </div>
                                                            </div>
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