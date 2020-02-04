<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selling_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Selling_model');
    }

    function my_selling()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $user                     = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
            $_user                    = $user['id'];
            $data['selling']         = $this->Selling_model->my_selling($_user);
            $this->load->view('options/header_login');
            $this->load->view('my_selling', $data);
            $this->load->view('options/footer');
        }
    }
}
