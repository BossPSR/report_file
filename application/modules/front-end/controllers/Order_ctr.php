<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_ctr extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Order_model');
  }

  public function index()
  {
    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['idUser']])->row_array();
      if (!empty($paypal) || $data['userId']['free_forever'] == 1) {
        $datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate < 0 || $data['userId']['free_forever'] == 1) {
          $data['buy_email'] = $this->Order_model->order_buy($data['userId']['idUser']);
          $this->load->view('options/header_login');
          $this->load->view('order', $data);
          $this->load->view('options/footer');
        } else {
          redirect('package');
        }
      } else {
        redirect('package');
      }
    }
  }

  public function order_approved()
  {
    $order_id       = $this->input->post('order_id');
    $textarea       = $this->input->post('textarea');
    $is_confirm     = $this->input->post('status_approved');
    $df             = $this->Order_model->delete_feedback($order_id);
    $star            = $this->input->post('star');

    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data = array(
        'status_approved'        => $is_confirm,
        'note_approved'          => $textarea,
        ''       => $star
      );

      $this->db->where('order_id', $order_id);

      if ($success = $this->db->update('tbl_upload_order', $data)) {

        foreach ($df as $key => $df) {
          unlink($df['path']);
          $this->db->where('id_feedback', $df['id']);
          $this->db->delete('tbl_feedback_file');
        }

        $this->db->where('order_id', $order_id);
        $this->db->delete('tbl_feedback');
      }

      echo $success;
    }
  }

  public function order_not_approved()
  {
    $order_id             = $this->input->post('order_id');
    $textnot              = $this->input->post('textnot');
    $is_confirm           = $this->input->post('status_approved');
    $star                 = $this->input->post('star');
    $df                   = $this->Order_model->delete_feedback($order_id);


    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data = array(
        'status_approved'           => $is_confirm,
        'note_approved'             => $textnot,
        'stars_score_user'          => $star,
      );

      $this->db->where('order_id', $order_id);
      $success = $this->db->update('tbl_upload_order', $data);

      if ($success) {
        foreach ($df as $key => $df) {
          unlink($df['path']);
          $this->db->where('id_feedback', $df['id']);
          $this->db->delete('tbl_feedback_file');
        }

        $this->db->where('order_id', $order_id);
        $this->db->delete('tbl_feedback');
      }

      echo $success;
    }
  }

  public function order_refeedback()
  {
    $order_id       = $this->input->post('ordercon');
    $price          = $this->input->post('price');
    $is_confirm     = $this->input->post('status_approved');
    $df             = $this->Order_model->delete_feedback($order_id);
    $time_withdraw  = date("Y-m-d", strtotime("+60 day"));
    $row            = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id])->row_array();

    if ($row == true) {
      $data = array(
        'status'      => 3,
      );

      $this->db->where('order_id', $order_id);
      $this->db->update('tbl_upload_team', $data);
    }

    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      
      $data02 = array(
        'status_approved'        => $is_confirm,
        'end_time'               => $time_withdraw,
        'price_refeedback'       => $price,
        'status_refeedback'      => 1,
        'status_confirmed_team'  => 0,
      );

      $this->db->where('order_id', $order_id);
      $success = $this->db->update('tbl_upload_order', $data02);

      echo $success;
    }
  }

  public function order_uploadmorefile()
  {
    // image_lib

    $order_id     = $this->input->post('order_id');

    $request = 1;
    // Set preference
    $config['upload_path']     = 'uploads/Buy/GT/';
    // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
    $config['allowed_types']   = '*';
    $config['max_size']        = '99999'; // max_size in kb
    $config['file_name']       = $_FILES['file']['name'];

    //Load upload library
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    $moremax = $this->db->order_by('id', 'DESC')->get('tbl_morefile_GT')->row();

    // File upload
    if ($this->upload->do_upload('file')) {
      // Get data about the file
      $uploadData = $this->upload->data();

      $data = array(
        'more_id'           => $moremax->id,
        'order_id'          => $order_id,
        'file_name_GT'      => $uploadData['file_name'],
        'path_GT'           => 'uploads/Buy/GT/' . $uploadData['file_name'],
        'create_at'         => date('Y-m-d H:i:s'),
      );
      $this->db->insert('tbl_upload_orderGT', $data);
    }
  }

  public function order_auto_morefile()
  {
    $detail     = $this->input->post('detail');
    $order_id   = $this->input->post('order_id');
    $userId     = $this->input->post('userId');

    $orf = array(
      'more_detail'       => $detail,
      'order_id'          => $order_id,
      'userId'            => $userId,
      'create_at'         => date('Y-m-d H:i:s'),
      'status_more_file'  => 1
    );
    $success = $this->db->insert('tbl_morefile_GT', $orf);

    echo $success;
  }
}
