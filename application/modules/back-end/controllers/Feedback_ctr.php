<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            
            $data['feedback'] = $this->Feedback_model->feedback();
            $this->load->view('options/header');
            $this->load->view('feedback',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function feedback_team()
    {
        if ($this->session->userdata('email_admin') != '') {
            
            $data['feedback_team'] = $this->Feedback_model->feedback_team();
            $this->load->view('options/header');
            $this->load->view('feedback_team',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function status_Feedback()
    {
        $id = $this->input->get('id');
        $tid = $this->input->get('tid');

      

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_feedback', ['update_at' => date('Y-m-d H:i:s'),'teamId' => $tid,'notify_team' => 0,'status_c_feedack_team' => 1]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Feedback information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Feedback information');
        }
        return redirect('Feedback_team');
    }
    
    public function fileUpload_feedback_team()
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
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_feedback_file', $data);
            }
        }
    }
    public function order_auto_feedback_team()
    {
        $order_id   = $this->input->post('order_id');
        $team = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();
        $cmid       = $this->input->post('cmid');
        $DM         = $this->input->post('DM');
        $dated      = $this->input->post('dated');
        $orf = array(
            'teamId'            => $team['teamId'],
            'feedback_detail'   => $DM,
            'order_id'          => $order_id,
            'userId'            => $cmid,
            'create_at'         => date('Y-m-d H:i:s'),
            'dated'             => $dated,
        );
        $success = $this->db->insert('tbl_feedback', $orf);
        echo $success;
    }

    public function Deduct_Money()
    {


        $data = array(

            'price_deductmoney'         => $this->input->post('price_deductmoney'),
            'node_deductmoney'   => $this->input->post('node_deductmoney'),
            'team_id'   => $this->input->post('team_id'),
            'order_id'   => $this->input->post('order_id'),
            'status_deductmoney' => 1,
            'created_at'     => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_deductmoney', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Admin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('Feedback_team');
    }

}
