<?php
$user = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
$notify = 0;

$notify_message_store = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_store = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser']])->result_array();
$upload_store_id = [];
$userUpload_store_num = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'],'notify_user' => 0])->result_array();
$notify += count($userUpload_store_num);
foreach ($userUpload_store as $key => $userUploadStore) {
    $upload_store_id[] = $userUploadStore['id'];
    $notify_message_store[$userUploadStore['create_at']]['order_id'] = null;
    $notify_message_store[$userUploadStore['create_at']]['store_id'] = $userUploadStore['store_id'];
    $notify_message_store[$userUploadStore['create_at']]['price_file'] = $userUploadStore['price_file'];
}

$notify_message_order  = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_order = $this->db->get_where('tbl_upload_order', ['userId' => $user['idUser']])->result_array();
$userUpload_order_num = $this->db->get_where('tbl_upload_order', ['userId' => $user['idUser'], 'notify_user' => 0])->result_array();
$notify += count($userUpload_order_num);
$upload_order_id = [];
foreach ($userUpload_order as $key => $userUploadOrder) {
    $upload_order_id[] = $userUploadOrder['id'];
    $notify_message_order[$userUploadOrder['create_at']]['store_id'] = null;
    $notify_message_order[$userUploadOrder['create_at']]['order_id'] = $userUploadOrder['order_id'];
    $notify_message_order[$userUploadOrder['create_at']]['price_file'] = $userUploadOrder['price_file'];

}
$notify_message = array_merge($notify_message_store,$notify_message_order);
krsort($notify_message);

?>
<div class="dropdown lineti">
<i class="fa fa-bell text-black-white badge-notification" id="user_notify" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="<?php echo $notify; ?>" style="font-size:22px;color:#fff; cursor: pointer;"></i>
    <ul class="dropdown-menu" role="menu">

        <?php foreach ($notify_message as $key => $notifyMessage) { 
           
        ?>
            <?php if ($notifyMessage['order_id'] == null) { ?>
            <li>
                <span>Stord ID : <?php echo $notifyMessage['store_id']; ?></span>
                <span>Scoreที่คุณได้ : <?php echo $notifyMessage['price_file']; ?></span>
            </li>
            <hr>
            <?php }elseif ($notifyMessage['store_id'] == null) {  ?>
            <li>
                <span>Order ID : <?php echo $notifyMessage['order_id']; ?></span>
                <span>ราคาเท่านี้ในอีเมลของคุณ : <?php echo $notifyMessage['price_file']; ?></span>
                <span>อีเมลของคุณ : <?php echo $user['email']; ?></span>
            </li>
            <hr>
            <?php } ?>
        <?php } ?>


    </ul>


</div>


    
<script type="text/javascript">
       
        function read_userNotify() {
            var upload_store_id = [];
            <?php foreach ($upload_store_id as $key => $upload_storeId) { ?>
                upload_store_id[<?php echo $key; ?>] = <?php echo $upload_storeId; ?> ;
            <?php } ?>

            var upload_order_id = [];
            <?php foreach ($upload_order_id as $key => $upload_orderId) { ?>
                upload_order_id[<?php echo $key; ?>] = <?php echo $upload_orderId; ?> ;
            <?php } ?>
            

            $.ajax({
                url: "read_userNotify",
                data: {
                    user_id: <?php echo $user['id']; ?>,
                    upload_store_id: upload_store_id,
                    upload_order_id: upload_order_id,
                },
                success: function(getData) {
                    var numData = JSON.parse(getData);
                    if (numData.successfully === true) {
                        $("#user_notify").replaceWith('<i class="fa fa-bell text-black-white badge-notification" id="user_notify" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="'+numData.count+'" style="font-size:22px;color:#fff; cursor: pointer;"></i>');
                    }
                    console.log(numData);

                }
            });

        }

    </script>


