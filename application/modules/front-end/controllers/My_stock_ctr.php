<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_stock_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Order_model');
    }

    function my_stock()
    {
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $get_sess = $this->db->get_where('tbl_job_position', ['id_team' => $sess['id']])->row_array();
            $as = $get_sess['job_position'];
            $data['stock'] = $this->Order_model->my_stock($as);

            $this->load->view('options/header_login');
            $this->load->view('my_stock',$data);
            $this->load->view('options/footer');
        }
    }

    function order_isconfirm()
    {
        $order_id       = $this->input->post('order_id');
        $is_confirm     = $this->input->post('is_confirm');

        $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();

        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data = array(
                'is_confirm'        => $is_confirm,
            );

            $this->db->where('order_id', "ODB" . $order_id);
            if ($this->db->update('tbl_upload_order', $data)) {
                $data_team = array(
                    'teamId' => $team->passport
                );
                $this->db->where('order_id', "ODB" . $order_id);
                $success =  $this->db->update('tbl_upload_team', $data_team);
            }
            echo $success;
        }
    }

    function my_task()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $this->load->view('options/header_login');
            $this->load->view('my_task');
            $this->load->view('options/footer');
        }
    }
}
