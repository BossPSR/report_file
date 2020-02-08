<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approved_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
            $this->load->view('approved');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function not_approved()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
            $this->load->view('not_approved');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }
}
