<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Bangkok');

class Buy_ctr extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Buy_model');
  }


  public function index()
  {
    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data['userId']   = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['package']   = $this->db->get('tbl_package')->result_array();
      $datePaypal = date("Y-m-d", strtotime($data['userId']['package_end']));
      $checkDate = DateDiff(date("Y-m-d"),$datePaypal);
  
      if ($data['userId']['package_end'] !== null) {

        if ($checkDate < 0) {
          $this->session->set_flashdata('package_check', TRUE);
          redirect('home');
        }
      }

      $this->load->view('options/header_login');
      $this->load->view('buy', $data);
      $this->load->view('options/footer');
    }
  }


  public function thank_for_buy()
  {
    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {

      $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['userId'] = $user;
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $user['idUser']])->row_array();
      if (!empty($paypal)) {
        $datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate >= 0) {
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

    $userId     = $this->input->post('userId');
    $date_req   =  $this->input->post('date');
    $detail     =  $this->input->post('detail');
    $date_now     =  $this->input->post('date_now');

    $target_dir = "uploads/Buy/"; // Upload directory

    $request = 1;

    if (isset($_POST['request'])) {
      $request = $_POST['request'];
    }
    if ($request == 1) {
      // Set preference
      $config['upload_path']     = 'uploads/Buy/';
      // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
      $config['allowed_types']   = '*';
      $config['max_size']        = 0; // max_size in kb
      $config['file_name']       = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();

      // File upload
      if ($this->upload->do_upload('file')) {
        // Get data about the file
        $uploadData = $this->upload->data();

        $data = array(
          'userId'        => $userId,
          'order_id'      => $buymax->order_main,
          'note_user'     => $detail,
          'date_required' => $date_req,
          'file_name'     => $uploadData['file_name'],
          'path'          => 'uploads/Buy/' . $uploadData['file_name'],
          'notify_admin'  => 0
        );

        $this->db->insert('tbl_upload_order', $data);
     
      }
    }
  }

  public function fileUpload_buyGT()
  {
    // image_lib

    $userId         = $this->input->post('userId');
    $date_req       =  $this->input->post('date');
    $note           = $this->input->post('note');
    $wage           = $this->input->post('wage');
    $date_required  = $this->input->post('date_required');
    $position       = $this->input->post('position');
    $target_dir     = "uploads/Buy/GT/"; // Upload directory

    $request = 1;

    if (isset($_POST['request'])) {
      $request = $_POST['request'];
    }
    if ($request == 1) {
      // Set preference
      $config['upload_path']     = 'uploads/Buy/GT/';
      // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
      $config['allowed_types']   = '*';
      $config['max_size']        = '99999'; // max_size in kb
      $config['file_name']       = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
      $Gtmain = $this->db->order_by('id', 'DESC')->get('tbl_morefile_GT')->row();


      // File upload
      if ($this->upload->do_upload('file')) {
        // Get data about the file
        $uploadData = $this->upload->data();

        $data = array(
          'more_id'          => $Gtmain->id,
          'order_id'         => $buymax->order_main,
          'file_name_GT'     => $uploadData['file_name'],
          'path_GT'          => 'uploads/Buy/GT/' . $uploadData['file_name'],
          'create_at'        => date('Y-m-d H:i:s'),
        );
        $this->db->insert('tbl_upload_orderGT', $data);
      }
    }
  }

  public function order_auto_morefile_buy()
  {
    $userId    = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $GT        = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
    $detail    = $this->input->post('detail');

    $orf = array(
      'more_detail'       => $detail,
      'order_id'          => $GT->order_main,
      'userId'            => $userId['idUser'],
      'create_at'         => date('Y-m-d H:i:s'),
    );
    $success = $this->db->insert('tbl_morefile_GT', $orf);

    echo $success;
  }

  public function order_download()
  {
    $order_id = $this->input->get('order_id');
    $get_list = $this->db->get_where('tbl_upload_order', ['order_id' => "ODB" . $order_id])->result_array();

    foreach ($get_list as $key => $get_list) {
      $success = force_download($get_list['path'], $get_list['file_name']);

      echo $success;
    }
  }

  public function order_auto()
  {
    $date_req   =  $this->input->post('status');
    $orf = array(

      'create_at'     => date('Y-m-d H:i:s'),
      'status'        => $date_req
    );
    if ($this->db->insert('tbl_order_f', $orf)) {
      $insert_id = $this->db->insert_id();
      $update = array(
        'order_main'    => 'ODB' . $insert_id,
      );
      $this->db->where('id', $insert_id);
      $this->db->update('tbl_order_f', $update);
    }
  }

  public function order_auto_sell()
  {
    $date_req   =  $this->input->post('status');
    $orf = array(
      'create_at'     => date('Y-m-d H:i:s'),
      'status'        => $date_req
    );
    if ($this->db->insert('tbl_order_s', $orf)) {
      $insert_id = $this->db->insert_id();
      $update = array(
        'order_main'    => 'ODS' . $insert_id,
      );
      $this->db->where('id', $insert_id);
      $success = $this->db->update('tbl_order_s', $update);
      echo $success;
    }
  }
}
