<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_wallet_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_wallet()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$user 				= $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
			$data['deposit'] 	= $this->db->get_where('tbl_deposit',['userId' => $user['id']])->result_array();
			$data['withdraw'] 	= $this->db->get_where('tbl_withdraw',['userId' => $user['id']])->result_array();
			$this->load->view('options/header_login');
			$this->load->view('my_wallet',$data);
			$this->load->view('options/footer');
		}
	}
}
