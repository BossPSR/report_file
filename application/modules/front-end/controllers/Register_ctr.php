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

		$this->load->view('options/header');
		$this->load->view('register');
		$this->load->view('options/footer');
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
			echo "<script>";
			echo "alert('ขออภัย Email หรือ passport หรือ username  นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!!');";
			echo "window.location='register';";
			echo "</script>";
		}else{
			if ($password != $c_password) {
				echo "<script>";
				echo "alert('กรุณากรอกรหัสผ่านให้ตรงกัน กรุณาลองใหม่อีกครั้ง !!!');";
				echo "window.location='register';";
				echo "</script>";
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
					echo "<script>";
					echo "alert('สมัครสมาชิกเรียบร้อยแล้ว สามารถเข้าสู่ระบบได้เลย');";
					echo "window.location='register';";
					echo "</script>";
				} else {
					echo "<script>";
					echo "alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!!');";
					echo "window.location='register';";
					echo "</script>";
				}
			}
		} 
	}
}
