<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Employee Information</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Employee Information
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
                                <h4 class="card-title">Employee Information</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Resume</th>
                                                    <th>Name</th>
                                                    <th>country</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>postion</th>
                                                    <th>status</th>
                                                    <th>Notification Ban</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($team as $team) { ?>
                                                <tbody>
                                                    <tr>
                                                    <?php 
                                                            $img =  explode(".",$team['file_name']);
                                                        ?>
                                                        <td>
                                                       <?php if($img[1]=='pdf'):?>
                                                        <a href="uploads/resume/<?php echo $team['file_name'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                       <?php else :?>
                                                        <a href="uploads/resume/<?php echo $team['file_name']; ?>"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                       <?php endif;?>
                                                        </td>
                                                        <td><?php echo $team['name']; ?></td>
                                                        <?php $country = $this->db->get_where('countries', ['id' => $team['country_id']])->result_array(); ?>
                                                        <?php foreach ($country as $country) { ?>
                                                            <td><?php echo $country['countryName']; ?></td>
                                                        <?php  } ?>
                                                        <td><?php echo $team['email']; ?></td>
                                                        <td><?php echo $team['phone']; ?></td>
                                                      
                                                            <td>
                                                            <?php $position = $this->db->get_where('tbl_job_position', ['id_team' => $team['id']])->result_array(); ?>
                                                        <?php foreach ($position as $position) { ?>
                                                            <?php $name_position = $this->db->get_where('tbl_item_position', ['id' => $position['job_position']])->result_array(); ?>
                                                            <?php foreach ($name_position as $name_position) { ?>
                                                               <br> <?php echo $name_position['name_item']; ?>
                                                               <?php } ?>
                                                        <?php } ?>
                                                            </td>
                                                     
                                                        <?php if ($team['status'] == 0) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Pending approval
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=1">approve</a>
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=2">Not approved</a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        <?php elseif ($team['status'] == 1) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        approve
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                      
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=3">Ban User</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <?php elseif ($team['status'] == 3) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Ban User
                                                                    </button>
                                                                    <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=0">Pending approval</a>
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=1">approve</a>
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=2">Not approved</a>
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=3">Ban User</a>

                                                                    </div> -->
                                                                </div>
                                                            </td>


                                                        <?php else : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Not approved
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="status_team?id=<?php echo $team['id']; ?>&status=1">approve</a>
                                                                       

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        <?php endif; ?>
                                                            <td>
                                                          <?php if($team['status_notification_ban']==1):?>
                                                            <button type="button" data-toggle="modal" data-target="#" class="btn btn btn-danger mr-1 mb-1">Notification Ban</button>
                                                          <?php else:?>

                                                            <button type="button" data-toggle="modal" data-target="#exampleModalk<?php echo $team['id']; ?>" class="btn btn-warning mr-1 mb-1">Notification Ban</button>
                                                          <?php endif;?>
                                                            <div class="modal fade" id="exampleModalk<?php echo $team['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Notification Ban </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                      <form action="NotificationBan" method="POST">
                                                                      <input type="text" value="<?php echo $team['id']; ?>" name="id" hidden>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note</label>
                                                                                <textarea name="note_ban"  cols="20" rows="5" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                      
                                                                        <button type="submit" class="btn btn-primary mr-1 mb-1"style="MARGIN: 15px;">Notification Ban</button>
                                                                       
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    </form>
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
<!-- END: Content-->
<SCRIPT language="JavaScript">
// function timerefresh(t)
// {

// if(t==0)
// {
// window.location.reload();
// }
// else
// {
// t--;
// }
// window.setTimeout("timerefresh('"+t+"')",2000)
// }

// timerefresh(5);
</script>