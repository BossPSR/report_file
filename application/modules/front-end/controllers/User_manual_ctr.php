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

    public function check_email_ot()
    {
        $or_id = $this->input->post('order_id');
        $data = array(
            'check_email_ot' => '1',
        );
        $this->db->where('order_id', $or_id);
        $query = $this->db->update('tbl_upload_order', $data);

        echo $query;
    }

    public function condition()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['team'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('options/header_login');
        $this->load->view('condition', $data);
        $this->load->view('options/footer');
    }

    public function policy()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['team'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('options/header_login');
        $this->load->view('policy', $data);
        $this->load->view('options/footer');
    }
}
