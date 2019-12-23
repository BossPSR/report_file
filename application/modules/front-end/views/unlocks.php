<?php $uploadBy = $this->db->get_where('tbl_user', ['id' => $Id_unlock['userId']])->row_array(); ?>
<br>
<h2 class="text-center" style="margin-top: 15px;">Unlocks</h2>
<hr class="line_package">
<div class="container" style="max-width: 1000px;">
    <div class="row" style="margin: 0px 0 30px 0px;">
        <div class="col-lg-12 col-md-12 col-12 text-center" style="font-size: 22px;margin: 30px 0;">
            <label style="color: #656565;">Google เอกสาร: การประมวลผลคำออนไลน์สำหรับธุรกิจ | G Suite</label>
        </div>
        <div class="col-lg-1 col-md-1 col-1"></div>
        <div class="col-lg-2 col-md-2 col-2 text-center">
            <div class="menu-list">1,200</div>
            <div class="menu-bottom">Item </div>
        </div>
        <div class="col-lg-2 col-md-2 col-2 text-center">
            <div class="menu-list">260</div>
            <div class="menu-bottom">Unlocked </div>
        </div>
        <div class="col-lg-2 col-md-2 col-2 text-center">
            <div class="menu-list">2,300</div>
            <div class="menu-bottom">Viewed </div>
        </div>
        <div class="col-lg-2 col-md-2 col-2 text-center">
            <div class="menu-list">190</div>
            <div class="menu-bottom">Page </div>
        </div>
        <div class="col-lg-2 col-md-2 col-2 text-center">
            <div class="menu-list">@<?php echo $uploadBy['username']; ?></div>
            <div class="menu-bottom">Uploaded By </div>
        </div>
        <div class="col-lg-1 col-md-1 col-1"></div>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-2 col-md-2 col-2 ">
        </div>
        <div class="col-lg-8 col-md-8 col-8 ">
            <article class="single_upload input-upload">
                <div class="row">
                    <div class="col-12 margin-20">
                        <div class="text-center" style="position: relative;">
                            <label></label>
                            <div style="position: absolute;right: 0;bottom: 10%;">
                                <div style="display:inline-block;"><a href="#?uploadBy=<?php echo $uploadBy['id']; ?>&userId<?php echo $userId['id']; ?>"><button type="button" style="font-size: 12px; color:#fff;" class="btn btn-info"><i class="fa fa-plus"></i>&nbsp;&nbsp;FOLLOW</button></button></div>
                                <div style="display:inline-block;"><button type="button" style="font-size: 12px; color:#fff;" class="btn btn-warning"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;UNLOCK</button></div>
                                <div style="display:inline-block;"><button type="button" style="font-size: 12px; color:#fff;" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;REJECT</button></div>
                            </div>
                        </div>
                        <label class="pricebg">$ 600.00</label>
                        <div class="blurPDF">
                            <iframe src="<?php echo $Id_unlock['path']; ?>" width="100%" height="100%"></iframe>
                        </div>
                    </div>

                </div>
            </article>
        </div>
        <div class="col-lg-2 col-md-2 col-2 ">
        </div>

    </div>
</div>

<h2 class="text-center" style="margin-top: 15px;">Other Related Materials</h2>
<hr class="line_package">
<br>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-12 col-md-12 col-12 ">
            <article class="single_upload input-upload">
                <div class="row">
                    <div class="col-3 margin-20">
                        <label class="price">$ 600.00</label>
                        <iframe src="public/image/ExportServlet.pdf" width="100%" height="300px"></iframe>
                        <div class="text-left" style="color: #a7a7a7;">
                            <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                            <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                        </div>
                    </div>
                    <div class="col-3 margin-20">
                        <label class="price">$ 600.00</label>
                        <iframe src="public/image/ExportServlet.pdf" width="100%" height="300px"></iframe>
                        <div class="text-left" style="color: #a7a7a7;">
                            <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                            <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                        </div>
                    </div>
                    <div class="col-3 margin-20">
                        <label class="price">$ 600.00</label>
                        <iframe src="public/image/ExportServlet.pdf" width="100%" height="300px"></iframe>
                        <div class="text-left" style="color: #a7a7a7;">
                            <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                            <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                        </div>
                    </div>
                    <div class="col-3 margin-20">
                        <label class="price">$ 600.00</label>
                        <iframe src="public/image/ExportServlet.pdf" width="100%" height="300px"></iframe>
                        <div class="text-left" style="color: #a7a7a7;">
                            <span style="margin: 0px 45px;"><i class="fa fa-clock-o" aria-hidden="true"> 20/11/2562</i></span>
                            <span><i class="fa fa-eye" aria-hidden="true"> 1,501</i></span>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </div>
</div>

<br>