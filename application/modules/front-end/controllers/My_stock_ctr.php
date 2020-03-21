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

    function my_stock_item()
    {
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $get_sess = $this->db->get_where('tbl_job_position', ['id_team' => $sess['id'], 'status_approve' => 1])->result_array();
            foreach ($get_sess as $get_sess) {
                $as[] = $get_sess['job_position'];
            }

            $data['item']       = $this->Order_model->my_stock_item($as);
            // $data['stock']      = $this->Order_model->my_stock($as);

            $this->load->view('options/header_login');
            $this->load->view('my_stock_item', $data);
            $this->load->view('options/footer');
        }
    }

    function my_stock_item_add()
    {

        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $idTeam             = $this->input->post('idTeam');
            $position           = $this->input->post('position');
            $create_at          = date('Y-m-d H:i:s');

            $data = array(
                'id_team'           => $idTeam,
                'job_position'      => $position,
                'status_approve'    => 0,
                'create_at'         => $create_at
            );

            if ($this->db->insert('tbl_job_position', $data)) {
                $this->session->set_flashdata('success_addItemT', TRUE);
                redirect('My-stock-Item', 'refresh');
            } else {
                $this->session->set_flashdata('success_addItemF', TRUE);
                redirect('My-stock-Item', 'refresh');
            }
        }
    }

    function my_stock()
    {
        $item_id = base64_decode($this->input->get('item'));
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['stock'] = $this->Order_model->my_stock($item_id);

            $this->load->view('options/header_login');
            $this->load->view('my_stock', $data);
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
                'status_confirmed_team'        => $is_confirm,
            );

            $this->db->where('order_id', "ODB" . $order_id);
            if ($this->db->update('tbl_upload_order', $data)) {
                $data_team = array(
                    'teamId' => $team->IdTeam
                );
                $this->db->where('order_id', "ODB" . $order_id);
                $success =  $this->db->update('tbl_upload_team', $data_team);
            }
            echo $success;
        }
    }

    function my_task()
    {
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $get_sess = $this->db->get_where('tbl_job_position', ['id_team' => $sess['id']])->result_array();
            $see = $sess['IdTeam'];
            foreach ($get_sess as $get_sess) {
                $as[] = $get_sess['job_position'];
            }
            $data['task'] = $this->Order_model->my_task($as, $see);
            $this->load->view('options/header_login');
            $this->load->view('my_task', $data);
            $this->load->view('options/footer');
        }
    }
}
