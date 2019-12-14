<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unlocks_ctr extends CI_Controller
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
			$data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('options/header_login');
			$this->load->view('unlocks', $data);
			$this->load->view('options/footer');
		}
	}

	// function user_follow()
	// {
	// 	$userId = $this->input->get('userId');
	// }
}
