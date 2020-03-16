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
    
}
