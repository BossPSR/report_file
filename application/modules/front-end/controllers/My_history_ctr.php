<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_history_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('History_model');
        
    }

    function my_store_team()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['teamId'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

            $search_key                     = $this->input->get('search_key');
            $team                           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $_team                          = $team['IdTeam'];
            if ($search_key == '' || $search_key == null) {
                $data['store']                = $this->History_model->my_store_good($_team);
            } else {
                $data['store']                = $this->History_model->search_store($search_key, $_team);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_score_team', $data);
            $this->load->view('options/footer');
        }
    }
    
    function my_score_team_deduct()
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
            $this->load->view('my_score_team_deduct', $data);
            $this->load->view('options/footer');
        }
    }

    function my_income()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['teamId'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

            $search_key                     = $this->input->get('search_key');
            $team                           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $_team                          = $team['IdTeam'];
            if ($search_key == '' || $search_key == null) {
                $data['income']                = $this->History_model->my_income($_team);
            } else {
                $data['income']                = $this->History_model->search_store($search_key, $_team);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_income_team', $data);
            $this->load->view('options/footer');
        }
    }

    function my_income_team_deduct()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['teamId'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

            $search_key                     = $this->input->get('search_key');
            $team                           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $_team                          = $team['IdTeam'];
            if ($search_key == '' || $search_key == null) {
                $data['income']                = $this->History_model->my_income_deducte($_team);
            } else {
                $data['income']                = $this->History_model->search_store($search_key, $_team);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_income_team_deduct', $data);
            $this->load->view('options/footer');
        }
    }

}
