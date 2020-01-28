<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
		$this->load->view('main');
	}

	public function mainbuysell()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('mainbuysell');
		}
	}
	

	
	
	
}