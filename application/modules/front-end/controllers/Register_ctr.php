<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Countries_model');
		$this->load->model('Forget_password_model');
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
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

		$Y = substr(date('Y'), 2);
		$M = date('m');

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
						'idUser' => "CM" . $Y . $M . "00" . $last_id
					);
					$this->db->where('id', $last_id);
					$success = $this->db->update('tbl_user', $data2);
					// print_r($success);
					// exit();

					if ($success > 0) {
						$this->session->set_flashdata('success_regis_team', TRUE);
						redirect('home');
						// $this->session->set_flashdata('save_ss', TRUE);
						// redirect('register', 'refresh');
						// echo "<script>";
						// echo "alert('สมัครสมาชิกเรียบร้อยแล้ว สามารถเข้าสู่ระบบได้เลย');";
						// echo "window.location='home';";
						// echo "</script>";
					} else {
						// $this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
						// redirect('register', 'refresh');
						// echo "<script>";
						// echo "alert('ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!!');";
						// echo "window.location='home';";
						// echo "</script>";
						$this->session->set_flashdata('fail_regis_team', TRUE);
						redirect('home');
					}
				}
			}
		}
	}

	public function register_team()
	{
		$data['countries'] = $this->Countries_model->get_countries();

		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
			$this->load->view('register_team', $data);
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	public function register_team_success()
	{
		$get_team			= $this->input->post('get_team');
		$get_team_pass		= $this->input->post('get_team_pass');
		$get_user			= $this->input->post('get_user');
		$get_user_pass		= $this->input->post('get_user_pass');

		$passport			= $this->input->post('passport');
		$countries			= $this->input->post('countries');
		$name				= $this->input->post('name');
		$phone				= $this->input->post('phone');
		$email				= $this->input->post('email');
		$bank_account		= $this->input->post('bank_account');
		$password			= $this->input->post('password');
		$c_password			= $this->input->post('c_password');
		$job				= $this->input->post('job');
		$Y = substr(date('Y'), 2);
		$M = date('m');

		if ($passport == $get_team_pass || $passport == $get_user_pass || $email == $get_team || $email == $get_user) {
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
							'passport'			=> $passport,
							'country_id'		=> $countries,
							'name'				=> $name,
							'phone'				=> $phone,
							'email'				=> $email,
							'bank_account'		=> $bank_account,
							'password'			=> md5($password),
							'file_name'			=> 'uploads/resume/'.$uploadData['file_name'],
							'resume_file'		=> $uploadData['file_name'],
							'created_at'		=> date('Y-m-d H:i:s'),
							'notify_admin'      => 0
						);
						if ($this->db->insert('tbl_team', $data)) {
							$team_id = $this->db->insert_id();
							$dataTM = array(
								'IdTeam'		=> "TM" . $Y . $M . "00" . $team_id,
							);
							$this->db->where('id', $team_id);
							if ($this->db->update('tbl_team', $dataTM)) {

								foreach ($job as $key => $job) {
									$data2 = array(
										'id_team'			=> $team_id,
										'job_position'		=> $job,
										'create_at'			=> date('Y-m-d H:i:s'),
									);
									$saveData = $this->db->insert('tbl_job_position', $data2);
								}
								if ($saveData > 0) {
									// echo "<script>";
									// echo "alert('Thank for send register team.');";
									// echo "window.location='home';";
									// echo "</script>";
									$this->session->set_flashdata('success_regis_team', TRUE);
									redirect('home');
								} else {
									$this->session->set_flashdata('fail_regis_teamResum', TRUE);
									redirect('home');
									// echo "<script>";
									// echo "alert('Error for send resume. Plase try agian !!');";
									// echo "window.location='register-team';";
									// echo "</script>";
								}
							} else {
								$this->session->set_flashdata('fail_regis_teamData', TRUE);
								redirect('home');
								// echo "<script>";
								// echo "alert('Data no must be filled out!!!');";
								// echo "window.location='register-team';";
								// echo "</script>";
							}
						}
					} else {
						$this->session->set_flashdata('fail_regis_teamResum', TRUE);
						redirect('home');
						// echo "<script>";
						// echo "alert('Resume no must be filled out!!!');";
						// echo "window.location='register-team';";
						// echo "</script>";
					}
				}
			}
		}
	}

	function forget_password()
	{
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
			$this->load->view('forget_password');
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	function forget_sendemail()
	{
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
			$this->load->view('send_email');
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	function forget_sendemailTeam()
	{
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
			$this->load->view('send_emailT');
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}


	public function forgot_passwordProcess()
	{
		$email 					= $this->input->post('email');
		$username_check      	= $this->Login_model->forgot_check_usre($email);
		$team_check				= $this->Login_model->forgot_check_team($email);

		if ($username_check) {

			$emailDetail = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
			$token = md5(uniqid(rand(), true));
			$this->db->where('id', $emailDetail['id']);
			$this->db->update('tbl_user', ['forgot_password' => $token, 'time_forgot_password' => date('Y-m-d H:i:s')]);

			$this->sendEmail($email, $emailDetail, $token);
			$this->session->set_flashdata('save_ss2', 'ยืนยัน Email เรียบร้อยแล้ว.กรุณาตั้งค่ารหัสผ่านใหม่ของท่าน');
		} elseif ($team_check) {
			$emailDetail = $this->db->get_where('tbl_team', ['email' => $email])->row_array();
			$token = md5(uniqid(rand(), true));
			$this->db->where('id', $emailDetail['id']);
			$this->db->update('tbl_team', ['forgot_password' => $token, 'time_forgot_password' => date('Y-m-d H:i:s')]);

			$this->sendEmailTeam($email, $emailDetail, $token);
			$this->session->set_flashdata('save_ss2', 'ยืนยัน Email เรียบร้อยแล้ว.กรุณาตั้งค่ารหัสผ่านใหม่ของท่าน');
		} else {
			$this->session->set_flashdata('del_ss2', 'ไม่พบ E-mail ที่ท่านกรอกมา กรุณาตรวจสอบใหม่ค่ะ!!');
		}
	}


	private function sendEmail($userEmail, $emailDetail, $token)
	{

		$subject = 'ตั้งค่ารหัสผ่านใหม่ Report';

		$message = '<body style="background: #fff;">';
		$message .= '<h2 style="text-align:center; margin:15px 0; color:#000000;">ตั้งค่ารหัสผ่านใหม่เพื่อใช้บริการ Report</h2>';
		$message .= '<h4 style="text-align:center; color:#fe58a4; margin-bottom:15px;">กดลิงค์ด้านล่างเพื่อกดไปตั้งค่ารหัสผ่านของคุณคะ</h4>';
		$message .= '<div style="text-align:center; width: 50%; font-size:18px; margin:0 auto 15px"></div>';
		$message .= '<div style="text-align:center; font-size:18px; margin-bottom:15px; color:#000000;"><a href="https://ip-soft.co.th/ipsoft/forget_reset?id=' . $emailDetail['id'] . '&forgot_password=' . $token . '">ตั้งค่ารหัสผ่านใหม่</a></div>';
		$message .= '</body>';

		// $message = 'https://deejungdelivery.com/reset_password?id='.$emailDetail['id'].'&forgot_password='.$token;

		//config email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_port'] = '2002';
		$config['smtp_user'] = 'infinityp.soft@gmail.com';
		$config['smtp_pass'] = 'P@Ssw0rd';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = 'TRUE';
		$config['smtp_crypto'] = 'tls';
		$config['newline'] = "\r\n";

		//$file_path = 'uploads/' . $file_name;
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('infinityp.soft@gmail.com');
		$this->email->to($userEmail);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype('html');
		if ($this->email->send() == true) {
			echo 'Done. Please confirm yourself in the email.';
		} else {
			echo 'There was an error confirming identity.';
		}
	}

	private function sendEmailTeam($userEmail, $emailDetail, $token)
	{

		$subject = 'ตั้งค่ารหัสผ่านใหม่ Report';

		$message = '<body style="background: #fff;">';
		$message .= '<h2 style="text-align:center; margin:15px 0; color:#000000;">ตั้งค่ารหัสผ่านใหม่เพื่อใช้บริการ Report</h2>';
		$message .= '<h4 style="text-align:center; color:#fe58a4; margin-bottom:15px;">กดลิงค์ด้านล่างเพื่อกดไปตั้งค่ารหัสผ่านของคุณคะ</h4>';
		$message .= '<div style="text-align:center; width: 50%; font-size:18px; margin:0 auto 15px"></div>';
		$message .= '<div style="text-align:center; font-size:18px; margin-bottom:15px; color:#000000;"><a href="https://ip-soft.co.th/ipsoft/forget_resetTeam?id=' . $emailDetail['id'] . '&forgot_password=' . $token . '">ตั้งค่ารหัสผ่านใหม่</a></div>';
		$message .= '</body>';

		// $message = 'https://deejungdelivery.com/reset_password?id='.$emailDetail['id'].'&forgot_password='.$token;

		//config email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_port'] = '2002';
		$config['smtp_user'] = 'infinityp.soft@gmail.com';
		$config['smtp_pass'] = 'P@Ssw0rd';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = 'TRUE';
		$config['smtp_crypto'] = 'tls';
		$config['newline'] = "\r\n";

		//$file_path = 'uploads/' . $file_name;
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('infinityp.soft@gmail.com');
		$this->email->to($userEmail);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype('html');
		if ($this->email->send() == true) {
			echo 'Done. Please confirm yourself in the email.';
		} else {
			echo 'There was an error confirming identity.';
		}
	}

	public function reset_passwordProcess()
	{
		$id = $this->input->post('id');
		$forgot_password = $this->input->post('token');
		$new_password = $this->input->post('new_password');
		$confirm_new_password = $this->input->post('confirm_new_password');

		if ($id == "" || empty($id) || $forgot_password == "" || empty($forgot_password)) {
			echo "<script>";
			echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
			echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
			echo "</script>";
		}

		if ($new_password != $confirm_new_password) {
			echo "<script>";
			echo "alert('New Password กับ Confirm New Password ไม่ตรงกันกรุณากรอกให้ตรงกันค่ะ');";
			echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
			echo "</script>";
		} else {
			$member = $this->db->get_where('tbl_user', ['id' => $id])->row_array();
			$dateTime_member = strtotime("+ 1 day", strtotime($member['time_forgot_password']));
			$dateTime_today = strtotime(date("Y-m-d H:i:s"));

			if ($dateTime_today >= $dateTime_member) {
				echo "<script>";
				echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
				echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
				echo "</script>";
			}

			if ($member['forgot_password'] != $forgot_password) {
				echo "<script>";
				echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
				echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
				echo "</script>";
			}
			$resultPassword = md5($confirm_new_password);

			$this->db->where('id', $id);
			$this->db->update('tbl_user', ['password' => $resultPassword]);

			echo "<script>";
			echo "alert('ยินดีด้วยค่ะ คุณตั้งค่ารหัสผ่านใหม่สำเร็จแล้วค่ะ');";
			echo "window.location='home';";
			echo "</script>";
		}
	}

	public function reset_passwordProcessTeam()
	{
		$id = $this->input->post('id');
		$forgot_password = $this->input->post('token');
		$new_password = $this->input->post('new_password');
		$confirm_new_password = $this->input->post('confirm_new_password');

		if ($id == "" || empty($id) || $forgot_password == "" || empty($forgot_password)) {
			echo "<script>";
			echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
			echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
			echo "</script>";
		}

		if ($new_password != $confirm_new_password) {
			echo "<script>";
			echo "alert('New Password กับ Confirm New Password ไม่ตรงกันกรุณากรอกให้ตรงกันค่ะ');";
			echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
			echo "</script>";
		} else {
			$member = $this->db->get_where('tbl_team', ['id' => $id])->row_array();
			$dateTime_member = strtotime("+ 1 day", strtotime($member['time_forgot_password']));
			$dateTime_today = strtotime(date("Y-m-d H:i:s"));

			if ($dateTime_today >= $dateTime_member) {
				echo "<script>";
				echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
				echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
				echo "</script>";
			}

			if ($member['forgot_password'] != $forgot_password) {
				echo "<script>";
				echo "alert('หมดเวลาสำหรับการกรอบรหัสผ่านใหม่แล้วค่ะ กรุณากลับไปกรอก E-mail ของท่านใหม่ที่หน้าลืมรหัสผ่านค่ะ');";
				echo "window.location='forget_step2?id=$id&forgot_password=$forgot_password';";
				echo "</script>";
			}
			$resultPassword = md5($confirm_new_password);

			$this->db->where('id', $id);
			$this->db->update('tbl_team', ['password' => $resultPassword]);

			echo "<script>";
			echo "alert('ยินดีด้วยค่ะ คุณตั้งค่ารหัสผ่านใหม่สำเร็จแล้วค่ะ');";
			echo "window.location='home';";
			echo "</script>";
		}
	}
}
