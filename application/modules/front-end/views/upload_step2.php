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
                <li class="active" id="personal"><strong>Add file upload +</strong></li>
                <!-- <li id="payment"><strong>Payment</strong></li> -->
                <li id="confirm"><strong>Finish</strong></li>
            </ul>
            <article class="single_upload input-upload">
                <div class="row">
                    <div class="col-6">
                        <div class="tab">
                            <label for="" class="font-size-upload">Preview PDF</label>
                            <form action="fileUpload" class="dropzone" id="fileupload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    <input type="text" name="upload_id" value="<?php echo $insert_id ;?>" hidden>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="tab">
                            <label for="" class="font-size-upload">Upload PDF</label>
                            <div id="dropzone">
                                <form action="fileUploadfull" class="dropzone needsclick dz-clickable" id="demo-upload">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload.<br>
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                    </div>
                                    <input type="text" name="upload_id" value="<?php echo $insert_id ;?>" hidden>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<br>