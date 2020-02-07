<div>
    <div>File Name : <?php echo $file_name; ?></div>
    <div>Order ID : <?php echo $order_id; ?></div>
    <div>Price : <?php echo $price_file; ?></div>
    <div>Discount : <?php echo $discount; ?>%</div>
    <div>Customer ID: CM<?php echo $customer_id; ?></div>
    <form action="payment_email_success" method="POST">
        <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
        <input type="hidden" name="price_file" value="<?php echo $price_file; ?>">
        <input type="hidden" name="discount" value="<?php echo $discount; ?>">
        <input type="hidden" name="customer_id" value="CM<?php echo $customer_id; ?>">
        <input type="hidden" name="user_id" value="<?php echo $customer_id; ?>">
        <input type="email" name="email">
        <input type="hidden" name="price_dis" value="<?php echo $price_dis; ?>">
        <button class="btn btn-success">Pay $<?php echo $price_dis; ?> To Start</button>
    </form>
</div>