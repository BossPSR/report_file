<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_user_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_profile()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			// $data['reject'] = $this->db->get_where('tbl_rejected', ['userId_rj' => $data['user']['id']])->row_array();
			$lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
			$this->lang->load($lang, $lang);
			$this->load->view('options/header_login');
			$this->load->view('my_profile', $data);
			$this->load->view('options/footer');
		}
	}

	public function profile_edit()
	{
		$logo           = $this->input->get('logo');
		$user_logo = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$data = array(

			'file_name'             => $logo,
		);
		$this->db->where('id', $user_logo['id']);
		$success = $this->db->update('tbl_user', $data);

		if ($success > 0) {
			$this->session->set_flashdata('save_ss2', 'Edit Profile  !!.');
		} else {
			$this->session->set_flashdata('del_ss2', 'Not Edit Profile');
		}
		redirect('my-profile');
	}

	function profile_user_update()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$id 			= $this->input->post('id');
			$username		= $this->input->post('name');
			$passport		= $this->input->post('passport');
			$phone			= $this->input->post('phone');

			$password		= $this->input->post('password');
			$c_password		= $this->input->post('c_password');

			if ($password == '' && $c_password == '') {
				$data = array(
					'username'			=> $username,
					'passport'			=> $passport,
					'phone'				=> $phone,
				);
			} elseif ($password == $c_password) {
				$data = array(
					'username'			=> $username,
					'passport'			=> $passport,
					'phone'				=> $phone,
					'password'			=> md5($password)
				);
			} else {
				echo "<script>";
				echo "alert('Password incorrect.Try again!!');";
				echo "window.location='my-profile';";
				echo "</script>";
			}
			$this->db->where('id', $id);
			if ($this->db->update('tbl_user', $data)) {
				echo "<script>";
				echo "alert('Successfull!!.Change for my profile.');";
				echo "window.location='my-profile';";
				echo "</script>";
			} else {
				echo "<script>";
				echo "alert('Error for Change my profile.');";
				echo "window.location='my-profile';";
				echo "</script>";
			}
		}
	}

	public function accept_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');

		$data = array(
			'is_accept' => $status,
		);
		$this->db->where('userId', $id);
		$success = $this->db->update('tbl_upload_store', $data);
		echo $success;
	}

	public function read_userNotify()
	{
		$user_id = $this->input->get('user_id');
		$user = $this->db->get_where('tbl_user', ['id' => $user_id])->row_array();

		$upload_store_id = $this->input->get('upload_store_id');
		if (!empty($upload_store_id)) {
			foreach ($upload_store_id as $key => $upload_storeId) {

				$this->db->where('id', $upload_storeId);
				$this->db->update('tbl_upload_store', ['notify_user' => 1]);
			}
		}

		$upload_order_id = $this->input->get('upload_order_id');
		if (!empty($upload_order_id)) {
			foreach ($upload_order_id as $key => $upload_orderId) {

				$this->db->where('id', $upload_orderId);
				$this->db->update('tbl_upload_order', ['notify_user' => 1]);
			}
		}

		$upload_store_reject_id = $this->input->get('upload_store_reject_id');
		if (!empty($upload_store_reject_id)) {
			foreach ($upload_store_reject_id as $key => $upload_store_rejectId) {

				$this->db->where('id', $upload_store_rejectId);
				$this->db->update('tbl_upload_store', ['notify_user' => 1]);
			}
		}

		$upload_order_reject_id = $this->input->get('upload_order_reject_id');
		if (!empty($upload_order_reject_id)) {
			foreach ($upload_order_reject_id as $key => $upload_order_rejectId) {

				$this->db->where('id', $upload_order_rejectId);
				$this->db->update('tbl_upload_order', ['notify_user' => 1]);
			}
		}



		$result = [];
		$result['successfully'] = true;
		$result['message'] = "read successfully";
		$result['count'] = 0;

		echo json_encode($result);
	}


	public function read_teamNotify()
	{

		$team_id = $this->input->get('team_id');
		$team = $this->db->get_where('tbl_team', ['id' => $team_id])->row_array();

		$feed_back_id = $this->input->get('feed_back_id');
		if (!empty($feed_back_id)) {
			foreach ($feed_back_id as $key => $feed_backId) {

				$this->db->where('id', $feed_backId);
				$this->db->update('tbl_feedback', ['notify_team' => 1]);
			}
		}

		$upload_order_delivery_id = $this->input->get('upload_order_delivery_id');
		if (!empty($upload_order_delivery_id)) {
			foreach ($upload_order_delivery_id as $key => $upload_order_deliveryId) {

				$this->db->where('id', $upload_order_deliveryId);
				$this->db->update('tbl_upload_order', ['notify_team' => 1]);
			}
		}

		$result = [];
		$result['successfully'] = true;
		$result['message'] = "read successfully";
		$result['count'] = 0;

		echo json_encode($result);
	}
}
