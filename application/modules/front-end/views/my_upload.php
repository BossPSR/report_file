<br>
<h2 class="text-center" style="margin-top: 15px;">My-Upload</h2>
<hr class="line_package">
<br>
<?php if (!empty($documents)) :  ?>
    <div class="container">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-lg-12 col-md-12 col-12 ">
                <article class="single_upload input-upload">
                    <div class="row">
                        <?php foreach ($documents as $key => $documents) : ?>
                            <div class="col-3 text-right margin-5 product">
                                <div style="position:absolute;top:-30px;">
                                  
                                       Preview
                                    
                                </div>
                                <div class="boxdel">
                                    <a href="after-unlocks?id=<?php echo $documents['upload_id']; ?>" class="btn btn-info" class="boxdel"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 26px;"></i></a>
                                    <a href="my-upload-edit?upload_preview_id=<?php echo $documents['upload_id']; ?>" class="btn btn-warning" class="boxdel"><i class="fa fa-pencil" aria-hidden="true" style="font-size: 26px;"></i></a>
                                    <a onclick="confirmalert2('<?php echo $documents['id']; ?>')" class="btn btn-danger" class="boxdel delete-s remove"><i class="fa fa-trash-o" aria-hidden="true" style="font-size: 26px;"></i></a>
                                </div>
                                <iframe src="<?php echo $documents['path']; ?>" width="100%" height="440px"></iframe>
                                <div style="color: #a7a7a7; display:flex;justify-content:space-around;">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                                    <span><i class="fa fa-unlock-alt" aria-hidden="true"> 5,000</i></span>
                                    <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <br>

<?php else : ?>

    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No file</h1>
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