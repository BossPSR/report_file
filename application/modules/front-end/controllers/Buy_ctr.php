<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
        $this->load->view('options/header');
        $this->load->view('buy');
        $this->load->view('options/footer');
	}	
}