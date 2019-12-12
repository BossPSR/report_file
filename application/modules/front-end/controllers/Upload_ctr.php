<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload_search()
	{
		$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$search_item			= $this->input->post('search_item');
		$search_category		= $this->input->post('search_category');
		$search_code			= $this->input->post('search_code');
		$create_at				= date('Y-m-d H:i:s');

		$data = array(
			'search_item'		=> $search_item,
			'userId'			=> $user['id'],
			'search_category'	=> $search_category,
			'search_code'		=> $search_code,
			'create_at'			=> $create_at
		);

		if ($this->db->insert('tbl_upload', $data)) {
			$this->session->set_flashdata('upload_ss', TRUE);
			redirect('upload_step2');
		} else {
			$this->session->set_flashdata('upload_fail', TRUE);
			redirect('upload');
		}
	}

	public function My_upload_step2()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('upload_step2');
			$this->load->view('options/footer');
		}
	}
}
