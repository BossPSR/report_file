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
}
