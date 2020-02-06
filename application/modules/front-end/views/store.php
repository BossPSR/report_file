 <!--wishlist area start -->
 <div class="wishlist_area mt-60">
     <div class="container">
         <div class="row">
             <div class="col-3"></div>
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                 <article class="single_upload input-upload">
                     <div class="row">
                         <div class="col-12">
                             <div class="tab">
                                 <label for="" class="font-size-upload">You can store document. </label>
                                 <form action="store_upload" class="dropzone" id="dropzone2">
                                     <div class="dz-message needsclick">
                                         Drop files here or click to upload.<br>
                                         <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                         <input type="text" name="userId" value="<?php echo $userId['id']; ?>" hidden>
                                     </div>
                                 </form>
                                 <!-- Button trigger modal -->
                                 <br>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop2" disabled="disabled" id="up_bt" name="up_bt">
                                     Upload Files
                                 </button>
                                 <!-- <input type="button" id='uploadfiles' value='Upload Files'> -->
                             </div>
                         </div>
                         <div class="col-12 text-right" style="padding-top: 10px;">
                             <!-- <button type="button" class="btn btn-info" onclick="confirmalert_buy();">SUBMIT</button> -->
                         </div>
                     </div>
                 </article>
             </div>
             <div class="col-3"></div>
         </div>
     </div>
 </div>


 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                 <h5 class="modal-title" id="staticBackdropLabel">Retrun confirm</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                 <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                 <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                 <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                 <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-success" id='uploadfiles' data-dismiss="modal">Confirm</button>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header" style="border-bottom: 1px solid #e9ecef; border-top:0">
                 <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
             </div>
             <div class="modal-body">
                 <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                 <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                 <input type="checkbox" name="i_accept" id="i_accept" onclick='handleClick(this);' /> ยอมรับเงื่อนไข
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" name="continue_bt" id="continue_bt" data-dismiss="modal" disabled="disabled">Close</button>

             </div>
         </div>
     </div>
 </div>

 <script type="text/javascript">
     Dropzone.autoDiscover = false;
     var myDropzone = new Dropzone("#dropzone2", {
         autoProcessQueue: false,
         maxFiles: 5,
         addRemoveLinks: true,
         parallelUploads: 5, // Number of files process at a time (default 2)

     });
     myDropzone.on("addedfile", function(file, res) {
         if (myDropzone.files == null) {
             $('#up_bt').prop('disabled', true);
         } else {
             $('#up_bt').prop('disabled', false);
         }
     });

     myDropzone.on("success", function(file, res) {
         swal("Good job!", "Upload for data successfull", "success", {
             button: false,
         });
         setTimeout("location.reload(true);", 800);
     });

     $('#uploadfiles').click(function() {
         $.ajax({
             type: 'POST',
             url: 'order_auto',
             data: {
                 status: 1
             },
             success: function(data) {
                 myDropzone.processQueue();
                 myDropzone.on("success", function(file, res) {
                     swal("Good job!", "Upload for data successfull", "success", {
                         button: false,
                     });
                     setTimeout("location.reload(true);", 1000);
                 });
             },

         });
     });
 </script>

 <!--wishlist area end -->
 <script type="text/javascript">
     $(window).on('load', function() {
         $('#staticBackdrop').modal('show');
     });
 </script>
 <script type="text/javascript">
     $("#i_accept").click(function handleClick(cb) {
         if ($(this).prop("checked") == true) {
             $('#continue_bt').prop('disabled', false);
         } else {
             $('#continue_bt').prop('disabled', true);
         }
     });
 </script>