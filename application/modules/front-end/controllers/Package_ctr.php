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
		if ($checkDate >= 0) {
			$this->session->set_flashdata('package_check', TRUE);
			redirect('home');
		}
		
		
		$paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['idUser']])->row_array();
		if (!empty($paypal)) {
			$datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
			$checkDate = DateDiff($datePaypal,date("Y-m-d"));

			// if ($data['userId']['free_forever'] == 1) {
			// 	$this->session->set_flashdata('package_check', TRUE);
			// 	redirect('home');
			// }


			if ($checkDate >= 0 || empty($paypal)) {
				$this->load->view('options/header_login');
				$this->load->view('package', $data);
				$this->load->view('options/footer');
			} else {
				$this->session->set_flashdata('package_check', TRUE);
				redirect('home');
			}
		} else {
			$this->load->view('options/header_login');
			$this->load->view('package', $data);
			$this->load->view('options/footer');
		}
	}
}
