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


        $data = array(

            'id_orderBuy'         => $this->input->get('id'),
            'id_user'   => $this->input->get('userid'),
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
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_feedback_file', $data);
            }
        }
    }

    public function order_auto_feedback()
    {
        $order_id   = $this->input->post('order_id');
        $team = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();
        $cmid       = $this->input->post('cmid');
        $DM         = $this->input->post('DM');
        $dated      = $this->input->post('dated');
        $orf = array(
            'teamId'            => $team['teamId'],
            'feedback_detail'   => $DM,
            'order_id'          => $order_id,
            'userId'            => $cmid,
            'create_at'         => date('Y-m-d H:i:s'),
            'dated'             => $dated,
        );
        $success = $this->db->insert('tbl_feedback', $orf);
        echo $success;
    }



    public function sendEmail_delivery_complete()
    {

        $order_id = $this->input->post('order_id');
        $order_team = $this->input->post('order_team');

        $id = $this->input->post('id');

        $this->db->where('order_id', $id);
        $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);
        $subject = 'test ip-soft';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : ' . $id . '</div>';
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




        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';
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
        $this->email->to('infinityp.soft@gmail.com');
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
