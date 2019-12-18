<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Search_model');
	}

	public function index()
	{
		$this->load->view('options/header_login');
		$this->load->view('search');
		$this->load->view('options/footer');
	}

	public function get_search()
	{
		$keyword = $this->input->post('search');
		$select_item	= $this->input->post('select_item');


		$data['keyword'] 		= $this->input->post('search');
		if ($select_item == "") {
			$data['search_code'] = $this->Search_model->get_searchAll($keyword);
		}elseif($keyword == ""){
			$data['search_code'] = $this->Search_model->get_search_one($select_item);
		}elseif($select_item == "" && $keyword == ""){
			$data['search_code'] = $this->db->get('tbl_upload')->result_array();
		}
		else{
			$data['search_code'] = $this->Search_model->get_search($keyword, $select_item);
			
		}
		
		

		$this->load->view('options/header_login');
		$this->load->view('search', $data);
		$this->load->view('options/footer');
	}
}
