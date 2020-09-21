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
                                        <table class="table table-hover zero-configuration">
                                            <thead>
                                                <tr>

                                                    <th style="display: none;">#</th>
                                                    <th>Store Id</th>
                                                    <th>User</th>
                                                    <th>country</th>
                                                    <!-- <th>File Name</th> -->
                                                    <th>Note</th>
                                                    <th>File</th>
                                                    <th>create_at</th>
                                                    <!-- <th>section</th> -->
                                                    <th>tool</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($store as $keys => $orders) { ?>
                                                    <?php if ($orders['status_chack']) : ?>

                                                    <?php else : ?>

                                                        <tr>
                                                            <td style="display: none;"><?php echo $orders['create_at']; ?></td>
                                                            <td><?php echo $orders['store_id']; ?></td>
                                                            <td><?php echo $orders['userId']; ?></td>
                                                            <td><?php echo $orders['countryName']; ?></td>
                                                            <td>
                                                                <?php if (!empty($orders['note'])) { ?>
                                                                    <a href="#" data-toggle="modal" data-target="#note<?php echo $orders['store_id']; ?>"><i class="feather icon-search"></i></a>
                                                                    <div class="modal fade" id="note<?php echo $orders['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="note" aria-hidden="true">
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
                                                                                        <?= $orders['note']; ?>
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
                                                            <td>
                                                                <a href="" data-toggle="modal" data-target="#folderch<?php echo $orders['store_id']; ?>"><i class="feather icon-folder" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                <div class="modal fade" id="folderch<?php echo $orders['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Folder check For sell</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php $tus = $this->db->get_where('tbl_upload_store', ['store_id' =>  $orders['store_id']])->result_array();  ?>
                                                                                <table class="table table-hover zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Store Id</th>
                                                                                            <th>File Name</th>
                                                                                            <th>File</th>
                                                                                            <th>create_at</th>
                                                                                            <th>section</th>
                                                                                            <th>tool</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($tus as $key => $tus) : ?>
                                                                                            <tr>
                                                                                                <td><?php echo $tus['store_id']; ?></td>
                                                                                                <td> <?php echo $tus['file_name']; ?></td>
                                                                                                <td>
                                                                                                    <?php
                                                                                                    $file_nameS = $tus['file_name'];
                                                                                                    $infoGT = pathinfo($file_nameS, PATHINFO_EXTENSION);
                                                                                                    ?>
                                                                                                    <?php if ($infoGT == 'pdf' || $infoGT == 'jpg' || $infoGT == 'JPG' || $infoGT == 'png' || $infoGT == 'PNG') : ?>
                                                                                                        <a href="<?php echo $tus['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php else : ?>
                                                                                                        <a href="" id="officeviewer2<?php echo $tus['id']; ?>" data-file="<?php echo $tus['file_name']; ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                    <?php endif; ?>
                                                                                                    <script type="text/javascript">
                                                                                                        $(function() {
                                                                                                            $("#officeviewer2<?php echo $tus['id']; ?>").on("click", function() {
                                                                                                                var f = $(this).data('file');
                                                                                                                var viewerAgent = 'https://view.officeapps.live.com/op/view.aspx?src=';
                                                                                                                var fileUrl = '<?php echo base_url() ?>uploads/Store/';
                                                                                                                var fileData = $(this).data('file'); // ได้ชื่อไฟล์ที่เรากำหนดใน data-file
                                                                                                                var fullPathFile = viewerAgent + fileUrl + fileData;
                                                                                                                console.log(fullPathFile);
                                                                                                                $("#officeviewer2<?php echo $tus['id']; ?>").attr("href", fullPathFile);
                                                                                                            });
                                                                                                        });
                                                                                                    </script>
                                                                                                </td>
                                                                                                <td><?php echo $tus['create_at']; ?></td>
                                                                                                <td>
                                                                                                    <select class="form-control" name="id_status" id="categories" data-catagory="<?php echo $tus['id']; ?>">
                                                                                                        <option value="" selected disabled>Select Section</option>
                                                                                                        <option value="1" <?php if ($tus['section'] == 1) echo 'selected'; ?>>section 1</option>
                                                                                                        <option value="2" <?php if ($tus['section'] == 2) echo 'selected'; ?>>section 2</option>
                                                                                                        <option value="3" <?php if ($tus['section'] == 3) echo 'selected'; ?>>section 3</option>
                                                                                                        <option value="4" <?php if ($tus['section'] == 4) echo 'selected'; ?>>section 4</option>
                                                                                                        <option value="5" <?php if ($tus['section'] == 5) echo 'selected'; ?>>section 5</option>
                                                                                                        <option value="6" <?php if ($tus['section'] == 6) echo 'selected'; ?>>section 6</option>
                                                                                                        <option value="7" <?php if ($tus['section'] == 7) echo 'selected'; ?>>section 7</option>
                                                                                                        <option value="8" <?php if ($tus['section'] == 8) echo 'selected'; ?>>section 8</option>
                                                                                                        <option value="9" <?php if ($tus['section'] == 9) echo 'selected'; ?>>section 9</option>
                                                                                                        <option value="10" <?php if ($tus['section'] == 10) echo 'selected'; ?>>section 10</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <button onclick="confirmalertunlock('<?php echo $tus['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false">
                                                                                                        Reject
                                                                                                    </button>
                                                                                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModallCenter2<?php echo $tus['id']; ?>" type="button" aria-haspopup="true" aria-expanded="false">
                                                                                                        dedug
                                                                                                    </button>

                                                                                                    <div class="modal fade" id="exampleModallCenter2<?php echo $tus['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                        <form action="status_cut_score" method="POST">
                                                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

                                                                                                                <input type="hidden" name="id" value="<?php echo $tus['id']; ?>">
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

                                                                                                                                <input type="text" class="form-control" name="CM" value="<?php echo $tus['userId']; ?>" placeholder="Enter score" readonly>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                                                <label for="helpInputTop">Order Id</label>

                                                                                                                                <input type="text" class="form-control" name="Order" value="<?php echo $tus['store_id']; ?>" placeholder="Enter score" readonly>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class=" col-xl-6 col-md-6 col-6 mb-1">

                                                                                                                            <div class="form-group" style="text-align: left;">
                                                                                                                                <label for="helpInputTop">Latest score</label>
                                                                                                                                <?php $user_score = $this->db->get_where('tbl_user', ['idUser' => $tus['userId']])->row_array(); ?>
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
                                                                                        <?php endforeach; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <?php echo $orders['create_at']; ?>
                                                            </td>
                                                            <td>
                                                                <a href="check_com?id=<?php echo $orders['store_id']; ?>" class="btn btn-success " aria-haspopup="true" aria-expanded="false">
                                                                    Done <?php echo $orders['store_id']; ?>
                                                                </a>
                                                            </td>
                                                        </tr>


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