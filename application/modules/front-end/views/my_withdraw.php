<!--services img area-->
<div class="services_gallery mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wall-center shadow-b hight-100 " style=" padding-right: 0px; padding-left: 0px;">
                        <div class="p-15 text-center header-profile">
                            โปรไฟล์ของฉัน
                        </div>
                        <div class="p-15 text-center">
                            <img class="profile-small" src="public/image/man.png" alt="">
                        </div>
                        <div class="p-15 text-center font18">
                            User001
                        </div>
                        <!-- <div class="ptw-5 text-center font17">
                            เอกสารของฉัน : 11 ฉบับ
                        </div> -->
                        <div class="pw-5 text-center font17">
                            ยอดคงเหลือ : ฿<?php echo number_format($user['cash']); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-11 col-md-11 wall-center shadow-b ml-20">
                        <div class="p-30 text-center color-w">
                            ยอดคงเหลือในบัญชี
                        </div>
                        <div class="p-15 text-center color-p">
                            ฿<?php echo number_format($user['cash']); ?>
                        </div>
                        <div class="pb-18 text-center">
                            <a href="my-deposit" class="btn btn-primary button-p">เติมเงิน</a>
                        </div>
                    </div>

                    <div class="col-lg-11 col-md-11 wall-center shadow-b table-w mtp-20">
                        <div class="text-center mbc-20">
                            ถอนเงินออกจากระบบ
                        </div>
                        <hr>

                        <div class="row text-center wall-center mtb-17-30">
                            <div class="col-md-6 ">
                                <input type="number" name="number" class="form-control" placeholder="กรอกจำนวนเงิน" style="height: 51px;text-align: center;font-size: 20px;">
                            </div>
                        </div>
                        <div class="row text-center wall-center mtb-20">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info" style="font-size: 20px;" data-toggle="modal" data-target="#staticBackdrop2"><i class="fa fa-money" aria-hidden="true"></i> ถอนเงิน</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">Confirm Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="password" name="password" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id='checkpassword' data-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#dropzone2", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)

    });

    $('#checkpassword').click(function() {
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