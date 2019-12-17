<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_withdraw_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_withdraw()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_withdraw');
			$this->load->view('options/footer');
		}
	}
}
