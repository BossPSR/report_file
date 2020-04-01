<?php $Team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">My Stock</h2>
<hr class="line_package">
<br>
<h2 class="text-center" style="margin-bottom:15px;"><a class="btn btn-success" data-toggle="modal" data-target="#exampleModalPosition"><i class="fa fa-plus-circle"></i> ADD POSITION</a></h2>
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row text-center">
            <?php foreach ($item as $item) { ?>
                <?php if ($item >= 2) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12" style="margin-bottom:100px;">
                        <a href="My-stock?item=<?php echo base64_encode($item['id']); ?>" class="bn_e"><span><?php echo $item['name_item']; ?></span></a>
                    </div>
                <?php else : ?>
                    <div class="col-xl-12 col-lg-2 col-md-12 col-sm-12">
                        <a href="My-stock?item=<?php echo base64_encode($item['id']); ?>" class="bn_e"><span><?php echo $item['name_item']; ?></span></a>
                    </div>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalPosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-center" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="exampleModalLabel">ADD POSITION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="My-stock-item-add" method="POST">
                <div class="modal-body">


                    <div class="form-group">
                        <input type="text" name="idTeam" value="<?php echo $Team['id']; ?>" hidden>
                        <label>Position</label>
                        <select class="form-control" name="position">
                            <option selected disabled>--- SELECT ---</option>
                            <?php foreach ($item_loop as $item_loop) { ?>
                                <option value="<?php echo $item_loop['id']; ?>"><?php echo $item_loop['name_item']; ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <!-- <h1 style="color:blue;">Data Not Found</h1> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Success</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>