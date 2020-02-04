<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Countries_model');
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

		if ($username_check || $check_usre2) {
			$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> ขออภัย Email หรือ passport หรือ username  นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!! </div>');
			redirect('register', 'refresh');
			// echo "<script>";
			// echo "alert('ขออภัย Email หรือ passport หรือ username  นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!!');";
			// echo "window.location='register';";
			// echo "</script>";
		} else {
			if ($password != $c_password) {
				$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอกรหัสผ่านให้ตรงกัน กรุณาลองใหม่อีกครั้ง !!! </div>');
				redirect('register', 'refresh');
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

				if ($this->db->insert('tbl_user', $data)) {
					$last_id = $this->db->insert_id();
					// echo $sumStandard;

					$data2 = array(
						'idUser' => "CM" . $last_id
					);
					$this->db->where('id', $last_id);
					$success = $this->db->update('tbl_user', $data2);
					// print_r($success);
					// exit();

					if ($success > 0) {
						// $this->session->set_flashdata('save_ss', TRUE);
						// redirect('register', 'refresh');
						echo "<script>";
						echo "alert('สมัครสมาชิกเรียบร้อยแล้ว สามารถเข้าสู่ระบบได้เลย');";
						echo "window.location='register';";
						echo "</script>";
					} else {
						// $this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
						// redirect('register', 'refresh');
						echo "<script>";
						echo "alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!!');";
						echo "window.location='register';";
						echo "</script>";
					}
				}
			}
		}
	}

	public function register_team()
	{
		$data['countries'] = $this->Countries_model->get_countries();

		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header');
			$this->load->view('register_team', $data);
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	public function register_team_success()
	{
		$countries			= $this->input->post('countries');
		$name				= $this->input->post('name');
		$phone				= $this->input->post('phone');
		$email				= $this->input->post('email');
		$bank_account		= $this->input->post('bank_account');
		$password			= $this->input->post('password');
		$c_password			= $this->input->post('c_password');
		$job				= $this->input->post('job');
		$team_check			= $this->Login_model->team_check($email);
		$user_check 		= $this->Login_model->user_check($email);
		if ($team_check || $user_check) {
			echo "<script>";
			echo "alert('Data no must be filled out!!!');";
			echo "window.location='register-team';";
			echo "</script>";
		} else {
			if ($password != $c_password) {
				echo "<script>";
				echo "alert('Passwords do not match !!!');";
				echo "window.location='register-team';";
				echo "</script>";
			} else {
				if (!empty($_FILES['file_name']['name'])) {

					$config['upload_path'] 		= 'uploads/resume/';
					// $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
					$config['allowed_types'] 	= '*';
					$config['max_size']    		= '99999'; // max_size in kb
					$config['file_name'] 		= $_FILES['file_name']['name'];
					//Load upload library
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					// File upload
					if ($this->upload->do_upload('file_name')) {
						// Get data about the file
						$uploadData = $this->upload->data();
						$data = array(
							'country_id'		=> $countries,
							'name'				=> $name,
							'phone'				=> $phone,
							'email'				=> $email,
							'bank_account'		=> $bank_account,
							'password'			=> md5($password),
							'file_name'			=> $uploadData['file_name'],
							'created_at'		=> date('Y-m-d H:i:s'),
						);
						if ($this->db->insert('tbl_team', $data)) {
							$team_id = $this->db->insert_id();
							foreach ($job as $key => $job) {
								$data2 = array(
									'id_team'			=> $team_id,
									'job_position'		=> $job,
									'create_at'		=> date('Y-m-d H:i:s'),
								);
								$saveData = $this->db->insert('tbl_job_position', $data2);
							}
							if ($saveData > 0) {
								echo "<script>";
								echo "alert('Thank for send register team.');";
								echo "window.location='home';";
								echo "</script>";
							} else {
								echo "<script>";
								echo "alert('Error for send resume. Plase try agian !!');";
								echo "window.location='register-team';";
								echo "</script>";
							}
						} else {
							echo "<script>";
							echo "alert('Data no must be filled out!!!');";
							echo "window.location='register-team';";
							echo "</script>";
						}
					}
				} else {
					echo "<script>";
					echo "alert('Resume no must be filled out!!!');";
					echo "window.location='register-team';";
					echo "</script>";
				}
			}
		}
	}
}
