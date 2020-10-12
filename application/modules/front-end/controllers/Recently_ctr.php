<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recently_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Recently_model');
	}

	public function index()
	{

		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$user_id = $user['id'];

			$data['recently']  = $this->Recently_model->recently($user_id);

			$this->load->view('options/header_login');
			$this->load->view('recently_accessed', $data);
			$this->load->view('options/footer');
		}
	}
}
