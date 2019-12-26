<!--services img area-->
<div class="services_gallery mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="single_services">

                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="single_services listProfile">

                    <div class="image_profile">
                        <h2 class="text-center my-income">My income</h2>
                        <div class="image_PF">
                            <div class=""><?php  ?>
                                <a href="#exampleModalCenter1" data-toggle="modal"><img class="profile" src="<?php echo (empty($user['file_name'])) ? "public/image/user.png" :  $user['file_name']; ?>" alt=""></a>
                                <!-- <div class="edit_name_user"><a href="#"><i class="fa fa-edit"></i>  Edited</a></div> -->
                            </div>
                        </div>
                        <div class="menu_in_image">
                            <div class="name_user m17"><i class="fa fa-user"></i> Name : <?php echo $user['username']; ?></div>
                            <div class="text-center money"> ยอดคงเหลือ : ฿<?php echo number_format("487515"); ?></div>
                        </div>
                    </div>



                    <div class="single_banner menu_profileList">

                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format("145201"); ?></div>
                                <div class="list_menu">Follower</div>
                            </div>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format("1527"); ?></div>
                                <div class="list_menu">Download</div>
                            </div>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format("150"); ?></div>
                                <div class="list_menu">Upload</div>
                            </div>
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format("47"); ?></div>
                                <div class="list_menu">Rejected</div>
                            </div>

                        </div>

                        <!-- <div class="menu_profileRow">
                           
                        </div>  -->
                    </div>



                </div>
            </div>
            <div class="col-lg-2 col-md-6">
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
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/6.png"> <img src="public/frontend/assets/img/profile/6.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                                <a href="my-profile_edit?logo=public/frontend/assets/img/profile/7.png"><img src="public/frontend/assets/img/profile/7.png" alt="" style="width: 100px ;margin-bottom: 20px;"></a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>