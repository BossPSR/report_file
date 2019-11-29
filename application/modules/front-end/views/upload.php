<br>
<h2 class="text-center" style="margin-top: 15px;">Upload + </h2>
<hr class="line_package">
<br>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">

        <div class="col-lg-12 col-md-12 col-12 ">
            <article class="single_upload input-upload">

                <div class="row">
                    <div class="col-6">
                        <div class="row account_form">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <p>
                                    <label class="font-size-upload"> Search Item</label>
                                    <input name="Search_Item" placeholder="Search Item *" type="text">
                                </p>
                            </div>
                            <div class="col-md-9 col-xs-9 col-sm-9">
                                <p>
                                    <label class="font-size-upload"> Select Item</label>
                                    <input name="Select_Item" placeholder="Select Item *" type="text">
                                </p>
                            </div>

                            <div class="col-md-3 col-xs-3 col-sm-3 plus-upload">
                                <button type="button" class="btn btn-success">Add Item</button>
                            </div>

                            <div class="col-md-12">
                                <p>
                                    <label class="font-size-upload"> Search Code</label>
                                    <input name="Search_Code" placeholder="Search Code *" type="text">
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <label class="font-size-upload"> Select Code</label>
                                    <input name="Select_Code" placeholder="Select Code *" type="text">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="" class="font-size-upload">Upload PDF</label>
                        <div id="dropzone">
                            <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12" style="    margin-top: 20px;">
                        <button type="button" class="btn btn-success" style="    width: 100%;">Add more file</button>
                    </div>
                </div>


            </article>
        </div>

    </div>
</div>
<br>