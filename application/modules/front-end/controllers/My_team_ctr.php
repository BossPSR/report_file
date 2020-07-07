<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_team_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_profile_team()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['team'] = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
			// $data['reject'] = $this->db->get_where('tbl_rejected', ['userId_rj' => $data['user']['id']])->row_array();
			$lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
			$this->lang->load($lang, $lang);
			$this->load->view('options/header_login');
			$this->load->view('my_profile_team', $data);
			$this->load->view('options/footer');
		}
	}

	function my_profile_team_update()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$id 			= $this->input->post('id');
			$name			= $this->input->post('name');
			$phone			= $this->input->post('phone');
			$country		= $this->input->post('country');
			$bank_account	= $this->input->post('bank_account');
			$password		= $this->input->post('password');
			$oldpassword	= $this->input->post('oldpassword');
			$c_password		= $this->input->post('c_password');

			$team = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
			// |xlsx|pdf|docx
			$config['upload_path'] =  'public/frontend/assets/img/profile/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '200480';
			$config['max_width'] = '5000';
			$config['max_height'] = '5000';
			$name_file = "phpto-" . time();
			$config['file_name'] = $name_file;

			$this->upload->initialize($config);

			$editdata = array();

			if ($_FILES['profile']['name']) {
				if ($this->upload->do_upload('profile')) {

					$gamber     = $this->upload->data();

					$editdata = array(
						'file_name'         => 'public/frontend/assets/img/profile/' . $gamber['file_name'],
					);

					$this->db->where('id', $id);
					$this->db->update('tbl_team', $editdata);
				}
			}

			if ($password == '' && $c_password == '') {
				$data = array(
					'name'				=> $name,
					'phone'				=> $phone,
					'country_id'		=> $country,
					'bank_account'		=> $bank_account,
				);
			} elseif (md5($oldpassword) != $team['password']) {

				$this->session->set_flashdata('del_ss2', 'Your password does not match the old password.');
				redirect('My-profile_team');
			} elseif ($password == $c_password) {
				$data = array(
					'phone'				=> $phone,
					'name'				=> $name,
					'country_id'		=> $country,
					'bank_account'		=> $bank_account,
					'password'			=> md5($password)
				);
			} else {
				$this->session->set_flashdata('error_pass', 'Password incorrect.Try again!!.');
				redirect('My-profile_team');
			}
			$this->db->where('id', $id);
			if ($this->db->update('tbl_team', $data)) {
				$this->session->set_flashdata('success_pro', 'Successfull.Change for my profile.');
				redirect('My-profile_team');
			} else {
				$this->session->set_flashdata('error_pro', 'Error for Change my profile.');
				redirect('My-profile_team');
				// echo "<script>";
				// // echo "swal('Error!', 'Error for Change my profile', 'error');";
				// // echo "alert('Error for Change my profile.');";
				// echo "window.location='My-profile_team';";
				// echo "</script>";
			}
		}
	}

	public function profile_team_edit()
	{
		$logo           = $this->input->get('logo');
		$team_logo 		= $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

		$data = array(

			'file_name'             => $logo,
		);
		$this->db->where('id', $team_logo['id']);
		$success = $this->db->update('tbl_team', $data);

		if ($success > 0) {
			$this->session->set_flashdata('save_ss2', 'Edit Profile  !!.');
		} else {
			$this->session->set_flashdata('del_ss2', 'Not Edit Profile');
		}
		redirect('My-profile_team');
	}
}
