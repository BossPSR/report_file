<!--wishlist area start -->
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                <article class="single_upload input-upload">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab">
                                <label for="" class="font-size-upload">You can buy document. </label>
                                <form action="delivery_file" method="POST" class="dropzone" id="fileupload">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload.<br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                        <input type="text" id="selected2" class="position2" name="select_items" hidden>

                                    </div>
                                    <div>
                                        <!-- <input type="date" name="date" id="" class="form-control" onchange="myFunction()"> -->
                                    </div>
                                </form>
                                <br>
                                <label for="">Choose the order to pick up the document.</label>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                                    <div class="row">
                                        <select name="select_item" class="form-control" id="position1">
                                            <option selected disabled>-- SELECT ITEM --</option>
                                            <?php foreach ($delivery as $delivery) { ?>
                                                <option value="<?php echo $delivery['order_id']; ?>"><?php echo $delivery['order_id']; ?></option>
                                            <?php } ?>
                                            <?php foreach ($delivery_feed as $delivery_feed) { ?>
                                                <option value="<?php echo $delivery_feed['order_feed']; ?>"><?php echo $delivery_feed['order_feed'] . ' ' . "(Feedback)"; ?></option>
                                            <?php } ?>
                                        </select>

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
            <div class="col-3"></div>
        </div>
    </div>
</div>
<!--wishlist area end -->

<script>
    $("#position1")
        .change(function() {
            var value = $(this).val();
            $(".position2").val(value);
        })
        .change();
</script>

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#fileupload", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    $('#uploadfiles').click(function() {
        var x = document.getElementById("selected2").value;
        if (myDropzone.files < 1 || x == '') {
            swal("Warning!", "Please fill out the information.", "error", {
                button: false,
            });
        } else {
            myDropzone.processQueue();
            myDropzone.on("queuecomplete", function(file, res) {
                swal("Good job!", "Upload for data successfull", "success", {
                    button: false,
                });
                setTimeout("location.reload(true);", 1000);
            });
        }
    });
</script>