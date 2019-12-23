<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unlocks_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Upload_model');
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$id = $this->input->get('id');
			$data['userId'] 		= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['Id_unlock']		= $this->Upload_model->unlocks($id);

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
