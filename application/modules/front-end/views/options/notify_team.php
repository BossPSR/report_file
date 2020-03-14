<?php 
    $team = $this->db->get_where('tbl_team',['email' => $this->session->userdata('email')])->row_array();
    $notify = 0;

    $this->db->select('*,tbl_feedback.id AS feed_back_id , tbl_feedback.order_id AS feed_backOrderId , tbl_feedback.update_at AS update_feedback_at');
    $this->db->from('tbl_feedback');
    $this->db->join('tbl_upload_order_team','tbl_feedback.order_id = tbl_upload_order_team.order_id');
    $this->db->where('tbl_upload_order_team.teamId',$team['IdTeam']);
    $feed_back = $this->db->get()->result_array();
    $notify_message_feed_back = [];
    $feed_back_id = [];
    foreach ($feed_back as $feed_back_list) {
          $feed_back_id[] = $feed_back_list['feed_back_id'];
        if ($feed_back_list['notify_team'] == 0) {
            $notify += 1;
        }
        $notify_message_feed_back[$feed_back_list['update_feedback_at']]['order_id'] = $feed_back_list['feed_backOrderId'];
    }

    $this->db->select('*,tbl_upload_order.id AS upload_order_id , tbl_upload_order.update_at AS upload_order_at');
    $this->db->from('tbl_upload_order');
    $this->db->join('tbl_upload_order_team','tbl_upload_order.order_id = tbl_upload_order_team.order_id');
    $this->db->where('tbl_upload_order_team.teamId',$team['IdTeam']);
    $this->db->group_by('tbl_upload_order.order_id');

    $delivery = $this->db->get()->result_array();
    $notify_message_delivery = [];
    $upload_order_delivery_id = [];
    // foreach($delivery as $delivery_list){
    //     $upload_order_delivery_id[] = $delivery_list['upload_order_id'];
    //     if ($delivery_list['notify_team'] == 0) {
    //         $notify += 1;
    //     }
    //     $notify_message_delivery[$delivery_list['upload_order_at']]['order_id'] = $delivery_list['upload_order_id'];
    // }

    // $notify_message = array_merge($notify_message_feed_back,$notify_message_delivery);
    // krsort($notify_message);
   
    print_r ('<pre>');
    print_r ($delivery);
    print_r ('</pre>');

    exit();
?>

<div class="dropdown lineti">
<i class="fa fa-bell text-black-white badge-notification <?php if($notify >= 1){ echo "animated shake" ;} ?>" id="team_notify" onClick="read_teamNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="<?php echo $notify;?>" style="font-size:22px;color:#fff; cursor: pointer;"></i>
    <ul class="dropdown-menu" role="menu">
        <?php $i = 0; ?>
        <?php foreach ($notify_message as $key => $notifyMessage) { 
            $i += 1;
            if($i == 7){
                break;
            } 
        ?>
            <li>
                <span>Order ID : <?php echo $notifyMessage['order_id']; ?> </span>
                <span>ถูก Feed Back กรุณาตรวจสอบด้วยค่ะ</span>
            </li>
            <hr>            

        <?php } ?>
    </ul>


</div>

<audio id="myAudio">
  <source src="uploads/me-too.ogg" type="audio/ogg">
  <source src="uploads/me-too.mp3" type="audio/mp3">
  Your browser does not support the audio element.
</audio>

<script type="text/javascript">
       
        function read_teamNotify() {

            var feed_back_id = [];
            <?php foreach ($feed_back_id as $key => $feed_backId) { ?>
                feed_back_id[<?php echo $key; ?>] = <?php echo $feed_backId; ?> ;
            <?php } ?>

            $.ajax({
                url: "read_teamNotify",
                data: {
                    team_id: <?php echo $team['id']; ?>, 
                    feed_back_id: feed_back_id
                },
                success: function(getData) {
                    var numData = JSON.parse(getData);
                    if (numData.successfully === true) {
                        $("#team_notify").replaceWith('<i class="fa fa-bell text-black-white badge-notification" id="team_notify" onClick="read_teamNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="'+numData.count+'" style="font-size:22px;color:#fff; cursor: pointer;"></i>');
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
