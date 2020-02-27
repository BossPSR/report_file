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
                                <!-- <th scope="col">Document</th> -->
                                <th scope="col">ID Order</th>
                                <th scope="col">Date Requred</th>
                                <th scope="col">Main Doc</th>
                                <th scope="col">GT Doc</th>
                                <th scope="col">Select item</th>
                                <th scope="col">Confrim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $e = 1; ?>
                            <?php $k = 1; ?>
                            <?php $p = 1; ?>
                            <?php $r = 1; ?>

                            <?php foreach ($sel1 as $key => $da) {
                                $sel2 = $this->db->order_by('date_required', 'ASC')->group_by('order_id')->get_where('tbl_upload_order', ['select_item' => $da['job_position'], 'status_book' => 2, 'is_confirm' => null])->result_array(); ?>
                                <?php foreach ($sel2 as $key => $qq) { ?>
                                    <?php $si = $this->db->get_where('tbl_select_item', ['id' => $da['job_position']])->row_array(); ?>
                                    <tr style="text-align:center;">
                                        <td><?php echo $i++; ?></td>
                                        <!-- <td><?php echo $qq['file_name']; ?></td> -->
                                        <td><?php echo $qq['order_id']; ?></td>
                                        <td><?php echo $qq['date_required']; ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalMain<?php echo $e++; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <?php $up_or  = $this->db->order_by('create_at')->get_where('tbl_upload_order', ['order_id' => $qq['order_id']])->result_array(); ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalMain<?php echo $k++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <?php $n = 1; ?>
                                                        <div class="modal-body">
                                                            <?php if (!empty($up_or)) { ?>
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">No.</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Date Requred</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($up_or as $key => $up_or) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $n++; ?></td>
                                                                                <td><a href="<?php echo $up_or['path']; ?>"><?php echo $up_or['file_name']; ?></a></td>
                                                                                <td><?php echo $up_or['order_id']; ?></td>
                                                                                <td><?php echo $up_or['date_required']; ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php } else { ?>
                                                                <h1 style="color:blue;">Data Not Found</h1>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $e++; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <?php $up_orGT  = $this->db->order_by('create_at')->get_where('tbl_upload_orderGT', ['order_id' => $qq['order_id']])->result_array(); ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalGT<?php echo $k++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php if (!empty($up_orGT)) { ?>
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">No.</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Date Requred</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($up_orGT as $key => $up_orGT) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $n++; ?></td>
                                                                                <td><a href="<?php echo $up_orGT['path_GT']; ?>"><?php echo $up_orGT['file_name_GT']; ?></a></td>
                                                                                <td><?php echo $up_orGT['order_id']; ?></td>
                                                                                <td><?php echo $qq['date_required']; ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php } else { ?>
                                                                <h1 style="color:blue;">Data Not Found</h1>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo $si['name_item']; ?></td>
                                        <td>
                                            <?php $exq = substr($qq['order_id'], 2); ?>
                                            <button type="button" class="btn btn-success" id="download<?php echo $exq; ?>"> Confirmed </button>
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
                                                        <?php $main = $this->db->get_where('tbl_upload_order', ['select_item' => $da['job_position'], 'status_book' => 2, 'is_confirm' => null])->result_array(); ?>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6 text-center">

                                                                    <button class="btn btn-primary" id="mainload<?php echo $exq; ?>"><i class="fa fa-cloud-download"></i> Main Document</button>
                                                      
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
                                                <?php $up_or2  = $this->db->order_by('create_at')->get_where('tbl_upload_order', ['order_id' => $qq['order_id']])->result_array(); ?>
                                                $('#mainload<?php echo $exq; ?>').click(function() {
                                                    $.ajax({
                                                        type: 'get',
                                                        url: 'buy_downloadmain',
                                                        data: {
                                                            order_id: <?php echo $exq; ?>,
                                                        },
                                                        success: function(success) {
                                                            console.log("------- SUCCESS -------");
                                                        }
                                                    });
                                                });
                                            </script>
                                            <script>
                                                $('#download<?php echo $exq; ?>').click(function() {
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
                                                                    order_id: <?php echo $exq; ?>,
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
                                                                }
                                                            });
                                                        } else {
                                                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                        }
                                                    });
                                                });
                                            </script>
                                        </td>
                                    </tr>


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