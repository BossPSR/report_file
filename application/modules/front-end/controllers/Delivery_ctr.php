<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delivery_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index()
    {
        $ses = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $sessi = $ses['IdTeam'];

        $data['delivery'] = $this->Order_model->delivery_team($sessi);
        $data['delivery_feed'] = $this->Order_model->delivery_team_feed($sessi);
        $data['folder'] = $this->db->get_where('tbl_folder', ['id_team_folder' => $sessi, 'cancel_status' => 0])->result_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $this->load->view('options/header_login');
            $this->load->view('delivery', $data);
            $this->load->view('options/footer');
        }
    }

    public function delivery_file()
    {
        // image_lib
        $order_id   = $this->input->post('select_items');
        $idfolder   = $this->input->post('idfolder');
        $team       = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();
        $order_exp  = explode(',', $order_id);
        $feed       = $this->db->get_where('tbl_feedback', ['order_id' => $order_exp[0]])->row_array();
        $order_re   = $this->db->get_where('tbl_upload_order', ['order_id' => $order_exp[0]])->row_array();




        // Set preference
        $config['upload_path']     = 'uploads/Team/';
        // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
        $config['allowed_types']   = '*';
        $config['max_size']        = '99999'; // max_size in kb
        $config['file_name']       = $_FILES['file']['name'];

        //Load upload library
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        // File upload
        if ($this->upload->do_upload('file')) {
            // Get data about the file
            $uploadData = $this->upload->data();

            $data = array(
                'id_upload_team_uot'    => $order_exp[1],
                'teamId'                => $team->IdTeam,
                'order_id'              => $order_exp[0],
                'group'                 => $idfolder,
                'file_name'             => $uploadData['file_name'],
                'path'                  => 'uploads/Team/' . $uploadData['file_name'],
                'create_at'             => date('Y-m-d H:i:s'),
            );
            if ($this->db->insert('tbl_upload_order_team', $data)) {
                if ($order_re['status_refeedback'] == '1') {
                    $data3 = array(
                        'status'        => '5',
                    );
                    $this->db->where('order_id', $order_exp[0]);
                    $this->db->update('tbl_upload_team', $data3);
                } else {
                    $data3 = array(
                        'status'        => '1',
                    );
                    $this->db->where('order_id', $order_exp[0]);
                    $this->db->update('tbl_upload_team', $data3);
                }
            }
            if ($feed == true) {
                $data2 = array(
                    'check_feedback_dalivery'   => '1'

                );
                $this->db->where('order_id', $order_exp[0]);
                if ($this->db->update('tbl_feedback', $data2)) {
                    $data3 = array(
                        'check_feedback_order'  => '1'
                    );
                    $this->db->where('teamId', $team->IdTeam);
                    $this->db->update('tbl_feedback', $data3);
                }
            }
        }
    }

    public function order_check_timeout()
    {
        $order       = $this->input->get('order');
        $teamorder   = $this->db->get_where('tbl_upload_team', ['order_id' => $order, 'status_out' => 1])->row();
        $team        = $this->db->get_where('tbl_team', ['IdTeam' => $teamorder->teamid])->row();

        $this->db->where('order_id', $order);
        $this->db->update('tbl_upload_order_team', ['check_new' => '0']);

        if ($teamorder == true) {


            $data = [
                'income'         => $team->income - 10,
            ];

            $this->db->where('IdTeam', $teamorder->teamid);
            $success = $this->db->update('tbl_team', $data);
            if ($success) {
                $data02 = [
                    'teamid_dti'     =>  $teamorder->teamid,
                    'item_dti'       =>  'deduct income',
                    'income_dti'     =>  '10',
                    'order_id_dti'   =>  $order,
                    'create_at_dti'  =>  date('Y-m-d H:i:s'),
                ];
                $this->db->insert('tbl_deduct_team_income', $data02);
            }
        } else {
            $success = 1;
        }

        echo $success;
    }

    public function new_folder()
    {
        $team       = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();

        $data = [
            'id_team_folder'    => $team->IdTeam,
            'name_folder'       => $this->input->post('name'),
            'create_at'         => date('Y-m-d H:i:s'),
        ];

        $success = $this->db->insert('tbl_folder', $data);

        if ($success > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfull Create folder .');
            redirect('My-delivery');
        } else {
            $this->session->set_flashdata('error_pro', 'Error for Change folder.');
            redirect('My-delivery');
        }
    }

    public function delete_folder()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $team    = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();
            $id      = $this->input->get('id');
            $this->db->where('id', $id);
            $success = $this->db->update('tbl_folder', ['cancel_status' => 1]);

            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfull Delete folder .');
                redirect('My-delivery');
            } else {
                $this->session->set_flashdata('error_pro', 'Error for Change folder.');
                redirect('My-delivery');
            }
        }
    }
}
