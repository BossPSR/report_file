<?php $reject =  $this->db->get_where('tbl_upload_store', ['userId' => $team['id']])->result_array(); ?>
<!--services img area-->
<div class="services_gallery mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="single_services">

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="single_services listProfile">

                    <div class="image_profile">
                        <h2 class="text-center my-income">
                            <div class="name_user m17"><i class="fa fa-user"></i> <?= $this->lang->line("name"); ?> : <?php echo $team['name']; ?></div>
                        </h2>
                        <div class="image_PF">
                            <div class=""><?php  ?>
                                <a href="#exampleModalCenter1" data-toggle="modal"><img class="profile" src="<?php echo (empty($team['file_name'])) ? "public/image/user.png" :  "$team[file_name]"; ?>" alt=""></a>
                                <!-- <div class="edit_name_user"><a href="#"><i class="fa fa-edit"></i>  Edited</a></div> -->
                            </div>
                        </div>
                        <div class="menu_in_image">
                        </div>
                    </div>
                    <div class="single_banner menu_profileList">
                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <?php $couty = $this->db->get_where('countries', ['id' => $team['country_id']])->row_array(); ?>
                                <div class="list_menu" style="font-weight:bold;;font-size:18px;margin-top:-20px;margin-bottom:20px;">
                                    <?php echo $couty['countryName']; ?>
                                </div>
                                <div class="result_menu">
                                    <?php echo $team['email']; ?>
                                </div>
                                <div class="list_menu">
                                    <a class="btn btn-warning" style="color:#fff;" data-toggle="modal" data-target="#exampleModalTeam">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_banner menu_profileList">
                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <div class="result_menu">0</div>
                                <div class="list_menu">My Job</div>
                            </div>
                            <?php
                            $this->db->select('*,sum(tbl_upload_order.status_delivery) as sum_delivery');
                            $this->db->from('tbl_upload_team');
                            $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
                            $this->db->where('tbl_upload_team.teamId', $team['IdTeam']);
                            $this->db->where('tbl_upload_order.status_delivery', 1);

                            $sm_del = $this->db->get()->row_array();
                            ?>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($team['income']); ?></div>
                                <div class="list_menu">Income</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_services">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Choose a profile icon.</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row text-center">
                <div class="col-md-12"></div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="account_form">
                        <hr>
                        <form>
                            <p>
                                <input type="hidden" name="id_logo" value="<?php echo $team['id']; ?>">
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/1.png"><img src="public/frontend/assets/img/profile/1.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/2.png"> <img src="public/frontend/assets/img/profile/2.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/9.jpg"><img src="public/frontend/assets/img/profile/9.jpg" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/8.jpg"><img src="public/frontend/assets/img/profile/8.jpg" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/4.png"><img src="public/frontend/assets/img/profile/4.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/5.png"><img src="public/frontend/assets/img/profile/5.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/6.png"><img src="public/frontend/assets/img/profile/6.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="My-profile_team_edit?logo=public/frontend/assets/img/profile/7.png"><img src="public/frontend/assets/img/profile/7.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title">Reject Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p><input type="checkbox" name="i_accept" id="i_accept" onclick='handle(this);' /> ยอมรับเงื่อนไข</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="accept" disabled>Accept</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelTeam" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="My-profile-team-update" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" name="id" value="<?php echo $team['id']; ?>">
                        <input type="text" class="form-control" name="name" value="<?php echo $team['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Passport</label>
                        <input type="text" class="form-control" name="passport" value="<?php echo $team['passport']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $team['phone']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="country" class="form-control" required>
                            <option value="<?php echo $couty['id']; ?>"><?php echo $couty['countryName']; ?></option>
                            <?php $coc = $this->db->get_where('countries', ['id !=' => $team['country_id']])->result_array(); ?>
                            <?php foreach ($coc as $coc) { ?>
                                <option value="<?php echo $coc['id'] ?>"><?php echo $coc['countryName']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Bank Account</label>
                        <input type="text" class="form-control" name="bank_account" value="<?php echo $team['bank_account']; ?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="c_password" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('save_ss')) : ?>
    <script type='text/javascript'>
        swal("Good job!", "You clicked the button!", "success");
    </script>
<?php endif; ?>