<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Feedback_model');
		$this->load->model('Users_model');
	}

	public function index()
	{

		$lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
		$sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();
		$ีuser = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		if ($sess == true) {
			$as = $sess['IdTeam'];
			$data['check_read'] 		= $this->Feedback_model->feedback_c_read($as);
			$data['check_morefile']		= $this->Users_model->check_GT($as);
		}

		if ($ีuser == true) {
			$us = $ีuser['idUser'];
			$sq = date('Y-m-d H:i:s');
			$data['checkorder'] = $this->Users_model->check_order($us, $sq);
		}

		$this->lang->load($lang, $lang);


		$this->load->view('options/header_login');
		if ($sess == true) {
			$this->load->view('home', $data);
		} elseif ($ีuser == true) {
			$this->load->view('home', $data);
		} else {
			$this->load->view('home');
		}
		$this->load->view('options/footer');
	}

	public function change()
	{
		$type	= $this->input->get('type');
		$uri     = $this->input->get('uri');
		$this->session->set_userdata('lang', $type);
		redirect($uri);
	}

	public function check_c_feed()
	{
		$teamId 			  = $this->input->post('teamId');
		$status_feedback_read = $this->input->post('status_feedback_read');

		$data = array(
			'status_feedback_read'	=> $status_feedback_read,
		);
		$this->db->where('teamId', $teamId);
		$success = $this->db->update('tbl_feedback', $data);

		echo $success;
	}

	function check_see_more_file()
	{
		$teamId 	= $this->input->post('teamId');
		$TM			= $this->db->get_where('tbl_upload_team', ['teamId' => 'TM' . $teamId])->result_array();
		foreach ($TM as $TM) {
			$orderGT 	= $this->db->get_where('tbl_morefile_GT', ['order_id' => $TM['order_id']])->row_array();
			$data = array(
				'status_see_more_file_team'	=> 11,
			);
			$this->db->where('order_id', $orderGT['order_id']);
			$this->db->where('status_more_file', '1');
			$success = $this->db->update('tbl_morefile_GT', $data);
			echo $success;
		}
	}

	function congratulations()
	{
		$teamid = $this->input->post('TM');

		$data = array(
			'status_cl' => 1,
		);
		$this->db->where('teamid', $teamid);
		$success = $this->db->update('tbl_cancel', $data);
		echo $success;
	}

	function bonus_check()
	{
		$teamid = $this->input->post('teamid');
		$data = array(
			'status_sc' => 1,
		);
		$this->db->where('teamid_sc', $teamid);
		$success = $this->db->update('tbl_score', $data);

		echo $success;
	}
}
