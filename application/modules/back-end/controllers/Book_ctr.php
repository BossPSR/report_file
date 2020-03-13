<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
  
            $this->load->view('options/header');
            $this->load->view('add_bookmark');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function  bookmark_notpay()
    {
        if ($this->session->userdata('email_admin') != '') {
  
            $data['bookmark_all_not'] = $this->Store_model->bookmark_all_not();
            
            $this->load->view('options/header');
            $this->load->view('bookmark_notpay',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }
   
    
    public function fileUpload_store_book()
    {
        // image_lib
        $DM = $this->input->post('DM');

          $upload_book = $this->Store_model->bookmark_upload($DM);

           $target_dir = "uploads/Store/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Store/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'store_id'      =>  $upload_book['store_id'],
                        'file_name'     => $uploadData['file_name'],
                        'status_main_search' => 1,
                        'status_chack' => 1,
                        'relive_status' => 1,
                        'path'          => 'uploads/Store/' . $uploadData['file_name'],
                        'create_at'     => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_store', $data);
                }
            }
        
    }
   
}
