<?php $userId = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php $teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array(); ?>
<?php if (!empty($this->session->userdata('email'))) { ?>
    <?php if ($userId == true) { ?>
        <?php $order = $this->db->get_where('tbl_upload_order', ['userId' => $userId['idUser'], 'status_delivery' => 1, 'status_approved' => 2])->row_array(); ?>
    <?php } else { ?>
        <?php $daliver = $this->db->get_where('tbl_feedback', ['teamId' => $teamId['IdTeam']])->row_array(); ?>
    <?php } ?>
<?php } else { ?>

<?php } ?>

<!--slider area start-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="">
            <center>
                <img src="uploads/popup/374879-PBNFLV-999.jpg" style="width:100%">
            </center>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">MY ORDER</h5>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <br>
                <center>
                    <a href="order" class="btn btn-primary">ACCEPT</a>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedback" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="feedback" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                <h5 class="modal-title" id="staticBackdropLabel">MY FEEDBACK</h5>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <br>
                <center>
                    <button class="btn btn-primary" id="status_feed">ACCEPT</button>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="check_morefile" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="check_morefile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">

                <h5 class="modal-title" id="staticBackdropLabel">MORE FILE</h5>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <br>
                <center>
                    <button class="btn btn-primary" id="status_morefile">ACCEPT</button>
                </center>
            </div>
        </div>
    </div>
</div>
<section class="slider_section slider_section_four mb-70 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-ld-12">
                <div class="slider_area owl-carousel">
                    <div class="single_slider d-flex align-items-center justify-content-center">
                        <iframe width="1000" height="500" src="https://www.youtube.com/embed/rdzdbNKs0fQ" frameborder="0" allow="autoplay" allowfullscreen></iframe>
                    </div>
                </div>

                <!--sidebar widget end-->
            </div>
        </div>

</section>
<!--slider area end-->

<!--slider area end-->
<div class="banner_area mb-40">
    <div class="container">

        <div class="row">
            <div class="col-lg-1 col-md-1 text-center"></div>
            <div class="col-lg-5 col-md-5 text-center">
                <div class="section_title">
                    <h2><?= $this->lang->line("Highestscore"); ?> </h2>

                </div>
                <br>
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="#"><img src="public/image/9786167897561l.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 text-center">
                <div class="section_title">
                    <h2>Poster </h2>
                </div>
                <br>
                <?php $poster = $this->db->get('tbl_poster')->row_array(); ?>
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="#"><img src="uploads/poster/<?php echo $poster['file_name'] ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 text-center"></div>

        </div>
    </div>
</div>
<?php if (!empty($teamId)) { ?>
    <?php if ($check_morefile) { ?>
        <?php $moreT = substr($check_morefile['teamId'], 2); ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#check_morefile').modal('show');
            });
        </script>
        <script type="text/javascript">
            $('#status_morefile').click(function() {
                // console.log(<?php echo $moreT; ?>);

                $.ajax({
                    type: 'POST',
                    url: 'update_see_more_file',
                    data: {
                        teamId: <?php echo $moreT; ?>,
                    },
                    success: function(success) {
                        swal("Good job!", "Got it.", "success", {
                            button: false,
                        });
                        setTimeout(function() {
                            location.href = "My-task"
                        }, 1000);
                    }
                });
            });
        </script>

    <?php } ?>

<?php } ?>


<?php if (!empty($this->session->userdata('email'))) { ?>
    <?php if ($userId == true) { ?>
        <?php if ($order) { ?>
            <!--wishlist area end -->
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#staticBackdrop').modal('show');
                });
            </script>
        <?php } ?>
    <?php } ?>
    <?php if ($teamId == true) { ?>
        <?php if ($check_read) { ?>
            <!--wishlist area end -->
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#feedback').modal({
                        'show': true,
                        keyboard: false
                    });

                });
            </script>
            <?php $sb = substr($teamId['IdTeam'], 2); ?>
            <script type="text/javascript">
                $('#status_feed').click(function() {
                    swal("Good job!", "Got it.", "success", {
                        button: false,
                    });

                    $.ajax({
                        type: 'POST',
                        url: 'check_c_feed',
                        data: {
                            teamId: <?= $sb; ?>,
                            status_feedback_read: 1,
                        },
                        success: function(success) {

                            setTimeout(function() {
                                location.href = "my-feedback"
                            }, 1000);
                        }
                    });
                });
            </script>
        <?php } ?>
    <?php } ?>
<?php } ?>