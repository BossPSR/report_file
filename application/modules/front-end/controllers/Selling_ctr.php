<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selling_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Selling_model');
        $this->load->model('Search_model');
    }

    function my_selling()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $search_key                     = $this->input->get('search_key');
            $user                           = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
            $_user                          = $user['idUser'];
            if ($search_key == '' || $search_key == null) {
                $data['selling']                = $this->Selling_model->my_selling($_user);
            } else {
                $data['selling']                = $this->Search_model->search_date_selling($search_key, $_user);
            }
            $this->load->view('options/header_login');
            $this->load->view('my_selling', $data);
            $this->load->view('options/footer');
        }
    }
}
