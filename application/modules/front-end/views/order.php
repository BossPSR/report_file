<br>
<h2 class="text-center" style="margin-top: 15px;">My order</h2>
<hr class="line_package">
<br>
<!--wishlist area start -->
 <div class="wishlist_area mt-60">
     <div class="container">
         <div class="row">
             <div class="col-2"></div>
             <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Status</th>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อเอกสาร</th>
                            <th scope="col">รหัสออเดอร์</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">Tool</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buy_email as $key => $value) : ?>
                        <tr>
                            <th style="text-align: center;font-size: 39px;">
                                <?php if ($value['status'] == 0) : ?>
                                <i class="fa fa-minus-square-o" style="color: #cbcbcb;" aria-hidden="true"></i>
                                <?php else: ?>
                                <i class="fa fa-check-square-o" style="color: #28a745;" aria-hidden="true"></i>
                                <?php endif; ?>
                            </th>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td><?php echo $value['file_name']; ?></td>
                            <td><?php echo $value['order_id']; ?></td>
                            <td><?php echo $value['date_required']; ?></td>
                            <td>
                                <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
             </div>
             <div class="col-2"></div>
         </div>
     </div>
 </div>
 <!--wishlist area end -->