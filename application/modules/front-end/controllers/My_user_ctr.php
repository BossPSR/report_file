<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_user_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_profile()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('options/header');
			$this->load->view('my_profile',$data);
			$this->load->view('options/footer');
		}
	}
}
