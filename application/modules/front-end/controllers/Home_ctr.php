<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
	
		$this->load->view('options/header');
		$this->load->view('home');
		$this->load->view('options/footer');
		
	}	


	
	
}