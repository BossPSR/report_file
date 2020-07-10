<!--slider area start-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">Retrun confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<br>
<h2 class="text-center" style="margin-top: 15px;"> My buy</h2>
<hr class="line_package">
<br>
<!--wishlist area start -->
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                <article class="single_upload input-upload">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab">

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="" class="font-size-upload">You can buy Document. <span style="color:red">( Can select more than 1 file )</span></label>
                                        <form action="buy_upload" class="dropzone" id="fileupload" style="margin-bottom:10px;">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload.<br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" hidden>
                                                <textarea name="detail" class="detail" hidden></textarea>

                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="" class="font-size-upload">You can buy GT Document. <span style="color:red">( Can select more than 1 file )</span></label>
                                        <form action="buy_uploadGT" class="dropzone" id="fileuploadGT">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload.<br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" hidden>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <label for="">More details.</label>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="row">
                                        <textarea name="detail" class="form-control" id="detail2" rows="5"></textarea>
                                    </div>

                                </div>
                                <br>
                                <label for="">Choose the date to pick up the document.</label>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="row">
                                        <input type="date" class="form-control" id="date2" name="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required>
                                    </div>

                                </div>
                                <br>
                                <button type="button" class="btn btn-primary" id='uploadfiles'>
                                    Upload Files
                                </button>
                            </div>
                        </div>
                        <div class="col-12 text-right" style="padding-top: 10px;">
                            <!-- <button type="button" class="btn btn-info" onclick="confirmalert_buy();">SUBMIT</button> -->
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!--wishlist area end -->

<script>
    $(document).ready(function() {
        $("#date2").change(function() {
            var value = $(this).val();

            $("#date").val(value);
        }).keyup();

    });
</script>

<script>
    $(document).ready(function() {
        $("#detail2").change(function() {
            var value = $(this).val();

            $(".detail").val(value);
        }).keyup();

    });
</script>

<script type="text/javascript">
    var x = document.getElementById("date2").value;
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#fileupload", {
            autoProcessQueue: false,
            maxFiles: 5,
            addRemoveLinks: true,
            parallelUploads: 5, // Number of files process at a time (default 2)

        }

    );

    var myDropzone2 = new Dropzone("#fileuploadGT", {
            autoProcessQueue: false,
            maxFiles: 5,
            addRemoveLinks: true,
            parallelUploads: 5, // Number of files process at a time (default 2)

        }

    );
    $('#uploadfiles').click(function() {
        if (myDropzone.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            $.ajax({
                type: 'POST',
                url: 'order_auto',
                data: {
                    status: 1
                },
                success: function(data) {
                    var x = document.getElementById("detail2").value;

                    $.ajax({
                        type: 'POST',
                        url: 'order_auto_morefile_buy',
                        data: {
                            detail: x,
                        },
                        success: function(success) {
                            myDropzone.processQueue();
                            myDropzone.on("queuecomplete", function(file, res) {
                                if (myDropzone2.processQueue()) {
                                    myDropzone2.on("queuecomplete", function(file, res) {
                                        swal("Good job!", "Upload for data successfull", "success", {
                                            button: false,
                                        });
                                        setTimeout("location.reload(true);", 1000);
                                    });
                                } else {
                                    swal("Good job!", "Upload for data successfull", "success", {
                                        button: false,
                                    });
                                    setTimeout("location.reload(true);", 1000);
                                }
                            });
                        }
                    });

                },

            });
        }

    });
</script>