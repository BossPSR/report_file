<!-- BEGIN: Content-->
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
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

        <?php
        $this->db->select('*');
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->group_by('tbl_bookmark.id_orderBuy');

        $datata = $this->db->get()->result_array();

        ?>

        <div class="content-body">
            <div class="row">

            </div>
            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Bookmark</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($datata == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($datata as $key => $datata) {
                                            $e++;
                                        } ?>
                                        <h3 class="card-title "><?php echo $e += 0; ?></h3>
                                    <?php endif; ?>
                                    <h3 class="check_list_not"> จำนวนออเดอร์ </h3>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table zero-configuration" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>order Id</th>
                                                    <th>User Id</th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>Document File</th>
                                                    <th>Team File</th>
                                                    <th>Date Required</th>
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
                                                            <?php if (empty($bookmark['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['orderby']])->result_array(); ?>
                                                                <?php foreach ($show_dm as $keyBook => $show_dm) { ?>

                                                                    <?php if ($show_dm['id_document'] == '') : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <?php echo $show_dm['id_document'] ?><br>
                                                                    <?php endif; ?>

                                                                <?php } ?>
                                                            <?php endif; ?>
                                                        </td>

                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark['orderby']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark['orderby']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
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
                                                        <td><span data-toggle="modal" data-target="#exampleModaly<?php echo $bookmark['orderby']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModaly<?php echo $bookmark['orderby']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">GT File</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark['orderby']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name_GT'] ?></td>
                                                                                            <td><a href="<?php echo $order['path_GT'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
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

                                                            <?php if ($bookmark['status_book'] == '1') : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['store_id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $bookmark['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document_File</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <?php foreach ($dm as $key => $dm) { ?>
                                                                                    <?php if (!empty($dm['id_document'])) : ?>
                                                                                        <p><b>
                                                                                                <h3><?php echo $dm['id_document']; ?></h3>
                                                                                            </b></p>
                                                                                        <table class="table ">
                                                                                            <thead>

                                                                                                <?php 
                                                                                                $this->db->order_by("create_at", "desc");
                                                                                                $orderss = $this->db->get_where('tbl_upload_store', ['store_id' => $dm['store_id']])->result_array(); 
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store Id</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                                    <tr>

                                                                                                        <td>
                                                                                                            <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                                -
                                                                                                            <?php else : ?>
                                                                                                                <div class="badge badge-primary">Relive</div>
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $orderss['store_id'] ?></td>
                                                                                                        <td><?php echo $orderss['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $orderss['create_at'] ?></td>


                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php else : ?>

                                                                -

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>


                                                            <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark['id_orderBuy']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalc<?php echo $bookmark['id_orderBuy']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Team File </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['id_orderBuy']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Relive</th>
                                                                                        <th>Store Id</th>
                                                                                        <th>File Name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                        <tr>

                                                                                            <td>
                                                                                                <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                    -
                                                                                                <?php else : ?>
                                                                                                    <div class="badge badge-primary">Relive</div>
                                                                                                <?php endif ?>
                                                                                            </td>
                                                                                            <td><?php echo $orderss['store_id'] ?></td>
                                                                                            <td><?php echo $orderss['file_name'] ?></td>
                                                                                            <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                            <td><?php echo $orderss['create_at'] ?></td>


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
                                                            <?php } ?>

                                                        </td>
                                                        <td>   
                                                 
                                                        <?php $show_dm_c = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark['order_save']])->row_array(); ?>
                                                          
                                                        <?php $show_dm_c1 = $this->db->get_where('tbl_upload_main_search', ['id_doc' => $show_dm_c['id_document']])->row_array(); ?>
                                                        
                                                        <?php  $show_dm_c2 = $this->db->get_where('tbl_upload_store', ['store_id' => $show_dm_c1['upload_store_id'],'status_check_drop' => '11'])->row_array(); ?>
                                                            <?php if($show_dm_c2 == true):?>
                                                                <a href="Add_bookmake?id=<?php echo $bookmark['order_save'] ?> "><button type="button" class="btn btn-success mr-1 mb-1"><i class="feather icon-download-cloud"></i> Drop file</button></a>
                                                            <?php else:?>
                                                            
                                                           <a href="Add_bookmake?id=<?php echo $bookmark['order_save'] ?> "><button type="button" class="btn btn-primary mr-1 mb-1"><i class="feather icon-download-cloud"></i> Drop file</button></a>
                                                            <?php endif;?>
                                                            <?php if ($bookmark['status_delivery'] == '1') : ?>
                                                                <button type="button" class="btn btn-secondary mr-1 mb-1" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-navigation"></i> delivery file</button>
                                                            <?php else : ?>
                                                                <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#exampleModalu<?php echo $bookmark['order_save']; ?>"><i class="feather icon-navigation"></i> delivery file</button>
                                                            <?php endif; ?>
                                                            <div class="modal fade" id="exampleModalu<?php echo $bookmark['order_save']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">delivery file</h5>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h3>
                                                                                <p>delivery file </p>
                                                                            </h3>
                                                                            <form action="sendEmail_delivery_pay" method="POST">
                                                                                <input type="hidden" name="id" value="<?php echo $bookmark['order_save']; ?>">

                                                                                <?php foreach ($dm1 as $key => $dm1) { ?>
                                                                                    <?php if (!empty($dm1['id_document'])) : ?>
                                                                                        <p><b>
                                                                                                <h3><?php echo $dm1['id_document']; ?></h3>
                                                                                            </b></p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <?php $orderss = $this->db->get_where('tbl_upload_store', ['store_id' => $dm1['store_id'],])->result_array(); ?>

                                                                                                <tr>
                                                                                                    <th>Select</th>
                                                                                                    <th>Relive</th>
                                                                                                    <th>Store Id</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <label class="container">
                                                                                                                <input type="checkbox" class="checkmark" name="order_id[]" value="<?php echo $orderss['id'] ?>">
                                                                                                                <span class="checkmark"></span>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            <?php if ($orderss['relive_status'] == '0') : ?>
                                                                                                                -
                                                                                                            <?php else : ?>
                                                                                                                <div class="badge badge-primary">Relive</div>
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $orderss['store_id'] ?></td>
                                                                                                        <td><?php echo $orderss['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $orderss['create_at'] ?></td>


                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php else : ?>

                                                                                    <?php endif; ?>
                                                                                <?php } ?>
                                                                                <h3>
                                                                                    <p>Team file</p>
                                                                                </h3>
                                                                                <table class="table zero-configuration">
                                                                                    <thead>
                                                                                        <?php $orderss = $this->db->get_where('tbl_upload_order_team', ['order_id' => $bookmark['order_id']])->result_array(); ?>
                                                                                        <tr>
                                                                                            <th>Select</th>

                                                                                            <th>Order Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($orderss as $keys => $orderss) { ?>
                                                                                            <tr>
                                                                                                <td><label class="container">
                                                                                                        <input type="checkbox" class="checkmark" name="order_team[]" value="<?php echo $orderss['id'] ?>">
                                                                                                        <span class="checkmark"></span>
                                                                                                    </label>
                                                                                                </td>

                                                                                                <td><?php echo $orderss['order_id'] ?></td>
                                                                                                <td><?php echo $orderss['file_name'] ?></td>
                                                                                                <td><a href="<?php echo $orderss['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                <td><?php echo $orderss['create_at'] ?></td>


                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </td>
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

<!-- <script type="text/javascript">
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
</script> -->