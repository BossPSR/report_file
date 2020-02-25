<?php
$teamId = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
$sel1 = $this->db->get_where('tbl_job_position', ['id_team' => $teamId['id']])->result_array();
foreach ($sel1 as $key => $da) {
    $sel3 = $this->db->get_where('tbl_upload_order', ['select_item' => $da['job_position'], 'status_book' => 2])->result_array();
}

// exit();


?>
<?php foreach ($sel1 as $key => $daa) {
    $sel2 = $this->db->get_where('tbl_upload_order', ['select_item' => $daa['job_position'], 'status_book' => 2])->result_array(); ?>
    <?php foreach ($sel2 as $key => $qq) { ?>
        <?php $si = $this->db->get_where('tbl_select_item', ['id' => $daa['job_position']])->row_array(); ?>
    <?php } ?>
<?php } ?>
<?php if (!empty($si)) : ?>
    <br>
    <h2 class="text-center" style="margin-top: 15px;">My Stock</h2>
    <hr class="line_package">
    <br>
    <div class="wishlist_area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <!-- <span style="font-size:16px;">Search for date : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">No.</th>
                                <th scope="col">Document</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Date Requred</th>
                                <th scope="col">Create Date</th>
                                <th scope="col">Select item</th>
                                <th scope="col">Confrim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>

                            <?php foreach ($sel1 as $key => $da) {
                                $sel2 = $this->db->get_where('tbl_upload_order', ['select_item' => $da['job_position'], 'status_book' => 2, 'is_confirm' => null])->result_array(); ?>
                                <?php foreach ($sel2 as $key => $qq) { ?>
                                    <?php $si = $this->db->get_where('tbl_select_item', ['id' => $da['job_position']])->row_array(); ?>
                                    <tr style="text-align:center;">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $qq['file_name']; ?></td>
                                        <td><?php echo $qq['order_id']; ?></td>
                                        <td><?php echo $qq['date_required']; ?></td>
                                        <td><?php echo $qq['create_at']; ?></td>
                                        <td><?php echo $si['name_item']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success" id="download<?php echo $key; ?>"> Confirmed </button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6 text-center">
                                                            <button class="btn btn-primary"><i class="fa fa-cloud-download"></i> Main Document</button>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <button class="btn btn-info"><i class="fa fa-cloud-download"></i> GT Document</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" id="close_doc">Success</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $('#download<?php echo $key; ?>').click(function() {
                                            swal({
                                                icon: "warning",
                                                title: "Are you sure?",
                                                text: "Do you want confirmed document",
                                                closeOnEsc: true,
                                                closeOnClickOutside: false,
                                                buttons: {
                                                    cancel: true,
                                                    confirm: true,
                                                },
                                            }).then(function(isConfirm) {
                                                if (isConfirm == true) {
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: 'order_isconfirm',
                                                        data: {
                                                            id: <?php echo $qq['id']; ?>,
                                                            is_confirm: 1,
                                                        },
                                                        success: function(success) {

                                                            $('#exampleModal').modal('show')
                                                            $("#close_doc").click(function() {
                                                                $('#myModal').modal('hide');
                                                                swal("Good job!", "Upload for data successfull", "success", {
                                                                    button: false,
                                                                });
                                                                setTimeout("location.reload(true);", 1000);
                                                            });
                                                            // $('#close_doc').click(function() {
                                                            //     $('#myModal').modal('hide');
                                                            //     swal("Good job!", "Upload for data successfull", "success", {
                                                            //         button: false,
                                                            //     });
                                                            //     setTimeout("location.reload(true);", 1000);
                                                            // });

                                                        }
                                                    });
                                                } else {
                                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                }
                                            });
                                        });
                                    </script>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--wishlist area end -->
<?php else : ?>
    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Stock</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php endif; ?>