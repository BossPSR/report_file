<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
		$data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('options/header_login');
		$this->load->view('package',$data);
		$this->load->view('options/footer');
		
	}	


	
	
}