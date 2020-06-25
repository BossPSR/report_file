<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_history_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function my_store()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['teamId'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

            $search_key                     = $this->input->get('search_key');
            $team                           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $_team                          = $team['IdTeam'];
            if ($search_key == '' || $search_key == null) {
                $data['store']                = $this->History_model->my_store($_team);
            } else {
                $data['store']                = $this->History_model->search_store($search_key, $_team);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_score_team', $data);
            $this->load->view('options/footer');
        }
    }

    function my_incom()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['teamId'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

            $search_key                     = $this->input->get('search_key');
            $team                           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $_team                          = $team['IdTeam'];
            if ($search_key == '' || $search_key == null) {
                $data['store']                = $this->History_model->my_store($_team);
            } else {
                $data['store']                = $this->History_model->search_store($search_key, $_team);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_income_team', $data);
            $this->load->view('options/footer');
        }
    }
}
