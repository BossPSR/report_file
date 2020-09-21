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
            $data['check_read'] = $this->Feedback_model->feedback_c_read($as);
            $data['feedback']   = $this->Feedback_model->feedback($as);

            $this->load->view('options/header_login');
            $this->load->view('my_feedback', $data);
            $this->load->view('options/footer');
        }
    }


    public function order_auto_feedback()
    {
        $dated      =  $this->input->post('dated');
        $detail     = $this->input->post('detail');
        $order_id   = $this->input->post('order_id');
        $userId     = $this->input->post('userId');
        $orf = array(
            'feedback_detail'   => $detail,
            'order_id'          => $order_id,
            'userId'            => $userId,
            'create_at'         => date('Y-m-d H:i:s'),
            'dated'             => $dated,
        );
        $success = $this->db->insert('tbl_feedback', $orf);
        echo $success;
    }

    public function order_auto_feedback_notApp()
    {
        $dated      = $this->input->post('dated');
        $detail     = $this->input->post('detail');
        $order_id   = $this->input->post('order_id');
        $userId     = $this->input->post('userId');
        $teamId     = $this->input->post('teamId');
        $refdata    = $this->input->post('refdata');
        $teamdb     = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();
        // $feedbackdb = $this->db->get_where('tbl_feedback', ['order_id' => $order_id])->row_array();

        if ($refdata == 1) {
            $s = 4;
            $g = 3;
        } else {
            $s = 3;
            $g = 2;
        }

        if ($teamdb == true) {
            $team = array(
                'status' => $g
            );
            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_team', $team);
        }

        if ($order_id) {
            $status_order = array(
                'status_approved' => $s,
                'status_delivery' => '0',
            );
            $this->db->where('order_id', $order_id);
            $this->db->update('tbl_upload_order', $status_order);
        }

        // if ($feedbackdb == true) {
        //     $status_order = array(
        //         'status_c_feedack_team' => '2',
        //     );
        //     $this->db->where('order_id', $order_id);
        //     $this->db->update('tbl_feedback', $status_order);
        // }

        $orf = array(
            'feedback_detail'   => $detail,
            'order_id'          => $order_id,
            'teamId'            => $teamId,
            'userId'            => $userId,
            'create_at'         => date('Y-m-d H:i:s'),
            'dated'             => $dated,
            'check_status'      => 1,
            're_feedback'       => $refdata,
        );
        $this->db->insert('tbl_feedback', $orf);


        echo $success;
    }

    public function my_order_feedback()
    {
        $target_dir = "uploads/Feedback/"; // Upload directory
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/Feedback/';
            // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
            $config['allowed_types']   = '*';
            $config['max_size']        = '99999'; // max_size in kb
            $config['file_name']     = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $feedmax = $this->db->order_by('id', 'DESC')->get('tbl_feedback')->row();

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();

                $data = array(
                    'id_feedback'       => $feedmax->id,
                    'file_name'         => $uploadData['file_name'],
                    'path'              => 'uploads/Feedback/' . $uploadData['file_name'],
                    'create_at'         => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_feedback_file', $data);
            }
        }
    }
}
