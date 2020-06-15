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
                                                        <td><?php echo $user_list['Us']; ?></td>
                                                        <td><?php echo $user_list['email']; ?></td>
                                                        <td><?php echo $user_list['phone']; ?></td>
                                                        <td>$<?php echo $user_list['cash']; ?></td>
                                                        <td><?php echo $user_list['score']; ?></td>
                                                        <?php if ($user_list['Us'] == '') :  ?>
                                                            <td>Not package</td>
                                                        <?php else :  ?>
                                                            <td>have package </td>
                                                        <?php endif  ?>
                                                        <td>
                                                            <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#infor<?php echo $user_list['Us']; ?>">
                                                                <i class="feather icon-more-horizontal"></i>
                                                            </button>
                                                            <div class="modal fade" id="infor<?php echo $user_list['Us']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Rating user tool (<?php echo $user_list['Us']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body ">
                                                                            <div class="card-content">
                                                                                <div class="card-body">
                                                                                    <ul class="nav nav-tabs nav-fill ">
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link active" id="base-pill31" data-toggle="pill" href="#pill31" aria-expanded="true">
                                                                                                score
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill32" data-toggle="pill" href="#pill32" aria-expanded="false">Deduct score</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill33" data-toggle="pill" href="#pill33" aria-expanded="false">Cashback</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" id="base-pill34" data-toggle="pill" href="#pill34" aria-expanded="false">Deduct Cashback</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div role="tabpanel" class="tab-pane active" id="pill31" aria-expanded="true" aria-labelledby="base-pill31">
                                                                                            <form action="add_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Add score</label>
                                                                                                        <input type="number" name="add" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">score user</label>
                                                                                                        <div><?php echo $user_list['score']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="pill32" aria-labelledby="base-pill32">
                                                                                            <form action="deduct_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Deduct score</label>
                                                                                                        <input type="number" name="deduct" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">score user</label>
                                                                                                        <div><?php echo $user_list['score']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="pill33" aria-labelledby="base-pill33">
                                                                                            <form action="cash_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Add cashback</label>
                                                                                                        <input type="number" name="cashback" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">Cashback user</label>
                                                                                                        <div><?php echo $user_list['cashback']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="pill34" aria-labelledby="base-pill34">
                                                                                            <form action="deduct_cash_score" method="POST">
                                                                                                <input type="hidden" name="id" value="<?php echo $user_list['Us']; ?>">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-8">
                                                                                                        <label for="">Deduct cashback</label>
                                                                                                        <input type="number" name="cashback" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label for="">Cashback user</label>
                                                                                                        <div><?php echo $user_list['cashback']; ?></div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12" style="margin-top: 15px;">
                                                                                                        <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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