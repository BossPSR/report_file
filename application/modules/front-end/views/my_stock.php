<br>
<?php
$item = base64_decode($this->input->get('item'));
$tip  = $this->db->get_where('tbl_item_position', ['id' => $item])->row_array();
?>
<h2 class="text-center" style="margin-top: 15px;">Order List <br> <span style="font-size: 24px;color: #0063d1;">(<?= $tip['name_item'] ?>)</span></h2>
<hr class="line_package">0
<?php if (!empty($stock)) { ?>
    <br>

    <div class="wishlist_area mt-10">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12">

                    <!-- <span style="font-size:16px;">Search for date : </span>
                    <form action="my-selling" method="GET">
                        <div style="display:flex; margin-bottom:1.3em;">
                            <input type="date" name="search_key" class="form-control" style="width:70%">
                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-6 col-md-12 col-sm-12 ">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr style="text-align:center;">
                                <th scope="col">ID Order</th>
                                <!-- <th scope="col">Document</th> -->
                                <th scope="col">Date Requred</th>
                                <th scope="col">Main Doc</th>
                                <th scope="col">GT Doc</th>
                                <th scope="col">DM</th>
                                <th scope="col">Note</th>
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
                            $h = 1;
                            $k = 1;
                            $cvv = 1;
                            $cvc = 1;
                            ?>
                            <?php foreach ($stock as $stock) { ?>
                                <tr style="text-align:center;">
                                    <td><?php echo $stock['or_1']; ?> </td>
                                    <?php
                                    $checkDate_num = DateDiff(date("Y-m-d"), $stock['or_date']);
                                    $checkDate = $checkDate_num / 2;
                                    $checkDate = floor($checkDate);
                                    $dateRequired = date("Y-m-d", strtotime("-" . $checkDate . " day", strtotime($stock['or_date'])));
                                    ?>
                                    <td><?php echo date('d F Y', strtotime($dateRequired)); ?></td>
                                    <td>
                                        <?php $stockmain = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                        <?php $backmain  = $this->db->get_where('tbl_upload_backup_main', ['sub_id_m' => $stock['idteam']])->result_array(); ?>
                                        <?php if ($backmain == true) : ?>
                                            <?php if (!empty($backmain)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#backmain<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backmain<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">Main Document new</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backmain as $backmain) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backmain['order_id_m']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $backmain['file_name_m']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($backmain['path_m']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php else : ?>
                                            <?php if (!empty($stockmain)) { ?>
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
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($stockmain as $stockmain) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $stockmain['order_id']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $stockmain['file_name']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($stockmain['path']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php endif; ?>

                                    </td>

                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
                                        $this->db->where('tbl_morefile_GT.order_id', $stock['mms']);
                                        $this->db->where('tbl_morefile_GT.status_more_file', 0);
                                        $orderGT = $this->db->get('tbl_morefile_GT')->result_array();
                                        ?>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_morefile_GT');
                                        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
                                        $this->db->where('tbl_morefile_GT.status_more_file', 1);
                                        $this->db->where('tbl_morefile_GT.order_id', $stock['mms']);
                                        $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
                                        $more_file_gt_more = $this->db->get()->result_array();
                                        ?>
                                        <?php $stockGT = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                        <?php $backgt  = $this->db->get_where('tbl_upload_backup_gt', ['sub_id_g' => $stock['idteam']])->result_array(); ?>
                                        <?php if ($backgt == true) : ?>
                                            <?php if (!empty($backgt)) { ?>
                                                <a href="#" data-toggle="modal" data-target="#backgt<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backgt<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                <h5 class="modal-title" id="exampleModalLabel">GT Document new</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php $t = 1; ?>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backgt as $backgt) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backgt['order_id_g']; ?></td>
                                                                                <td style="text-align:left;"><?php echo $backgt['file_name_g']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($backgt['path_g']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php else : ?>
                                            <?php if (!empty($orderGT || $more_file_gt_more)) { ?>

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
                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Info</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($orderGT as $keys => $orderGT) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $orderGT['order_id']; ?></td>

                                                                                <td style="text-align:left;"><?php echo $orderGT['file_name_GT']; ?></td>
                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($orderGT['path_GT']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        <?php foreach ($more_file_gt_more as $keys => $more_file_gt_more) { ?>
                                                                            <tr>
                                                                                <td><?php echo $more_file_gt_more['order_id'] ?> (MF)</td>
                                                                                <td><?php echo $more_file_gt_more['file_name_GT'] ?></td>

                                                                                <td><a href="show-pdf?dcnumber=<?= base64_encode($orderGT['path_GT']); ?>" target="_bank"><i class="fa fa-file-text-o"></i></a></td>

                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                -
                                            <?php } ?>
                                        <?php endif; ?>
                                    </td>

                                    <!-- DM -->
                                    <td>
                                        <?php
                                        $this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub');
                                        $this->db->where('tbl_bookmark.id_orderBuy', $stock['or_1']);
                                        $dm_cc = $this->db->get('tbl_bookmark')->result_array();
                                        ?>
                                        <?php if (!empty($dm_cc)) { ?>

                                            <a href="#" data-toggle="modal" data-target="#TEAMFILE<?php echo $stock['or_1']; ?>"><i class="fa fa-file-text-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="TEAMFILE<?php echo $stock['or_1']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">DM Document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr style="text-align:center;">
                                                                        <!-- <th scope="col">ID Order</th> -->
                                                                        <th scope="col">File</th>
                                                                        <th scope="col">Info</th>
                                                                        <th scope="col">Downloads</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($dm_cc as $key => $dm_cc) : ?>
                                                                        <tr>

                                                                            <td><?php echo $dm_cc['file_name'] ?></td>
                                                                            <td><a href="<?php echo $dm_cc['path'] ?>" target="_blank"><i class="fa fa-file-text-o" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                            <td><?php echo $dm_cc['create_at'] ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>

                                    <td>
                                        <?php if (!empty($stock['uptnote'])) { ?>
                                            <a href="#" data-toggle="modal" data-target="#NOTE<?php echo $cvv++; ?>" style="color:#19baea;font-size:18px;"><i class="fa fa-search"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="NOTE<?php echo $cvc++; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p style="font-size:16px;font-weight:bold;"><?= $stock['uptnote']; ?></p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $stock['name_item']; ?> <?= $stock['idteam'] ?></td>
                                    <td><span class=" badge badge-danger" style="font-size:16px;">$ <?php echo $stock['wage']; ?></span>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_upload_order');
                                        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
                                        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id', 'left');
                                        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id', 'left');
                                        $this->db->where('tbl_upload_order.status_pay', 1);
                                        $this->db->where('tbl_upload_team.teamId', $teamTM['IdTeam']);
                                        $this->db->where_in('tbl_upload_team.status', [2, 3]);
                                        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
                                        $stock_row = $this->db->get()->row_array();
                                        ?>

                                        <?php if ($stock_row == true) { ?>
                                            <button type="button" class="btn btn-secondery"> Confirmed</button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-success" id="cf<?php echo $stock['mms']; ?>"> Confirmed</button>
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
                                                        <table class="table">
                                                            <thead class="thead-light">
                                                                <tr style="text-align:center;">
                                                                    <th scope="col">File</th>
                                                                    <th scope="col">ID Order</th>
                                                                    <th scope="col">Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $stockmain2 = $this->db->get_where('tbl_upload_order', ['order_id' => $stock['mms']])->result_array(); ?>
                                                                <?php $backmain2  = $this->db->get_where('tbl_upload_backup_main', ['sub_id_m' => $stock['idteam']])->result_array(); ?>
                                                                <?php if ($backmain2 == true) : ?>
                                                                    <?php foreach ($backmain2 as $backmain2) { ?>
                                                                        <tr style="text-align:center;">
                                                                            <td><?php echo $backmain2['order_id_m']; ?></td>
                                                                            <td><?php echo $backmain2['file_name_m']; ?></td>
                                                                            <td>
                                                                                <a href="<?php echo $backmain2['path_m']; ?>" class="btn btn-primary" download>
                                                                                    <i class="fa fa-download"></i> Download
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php else : ?>
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
                                                                <?php endif; ?>

                                                            </tbody>
                                                        </table>


                                                        <?php $stockGT2 = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stock['mms']])->result_array(); ?>
                                                        <?php $backgt2  = $this->db->get_where('tbl_upload_backup_gt', ['sub_id_g' => $stock['idteam']])->result_array(); ?>
                                                        <?php if ($backgt2 == true) : ?>
                                                            <?php if (!empty($backgt2)) : ?>
                                                                <br>
                                                                <h3>GT Document </h3>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($backgt2 as $backgt2) { ?>
                                                                            <tr style="text-align:center;">
                                                                                <td><?php echo $backgt2['order_id_g']; ?></td>
                                                                                <td><?php echo $backgt2['file_name_g']; ?></td>
                                                                                <td>
                                                                                    <a href="<?php echo $backgt2['path_g']; ?>" class="btn btn-primary" download>
                                                                                        <i class="fa fa-download"></i> Download
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        <?php else : ?>
                                                            <?php if (!empty($stockGT2)) : ?>
                                                                <br>
                                                                <h3>GT Document </h3>
                                                                <table class="table">
                                                                    <thead class="thead-light">
                                                                        <tr style="text-align:center;">
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">ID Order</th>
                                                                            <th scope="col">Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
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
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" id="close_doc">Success</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $('#cf<?php echo $stock['mms']; ?>').click(function() {
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
                                                                order_id: '<?php echo $stock['mms']; ?>',
                                                                idteam: '<?php echo $stock['idteam']; ?>',
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
                        <h1>No Order</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->
<?php } ?>