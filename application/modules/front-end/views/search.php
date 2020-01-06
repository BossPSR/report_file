<br>
<h2 class="text-center" style="margin-top: 15px;">Search And Result <h2>
        <hr class="line_package">
        <br>
        <div class="container">
            <div class="row" style="margin-bottom: 50px;">

                <div class="col-lg-12 col-md-12 col-12 ">
                <?php if (!empty($search_code)) :  ?>
                    <article class="single_upload input-upload">
                        <div class="row">
                            <?php foreach ($search_code as $key => $data) { ?>
                                <div class="col-3 text-center margin-5 product">
                                    <label class="price">$ <?php echo $data['price'] ;?>.00</label>
                                    <a href="unlocks?id=<?php echo $data['userId']; ?>&upload_id=<?php echo $data['upload_id'] ;?>">
                                        <div class="blocker"></div>
                                        <iframe src="<?php echo $data['path']; ?>" width="100%" height="440px"></iframe>
                                    </a>
                                    <div class="text-left" style="color: #a7a7a7;">
                                        <?php $_date = explode(" ",$data['create_at']) ?>
                                        <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> <?php echo $_date[0] ; ?></i></span>
                                        <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </article>

                <?php else : ?>
                <!--error section area start-->
                <div class="error_section" style="padding-top: 0px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="error_form">
                                    <h1 style="font-size: 150px;">No document</h1>
                                    <h2>Data Not Found</h2>
                                    <p>Sorry, the file you are looking for does not exist.</p>
                                    <a href="upload">Back to home page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--error section area end-->
                <?php endif; ?>

                </div>

            </div>
        </div>
        <br>