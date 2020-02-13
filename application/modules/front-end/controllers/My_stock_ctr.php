<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_stock_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    function my_stock()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $this->load->view('options/header_login');
            $this->load->view('my_stock');
            $this->load->view('options/footer');
        }
    }

    function order_isconfirm()
    {
        $id             = $this->input->post('id');
        $is_confirm     = $this->input->post('is_confirm');
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data = array(
                'is_confirm'        => $is_confirm,
            );

            $this->db->where('id', $id);
            $success = $this->db->update('tbl_upload_order', $data);

            echo $success;
        }
    }
}
