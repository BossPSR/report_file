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
                                         <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" hidden>
                                     </div>
                                     <div>
                                         <!-- <input type="date" name="date" id="" class="form-control" onchange="myFunction()"> -->
                                     </div>
                                 </form>
                                 <br>
                                 <label for="">Choose the date to pick up the document.</label>
                                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                     <div class="row">
                                         <input type="date" class="form-control" id="date2" name="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required>
                                     </div>

                                 </div>
                                 <br>
                                 <button type="button" class="btn btn-primary" id='uploadfiles'>
                                     Upload Files
                                 </button>
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

 <script>
     $(document).ready(function() {
         $("#date2").change(function() {
             var value = $(this).val();

             $("#date").val(value);
         }).keyup();

     });
 </script>

 <script type="text/javascript">
     var x = document.getElementById("date2").value;
     Dropzone.autoDiscover = false;
     var myDropzone = new Dropzone("#fileupload", {
             autoProcessQueue: false,
             maxFiles: 5,
             addRemoveLinks: true,
             parallelUploads: 5, // Number of files process at a time (default 2)

         }

     );

     $('#uploadfiles').click(function() {
         myDropzone.processQueue();
         myDropzone.on("success", function(file, res) {
             swal("Good job!", "Upload for data successfull", "success", {
                 button: false,
             });
             setTimeout("location.reload(true);", 1000);
         });



     });
 </script>