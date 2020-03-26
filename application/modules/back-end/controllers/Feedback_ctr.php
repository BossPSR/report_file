<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            
            $data['feedback'] = $this->Feedback_model->feedback();
            $this->load->view('options/header');
            $this->load->view('feedback',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function feedback_team()
    {
        if ($this->session->userdata('email_admin') != '') {
            
            $data['feedback_team'] = $this->Feedback_model->feedback_team();
            $this->load->view('options/header');
            $this->load->view('feedback_team',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function status_Feedback()
    {
        $id = $this->input->get('id');
        $tid = $this->input->get('tid');

      

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'),'teamId' => $tid,'notify_team' => 0,'status_c_feedack_team' => 1]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Feedback information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Feedback information');
        }
        return redirect('Feedback_team');
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
        $Deduct_Money = $this->db->get_where('tbl_deductmoney',['team_id'=> $this->input->post('team_id')])->row_array();
        $this->sendEmail_Notification_Deduct_Money($Deduct_Money);
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Admin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('Feedback_team');
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
           $message .= 'โดนหักเงิน'.$Deduct_Money['price_deductmoney'].'สาเหตุของการหัก'.$Deduct_Money['node_deductmoney'];
           $message .= '<br>';

      
     



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

        return redirect('back_team');
    }
   

}
