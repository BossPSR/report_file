<?php $reject =  $this->db->get_where('tbl_upload_store', ['userId' => $user['id'], 'is_check' => 1, 'is_accept' => 0])->result_array();; ?>
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
                            <div class="name_user m17"><i class="fa fa-user"></i><?= $this->lang->line("name"); ?> : <?php echo $user['username']; ?></div>
                        </h2>
                        <div class="image_PF">
                            <div class=""><?php  ?>
                                <a href="#exampleModalCenter1" data-toggle="modal"><img class="profile" src="<?php echo (empty($user['file_name'])) ? "public/image/user.png" :  $user['file_name']; ?>" alt=""></a>
                                <!-- <div class="edit_name_user"><a href="#"><i class="fa fa-edit"></i>  Edited</a></div> -->
                            </div>
                        </div>
                        <div class="menu_in_image">
                        </div>
                    </div>
                    <div class="single_banner menu_profileList">
                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($user['score']); ?></div>
                                <div class="list_menu">Score</div>
                            </div>
                            <div class="result_list_menu">
                                <div class="result_menu">
                                    <?php if ($user['score'] < '100') : ?>
                                        0%
                                    <?php elseif ($user['score'] <= '199') : ?>
                                        10%
                                    <?php elseif ($user['score'] <= '299') : ?>
                                        20%
                                    <?php elseif ($user['score'] <= '399') : ?>
                                        30%
                                    <?php elseif ($user['score'] <= '499') : ?>
                                        40%
                                    <?php else : ?>
                                        50%
                                    <?php endif; ?>
                                </div>
                                <div class="list_menu">Discount</div>
                            </div>
                            <?php
                            $this->db->select('*,COUNT(userId) as co');
                            $this->db->from('tbl_upload_order');
                            $this->db->where('userId', $user['idUser']);
                            $this->db->group_by('order_id');

                            $coup = $this->db->get()->row_array();
                            ?>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($coup['co']); ?></div>
                                <div class="list_menu">Upload</div>
                            </div>
                            <?php
                            $numCost = 0;
                            $cost = $this->db->group_by('store_id')->get_where('tbl_upload_store',['userId' => $user['idUser']])->result_array();
                            foreach ($cost as $cost) {
                                if (isset($cost['grade'])) {
                                    $numCost += 1;
                                }
                            }
                            ?>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($numCost); ?></div>
                                <div class="list_menu">Seller</div>
                            </div>
                        </div>
                        <!-- <div class="menu_profileRow"></div>  -->
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
                                <input type="hidden" name="id_logo" value="<?php echo $user['id']; ?>">
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/1.png"><img src="public/frontend/assets/img/profile/1.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/2.png"> <img src="public/frontend/assets/img/profile/2.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/9.jpg"><img src="public/frontend/assets/img/profile/9.jpg" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/8.jpg"><img src="public/frontend/assets/img/profile/8.jpg" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/4.png"><img src="public/frontend/assets/img/profile/4.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/5.png"><img src="public/frontend/assets/img/profile/5.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/6.png"><img src="public/frontend/assets/img/profile/6.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/7.png"><img src="public/frontend/assets/img/profile/7.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
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
<?php if ($this->session->flashdata('save_ss')) : ?>
    <script type='text/javascript'>
        swal("Good job!", "You clicked the button!", "success");
    </script>
<?php endif; ?>


<?php foreach ($reject as $key => $reject) { ?>
    <?php if ($reject && $reject['is_check'] != 0) : ?>
        <!--wishlist area end -->
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#staticBackdrop').modal('show')
            });
        </script>
        <script type="text/javascript">
            $("#i_accept").click(function handle(cb) {
                if ($(this).prop("checked") == true) {
                    $('#accept').prop('disabled', false);
                } else {
                    $('#accept').prop('disabled', true);
                }
            });
        </script>
        <script type="text/javascript">
            $('#accept').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'accept_status',
                    data: {
                        status: 1,
                        id: <?php echo $reject['userId']; ?>
                    },
                    success: function(data) {
                        if (data > 0) {
                            $('#staticBackdrop').modal('hide');
                        }
                    }
                });
            });
        </script>
    <?php endif; ?>
<?php } ?>