<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Price_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
            $this->load->view('price_management');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }
   
}
