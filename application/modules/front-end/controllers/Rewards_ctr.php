<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rewards_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reward_model');
	}

	function my_rewards()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['userId'] 	= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['cashback']   = $this->db->get_where('tbl_cashback', ['userId' => $data['userId']['idUser']])->result_array();

			$this->load->view('options/header_login');
			$this->load->view('my_rewards', $data);
			$this->load->view('options/footer');
		}
	}
	function my_rewards_team()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['teamid'] 	= $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
			$data['score']   = $this->db->get_where('tbl_score', ['teamid_sc' => $data['teamid']['IdTeam']])->result_array();
			$this->load->view('options/header_login');
			$this->load->view('my_rewards_team', $data);
			$this->load->view('options/footer');
		}
	}

	public function my_rewards_list()
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
				$data['reward']                = $this->Reward_model->list_reward($_user);
			} else {
				$data['reward']                = $this->Reward_model->search_reward($search_key, $_user);
			}
			$this->load->view('options/header_login');
			$this->load->view('my_rewards_list', $data);
			$this->load->view('options/footer');
			
		}
	}
}
