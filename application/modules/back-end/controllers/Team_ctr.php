<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
	
		$data['team'] = $this->db->get('tbl_team')->result_array();

		$this->load->view('options/header');
		$this->load->view('team_list',$data);
		$this->load->view('options/footer');
	
	}
	
	
}