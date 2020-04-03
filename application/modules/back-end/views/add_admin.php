<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_admin">Admin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add Admin</a>
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
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Admin</h4>
                            </div>
                            <form action="back_admin_Admin_add_com" method="POST" >
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Email</label>
                                                <input type="text" name="email"  class="form-control" placeholder="Enter email" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="helpInputTop">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Enter Username"required>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Tel.</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Enter Tel."required>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="helperText">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password"required>

                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Confirm Password</label>
                                                <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Enter Confirm Password"required>
                                            </fieldset>
                                            <span id="message"></span>
                                        </div>
                                       
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Status Admin</label>
                                                <select class="form-control" name="is_admin" required>
                                                    <option value="" selected disabled>Status Admin</option>
                                                    <option value="1">Admin</option>selected
                                                    <option value="2">super Admin</option>
                                                    <option value="3">Administrator</option>
                                           
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput"></label>
                                                <button type="submit" class="btn btn-primary mr-1 mb-1"> Add Admin</button>
                                                <a href="back_admin"><button type="button" class="btn btn-danger mr-1 mb-1">Cancel</button></a>
                                            </fieldset>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>