<style>
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 33.33%;
        float: left;
        position: relative
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f0c1";
        text-align: center;
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f016";
        text-align: center;
    }

    /* #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d";
        text-align: center;
    } */

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
        text-align: center;
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: orange
    }
</style>
<!-- <style>
    input.invalid {
        background-color: #ffdddd;
    }

    .tab {
        display: none;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style> -->
<br>
<h2 class="text-center" style="margin-top: 15px;">Upload + </h2>
<hr class="line_package">
<br>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-1"></div>
        <div class="col-lg-10 col-md-10 col-10">
            <ul id="progressbar">
                <li class="active" id="account"><strong>Search Item</strong></li>
                <li id="personal"><strong>Add file upload +</strong></li>
                <!-- <li id="payment"><strong>Payment</strong></li> -->
                <li id="confirm"><strong>Finish</strong></li>
            </ul>
            <article class="single_upload input-upload">
                <div class="row">
                    <div class="col-12">
                        <form action="upload_search" method="post">
                            <div class="tab">
                                <div class="row account_form">
                                    <div class="col-md-9 col-xs-9 col-sm-9">
                                        <p>
                                            <label class="font-size-upload"> Search Item</label>
                                            <input name="search_item" class="form-control" placeholder="Search Item *" type="text" required>
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <p class="inputKuy">
                                            <label class="font-size-upload"> Select Item</label>
                                            <select class="form-control" name="search_category" id="categori1" required>
                                                <option selected disabled><b>-- Select item --</b></option>
                                                <option value="Accessories">Accessories</option>
                                                <option value="Accessories & More">Accessories & More</option>
                                                <option value="Butters & Eggs">Butters & Eggs</option>
                                                <option value="Camera & Video">Camera & Video</option>
                                                <option value="Mornitors">Mornitors</option>
                                                <option value="Tablets">Tablets</option>
                                                <option value="Laptops">Laptops</option>
                                                <option value="Handbags">Handbags</option>
                                                <option value="Headphone & Speaker">Headphone & Speaker</option>
                                                <option value="Herbs & botanicals">Herbs & botanicals</option>
                                                <option value="Vegetables">Vegetables</option>
                                                <option value="Shop">Shop</option>
                                                <option value="Laptops & Desktops">Laptops & Desktops</option>
                                                <option value="Watchs">Watchs</option>
                                                <option value="Electronic">Electronic</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-9 col-xs-9 col-sm-9 "></div>
                                    <div class="col-md-3 col-xs-3 col-sm-3 ">
                                        <button type="button" class="btn btn-success">Add Item</button>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <p>
                                            <label class="font-size-upload"> Put Your topic</label>
                                            <textarea name="search_code" placeholder="Search Code *" class="form-control" rows="5"></textarea>
                                        </p>
                                        <button type="submit" class="btn btn-info">ADD FILE UPLOAD +</button>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab">
                                <div class="col-md-12">
                                    <p>
                                        <label class="font-size-upload"> Setting Your Preview</label>
                                        <input name="Select_Code" placeholder="Select Code *" type="text" class="form-control">
                                    </p>
                                </div>
                            </div> -->
                            <!-- <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                            </div> -->

                        </form>
                    </div>
                    <!-- <button type="button" class="btn btn-success" style="width: 100%;">Add more file</button> -->
                    <!-- <div class="col-6">
                        <label for="" class="font-size-upload">Upload PDF</label>
                        <div id="dropzone">
                            <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </article>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<br>