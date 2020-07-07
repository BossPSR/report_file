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
			$phone			= $this->input->post('phone');
			$password		= $this->input->post('password');
			$oldpassword	= $this->input->post('oldpassword');
			$c_password		= $this->input->post('c_password');

			$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
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
					$this->db->update('tbl_user', $editdata);
				}
			}


			if ($password == '' && $c_password == '') {
				$data = array(
					'username'			=> $username,
					'phone'				=> $phone,
				);
			} elseif (md5($oldpassword) != $user['password']) {

				$this->session->set_flashdata('del_ss2', 'Your password does not match the old password.');
				redirect('my-profile');
			} elseif ($password == $c_password) {
				$data = array(
					'username'			=> $username,
					'phone'				=> $phone,
					'password'			=> md5($password)
				);
			} else {
				$this->session->set_flashdata('del_ss2', 'Password incorrect.Try again!!');
				redirect('my-profile');
			}
			$this->db->where('id', $id);
			if ($this->db->update('tbl_user', $data)) {
				$this->session->set_flashdata('save_ss2', 'Successfull!!.Change for my profile.');
				redirect('my-profile');
			} else {
				$this->session->set_flashdata('del_ss2', 'Error for Change my profile.');
				redirect('my-profile');
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

		$upload_deliver_id = $this->input->get('upload_deliver_id');
		if (!empty($upload_deliver_id)) {
			foreach ($upload_deliver_id as $key => $upload_deliver_id) {

				$this->db->where('id', $upload_deliver_id);
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
