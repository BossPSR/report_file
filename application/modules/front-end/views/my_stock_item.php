<br>
<h2 class="text-center" style="margin-top: 15px;">My Stock</h2>
<hr class="line_package">
<br>
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row text-center">
            <?php foreach ($item as $item) { ?>
                <?php if ($item >= 2) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
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