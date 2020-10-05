<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rejected_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Rejected_model');
		$this->load->model('Search_model');
	}

	function my_rejected()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$user 					= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$_user					= $user['idUser'];
			$data['rejected'] 		= $this->Rejected_model->rejected($_user);
			$this->load->view('options/header_login');
			$this->load->view('rejected', $data);
			$this->load->view('options/footer');
		}
	}

	function my_reject()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['idUser']])->row_array();
			$datePaypal = date("Y-m-d", strtotime($data['userId']['package_end']));
			$checkDate = DateDiff(date("Y-m-d"), $datePaypal);
			if ($data['userId']['package_end'] !== null) {

				if ($checkDate < 0) {
					$this->session->set_flashdata('package_check', TRUE);
					redirect('home');
				}
			}

			$search_key            	= $this->input->get('search_key');
			$user 					= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$_user					= $user['idUser'];
			if ($search_key == '' || $search_key == null) {
				$data['rejected'] 		= $this->Rejected_model->rejected2($_user);
			} else {
				$data['rejected']		= $this->Search_model->search_date_reject($search_key, $_user);
			}
			$this->load->view('options/header_login');
			$this->load->view('my_reject', $data);
			$this->load->view('options/footer');
		}
	}
}
