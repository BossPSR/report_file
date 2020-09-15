<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Withdraw_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Withdraw_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw'] = $this->Withdraw_model->withdraw_list();
            $this->load->view('options/header');
            $this->load->view('withdraw', $data);
            $this->load->view('options/footer');
        }
    }

    public function withdraw_realtime()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw_team'] = $this->Withdraw_model->withdraw_list_team();
            $this->load->view('options/header');
            $this->load->view('withdraw_team', $data);
            $this->load->view('options/footer');
        }
    }

    public function withdraw_history()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw_list_history'] = $this->Withdraw_model->withdraw_list_history();
            $this->load->view('options/header');
            $this->load->view('withdraw_history', $data);
            $this->load->view('options/footer');
        }
    }

    public function withdraw_team_history()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw_list_team_history'] = $this->Withdraw_model->withdraw_list_team_history();
            $this->load->view('options/header');
            $this->load->view('withdraw_team_history', $data);
            $this->load->view('options/footer');
        }
    }



    public function withdraw_status()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $id = $this->input->get('id');
            $data = array(
                'status' => $this->input->get('status')
            );

            $this->db->where('id', $id);
            $resultsedit = $this->db->update('tbl_withdraw', $data);

            if ($resultsedit > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update withdraw  !!.');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update withdraw ');
            }
            return redirect('back_withdraw');
        }
    }

    public function withdraw_status_team()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $id = $this->input->get('id');
            $data = array(
                'status' => $this->input->get('status')
            );

            $this->db->where('id', $id);
            $resultsedit = $this->db->update('tbl_withdraw_team', $data);

            if ($resultsedit > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update withdraw  !!.');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update withdraw ');
            }
            return redirect('withdraw_realtime');
        }
    }

    public function img_withdraw_user()
    {
        $id = $this->input->POST('id');

        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/money/';
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
                    'file_name'         => $uploadData['file_name'],
                    'path'              => 'uploads/money/' . $uploadData['file_name'],
                    'create_at'         => date('Y-m-d H:i:s'),
                    'status'            => '2',
                );

                $this->db->where('id', $id);
                $this->db->update('tbl_withdraw', $data);
                // $this->db->insert('tbl_withdraw', $data);
            }
        }
    }

    public function img_withdraw_team()
    {
        $id = $this->input->POST('id');

        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/money/team/';
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
                    'file_name'         => $uploadData['file_name'],
                    'path'              => 'uploads/money/team/' . $uploadData['file_name'],
                    'create_at'         => date('Y-m-d H:i:s'),
                    'status'            => '2',
                );

                $this->db->where('id', $id);
                $this->db->update('tbl_withdraw_team', $data);
            }
        }
    }

    public function sendEmail_withdraw()
    {
        $id         = $this->input->post('id');
        $textemail  = $this->input->post('textemail');
        $withdraw   = $this->db->get_where('tbl_withdraw', ['id' => $id])->row_array();
        $user       = $this->db->get_where('tbl_user', ['idUser' => $withdraw['userId']])->row_array();

        $subject = 'Notify from admin About withdrawing money.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Notify from admin About withdrawing money';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user['username'] . '",</p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your withdrawing details.</p><hr>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> ' . $textemail . ' </div>';

        $message .= '</center>';

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
        $this->email->to($user['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');
        $this->email->send();
        
    }

	public function back_withdraw_slip()
	{
		$id = $this->input->post('id');
		$transfer_date = $this->input->post('transfer_date');
		$transfer_time = $this->input->post('transfer_time');
		$transaction_date = $transfer_date.' '.$transfer_time;
		$data = array(
			'status'                       => 2,
			'transaction_date'             => $transaction_date,
		);
		$this->db->where('id',$id);
		$this->db->update('tbl_withdraw', $data);
		return true;
	}

	
    public function upload_back_withdraw_slip()
    {
       

            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Withdraw/';
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
                       
                        
                        'file_name'             => $uploadData['file_name'],
                        'path'                  => 'uploads/Withdraw/' . $uploadData['file_name'],
                        'update_at'             => date('Y-m-d H:i:s'),
                        
					);
					$this->db->where('id',$this->input->post('id'));
                    $this->db->update('tbl_withdraw', $data);
                }
            }
        
	}
	
	public function back_withdraw_team_slip()
	{
		$id = $this->input->post('id');
		$transfer_date = $this->input->post('transfer_date');
		$transfer_time = $this->input->post('transfer_time');
		$transaction_date = $transfer_date.' '.$transfer_time;
		$data = array(
			'status'                       => 2,
			'transaction_date'             => $transaction_date,
		);
		$this->db->where('id',$id);
		$this->db->update('tbl_withdraw_team', $data);
		return true;
	}

	
    public function upload_back_withdraw_team_slip()
    {
       

            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/WithdrawTeam/';
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
                       
                        
                        'file_name'             => $uploadData['file_name'],
                        'path'                  => 'uploads/Withdraw/' . $uploadData['file_name'],
                        'update_at'             => date('Y-m-d H:i:s'),
                        
					);
					$this->db->where('id',$this->input->post('id'));
                    $this->db->update('tbl_withdraw_team', $data);
                }
            }
        
    }
}
