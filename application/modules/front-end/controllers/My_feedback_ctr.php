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

    function my_order_feedback()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {

            // image_lib

            $userId     = $this->input->post('userId');
            $create_at   =  $this->input->post('create_at');
            $detail     = $this->input->post('detail2');
            $dated2     = $this->input->post('dated2');

            $target_dir = "uploads/Feedback/"; // Upload directory

            $request = 1;

            if (isset($_POST['request'])) {
                $request = $_POST['request'];
            }
            if ($request == 1) {
                // Set preference
                $config['upload_path']     = 'uploads/Feedback/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']       = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // $buyre =  $this->Buy_model->buy();
                // $buymax = $this->Buy_model->buy_max();
                // $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
                // $orf = array(
                //   'order_main'    => "OD".rand('0','100'),
                //   'create_at'     => date('Y-m-d H:i:s') ,
                //   'status'        => '1'    
                // );
                // $this->db->insert('tbl_order_f', $orf);


                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'userId'        => $userId,
                        'feedback_detail'   => $detail,
                        'dated'         => $dated2,
                        // 'order_id'      => $buymax->maxorder,
                        // 'order_id'      => $buymax->order_main,
                        'file_name'     => $uploadData['file_name'],
                        'path'          => 'uploads/Feedback/' . $uploadData['file_name'],
                        'create_at'     => $create_at,
                        'notify_admin'  => 0
                    );
                    $success = $this->db->insert('tbl_feedback', $data);
                    echo $success;
                }
            }
        }
    }
}
