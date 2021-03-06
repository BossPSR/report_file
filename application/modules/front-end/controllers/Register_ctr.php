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
		$data['countries'] = $this->Countries_model->get_countries();
		if ($this->session->userdata('email') == '') {
			$this->load->view('options/header_login');
			$this->load->view('register', $data);
			$this->load->view('options/footer');
		} else {
			redirect('my-profile');
		}
	}

	public function register_success()
	{
		$countries           = $this->input->post('countries');
		$username            = $this->input->post('username');
		$lastname            = $this->input->post('lastname');
		$email_lang          = $this->input->post('email_lang');
		$email               = $this->input->post('email');
		$phone               = $this->input->post('phone');
		$c_password          = $this->input->post('c_password');
		$password            = $this->input->post('password');
		$created_at          = date('Y-m-d H:i:s');


		$username_check      = $this->Login_model->check_usre($email);
		$team_check      	 = $this->Login_model->team_check($email);
		$check_usre2         = $this->Login_model->check_usre2($username);

		$Y = substr(date('Y'), 2);
		$M = date('m');

		if ($username_check || $team_check) {

			$this->session->set_flashdata('del_ss2', 'อีเมล์นี้ถูกใช้งานแล้ว กรุณาลองใหม่อีกครั้ง');
			redirect('register');
		}
		if ($check_usre2) {

			$this->session->set_flashdata('del_ss2', 'ชื่อนี้ถูกใช้งานแล้ว กรุณาลองใหม่อีกครั้ง');
			redirect('register');
		}

		if ($password != $c_password) {
			$this->session->set_flashdata('del_ss', true);
			redirect('register', 'refresh');
		} else {
			$data = array(
				'country_id'        => $countries,
				'email'             => $email,
				'phone'             => $phone,
				'username'          => $username,
				'lastname_user'     => $lastname,
				'email_lang_user'   => $email_lang,
				'password'          => md5($password),
				'created_at'        => $created_at
			);

			if ($this->db->insert('tbl_user', $data)) {
				$last_id = $this->db->insert_id();
				// echo $sumStandard;

				$data2 = array(
					'idUser' => "LN" . $Y . $M  . $last_id
				);
				$this->db->where('id', $last_id);
				$success = $this->db->update('tbl_user', $data2);
				// print_r($success);
				// exit();

				if ($success > 0) {
					$this->sendEmail_success($email);
					$this->session->set_flashdata('success_regis_team', TRUE);
					redirect('package');
				} else {

					$this->session->set_flashdata('fail_regis_team', TRUE);
					redirect('home');
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

		$countries			= $this->input->post('countries');
		$title				= $this->input->post('title');
		$name				= $this->input->post('name');
		$lastname           = $this->input->post('lastname');
		$phone				= $this->input->post('phone');
		$email				= $this->input->post('email');
		$password			= $this->input->post('password');
		$c_password			= $this->input->post('c_password');
		$job				= $this->input->post('job');
		$educational		= $this->input->post('educational');
		$address			= $this->input->post('address');
		$amphoe				= $this->input->post('amphoe');
		$district			= $this->input->post('district');
		$province			= $this->input->post('province');
		$zipcode			= $this->input->post('zipcode');
		$bank_account		= $this->input->post('bank_account');
		$bank_name			= $this->input->post('bank_name');
		$bank_number		= $this->input->post('bank_number');
		$id_card_number		= $this->input->post('id_card_number');
		$line_id			= $this->input->post('line_id');
		$email_lang			= $this->input->post('email_lang');

		// Thai

		$username_check     = $this->Login_model->check_usre($email);
		$team_check      	= $this->Login_model->team_check($email);
		$check_usre2        = $this->Login_model->check_usre2($name);

		$teamCheck = $this->db->get_where('tbl_team', ['name' => $name])->row_array();

		if (!empty($teamCheck)) {
			$this->session->set_flashdata('fail_regis_teamName', TRUE);
			redirect('register-team');
			exit();
		}
		$teamCheck = $this->db->get_where('tbl_team', ['email' => $email])->row_array();
		$userCheck = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
		if (!empty($teamCheck) || !empty($userCheck) && !empty($teamCheck) && !empty($userCheck)) {
			$this->session->set_flashdata('fail_regis_teamEmail', TRUE);
			redirect('register-team');
			exit();
		}

		$Y = substr(date('Y'), 2);
		$M = date('m');

		if ($username_check || $team_check) {

			$this->session->set_flashdata('del_ss2', 'อีเมล์นี้ถูกใช้งานแล้ว กรุณาลองใหม่อีกครั้ง');
			redirect('register-team');
		}
		if ($check_usre2) {

			$this->session->set_flashdata('del_ss2', 'ชื่อนี้ถูกใช้งานแล้ว กรุณาลองใหม่อีกครั้ง');
			redirect('register-team');
		}

		if ($password != $c_password) {

			$this->session->set_flashdata('del_ss2', 'Passwords do not match !!');
			redirect('register-team');
		} else {
			if (!empty($_FILES['file_name_resume']['name'])) {

				$config['upload_path'] 		= 'uploads/resume/';
				// $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
				$config['allowed_types'] 	= '*';
				$config['max_size']    		= '99999'; // max_size in kb
				$config['file_name'] 		= $_FILES['file_name_resume']['name'];
				//Load upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				// File upload
				if ($this->upload->do_upload('file_name_resume')) {
					// Get data about the file
					$uploadData = $this->upload->data();
					$data = array(
						'country_id'		=> $countries,
						'title_name'		=> $title,
						'name'				=> $name,
						'lastname_user'		=> $lastname,
						'phone'				=> $phone,
						'email'				=> $email,
						'bank_account'		=> $bank_account,
						'educational'		=> $educational,
						'password'			=> md5($password),
						'resume_file'		=> $uploadData['file_name'],
						'created_at'		=> date('Y-m-d H:i:s'),
						'address_passport'  => $address,
						'amphoe'      		=> $amphoe,
						'district'      	=> $district,
						'province'     		=> $province,
						'zipcode'      		=> $zipcode,
						'bank_name'      	=> $bank_name,
						'line'      		=> $line_id,
						'email_lang_team'   => $email_lang,
						'passport'      	=> $id_card_number,
						'bank_number'      	=> $bank_number,
						'notify_admin'      => 0
					);
					if ($this->db->insert('tbl_team', $data)) {
						$team_id = $this->db->insert_id();

						if (!empty($_FILES['file_name_profile']['name'])) {
							$config2['upload_path'] 		= 'public/frontend/assets/img/profile/';
							$config2['allowed_types'] 		= '*';
							$config2['max_size']    		= '99999'; // max_size in kb
							$config2['file_name'] 			= $_FILES['file_name_profile']['name'];
							//Load upload library
							$this->load->library('upload', $config2);
							$this->upload->initialize($config2);
							if ($this->upload->do_upload('file_name_profile')) {
								$uploadData22 = $this->upload->data();
								$data22 = [
									'file_name'		=> 'public/frontend/assets/img/profile/' . $uploadData22['file_name'],
								];
								$this->db->where('id', $team_id);
								$this->db->update('tbl_team', $data22);
							}
						}

						if (!empty($_FILES['file_name_card_number']['name'])) {
							$config3['upload_path'] 		= 'uploads/card/';
							$config3['allowed_types'] 		= '*';
							$config3['max_size']    		= '99999'; // max_size in kb
							$config3['file_name'] 			= $_FILES['file_name_card_number']['name'];
							//Load upload library
							$this->load->library('upload', $config3);
							$this->upload->initialize($config3);
							if ($this->upload->do_upload('file_name_card_number')) {
								$uploadData33 = $this->upload->data();
								$data33 = [
									'file_name_passport' => 'uploads/card/' . $uploadData33['file_name'],
								];
								$this->db->where('id', $team_id);
								$this->db->update('tbl_team', $data33);
							}
						}

						if (!empty($_FILES['file_name_card_number_user']['name'])) {
							$config4['upload_path'] 		= 'uploads/carduser/';
							$config4['allowed_types'] 		= '*';
							$config4['max_size']    		= '99999'; // max_size in kb
							$config4['file_name'] 			= $_FILES['file_name_card_number_user']['name'];
							//Load upload library
							$this->load->library('upload', $config4);
							$this->upload->initialize($config4);
							if ($this->upload->do_upload('file_name_card_number_user')) {
								$uploadData44 = $this->upload->data();
								$data44 = [
									'file_name_user_passport' => 'uploads/carduser/' . $uploadData44['file_name'],
								];
								$this->db->where('id', $team_id);
								$this->db->update('tbl_team', $data44);
							}
						}

						if (!empty($_FILES['file_name_book_bank']['name'])) {
							$config5['upload_path'] 		= 'uploads/bookbank/';
							$config5['allowed_types'] 		= '*';
							$config5['max_size']    		= '99999'; // max_size in kb
							$config5['file_name'] 			= $_FILES['file_name_book_bank']['name'];
							//Load upload library
							$this->load->library('upload', $config5);
							$this->upload->initialize($config5);
							if ($this->upload->do_upload('file_name_book_bank')) {
								$uploadData55 = $this->upload->data();
								$data55 = [
									'file_name_bookbank' => 'uploads/bookbank/' . $uploadData55['file_name'],
								];
								$this->db->where('id', $team_id);
								$this->db->update('tbl_team', $data55);
							}
						}

						// IdTeam
						$dataTM = array(
							'IdTeam'		=> "TN" . $Y . $M . $team_id,
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

								$this->session->set_flashdata('success_regis_team', TRUE);
								redirect('home');
							} else {
								$this->session->set_flashdata('fail_regis_teamjob', TRUE);
								redirect('home');
							}
						} else {
							$this->session->set_flashdata('fail_regis_teamData', TRUE);
							redirect('home');
						}
						//endIdTeam

					}
				} else {
					$this->session->set_flashdata('fail_regis_teamResum', TRUE);
					redirect('home');
				}
			}else{
				echo '1';
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
			$this->session->set_flashdata('save_ss2', 'ยืนยัน Email เรียบร้อยแล้วกรุณาเช็ค Email ของท่าน.');
			redirect('forget_password');
		} elseif ($team_check) {
			$emailDetail = $this->db->get_where('tbl_team', ['email' => $email])->row_array();
			$token = md5(uniqid(rand(), true));
			$this->db->where('id', $emailDetail['id']);
			$this->db->update('tbl_team', ['forgot_password' => $token, 'time_forgot_password' => date('Y-m-d H:i:s')]);

			$this->sendEmailTeam($email, $emailDetail, $token);
			$this->session->set_flashdata('save_ss2', 'ยืนยัน Email เรียบร้อยแล้วกรุณาเช็ค Email ของท่าน.');
			redirect('forget_password');
		} else {
			$this->session->set_flashdata('del_ss2', 'ไม่พบ E-mail ที่ท่านกรอกมา กรุณาตรวจสอบใหม่ค่ะ!!');
			redirect('forget_password');
		}
	}

	private function sendEmail_success($email)
	{
		$subject = 'Welcome to Fileback Help. ';

		$message  = '<center>';
		$message .= '<div style="max-width:800px;">';
		$message .= '<div class="content" >';
		$message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
		$message .= 'Welcome to Fileback Help.';
		$message .= '</div>';
		$message .= '<div class="row">';
		$message .= '<p> You can enter the website here : https://www.ip-soft.co.th/ipsoft</p>';
		$message .= '</div>';
		$message .= '</center>';

		//config email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_port'] = '2002';
		$config['smtp_user'] = 'infinityp.soft@gmail.com';
		$config['smtp_pass'] = 'infinity_P23';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = 'TRUE';
		$config['smtp_crypto'] = 'tls';
		$config['newline'] = "\r\n";

		//$file_path = 'uploads/' . $file_name;
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('infinityp.soft@gmail.com');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype('html');
		$this->email->send();
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
		$config['smtp_pass'] = 'infinity_P23';  //sender's password
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
		$this->email->send();
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
		$config['smtp_pass'] = 'infinity_P23';  //sender's password
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
		$this->email->send();
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

	public function check_name()
	{
		$name = $this->input->post('name');
		$teamCheck = $this->db->get_where('tbl_team', ['name' => $name])->row_array();

		if (!empty($teamCheck)) {
			echo "data found";
			exit();
		}

		echo "data not found";
	}

	public function check_email()
	{
		$email = $this->input->post('email');
		$teamCheck = $this->db->get_where('tbl_team', ['email' => $email])->row_array();
		$userCheck = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
		if (!empty($teamCheck) || !empty($userCheck) && !empty($teamCheck) && !empty($userCheck)) {
			echo "data found";
			exit();
		}

		echo "data not found";
	}
}
