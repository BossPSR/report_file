<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overall_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function edit_info_over()
    {
        $order_id   = $this->input->post('order_id');
        $wage       = $this->input->post('wage');
        $teamid     = $this->input->post('teamid');
        $position   = $this->input->post('position');
        $date_required = $this->input->post('date_required');
        $note = $this->input->post('note');

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
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0, 'date_required' => $date_required]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required]);
            
            }
        }

        return redirect('orvernotwork');
    }

    public function edit_info_over_ns()
    {
        $order_id   = $this->input->post('order_id');
        $wage       = $this->input->post('wage');
        $teamid     = $this->input->post('teamid');
        $position   = $this->input->post('position');
        $note   = $this->input->post('position');
        $date_required_info   = $this->input->post('date_required_info');

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
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required_info]);
            }
        }

        return redirect('orvernotsubmit');
    }

    public function delete_order_nw()
    {
        $id   = $this->input->post('order_id');
        $note = $this->input->post('note');

        $data = array(

            'note_reject'         => $note,
            'is_check'            => 1,
            'update_at'           => date('Y-m-d H:i:s'),
            'notify_user'         => 0,
            'notify_admin'        => 0

        );
        $this->db->where('order_id', $id);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);

        $orderid = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();

        $this->sendEmail_cancel_nw($orderid, $note);

        return redirect('orvernotwork');
    }

    public function delete_order_ns()
    {
        $id   = $this->input->post('order_id');
        $note = $this->input->post('note');

        $data = array(

            'note_reject'         => $note,
            'is_check'            => 1,
            'update_at'           => date('Y-m-d H:i:s'),
            'notify_user'         => 0,
            'notify_admin'        => 0

        );
        $this->db->where('order_id', $id);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);

        $orderid = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();

        $this->sendEmail_cancel_nw($orderid, $note);

        return redirect('orvernotsubmit');
    }

    public function send_not_work()
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
        return redirect('orvernotwork');
    }

    public function send_not_submit()
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
        return redirect('orvernotsubmit');
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
}
