<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_ctr extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }


    public function loginMe()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('Login_model');
            if ($this->Login_model->login_user_block_money($email, $password)) {
                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss', TRUE);
                // $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
                // $check_status = array(
                //     'IdTeam'            => $team['IdTeam'],
                //     'update_date'         => date('Y-m-d H:i:s')
                // );

                // $this->db->insert('tbl_status_team', $check_status);
                $this->session->set_flashdata('save_ss2', 'Welcome to Fileback Help');
                redirect('home');
            } elseif ($this->Login_model->login_user_block($email, $password)) {
                $this->session->set_flashdata('login_user_block', TRUE);
                redirect('home');
            } elseif ($this->Login_model->login($email, $password)) {
                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $save_sss = $this->session->set_flashdata('save_ss', TRUE);
                $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
                $packAgeCheck = $this->db->order_by('id', "DESC")->get_where('tbl_paypal', ['user_id' => $user['id']])->row_array();
                if (!empty($packAgeCheck)) {
                    $datePaypal = date("Y-m-d", strtotime($packAgeCheck['start_time']));
                    $checkDate = DateDiff($datePaypal, date("Y-m-d"));

                    if ($checkDate == 5) {
                        $this->session->set_flashdata('package_timeOut_3_day', TRUE);
                    }

                    if ($checkDate == 6) {
                        $this->session->set_flashdata('package_timeOut_2_day', TRUE);
                    }

                    if ($checkDate == 7) {
                        $this->session->set_flashdata('package_timeOut_1_day', TRUE);
                    }
                }
                $this->session->set_flashdata('save_ss2', 'Welcome to Fileback Help');
                redirect('my-profile');
            } elseif ($this->Login_model->login_team($email, $password)) {

                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss', TRUE);
                $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
                $check_status = array(
                    'IdTeam'            => $team['IdTeam'],
                    'update_date'         => date('Y-m-d H:i:s')
                );

                $this->db->insert('tbl_status_team', $check_status);
                $this->session->set_flashdata('save_ss2', 'Welcome to Fileback Help');
                redirect('home');
            } elseif ($this->Login_model->login_team_c($email, $password)) {
                $this->session->set_flashdata('fail_login_status', TRUE);
                redirect('home');
            } else {
                $this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
                redirect('home', 'refresh');
            }
        } else {
            redirect('home', 'refresh');
        }
    }

    // public function update_session()
    // {
    //     $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
    //     $now = date('Y-m-d H:i:s');

    //     $data = array(
    //         'create'        => $now
    //     );
    //     $this->db->where('teamId', $team['id']);
    //     $this->db->update('tbl_session', $data);
    // }

    public function logout()
    {
        $team = $this->input->get('team');
        if (isset($team)) {
            $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
            $this->db->where('IdTeam', $team['IdTeam']);
            $this->db->delete('tbl_status_team');
        }

        $this->session->sess_destroy(); //ล้างsession

        redirect('home'); //กลับไปหน้า Login
    }

    public function checkStatus()
    {
        $IdTeam = $this->input->get('IdTeam');
        $this->db->where('IdTeam', $IdTeam);
        $this->db->update('tbl_status_team', ['update_date' => date('Y-m-d H:i:s')]);

        echo 'success';
    }

    public function teamOnline()
    {
        $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $status_team = $this->db->get_where('tbl_status_team', ['IdTeam' => $team['IdTeam']])->row_array();
        if (!empty($status_team)) {
            redirect('/home');
        } else {
            $check_status = array(
                'IdTeam'            => $team['IdTeam'],
                'update_date'         => date('Y-m-d H:i:s')
            );
            $this->db->insert('tbl_status_team', $check_status);
            redirect('/home');
        }
    }

    public function teamOffline()
    {
        $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
        $status_team = $this->db->get_where('tbl_status_team', ['IdTeam' => $team['IdTeam']])->row_array();
        if (!empty($status_team)) {
            $this->db->where('IdTeam', $team['IdTeam']);
            $this->db->delete('tbl_status_team');
            redirect('/home');
        } else {
            redirect('/home');
        }
    }
}
