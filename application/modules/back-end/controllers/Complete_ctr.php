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

            'status_bookmark'   => '1',
            'update_at'         => date('Y-m-d H:i:s')

        );
        $this->db->where('order_id', $id);
        $resultsedit = $this->db->update('tbl_upload_order', $data);


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

    public function fileUpload_not_complete()
    {
        $target_dir = "uploads/Feedback/"; // Upload directory
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/notcomplete/';
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
                    'id_upload_team'                => $this->input->post('idco'),
                    'file_name_notcomplete'         => $uploadData['file_name'],
                    'path_notcomplete'              => 'uploads/notcomplete/' . $uploadData['file_name'],
                    'create_at_ncf'                 => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_not_complete_file', $data);
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
        $date180    = date("Y-m-d", strtotime("+180 day"));
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
                $ut = $this->db->update('tbl_upload_team', ['status' => '2']);
                if ($ut) {
                    $this->db->where('order_id', $order_id);
                    $this->db->update('tbl_upload_order', ['end_time_feedback' => $date180]);
                }
            }
        }
        echo $success;
    }

    public function order_auto_not_complete_file()
    {
        $idco   = $this->input->post('idco');
        $detail1co   = $this->input->post('detail1co');

        $this->db->where('id', $idco);
        $success = $this->db->update('tbl_upload_team', ['status' => '4', 'note' => $detail1co]);

        echo $success;
    }

    public function order_auto_stock_admin()
    {
        $admin      = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();
        $buymax     =  $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
        $position   =  $this->input->post('position');
        $date_req   =  $this->input->post('date');
        $noteteam   =  $this->input->post('noteteam');
        $DM         =  $this->input->post('DM');

        $data = array(
            'order_id'      => $buymax->order_main,
            'position'      => $position,
            'wage'          => $this->input->post('wage'),
            'note'          => $noteteam,
            'create_at'     => date('Y-m-d H:i:s'),
        );

        $success =  $this->db->insert('tbl_upload_team', $data);
        if ($success) {
            if ($DM) {
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
        }

        echo $success;
    }



    public function sendEmail_delivery_complete()
    {

        $order_id       = $this->input->post('order_id');
        $order_team     = $this->input->post('order_team');
        $id             = $this->input->post('id');

        $feedback       = $this->db->get_where('tbl_feedback', ['order_id' => $id])->row_array();
        $user_order     = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();
        $user           = $this->db->get_where('tbl_user', ['idUser' => $user_order['userId']])->row_array();
        $dateUP         = date("Y-m-d", strtotime("+60 day"));
        $time_withdraw  = date("Y-m-d", strtotime("+65 day"));

        if ($user['cash'] >= $user_order['price_file']) {

            if ($feedback == true) {
                $this->db->where('order_id', $id);
                $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'end_time' => $dateUP, 'end_time_withdraw' => $time_withdraw, 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);

                $this->db->where('order_id', $id);
                $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'), 'check_feedback_dalivery' => 2]);

                $this->db->where('idUser', $user_order['userId']);
                $this->db->update('tbl_user', ['cash' => $user['cash'] - $user_order['price_file'], 'score' => $user['score'] - 100]);
                if ($user_order['status_approved'] == 4) {
                    $this->db->where('order_id', $id);
                    $this->db->update('tbl_upload_order', ['status_approved' => 1]);
                }
            } else {
                $this->db->where('order_id', $id);
                $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'end_time' => $dateUP, 'end_time_withdraw' => $time_withdraw, 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);

                $this->db->where('idUser', $user_order['userId']);
                $this->db->update('tbl_user', ['cash' => $user['cash'] - $user_order['price_file'], 'score' => $user['score'] - 100]);
                if ($user_order['status_approved'] == 4) {
                    $this->db->where('order_id', $id);
                    $this->db->update('tbl_upload_order', ['status_approved' => 1]);
                }
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
        $config['smtp_pass'] = 'infinityP23';  //sender's password
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

    public function complete_up_teamfile()
    {
        if ($this->session->userdata('email_admin') != '') {
            $order = $this->input->post('order');
            $order_db = $this->db->get_where('tbl_upload_order_team', ['order_id' => $order])->row_array();

            $target_dir = "uploads/Team/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Team/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'teamId'                    => $order_db['teamId'],
                        'order_id'                  => $order,
                        'file_name'                 => $uploadData['file_name'],
                        'path'                      => 'uploads/Team/' . $uploadData['file_name'],
                        'create_at'                 => date('Y-m-d H:i:s'),
                        'status_upload_admin_cp'    => '1' // admin
                    );
                    $this->db->insert('tbl_upload_order_team', $data);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function complete_up_mainfile_gt()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');

            $data = array(
                'userId'        => $userOR,
                'order_id'      => $orderST,
                'create_at'     => date('Y-m-d H:i:s'),
            );
            $success = $this->db->insert('tbl_morefile_GT', $data);
            echo $success;
        } else {
            redirect('Login_admin');
        }
    }

    public function complete_up_mainfile_gt_main()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');


            $target_dir = "uploads/Buy/GT/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Buy/GT/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $max_id = $this->db->order_by('id', 'desc')->get('tbl_morefile_GT')->row_array();
                    $uploadData = $this->upload->data();
                    $data2 = array(
                        'more_id'           => $max_id['id'],
                        'order_id'          => $orderST,
                        'file_name_GT'      => $uploadData['file_name'],
                        'path_GT'           => 'uploads/Buy/GT/' . $uploadData['file_name'],
                        'status_admin_gt'     => 1,
                        'create_at'         => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_orderGT', $data2);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function rename_filename_TM()
    {
        $id         = $this->input->post('id');
        $name_file  = $this->input->post('name_file');
        $last_file  = $this->input->post('last_file');
        $path       = $this->input->post('path');

        if ($this->session->userdata('email_admin') != '') {
            rename($path, 'uploads/Team/' . $name_file . '.' . $last_file);
            if ($id) {
                $update = [
                    'file_name' => $name_file . '.' . $last_file,
                    'path' => 'uploads/Team/' . $name_file . '.' . $last_file,
                ];
                $this->db->where('id', $id);
                $success = $this->db->update('tbl_upload_order_team', $update);
                echo $success;
            }
        } else {
            redirect('Login_admin');
        }
    }
}
