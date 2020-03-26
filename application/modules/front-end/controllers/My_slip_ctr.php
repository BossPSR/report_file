<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_slip_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slip_model');
	}

	function my_slip()
	{
		$ses 							= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$team 							= $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
		if ($team) {

			$_team							= $team['IdTeam'];
			$data['slip_team'] 			= $this->Slip_model->my_slip_team($_team);
		} else {
			$_user 							= $ses['idUser'];
			$data['slip_success'] 			= $this->Slip_model->my_slip_success($_user);
			$data['slip_not_success'] 		= $this->Slip_model->my_slip_not_success($_user);
		}

		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_slip', $data);
			$this->load->view('options/footer');
		}
	}
}
