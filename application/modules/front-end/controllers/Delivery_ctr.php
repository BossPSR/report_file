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
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $this->load->view('options/header_login');
            $this->load->view('delivery',$data);
            $this->load->view('options/footer');
        }
    }

    public function delivery_file()
    {
    // image_lib
    $team       = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();
    $order_id   = $this->input->post('select_items');

    $target_dir = "uploads/Team/"; // Upload directory

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
            'teamId'        => $team->IdTeam,
            'order_id'      => $order_id,
            'file_name'     => $uploadData['file_name'],
            'path'          => 'uploads/Team/' . $uploadData['file_name'],
            'create_at'     => date('Y-m-d H:i:s'),
            );
            $this->db->insert('tbl_upload_order_team', $data);
            // if ($this->db->insert('tbl_upload_order', $data)) {
            //   return redirect('buy_uploadGT', $data);
            // }
        
        }
    }
}
