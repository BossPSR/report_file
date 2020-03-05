<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Bookmark</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Bookmark
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">

            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bookmark</h4>
                              
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>order_id</th>
                                                    <th>User_id</th>
                                                    <th>DM</th>
                                                    <th>Flie_name</th>
                                                    <th>Main_file</th>
                                                    <th>GT_File</th>
                                                    <th>Document_File</th>
                                                    <th>Date_Required</th>
                                                    <th>Status</th>
                                                    <th>position</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bookmark as $keyBook => $bookmark) { ?>
                                                    <tr>
                                                        <td><?php echo $bookmark['orderby'] ?></td>
                                                        <td><?php echo $bookmark['user_name'] ?></td>
                                                        <td>
                                                        <?php if($bookmark['id_document']==''):?>
                                                            -
                                                        <?php else:?>
                                                        <?php echo $bookmark['id_document'] ?>
                                                        <?php endif;?>
                                                       </td>
                                                        <td><?php echo $bookmark['file_order'] ?></td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark['order_id']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order_id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['create_at'] ?></td>
                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Main File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark['order_id']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order_id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['create_at'] ?></td>


                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <?php if($bookmark['status_book']=='1'): ?>
                                                        <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalc<?php echo $bookmark['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Document_File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_store', ['store_id' => $bookmark['store_id']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Relive</th>
                                                                                        <th>Store_id</th>
                                                                                        <th>File_name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                           
                                                                                            <td>
                                                                                            <?php if($order['relive_status']=='0'):?>
                                                                                           -
                                                                                            <?php else:?>
                                                                                                <div class="badge badge-primary">Relive</div>
                                                                                            <?php endif?>
                                                                                            </td>
                                                                                            <td><?php echo $order['store_id'] ?></td>
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $order['create_at'] ?></td>


                                                                                        </tr>
                                                                                    <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php else:?>

                                                                -

                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $bookmark['date_re'] ?></td>

                                                        <td id="test<?php echo $keyBook; ?>">
                                                            <?php if ($bookmark['status_pay'] == 0) : ?>
                                                                <div class="badge badge-warning">ยังไม่ได้ชำระเงิน</div>
                                                            <?php else : ?>
                                                                <div class="badge badge-success">ชำระเงินเรียบร้อยแล้ว</div>
                                                            <?php endif ?>
                                                        </td>
                                                        <td>
                                                        <?php $position_name = $this->db->get_where('tbl_item_position', ['id' => $bookmark['position']])->result_array(); ?>
                                                    <?php foreach ($position_name as $keys => $position_name) { ?>
                                                        <?php echo $position_name['name_item'] ?>
                                                    <?php }?>

                                                        </td>
                                                        <td><a href="Add_bookmake?id=<?php echo $bookmark['id_document'] ?>"><button type="button" class="btn btn-primary mr-1 mb-1">+ Add Bookmark</button></a></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->



        </div>
    </div>
</div>

<script type="text/javascript">
    function getDataFromDb() {
        $.ajax({
            url: "ready_refresh",
            success: function(getData) {
                var numData = JSON.parse(getData);
                var dataTable = "";
                if (numData.successfully === true) {

                    for (let index = 0; index < numData.list.length; index++) {

                        if (numData.list[index].status_pay == 0) {
                            dataTable = "<div class='badge badge-warning'>ยังไม่ได้ชำระเงิน</div>";
                        } else {
                            dataTable = "<div class='badge badge-success'>ชำระเงินเรียบร้อยแล้ว</div>";
                        }
                        document.getElementById("test" + index).innerHTML = dataTable;

                    }


                }



            }
        });
    };

    setInterval(getDataFromDb, 2000);
</script>