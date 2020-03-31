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

        <?php
        $this->db->where('status_book', 0);
        $this->db->from('tbl_upload_order');
        $this->db->group_by('order_id');
        $count_all = $this->db->count_all_results(); // Produces an integer, like 17
        ?>

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
                                    <h3 class="card-title "><?php echo $count_all; ?></h3>
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
                                                    <th style="width:18%">File Name</th>
                                                    <th>Main File</th>
                                                    <th>GT File</th>
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
                                                        <td><?php echo $stored['file_name']; ?></td>
                                                        <td>
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_order', ['order_id' => $stored['order_id']])->result_array(); ?>
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
                                                                                            $PDF =  explode(".",$order['path']);
                                                                                            ?>
                                                                                            <td> 
                                                                                            <?php if($PDF[1]=='pdf'):?>
                                                                                            <a href="<?php echo $order['path'] ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                            <?php else :?>
                                                                                                <a href="https://view.officeapps.live.com/op/view.aspx?src=<?php echo base_url($order['path'])  ?>" target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>
                                                                                            <?php endif;?>
                                                                                            </td>
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
                                                                                    <?php $order = $this->db->get_where('tbl_upload_orderGT', ['order_id' => $stored['order_id']])->result_array(); ?>
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
                                                        </td>
                                                        <td><?php echo $stored['date_required']; ?></td>
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
                                                                        <div class="row" id="first_goal">
                                                                            <div class="col-xl-9 col-md-6 col-9 mb-1" style="padding-left: 28px;">
                                                                                <?php $chek_book  = $this->db->get('tbl_upload_main_search')->result_array(); ?>
                                                                                <label for="basicInput">Document ID</label>
                                                                                <select name="Document[]" id="test" onClick="add_select(this);" class="form-control" id="Document" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <?php foreach ($chek_book as $key => $chek_book) { ?>
                                                                                        <option value="<?php echo $chek_book['id_doc'] ?>"><?php echo $chek_book['id_doc'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                                <input type="hidden" id="DocumentResult" name="DocumentResult[]">
                                                                            </div>
                                                                            <div class="col-xl-3 col-md-6 col-3 mb-1" id="first_goal" style=" margin-top: 19px;">
                                                                                <button type="button" class="btn btn-info" onclick="add_goal(this);">เพิ่ม</button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="basicInput"></label>

                                                                                <?php $chek_name  = $this->db->get_where('tbl_user', ['idUser' => $stored['userId']])->row_array(); ?>
                                                                                <label for="basicInput">Customer code</label>
                                                                                <input type="text" name="Customer" class="form-control" id="Customer" value="<?php echo $chek_name['idUser']; ?>" placeholder="Enter Document ID" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Order</label>
                                                                                <input type="text" class="form-control" name="Order" id="Order" value="<?php echo $stored['order_id']; ?>" placeholder="Enter Order" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">price test</label>
                                                                                <input type="text" class="form-control" name="price_file" id="price_fileSatisfired" value="<?php echo $stored['price_file']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">date required</label>
                                                                                <input type="date" class="form-control" name="Daterequired" id="Daterequired" value="<?php echo $stored['date_required']; ?>" placeholder="Enter price" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Quality File</label>
                                                                                <select name="status_cp" class="form-control" id="status_cp" required>
                                                                                    <option value="" selected disabled>select</option>
                                                                                    <option value="complete">Complete</option>
                                                                                    <option value="notcomplete">NotComplete</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <div class="form-group">
                                                                                <label for="helpInputTop">Note</label>
                                                                                <textarea class="form-control" name="note_s" id="note_s" value="<?php echo $stored['date_required']; ?>" rows="5" placeholder="Enter Note"></textarea>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <div class="add-data-btn mr-1">
                                                                            <button id="Dm_c" type="button" class="btn btn-primary">submit</button>
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

<script>
    function add_goal(e) {
        $('#first_goal').after('<div class="row" id="first_indic"><div class="col-xl-9 col-md-6 col-9 mb-1" style="padding-left: 28px;" id="first_goal"><?php $chek_book  = $this->db->get('tbl_upload_main_search')->result_array(); ?><label for="basicInput">Document ID</label><select id="test" name="Document[]" onClick="add_select(this);" class="form-control"><option value="" selected disabled>select</option><?php foreach ($chek_book as $key => $chek_book) { ?><option value="<?php echo $chek_book['id_doc'] ?>"><?php echo $chek_book['id_doc'] ?></option><?php } ?></select></div><div class="col-xl-3 col-md-6 col-3 mb-1" id="first_goal" style=" margin-top: 19px;"><button type="button"  class="btn btn-danger" onclick="remove_indic(this);">ลบ</button></div></div>');
    }

    function remove_indic(e) {
        $(e).parents('#first_indic').remove();
    }

    var data_select = [];

    function add_select(e) {
        var select = $(e).val();
        if (select != null) {
            data_select.push(select);
            $('#DocumentResult').val(data_select);
        }
    }


    //   $("select[name='Document[]']").change(function () {
    //         var selectedOptions = [];
    //         $("select[name='Document[]'] option:selected").each(function(){
    //             selectedOptions.push($(this).text());
    //         });
    //         $("#textareaObservation").html(selectedOptions.join(' '));
    //   });
</script>

<script>
    var x = document.getElementById("Customer").value;
    var y = document.getElementById("Order").value;
    
    var a = document.getElementById("Daterequired").value;
    var b = document.getElementById("status_cp").value;
    var c = document.getElementById("note_s").value;


    $('#Dm_c').click(function() {
        var v = document.getElementsByName("Document[]");
        var t = [];
        var z = document.getElementById("price_fileSatisfired").value;
        v.forEach((element, key) => {
            t.push(element.value);
        });

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
        }else{
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
                                var x = document.getElementById("Customer").value;
                                var y = document.getElementById("Order").value;
                                var z = document.getElementById("price_fileSatisfired").value;
                                var a = document.getElementById("Daterequired").value;
                                var b = document.getElementById("status_cp").value;
                                var c = document.getElementById("note_s").value;
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
                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                            }
                        });

                    }
                    else {
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
                                var x = document.getElementById("Customer").value;
                                var y = document.getElementById("Order").value;
                                var z = document.getElementById("price_fileSatisfired").value;
                                var a = document.getElementById("Daterequired").value;
                                var b = document.getElementById("status_cp").value;
                                var c = document.getElementById("note_s").value;
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
                                
                            } 
                            else {
                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                            }
                        });

                    }
                

                }

            });
        }


       

    }); // .then(function(isConfirm) {
    //     if (isConfirm) {

    //     }
    // })
</script>


<!-- END: Content-->