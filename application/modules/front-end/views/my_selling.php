<br>
<h2 class="text-center" style="margin-top: 15px;">ได้รับคะแนน</h2>
<hr class="line_package">
<br>
<?php foreach ($selling as $key => $data) {
} ?>
<?php if (!empty($data)) : ?>
    <!--wishlist area start -->
    <div class="wishlist_area ">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <span style="font-size:16px;">ค้นหาวันที่ : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
                <div class="col-2">
                    <div class="form-group text-center" style="margin-top: 1rem;">
                        <?php $z = 0  ?>
                        <?php foreach ($selling as $key => $counts) { ?>
                            <?php $z += 1; ?>
                        <?php } ?>
                        <div style="font-size: 21px;font-weight: 500;"><?php echo $z; ?></div>
                        <div>ออร์เดอร์ของฉัน</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 ">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr style="text-align:center;">
                                        <th scope="col" style="width: 100px;">รหัสออร์เดอร์</th>
                                        <th scope="col">วันที่</th>
                                        <th scope="col">คะแนน</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($selling as $key => $selling) { ?>
                                        <?php
                                        $l = 0 ;
                                        $this->db->select('*');
                                        $this->db->from('tbl_upload_store');
                                        $this->db->where('store_id', $selling['store_id']);
                                        $this->db->where('price_file !=', '');
                                        $this->db->where('grade !=', '');
                                        $this->db->group_by('store_id');
                                        $this->db->group_by('section');
                                        $sunall = $this->db->get()->result_array();
                                        foreach ($sunall as $key => $sunall) {
                                            $l += $sunall['price_file'];
                                        }
                                        ?>
                                        <tr style="text-align:center;">
                                            <td><?php echo $selling['store_id']; ?></td>
                                            <td><?php echo date("d F Y", strtotime($selling['create_at'])); ?></td>
                                            <td><?php echo number_format($l); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1 style="font-size: 130px;">ไม่มีประวัติได้รับคะแนน</h1>
                        <!-- <h2>Data Not Found</h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>