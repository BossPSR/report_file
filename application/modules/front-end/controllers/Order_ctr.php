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
      $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['id']])->row_array();
      if (!empty($paypal) || $data['userId']['free_forever'] == 1) {
        $datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));
        if ($checkDate < 8 || $data['userId']['free_forever'] == 1) {
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
    $order_id             = $this->input->post('order_id');
    $is_confirm     = $this->input->post('status_approved');

    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data = array(
        'status_approved'        => $is_confirm,
      );

      $this->db->where('order_id', "ODB" . $order_id);
      $success = $this->db->update('tbl_upload_order', $data);

      echo $success;
    }
  }

  public function order_not_approved()
  {
    $order_id             = $this->input->post('order_id');
    $is_confirm     = $this->input->post('status_approved');

    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {
      $data = array(
        'status_approved'        => $is_confirm,
      );

      $this->db->where('order_id', "ODB" . $order_id);
      $success = $this->db->update('tbl_upload_order', $data);

      echo $success;
    }
  }
}
