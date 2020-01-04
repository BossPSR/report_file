<br>
<h2 class="text-center" style="margin-top: 15px;">My-Upload</h2>
<hr class="line_package">
<br>
<?php if (!empty($folder)) :  ?>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-12 col-md-12 col-12 ">
            <article class="single_upload input-upload">
                <div class="row">
                    <?php foreach ($folder as $key => $folder) : ?>
                        <div class="col-2 text-right margin-5 product">
                            <a href="my-upload?id=<?php echo  $folder['select_item_id'] ; ?>">
                                <div data-aos="zoom-in" class="text-center "><img style="width: 120px;" class="hvr-grow" src="uploads/folder1.png" alt=""></div>
                                <div class="text-center"><?php echo $folder['name_item']; ?> <span class="badge badge-pill badge-danger"><?php echo $folder['count_'] ; ?></span></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
        </div>
    </div>
</div>
<?php else : ?>

<!--error section area start-->
<div class="error_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error_form">
                    <h1>No Folder</h1>
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