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
            $this->load->view('more_file',$data);
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
            $this->load->view('more_file_team',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function  status_more_file_team()
    {
        $id = $this->input->get('id');
      

        $this->db->where('order_id', $id);
        $resultsedit = $this->db->update('tbl_upload_orderGT', ['update_at' => date('Y-m-d H:i:s'),'status_see_more_file_team' => 1]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status_more_file_team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status_more_file_team information');
        }
        return redirect('More_File_team');
    }
    

   
}
