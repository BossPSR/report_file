<br>


<h2 class="text-center" style="margin-top: 15px;"> My Sell</h2>

<hr class="line_package">
<br>
<!--wishlist area start -->
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ">
                <article class="single_upload input-upload">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab">
                                <label for="" class="font-size-upload">You can store document. <span style="color:red">( Can select more than 1 file )</span></label>
                                <form action="store_upload" class="dropzone" id="dropzone2">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload.<br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                        <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                        <textarea name="detail" id="detail" hidden></textarea>
                                    </div>
                                </form>
                                <br>
                                <label for="">More details.</label>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <textarea name="detail" class="form-control" id="detail2" rows="5"></textarea>
                                    </div>

                                </div>
                                <!-- Button trigger modal -->
                                <br>
                                <button type="button" id="uploadfiles" class="btn btn-primary">
                                    Upload Files
                                </button>
                                <!-- <input type="button" id='uploadfiles' value='Upload Files'> -->
                            </div>
                        </div>
                        <div class="col-12 text-right" style="padding-top: 10px;">
                            <!-- <button type="button" class="btn btn-info" onclick="confirmalert_buy();">SUBMIT</button> -->
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $("#detail2").change(function() {
            var value = $(this).val();

            $("#detail").val(value);
        }).keyup();

    });
</script>

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#dropzone2", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)

    });



    $('#uploadfiles').click(function() {
        if (myDropzone.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            myDropzone.on("queuecomplete", function(file, res) {
                swal("Good job!", "Upload for data successfull", "success", {
                    button: false,
                });
                setTimeout("location.reload(true);", 800);
            });
            $.ajax({
                type: 'POST',
                url: 'order_auto_sell',
                data: {
                    status: 1
                },
                success: function(data) {
                    myDropzone.processQueue();
                    myDropzone.on("queuecomplete", function(file, res) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });
                        setTimeout("location.reload(true);", 1000);
                    });
                },

            });
        }

    });
</script>