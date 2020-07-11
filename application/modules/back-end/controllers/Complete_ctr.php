<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complete_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Complete_model');
        $this->load->helper('form');
        $this->load->library('email');  // เรียกใช้ email class
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['complete'] = $this->Complete_model->complete();
            $this->load->view('options/header');
            $this->load->view('complete', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }



    public function book_complete_add_com()
    {
        $id = $this->input->get('id');
        $data = array(

            'id_orderBuy'   => $id,
            'id_user'       => $this->input->get('userid'),
            'create_at'     => date('Y-m-d H:i:s')

        );
        $resultsedit = $this->db->insert('tbl_bookmark', $data);


        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add bookmark information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add bookmark information');
        }
        return redirect('Complete');
    }

    public function add_feedback()
    {
        if ($this->session->userdata('email_admin') != '') {

            $this->load->view('options/header');
            $this->load->view('add_feedback');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function fileUpload_feedback()
    {
        $target_dir = "uploads/Feedback/"; // Upload directory
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/Feedback/';
            // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
            $config['allowed_types']   = '*';
            $config['max_size']        = '99999'; // max_size in kb
            $config['file_name']     = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $feedmax = $this->db->order_by('id', 'DESC')->get('tbl_feedback')->row();

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();

                $data = array(
                    'id_feedback'       => $feedmax->id,
                    'file_name'         => $uploadData['file_name'],
                    'path'              => 'uploads/Feedback/' . $uploadData['file_name'],
                    'create_at'         => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_feedback_file', $data);
            }
        }
    }

    public function order_auto_feedback()
    {
        $order_id   = $this->input->post('order_id');
        $team       = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();
        $cmid       = $this->input->post('cmid');
        $DM         = $this->input->post('DM');
        $dated      = $this->input->post('dated');
        $confirm    = $this->input->post('confirm');
        $orf = array(
            'teamId'                => $team['teamId'],
            'feedback_detail'       => $DM,
            'order_id'              => $order_id,
            'userId'                => $cmid,
            'create_at'             => date('Y-m-d H:i:s'),
            'dated'                 => $dated,
            'status_c_feedack_team' => $confirm
        );
        $success = $this->db->insert('tbl_feedback', $orf);
        if ($success) {
            $this->db->where('teamId', $team['teamId']);
            $updateFeed = $this->db->update('tbl_feedback', ['check_feedback_order' => '0']);
            if ($updateFeed) {
                $this->db->where('order_id', $order_id);
                $updateFeed = $this->db->update('tbl_upload_team', ['status' => '2']);
            }
        }
        echo $success;
    }

    public function order_auto_stock_admin()
    {
        $admin      = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();
        $buymax     =  $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
        $position   =  $this->input->post('position');
        $date_req   =  $this->input->post('date');
        $DM         =  $this->input->post('DM');

        $data = array(
            'order_id'      => $buymax->order_main,
            'position'      => $position,
            'wage'          => $this->input->post('wage'),
            'note'          => $this->input->post('note'),
            'create_at'     => date('Y-m-d H:i:s'),
        );

        $success =  $this->db->insert('tbl_upload_team', $data);
        if ($success) {
            foreach ($DM as $DM) {
                $datedm = array(

                    'id_orderBuy'   => $buymax->order_main,
                    'id_document'   => $DM,
                    'id_user'       => $admin['adminId'],
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_bookmark', $datedm);
            }
        }

        echo $success;
    }



    public function sendEmail_delivery_complete()
    {

        $order_id   = $this->input->post('order_id');
        $order_team = $this->input->post('order_team');

        $id         = $this->input->post('id');

        // print_r($id)  ; 
        // print_r($order_team) ;
        // print_r($order_id) ;
        // exit;
        $feedback   = $this->db->get_where('tbl_feedback', ['order_id' => $id])->row_array();
        $user_order = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();
        $user       = $this->db->get_where('tbl_user', ['idUser' => $user_order['userId']])->row_array();

        if ($user['cash'] >= $user_order['price_file']) {

            if ($feedback == true) {
                $this->db->where('order_id', $id);
                $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);

                $this->db->where('order_id', $id);
                $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'), 'check_feedback_dalivery' => 2]);

                $this->db->where('idUser', $user_order['userId']);
                $this->db->update('tbl_user', ['cash' => $user['cash'] - $user_order['price_file'], 'score' => $user['score'] - 100]);
            } else {
                $this->db->where('order_id', $id);
                $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);

                $this->db->where('idUser', $user_order['userId']);
                $this->db->update('tbl_user', ['cash' => $user['cash'] - $user_order['price_file'], 'score' => $user['score'] - 100]);
            }


            $subject = 'เอกสารของคุณที่สั่งซื้อไว้ จาก www.report-file.com ';

            $message = '<center>';
            $message .= '<div style="max-width:800px;">';
            $message .= '<div class="content" >';
            $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
            $message .= 'Send all your documents successfully.';
            $message .= '</div>';
            $message .= '<div class="row">';
            if (empty($user_order['email'])) {
                $message .= '<p>Hey "' . $user['username'] . '",</p>';
            } else {
                $message .= '<p>Hey "' . $user_order['Username'] . '",</p>';
            }

            $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $id  . '"</span></p>';
            $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
            $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
            $message .= '<p>Check below for your order details.</p><hr>';
            $message .= '<p>Order details ("' . $id  . '")</p>';


            if (!empty($order_id)) {
                foreach ($order_id as $key => $order_id) {
                    $order = $this->db->get_where('tbl_upload_store', ['id' => $order_id])->row_array();
                    $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $order['path'] . '">' . $order['file_name'] . '</a>';
                    $message .= '<br>';
                }
            }

            foreach ($order_team as $key => $order_team) {
                $orderT = $this->db->get_where('tbl_upload_order_team', ['id' => $order_team])->row_array();
                $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $orderT['path'] . '">' . $orderT['file_name'] . '</a>';
                $message .= '<br>';
            }

            $message .= '</center>';
        } else {

            $subject = '(แจ้งเตือน) เอกสารของคุณที่สั่งซื้อไว้ จาก www.report-file.com ยอดเงินของคุณไม่เพียงพอให้หักค่าเอกสาร กรุณาเติมเงินด้วยค่ะ  ';

            $message = '<center>';
            $message .= '<div style="max-width:800px;">';
            $message .= '<div class="content" >';
            $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
            $message .= 'ยอดเงินของคุณไม่เพียงพอ.';
            $message .= '</div>';
            $message .= '<div class="row">';
            if (empty($user_order['email'])) {
                $message .= '<p>Hey "' . $user['username'] . '",</p>';
            } else {
                $message .= '<p>Hey "' . $user_order['Username'] . '",</p>';
            }
            $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $id  . '"</span></p>';
            $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
            $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
            $message .= '<p>Check below for your order details.</p><hr>';
            $message .= '<p>Order details ("' . $id  . '")</p>';
            $message .= '<p>You can top up into the system here.</p>';
            $message .= '<p style="color: #0063d1;">http://www.ip-soft.co.th/ipsoft/my-deposit</p><br />';

            $message .= '</center>';
        }

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'P@Ssw0rd';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        if (empty($user_order['email'])) {
            $this->email->to($user['email']);
        } else {
            $this->email->to($user_order['email']);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('Complete');
    }
}
