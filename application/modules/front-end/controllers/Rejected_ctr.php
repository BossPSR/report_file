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
			if (!empty($paypal) || $data['userId']['free_forever'] == 1) {
				$datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
				$checkDate = DateDiff($datePaypal, date("Y-m-d"));
				if ($checkDate < 0 || $data['userId']['free_forever'] == 1) {

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
				} else {
					redirect('package');
				}
			} else {
				redirect('package');
			}
		}
	}
}
