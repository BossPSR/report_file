<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rejected_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_rejected()
	{
		if ($this->session->userdata('email') == '') { 
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('rejected');
			$this->load->view('options/footer');
		}
	}
}
