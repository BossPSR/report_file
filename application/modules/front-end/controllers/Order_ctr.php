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


      $data['userId']   = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['package']   = $this->db->get('tbl_package')->result_array();
      $datePaypal = date("Y-m-d", strtotime($data['userId']['package_end']));
      $checkDate = DateDiff(date("Y-m-d"), $datePaypal);
      $data['buy_email'] = $this->Order_model->order_buy($data['userId']['idUser']);

      if ($data['userId']['package_end'] !== null) {

        if ($checkDate < 0) {
          $this->session->set_flashdata('package_check', TRUE);
          redirect('home');
        }
      }

      $this->load->view('options/header_login');
      $this->load->view('order', $data);
      $this->load->view('options/footer');
    }
  }

  public function order_approved()
  {
    $q = 1;
    $userId         = $this->input->post('userId');
    $order_id       = $this->input->post('order_id');
    $textarea       = $this->input->post('textarea');
    $is_confirm     = $this->input->post('status_approved');
    $df             = $this->Order_model->delete_feedback($order_id);
    $star           = $this->input->post('star');

    $this->db->group_by('order_id');
    $user01         = $this->db->get_where('tbl_upload_order', ['userId' => $userId, 'check_cashback_reward' => '0'])->result_array();
    $team01         = $this->db->get_where('tbl_upload_team',  ['order_id' => $order_id, 'status' => '1'])->row_array();
    $user02         = $this->db->get_where('tbl_user', ['idUser' => $userId])->row_array();
    foreach ($user01 as $key => $user01) {
      $q += 1;
    }


    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {

      if ($q == '30') {
        $user_reward = [
          'cash' => $user02['cash'] + 100
        ];
        $this->db->where('idUser', $userId);
        $this->db->update('tbl_user', $user_reward);

        $reward = [
          'check_cashback_reward' => 1
        ];
        $this->db->where('userId', $userId);
        $this->db->update('tbl_upload_order', $reward);

        $before = [
          'type_cashback'   => 'Rewards',
          'userId'          =>  $userId,
          'cashback'        => '100',
          'order_id'        =>  $order_id,
          'cashback_detail' =>  'ยินดีด้วยคุณได้รับ Reward จากการสั่งซื้อเอกสารครบ 30 ออเดอร์!',
          'create_at'       => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tbl_cashback', $before);
      }

      if ($team01 == true) {
        $team03   = $this->db->get_where('tbl_team', ['IdTeam' => $team01['teamid']])->row_array();
        $team04   = $this->db->get_where('tbl_upload_team', ['teamId' => $team01['teamid']])->row_array();
        if ($team03['country_id'] == '218') {
          $draft_income = [
            'income_thai' =>  $team03['income_thai'] + $team04['wage_thai']
          ];
        } else {
          $draft_income = [
            'income' =>  $team03['income'] + $team04['wage']
          ];
        }
        $this->db->where('IdTeam', $team01['teamid']);
        $tm3 = $this->db->update('tbl_team', $draft_income);

        $teamscore = [
          'team_score' =>  $team03['team_score'] + 10
        ];
        $this->db->where('IdTeam', $team01['teamid']);
        $tm3 = $this->db->update('tbl_team', $teamscore);

        if ($tm3) {
          if ($team03['team_score'] >= '500') {

            $teamic = [
              'income' =>  $team03['income'] + 100,
              'team_score' =>  '0'
            ];
            $this->db->where('IdTeam', $team01['teamid']);
            $tmdoop = $this->db->update('tbl_team', $teamic);
            if ($tmdoop) {
              $insertdb = [
                'userId'    => $userId,
                'type_sc'   => 'bonus',
                'teamid_sc' => $team01['teamid'],
                'score'     => '100',
                'order_id'  => $order_id,
                'detail'    => 'ยินดีด้วยคุณได้รับ 100 income จากคุณได้ Score ครบ 500 Score ',
                'create_at' => date('Y-m-d H:i:s')
              ];
              $this->db->insert('tbl_score', $insertdb);
            }
          } else {
            $insertdb = [
              'userId'    => $userId,
              'type_sc'   => 'score',
              'teamid_sc' => $team01['teamid'],
              'score'     => '10',
              'order_id'  => $order_id,
              'detail'    => 'ยินดีด้วยคุณได้รับ 10 Score จากการปิดออเดอร์ได้',
              'create_at' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('tbl_score', $insertdb);
          }
        }
      }

      $data = array(
        'status_approved'        => $is_confirm,
        'note_approved'          => $textarea,
        'stars_score_user'       => $star
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
    $user           = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

    // if ($row == true) {
    //   $data = array(
    //     'status'      => 3,
    //   );

    //   $this->db->where('order_id', $order_id);
    //   $this->db->update('tbl_upload_team', $data);
    // }

    if ($this->session->userdata('email') == '') {
      redirect('home');
    } else {

      $data02 = array(
        'status_approved'        => 4,
        'status_delivery'        => 0,
        'end_time'               => $time_withdraw,
        'price_refeedback'       => $price,
        'status_refeedback'      => 1,
        'status_confirmed_team'  => 0,
      );

      $this->db->where('order_id', $order_id);
      $success = $this->db->update('tbl_upload_order', $data02);
      // if ($success) {
      //   $insert01 = array(
      //     'teamId'          => $row['teamId'],
      //     'order_id'        => $order_id,
      //     'userId'          => $user['idUser'],
      //     'create_at'       => date("Y-m-d H:i:s"),
      //     'check_status'    => 0,
      //     're_feedback'     => 1,
      //   );

      //   $this->db->insert('tbl_feedback', $insert01);
      // }

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
