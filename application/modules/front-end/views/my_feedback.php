<br>
<h2 class="text-center" style="margin-top: 15px;">My Feedback</h2>
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
                            <th scope="col">Document name</th>
                            <th scope="col">Document</th>
                            <th scope="col">Select item</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $p = 1;
                        $o = 1;
                        $i = 1;
                        $y = 1;
                        $r = 1;
                        ?>

                        <tr style="text-align:center;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModalMain"><i class="fa fa-file-text-o"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                                                <h5 class="modal-title" id="exampleModalLabel">Main Document</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="text-align:center;">
                                                            <th scope="col">No.</th>
                                                            <th scope="col">File</th>
                                                            <th scope="col">ID Order</th>
                                                            <th scope="col">Date Requred</th>
                                                            <th scope="col">Downloads</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr style="text-align:center;">
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModalGT<?php echo $y++; ?>"><i class="fa fa-file-text-o"></i></a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>
<!--wishlist area end -->
<!--error section area start-->
<!-- <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>No Task</h1>
                        <h2>Data Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!--error section area end-->