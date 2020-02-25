<?php $teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
$sel1 = $this->db->get_where('tbl_job_position', ['id_team' => $teamId['id']])->result_array(); ?>
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
                                <form action="#" class="dropzone" id="dropfile">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload.<br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>

                                    </div>
                                    <div>
                                        <!-- <input type="date" name="date" id="" class="form-control" onchange="myFunction()"> -->
                                    </div>
                                </form>
                                <br>
                                <label for="">Choose the date to pick up the document.</label>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <div class="row">
                                        <select name="select_item" class="form-control">
                                            <option selected disabled>-- SELECT ITEM --</option>
                                            <?php foreach ($sel1 as $key => $daa) { ?>
                                                <?php $sel2 = $this->db->get_where('tbl_upload_order', ['select_item' => $daa['job_position'], 'status_book' => 2, 'is_confirm' => 1])->result_array(); ?>
                                                <?php foreach ($sel2 as $key => $qq) { ?>
                                                    <option value=""><?php echo $qq['order_id']; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>

                                    </div>

                                </div>
                                <br>
                                <button type="button" class="btn btn-primary" id='dropdupload'>
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
<!-- 
<script>
    $(document).ready(function() {
        $("#date2").change(function() {
            var value = $(this).val();

            $("#date").val(value);
        }).keyup();

    });
</script> -->

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

    $('#uploadfiles').click(function() {
        $.ajax({
            type: 'POST',
            url: 'order_auto',
            data: {
                status: 1
            },
            success: function(data) {
                myDropzone.processQueue();
                myDropzone.on("success", function(file, res) {
                    swal("Good job!", "Upload for data successfull", "success", {
                        button: false,
                    });
                    setTimeout("location.reload(true);", 1000);
                });
            },

        });
    });
</script>