<?php 
    $team = $this->db->get_where('tbl_team',['email' => $this->session->userdata('email')])->row_array();
    $notify = 0;
    $this->db->select('*,tbl_feedback.id AS feed_back_id , tbl_feedback.order_id AS feed_backOrderId');
    $this->db->from('tbl_feedback');
    $this->db->join('tbl_upload_order_team','tbl_feedback.order_id = tbl_upload_order_team.order_id');
    $feed_back = $this->db->get()->result_array();
    $notify_message_feed_back = [];
    $feed_back_id = [];
    foreach ($feed_back as $feed_back) {
         $feed_back_id[] = $feed_back['feed_back_id'];
        if ($feed_back['notify_team'] == 0) {
            $notify += 1;
        }
        $notify_message_feed_back[$feed_back['update_at']]['order_id'] = $feed_back['feed_backOrderId'];
    }
     
    // $notify_message = array_merge($notify_message_feed_back);
    // krsort($notify_message);
    echo json_encode($notify_message_feed_back);

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
                <span>ถูก Feed Back</span>
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



            

            $.ajax({
                url: "read_teamNotify",
                data: {
                    team_id: <?php echo $team['id']; ?>, 
                },
                success: function(getData) {
                    var numData = JSON.parse(getData);
                    // if (numData.successfully === true) {
                    //     $("#team_notify").replaceWith('<i class="fa fa-bell text-black-white badge-notification" id="team_notify" onClick="read_userNotify();" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-badge="'+numData.count+'" style="font-size:22px;color:#fff; cursor: pointer;"></i>');
                    // }
                    console.log(numData);

                }
            });

        }

       
        // function sound_notify(){
        //     var x = document.getElementById("myAudio"); 
        //     x.play(); 
        // }
        // <?php if($notify >= 1){ ?>
        //     window.onload = sound_notify;
        // <?php } ?>

    </script>
