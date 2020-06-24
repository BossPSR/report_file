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
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Modify fee</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="fee" class="sr-only">fee</label>
                                                <input type="text" id="fee" class="form-control" placeholder="1-100%" name="fee">
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Modify Cashback</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="Price" class="sr-only">Price</label>
                                                <input type="number" id="Price" class="form-control" placeholder="99xxx" name="price">
                                            </div>
                                            <div class="form-group">
                                                <label for="Count" class="sr-only">Count Order</label>
                                                <input type="text" id="Count" class="form-control" placeholder="1-99" name="count">
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                                <label for="price_team" class="sr-only">Price</label>
                                                <input type="number" id="price_team" class="form-control" placeholder="999xx" name="price_team">
                                            </div>

                                            <div class="form-group">
                                                <label for="score_team" class="sr-only">Score</label>
                                                <input type="text" id="score_team" class="form-control" placeholder="999xx" name="score_team">
                                            </div>

                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content types section end -->

        </div>
    </div>
</div>
<!-- END: Content-->