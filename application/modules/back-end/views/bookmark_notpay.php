<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Bookmark Not Pay</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Bookmark Not Pay
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

                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Bookmark Not Pay</h4>
                                </div>
                                <div class="col-1 text-center">
                                    <?php if ($bookmark_all_not == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($bookmark_all_not as $key => $datata) {
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
                                        <table class="table table-hover zero-configuration" id="loading_img_spin">
                                            <thead>
                                                <tr>
                                                    <th>Order id</th>
                                                    <th>Video</th>
                                                    <th>User id</th>
                                                    <th>Country</th>
                                                    <th>DM</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>DM File</th>
                                                    <th>price File</th>
                                                    <th>Date Required</th>
                                                    <th>Date Order</th>
                                                    <th>Status</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bookmark_all_not as $keyBook => $bookmark_all_not) { ?>
                                                    <tr>
                                                        <td><?php echo $bookmark_all_not['order_upload'] ?></td>
                                                        <td><?php echo $bookmark_all_not['video_lang'] == 1 ? 'TH' : 'EN' ; ?></td>
                                                        <td><?php echo $bookmark_all_not['countryName'] ?></td>
                                                        <td>

                                                            <?php if (empty($bookmark_all_not['id_document'])) : ?>
                                                                -
                                                            <?php else : ?>
                                                                <?php $show_dm = $this->db->group_by('id_document')->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark_all_not['order_upload']])->result_array(); ?>
                                                                <?php foreach ($show_dm as $keyBook => $show_dm) { ?>

                                                                    <?php if ($show_dm['id_document'] == '') : ?>
                                                                        -
                                                                    <?php else : ?>
                                                                        <span class="badge badge-primary"><?php echo $show_dm['id_document'] ?></span>
                                                                    <?php endif; ?>

                                                                <?php } ?>
                                                            <?php endif; ?>

                                                        </td>

                                                        <td><span data-toggle="modal" data-target="#exampleModala<?php echo $bookmark_all_not['order_upload']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $bookmark_all_not['order_upload']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $bookmark_all_not['order_upload']])->result_array(); ?>
                                                                                    <tr>
                                                                                        <th>Order id</th>
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
                                                                                            <td><?php echo $order['created_at_buy'] ?></td>
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
                                                            <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $bookmark_all_not['order_upload']])->result_array(); ?>

                                                            <?php if (!empty($order)) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalk<?php echo $bookmark_all_not['order_upload']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalk<?php echo $bookmark_all_not['order_upload']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        <tr>
                                                                                            <th>Order id</th>
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
                                                            <?php else : ?>

                                                                -

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>

                                                            <?php if (!empty($bookmark_all_not['id_document'])) : ?>
                                                                <span data-toggle="modal" data-target="#exampleModalc<?php echo $bookmark_all_not['order_upload']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                                <div class="modal fade" id="exampleModalc<?php echo $bookmark_all_not['order_upload']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Document_File <?php echo $bookmark_all_not['order_upload'] ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php $dm_cc = $this->db->get_where('tbl_bookmark', ['id_orderBuy' => $bookmark_all_not['orderby']])->result_array(); ?>
                                                                                <?php foreach ($dm_cc as $key => $dm_cc) { ?>
                                                                                    <?php $dm_c11 = $this->db->get_where('tbl_upload_main_search_sub', ['dm_sub' => $dm_cc['id_document']])->result_array(); ?>
                                                                                    <?php if (!empty($dm_cc['id_document'])) : ?>
                                                                                        <p>
                                                                                            <h3><?php echo $dm_cc['id_document']; ?></h3>
                                                                                        </p>

                                                                                        <table class="table zero-configuration">
                                                                                            <thead>
                                                                                                <tr>

                                                                                                    <th>Rewrite</th>
                                                                                                    <th>File Name</th>
                                                                                                    <th>File</th>
                                                                                                    <th>create</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach ($dm_c11 as $key => $dm_c11) : ?>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <?php if ($dm_c11['comandnocom'] == '4') : ?>
                                                                                                                <div class="badge badge-primary">Rewrite</div>
                                                                                                            <?php else : ?>
                                                                                                                -
                                                                                                            <?php endif ?>
                                                                                                        </td>
                                                                                                        <td><?php echo $dm_c11['file_name'] ?></td>
                                                                                                        <td><a href="<?php echo $dm_c11['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a></td>
                                                                                                        <td><?php echo $dm_c11['create_at'] ?></td>
                                                                                                    </tr>
                                                                                                <?php endforeach; ?>
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
                                                        <td><?php echo $bookmark_all_not['pricr_f'] ?></td>
                                                        <td>
                                                            <?php if (date("Y-m-d H:i:s") >= $bookmark_all_not['date_re']) : ?>
                                                                <span class="badge badge-danger">หมดเวลา</span>
                                                            <?php else : ?>
                                                                <p id="demo<?php echo $bookmark_all_not['order_upload'] ?>" style="font-size: 18px;font-weight: bold;"></p>

                                                            <?php endif; ?>
                                                            <script>
                                                                var datep<?php echo $bookmark_all_not['order_upload'] ?> = "<?= $bookmark_all_not['date_re']; ?>";

                                                                // Set the date we're counting down to
                                                                var countDownDate<?php echo $bookmark_all_not['order_upload'] ?> = new Date(datep<?php echo $bookmark_all_not['order_upload'] ?>);

                                                                // Update the count down every 1 second
                                                                var x<?php echo $bookmark_all_not['order_upload'] ?> = setInterval(function() {

                                                                    // Get today's date and time
                                                                    var now<?php echo $bookmark_all_not['order_upload'] ?> = new Date();

                                                                    // Find the distance between now and the count down date
                                                                    var distance<?php echo $bookmark_all_not['order_upload'] ?> = countDownDate<?php echo $bookmark_all_not['order_upload'] ?> - now<?php echo $bookmark_all_not['order_upload'] ?>;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days<?php echo $bookmark_all_not['order_upload'] ?> = Math.floor(distance<?php echo $bookmark_all_not['order_upload'] ?> / (1000 * 60 * 60 * 24));
                                                                    var hours<?php echo $bookmark_all_not['order_upload'] ?> = Math.floor((distance<?php echo $bookmark_all_not['order_upload'] ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes<?php echo $bookmark_all_not['order_upload'] ?> = Math.floor((distance<?php echo $bookmark_all_not['order_upload'] ?> % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds<?php echo $bookmark_all_not['order_upload'] ?> = Math.floor((distance<?php echo $bookmark_all_not['order_upload'] ?> % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo<?php echo $bookmark_all_not['order_upload'] ?>").innerHTML = days<?php echo $bookmark_all_not['order_upload'] ?> + "Day " + hours<?php echo $bookmark_all_not['order_upload'] ?> + "h " +
                                                                        minutes<?php echo $bookmark_all_not['order_upload'] ?> + "m " + seconds<?php echo $bookmark_all_not['order_upload'] ?> + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance<?php echo $bookmark_all_not['order_upload'] ?> < 0) {
                                                                        clearInterval(x<?php echo $bookmark_all_not['order_upload'] ?>);
                                                                        document.getElementById("demo<?php echo $bookmark_all_not['order_upload'] ?>").innerHTML = "หมดเวลา";
                                                                    }
                                                                }, 1000);
                                                            </script>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $ab = explode(" ", $bookmark_all_not['created_at_buy']);
                                                            $dateXX = date('Y-m-d H:i:s', strtotime($bookmark_all_not['created_at_buy'] . "+1 days"));
                                                            ?>
                                                            <?php if ($dateXX <= date('Y-m-d H:i:s')) : ?>
                                                                <span class="badge badge-danger">หมดเวลาชำระเงิน</span>
                                                            <?php else : ?>
                                                                <?php echo $bookmark_all_not['created_at_buy']; ?>
                                                            <?php endif; ?>
                                                        </td>



                                                        <td>
                                                            <?php if ($bookmark_all_not['Stp'] == 'complete' && $bookmark_all_not['Sadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-success">Original</span>
                                                            <?php elseif ($bookmark_all_not['Stp'] == 'rewrite'  && $bookmark_all_not['Sadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Rewrite</span>
                                                            <?php elseif ($bookmark_all_not['Stp'] == 'notcomplete'  && $bookmark_all_not['Sadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-primary">Not complete</span>
                                                            <?php elseif ($bookmark_all_not['status_book'] == '2'  && $bookmark_all_not['Sadmin'] == '0') : ?>
                                                                <span class="badge badge-pill badge-dark" style="background-color: #f35eb0">Not Satisfired</span>
                                                            <?php elseif ($bookmark_all_not['Sadmin'] == '1') : ?>
                                                                <span class="badge badge-pill badge-warning">StockAdmin</span>
                                                            <?php else : ?>
                                                                -
                                                            <?php endif; ?>
                                                        </td>

                                                        <td>
                                                            <button type="button" data-toggle="modal" data-target="#exampleModall<?php echo $bookmark_all_not['order_upload']; ?>" class="btn btn-primary mr-1 mb-1">Edit</button>
                                                            <div class="modal fade" id="exampleModall<?php echo $bookmark_all_not['order_upload']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Quotation edit </h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="bookmark_notpay_edit" method="POST">
                                                                                <input type="text" value="<?php echo $bookmark_all_not['order_upload']; ?>" name="id_order" hidden>
                                                                                <input type="hidden" name="user_id" value="<?php echo $bookmark_all_not['user_upload']; ?>">
                                                                                <?php
                                                                                $this->db->group_by('dm_sub');
                                                                                $this->db->order_by('dm_sub', 'asc');
                                                                                $query = $this->db->get('tbl_upload_main_search_sub')->result_array();
                                                                                ?>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="book">Document ID</label>
                                                                                        <select name="DM[]" id="" class="select2 form-control dmsub" multiple="multiple">
                                                                                            <option value="" disabled>--- Select DM ---</option>
                                                                                            <?php foreach ($query as $key => $query) { ?>
                                                                                                <option value="<?php echo $query['dm_sub']; ?>"><?php echo $query['dm_sub']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">Order</label>
                                                                                        <input type="text" class="form-control" name="Order" value="<?php echo $bookmark_all_not['order_upload']; ?>" placeholder="Enter Order" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">price</label>
                                                                                        <input type="text" class="form-control" name="price_file" value="<?php echo $bookmark_all_not['pricr_f']; ?>" placeholder="Enter price" required>
                                                                                    </div>

                                                                                </div>
                                                                                <?php
                                                                                $dateq = explode(' ', $bookmark_all_not['date_re']);
                                                                                ?>
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">date required</label>
                                                                                        <input type="date" class="form-control" name="Daterequired" min="<?php echo $dateq[0]; ?>" value="<?php echo $dateq[0]; ?>" placeholder="Enter price" required>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">Status</label>
                                                                                        <select name="status_cp" class="form-control" id="status_cp<?php echo $stored['order_id']; ?>" required>
                                                                                            <option value="" selected disabled>select</option>
                                                                                            <option value="complete">Original</option>
                                                                                            <option value="notcomplete">Not Complete</option>
                                                                                            <option value="rewrite">Rewrite</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Edit</button>

                                                                        </div>

                                                                    </div>
                                                                    </form>
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