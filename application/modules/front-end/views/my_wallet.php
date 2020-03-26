<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">My wallet</h2>
<hr class="line_package">
<br>
<!--services img area-->
<div class="services_gallery mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-10 col-md-10">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            Account balance
                        </div>
                        <div class="p-15 text-center color-p">
                            $ <?php echo number_format($user['cash']); ?>
                        </div>
                        <div class="pb-18 text-center">
                            <button type="button" class="btn btn-primary button-p">Top-up</button>
                            <button type="button" class="btn btn-outline-dark button-100">Withdraw</button>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 wall-center shadow-b mtp-20">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Top-up History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">History Withdraw</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ประวัติการใช้จ่าย</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Transfer amount</th>
                                            <th scope="col">Bill</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col">Update Time</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($deposit as $key => $deposit) : ?>
                                            <tr>
                                                <th scope="row">฿<?php echo $deposit['price']; ?></th>
                                                <td><?php echo $deposit['bill_id']; ?></td>
                                                <td class="text-center">
                                                    <?php if ($deposit['status'] == 1) : ?>
                                                        <span class="badge badge-pill badge-warning">Wait</span>
                                                    <?php elseif ($deposit['status'] == 2) : ?>
                                                        <span class="badge badge-pill badge-success">Success</span>
                                                    <?php else : ?>
                                                        <span class="badge badge-pill badge-danger">Failed</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo $deposit['create_at']; ?></td>
                                                <td><?php echo $deposit['note']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Transfer amount</th>
                                            <th scope="col">Bill</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col">Update Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($withdraw as $key => $withdraw) : ?>
                                            <tr>
                                                <th scope="row">฿<?php echo $withdraw['price']; ?></th>
                                                <td><?php echo $withdraw['bill_id']; ?></td>
                                                <td class="text-center">
                                                    <?php if ($withdraw['status'] == 1) : ?>
                                                        <span class="badge badge-pill badge-warning">Wait</span>
                                                    <?php elseif ($withdraw['status'] == 2) : ?>
                                                        <span class="badge badge-pill badge-success">Success</span>
                                                    <?php else : ?>
                                                        <span class="badge badge-pill badge-danger">Failed</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo $withdraw['create_at']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table mt-15">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Account type</th>
                                            <th scope="col">Income-Expense</th>
                                            <th scope="col">Amount of money</th>
                                            <th scope="col">All current balances</th>
                                            <th scope="col">The amount that is currently available</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">บัญชีไทยพาณิชย์</th>
                                            <td>฿230</td>
                                            <td>฿500</td>
                                            <td>฿500</td>
                                            <td>฿500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
    </div>
</div>