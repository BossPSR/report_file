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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th>Name</th>
                                                    <th>country</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>postion</th>
                                                    <th>status</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($team as $team) { ?>
                                                <tbody>
                                                    <tr>

                                                        <td><?php echo $team['name']; ?></td>
                                                        <?php $country = $this->db->get_where('countries', ['id' => $team['country_id']])->result_array(); ?>
                                                        <?php foreach ($country as $country) { ?>
                                                            <td><?php echo $country['countryName']; ?></td>
                                                        <?php  } ?>
                                                        <td><?php echo $team['email']; ?></td>
                                                        <td><?php echo $team['phone']; ?></td>

                                                        <td>


                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $team['id']; ?>"><i class="feather icon-users" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $team['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">position</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>

                                                                                    <tr>
                                                                                        <th>Name Position</th>
                                                                                        <th>Tool</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php $position = $this->db->get_where('tbl_job_position', ['id_team' => $team['id']])->result_array(); ?>
                                                                                    <?php foreach ($position as $position) { ?>
                                                                                        <?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $position['job_position']])->result_array(); ?>
                                                                                        <?php foreach ($name_position as $name_position) { ?>
                                                                                            <tr>
                                                                                                <td><?php echo $name_position['name_item'] ?></td>


                                                                                                <?php if ($position['status_approve'] == 0) : ?>
                                                                                                    <td>
                                                                                                        <div class="dropdown ">
                                                                                                            <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                Pending approval
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=1">approve</a>
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=2">Not approved</a>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>

                                                                                                <?php elseif ($position['status_approve'] == 1) : ?>
                                                                                                    <td>
                                                                                                        <div class="dropdown ">
                                                                                                            <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                approve
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=0">Pending approval</a>
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=2">Not approved</a>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                <?php else : ?>

                                                                                                    <td>
                                                                                                        <div class="dropdown ">
                                                                                                            <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                Not approved
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=1">approve</a>
                                                                                                                <a class="dropdown-item" href="status_team_t3?id=<?php echo $position['id']; ?>&status=0">Pending approval</a>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>

                                                                                                <?php endif; ?>


                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    <?php } ?>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>


                                                        <td>
                                                            <button type="button" data-toggle="modal" data-target="#exampleModalb<?php echo $team['id']; ?>" class="btn btn-info mr-1 mb-1"><i class="feather icon-mail"></i> Send Email</button>
                                                            <div class="modal fade" id="exampleModalb<?php echo $team['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Send Email</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label for="" style="font-size: 16px;">File Document </label>
                                                                            <form action="fileUpload_team_email" class="dropzone dropzone-area" id="maindropzoneemail">
                                                                               <input type="text" id="DM2" class="form-control " name="DM" value="" hidden>
                                                                                <input type="text" id="team_id" class="form-control " name="team_id" value="<?php echo $team['IdTeam']; ?>" hidden>
                                                                               
                                                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                                                            </form>
                                                                        </div>

                                                                        <button type="button" id="uploadsfile" class="btn btn-primary mr-1 mb-1"style="MARGIN: auto;"> Send email</button>
                                                                       
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                       
                                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                    </div>
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
<script>
    $("#DM1")
        .change(function() {
            var value = $(this).val();
            $("#DM2").val(value);
        })
        .change();
</script>
<script>
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#maindropzoneemail", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    document.getElementById("uploadsfile").addEventListener("click", function() {
        // myDropzone.processQueue();


        myDropzone.processQueue();
        myDropzone.on("success", function(file, res) {
            swal("Good job!", "Upload for data successfull", "success", {
                button: false,
            });
            setTimeout(function() {
                location.href = "T3_online"
            }, 1000);
        });


    });
</script>