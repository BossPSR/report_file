<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
	
		$this->load->view('options/header');
		$this->load->view('register');
		$this->load->view('options/footer');
		
	}	


	
	
}