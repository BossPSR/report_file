<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_manual_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['team'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('options/header_login');
        $this->load->view('user_manual', $data);
        $this->load->view('options/footer');
    }
}
