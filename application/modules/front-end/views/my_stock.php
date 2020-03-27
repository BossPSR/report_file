<br>
<h2 class="text-center" style="margin-top: 15px;">My Stock</h2>
<hr class="line_package">
<?php if (!empty($stock)) { ?>
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
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center;">
                                <th scope="col">ID Order</th>
                                <th scope="col">No.</th>
                                <!-- <th scope="col">Document</th> -->
                                <th scope="col">Date Requred</th>
                                <th scope="col">Main Doc</th>
                                <th scope="col">GT Doc</th>
                                <th scope="col">Select item</th>
                                <th scope="col">Wage</th>
                                <th scope="col">Confrim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = 1;
                            $w = 1;
                            $e = 1;
                            $r = 1;
                            ?>
                            <?php foreach ($stock as $stock) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $stock['or_1']; ?></td>
                                    <td><?php echo $stock['file_name']; ?></td>
                                    <td><?php echo $stock['or_date']; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalMain<?php echo $q++; ?>"><i class="fa fa-file-text-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalMain<?php echo $w++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php $stockmain = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                                        <?php $t = 1; ?>
                                                        <?php if (!empty($stockmain)) { ?>
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
                                                                    <?php foreach ($stockmain as $stockmain) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $t++; ?></td>
                                                                            <td style="text-align:left;"><?php echo $stockmain['file_name']; ?></td>
                                                                            <td><?php echo $stockmain['order_id']; ?></td>
                                                                            <td><?php echo $stock['or_date']; ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        <?php } else { ?>
                                                            <h1 style="color:blue;">Data Not Found</h1>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $e++; ?>"><i class="fa fa-file-text-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalGT<?php echo $r++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">GT Document</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?php $z = 1; ?>
                                                    <?php $stockGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                                    <div class="modal-body">
                                                        <?php if (!empty($stockGT)) { ?>
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
                                                                    <?php foreach ($stockGT as $key => $stockGT) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $z++; ?></td>
                                                                            <td style="text-align:left;"><?php echo $stockGT['file_name_GT']; ?></td>
                                                                            <td><?php echo $stockGT['order_id']; ?></td>
                                                                            <td><?php echo $stock['or_date']; ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        <?php } else { ?>
                                                            <h1 style="color:blue;">Data Not Found</h1>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $stock['name_item']; ?></td>
                                    <td><span class="badge badge-danger" style="font-size:16px;">$ <?php echo $stock['wage']; ?></span></td>
                                    <td>
                                        <?php $sub_order = substr($stock['mms'], 3); ?>

                                        <?php if ($stock_row == true) { ?>
                                            <button type="button" class="btn btn-secondery"> Confirmed</button>
                                        <?php } elseif ($stock_row == false) { ?>
                                            <?php if ($c_app >= 2) { ?>
                                                <button type="button" class="btn btn-secondery"> Confirmed</button>
                                            <?php } else { ?>
                                                <button type="button" class="btn btn-success" id="cf<?php echo $sub_order; ?>"> Confirmed</button>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-success" id="cf<?php echo $sub_order; ?>"> Confirmed</button>
                                        <?php } ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Document</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>Main Document</h3>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr style="text-align:center;">
                                                                    <th scope="col">File</th>
                                                                    <th scope="col">ID Order</th>
                                                                    <th scope="col">Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $stockmain2 = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                                                <?php foreach ($stockmain2 as $stockmain_Download) { ?>
                                                                    <tr style="text-align:center;">
                                                                        <td><?php echo $stockmain_Download['order_id']; ?></td>
                                                                        <td><?php echo $stockmain_Download['file_name']; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo $stockmain_Download['path']; ?>" class="btn btn-primary" download>
                                                                                <i class="fa fa-download"></i> Download
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>

                                                        <h3>GT Document</h3>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr style="text-align:center;">
                                                                    <th scope="col">File</th>
                                                                    <th scope="col">ID Order</th>
                                                                    <th scope="col">Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $stockGT2 = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                                                <?php foreach ($stockGT2 as $stockGT_Download) { ?>
                                                                    <tr style="text-align:center;">
                                                                        <td><?php echo $stockGT_Download['order_id']; ?></td>
                                                                        <td><?php echo $stockGT_Download['file_name_GT']; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo $stockGT_Download['path_GT']; ?>" class="btn btn-primary" download>
                                                                                <i class="fa fa-download"></i> Download
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" id="close_doc">Success</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $('#cf<?php echo $sub_order; ?>').click(function() {
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
                                                                order_id: <?php echo $sub_order; ?>,
                                                                is_confirm: 1,
                                                            },
                                                            success: function(success) {

                                                                $('#exampleModalCF').modal('show')
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
                        </tbody>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <!--wishlist area end -->
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
<?php } ?>