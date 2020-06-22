<!-- 
$arrayForTable = [];
foreach ($store as $upload_main_searchDetail) {
    $temp = [];
    $temp['id'] = $upload_main_searchDetail['id'];
    $temp['store_id'] = $upload_main_searchDetail['store_id'];
    $temp['file_name'] = $upload_main_searchDetail['file_name'];
    $temp['is_check'] = $upload_main_searchDetail['is_check'];
    $temp['create_at'] = $upload_main_searchDetail['create_at'];
    $temp['path'] = $upload_main_searchDetail['path'];
    $temp['price_file'] = $upload_main_searchDetail['price_file'];
    $temp['status_cp'] = $upload_main_searchDetail['status_cp'];
    $temp['userId'] = $upload_main_searchDetail['userId'];
    $temp['status_chack'] = $upload_main_searchDetail['status_chack'];
    $temp['section'] = $upload_main_searchDetail['section'];
    if (!isset($arrayForTable[$upload_main_searchDetail['userId']])) {
        $arrayForTable[$upload_main_searchDetail['userId']] = [];
    }
    $arrayForTable[$upload_main_searchDetail['userId']][] = $temp;
} -->



<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Check For sell</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Check For sell
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">



            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row card-header">
                                <div class="col-10">
                                    <h4 class="card-title">Check For sell</h4>
                                </div>
                                <div class="col-2 text-center">
                                    <?php if ($store == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($store as $key => $datata) {
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
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>File Name</th>
                                                    <th>Note</th>
                                                    <th>File</th>
                                                    <th>create_at</th>
                                                    <th>section</th>
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($store as $keys => $orders) { ?>
                                                    <?php if ($orders['status_chack']) : ?>

                                                    <?php else : ?>

                                                        <tr style="background: #ededed;">

                                                            <td><?php echo $orders['store_id']; ?></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <a href="check_com?id=<?php echo $orders['store_id']; ?>" class="btn btn-success " aria-haspopup="true" aria-expanded="false">
                                                                    Done <?php echo $orders['store_id']; ?>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <?php $check_for = $this->db->order_by('store_id', 'asc')->get_where('tbl_upload_store', ['store_id' => $orders['store_id'], 'is_check' => '0'])->result_array(); ?>
                                                        <?php foreach ($check_for as $keys => $check_for) { ?>
                                                            <tr>
                                                                <td><?php echo $orders['store_id']; ?></td>
                                                                <td>
                                                                    <?php echo $check_for['userId']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $file_nameS = $check_for['file_name'];
                                                                    $infoGT = pathinfo($file_nameS, PATHINFO_EXTENSION);

                                                                    ?>
                                                                    <?php if ($infoGT == 'pdf' || $infoGT == 'jpg' || $infoGT == 'png') : ?>
                                                                        <a href="<?php echo $check_for['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                    <?php else : ?>
                                                                        <a href="" id="officeviewer2<?php echo $check_for['id']; ?>" data-file="<?php echo $check_for['file_name']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                    <?php endif; ?>
                                                                    <script type="text/javascript">
                                                                        $(function() {
                                                                            $("#officeviewer2<?php echo $check_for['id']; ?>").on("click", function() {
                                                                                var f = $(this).data('file');
                                                                                var viewerAgent = 'https://view.officeapps.live.com/op/view.aspx?src=';
                                                                                var fileUrl = '<?php echo base_url() ?>uploads/Store/';
                                                                                var fileData = $(this).data('file'); // ได้ชื่อไฟล์ที่เรากำหนดใน data-file
                                                                                var fullPathFile = viewerAgent + fileUrl + fileData;
                                                                                console.log(fullPathFile);
                                                                                $("#officeviewer2<?php echo $check_for['id']; ?>").attr("href", fullPathFile);
                                                                            });
                                                                        });
                                                                    </script>
                                                                </td>
                                                                <td>
                                                                    <?php if (!empty($check_for['note'])) { ?>
                                                                        <a href="#" data-toggle="modal" data-target="#note<?php echo $check_for['store_id']; ?>"><i class="feather icon-search"></i></a>
                                                                        <div class="modal fade" id="note<?php echo $check_for['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Note</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form action="" method="POST">
                                                                                        <div class="modal-body">
                                                                                            <?= $check_for['note']; ?>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        -
                                                                    <?php } ?>
                                                                </td>
                                                                <td> <a href="<?php echo $check_for['path']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a> </td>
                                                                <td><?php echo $orders['create_at']; ?></td>
                                                                <td>
                                                                    <select class="form-control" name="id_status" id="categories" data-catagory="<?php echo $check_for['id']; ?>">
                                                                        <option value="" selected disabled>Select Section</option>
                                                                        <option value="1" <?php if ($check_for['section'] == 1) echo 'selected'; ?>>section1</option>
                                                                        <option value="2" <?php if ($check_for['section'] == 2) echo 'selected'; ?>>section2</option>
                                                                        <option value="3" <?php if ($check_for['section'] == 3) echo 'selected'; ?>>section3</option>
                                                                        <option value="4" <?php if ($check_for['section'] == 4) echo 'selected'; ?>>section4</option>
                                                                        <option value="5" <?php if ($check_for['section'] == 5) echo 'selected'; ?>>section5</option>
                                                                    </select>
                                                                </td>



                                                                <td>
                                                                    <button onclick="confirmalertunlock('<?php echo $check_for['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                        Reject
                                                                    </button>
                                                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModallCenter2<?php echo $check_for['id']; ?>" type="button" aria-haspopup="true" aria-expanded="false">
                                                                        dedug
                                                                    </button>

                                                                    <div class="modal fade" id="exampleModallCenter2<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                        <form action="status_cut_score" method="POST">
                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                                <input type="hidden" name="id" value="<?php echo $check_for['id']; ?>">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Dedug</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body row" style="text-align: center;margin: 45px 0;">
                                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                <label for="helpInputTop">CM</label>

                                                                                                <input type="text" class="form-control" name="CM" value="<?php echo $check_for['userId']; ?>" placeholder="Enter score" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                <label for="helpInputTop">Order Id</label>

                                                                                                <input type="text" class="form-control" name="Order" value="<?php echo $check_for['store_id']; ?>" placeholder="Enter score" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=" col-xl-6 col-md-6 col-6 mb-1">

                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                <label for="helpInputTop">Latest score</label>
                                                                                                <?php $user_score = $this->db->get_where('tbl_user', ['idUser' => $check_for['userId']])->row_array(); ?>
                                                                                                <input type="text" class="form-control" name="" value="<?php echo $user_score['score']; ?>" placeholder="Enter score" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-6 col-md-6 col-6 mb-1">
                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                <label for="helpInputTop">cut Score</label>
                                                                                                <input type="number" class="form-control" name="score" value="" placeholder="Enter score">
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-primary mr-1 mb-1" style="MARGIN: 15px;">Submit</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="exampleModal<?php echo $check_for['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">StoreFile</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="back_store_check_store_add_com" method="POST" class="form-horizontal">
                                                                            <div class="modal-body">
                                                                                <div class="btn-group" role="group" aria-label="Basic example" style="margin: 13px 21px;">

                                                                                </div>

                                                                                <iframe src="<?php echo $check_for['path']; ?>" width="100%" height="600px"></iframe>
                                                                                <input type="hidden" class="form-control" name="id" value="<?php echo $orders['id']; ?>">
                                                                                <div class="data-items pb-3">
                                                                                    <div class="data-fields px-2 mt-3">
                                                                                        <div class="row">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">


                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenter<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade A</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=A&price=50" class="btn btn-success">Complete</a>
                                                                                <!-- <button type="button" class="btn btn-danger"  data-dismiss="modal">Not Complete</button> -->
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterb<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade B</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=B&price=20" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=notcomplete&grad=B&price=20" class="btn btn-danger">Not Complete</a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="exampleModallCenterc<?php echo $orders['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Check Complete And Not Complete grade C</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body" style="text-align: center;margin: 45px 0;">
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=complete&grad=C&price=10" class="btn btn-success">Complete</a>
                                                                                <a href="back_store_check_store_add_com?id=<?php echo $orders['id']; ?>&com=notcomplete&grad=C&price=10" class="btn btn-danger">Not Complete </a>
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php  } ?>
                                                        <?php endif; ?>

                                                    <?php  } ?>



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
<!-- END: Content-->

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('change', '#categories', function() {
            var c = $(this).data('catagory');
            console.log($(this).val());
            $.ajax({
                type: 'POST',
                data: {
                    section: $(this).val(),
                    updateId: c
                },
                url: 'store_section',
                success: function(data) {
                    toastr.info('Success', 'Save to Setion.');
                }
            });
            return false;
        });
    });
</script>