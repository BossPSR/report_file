<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rewards_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	function my_rewards()
	{
		$this->load->view('options/header_login');
		$this->load->view('my_rewards');
		$this->load->view('options/footer');

	}
	
	
}