<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw_ctr extends CI_Controller {

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
            $this->load->view('withdraw',$data);
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
            $this->load->view('withdraw_team',$data);
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
                    'status'            => '2' ,
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
                    'status'            => '2' ,
                );

                $this->db->where('id', $id);
                $this->db->update('tbl_withdraw_team', $data);
            }
        }
    }
    
	
}