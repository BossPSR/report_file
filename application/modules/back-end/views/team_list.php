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
                                                    <th>image</th>
                                                    <th>Name</th>
                                                    <th>country</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>status</th>

                                                </tr>
                                            </thead>
                                            <?php foreach ($team as $team) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="uploads/resume/<?php echo $team['file_name']; ?>" alt="" style="width: 250px"></td>
                                                        <td><?php echo $team['name']; ?></td>
                                                        <?php $country = $this->db->get_where('countries', ['id' => $team['country_id']])->result_array(); ?>
                                                        <?php foreach ($country as $country) { ?>
                                                            <td><?php echo $country['countryName']; ?></td>
                                                        <?php  } ?>
                                                        <td><?php echo $team['email']; ?></td>
                                                        <td><?php echo $team['phone']; ?></td>
                                                        <?php if ($team['status'] == 0) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Check
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                              
                                                        <?php elseif($team['status'] == 1) : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Confirm
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                       <?php else : ?>
                                                            <td>
                                                                <div class="dropdown ">
                                                                    <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Reject
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            
                                                        <?php endif; ?>

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