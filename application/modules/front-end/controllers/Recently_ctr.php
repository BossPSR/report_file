<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recently_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$this->load->view('options/header_login');
		$this->load->view('recently_accessed');
		$this->load->view('options/footer');
	}	

	
	
}