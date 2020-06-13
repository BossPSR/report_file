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
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Cash</th>
                                                    <th>Score</th>
                                                    <th>package</th>
                                                    <th>Tool</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($user_list as $user_list) { ?>
                                                    <tr>
                                                        <td><?php echo $user_list['idUser']; ?></td>
                                                        <td><?php echo $user_list['email']; ?></td>
                                                        <td><?php echo $user_list['phone']; ?></td>
                                                        <td>$<?php echo $user_list['cash']; ?></td>
                                                        <td><?php echo $user_list['score']; ?></td>
                                                        <?php if ($user_list['user_id'] == '') :  ?>
                                                            <td>Not package</td>
                                                        <?php else :  ?>
                                                            <td>have package </td>
                                                        <?php endif  ?>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#infor<?php echo $user_list['idUser']; ?>">
                                                                <i class="feather icon-alert-triangle"></i>
                                                            </button>
                                                            <div class="modal fade" id="infor<?php echo $user_list['idUser']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Add Score (<?php echo $user_list['idUser']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body ">
                                                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                <div class="form-group">
                                                                                    <label for="name">Score</label>
                                                                                    <input type="number" class="form-control" name="Score" value="" required>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around">
                                                                                <button type="submit" id="uploadsfile<?php echo $user_list['idUser']; ?>" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
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