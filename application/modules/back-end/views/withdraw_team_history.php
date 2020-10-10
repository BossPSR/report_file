<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Withdraw team history</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Withdraw team history
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
                                <h4 class="card-title">Withdraw team history</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>TN</th>
                                                    <th>Email</th>
                                                    <th>Comment</th>
                                                    <th>Withdraw</th>
                                                    <th>Total</th>
                                                    <th>Telephone</th>
                                                    <th>Paypal</th>
                                                    <th>Bnak</th>
                                                    <th>Line</th>
                                                    <th>transaction</th>
                                                    <th>silp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($withdraw_list_team_history as $key => $withdraw_list_team_history) { ?>
                                                    <tr>
                                                        <td><?php echo  $withdraw_list_team_history['order_id']; ?></td>
                                                        <td><?php echo  $withdraw_list_team_history['IdTeam'] ?></td>
                                                        <td><?php echo  $withdraw_list_team_history['email'] ?></td>
                                                        <td>
                                                            <a href="#" data-toggle="modal" data-target="#note_new<?php echo $withdraw_list_team_history['order_id']; ?>"><i class="feather icon-search" style="font-size: 25px;"></i></a>
                                                            <div class="modal fade" id="note_new<?php echo $withdraw_list_team_history['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?= $withdraw_list_team_history['note_approved_team']; ?>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo  $withdraw_list_team_history['price'] ?></td>
                                                        <td><?php echo  $withdraw_list_team_history['income'] ?></td>
                                                        <td><?php echo  $withdraw_list_team_history['phone'] ?></td>
                                                        <td><?php echo $withdraw_list_team_history['bank_account'] == '' ? '-' : $withdraw_list_team_history['bank_account']; ?></td>
                                                        <td>
                                                            <?php if ($withdraw_list_team_history['bank_name'] == '') : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php echo $withdraw_list_team_history['bank_name']; ?> <br>
                                                                <?php echo $withdraw_list_team_history['bank_number']; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $withdraw_list_team_history['line'] == '' ? '-' : $withdraw_list_team_history['line']; ?></td>
                                                        <td><?php echo  $withdraw_list_team_history['transaction_date'] == '' ? '-' : $withdraw_list_team_history['transaction_date']; ?></td>
                                                        <td>
                                                            <?php if (empty($withdraw_list_team_history['file_name'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href="<?php echo $withdraw_list_team_history['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
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