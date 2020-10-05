<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cashback_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Cashback_model');
		$this->load->model('Search_model');
	}

	function my_cashback()
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
			
			$search_key                     = $this->input->get('search_key');
			$user                           = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$_user                          = $user['idUser'];
			if ($search_key == '' || $search_key == null) {
				$data['cashback']                = $this->Cashback_model->list_cashback($_user);
			} else {
				$data['cashback']                = $this->Cashback_model->search_cashback($search_key, $_user);
			}
			$this->load->view('options/header_login');
			$this->load->view('my_cashback', $data);
			$this->load->view('options/footer');
		}
	}
}
