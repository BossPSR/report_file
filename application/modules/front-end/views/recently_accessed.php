<br>
<h2 class="text-center" style="margin-top: 15px;">Recently-Accessed</h2>
<hr class="line_package">
<br>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">

        <div class="col-lg-12 col-md-12 col-12 ">
            <article class="single_upload input-upload">
                <div class="row">
                <?php foreach ($recently as $key => $recently) { ?>
                    <?php $DateT = date('Y-m-d')  ?>
                   <?php  $produm = date('Y-m-d', strtotime('+7 day'. '+'.$recently['created_at']));?>
                   <?php if($DateT >= $produm ) :?>
                       
                    <?php else :?>
                    <div class="col-3 text-right margin-5 product">

                        <iframe src="<?php echo $recently['path']?>" width="100%" height="450px" style="position:relative"></iframe>
                        <?php  $Date = explode(" ",$recently['created_at']) ?>
                        <div style="color: #a7a7a7; display:flex;justify-content:space-around;">
                            <span ><i class="fa fa-clock-o" aria-hidden="true"><?php echo $Date[0] ?></i></span>
                            <span><i class="fa fa-unlock-alt" aria-hidden="true"> 5,000</i></span>
                            <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php } ?>

                </div>
            </article>
        </div>

    </div>
</div>
<br>