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
<div class="modal fade" id="exampleModalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Add item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="edit_item" method="post">
                <input type="hidden" name="idmodal" value="<?php echo $this->input->get('id'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Item:</label>
                        <input type="text" name="select" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<h2 class="text-center" style="margin-top: 15px;">Edit Upload + </h2>
<hr class="line_package">
<br>
<div class="container">
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-1"></div>
        <div class="col-lg-10 col-md-10 col-10">
        
            <article class="single_upload input-upload">
                <div class="row">
                    <div class="col-12">
                        <form action="upload_edit_complete" method="post">
                            <input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
                            <div class="tab">
                                <div class="row account_form">
                                    <div class="col-md-8 col-xs-8 col-sm-8">
                                        <p>
                                            <label class="font-size-upload"> Search Item</label>
                                            <input name="search_item" class="form-control" placeholder="Search Item *" type="text" value="<?php echo $key_search['search_item']; ?>" required>
                                        </p>
                                    </div>
                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                        <p class="inputKuy">
                                            <label class="font-size-upload"> Select Item</label>
                                            <select class="form-control" name="select_item" id="categori1" required>
                                                <option disabled><b>-- Select item --</b></option>
                                                <?php foreach ($select as $key => $select) : ?>
                                                <option value="<?php echo $select['id']; ?>,<?php echo $select['name_item']; ?>" <?php echo $select['id'] == $key_search['select_item_id'] ? 'selected' : '' ;?>><?php echo $select['name_item']; ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-8 "></div>
                                    <div class="col-md-4 col-xs-4 col-sm-4 ">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalUpload" style="margin-bottom:17px;">Add Item</button>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <p>
                                            <label class="font-size-upload"> Put Your code</label>
                                            <textarea name="put_code" placeholder="Put Your Code *" class="form-control" rows="5"><?php echo $key_search['code']; ?></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <p>
                                            <label class="font-size-upload"> Put Your topic</label>
                                            <textarea name="topic" placeholder="Put Your topic *" class="form-control" rows="5"><?php echo $key_search['topic']; ?></textarea>
                                        </p>
                                        <button type="submit" class="btn btn-warning" style="background: #f1a204;">EDIT FILE UPLOAD +</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </article>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<br>