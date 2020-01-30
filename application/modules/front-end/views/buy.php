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
                                 <label for="" class="font-size-upload">You can buy document. </label>
                                 <form action="buy_upload" class="dropzone" id="fileupload">
                                     <div class="dz-message needsclick">
                                         Drop files here or click to upload.<br>
                                         <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                         <input type="text" name="userId" value="<?php echo $userId['id']; ?>" hidden>
                                     </div>
                                     <div>
                                         <!-- <input type="date" name="date" id="" class="form-control"> -->
                                     </div>
                                 </form>
                                 <input type="button" id='uploadfiles' value='Upload Files'>
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
 <!--wishlist area end -->

 <script type="text/javascript">
     Dropzone.autoDiscover = false;

     var myDropzone = new Dropzone(".dropzone", {
         autoProcessQueue: false,
         parallelUploads: 10 // Number of files process at a time (default 2)
     });

     $('#uploadfiles').click(function() {
         myDropzone.processQueue();
     });
 </script>