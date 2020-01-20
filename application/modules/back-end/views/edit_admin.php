<!-- BEGIN: Content-->
<?php $id = $this->input->get('id') ?>
<?php  $admin = $this->db->get_where('tbl_admin',['id'=>$id])->row_array(); ?>
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
                                <li class="breadcrumb-item"><a href="#">Edit Admin</a>
                                </li>
                            </ol>
                        </div>
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
                                <h4 class="card-title">Edit Admin</h4>
                            </div>
                            <form action="back_admin_edit_save" method="POST" >
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <input type="hidden" name="id" value="<?php echo $admin['id']; ?>" > 
                                                <label for="basicInput">Email</label>
                                                <input type="text" name="email"  value="<?php echo $admin['email']; ?>" class="form-control" placeholder="Enter email" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="helpInputTop">Username</label>
                                                <input type="text" class="form-control" value="<?php echo $admin['username']; ?>" name="username" placeholder="Enter Username">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Tel.</label>
                                                <input type="text" class="form-control" value="<?php echo $admin['phone']; ?>" name="phone" placeholder="Enter Tel.">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="helperText">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">

                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Confirm Password</label>
                                                <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Enter Confirm Password">
                                            </fieldset>
                                            <span id="message"></span>
                                        </div>
                                       
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput">Status Admin</label>
                                                <select class="form-control" name="is_admin">
                                                    <option value="" selected disabled>Status Admin</option>
                                                    <option value="1" <?php if ($admin['is_admin'] == '1') {echo 'selected';} ?>>Admin</option>
                                                    <option value="2"<?php if ($admin['is_admin'] == '2') {echo 'selected';} ?>>super Admin</option>
                                                    <option value="3"<?php if ($admin['is_admin'] == '3') {echo 'selected';} ?>>Administrator</option>
                                           
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <label for="disabledInput"></label>
                                                <button type="submit" class="btn btn-warning mr-1 mb-1"> Edit Admin</button>
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