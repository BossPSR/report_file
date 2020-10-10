<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_stock_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Order_model');
    }

    function my_stock_item()
    {
        $sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {

            $get_sess = $this->db->get_where('tbl_job_position', ['id_team' => $sess['id'], 'status_approve' => 1])->result_array();
            foreach ($get_sess as $get_sess) {
                $as[] = $get_sess['job_position'];
            }

            $data['countcancel']    = $this->Order_model->my_cancel($sess['IdTeam']);
            $data['dd']             = date('Y-m-d', strtotime('+30 day' . '+' . $data['countcancel']['create_at']));
            $data['item']           = $this->Order_model->my_stock_item($as);
            $data['item_loop']      = $this->Order_model->my_stock_item_not($as);
            // $data['stock']       = $this->Order_model->my_stock($as);

            $this->load->view('options/header_login');
            $this->load->view('my_stock_item', $data);
            $this->load->view('options/footer');
        }
    }

    function my_stock_item_add()
    {

        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $idTeam             = $this->input->post('idTeam');
            $position           = $this->input->post('position');
            $create_at          = date('Y-m-d H:i:s');

            $data = array(
                'id_team'           => $idTeam,
                'job_position'      => $position,
                'status_approve'    => 0,
                'create_at'         => $create_at
            );

            if ($this->db->insert('tbl_job_position', $data)) {
                $this->session->set_flashdata('success_addItemT', TRUE);
                redirect('My-stock-Item', 'refresh');
            } else {
                $this->session->set_flashdata('success_addItemF', TRUE);
                redirect('My-stock-Item', 'refresh');
            }
        }
    }

    function my_stock()
    {
        $item_id = base64_decode($this->input->get('item'));
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $sess                   = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $data['teamTM']         = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            if ($sess['country_id'] == '218') {
                $data['stock']          = $this->Order_model->my_stock($item_id, $sess['IdTeam']);
            } else {
                $data['stock']          = $this->Order_model->my_stock_eng($item_id, $sess['IdTeam']);
            }

            $data['stock_row']      = $this->Order_model->my_stock_row($sess['IdTeam']);
            $stock_capp             = $this->Order_model->my_stock_count($sess['IdTeam']);

            $i = 0;
            foreach ($stock_capp as $stock_capp) {
                $i++;
            }
            $data['c_app'] = $i += 0;

            $this->load->view('options/header_login');
            $this->load->view('my_stock', $data);
            $this->load->view('options/footer');
        }
    }

    function order_isconfirm()
    {
        $order_id       = $this->input->post('order_id');
        $idteam         = $this->input->post('idteam');
        $is_confirm     = $this->input->post('is_confirm');

        $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row();

        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data = array(
                'status_confirmed_team'        => $is_confirm,
            );

            $this->db->where('order_id', $order_id);
            if ($this->db->update('tbl_upload_order', $data)) {
                $data_team = array(
                    'teamId'            => $team->IdTeam,
                    'status_dashboard'  => 1,
                    'update_confirm'    => date('Y-m-d H:i:s')
                );
                $this->db->where('order_id', $order_id);
                $this->db->where('id', $idteam);
                $success =  $this->db->update('tbl_upload_team', $data_team);
            }
            echo $success;
        }
    }

    function order_popup()
    {
        $id       = $this->input->post('id');

        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data = array(
                'check_popup_nocom'        => '1',
            );

            $this->db->where('id', $id);
            $success = $this->db->update('tbl_upload_team', $data);

            echo $success;
        }
    }

    function my_task()
    {
        $sess           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $data['teamTM'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

        $see = $sess['IdTeam'];
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {

            $data['task'] = $this->Order_model->my_task($see);
            $this->load->view('options/header_login');
            $this->load->view('my_task', $data);
            $this->load->view('options/footer');
        }
    }

    function my_task_timeout()
    {
        $sess           = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $see            = $sess['IdTeam'];
        $order          = $this->input->post('order');
        $user           = $this->input->post('user');
        $status         = $this->input->post('status');

        $data = array(
            'status_out'        => $status,
            'update_at'         => date('Y-m-d H:i:s')
        );

        $this->db->where('order_id', $order);
        if ($this->db->update('tbl_upload_team', $data)) {
            $team = array(
                'income'        => $sess['income'] - 10,
                'update_at'     => date('Y-m-d H:i:s')
            );
            $this->db->where('IdTeam', $see);
            $success = $this->db->update('tbl_team', $team);
            if ($success) {
                $deduct = array(
                    'userId'        => $user,
                    'order_id'      => $order,
                    'teamid_deduct' => $see,
                    'deduct'        => '10',
                    'detail'        => 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ',
                    'create_at'     => date('Y-m-d H:i:s')
                );
                $this->db->insert('tbl_deduct', $deduct);
            }
        }

        echo $success;
    }


    function my_task_app()
    {
        $order_id               = $this->input->post('order_id');
        $tm                     = $this->input->post('tm');
        $status_check_team      = $this->input->post('status_check_team');

        $data = array(
            'status_check_team'             => $status_check_team,
            'update_confirm'                => date('Y-m-d H:i:s')
        );

        $this->db->where('order_id', $order_id);
        $this->db->where('teamId', $tm);
        $success = $this->db->update('tbl_upload_team', $data);

        if ($success) {
            $this->db->where('order_id', $order_id);
            $this->db->where('status_check_team', 1);
            $this->db->delete('tbl_upload_team');
        }

        echo $success;
    }

    function my_task_can()
    {
        $note_can               = $this->input->post('note_can');
        $orb                    = $this->input->post('orb');
        $team_idd               = $this->input->post('team_idd');

        $data = array(
            'order_id'                      => $orb,
            'teamid'                        => $team_idd,
            'history'                       => $note_can,
            'status'                        => 1,
            'status_who'                    => 'Team cancel',
            'create_at'                     => date('Y-m-d H:i:s'),
            'end_date_ncf'                  => date("Y-m-d", strtotime(" + 30 days")),
        );

        if ($this->db->insert('tbl_cancel', $data)) {

            $data2 = array(
                'status_check_team'             => 0,
                'status'                        => 0,
                'teamId'                        => null,
                'update_confirm'                => date('Y-m-d H:i:s')
            );
            $this->db->where('order_id',  $orb);
            $success = $this->db->update('tbl_upload_team', $data2);
            if ($success) {
                $update = [
                    'status_confirmed_team' => '0'
                ];
                $this->db->where('order_id',  $orb);
                $this->db->update('tbl_upload_order', $update);
            }

            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Cancel  !!.');
                redirect('My-task');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Cancel !!.');
                redirect('My-task');
            }
        }
    }

    function my_task_withdraw()
    {
        $order_id               = $this->input->post('order_id');
        $teamId                 = $this->input->post('teamId');
        $price                  = $this->input->post('price');
        $status                 = 1;
        $create_at              = date('Y-m-d H:i:s');
        $star                   = $this->input->post('star');
        $textarea               = $this->input->post('textarea');

        $data = array(
            'order_id'          => $order_id,
            'teamId'            => $teamId,
            'price'             => $price,
            'status'            => $status,
            'create_at'         => $create_at
        );
        if ($this->db->insert('tbl_withdraw_team', $data)) {
            $maxId = $this->db->insert_id();

            $data2 = array(
                'bill_id'       => "BILL" . "-" . $maxId,
            );
            $this->db->where('id', $maxId);
            if ($this->db->update('tbl_withdraw_team', $data2))
                $data3 = array(
                    'stars_score_team'       => $star,
                    'note_approved_team'       => $textarea,
                );
            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_team', $data3);

            echo $success;
        }
    }

    public function show_pdf()
    {
        $data['dcnumber'] = base64_decode($this->input->get('dcnumber'));
        $this->load->view('show_pdf', $data);
    }

    public function my_task_cancel()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $order_id           = $this->input->post('order_id');
            $note_can           = $this->input->post('note_can');
            $status_cf_team     = 0;
            $team               = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $teamorder          = $this->db->get_where('tbl_upload_team', ['order_id' => $order_id, 'teamId' => $team['IdTeam']])->row_array();

            $data = array(
                'status_confirmed_team'         => $status_cf_team,
                'update_at'                     => date('Y-m-d H:i:s'),
            );

            $this->db->where('order_id', $order_id);
            if ($this->db->update('tbl_upload_order', $data)) {

                $data2 = array(
                    'status'            => 6,
                );

                $this->db->where('order_id', $order_id);
                if ($this->db->update('tbl_upload_team', $data2)) {
                    $data3 = array(
                        'order_id'         => $order_id,
                        'history'          => $note_can,
                        'price_deduct'     => '10',
                        'teamid'           => $team['IdTeam'],
                        'create_at'        => date('Y-m-d H:i:s'),
                        'status'           => '1',
                        'status_who'       => 'Team cancel',
                        'end_date_ncf'     => date("Y-m-d", strtotime(" + 30 days")),
                    );

                    $success = $this->db->insert('tbl_cancel', $data3);

                    if ($success) {

                        $deduct = array(
                            'income'         => $team['income'] - 10,
                        );

                        $this->db->where('IdTeam', $team['IdTeam']);
                        $success = $this->db->update('tbl_team', $deduct);

                        $insertdb = array(
                            'order_id'     => $teamorder['order_id'],
                            'position'     => $teamorder['position'],
                            'wage'         => $teamorder['wage'],
                            'wage_thai'    => $teamorder['wage_thai'],
                            'note'         => $teamorder['note'],
                            'status'       => 0,
                            'teamId'       => null,
                            'create_at'    => date('Y-m-d H:i:s'),
                        );

                        $this->db->insert('tbl_upload_team', $insertdb);
                    }
                }
            }

            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Cancel  !!.');
                redirect('My-task');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Cancel !!.');
                redirect('My-task');
            }
        }
    }

    function cancel_auto()
    {
        $team   = $this->input->post('team');
        $dd     = $this->input->post('date');
        if ($dd <= date("Y-m-d")) {
            $this->db->where('teamid', $team);
            $result = $this->db->delete('tbl_cancel');
        }
        echo $result;
    }
}
