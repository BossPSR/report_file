<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->db->model('Upload_model');
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload_search()
	{
		$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$search_item			= $this->input->post('search_item');
		$select_item			= $this->input->post('select_item');
		$topic					= $this->input->post('topic');
		$create_at				= date('Y-m-d H:i:s');

		$data = array(
			'search_item'		=> $search_item,
			'select_item'		=> $select_item,
			'topic'				=> $topic,
			'userId'			=> $user['id'],
			'create_at'			=> $create_at
		);

		if ($this->db->insert('tbl_upload', $data)) {
			$insert_id = $this->db->insert_id();
			$this->session->set_flashdata('upload_ss', TRUE);
			redirect('upload_step2?insert_id=' . $insert_id);
		} else {
			$this->session->set_flashdata('upload_fail', TRUE);
			redirect('upload');
		}
	}

	public function My_upload_step2()
	{
		$data['insert_id'] = $this->input->get('insert_id');
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {

			$this->load->view('options/header_login');
			$this->load->view('upload_step2', $data);
			$this->load->view('options/footer');
		}
	}

	// File upload
	public function fileUpload()
	{
		$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$insert_id = $this->input->post('upload_id');
		if (!empty($_FILES['file']['name'])) {

			// Set preference
			$config['upload_path'] 		= 'uploads/Preview/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf';
			$config['max_size']    		= '1024'; // max_size in kb
			$config['file_name'] 		= $_FILES['file']['name'];

			//Load upload library
			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			// File upload
			if ($this->upload->do_upload('file')) {
				// Get data about the file
				$uploadData = $this->upload->data();

				$data = array(
					'userId'			=> $user['id'],
					'upload_id'			=> $insert_id,
					'file_name'			=> $uploadData['file_name'],
					'path'				=> 'uploads/Preview/' . $uploadData['file_name'],
					'create_at'			=> date('Y-m-d H:i:s'),
				);
				$this->db->insert('tbl_upload_preview', $data);
			}
		}
	}


	// File upload
	public function fileUploadfull()
	{

		if (!empty($_FILES['file']['name'])) {

			// Set preference
			$config['upload_path'] = 'uploads/full/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
			$config['max_size']    = '1024'; // max_size in kb
			$config['file_name'] = $_FILES['file']['name'];

			//Load upload library
			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			// File upload
			if ($this->upload->do_upload('file')) {
				// Get data about the file
				$uploadData = $this->upload->data();
			}
		}
	}

	public function delete_files() {
        $file_name = $this->input->post('file_name');
        $this->Upload_model->delete_files($file_name);
	}
	
}
