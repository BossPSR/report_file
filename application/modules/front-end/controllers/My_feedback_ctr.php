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

    function my_order_feedback()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {

            // image_lib
            $order_id       = $this->input->post('order_id');
            $userId         = $this->input->post('userId');
            $create_at      =  $this->input->post('create_at');
            $detail         = $this->input->post('detail');
            $dated2         = $this->input->post('dated');

            $target_dir = "uploads/Feedback/"; // Upload directory

            $request = 1;


            if ($request == 1) {

                if (isset($_POST['request'])) {
                    $request = $_POST['request'];
                }
                // Set preference
                $config['upload_path']     = 'uploads/Feedback/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']       = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);


                $feedmax = $this->db->order_by('id', 'DESC')->get('tbl_feedback')->row();
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $data2 = array(
                        'id_feedback'       => $feedmax->id,
                        'file_name'         => $uploadData['file_name'],
                        'path'              => 'uploads/Feedback/' . $uploadData['file_name'],
                        'create_at'         => date('Y-m-d H:i:s'),

                    );

                    $success = $this->db->insert('tbl_feedback_file', $data2);
                }
                echo $success;
            }
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
            'check_status'      => 1
        );
        if ($this->db->insert('tbl_feedback', $orf)) {
            $appro = array(
                'status_approved' => 3
            );
            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_order', $appro);
        }
        echo $success;
    }
}
