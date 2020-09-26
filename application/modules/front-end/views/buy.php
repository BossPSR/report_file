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
                <p>เพื่อประโยชน์สูงสุดของท่านในการสั่งออร์เดอร์จากทางระบบ <br>กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าท่านได้อัปโหลดไฟล์ ทั้งฝั่งซ้ายและขวาอย่างถูกต้อง ฝั่งซ้ายคือ รายละเอียดคำสั่งงาน ฝั่งขวาคือ ข้อมูลหรือตัวอย่างประกอบ(ถ้ามี)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<br>
<h2 class="text-center" style="margin-top: 15px;"> My buy </h2>
<hr class="line_package">
<br>
<!--wishlist area start -->
<div class="wishlist_area mt-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                <div class="text-center">
                    <label style="color:red;" class=" font-size-upload">ในการสั่งออร์เดอร์แต่ล่ะครั้งต้องเป็นออร์เดอร์เดียวกันเท่านั้น <span> หากท่านต้องการสั่งออร์เดอร์มากกว่า1ออร์เดอร์ท่านสามารถกดสั่งได้ในครั้งต่อไป</span></label>
                </div>
                <article class="single_upload input-upload">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="" class="font-size-upload">You can buy Document. <span style="color:red">( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )</span></label>
                                        <form action="buy_upload" class="dropzone" id="fileupload" style="margin-bottom:10px;">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload.<br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d', strtotime(" + 1 days ")); ?>" hidden>
                                                <textarea name="detail" class="detail" hidden></textarea>

                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="" class="font-size-upload">You can buy GT Document. <span style="color:red">( คุณสามารถDrop ได้จำนวนสูงสุด 30 File )</span></label>
                                        <form action="buy_uploadGT" class="dropzone" id="fileuploadGT">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload.<br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d', strtotime(" + 1 days ")); ?>" hidden>
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
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <input type="date" class="form-control" id="date2" name="date" value="<?php echo date('Y-m-d', strtotime(" + 1 days ")); ?>" min="<?php echo date('Y-m-d', strtotime(" + 1 days ")); ?>" required>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                        <div class="text-right" style="font-size: 16px;color:red;">
                                            <p> * อธิบายการสั่งOrder</p>
                                            <p>Due date 1-4 วันคืองานด่วน</p>
                                            <p>Due date 5-10 วันคืองานปรกติ</p>
                                        </div>

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
            maxFiles: 10,
            addRemoveLinks: true,
            parallelUploads: 10, // Number of files process at a time (default 2)

        }

    );

    var myDropzone2 = new Dropzone("#fileuploadGT", {
            autoProcessQueue: false,
            maxFiles: 30,
            addRemoveLinks: true,
            parallelUploads: 30, // Number of files process at a time (default 2)

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
                            myDropzone.on("queuecomplete", function(file, res ) {
                               console.log(file);
                                if (myDropzone2.files == 0) {
                                    swal("Good job!", "Upload for main successfull", "success", {
                                        button: false,
                                    });
                                    setTimeout("location.reload(true);", 1000);

                                } else {
                                    myDropzone2.processQueue();
                                    myDropzone2.on("queuecomplete", function(file, res) {
                                        swal("Good job!", "Upload for main & GT successfull", "success", {
                                            button: false,
                                        });
                                        setTimeout("location.reload(true);", 1000);
                                    });
                                }
                            });
                        }
                    });

                },

            });
        }

    });
</script>