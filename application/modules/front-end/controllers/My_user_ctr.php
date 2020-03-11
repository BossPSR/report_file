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
		$user = $this->db->get_where('tbl_user',['id' => $user_id])->row_array();
		$upload_store_id = $this->input->get('upload_store_id');
		foreach ($upload_store_id as $key => $upload_storeId) {
			
			$this->db->where('id',$upload_storeId);
			$this->db->update('tbl_upload_store',['notify_user' => 1]);

		}
		// $this->db->where('userId',$user_id);
		// $this->db->update('tbl_upload_order',['reject_read' => 1]);


		// $dataList = [];

		// $storeList = $this->db->order_by('update_at','DESC')->get_where('tbl_upload_store',['userId' => $user_id])->result_array();
		// $orderList = $this->db->order_by('update_at','DESC')->get_where('tbl_upload_order',['userId' => $user_id])->result_array();

		// foreach ($storeList as $key => $storeDetail) {
		// 	$dataList['storeList'][$key] = $storeDetail['update_at'];
		// }

		// foreach ($orderList as $key => $orderDetail) {
		// 	$dataList['orderList'][$key] = $orderDetail['update_at'];
		// }

		$result = [];
		$result['successfully'] = true;
		$result['message'] = "read successfully";

		echo json_encode($result);
	}
}
