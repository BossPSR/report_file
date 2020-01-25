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

            if ($this->Login_model->login($email, $password)) {
                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss', TRUE);
                $user = $this->db->get_where('tbl_user',['email'=>$email])->row_array();
                $packAgeCheck = $this->db->order_by('id', "DESC")->get_where('tbl_paypal',['user_id'=>$user['id']])->row_array();
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
               
                redirect('my-profile');
                   
            } elseif ($this->Login_model->login_team($email, $password)) {

                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss', TRUE);
                // $team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
                // print_r($team);
                // exit();
                redirect('home');
            } else {
                $this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
                redirect('home', 'refresh');
            }
        } else {
            redirect('home', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); //ล้างsession

        redirect('home'); //กลับไปหน้า Login
    }
}
