<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Feedback_model');
	}

	public function index()
	{


		$lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
		$sess = $this->db->get_where('tbl_team', ['email' => $this->session->userdata('email')])->row_array();

		if ($sess == true) {
			$as = $sess['IdTeam'];
			$data['check_read'] = $this->Feedback_model->feedback_c_read($as);
		} else {
		}


		$this->lang->load($lang, $lang);


		$this->load->view('options/header_login');
		if ($sess == true) {
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
		$teamId 			= $this->input->post('teamId');
		$status_feedback_read = $this->input->post('status_feedback_read');

		$data = array(
			'status_feedback_read'	=> $status_feedback_read,
		);
		$this->db->where('teamId', "TM" . $teamId);
		$success = $this->db->update('tbl_feedback', $data);

		echo $success;
	}
}
