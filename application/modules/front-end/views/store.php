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
                             </div>
                         </div>
                         <div class="col-12 text-right" style="padding-top: 10px;">
                             <button type="button" class="btn btn-info" onclick="confirmalert_buy();">SUBMIT</button>
                         </div>
                     </div>
                 </article>
             </div>
             <div class="col-3"></div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                 <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button> -->
             </div>
             <div class="modal-body">
                 ...
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <!-- <button type="button" class="btn btn-primary">Understood</button> -->
             </div>
         </div>
     </div>
 </div>
 <!--wishlist area end -->
 <script type="text/javascript">
     $(window).on('load', function() {
         $('#staticBackdrop').modal('show');
     });
 </script>