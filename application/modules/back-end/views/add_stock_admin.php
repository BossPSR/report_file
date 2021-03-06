<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Add My StockAdmin</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_admin">My StockAdmin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add My StockAdmin</a>
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
                                Add Stock Admin
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <?php $chek_book  = $this->db->get('tbl_upload_main_search')->result_array(); ?>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="" style="font-size: 16px;"> Main File </label>
                                            <form action="fileUpload_buy_admin" class="dropzone dropzone-area" id="maindropzone">
                                                <input type="date"  id="date2"          name="date_required" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" hidden>
                                                <input type="text"  id="name2"          name="name" class="form-control" hidden>
                                                <input type="email" id="email2"         name="email" class="form-control" hidden>
                                                <input type="text"  id="price_save"     name="price_save" class="form-control" hidden>
                                                <input type="text"  id="org_save"       name="org_save" class="form-control" hidden>
                                                <input type="text"  id="note1_save"     name="note1_save" class="form-control" hidden>
                                                <input type="text"  id="status_cp_save" name="status_cp_save" class="form-control" hidden>
                                                <select name="DMCheck" id="DMTs" class="form-control" hidden>
                                                    <?php foreach ($chek_book as $key => $chek_book2) { ?>
                                                        <option value="<?php echo $chek_book2['id_doc'] ?>"><?php echo $chek_book2['id_doc'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div class="dz-message" style="top: 24%;">Upload File Main</div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="" style="font-size: 16px;"> GT File </label>
                                            <form action="buy_uploadGT" class="dropzone dropzone-area" id="GTdropzone">
                                                <div class="dz-message" style="top: 24%;">Upload File GT</div>

                                            </form>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <label for="" style="font-size: 16px;"> Name </label>
                                            <input type="text" id="names" name="names" class="form-control" value="" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <label for="" style="font-size: 16px;"> Email </label>
                                            <input type="email" id="email" name="email" class="form-control" value="" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2 mt-2">
                                            <div class="form-group">
                                                <label style="font-size: 16px;" for="helpInputTop">Status Upload</label>
                                                <select class="form-control changehid" id="status_cp" required>
                                                    <option value="" selected disabled>select</option>
                                                    <option value="complete">Original</option>
                                                    <option value="notcomplete">Not satisfied</option>
                                                    <option value="rewrite">Rewrite</option>
                                                    <option value="nodm">No DM</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        $this->db->group_by('dm_sub');
                                        $dmsub = $this->db->get('tbl_upload_main_search_sub')->result_array();
                                        ?>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <div class="form-group">
                                                <label style="font-size: 16px;" for="book">Document ID</label>
                                                <select name="DM[]" id="" class="select2 form-control dmsub" multiple="multiple" required>
                                                    <option value="" disabled>--- Select DM ---</option>
                                                    <?php foreach ($dmsub as $key => $dmsub) { ?>
                                                        <option value="<?= $dmsub['dm_sub']; ?>"><?= $dmsub['dm_sub']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <?php $item = $this->db->get('tbl_item_position')->result(); ?>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2" id="hide_po">
                                            <label for="" style="font-size: 16px;"> Position </label>
                                            <select name="Position" class="form-control" id="position1" required>
                                                <option value="" selected disabled> --- Position ---</option>
                                                <?php foreach ($item as $key => $item) : ?>
                                                    <option value="<?php echo $item->id; ?>"> <?php echo $item->name_item; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <p class="message"></p>

                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-2" id="hide_price">
                                            <label for="" style="font-size: 16px;"> Price </label>
                                            <input type="number" id="price_stock" name="price" class="form-control" value="0" required>
                                            <p class="message"></p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-2" id="hide_wage">
                                            <label for="" style="font-size: 16px;"> Wage </label>
                                            <input type="number" id="wage1" name="wage" class="form-control" value="0" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <label for="" style="font-size: 16px;"> Date required </label>
                                            <input type="date" id="date1" name="date_required" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required>
                                            <p class="message"></p>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <label for="" style="font-size: 16px;"> Organization </label>
                                            <select name="orgnization" id="org" class="form-control">
                                                <option value="" selected disabled> -- Select -- </option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                                            <label for="" style="font-size: 16px;"> Note Client </label>
                                            <textarea name="note" id="note1" class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                                            <label for="" style="font-size: 16px;"> Note Team </label>
                                            <textarea name="note_tema" id="notetm" class="form-control" rows="5"></textarea>
                                        </div>


                                        <div class="col-xl-12 col-md-12 col-12">
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
    $(".changehid").change(function() {
        var a = $(this).val();
        if (a == 'complete') {
            $('#hide_po').hide();
            $('#hide_wage').hide();
            $('#hide_price').hide();
            $("#position1").prop('required', false);
            $("#wage1").prop('required', false);
        } else {
            $('#hide_po').fadeIn("slow");
            $('#hide_wage').fadeIn("slow");
            $('#hide_price').fadeIn("slow");
            $("#position1").prop('required', true);
            $("#wage1").prop('required', true);
        }
    });
</script>
<script>
    $("#DM").change(function() {
            var value = $(this).val();
            $("#DMTs").val(value);
        })
        .change();

    $("#status_cp").change(function() {
            var value = $(this).val();
            $("#status_cp_save").val(value);
        })
        .change();

    $("#org").change(function() {
            var value = $(this).val();
            $("#org_save").val(value);
        })
        .change();

    $("#price_stock").keyup(function() {
            var value = $(this).val();
            $("#price_save").val(value);
        })
        .keyup();

    $("#note1").keyup(function() {
            var value = $(this).val();
            $("#note1_save").val(value);
        })
        .keyup();


    $("#names")
        .keyup(function() {
            var value = $(this).val();
            $("#name2").val(value);
        })
        .keyup();

    $("#email")
        .keyup(function() {
            var value = $(this).val();
            $("#email2").val(value);
        })
        .keyup();

    $("#date1").change(function() {
            var value = $(this).val();
            $("#date2").val(value);
        })
        .change();
</script>
<!-- <script>
    $(document).ready(function() {
        $('.statusst').change(function() {
            var statusst = $('.statusst').val();
            if (statusst != '') {
                $.ajax({
                    url: 'fetch_state',
                    method: "POST",
                    data: {
                        st: statusst
                    },
                    success: function(data) {
                        $('.dmsub').html(data);
                    }
                })
            }
        });
    });
</script> -->
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
        var x  = document.getElementById("date1").value;
        var y  = document.getElementById("position1").value;
        var z  = document.getElementById("wage1").value;
        var p  = document.getElementById("names").value;
        var n  = document.getElementById("note1").value;
        var nt = document.getElementById("notetm").value;
        var dm = [];

        $('#DM :selected').each(function(i, selected) {
            dm[i] = $(selected).val();
        });

        // myDropzone.processQueue();

        if (myDropzone.files == 0) {
            swal("Warning!", "Can not be document Empty", "warning", {
                button: true,
            });
        } else {
            if (x == '') {
                $('.message').html('Not Empty ').css('color', 'red');
            } 
            // if (y == '') {
            //     $('.message').html('Not Empty ').css('color', 'red');
            // } 
            // if (z == '') {
            //     $('.message').html('Not Empty ').css('color', 'red');
            // } 
            if (p == '') {
                $('.message').html('Not Empty ').css('color', 'red');
            } 

            if (x != ''  && p != '') {
                $.ajax({
                    type: 'POST',
                    url: 'order_auto',
                    data: {
                        status: 1
                    },
                    success: function(data) {

                        $.ajax({
                            type: 'POST',
                            url: 'order_auto_stock_admin',
                            data: {
                                date: x,
                                position: y,
                                wage: z,
                                names: p,
                                noteteam: nt,
                                DM: dm,
                            },
                            success: function(success) {

                                $.ajax({
                                    type: 'POST',
                                    url: 'order_auto_morefile_buy',
                                    data: {
                                        detail: n,
                                    },
                                    success: function(success) {
                                        myDropzone.processQueue();
                                        myDropzone2.processQueue();
                                        swal("Good job!", "Upload for data successfull", "success", {
                                            button: true,
                                        }).then(function(isConfirm) {
                                            if (isConfirm == true) {
                                                setTimeout(function() {
                                                    location.href = "my_stock_admin"
                                                }, 1000);
                                            } else {
                                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    },
                });
            } else {
                swal("Warning!", "Can not be Not Empty", "warning", {
                    button: true,
                });
            }

        }


        // console.log("------ START ------");
        // console.log("SUCCESS");
        // console.log("------ END ------");
    });
</script>