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
    
}
