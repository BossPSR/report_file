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
   

    public function sendEmail_delivery_pay()
    {
        
        $order_id =$this->input->post('order_id'); 
        $order_team =$this->input->post('order_team');
        $id =$this->input->post('id');

       
      
     
      
        $this->db->where('order_id',$id);
        $this->db->update('tbl_upload_order',['update_at' => date('Y-m-d H:i:s'),'status_delivery' => 1]);
        $subject = 'test ip-soft';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : ' . $id . '</div>';
        foreach ($order_id as $key => $order_id) {
            $order = $this->db->get_where('tbl_upload_order', ['id' => $order_id])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/'.$order['path'].'">'.$order['file_name'].'</a>';
            $message .= '<br>';
       }

       foreach ($order_team as $key => $order_team) {
           $orderT = $this->db->get_where('tbl_upload_order_team', ['id' => $order_team])->row_array();
           $message .= '<a href="http://ip-soft.co.th/ipsoft/'.$orderT['path'].'">'.$orderT['file_name'].'</a>';
           $message .= '<br>';

      }
     



        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';
        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        $message .= 'Reject';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'P@Ssw0rd';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to('infinityp.soft@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }
    }
}
