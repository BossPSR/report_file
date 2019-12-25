<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header');
			$this->load->view('register');
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	public function register_success()
	{
		$passport            = $this->input->post('passport');
		$email               = $this->input->post('email');
		$phone               = $this->input->post('phone');
		$username            = $this->input->post('username');
		$c_password          = $this->input->post('c_password');
		$password            = $this->input->post('password');
		$created_at          = date('Y-m-d H:i:s');
		$username_check      = $this->Login_model->check_usre($passport, $email);
		$check_usre2         = $this->Login_model->check_usre2($username);

		if ($username_check  && $check_usre2) {
			$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> ขออภัย Email หรือ passport หรือ username  นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!! </div>');
            redirect('register','refresh');
			// echo "<script>";
			// echo "alert('ขออภัย Email หรือ passport หรือ username  นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!!');";
			// echo "window.location='register';";
			// echo "</script>";
		} else {
			if ($password != $c_password) {
				$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอกรหัสผ่านให้ตรงกัน กรุณาลองใหม่อีกครั้ง !!! </div>');
               	redirect('register','refresh');
				// echo "<script>";
				// echo "alert('กรุณากรอกรหัสผ่านให้ตรงกัน กรุณาลองใหม่อีกครั้ง !!!');";
				// echo "window.location='register';";
				// echo "</script>";
			} else {
				$data = array(
					'passport'          => $passport,
					'email'             => $email,
					'phone'             => $phone,
					'username'          => $username,
					'password'          => md5($password),
					'created_at'        => $created_at
				);

				$success = $this->db->insert('tbl_user', $data);

				if ($success > 0) {
					$this->session->set_flashdata('save_ss', TRUE);
                	redirect('register','refresh');
					// echo "<script>";
					// echo "alert('สมัครสมาชิกเรียบร้อยแล้ว สามารถเข้าสู่ระบบได้เลย');";
					// echo "window.location='register';";
					// echo "</script>";
				} else {
					$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
               	 	redirect('register','refresh');
					// echo "<script>";
					// echo "alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!!');";
					// echo "window.location='register';";
					// echo "</script>";
				}
			}
		}
	}
}
