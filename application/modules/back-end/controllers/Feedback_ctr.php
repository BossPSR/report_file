<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['feedback'] = $this->Feedback_model->feedback();
            $data['ts']       = $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('feedback_notification', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function edit_info_feedback()
    {
        $order_id       = $this->input->post('order_id');
        $wage           = $this->input->post('wage');
        $teamid         = $this->input->post('teamid');
        $position       = $this->input->post('position');
        $date_require   = $this->input->post('date_require');
        $note           = $this->input->post('note');
        $checkbox       = $this->input->post('checkbox');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 1,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $this->sendEmail_all($teamid, $order_id);
            }
        }

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0, 'status_approved' => 0, 'date_required' => $date_require]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'status_approved' => 0, 'date_required' => $date_require]);
            }
        }



        return redirect('feedback_notification');
    }

    private function sendEmail_all($teamid, $order_id)
    {
        $team  = $this->db->get_where('tbl_team', ['idTeam' => $teamid])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $team['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }
    public function feedback_all()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['feedback_team']  = $this->Feedback_model->feedback_team();
            $data['ts']             = $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('feedback_all', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function edit_info_feedback_all()
    {
        $order_id       = $this->input->post('order_id');
        $wage           = $this->input->post('wage');
        $teamid         = $this->input->post('teamid');
        $position       = $this->input->post('position');
        $date_require   = $this->input->post('date_require');
        $note           = $this->input->post('note');
        $checkbox       = $this->input->post('checkbox');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }


        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 1,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                if ($teamid != '') {
                    $this->sendEmail_all_a($teamid, $order_id);
                }
            }
        }


        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0, 'date_required' => $date_require, 'status_approved' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                    $this->sendEmail_all_user($order_id);
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_require, 'status_approved' => 0]);
                $this->sendEmail_all_user($order_id);
            }
        }



        return redirect('feedback_all');
    }

    private function sendEmail_all_a($teamid, $order_id)
    {
        $team  = $this->db->get_where('tbl_team', ['idTeam' => $teamid])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $team['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }

    private function sendEmail_all_user($order_id)
    {
        $orderdb  = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();
        $userdb  = $this->db->get_where('tbl_user', ['idUser' => $orderdb['userId']])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $userdb['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';
        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> ' . $order_id . ' , You can cancel your order here. http://www.ip-soft.co.th/ipsoft/cancel_order?order=' . $order_id . ' </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($userdb['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile User !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile User');
        }
    }

    public function cancel_order()
    {
        $order = $this->input->get('order');

        $data = [
            'is_check' => 1
        ];
        $this->db->where('order_id', $order);
        $success = $this->db->update('tbl_upload_order', $data);
        if ($success) {
            $data01 = [
                'status' => 4
            ];
            $this->db->where('order_id', $order);
            $this->db->update('tbl_upload_team', $data01);
        }

        if ($success > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Cancel order !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Cancel order.');
        }
        return redirect('home');
    }

    public function status_Feedback()
    {
        $id = $this->input->get('id');
        $tid = $this->input->get('tid');



        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'), 'teamId' => $tid, 'notify_team' => 0, 'status_c_feedack_team' => 1]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Feedback information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Feedback information');
        }
        return redirect('feedback_all');
    }

    public function status_feedback_now()
    {
        $id      = $this->input->get('id');
        $order   = $this->input->get('order');

        $this->db->where('order_id', $order);
        $this->db->where('status !=', '4');
        $this->db->where('teamId !=', '');
        $getw    =  $this->db->get('tbl_upload_team')->row_array();

        if ($getw == true) {
            $insert = [
                'order_id' => $getw['order_id'] ,
                'position' => $getw['position'] ,
                'wage' => $getw['wage'] / 2 ,
                'wage_thai' => $getw['wage_thai']  / 2,
                'status' => '3' ,
                'teamId' => $getw['teamId'] ,
                'status_dashboard' => $getw['status_dashboard']  ,
                'create_at' => date('Y-m-d H:i:s') ,
                'update_at' => $getw['update_at'] ,
                'update_confirm' => $getw['update_confirm'] ,
            ];
            $this->db->insert('tbl_upload_team', $insert);   
        }

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'), 'teamId' => $getw['teamId'], 'notify_team' => 0, 'status_c_feedack_team' => 1]);

        $this->db->where('order_id', $order);
        $resultsedit = $this->db->update('tbl_upload_order_team', ['update_at' => date('Y-m-d H:i:s'), 'check_new' => 0]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Feedback information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Feedback information');
        }
        return redirect('feedback_all');
    }


    public function fileUpload_feedback_team()
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
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_feedback_file', $data);
            }
        }
    }

    public function order_auto_feedback_team()
    {
        $id   = $this->input->post('id');
        $order_id   = $this->input->post('order_id');
        $team = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();
        $cmid       = $this->input->post('cmid');
        $DM         = $this->input->post('DM');
        $dated      = $this->input->post('dated');
        $orf = array(
            'teamId'                => $team['teamId'],
            'feedback_detail'       => $DM,
            'order_id'              => $order_id,
            'userId'                => $cmid,
            'update_at'             => date('Y-m-d H:i:s'),
            'dated'                 => $dated,
            'status_c_feedack_team' => '1',
        );
        $this->db->where('id', $id);
        $success = $this->db->update('tbl_feedback', $orf);
        echo $success;
    }

    public function feedback_file_update_detail()
    {
        $id     = $this->input->post('id');
        $detail = $this->input->post('detail');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['feedback_detail' => $detail]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated detail information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated detail information');
        }
        return redirect('feedback_notification');
    }

    public function feedback_all_detail()
    {
        $id     = $this->input->post('id');
        $detail = $this->input->post('detail');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['feedback_detail' => $detail]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated detail information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated detail information');
        }
        return redirect('feedback_all');
    }

    public function Deduct_Money()
    {


        $data = array(

            'price_deductmoney'         => $this->input->post('price_deductmoney'),
            'node_deductmoney'   => $this->input->post('node_deductmoney'),
            'team_id'   => $this->input->post('team_id'),
            'order_id'   => $this->input->post('order_id'),
            'status_deductmoney' => 1,
            'created_at'     => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_deductmoney', $data);
        $Deduct_Money = $this->db->get_where('tbl_deductmoney', ['team_id' => $this->input->post('team_id')])->row_array();
        $this->sendEmail_Notification_Deduct_Money($Deduct_Money);
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Admin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('feedback_all');
    }

    private function sendEmail_Notification_Deduct_Money($Deduct_Money)
    {


        $subject = 'test ip-soft';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> </div>';


        $Deduct_Money = $this->db->get_where('tbl_deductmoney', ['team_id' => $Deduct_Money['team_id']])->row_array();
        $message .= 'โดนหักเงิน' . $Deduct_Money['price_deductmoney'] . 'สาเหตุของการหัก' . $Deduct_Money['node_deductmoney'];
        $message .= '<br>';

        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        $message .= 'Reject';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to('infinityp.soft@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('back_team');
    }

    public function order_auto_feedback_Stockadmin()
    {
        $dated      = $this->input->post('dated');
        $detail     = $this->input->post('detail');
        $order_id   = $this->input->post('order_id');
        $userId     = $this->input->post('userId');
        $teamId     = $this->input->post('teamId');

        $orf = array(
            'feedback_detail'           => $detail,
            'order_id'                  => $order_id,
            'teamId'                    => $teamId,
            'userId'                    => $userId,
            'create_at'                 => date('Y-m-d H:i:s'),
            'dated'                     => $dated,
            'check_status'              => 1,
            'status_c_feedack_team'     => 1
        );
        if ($this->db->insert('tbl_feedback', $orf)) {
            $appro = array(
                'status_approved' => 3
            );
            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_order', $appro);
            if ($success) {
                $updateT = array(
                    'status' => 2
                );
                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_team', $updateT);
            }
        }
        echo $success;
    }

    public function send_feedbacktion()
    {
        $note       = $this->input->post('note');
        $order_id   = $this->input->post('order_id');
        $order      = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();
        $user       = $this->db->get_where('tbl_user', ['idUser' => $order['userId']])->row_array();

        $subject = 'More details from the system.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'More details from the system';
        $message .= '</div>';
        $message .= '<div class="row">';
        if (empty($order['email'])) {
            $message .= '<p>Hey "' . $user['username'] . '",</p>';
        } else {
            $message .= '<p>Hey "' . $order['Username'] . '",</p>';
        }
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order['order_id'] . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;">' . $note . ' </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        if (empty($order['email'])) {
            $this->email->to($user['email']);
        } else {
            $this->email->to($order['email']);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update email detail !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email detail ');
        }
        return redirect('feedback_notification');
    }


    public function send_feedbacktion_all()
    {
        $note       = $this->input->post('note');
        $order_id   = $this->input->post('order_id');
        $order      = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();
        $user       = $this->db->get_where('tbl_user', ['idUser' => $order['userId']])->row_array();

        $subject = 'More details from the system.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'More details from the system';
        $message .= '</div>';
        $message .= '<div class="row">';
        if (empty($order['email'])) {
            $message .= '<p>Hey "' . $user['username'] . '",</p>';
        } else {
            $message .= '<p>Hey "' . $order['Username'] . '",</p>';
        }
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order['order_id'] . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;">' . $note . ' </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        if (empty($order['email'])) {
            $this->email->to($user['email']);
        } else {
            $this->email->to($order['email']);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update email detail !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email detail ');
        }
        return redirect('feedback_all');
    }

    public function delete_feedbacktion()
    {
        $order          = $this->input->post('order');
        $idf            = $this->input->post('idf');
        $note           = $this->input->post('note');
        $filefeedback   = $this->db->get_where('tbl_feedback_file', ['id_feedback' => $idf])->row_array();

        unlink($filefeedback['path']);
        $this->db->where('id_feedback', $idf);
        if ($this->db->delete('tbl_feedback_file')) {
            $this->db->where('id', $idf);
            $this->db->delete('tbl_feedback');

            $this->db->where('order_id', $order);
            $this->db->update('tbl_upload_order', ['is_check' => '1']);
        }

        $orderid = $this->db->get_where('tbl_upload_order', ['order_id' => $order])->row_array();



        $this->sendEmail_cancel_nw($orderid, $note);

        return redirect('feedback_notification');
    }

    private function sendEmail_cancel_nw($orderid, $note)
    {
        $user = $this->db->get_where('tbl_user', ['idUser' => $orderid['userId']])->row_array();

        $subject = 'Order cancellation email.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Your document has been cancel';
        $message .= '</div>';
        $message .= '<div class="row">';
        if (empty($orderid['email'])) {
            $message .= '<p>Hey "' . $user['username'] . '",</p>';
        } else {
            $message .= '<p>Hey "' . $orderid['Username'] . '",</p>';
        }
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $orderid['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $orderid['order_id'] . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;">Cancel Order ID : ' . $orderid['order_id'] . ' ' . $note . ' </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        if (empty($orderid['email'])) {
            $this->email->to($user['email']);
        } else {
            $this->email->to($orderid['email']);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update email cancel information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email information');
        }
    }

    public function rename_filename_feedback_all()
    {
        $id = $this->input->post('id');
        $name_file = $this->input->post('name_file');
        $last_file = $this->input->post('last_file');
        $path = $this->input->post('path');

        if ($this->session->userdata('email_admin') != '') {
            rename($path, 'uploads/Feedback/' . $name_file . '.' . $last_file);
            if ($id) {
                $update = [
                    'file_name' => $name_file . '.' . $last_file,
                    'path' => 'uploads/Feedback/' . $name_file . '.' . $last_file,
                ];
                $this->db->where('id', $id);
                $success = $this->db->update('tbl_feedback_file', $update);
                echo $success;
            }
        } else {
            redirect('feedback_all');
        }
    }
    public function upload_team_ST_feedback_all()
    {
        $teamid  = $this->input->post('team');
        $order_id = $this->input->post('order_id');

        $data = array(

            'order_id'                         => $order_id,
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'teamId'                           => $teamid,
            'note'                             => $this->input->post('note_t'),
            'create_at'                        => date('Y-m-d H:i:s')

        );


        $resultsedit = $this->db->insert('tbl_upload_team', $data);

        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1, 'date_required' => $this->input->post('Daterequired'), 'note_user' => $this->input->post('note')]);

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully Update to team information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1]);

                $this->sendEmail_all_feedback($teamid, $order_id);
            }
        }

        return redirect('feedback_all');
    }

    private function sendEmail_all_feedback($teamid, $order_id)
    {
        $team  = $this->db->get_where('tbl_team', ['idTeam' => $teamid])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $team['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinity_P23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }
}
