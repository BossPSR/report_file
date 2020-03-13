<!-- BEGIN: Content-->
<?php $id = $this->input->get('id'); ?>
<?php $book = $this->db->get_where('tbl_bookmark',['id_document'=>$id])->row_array();?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Admin</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Bookmark">Admin_bookmark</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add Admin_bookmark</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Add Admin Document
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <label for="" style="font-size: 16px;">File Document </label>
                                            <form action="fileUpload_store_book" class="dropzone dropzone-area" id="maindropzone">
                                            <input type="text" id="DM2" class="form-control " name="DM" value="<?php echo $book['id_document']?>" hidden>

                                                <div class="dz-message" style="top: 24%;">Upload Document</div>
                                            </form>
                                        </div>
                                   
                                      

                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12" style="margin-top: 25px;">
                                            <label for="" style="font-size: 16px;"> DM </label>
                                            <input type="text" id="DM1" name="DM" class="form-control" value="<?php echo $book['id_document']?>"  required disabled>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="margin-top: 25px;"></div>

                                      

                                        <div class="col-xl-12 col-md-12 col-12" style="margin-top: 25px;">
                                            <button type="button" id="uploadsfile" class="btn btn-primary mr-1 mb-1"> Add Admin</button>
                                            <a href="Bookmark" class="btn btn-secondary mr-1 mb-1">Cancel</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
   $("#DM1")
        .keyup(function() {
            var value = $(this).val();
            $("#DM2").val(value);
        })
        .keyup();

   
</script>
<script>
    var x = document.getElementById("DM1").value;
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#maindropzone", {
        autoProcessQueue: false,
        maxFiles: 5,
        addRemoveLinks: true,
        parallelUploads: 5, // Number of files process at a time (default 2)
    });

    document.getElementById("uploadsfile").addEventListener("click", function() {
        // myDropzone.processQueue();
      
              
                 myDropzone.processQueue();
                 myDropzone.on("success", function(file, res) {
                     swal("Good job!", "Upload for data successfull", "success", {
                         button: false,
                     });
                    setTimeout(function(){location.href="Bookmark"} , 1000);
                 });
             

         });
 
</script>