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
        
            $data['more_file'] = $this->More_file_model->more_file();
            $this->load->view('options/header');
            $this->load->view('more_file_team',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

   
}
