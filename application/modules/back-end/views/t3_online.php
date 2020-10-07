<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">T3 online Request</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">T3 online Request
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
                                <h4 class="card-title">T3 online Request</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th>potion</th>
                                                    <th>Name</th>
                                                    <th>country</th>
                                                    <th>TN</th>
                                                    <th>Field of study</th>
                                                    <th>interview date</th>
                                                    <th>status</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($team as $team) { ?>
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <?php if ($team['status'] == 0) : ?>
                                                                <span class="badge badge-pill badge-warning">Pending approval</span>
                                                            <?php elseif ($team['status'] == 1) : ?>
                                                                <span class="badge badge-pill badge-success">approve</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-pill badge-danger">not approve</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $team['name']; ?></td>
                                                        <?php $country = $this->db->get_where('countries', ['id' => $team['country_id']])->row_array(); ?>

                                                        <td><?php echo $country == true ? $country['countryName'] : '-'; ?></td>
                                                        <td><?php echo $team['IdTeam']; ?></td>
                                                        <td>
                                                            <?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $team['job_position']])->row_array(); ?>
                                                            <?php echo $name_position['name_item']; ?>
                                                        </td>
                                                        <td><?php echo $team['date_interview'] == '' ? '-' : $team['date_interview'] ; ?></td>
                                                        <td>
                                                            <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $team['id']; ?>" class="btn btn-info mr-1 mb-1"><i class="feather icon-mail"></i> Send Email</button>
                                                            <div class="modal fade" id="exampleModalb<?php echo $team['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Send Email (<?php echo $name_position['name_item']; ?>)</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label for="" style="font-size: 16px;">File Document </label>
                                                                            <form action="fileUpload_team_email" class="dropzone dropzone-area" id="maindropzoneemail<?php echo $team['id']; ?>">
                                                                                <input type="datetime-local" id="datevalue<?php echo $team['id']; ?>" name="daate" value="<?= date('Y-m-d') ?>" hidden>
                                                                                <input type="text" id="team_id" name="team_id" value="<?php echo $team['IdTeam']; ?>" hidden>
                                                                                <input type="text" name="name_item" value="<?php echo $name_position['name_item']; ?>" hidden>

                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                            </form>
                                                                            <div class="form-group mt-2">
                                                                                <label for="" style="font-size: 16px;">Pick an interview date</label>
                                                                                <input type="datetime-local" class="form-control" id="date<?php echo $team['id']; ?>" name="" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>">
                                                                            </div>
                                                                        </div>

                                                                        <button type="button" id="uploadsfile<?php echo $team['id']; ?>" class="btn btn-primary mr-1 mb-1" style="MARGIN: auto;"> Send email</button>

                                                                    </div>
                                                                    <div class="modal-footer">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                $("#date<?php echo $team['id']; ?>").change(function() {
                                                                    var value = $(this).val();
                                                                    $("#datevalue<?php echo $team['id']; ?>").val(value);
                                                                }).change();
                                                            </script>
                                                            <script>
                                                                Dropzone.autoDiscover = false;
                                                                var myDropzone<?php echo $team['id']; ?> = new Dropzone("#maindropzoneemail<?php echo $team['id']; ?>", {
                                                                    autoProcessQueue: false,
                                                                    maxFiles: 5,
                                                                    addRemoveLinks: true,
                                                                    parallelUploads: 5, // Number of files process at a time (default 2)
                                                                });

                                                                document.getElementById("uploadsfile<?php echo $team['id']; ?>").addEventListener("click", function() {
                                                                    // myDropzone.processQueue();
                                                                    var datetime = $('#date<?php echo $team['id']; ?>').val();
                                                                    if (myDropzone<?php echo $team['id']; ?>.files == 0) {
                                                                        swal("warning!", "empty drop file", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }

                                                                    if (datetime == '') {
                                                                        swal("warning!", "empty interview date", "warning", {
                                                                            button: true,
                                                                        });
                                                                    }


                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        data: {
                                                                            id: '<?php echo $team['id']; ?>',
                                                                            idteam: '<?php echo $team['IdTeam']; ?>',
                                                                            datetime: datetime,
                                                                        },
                                                                        url: 'fileUpload_team_email_date',
                                                                        success: function(data) {
                                                                            myDropzone<?php echo $team['id']; ?>.processQueue();
                                                                            myDropzone<?php echo $team['id']; ?>.on("queuecomplete", function(file, res) {
                                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                                    button: false,
                                                                                });
                                                                                setTimeout(function() {
                                                                                    location.href = "T3_online"
                                                                                }, 1000);
                                                                            });
                                                                        }
                                                                    });

                                                                });
                                                            </script>

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
        </div>
        </section>
        <!--/ Zero configuration table -->



    </div>
</div>
</div>