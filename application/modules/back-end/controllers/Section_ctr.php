<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Section_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['section'] = $this->Store_model->store_section();
            $this->load->view('options/header');
            $this->load->view('section',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

   
}
