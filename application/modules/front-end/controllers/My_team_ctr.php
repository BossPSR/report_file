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
			$passport		= $this->input->post('passport');
			$phone			= $this->input->post('phone');
			$country		= $this->input->post('country');
			$bank_account	= $this->input->post('bank_account');

			$password		= $this->input->post('password');
			$c_password		= $this->input->post('c_password');

			if ($password == '' && $c_password == '') {
				$data = array(
					'passport'			=> $passport,
					'phone'				=> $phone,
					'country_id'		=> $country,
					'bank_account'		=> $bank_account,
				);
			} elseif ($password == $c_password) {
				$data = array(
					'passport'			=> $passport,
					'phone'				=> $phone,
					'country_id'		=> $country,
					'bank_account'		=> $bank_account,
					'password'			=> md5($password)
				);
			} else {
				echo "<script>";
				echo "alert('Password incorrect.Try again!!');";
				echo "window.location='My-profile_team';";
				echo "</script>";
			}
			$this->db->where('id', $id);
			if ($this->db->update('tbl_team', $data)) {
				echo "<script>";
				echo "alert('Successfull!!.Change for my profile.');";
				echo "window.location='My-profile_team';";
				echo "</script>";
			} else {
				echo "<script>";
				echo "alert('Error for Change my profile.');";
				echo "window.location='My-profile_team';";
				echo "</script>";
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
