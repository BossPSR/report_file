<?php $Team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<style>
    .cssd {
        background-image: url(public/image/books-2463779_1920.png);
        width: 100%;
        margin: 0 auto;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: repeat-y;

    }

    .cssd::before {
        content: " ";
        background-color: rgba(33, 35, 49, 0.76);
    }
</style>
<section class="cssd">
    <br>
    <h2 class="text-center" style="margin-top: 15px;color: white;">Order List</h2>
    <hr class="line_package">
    <br>
    <?php $dd; ?>
    <?php $cc = $countcancel['ccancel']; ?>
    <?php $ti = $countcancel['teamid']; ?>
    <?php if ($countcancel['create_at'] > date("Y-m-d") && $cc >= '2') : ?>
        <div class="text-center wishlist_area"> <span style="color:red;font-size: 24px;"> ท่านยกเลิกออเดอร์เกิน 2 ครั้ง คุณไม่สามารถรับ Order ได้จนถึงวันที่ <?= $dd; ?> </span> </div>
    <?php else : ?>
        <h2 class="text-center" style="margin-bottom:15px;"><a class="btn btn-success" data-toggle="modal" data-target="#exampleModalPosition"><i class="fa fa-plus-circle"></i> ADD POSITION</a></h2>

        <div class="wishlist_area mt-60">
            <div class="container" style="max-width: 1000px;">
                <div class="row text-center mt-60">
                    <?php foreach ($item as $item) { ?>
                        <?php if ($item >= 2) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12" style="margin-bottom:50px;margin-top:50px;">
                                <a href="My-stock?item=<?php echo base64_encode($item['id']); ?>" style="background: aliceblue;" class="bn_e"><span style="color: black;"><?php echo $item['name_item']; ?></span></a>
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

    <?php endif; ?>
</section>
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

<?php if ($cc >= '2') : ?>
    <script>
        function getDatacancel() {
            $.ajax({
                    url: "cancel_auto",
                    type: "POST",
                    data: {
                        team: '<?php echo $countcancel['teamid']; ?>',
                        date: '<?php echo $dd; ?>',
                    }
                })
                .success(function(result) {
                    console.log(result);
                    location.href = "My-stock-Item"
                });

        }

        setInterval(getDatacancel, 50000); // 1000 = 1 second
    </script>

<?php else : ?>

<?php endif; ?>