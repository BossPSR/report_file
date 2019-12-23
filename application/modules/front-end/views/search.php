<br>
<h2 class="text-center" style="margin-top: 15px;">Search And Result <h2>
        <hr class="line_package">
        <br>
        <div class="container">
            <div class="row" style="margin-bottom: 100px;">

                <div class="col-lg-12 col-md-12 col-12 ">
                    <article class="single_upload input-upload">
                        <div class="row">
                            <?php foreach ($search_code as $key => $data) { ?>
                                <div class="col-3 text-center margin-5 product">
                                    <label class="price">$ 600.00</label>
                                    <a href="unlocks?id=<?php echo $data['userId']; ?>">
                                        <div class="blocker"></div>
                                        <iframe src="<?php echo $data['path']; ?>" width="100%" height="440px"></iframe>
                                    </a>
                                    <div class="text-left" style="color: #a7a7a7;">
                                        <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                                        <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </article>
                </div>

            </div>
        </div>
        <br>