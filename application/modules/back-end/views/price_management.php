<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Price management</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="back_dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Price management
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

            <!-- Content types section start -->
            <section id="content-types">

                <div class="row">
                    <?php $Modify_fee = $this->db->get('tbl_price_management', ['id' => 1])->row_array(); ?>

                    <div class="col-xl-4 col-md-12 col-sm-12">

                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Modify fee</h4>
                                </div>
                                <div class="card-body">
                                    <!-- 1 -->
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="fee" class="sr-only">fee</label>
                                            <input type="text" id="fee" class="form-control" placeholder="1-100%" name="fee" value="<?php echo $Modify_fee['price'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button class="btn btn-primary mr-1 " id="fee_Submit" type="button" aria-haspopup="true" aria-expanded="false">
                                            Submit
                                        </button>

                                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <script>
                        document.getElementById("fee_Submit").addEventListener("click", function() {
                            var v = document.getElementById("fee").value;

                            swal({
                                title: "Are you sure Edit Modify fee?",
                                text: "Are you sure you this Edit_Modify_fee ?",
                                icon: "warning",
                                buttons: true,
                                successMode: true,
                            }).then(function(isConfirm) {
                                if (isConfirm == true) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'Edit_Modify_fee',
                                    data: {
                                        fee: v,
                                    },
                                    success: function(success) {
                                        swal("Good job!", "Upload for data successfull", "success", {
                                            button: false,
                                        })
                                        setTimeout(function() {
                                            location.href = "price_mangement"
                                        }, 1000);
                                    }
                                });
                                }
                            })
                        });
                    </script>
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Modify Cashback</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <form class="form"> -->
                                    <?php $ModifyCashback = $this->db->get_where('tbl_price_management', ['id' => 2])->row_array(); ?>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="Price" class="sr-only">Price</label>
                                            <input type="number" id="Price" class="form-control" placeholder="99xxx" name="price" value="<?php echo $ModifyCashback['price'] ?>">
                                        </div>
                                        <?php $ModifyCashbackCount =  $this->db->get_where('tbl_price_management', ['id' => 3])->row_array(); ?>
                                        <div class="form-group">
                                            <label for="Count" class="sr-only">Count Order</label>
                                            <input type="text" id="Count" class="form-control" placeholder="1-99" name="count" value="<?php echo $ModifyCashbackCount['price'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button class="btn btn-primary mr-1 " id="Cashback_submit" type="button" aria-haspopup="true" aria-expanded="false">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("Cashback_submit").addEventListener("click", function() {
                            var x = document.getElementById("Price").value;
                            var y = document.getElementById("Count").value;

                            swal({
                                title: "Are you sure Edit Modify Cashback?",
                                text: "Are you sure you this Modify Cashback ?",
                                icon: "warning",
                                buttons: true,
                                successMode: true,
                            }).then(function(isConfirm) {
                                if (isConfirm == true) {
                                    $.ajax({
                                    type: 'POST',
                                    url: 'Edit_ModifyCashback',
                                    data: {
                                        price: x,
                                        count: y,
                                    },
                                    success: function(success) {
                                        swal("Good job!", "Upload for data successfull", "success", {
                                            button: false,
                                        })
                                        setTimeout(function() {
                                            location.href = "price_mangement"
                                        }, 1000);
                                    }
                                });
                                }
                               
                              
                            })
                        });
                    </script>

                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Modify Score Team</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <?php $price_team = $this->db->get_where('tbl_price_management', ['id' => 4])->row_array(); ?>
                                                <label for="price_team" class="sr-only">Price</label>
                                                <input type="number" id="price_team" class="form-control" placeholder="999xx" name="price_team" value="<?php echo $price_team['price'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <?php $Score = $this->db->get_where('tbl_price_management', ['id' => 5])->row_array(); ?>
                                                <label for="score_team" class="sr-only">Score</label>
                                                <input type="text" id="score_team" class="form-control" placeholder="999xx" name="score_team" value="<?php echo $Score['price'] ?>">
                                            </div>

                                        </div>

                                        <div class="form-actions">
                                            <button class="btn btn-primary mr-1 " id="ModifyScoreTeam" type="button" aria-haspopup="true" aria-expanded="false">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById("ModifyScoreTeam").addEventListener("click", function() {
                            var z = document.getElementById("price_team").value;
                            var u = document.getElementById("score_team").value;

                            swal({
                                title: "Are you sure Edit Modify Score Team?",
                                text: "Are you sure you this Modify Score Team ?",
                                icon: "warning",
                                buttons: true,
                                successMode: true,
                            }).then(function(isConfirm) {
                                if (isConfirm == true) {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'Edit_ModifyScoreTeam',
                                        data: {
                                            price_team: z,
                                            score_team: u,
                                        },
                                        success: function(success) {
                                            swal("Good job!", "Upload for data successfull", "success", {
                                                button: false,
                                            })
                                            setTimeout(function() {
                                                location.href = "price_mangement"
                                            }, 1000);
                                        }
                                    });
                                } 

                            })
                        });
                    </script>
                </div>
            </section>
            <!-- Content types section end -->

        </div>
    </div>
</div>
<!-- END: Content-->