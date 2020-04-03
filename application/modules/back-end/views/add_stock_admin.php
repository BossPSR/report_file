<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_admin">Admin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add Admin</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Add Admin
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="" style="font-size: 16px;"> Main File </label>
                                            <form action="fileUpload_buy_admin" class="dropzone dropzone-area" id="maindropzone">
                                                <input type="date" id="date2" name="date_required" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" hidden>
                                                <input type="text" id="position2" class="form-control position2" name="position" hidden>

                                                <div class="dz-message" style="top: 24%;">Upload File Main</div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="" style="font-size: 16px;"> GT File </label>
                                            <form action="buy_uploadGT" class="dropzone dropzone-area" id="GTdropzone">
                                                <div class="dz-message" style="top: 24%;">Upload File GT</div>
                                                <textarea name="note" id="note2" class="form-control" rows="10" hidden></textarea>
                                                <input type="date" id="date2" name="date_required" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" hidden>
                                                <input type="text" id="position2" class="form-control position2" name="position" hidden>
                                                <input type="number" id="wage2" name="wage" class="form-control" hidden>
                                            </form>
                                        </div>

                                        <?php $item = $this->db->get('tbl_item_position')->result(); ?>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                            <label for="" style="font-size: 16px;"> Position </label>
                                            <select name="Position" class="form-control" id="position1" required>
                                                <option value="" selected disabled> --- Position ---</option>
                                                <?php foreach ($item as $key => $item) : ?>
                                                    <option value="<?php echo $item->id; ?>"> <?php echo $item->name_item; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <p class="message"></p>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                            <label for="" style="font-size: 16px;"> Wage </label>
                                            <input type="number" id="wage1" name="wage" class="form-control" value="0" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                            <label for="" style="font-size: 16px;"> Date required </label>
                                            <input type="date" id="date1" name="date_required" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;"></div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;">
                                            <label for="" style="font-size: 16px;"> Note </label>
                                            <textarea name="note" id="note1" class="form-control" rows="10"></textarea>
                                           
                                        </div>

                                        <div class="col-xl-12 col-md-12 col-12" style="margin-top: 25px;">
                                            <button type="button" id="uploadsfile" class="btn btn-primary mr-1 mb-1"> Add Admin</button>
                                            <a href="my_stock_admin" class="btn btn-secondary mr-1 mb-1">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function() {
        $("#date1").change(function() {
            var value = $(this).val();

            $("#date2").val(value);
        }).keyup();

    });
</script> -->
<script>
    $("#position1")
        .change(function() {
            var value = $(this).val();
            $(".position2").val(value);
        })
        .change();

    $("#wage1")
        .keyup(function() {
            var value = $(this).val();
            $("#wage2").val(value);
        })
        .keyup();

    $("#date1")
        .change(function() {
            var value = $(this).val();
            $("#date2").val(value);
        })
        .change();

    $("#note1")
        .keyup(function() {
            var value = $(this).val();
            $("#note2").text(value);
        })
        .keyup();
</script>
<script>
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#maindropzone", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    var myDropzone2 = new Dropzone("#GTdropzone", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    document.getElementById("uploadsfile").addEventListener("click", function() {
        var x = document.getElementById("date1").value;
        var y = document.getElementById("position1").value;
        var z = document.getElementById("wage1").value;

        // myDropzone.processQueue();

        if (myDropzone.files == 0 ) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            if (x == '') {
                $('.message').html('Not Empty ').css('color', 'red');
            } else {}
            if (y == '') {
                $('.message').html('Not Empty ').css('color', 'red');
            } else {}
            if (z == '') {
                $('.message').html('Not Empty ').css('color', 'red');
            } else {}
            if(x != '' && y != '' && z != ''){
                $.ajax({
                type: 'POST',
                url: 'order_auto',
                data: {
                    status: 1
                },
                success: function(data) {
                    myDropzone.processQueue();
                    myDropzone2.processQueue();
                    myDropzone.on("queuecomplete", function(file, res) {
                        swal("Good job!", "Upload for data successfull", "success", {
                            button: false,
                        });
                        setTimeout(function() {
                            location.href = "my_stock_admin"
                        }, 1000);
                    });
                },

            });
            }
            else{
                swal("Warning!", "Can not be  Not Empty", "warning", {
                button: true,
            });
            }
          
        }


        // console.log("------ START ------");
        // console.log("SUCCESS");
        // console.log("------ END ------");
    });

    // $('#upfiles').click(function() {
    //     console.log("------ SUCCESS ------");
    // });

    // $("#upfiles").click(function() {
    //     alert("Handler for .click() called.");
    // });
</script>