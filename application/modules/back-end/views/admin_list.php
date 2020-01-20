<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin Information</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Admin Information
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
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
                                <h4 class="card-title">Admin Information</h4>
                                <a href="back_admin_add"><button type="button" class="btn btn-primary mr-1 mb-1">+ Add Admin</button></a>

                            </div>
                          
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>email</th>
                                                    <th>UserName</th>                                      
                                                    <th>phone</th>
                                                    <th>created_at</th>
                                                    <th>status</th>
                                                    <th>Tool</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($admin as $admin) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $admin['email']; ?></td>
                                                        <td><?php echo $admin['username']; ?></td>
                                                        <td><?php echo $admin['phone']; ?></td>
                                                        <td><?php echo $admin['created_at']; ?></td>
                                                        <?php if ($admin['is_admin'] == 1) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Admin
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=2">Superadmin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=3">Administrator</a>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </td>
                                                              
                                                        <?php elseif($admin['is_admin'] == 2) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Superadmin
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=1">Admin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=3">Administrator</a>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                       <?php else : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Administrator
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=1">Admin</a>
                                                                        <a class="dropdown-item" href="back_admin_status_Admin?id=<?php echo $admin['id']; ?>&status=2">Superadmin</a>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                            
                                                        <?php endif; ?>
                                                            <td>
                                                            <a href="back_admin_edit?id=<?php echo $admin['id']; ?>"><i class="feather icon-edit" style="font-size: 25px;"></i></a>
                                                            <a href="back_admin_delete_admin?id=<?php echo $admin['id']; ?>"><i class="feather icon-trash" style="font-size: 25px;"></i></a>

                                                            </td>
                                                    </tr>
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