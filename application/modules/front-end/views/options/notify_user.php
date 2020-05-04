<?php
$user = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
$notify = 0;

$notify_message_store = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_store = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'],'is_check' => 0])->result_array();
$upload_store_id = [];
$userUpload_store_num = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'],'notify_user' => 0,'is_check' => 0])->result_array();
$notify += count($userUpload_store_num);
foreach ($userUpload_store as $key => $userUploadStore) {
    $upload_store_id[] = $userUploadStore['id'];
    $notify_message_store[$userUploadStore['update_at']]['order_id'] = null;
    $notify_message_store[$userUploadStore['update_at']]['store_id'] = $userUploadStore['store_id'];
    $notify_message_store[$userUploadStore['update_at']]['price_file'] = $userUploadStore['price_file'];
}

$notify_message_order  = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_order = $this->db->get_where('tbl_upload_order', ['userId' => $user['idUser'],'is_check' => 0])->result_array();

$this->db->where('userId', $user['idUser']);
$this->db->where('notify_user', 0);
$this->db->where('is_check', 0);
$this->db->group_by('order_id');
$userUpload_order_num = $this->db->get('tbl_upload_order')->result_array();
$notify += count($userUpload_order_num);
$upload_order_id = [];
foreach ($userUpload_order as $key => $userUploadOrder) {
    $upload_order_id[] = $userUploadOrder['id'];
    $notify_message_order[$userUploadOrder['update_at']]['store_id'] = null;
    $notify_message_order[$userUploadOrder['update_at']]['order_id'] = $userUploadOrder['order_id'];
    $notify_message_order[$userUploadOrder['update_at']]['price_file'] = $userUploadOrder['price_file'];

}

// Store โดน Reject
$notify_message_store_reject = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_store_reject = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'],'is_check' => 1])->result_array();
$upload_store_reject_id = [];
$userUpload_store_reject_num = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'],'notify_user' => 0,'is_check' => 1])->result_array();
$notify += count($userUpload_store_reject_num);
foreach ($userUpload_store_reject as $key => $userUploadStore_reject) {
    $upload_store_reject_id[] = $userUploadStore_reject['id'];
    $notify_message_store_reject[$userUploadStore_reject['update_at']]['order_id'] = "reject";
    $notify_message_store_reject[$userUploadStore_reject['update_at']]['store_id'] = $userUploadStore_reject['store_id'];
    $notify_message_store_reject[$userUploadStore_reject['update_at']]['price_file'] = $userUploadStore_reject['price_file'];
}

// Order โดน Reject
$notify_message_order_reject  = [];
$this->db->where_in('notify_user', [0,1]);
$userUpload_order_reject = $this->db->get_where('tbl_upload_order', ['userId' => $user['idUser'],'is_check' => 1])->result_array();

$this->db->where('userId', $user['idUser']);
$this->db->where('notify_user', 0);
$this->db->where('is_check', 1);
$this->db->group_by('order_id');
$userUpload_order_reject_num = $this->db->get('tbl_upload_order')->result_array();
$notify += count($userUpload_order_reject_num);
$upload_order_reject_id = [];
foreach ($userUpload_order_reject as $key => $userUploadOrder_reject) {
    $upload_order_reject_id[] = $userUploadOrder_reject['id'];
    $notify_message_order_reject[$userUploadOrder_reject['update_at']]['store_id'] = "reject";
    $notify_message_order_reject[$userUploadOrder_reject['update_at']]['order_id'] = $userUploadOrder_reject['order_id'];
    $notify_message_order_reject[$userUploadOrder_reject['update_at']]['price_file'] = $userUploadOrder_reject['price_file'];

}


$notify_message = array_merge($notify_message_store,$notify_message_order,$notify_message_store_reject);
krsort($notify_message);

?>
<style>
.bell-style{
    position: absolute;
    padding: 20px;
    width: 350px;
    will-change: transform;
    border: 0px;
    box-shadow: rgb(208, 208, 208) 0px 0px 7px 0px;
    top: 0px;
    left: 0px;
    transform: translate3d(-322px, 26px, 0px) !important;
    
}
</style>
<div class="dropdown lineti">
<i class="fa fa-bell text-black-white badge-notification <?php if($notify >= 1){ echo "animated shake" ;} ?>" id="user_notify" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="<?php echo $notify; ?>" style="font-size:22px;color:#fff; cursor: pointer;"></i>
    <ul class="dropdown-menu bell-style" role="menu">
        <?php $i = 0; ?>
        <?php foreach ($notify_message as $key => $notifyMessage) { 
            $i += 1;
            if($i == 7){
                break;
            } 
        ?>
            <?php if ($notifyMessage['order_id'] == null) { ?>
            <li>
                <span>Stord ID : <?php echo $notifyMessage['store_id']; ?></span>
                <span>Score ที่คุณได้ : <?php echo $notifyMessage['price_file']; ?></span>
            </li>
            <hr>

            <?php }elseif ($notifyMessage['store_id'] == null) {  ?>
            <li>
                <span>Order ID : <?php echo $notifyMessage['order_id']; ?></span>
                <span>ราคาเท่านี้ในอีเมลของคุณ : <?php echo $notifyMessage['price_file']; ?></span>
                <span>อีเมลของคุณ : <?php echo $user['email']; ?></span>
            </li>
            <hr>
            <!-- Store โดน Reject -->
            <?php }elseif ($notifyMessage['order_id'] == "reject") { ?>
            <li>
                <span>Stord ID : <?php echo $notifyMessage['store_id']; ?></span>
                <span>Stordที่คุณถูก Reject : <?php echo $notifyMessage['price_file']; ?></span>
            </li>
            <hr>

            <!-- Order โดน Reject -->
            <?php }elseif ($notifyMessage['store_id'] == "reject") { ?>
            <li>
                <span>Order ID : <?php echo $notifyMessage['order_id']; ?></span>
                <span>Orderที่คุณถูก Reject : <?php echo $notifyMessage['price_file']; ?></span>
            </li>
            <hr>
            
            <?php } ?>

        <?php } ?>


    </ul>


</div>

<audio id="myAudio">
  <source src="uploads/me-too.ogg" type="audio/ogg">
  <source src="uploads/me-too.mp3" type="audio/mp3">
  Your browser does not support the audio element.
</audio>

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
            
            var upload_store_reject_id = [];
            <?php foreach ($upload_store_reject_id as $key => $upload_store_rejectId) { ?>
                upload_store_reject_id[<?php echo $key; ?>] = <?php echo $upload_store_rejectId; ?> ;
            <?php } ?>

            var upload_order_reject_id = [];
            <?php foreach ($upload_order_reject_id as $key => $upload_order_rejectId) { ?>
                upload_order_reject_id[<?php echo $key; ?>] = <?php echo $upload_order_rejectId; ?> ;
            <?php } ?>

            $.ajax({
                url: "read_userNotify",
                data: {
                    user_id: <?php echo $user['id']; ?>,
                    upload_store_id: upload_store_id,
                    upload_order_id: upload_order_id,
                    upload_store_reject_id:upload_store_reject_id,
                    upload_order_reject_id:upload_order_reject_id,
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

       
        function sound_notify(){
            var x = document.getElementById("myAudio"); 
            x.play(); 
        }
        <?php if($notify >= 1){ ?>
            window.onload = sound_notify;
        <?php } ?>

    </script>



