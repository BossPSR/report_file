<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complete_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Complete_model');
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

   
}
