<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buy_ctr extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {

      $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['userId'] = $user;
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $user['id']])->row_array();
      if (!empty($paypal)) {
        $datePaypal = date("Y-m-d", strtotime($paypal['create_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate <= 30) {
          $this->load->view('options/header_login');
          $this->load->view('buy', $data);
          $this->load->view('options/footer');
        } else {
          redirect('package');
        }
      } else {
        redirect('package');
      }
    }
  }

  public function thank_for_buy()
  {
    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {

      $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['userId'] = $user;
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $user['id']])->row_array();
      if (!empty($paypal)) {
        $datePaypal = date("Y-m-d", strtotime($paypal['create_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate <= 30) {
          $this->load->view('options/header_login');
          $this->load->view('thank_for_buy', $data);
          $this->load->view('options/footer');
        } else {
          redirect('package');
        }
      } else {
        redirect('package');
      }
    }
  }

  public function fileUpload_buy()
  {
    // image_lib
    $userId = $this->input->post('userId');

    $target_dir = "uploads/Buy/"; // Upload directory

    $request = 1;

    if (isset($_POST['request'])) {
      $request = $_POST['request'];
    }
    if ($request == 1) {
      if (!empty($_FILES['file']['name'])) {



        // Set preference
        $config['upload_path']     = 'uploads/Buy/';
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
            'userId'      => $userId['id'],
            // 'order_id'      => $insert_id,
            'file_name'      => $uploadData['file_name'],
            'path'        => 'uploads/Buy/' . $uploadData['file_name'],
            'create_at'      => date('Y-m-d H:i:s'),
          );
          if ($this->db->insert('tbl_upload_order', $data)) {
            $last_id = $this->db->insert_id();

            $data2 = array(
              'order_id'  => "OR-" . $last_id,
            );
            $this->db->where('id', $last_id);
            $this->db->update('tbl_upload_order', $data2);
            $delete = array(
              'last_id' => $last_id
            );
            $this->session->set_userdata($delete);
          }
        }
      }
    }

    if ($request == 2) {
      $last = $this->session->userdata('last_id');
      $this->db->where('id', $last);
      $this->db->delete('tbl_upload_order');
      $filename = $target_dir . $_POST['name'];
      unlink($filename);
      exit;
    }
  }
}
