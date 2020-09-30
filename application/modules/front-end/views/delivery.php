<br>
<h2 class="text-center" style="margin-top: 15px;">ส่งงานที่นี่</h2>
<hr class="line_package">
<!--wishlist area start -->
<style>
    .dil {
        border-radius: 50%;
        font-size: 18px;
        color: #e60000;
        border: 1px solid;
        width: 25px;
        height: 25px;
        padding: 1px 0px 0px 0;
        box-shadow: 0px 0px 2px 0px;
    }

    .dil:hover {
        background-color: #ffd1d1;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        /* ...and now for the proper property */
        transition: .5s;
    }

    .tooltips {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltips .tooltiptexts {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 150%;
        left: 50%;
        margin-left: -60px;

        /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
        opacity: 0;
        transition: opacity 1s;
    }

    .tooltips .tooltiptexts::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent black transparent;
    }

    .tooltips:hover .tooltiptexts {
        visibility: visible;
        opacity: 1;
    }
</style>
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ">
                <article class="single_upload input-upload">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab">
                                <h3 for="" class="font-size-upload">New folder </h3>
                                <hr>
                                <form action="new_folder" method="POST">
                                    <div class="form-group">
                                        <label for="" class="">Name folder </label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </form>
                            </div>
                            <hr>
                        </div>

                        <?php if (empty($folder)) : ?>

                            <div class="error_form col-12">
                                <h1 style="font-size: 100px;margin: 0px;">No folder</h1>
                                <h2>Data Not Found</h2>
                            </div>

                        <?php else : ?>

                            <?php $op = []; ?>
                            <?php foreach ($folder as $key => $folder) : ?>
                                <div class="col-12 col-md-4 mt-3 text-center">

                                    <img src="uploads/folder-new.png" alt="" data-toggle="modal" data-target="#folder<?php echo $folder['id'] ?>" style="cursor: pointer;">

                                    <p>
                                        <?php echo $folder['name_folder'] ?>
                                        <a href="delete_folder?id=<?= $folder['id']; ?>" class="tooltips">
                                            <i class="fa fa-times dil" aria-hidden="true"></i>
                                            <span class="tooltiptexts">ปุ่มลบโฟร์เดอร์</span>
                                        </a>
                                    </p>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="folder<?php echo $folder['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="Label">You can buy document.</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="delivery_file" method="POST" class="dropzone" id="fileupload<?= $folder['id']; ?>">
                                                            <div class="dz-message needsclick">
                                                                Drop files here or click to upload.<br>
                                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                <input type="text" id="selected2" class="position2" name="select_items" hidden>
                                                                <input type="text" value="<?php echo $folder['id']; ?>" name="idfolder" hidden>
                                                            </div>
                                                            <div>
                                                                <!-- <input type="date" name="date" id="" class="form-control" onchange="myFunction()"> -->
                                                            </div>
                                                        </form>
                                                        <br>
                                                    </div>
                                                    <div class="col-12 text-right" style="padding-top: 10px;">
                                                        <!-- <button type="button" class="btn btn-info" onclick="confirmalert_buy();">SUBMIT</button> -->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $op[] = $folder['id']; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>

                        <div class="col-12 mt-3">
                            <hr>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-2">
                            <label for=""> Select Order </label>
                            <select name="select_item" class="form-control" id="position1">
                                <option selected disabled>-- SELECT ITEM --</option>
                                <?php foreach ($delivery as $delivery) { ?>
                                    <option value="<?php echo $delivery['order_id']; ?>,<?php echo $delivery['idt']; ?>"><?php echo $delivery['order_id']; ?></option>
                                <?php } ?>
                                <?php foreach ($delivery_feed as $delivery_feed) { ?>
                                    <option value="<?php echo $delivery_feed['ordert']; ?>,<?php echo $delivery_feed['idt']; ?>"><?php echo $delivery_feed['ordert'] . ' ' . "(Feedback)"; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 mt-3 ">
                            <button type="button" class="btn btn-primary w-100 uploadfiles">
                                Upload Files
                            </button>
                        </div>

                    </div>
                </article>
            </div>
            <div class="col-2"></div>
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
<?php if (!empty($op)) { ?>
    <?php foreach ($op as $key => $op) { ?>
        <script type="text/javascript">
            Dropzone.autoDiscover = false;
            var myDropzone<?= $op; ?> = new Dropzone("#fileupload<?= $op; ?>", {
                autoProcessQueue: false,
                maxFiles: 5,
                addRemoveLinks: true,
                parallelUploads: 5, // Number of files process at a time (default 2)
            });

            $('.uploadfiles').click(function() {
                var x = document.getElementById("selected2").value;
                $.ajax({
                    type: 'POST',
                    url: 'order_check_timeout',
                    data: {
                        order: x,
                    },
                    success: function(success) {
                        console.log('1');
                    },
                    error: function(error) {
                        console.log('2');
                    }

                });

                if (myDropzone<?= $op; ?>.files < 1 || x == '') {
                    swal("Warning!", "Please fill out the information.", "error", {
                        button: false,
                    });
                } else {
                    myDropzone<?= $op; ?>.processQueue();
                    myDropzone<?= $op; ?>.on("queuecomplete", function(file, res) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });
                        setTimeout("location.reload(true);", 1000);
                    });
                }

            });
        </script>
    <?php } ?>
<?php } ?>