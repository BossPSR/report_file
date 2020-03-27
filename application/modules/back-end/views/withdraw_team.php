<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Withdraw Team</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Withdraw Team
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
                                <h4 class="card-title">Withdraw Team</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Passport</th>
                                                    <th>Team Id</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Withdraw</th>
                                                    <th>Telephone</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($withdraw_team as $withdraw_team) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $withdraw_team['passport']; ?></td>
                                                        <td><?php echo $withdraw_team['teamId']; ?></td>
                                                        <td><?php echo $withdraw_team['email']; ?></td>
                                                        <td><?php echo $withdraw_team['name']; ?></td>
                                                        <td><?php echo $withdraw_team['price']; ?></td>
                                                        <td><?php echo $withdraw_team['phone']; ?></td>
                                                        <td>
                                                            <?php if ($withdraw_team['status_id'] == 1) : ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                กำลังดำเนินการ
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=3">ยกเลิก</a>
                                                                </div>
                                                            </div>
                                                            <?php elseif ($withdraw_team['status_id'] == 2): ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                ชำระเงินแล้ว
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=3">ยกเลิก</a>
                                                                </div>
                                                            </div>
                                                            <?php else: ?>
                                                            <div class="dropdown ">
                                                                <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                ยกเลิก
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=2">ชำระเงินแล้ว</a>
                                                                    <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=3">ยกเลิก</a>
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