<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class After_Unlocks_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
	
		$this->load->view('options/header_login');
		$this->load->view('after_unlocks');
		$this->load->view('options/footer');
		
	}
	
	
}