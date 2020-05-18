<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            redirect('back_dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function admin_loginMe()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('Login_model');

            if ($this->Login_model->login_admin($email, $password)) {
                $user_data = array(
                    'email_admin' => $email
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss2', 'ล็อกอินเรียบร้อยแล้ว');
                redirect('back_dashboard');
            } else {
                $this->session->set_flashdata('del_ss2', 'รหัสผ่านผิดกรุณา ตรวจสอบ!!');
                redirect('backend', 'refresh');
            }
        }
    }

    public function admin_logout()
    {
        $this->session->sess_destroy(); //ล้างsession

        redirect('backend'); //กลับไปหน้า Login
	}
	
	public function checkStatus_admin()
	{
		$status_team = $this->db->get('tbl_status_team')->result_array();
		foreach ($status_team as $statusTeam) {
			$date = date('Y-m-d H:i:s');
			$statusTeam_date = $statusTeam['update_date'];
			$date_result = $this->diff_time($statusTeam_date,$date);
			if ($date_result > 3) {
				$this->db->where('id',$statusTeam['id']);
				$this->db->delete('tbl_status_team');
			}
			
		}
		echo 'success';

	}

	private function diff_time($date1s,$date2s)
	{
		$now = new DateTime($date2s);
		$future = new DateTime($date1s);
		$diffSeconds = $now->getTimestamp() - $future->getTimestamp();
		return $diffSeconds;
	}
}
