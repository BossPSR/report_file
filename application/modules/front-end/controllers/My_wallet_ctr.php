<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_wallet_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_wallet()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_wallet');
			$this->load->view('options/footer');
		}
	}
}
