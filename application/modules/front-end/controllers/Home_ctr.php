<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
	
		
		$lang= $this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
		$this->lang->load($lang,$lang);
		$this->load->view('options/header_login');
		$this->load->view('home');
		$this->load->view('options/footer');
		
	}

	public function change()
	{  
		$type	= $this->input->get('type');
		$uri     = $this->input->get('uri');
		$this->session->set_userdata('lang',$type);
		redirect($uri);
		
	}
	
	
	
}