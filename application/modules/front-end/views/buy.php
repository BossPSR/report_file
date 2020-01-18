 <!--wishlist area start -->
 <div class="wishlist_area mt-60">
     <div class="container">
         <form action="#">
             <div class="row">
                 <div class="col-3"></div>
                 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                     <div class="table_desc wishlist">
                         <div class="cart_page table-responsive">
                             <table>
                                 <thead>
                                     <tr>
                                         <!-- <th class="product_remove">Delete</th> -->
                                         <th class="product_thumb">#Order</th>
                                         <th class="">Processing</th>
                                         <th class="product-price">Date requires</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <!-- <td class="product_remove"><a href="#">X</a></td> -->
                                         <td class="product_thumb"><a href="#"><?php echo (rand(100000, 1000000)); ?></a></td>
                                         <td class="">
                                             <div class="progress">
                                                 <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">WAIT</div>
                                             </div>
                                         </td>
                                         <!-- <td class=""><span class="badge badge-warning" style="color:#fff;">Wait</span></td> -->
                                         <td class="product-price"><?php echo date('Y-m-d'); ?></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
                 <div class="col-3"></div>
             </div>
         </form>
     </div>
 </div>
 <!--wishlist area end -->