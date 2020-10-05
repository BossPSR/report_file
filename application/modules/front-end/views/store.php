<!--slider area start-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModalsell">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">คำแนะนำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>เพื่อประโยชน์สูงสุดของท่านในการรับส่วนลดจากทางระบบ<br> กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าไฟล์ทั้งหมด คืองานเดียวกันไม่มีงานอื่นรวมอยู่ในการUploadครั้งนี้</p>
                <p>หมายเหตุ: หากการUploadในครั้งนี้มีไฟล์งานอื่นรวมอยู่ด้วย ท่านอาจเสียสิทธิ์ในการได้รับส่วนลดจากทางระบบ</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<br>
<h2 class="text-center" style="margin-top: 15px;"> แลกคะแนนส่วนลด</h2>

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
                                <label for="" class="font-size-upload">กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าไฟล์ทั้งหมดคืองานเดียวกัน <br> <span style="color:red">( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)</span></label>
                                <form action="store_upload" class="dropzone" id="my-awesome-dropzone">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload.<br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                        <input type="text" name="userId" value="<?php echo $userId['idUser']; ?>" hidden>
                                        <textarea name="detail" id="detail" hidden></textarea>
                                    </div>
                                </form>
                                <br>
                                <label for="">ระบุรายละเอียดเพิ่มเติม (ถ้ามี)</label>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <textarea name="detail" class="form-control" id="detail2" rows="5"></textarea>
                                    </div>

                                </div>
                                <!-- Button trigger modal -->
                                <br>
                                <button type="button" data-toggle="modal" data-target="#staticBackdrop2" class="btn btn-primary">
                                    อัพโหลดไฟล์
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">คำแนะนำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>เพื่อประโยชน์สูงสุดของท่านในการรับส่วนลดจากทางระบบ<br> กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าไฟล์ทั้งหมด คืองานเดียวกันไม่มีงานอื่นรวมอยู่ในการUploadครั้งนี้</p>
                <p>หมายเหตุ: หากการUploadในครั้งนี้มีไฟล์งานอื่นรวมอยู่ด้วย ท่านอาจเสียสิทธิ์ในการได้รับส่วนลดจากทางระบบ</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id='uploadfiles' data-dismiss="modal">Confirm</button>
            </div>
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
    var myDropzone = new Dropzone("#my-awesome-dropzone", {
        autoProcessQueue: false,
        maxFiles: 30,
        addRemoveLinks: true,
        parallelUploads: 30, // Number of files process at a time (default 2)
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