<br>
<h2 class="text-center" style="margin-top: 15px;">My task</h2>
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
                            <th scope="col">Document</th>
                            <th scope="col">ID Order</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date Requred</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Select item</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align:center;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <script>
                            $('#download<?php echo $key; ?>').click(function() {
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
                                                id: <?php echo $qq['id']; ?>,
                                                is_confirm: 1,
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
                            });
                        </script>
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