<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Store For buy </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Store For buy
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
                                    <h4 class="card-title">Store For buy</h4>
                                </div>
                                <div class="col-1 text-center">
                                <?php if ($stored == '') : ?>
                                        <h3 class="card-title ">0</h3>
                                    <?php else : ?>
                                        <?php $e = 0; ?>
                                        <?php foreach ($stored as $key => $datata) {
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
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>User</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
                                                    <th>create Order</th>
                                                    <th>Date Required</th>
                                                    <th>Confirmed order</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $i = 1;
                                                $e = 1;
                                                $y = 1;
                                                foreach ($stored as $key => $stored) {
                                                ?>



                                                    <tr>
                                                        <td><?php echo $y++; ?></td>
                                                        <td><?php echo $stored['order_id']; ?></td>
                                                        <td><?php echo $stored['userId']; ?></td>
                                                        <td>
														<?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stored['order_id']])->result_array(); ?>
														<?php if(empty($order)){ ?>
																-
														<?php }else{ ?>
                                                            <span data-toggle="modal" data-target="#exampleModala<?php echo $stored['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModala<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                   
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $e++; ?></td>
                                                                                            <td><?php echo $order['order_id'] ?></td>
                                                                                            <td><?php echo $order['file_name'] ?></td>
                                                                                            <?php
                                                                                            $PDF =  explode(".", $order['path']);
                                                                                            ?>
                                                                                            <td>
                                                                                                <?php if ($PDF[1] == 'pdf') : ?>
                                                                                                    <a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                <?php else : ?>

                                                                                                    <a href="https://view.officeapps.live.com/op/view.aspx?src=<?php echo base_url($order['path'])  ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                                <?php endif; ?>
                                                                                            </td>
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
															<?php } ?>
                                                        </td>
                                                        <td>
															<?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stored['order_id']])->result_array(); ?>
															<?php if(empty($order)){ ?>
																	-
															<?php }else{ ?>
                                                            <span data-toggle="modal" data-target="#exampleModalb<?php echo $stored['id']; ?>"><i class="feather icon-file-text" style="font-size: 25px;"></i></span>
                                                            <div class="modal fade" id="exampleModalb<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                        <th>#</th>
                                                                                        <th>Order Id</th>
                                                                                        <th>File Name</th>
                                                                                        <th>File</th>
                                                                                        <th>create</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($order as $keys => $order) { ?>
                                                                                        <tr>
                                                                                            <td><?php echo $i++; ?></td>
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
															<?php } ?>
                                                        </td>
                                                        <td><?php echo $stored['create_at']; ?></td>
                                                        <td>
                                                            <a  href="" data-toggle="modal" data-target="#exampleModaldate<?php echo $stored['id']; ?>"><?php echo $stored['date_required']; ?>  <i class="feather icon-edit-2" style="font-size: 25px;"></i></a>
                                                            <div class="modal fade" id="exampleModaldate<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <form action="edit_date_required" method="POST">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            
                                                                                <input type="hidden" name="order_id" value="<?php echo $stored['order_id']; ?>">
                                                                        <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Date Required</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body row" style="text-align: center;margin: 45px 0;">
                                                                                    
                                                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                                                        <div class="form-group" style="text-align: left;">
                                                                                            <label for="helpInputTop">Date Required</label>
                                                                                            <input type="date" class="form-control" name="date_required" value="<?php echo $stored['date_required']; ?>" placeholder="Enter score" >
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
                                                        <td> <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModallCenter<?php echo $stored['id']; ?>">
                                                                Satisfired

                                                            </button>
                                                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModallCenterb<?php echo $stored['id']; ?>">
                                                                Not Satisfired

                                                            </button>
                                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModallCenterc<?php echo $stored['id']; ?>">
                                                                Reject

                                                            </button>
                                                        </td>
                                                    </tr>



                                                    <div class="modal fade" id="exampleModal<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">check Order</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="back_store_add_com" method="POST" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <iframe src="<?php echo $stored['path']; ?>" width="100%" height="500px"></iframe>
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $stored['id']; ?>">
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
                                                    </div>


                                                    <div class="modal fade" id="exampleModallCenter<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="#" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['id']; ?>">
                                                            <input type="hidden" name="orderid" value="<?php echo $stored['order_id']; ?>">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Satisfired</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row" id="first_goal<?php echo $stored['id'];?>">
                                                                            <div class="col-xl-9 col-md-6 col-9 mb-1" style="padding-left: 28px;">
                                                                                <?php $chek_book  = $this->db->get('tbl_upload_main_search')->result_array(); ?>
                                                                                <label for="basicInput">Document ID</label>
                                                                                <select name="Document[]" id="test" onClick="add_select<?php echo $stored['id'];?>(this);" class="form-control "   required>
                                                                                    <option value="" selected disabled id="selected_check">select</option>
                                                                                    <?php foreach ($chek_book as $key => $chek_book) { ?>
                                                                                        <option value="<?php echo $chek_book['id_doc'] ?>" class="numDocument<?php echo $stored['id']; ?>"><?php echo $chek_book['id_doc'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                                <input type="hidden" id="DocumentResult<?php echo $stored['id'];?>" name="DocumentResult[]">
                                                                            </div>
                                                                            <div class="col-xl-3 col-md-6 col-3 mb-1" id="first_goal<?php echo $stored['id'];?>" style=" margin-top: 19px;">
                                                                                <button type="button" class="btn btn-info" onclick="add_goal<?php echo $stored['id'];?>(this);">เพิ่ม</button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="basicInput"></label>

                                                                                <?php $chek_name  = $this->db->get_where('tbl_user', ['idUser' => $stored['userId']])->row_array(); ?>
                                                                                <label for="basicInput">Customer code</label>
                                                                                <input type="text" name="Customer" class="form-control" id="Customer<?php echo $stored['id'];?>" value="<?php echo $chek_name['idUser']; ?>" placeholder="Enter Document ID" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="Order" id="Order<?php echo $stored['id'];?>" value="<?php echo $stored['order_id']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">price</label>
                                                                                <input type="text" class="form-control" name="price_file" id="price_fileSatisfired<?php echo $stored['id'];?>" value="<?php echo $stored['price_file']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" id="Daterequired<?php echo $stored['id'];?>" value="<?php echo $stored['date_required']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Quality File</label>
                                                                                <select name="status_cp" class="form-control" id="status_cp<?php echo $stored['id'];?>" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <option value="complete">Complete</option>
                                                                                    <option value="notcomplete">NotComplete</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="team">Team Id</label>
                                                                                <input type="text" class="form-control" name="team" id="team<?php echo $stored['id'];?>"  placeholder="Team" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note</label>
                                                                                <textarea class="form-control" name="note_s" id="note_s<?php echo $stored['id'];?>" value="<?php echo $stored['date_required']; ?>" rows="5" placeholder="Enter Note"></textarea>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button id="Dm_c" type="button" class="btn btn-primary" onclick="submit_data<?php echo $stored['id'];?>();">submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

 

                                                    <div class="modal fade" id="exampleModallCenterb<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                        <form action="check_NotSatisfired_order_add_com" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['id']; ?>">
                                                            <input type="hidden" name="orderid" value="<?php echo $stored['order_id']; ?>">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Not Satisfired</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">

                                                                        <?php $chek_order_user  = $this->db->get_where('tbl_user', ['idUser' => $stored['userId']])->row_array(); ?>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Customer code</label>
                                                                                <input type="text" class="form-control" name="Customer" value="<?php echo $chek_order_user['idUser']; ?>" placeholder="Enter Customer code" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="Order" value="<?php echo $stored['order_id']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">price</label>
                                                                                <input type="text" class="form-control" name="price_file" value="<?php echo $stored['price_file']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" value="<?php echo $stored['date_required']; ?>" placeholder="Enter Date required">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note</label>
                                                                                <textarea class="form-control" name="note_s" value="<?php echo $stored['date_required']; ?>" rows="5" placeholder="Enter Note"></textarea>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button type="submit" class="btn btn-primary">submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal fade" id="exampleModallCenterc<?php echo $stored['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                        <form action="reject_order_add_com" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $stored['id']; ?>">
                                                            <div class="modal-dialog " role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Reject</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note Reject</label>
                                                                                <textarea type="text" class="form-control" name="note" value="" rows="10" placeholder="Enter note" required>เอการของคุณโดน reject</textarea>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button type="submit" class="btn btn-primary">submit</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <script>
                                                        var ttt<?php echo $stored['id']; ?> = document.getElementsByClassName('numDocument<?php echo $stored['id']; ?>').length;
                                                        
                                                        function add_goal<?php echo $stored['id'];?>(e) {
                                                            $('#first_goal<?php echo $stored['id'];?>').after('<div class="row" id="first_indic<?php echo $stored['id'];?>"><div class="col-xl-9 col-md-6 col-9 mb-1" style="padding-left: 28px;" id="first_goal<?php echo $stored['id'];?>"><?php $chek_book  = $this->db->get('tbl_upload_main_search')->result_array(); ?><label for="basicInput">Document ID</label><select id="test" name="Document<?php echo $stored['id'];?>[]" onClick="add_select<?php echo $stored['id'];?>(this);" class="form-control "><option value="" selected disabled>select</option><?php foreach ($chek_book as $key => $chek_book) { ?><option value="<?php echo $chek_book['id_doc'] ?>"><?php echo $chek_book['id_doc'] ?></option><?php } ?></select></div><div class="col-xl-3 col-md-6 col-3 mb-1" id="first_goal<?php echo $stored['id'];?>" style=" margin-top: 19px;"><button type="button"  class="btn btn-danger" onclick="remove_indic<?php echo $stored['id'];?>(this);">ลบ</button></div></div>');
                                                        }

                                                        function remove_indic<?php echo $stored['id'];?>(e) {
                                                            $(e).parents('#first_indic<?php echo $stored['id'];?>').remove();
                                                        }

                                                        var data_select<?php echo $stored['id'];?> = [];

                                                        function add_select<?php echo $stored['id'];?>(e) {
                                                            
                                                            var select = $(e).val();

                                                            if (select != null) {
                                                                data_select<?php echo $stored['id'];?>.push(select);
                                                                $('#DocumentResult<?php echo $stored['id'];?>').val(data_select<?php echo $stored['id'];?>);
                                                            }
                                                            
                                                        }

                                                    </script>

                                                    <script>
                                                        function submit_data<?php echo $stored['id'];?>(params) {
                                                    
                                                        var x = document.getElementById("Customer<?php echo $stored['id'];?>").value;
                                                        var y = document.getElementById("Order<?php echo $stored['id'];?>").value;

                                                        var a = document.getElementById("Daterequired<?php echo $stored['id'];?>").value;
                                                        var b = document.getElementById("status_cp<?php echo $stored['id'];?>").value;
                                                        var c = document.getElementById("note_s<?php echo $stored['id'];?>").value;
                                                        var t = document.getElementById("team<?php echo $stored['id'];?>").value;


                                                        //$('#Dm_c').click(function() {
                                                            var v = document.getElementById("DocumentResult<?php echo $stored['id']; ?>").value;
                                                            var t = [];
                                                            var z = document.getElementById("price_fileSatisfired<?php echo $stored['id'];?>").value;
                                                                t.push(v);
                                                                
                                                            
                                                            
                                                            

                                                            if (z == "") {
                                                                swal({
                                                                    icon: "warning",
                                                                    title: "Are you sure?",
                                                                    text: "กรุณาใส่ Price ด้วยนะ",
                                                                    closeOnEsc: true,
                                                                    closeOnClickOutside: false,
                                                                    buttons: {
                                                                        cancel: true,
                                                                        confirm: true,
                                                                    },

                                                                })
                                                            } else {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: 'check_dm',
                                                                    data: {
                                                                        DocumentResult: t,

                                                                    },

                                                                    success: function(check_dm) {
                                                                        
                                                                        if (check_dm > 0) {
                                                                            swal({
                                                                                icon: "warning",
                                                                                title: "Are you sure?",
                                                                                text: "แน่ใจใช่ไหม เพราะ dm ซ้ำ",
                                                                                closeOnEsc: true,
                                                                                closeOnClickOutside: false,
                                                                                buttons: {
                                                                                    cancel: true,
                                                                                    confirm: true,
                                                                                },
                                                                                

                                                                            }).then(function(isConfirm) {
                                                                                if (isConfirm == true) {
                                                                                    var x = document.getElementById("Customer<?php echo $stored['id'];?>").value;
                                                                                    var y = document.getElementById("Order<?php echo $stored['id'];?>").value;

                                                                                    var a = document.getElementById("Daterequired<?php echo $stored['id'];?>").value;
                                                                                    var b = document.getElementById("status_cp<?php echo $stored['id'];?>").value;
                                                                                    var c = document.getElementById("note_s<?php echo $stored['id'];?>").value;
                                                                                    var t = document.getElementById("team<?php echo $stored['id'];?>").value;

                                                                                    var z = document.getElementById("price_fileSatisfired<?php echo $stored['id'];?>").value;

                                                                                    $.ajax({
                                                                                        type: 'POST',
                                                                                        url: 'check_order_add_com',
                                                                                        data: {
                                                                                            DocumentResult: t,
                                                                                            Customer: x,
                                                                                            Order: y,
                                                                                            price_file: z,
                                                                                            Daterequired: a,
                                                                                            status_cp: b,
                                                                                            note_s: c,
                                                                                            team: t,
                                                                                        },
                                                                                        success: function(success) {
                                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                                button: false,

                                                                                            });
                                                                                            setTimeout("location.reload(true);", 1000);
                                                                                        }
                                                                                    });

                                                                                } else {
                                                                                    
                                                                                    swal("Cancelled", "Your imaginary file is safe :)", "error").then(function(e){
                                                                                        if (e === true) {
                                                                                            document.getElementById("test").selectedIndex = "0";
                                                                                            document.getElementById("DocumentResult<?php echo $stored['id'];?>").value = "";
                                                                                            data_select<?php echo $stored['id'];?> = [];
                                                                                        }
                                                                                        
                                                                                        console.log(e);
                                                                                    });

                                                                                    
                                                                                    
                                                                                }
                                                                            });

                                                                        } else {
                                                                            swal({
                                                                                icon: "warning",
                                                                                title: "Are you sure?",
                                                                                text: "ไม่ซ้ำ",
                                                                                closeOnEsc: true,
                                                                                closeOnClickOutside: false,
                                                                                buttons: {
                                                                                    cancel: true,
                                                                                    confirm: true,
                                                                                },
                                                                            }).then(function(isConfirm) {

                                                                                if (isConfirm == true) {
                                                                                    var x = document.getElementById("Customer<?php echo $stored['id'];?>").value;
                                                                                    var y = document.getElementById("Order<?php echo $stored['id'];?>").value;

                                                                                    var a = document.getElementById("Daterequired<?php echo $stored['id'];?>").value;
                                                                                    var b = document.getElementById("status_cp<?php echo $stored['id'];?>").value;
                                                                                    var c = document.getElementById("note_s<?php echo $stored['id'];?>").value;

                                                                                    var z = document.getElementById("price_fileSatisfired<?php echo $stored['id'];?>").value;

                                                                                    $.ajax({
                                                                                        type: 'POST',
                                                                                        url: 'check_order_add_com',
                                                                                        data: {
                                                                                            DocumentResult: t,
                                                                                            Customer: x,
                                                                                            Order: y,
                                                                                            price_file: z,
                                                                                            Daterequired: a,
                                                                                            status_cp: b,
                                                                                            note_s: c,
                                                                                        },
                                                                                        success: function(success) {
                                                                                            swal("Good job!", "Upload for data successfull", "success", {
                                                                                                button: false,

                                                                                            });
                                                                                            setTimeout("location.reload(true);", 1000);
                                                                                        }
                                                                                    });

                                                                                } else {
                                                                                    swal("Cancelled", "Your imaginary file is safe :)", "error").then(function(e){
                                                                                        if (e === true) {
                                                                                            document.getElementById("test").selectedIndex = "0";
                                                                                            document.getElementById("DocumentResult<?php echo $stored['id'];?>").value = "";
                                                                                            data_select<?php echo $stored['id'];?> = [];

                                                                                        }
                                                                                        
                                                                                        console.log(e);
                                                                                    });
                                                                                   
                                                                                                     
                                                                                }
                                                                            });

                                                                        }


                                                                    }

                                                                });
                                                            }

                                                        }
                                                    </script>



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

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>





<!-- END: Content-->
