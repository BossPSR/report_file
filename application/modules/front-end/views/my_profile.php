<?php $reject =  $this->db->get_where('tbl_upload_store', ['userId' => $user['id'], 'is_check' => 1, 'is_accept' => 0])->result_array();; ?>
<!--services img area-->
<style>
    .to {
        position: absolute;
        background-color: #00000029;
        border-radius: 50%;
        align-items: center;
        background-size: 34px 486px;
        background-repeat: no-repeat;
        display: inline-block;
        width: 42px;
        height: 42px;
        background-position: 0 -290px;
        bottom: 43%;
        right: 40%;
        transform: translate(50%, 50%);
        cursor: pointer;
    }
</style>
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
                            <div class="name_user m17"> <i class="fa fa-user" style="color: #282390;"></i>
                                <!-- $this->lang->line("name"); ?>  --> <span style="font-size: 26px;">ชื่อของฉัน</span>
                                : <?php echo $user['username']; ?></div>
                        </h2>

                        <?php $p = $this->db->get_where('tbl_package', ['id' => $user['package_user']])->row_array(); ?>
                        <?php if ($p == true) : ?>
                            <h2 class="text-center my-income" style="color: #40a6ff;font-size: 20px;">
                                <div> <span style="color:#7b7b7b">ชื่อแพ็คเกจของฉัน </span> : <?php echo $p['title_pk']; ?></div>
                                <div> <span style="color:#7b7b7b">ระยะเวลาแพ็คเกจ </span> : <?php echo date("d F Y", strtotime($user['package_start'])); ?> - <?php echo date("d F Y", strtotime($user['package_end'])); ?></div>
                            </h2>
                        <?php else : ?>

                        <?php endif; ?>

                        <div class="image_PF">
                            <img class="profile" src="<?php echo (!isset($user['file_name'])) ? "public/image/user.png" :  $user['file_name']; ?>" alt="">

                            <div class="to" data-toggle="modal" data-target="#photocheck">
                                <i class="fa fa-camera" aria-hidden="true" style="font-size: 24px;padding-top: 8px;"></i>
                            </div>

                        </div>
                        <div class="menu_in_image">
                        </div>
                    </div>
                    <div class="single_banner menu_profileList">
                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <div class="list_menu" style="font-weight:bold;;font-size:18px;margin-top:-20px;margin-bottom:20px;">
                                    <?php echo $user['idUser']; ?>
                                </div>
                                <div class="result_menu">
                                    <?php echo $user['email']; ?>
                                    <a class="btn btn-warning" style="color:#fff;margin-left:10px;" data-toggle="modal" data-target="#exampleModalUser" data-toggled="tooltip" data-placement="top" title="Edit (แก้ไข) ">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_banner menu_profileList">
                        <div class="menu_profileRow">
                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($user['score']); ?></div>
                                <div class="list_menu">คะแนนสะสม</div>
                            </div>
                            <div class="result_list_menu">
                                <div class="result_menu">
                                    <?php
                                    $numScore = 0;

                                    $this->db->select('*');
                                    $this->db->from('tbl_user');
                                    $this->db->where('idUser', $user['idUser']);
                                    $numScore = 0;
                                    $scoreListNum = $this->db->get()->result_array();
                                    foreach ($scoreListNum as $scoreListNum) {
                                        $numScore += $scoreListNum['score'];
                                    }

                                    $discountUser = $user['score'] / 10;
                                    ?>
                                    <?php echo $discountUser; ?>%

                                </div>
                                <div class="list_menu">ส่วนลด</div>
                            </div>

                            <?php
                            $numUp = 0;
                            $this->db->select('*');
                            $this->db->from('tbl_upload_order');
                            $this->db->where('userId', $user['idUser']);
                            $this->db->where('is_check', 0);
                            $this->db->group_by('order_id');
                            $coup = $this->db->get()->result_array();
                            foreach ($coup as $coup) {
                                $numUp += 1;
                            }
                            ?>

                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($numUp); ?></div>
                                <div class="list_menu">ข้อมูลออร์เดอร์</div>
                            </div>

                            <?php
                            $numCost = 0;
                            $this->db->where('is_check', 0);
                            $this->db->group_by('store_id');
                            $cost = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser']])->result_array();
                            foreach ($cost as $cost) {
                                $numCost += 1;
                            }
                            ?>

                            <div class="result_list_menu">
                                <div class="result_menu"><?php echo number_format($numCost); ?></div>
                                <div class="list_menu">ข้อมูลคะแนน</div>
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
<div class="modal fade" id="exampleModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลส่วนตัว</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="My-profile-update" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="form-group">
                        <label for="">ประเทศ</label>
                        <input type="text" class="form-control" name="countries" value="<?php echo $countries['countryName']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">ชื่อ - นามสกุล</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $user['username']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">หมายเลขโทรศัพท์</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $user['phone']; ?>" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">รหัสผ่านเก่าของฉัน </label>
                        <input type="password" class="form-control" name="oldpassword" value="">
                    </div>
                    <div class="form-group">
                        <label for="">รหัสผ่านใหม่ของฉััน</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="">ยืนยันรหัสผผ่านใหม่</label>
                        <input type="password" class="form-control" name="c_password" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                    <button type="submit" class="btn btn-primary">แก้ไขเพิ่มเติม </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="photocheck" tabindex="-1" role="dialog" aria-labelledby="exampleModalUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="exampleModalLabel">รูปโปรไฟล์ </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="My-photo-update" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="form-group text-center">
                        <img class="profile" src="<?php echo (empty($user['file_name'])) ? "public/image/user.png" :  $user['file_name']; ?>" alt="" style="width: 150px;height: 150px;">
                    </div>
                    <div class="form-group">
                        <label for="">เปลี่ยนรูปโปรไฟล์ </label>
                        <input type="file" class="form-control" name="profile" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
                    <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
</div>


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