<?php
$user = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
$notify = 0;
$notify_message = [];
$userUpload_store = $this->db->get_where('tbl_upload_store', ['userId' => $user['idUser'], 'notify_user' => 0])->result_array();
$upload_store_id = [];
$notify += count($userUpload_store);
foreach ($userUpload_store as $key => $userUploadStore) {
    $upload_store_id[] = $userUploadStore['id'];
    $notify_message[$key]['store_id'] = $userUploadStore['store_id'];
    $notify_message[$key]['price_file'] = $userUploadStore['price_file'];
}

?>
<div class="dropdown lineti" id="user_notify">
    <i class="fa fa-bell text-black-white badge-notification" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="<?php echo $notify; ?>" style="font-size:22px;color:#fff; cursor: pointer;"></i>
    <ul class="dropdown-menu" role="menu">
        <?php foreach ($notify_message as $key => $notifyMessage) { ?>
            <li>
                <span>Stord ID : <?php echo $notifyMessage['store_id']; ?></span>
                <span>Scoreที่คุณได้ : <?php echo $notifyMessage['price_file']; ?></span>
            </li>
            <hr>
        <?php } ?>
    </ul>


</div>


    
<script type="text/javascript">
        // $(function(){
        //     setInterval(function(){
        //         $.ajax({
        //             url:"userNotify",
        //             success:function(getData){
        //                 var elementNotify = '<div class="dropdown"><i class="fa fa-bell text-black-white badge-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="'+getData+'" style="font-size:22px;color:#fff;" onClick="read_userNotify();"></i>';
        //                     elementNotify += '<ul class="dropdown-menu" role="menu"><li>Action</li></ul></div>';
        //                 document.getElementById("user_notify").innerHTML = elementNotify;
        //             }
        //         });    
        //     },5000);    
        // });
        function read_userNotify() {
            var upload_store_id = [];
            <?php foreach ($upload_store_id as $key => $upload_storeId) { ?>
                    upload_store_id[<?php echo $key; ?> ] = <?php echo $upload_storeId; ?> ;
                <?php } ?>

            $.ajax({
                url: "read_userNotify",
                data: {
                    user_id: <?php echo $user['id']; ?>,
                    upload_store_id: upload_store_id,
                },
                success: function(getData) {
                    var numData = JSON.parse(getData);

                    if (numData.successfully === true) {
                        document.getElementsByClassName("lineti").innerHTML;
                    }

                }
            });
            
        }
        setInterval(read_userNotify, 1000);
        // setTimeout(function(){
        //     $('#user_notify').fadeIn('slow');
        // },1000);
       
    </script>

