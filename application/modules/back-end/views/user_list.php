<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">User List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">User List
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
                                <h4 class="card-title">User List</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>UserName</th>
                                                    <th>Passport</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Cash</th>
                                                    <th>Score</th>
                                                    <th>package</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($user_list as $user_list) { ?>
                                                    <tr>
                                                        <td><?php echo $user_list['username']; ?></td>
                                                        <td><?php echo $user_list['passport']; ?></td>
                                                        <td><?php echo $user_list['email']; ?></td>
                                                        <td><?php echo $user_list['phone']; ?></td>
                                                        <td>$<?php echo $user_list['cash']; ?></td>
                                                        <td><?php echo $user_list['score']; ?></td>
                                                        <?php if ($user_list['user_id'] == '') :  ?>
                                                            <td>Not package</td>
                                                        <?php else :  ?>
                                                            <td>have package </td>
                                                        <?php endif  ?>
                                                    </tr>
                                                <?php  } ?>
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