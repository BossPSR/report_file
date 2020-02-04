<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rejected_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Rejected_model');
	}

	function my_rejected()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$user 					= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$_user					= $user['id'];
			$data['rejected'] 		= $this->Rejected_model->rejected($_user);
			$this->load->view('options/header_login');
			$this->load->view('rejected', $data);
			$this->load->view('options/footer');
		}
	}

	function my_reject()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$user 					= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$_user					= $user['id'];
			$data['rejected'] 		= $this->Rejected_model->rejected2($_user);
			$this->load->view('options/header_login');
			$this->load->view('my_reject', $data);
			$this->load->view('options/footer');
		}
	}
}
