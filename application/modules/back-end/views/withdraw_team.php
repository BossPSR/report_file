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
                                                    <th>Order Id</th>
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
                                                        <td><?php echo $withdraw_team['order_id']; ?></td>
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
                                                                        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#dropteam<?php echo $withdraw_team['idW']; ?>" href="#">ชำระเงินแล้ว</a>
                                                                        <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=3">ยกเลิก</a>
                                                                    </div>
                                                                </div>
                                                            <?php elseif ($withdraw_team['status_id'] == 2) : ?>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        ชำระเงินแล้ว
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="withdraw_status_team?id=<?php echo $withdraw_team['idW']; ?>&status=3">ยกเลิก</a>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        ยกเลิก
                                                                    </button>
                                                                </div>
                                                            <?php endif; ?>
                                                            <!-- Modal Feedback -->
                                                            <div class="modal fade" id="dropteam<?php echo $withdraw_team['idW']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Withdraw Team (<?php echo $withdraw_team['idW']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body" style="text-align:left;">
                                                                            <label for="" class="font-size F-upload">You can drop Document. </label>
                                                                            <form action="img_withdraw_team" class="dropzone" id="fileuploadTeam<?php echo $withdraw_team['idW']; ?>">
                                                                                <div class="dz-message needsclick">
                                                                                    Drop files here or click to upload.<br>
                                                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                                    <input type="hidden" name="id" value="<?php echo $withdraw_team['idW']; ?>">
                                                                                </div>
                                                                            </form>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" id="SubmitW<?php echo $withdraw_team['idW']; ?>" class="btn btn-success">Send</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <script type='text/javascript'>
                                                            Dropzone.autoDiscover = false;
                                                            var myDropzone2<?php echo $withdraw_team['idW']; ?> = new Dropzone("#fileuploadTeam<?php echo $withdraw_team['idW']; ?>", {
                                                                autoProcessQueue: false,
                                                                maxFiles: 1,
                                                                addRemoveLinks: true,
                                                                parallelUploads: 5, // Number of files process at a time (default 2)
                                                            });

                                                            $('#SubmitW<?php echo $withdraw_team['idW']; ?>').click(function() {

                                                                if (myDropzone2<?php echo $withdraw_team['idW']; ?>.files != 0) {
                                                                    myDropzone2<?php echo $withdraw_team['idW']; ?>.processQueue();
                                                                    myDropzone2<?php echo $withdraw_team['idW']; ?>.on("queuecomplete", function(file, res) {
                                                                        swal("Good job!", "Upload for data success Feedback", "success", {
                                                                            button: false,
                                                                        });
                                                                    });
                                                                    setTimeout("location.reload(true);", 1000);
                                                                } else {
                                                                    swal("Good job!", "Upload for data successfull", "success");
                                                                }

                                                            });
                                                        </script>
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