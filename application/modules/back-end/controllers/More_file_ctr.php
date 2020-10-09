<?php
defined('BASEPATH') or exit('No direct script access allowed');

class More_file_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('More_file_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['more_file'] = $this->More_file_model->more_file();
            $this->load->view('options/header');
            $this->load->view('more_file', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function more_file_team()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['more_file_team'] = $this->More_file_model->more_file_team();
            $this->load->view('options/header');
            $this->load->view('more_file_team', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function  status_more_file_team()
    {
        $id     = $this->input->get('id');
        $order  = $this->input->get('order');
        $teamT   = $this->db->get_where('tbl_upload_team', ['order_id' => $order])->row_array();
        

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_morefile_GT', ['update_at' => date('Y-m-d H:i:s'), 'status_see_more_file_team' => 1]);

        if ($resultsedit) {
            $this->db->where('order_id',$order);
            $success = $this->db->update('tbl_morefile_GT', ['teamId' => $teamT['teamId']]);
        }
        
        if ($teamT['teamId'] != '') {
            $this->sendEmail_more($order);
        } else {
            $this->session->set_flashdata('save_ss2', 'Successfully updated More File information');
        }
        return redirect('More_File');
    }


    private function sendEmail_more($order)
    {
        $team = $this->db->get_where('tbl_upload_team', ['order_id' => $order])->row_array();
        $emailT = $this->db->get_where('tbl_team', ['IdTeam' => $team['teamId']])->row_array();

        $subject = 'Additional documents from the admin.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Additional documents from the admin';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $emailT['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $team['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Please check your documents at : ("' . $team['order_id'] . '")  https://www.ip-soft.co.th/ipsoft/</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;">You get additional documents from the admin Order : ' . $team['order_id'] . ' </div>';

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
        $this->email->to($emailT['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update email Morefile.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email Morefile !! ');
        }
    }


    public function  more_file_update_detail()
    {
        $id         = $this->input->post('id');
        $detail     = $this->input->post('detail');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_morefile_GT', ['more_detail_team' => $detail]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated detail information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated detail information');
        }
        return redirect('More_File');
    }

    public function  more_file_other()
    {
        $id         = $this->input->post('id');
        $order_id   = $this->input->post('order_id');
        $textarea   = $this->input->post('textarea');
        $team       = $this->db->get_where('tbl_upload_team',['order_id' => $order_id])->row_array();
        

        $this->db->where('id',$id);
        $gt = $this->db->update('tbl_morefile_GT', ['more_detail' => $textarea , 'status_see_more_file_team' => '1']);
        if ($gt) {
            $this->db->where('order_id',$order_id);
            $success = $this->db->update('tbl_morefile_GT', ['teamId' => $team['teamId']]);
        }

        echo $success;
        
    }

    public function more_file_file()
    {
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
                $uploadData = $this->upload->data();

                $data = array(
                    'more_id'       => $this->input->post('id'),
                    'order_id'      => $this->input->post('order'),
                    'file_name_GT'  => $uploadData['file_name'],
                    'path_GT'       => 'uploads/Buy/GT/' . $uploadData['file_name'],
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_upload_orderGT', $data);
            }
        }
    }

}
