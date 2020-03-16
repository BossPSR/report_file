<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_feedback_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
    }

    function my_feedback()
    {
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $as = $sess['IdTeam'];
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {

            $data['feedback'] = $this->Feedback_model->feedback($as);

            $this->load->view('options/header_login');
            $this->load->view('my_feedback', $data);
            $this->load->view('options/footer');
        }
    }
}
