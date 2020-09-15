<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['userId'] 	= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['package'] 	= $this->db->get('tbl_package')->result_array();
		$datePaypal = date("Y-m-d", strtotime($data['userId']['package_end']));
		$checkDate = DateDiff($datePaypal,date("Y-m-d"));
		if ($data['userId']['package_end'] !== null) {

			if ($checkDate < 0) {
				$this->session->set_flashdata('package_check', TRUE);
				redirect('home');
			}
		}

		$this->load->view('options/header_login');
		$this->load->view('package', $data);
		$this->load->view('options/footer');
	
	
	}
}
