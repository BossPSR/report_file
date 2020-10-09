<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informal_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Approved_model');
    }

    public function add_team_informal()
    {
        if ($this->session->userdata('email_admin') != '') {

            $order_id   = $this->input->post('order_id');
            $name       = $this->input->post('name');
            $position   = $this->input->post('position');
            $Wage       = $this->input->post('Wage');
            $data = [
                'teamId'            => $name,
                'order_id'          => $order_id,
                'position'          => $position,
                'wage'              => $Wage,
                'create_at'         => date('Y-m-d H:i:s'),
                'status_informal'   => '1'
            ];
            $success = $this->db->insert('tbl_upload_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update Team Informal name !!.');
                return redirect('Satisfied');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Team Informal name');
                return redirect('Satisfied');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function add_team_informal_feedbackall()
    {
        if ($this->session->userdata('email_admin') != '') {

            $order_id   = $this->input->post('order_id');
            $name       = $this->input->post('name');
            $position   = $this->input->post('position');
            $Wage       = $this->input->post('Wage');
            $data = [
                'teamId'            => $name,
                'order_id'          => $order_id,
                'position'          => $position,
                'wage'              => $Wage,
                'create_at'         => date('Y-m-d H:i:s'),
                'status_informal'   => '1'
            ];
            $success = $this->db->insert('tbl_upload_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update Team Informal name !!.');
                return redirect('feedback_all');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Team Informal name');
                return redirect('feedback_all');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function add_team_informal_not()
    {
        if ($this->session->userdata('email_admin') != '') {

            $order_id   = $this->input->post('order_id');
            $name       = $this->input->post('name');
            $position   = $this->input->post('position');
            $Wage       = $this->input->post('Wage');
            $data = [
                'teamId'            => $name,
                'order_id'          => $order_id,
                'position'          => $position,
                'wage'              => $Wage,
                'create_at'         => date('Y-m-d H:i:s'),
                'status_informal'   => '1'
            ];
            $success = $this->db->insert('tbl_upload_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update Team Informal name !!.');
                return redirect('Not_Satisfied');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Team Informal name');
                return redirect('Not_Satisfied');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function update_team_informal()
    {
        if ($this->session->userdata('email_admin') != '') {

            $order_id   = $this->input->post('order_id');
            $name       = $this->input->post('name');
            $position   = $this->input->post('position');
            $Wage       = $this->input->post('Wage');
            $data = [
                'teamId'            => $name,
                'order_id'          => $order_id,
                'position'          => $position,
                'wage'              => $Wage,
                'update_confirm'         => date('Y-m-d H:i:s'),
                'status_informal'   => '1'
            ];
                       $this->db->where('order_id' ,$order_id);
            $success = $this->db->update('tbl_upload_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update Team Informal name !!.');
                return redirect('orvernotsubmit');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Team Informal name');
                return redirect('orvernotsubmit');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function fileUpload_t3_not_summit()
    {
        // image_lib
        $order  = $this->input->post('order');
        $teamId = $this->input->post('teamId');
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
                    'teamId'                => $teamId,
                    'order_id'              => $order,
                    'file_name'             => $uploadData['file_name'],
                    'path'                  => 'uploads/Team/' . $uploadData['file_name'],
                    'create_at'             => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_upload_order_team', $data);
            }
        }
    }

    public function sendEmail_delivery_not_summit()
    {
        $order_id   = $this->input->post('order_id');
        $order_team = $this->input->post('order_team');
        $id         = $this->input->post('id');
        $dm_id      = $this->input->post('dm_id');

        $this->db->where('order_id', $id);
        $su = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);

        if ($su) {
            $this->db->where('order_id', $id);
            $this->db->update('tbl_upload_team', ['status' => 1]);
        }

        foreach ($dm_id as $key => $dm_id) {
            $this->db->where('id_doc', $dm_id);
            $this->db->update('tbl_upload_main_search', ['update_at' => date('Y-m-d H:i:s')]);
        }

        $user_email         = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();
        $user_email_send    = $this->db->get_where('tbl_user', ['idUser' => $user_email['userId']])->row_array();


        $subject = 'Congratulations, your document has arrived by www.report-file.com ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Your document has arrived.';
        $message .= '</div>';
        $message .= '<div class="row">';
        if ($user_email_send['username']) {
            $message .= '<p>Hey "' . $user_email_send['username'] . '",</p>';
        } else {
            $message .= '<p>Hey "' . $user_email['Username'] . '",</p>';
        }
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $id  . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $id  . '")</p>';


        foreach ($order_id as $key => $order_id) {
            $order = $this->db->get_where('tbl_upload_store', ['id' => $order_id])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $order['path'] . '">' . $order['file_name'] . '</a>';
            $message .= '<br>';
        }

        foreach ($order_team as $key => $order_team) {
            $orderT = $this->db->get_where('tbl_upload_order_team', ['id' => $order_team])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $orderT['path'] . '">' . $orderT['file_name'] . '</a>';
            $message .= '<br>';
        }

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
        if ($user_email_send['email']) {
            $this->email->to($user_email_send['email']);
        } else {
            $this->email->to($user_email['email']);
        }
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('orvernotsubmit');
    }
}
