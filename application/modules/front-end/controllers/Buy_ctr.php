<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
      $data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['id']])->row_array();
      if (!empty($paypal) || $data['userId']['free_forever'] == 1) {
        $datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate < 8 || $data['userId']['free_forever'] == 1) {
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
        $datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate <= 7) {
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
      $config['max_size']        = '99999'; // max_size in kb
      $config['file_name']       = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      // $buyre =  $this->Buy_model->buy();
      // $buymax = $this->Buy_model->buy_max();
      $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
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
          // 'order_id'      => $buymax->maxorder,
          'order_id'      => $buymax->order_main,
          'date_required' => $date_req,
          'file_name'     => $uploadData['file_name'],
          'path'          => 'uploads/Buy/' . $uploadData['file_name'],
          'create_at'     => date('Y-m-d H:i:s'),
        );
        $this->db->insert('tbl_upload_order', $data);
        // if ($this->db->insert('tbl_upload_order', $data)) {
        //   return redirect('buy_uploadGT', $data);
        // }
      }
    }
  }

  public function fileUpload_buyGT()
  {
    // image_lib

    $userId     = $this->input->post('userId');
    $date_req   =  $this->input->post('date');
    $note       = $this->input->post('note');
    $wage       = $this->input->post('wage');
    $date_required  = $this->input->post('date_required');
    $position       = $this->input->post('position');
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
      $config['max_size']        = '99999'; // max_size in kb
      $config['file_name']       = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      // $buyre =  $this->Buy_model->buy();
      // $buymax = $this->Buy_model->buy_max();
      $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();
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
          // 'order_id'      => $buymax->maxorder,
          'order_id'      => $buymax->order_main,
          'file_name_GT'     => $uploadData['file_name'],
          'path_GT'          => 'uploads/Buy/' . $uploadData['file_name'],
          'create_at'     => date('Y-m-d H:i:s'),
        );
        if($this->db->insert('tbl_upload_orderGT', $data)){
          $up_q = array(
            'order_id'      => $buymax->order_main,
            'position'      => $position,
            'wage'          => $wage,
            'note'          => $note,
            'date_required' => $date_required,
            'create_at'     => date('Y-m-d H:i:s'),
          );
          $this->db->insert('tbl_upload_team',$up_q);
        }
      }
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
        'order_main'    => 'OD' . $insert_id,
      );
      $this->db->where('id', $insert_id);
      $this->db->update('tbl_order_f', $update);
    }
  }
}
