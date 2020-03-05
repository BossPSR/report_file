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
            $this->load->view('complete',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function sendEmail_delivery()
    {
        $id =$this->input->get('id');
        $email =$this->input->get('email');
        $user = $this->db->get_where('tbl_user', ['id' => $email])->row_array();
        $order = $this->db->get_where('tbl_upload_order_team', ['order_id' => $id])->row_array();

        $subject = 'test ip-soft';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : ' . $order['order_id'] . '</div>';
        $message .= '<a href="http://ip-soft.co.th/ipsoft/'. $order['path'].' target="_blank"><i class="feather icon-file-text" style="font-size: 25px; cursor: pointer;"></i></a>';

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
        $this->email->to('mikiboy004@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            echo '1';
        } else {
            echo '2';
        }
    }
   
}
